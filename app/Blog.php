<?php namespace App;

class Blog extends \Eloquent {
    //put your code here
    protected  $table = 'blog';

    protected $guarded = ['id'];


    function getUrl(){
        return \Config::get('app.url') .'/blog/' . $this->slug;
    }

    public function getUrlAttribute()
    {
        return $this->getUrl();
    }

    public function getHtmlAttribute()
    {
        return \Markdown::text($this->content);
    }

    public function getDescription($length = 300)
    {
        $html = $this->html;
        $text = preg_replace('|\<h2.*\>(.*\n*)\</h2\>|isU', '', $html);
        $text = strip_tags(preg_replace('|\<h3.*\>(.*\n*)\</h3\>|isU', '', $text));
        $textArray = explode('. ', $text);
        $description = '';
        foreach($textArray as $sentence) {
            $description .= $sentence.'. ';
            if(strlen($description) > ($length-2)) {
                $description = str_replace($sentence.'. ', '', $description);
                break;
            }
        }
        return empty($description) ? str_limit(trim($text), 160) : trim($description);

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
