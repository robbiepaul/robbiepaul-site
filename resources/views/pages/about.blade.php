@extends('layouts.default')

@section('content')

    @include('layouts.partials.carousel', [
        'title' => 'About me',
        'tagline' => "I'm a $age year old full stack web developer based in London, England",
        'image' => '/images/me_beach.jpg' ])

    <div id="page-content">

        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <h2>What do I do?</h2>
                    <p>I'm a problem solver, code writer and keyboard breaker. Through constructing well thought-out systems and processes, effectively communicating business needs while taking in to consideration the end user's experience.</p>
                    <p>Some people are designers, some people are developers. In order to create the best applications it's essential to be good at both. Understanding both sides enables me to see the big picture and make great websites.</p>
                    <h2>Background</h2>
                    <p>I created my first ever website back in 1996 on Tripod. I taught myself HTML by viewing the source of websites and deconstructing the markup. It was the days of the "internet bubble" and I landed a job at a company called <em>5-Online</em> as a <em>Junior Web Designer</em> when I was 16. </p>
                    <p>After a valuable year in the industry I left to pursue college and university. In 2010 I started work as a <em>Developer</em> for now defunct UK charity <em>Film Education</em>. Whilst working at <em>Film Education</em> I contributed to several national <a href="/projects">projects</a>.</p>
                    <p>I'm now <em>Head of Technology</em> at <em>Moshel Ltd</em>. We've just launched an exciting new website, <a href="https://morethanabusinesscard.com" target="_blank">More than a business card</a>.</p>
                    <p class="call_to_action pjax">
                        <a href="/skills" class="read-more">Take a look at my skills →</a>
                    </p>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive" src="/images/about1.png" alt="coding" style="margin-top:55px" />
                    <aside class="text-muted bg-info center-block" id="aboutme-info" style="">
                        <h4 class="subsection-heading">Certifications</h4>
                        <ul>
                            <li><a target="_blank" href="http://www.zend.com/en/yellow-pages/ZEND025596">Zend Certified PHP Engineer</a></li>
                        </ul>
                        <h4 class="subsection-heading">Training / courses</h4>
                        <ul>
                            <li><a target="_blank" href="http://www.zend.com/en/services/training/security">Security in your PHP applications</a> by Zend</li>
                            <li><a target="_blank" href="https://s3.amazonaws.com/verify.edx.org/downloads/80a6757ed3934bdba8f4e5d11b28f505/Certificate.pdf">Software as a Service</a> by BerkeleyX</li>
                        </ul>
                    </aside>
                 </div>
            </div>

        </div>
    </div>

@stop


