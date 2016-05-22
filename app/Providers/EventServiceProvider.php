<?php

namespace App\Providers;

use App\Blog;
use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\SomeEvent' => [
            'App\Listeners\EventListener',
        ],
    ];

    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher  $events
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        parent::boot($events);

        Blog::saving(function($blog)
        {
            $blog->slug = str_slug($blog->title);
            $image = \Image::make(public_path('uploads/'.$blog->image))->resize(350, 225);

            $image->save(public_path('uploads/'.$blog->thumb));
        });


    }
}
