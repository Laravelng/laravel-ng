<?php

Route::get('/', function () {
    $meetups   = (new Meetups)->getEvents();

    // TODO - Should put this in a db
    $resources = [
        [
            'name'        => 'Laravel.com',
            'url'         => 'http://laravel.com/',
            'description' => 'The home page for Laravel',
            'image' => '/img/laravel.png'
        ],
        [
            'name'        => 'LaraJobs',
            'url'         => 'http://larajobs.com/?ref=hp9b6',
            'description' => 'The best place to find Laravel (and other) programming jobs.',
            'image' => '/img/larajobs.jpg'
        ],
        [
            'name'        => 'Laravel.IO',
            'url'         => 'http://laravel.io/forum',
            'description' => 'Forums, chat, and podcasts about Laravel and the Laravel community',
            'image' => '/img/laravelio.png'
        ],
        [
            'name' => 'Laravel News',
            'url' => 'http://laravel-news.com/',
            'description' => 'Blog and email newsletters with links to tons of great resources',
            'image' => '/img/laravelnews.png'
        ],
        [
            'name' => 'Laracasts',
            'url' => 'https://laracasts.com/',
            'description' => 'Short video tutorials about Laravel and more. Almost required watching for all Laravel/PHP devs.',
            'image' => '/img/laracasts.png'
        ],
        [
            'name' => 'Laravel Application Development Cookbook',
            'url' => 'http://bit.ly/laravelcookbook',
            'description' => 'Written by Terry (Laravel ATX meetup organizer), with short bits of usable Laravel code',
            'image' => '/img/cookbook.png'
        ]

    ];
    $getMeetups = DB::table('meetups')->get();
    $data = ['meetups' => $getMeetups];
    return View::make('main', $data)->withResources($resources);
});

Route::get('notes', function() {
   return View::make('notes');
});

Route::post('/contact', function() {
    return Redirect::to('/')->withErrors("Mail Sent");
});


/**
 * Class Meetups
 * simple object to get meetup api
 */
class Meetups
{
    /**
     * @var string
     */
    var $base_url = 'http://api.meetup.com/';
    /**
     * @var string
     */
    var $events_url = '2/events';
    /**
     * @var array
     */
    var $params = [
        'status'         => 'upcoming',
        'order'          => 'time',
        'limited_events' => 'False',
        'group_urlname'  => 'Laravel-Austin',
        'desc'           => 'false',
        'offset'         => 0,
        'format'         => 'json',
        'page'           => 5,
        'key'            => '69531e157b5a67252736263226472a2e'
    ];


    /**
     * @return array
     */
    public function getEvents()
    {
        $return = [];
        $events = $this->sendRequest();
        foreach ($events as $event) {
            $date     = $event->time / 1000;
            $return[] = [
                'date'        => date('F d, Y', $date),
                'rsvps'       => $event->yes_rsvp_count,
                'url'         => $event->event_url,
                'description' => $event->description
            ];
        }

        return $return;

    }

    /**
     * @return mixed
     */
    public function sendRequest()
    {
        $url     = $this->base_url . $this->events_url . '?' . http_build_query($this->params);
        $return  = file_get_contents($url);
        $results = json_decode($return);

        return $results->results;
    }
}