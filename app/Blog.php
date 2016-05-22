<?php namespace App;

class Blog extends \Eloquent {
    //put your code here
    protected  $table = 'blog';

    protected $guarded = ['id'];


    function getUrl(){
        return \Config::get('app.url') .'/blog/' . $this->slug;
    }

    public function getThumbAttribute()
    {
        $nameArray = explode('.', $this->image);
        $ext = array_pop($nameArray);
        return implode('.', $nameArray).'_thumb.'.$ext;
    }
    
    public static  function mostRecommended(){
        return  self::orderBy('socialPoint','desc')->where('public', 1)->take(1)->get()->first();
    }
    public function nextPost(){
        // get next post
        return self::where('id', '>', $this->id)->where('public', 1)->orderBy('id','asc')->take(1)->get()->first();
    }
    public  function previousPost(){
        // get previous  post 
        return self::where('id', '<', $this->id)->where('public', 1)->orderBy('id','desc')->take(1)->get()->first();
    }
    
    public static  function lastPosts($number = 10) {

        return self::orderBy('created_at','desc')->where('public', 1)
                ->simplePaginate($number);


    }
}
