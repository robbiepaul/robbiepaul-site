<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use SEOMeta;
use SEO;

class BlogController extends BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /blog
	 *
	 * @return Response
	 */
	public function getIndex()
	{
            $mostRecommended = \App\Blog::mostRecommended();
            $last            = \App\Blog::lastPosts(4);

            SEO::setTitle('Latest blog posts');
            SEO::setDescription('Tips and tutorials how to improve your web dev skills');
            SEO::addImages(url('build/images/desk3.jpg'));
            SEO::opengraph()->addProperty('type', 'articles');
            SEO::opengraph()->addProperty('url', url()->current());


        return View('blog.index',array('title'=>"Welcome ",'mostRecommended'=>$mostRecommended,'last'=>$last));
	}

    public static function seoUrl($string) {
        //Lower case everything
        $string = strtolower($string);
        //Make alphanumeric (removes all other characters)
        $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
        //Clean up multiple dashes or whitespaces
        $string = preg_replace("/[\s-]+/", " ", $string);
        //Convert whitespaces and underscore to dash
        $string = preg_replace("/[\s_]/", "-", $string);
        return $string;
    }
	/**
	 * Display the specified resource.
	 * GET /blog/{id}/title
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getPost($slug)
	{
            $post = \App\Blog::whereSlug($slug)->first();
            if($post == NULL){
                App::abort(404);
            }
            $description = str_limit(strip_tags($post->html));

            SEO::setTitle($post->title);
            SEO::setDescription($description);
            SEO::addImages(url('uploads/'.$post->thumb));
            SEO::opengraph()->addProperty('type', 'article');
            SEO::opengraph()->addProperty('url', $post->getUrl());
            SEO::metatags()->addMeta('article:published_time', $post->created_at->toW3CString());
            SEO::metatags()->addMeta('article:section', 'blog');
            if($post->previousPost()) SEO::metatags()->setPrev($post->previousPost()->getUrl());
            if($post->nextPost()) SEO::metatags()->setNext($post->nextPost()->getUrl());

            return View('blog.post',array('title'=>$post['title'],'post'=>$post));
	}
        
    /**
     * Add the point to  
     * 
     * 
     */ 
    public function getShare($id,$social)
    {
        $url = '';
        $post = \App\Blog::find($id);
        if($post == NULL){
            App::abort(404);
        }

        // add social point if it is not robot
        if (!isset($_SERVER['HTTP_USER_AGENT']) && !preg_match('/bot|crawl|slurp|spider/i', $_SERVER['HTTP_USER_AGENT'])) {
            $post->socialPoint ++;
            $post->save();
        }
        switch ($social){
            case 'twitter' :
                $url  = 'https://twitter.com/home?status=';
                $url .= $post['title'] . ' ' . $post->getUrl();
            break;
            case 'facebook' :
                $url  = 'https://www.facebook.com/sharer/sharer.php?u=';
                $url .=  $post->getUrl();
            break;
            case 'googlePlus' :
                $url  = 'https://plus.google.com/share?url=';
                $url .= $post->getUrl();
            break;
            case 'linkedIn' :
                $url  = 'https://www.linkedin.com/shareArticle?mini=true&';
                $url .= 'url='.$post->getUrl().'&title='.$post['title'].'&summary=&source=';
            break;          
        }
        return \Redirect::to($url);
    }



}
