@extends('layouts.default')

@section('content')

    @include('layouts.partials.carousel', [
        'title' => 'Projects',
        'tagline' => "Past &amp; Present",
        'image' => '/build/images/desk1.jpg' ])

    <div id="page-content">

        <div class="container">
            <div class="row">

                <div class="col-lg-12">


                           <ul id="og-grid" class="og-grid">
                   					<li>
                   						<a name="pagemeta" href="https://pagemeta.io/" data-largesrc="/build/images/projects/pagemeta-full.png" data-title="PageMeta API" data-description="<h6 class='date-posted'><span class='text-muted'>Date</span> March 2016</h6><p><em>A simple API to parse important meta and related data from a web page.</em></p><p>I needed an API to return meta data from web pages for a project I was working on. I couldn't find one that met our needs, so I created one using <a href='https://lumen.laravel.com/' target='_blank'>Lumen</a>.</p>" class="thumbImg">
                   							<img src="/build/images/projects/pagemeta-thumb.png" alt="PageMeta API" class="img-responsive">
                   						</a>
                   					</li>
                   					<li>
                   						<a name="cloudconvert-laravel" href="https://github.com/robbiepaul/cloudconvert-laravel" data-largesrc="/build/images/projects/cloudconvert-laravel-full.png" data-title="CloudConvert Laravel" data-description="<h6 class='date-posted'><span class='text-muted'>Date</span> October 2014</h6><p><em>A Laravel wrapper for the CloudConvert API</em></p><p>At the time there wasn't a decent PHP package to interface with the <a href='https://cloudconvert.com/' target='_blank'>CloudConvert API</a>. I wanted to create a Laravel package that had a fluent interface and was as easy-to-use as possible.</p>" class="thumbImg">
                   							<img src="/build/images/projects/cloudconvert-laravel-thumb.png" alt="" class="img-responsive">
                   						</a>
                   					</li>
                   					<li>
                   						<a name="morethanabusinesscard" href="https://morethanabusinesscard.com" data-largesrc="/build/images/projects/morethanabusinesscard-full.png" data-title="More than a business card" data-description="<h6 class='date-posted'><span class='text-muted'>Date</span> November 2015</h6><p><em>Online platform and mobile app for business cards</em></p><p>I was the primary developer working on this platform and led a small team that redesigned it. We used Laravel Framework for the online platform and Ionic Framework (Angular/Cordova) for the mobile app.</p>" class="thumbImg">
                   							<img src="/build/images/projects/morethanabusinesscard-thumb.png" alt="" class="img-responsive">
                   						</a>
                   					</li>
								   <li>
									   <a name="noden" href="#" data-largesrc="/build/images/projects/noden-full.png" data-title="Noden Guitars DB" data-description="<h6 class='date-posted'><span class='text-muted'>Date</span> March 2016</h6><p><em>Database for Guitar repair workshop</em></p><p>I designed and built this database for a friend's business using Laravel and AngularJS.</p><p>It lets him log incoming jobs, see due jobs, issue invoices, send SMS notifications, enables his employees to track how much time they spend on each job.</p><p>Noden Guitars DB v2.0 is still work in progress</p>" class="thumbImg">
										   <img src="/build/images/projects/noden-thumb.png" alt="" class="img-responsive">
									   </a>
								   </li>
                   					<li>
                   						<a name="bamzonia" href="http://bamzonia.com" data-largesrc="/build/images/projects/bamzonia-full.png" data-title="Bamzonia" data-description="<h6 class='date-posted'><span class='text-muted'>Date</span> March 2013</h6><p><em>A game for Primary School students to learn personal financial education</em></p><p>I was lucky enough to work on the relaunch of this platform, my role was to convert legacy PHP code in to modern readable OOP, coded the custom WordPress theme and redevelop the interface to the multiple choice quiz.</p>" class="thumbImg">
                   							<img src="/build/images/projects/bamzonia-thumb.png" alt="" class="img-responsive">
                   						</a>
                   					</li>

								   <li>
									   <a name="kaizen" href="#" data-largesrc="/build/images/projects/kaizen-full.png" data-title="Kaizen" data-description="<h6 class='date-posted'><span class='text-muted'>Date</span> January 2012</h6><p><em>CRM and Database for charity Film Education</em></p><p>I was the primary developer working on the new custom CRM for Film Education to replace their ancient FileMaker database. It allowed research on teacher's needs, had a comprehensive booking system for film screenings, sending targeted custom mail-outs and it had a robust report tool.</p><p>Unfortunately Film Education is no longer an active entity.</p>" class="thumbImg">
										   <img src="/build/images/projects/kaizen-thumb.png" alt="" class="img-responsive">
									   </a>
								   </li>

                   				</ul>

								<p class="call_to_action pjax text-center">
									<a href="/contact" class="read-more">Get in touch with me →</a>
								</p>
                     

                </div>

            </div>

        </div>
    </div>

@stop


