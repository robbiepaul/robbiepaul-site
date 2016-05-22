<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {!! SEO::generate() !!}
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="/assets/js/html5shiv.js"></script>
      <script src="/assets/js/respond.min.js"></script>
    <![endif]-->
    <link href="/build/css/everything.css" rel="stylesheet">
    @include('layouts.partials.favicon')
    @include('layouts.partials.tracking')
  </head>
  <body>
       <div class="navbar-wrapper">
        <div class="container">

               <div class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                       <div class="navbar-header">
                           <img src="/build/images/logo.png" id="lgo" />

                           <a class="navbar-brand" href="/">Robbie Paul<br/><span><span class="brand_design">Design</span> + <span class="brand_development">Development</span></span></a>
                           <button type="button" class="navbar-btn" id="menu">
                               <i class="icon-minusx"></i>
                               <i class="icon-minusx"></i>
                               <i class="icon-minusx"></i>
                               <span class="og-open"></span>
                           </button>
                           <button type="button" class="navbar-btn" id="menuClose">
                               <span class="og-close"></span>
                           </button>
                           <div id="topMenuArea">
                               <ul class="nav nav-pills nav-justified js-pjax-menu" id="topMenu">
                                   @include('layouts.partials.nav')
                               </ul>
                           </div>
                       </div>
                   </div>

                   <div id="menuArea">
                       <ul class="nav nav-pills nav-stacked js-pjax-menu" id="mainMenu">
                           @include('layouts.partials.nav')
                       </ul>
                       <div id="socialLinks">
                           <h4>Connect with me</h4>
                           <ul class="socialIcons">
                               <li class="facebook-si"><a href="http://www.facebook.com/robbiepaul"><i class="icon-facebook"></i></a></li>
                               <li class="twitter-si"><a href="http://www.twitter.com/robbiepaulco"><i class="icon-twitter"></i></a></li>
                               <li class="linkedin-si"><a href="http://uk.linkedin.com/in/robbiepaul/"><i class="icon-linkedin"></i></a></li>
                               <li class="github-si"><a href="https://github.com/robbiepaul"><i class="icon-github"></i></a></li>
                               <li class="stackoverflow-si"><a href="http://stackoverflow.com/users/942846/robbiep"><i class="icon-stackexchange"></i></a></li>
                           </ul>

                        </div>
                    </div>
               </div>

            </div>

           </div>
           <div id="pjax-container">

            @yield('content')

            </div>

            <footer id="footer">
                <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h4 class="foot-title">Navigation</h4>
                        <ul class="nav-links js-pjax-menu">
                           @include('layouts.partials.nav')
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h4 class="foot-title">Social</h4>
                        <ul class="nav-links">
                           <li><a href="http://www.facebook.com/robbiepaul" target="_blank">Facebook</a></li>
                           <li><a href="http://www.twitter.com/robbiepaulco" target="_blank">Twitter</a></li>
                           <li><a href="http://uk.linkedin.com/in/robbiepaul/" target="_blank">LinkedIn</a></li>
                           <li><a href="https://github.com/robbiepaul" target="_blank">GitHub</a></li>
                           <li><a href="http://stackoverflow.com/users/942846/robbiep" target="_blank">StackOverflow</a></li>

                        </ul>
                    </div>

                    <div class="col-md-4">
                        <h4 class="foot-title">Subscribe</h4>
                         <ul class="nav-links">
                         <li>
                         {{ Form::open(['url' => '/newsletter']) }}
                            {{ Form::text('email',null,['class'=>'subscribe-text','placeholder' => 'Email address']) }}{{ Form::submit('Go',['class'=>'subscribe-btn']) }}
                         {{ Form::close() }}
                         </li>
                         <li class="copyright-line"><small>&copy; Copyright Robbie Paul {{ date('Y') }}. All rights reserved.</small></li>
                         </ul>
                    </div>
                    </div>

                </div>
            </footer>



    <script type="text/javascript" src="//use.typekit.net/try7qcn.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

    <script type="text/javascript" src="/build/js/everything.js"></script>

</body>
</html>
