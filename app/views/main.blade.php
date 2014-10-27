@extends('layouts.main')

@section('content')
<section id="portfolio">
    <div class="container">
        <div class="row">
            @if($errors->has())
                @foreach($errors as $error)
                    {{ $error->all() }}
                @endforeach
            @endif
            <div class="col-lg-12 text-center">
                <h2>Location/Time</h2>
                <hr class="star-primary">
                <h3>2nd Tuesday of the month.  7pm - 9pm.</h3>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 text-center">
                <a href="http://cchubnigeria.com"><img src="img/capfac.jpg" class="" alt="Capital Factory"></a><br>
                <p><br>6th Floor<br>294 Herbert Macaulay Rd Lagos, Nigeria</p>
            </div>
            <div class="col-sm-9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3964.1371188186736!2d3.3779360000000005!3d6.504321000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8c5f983b14dd%3A0xc6d19d31ff03f83b!2sCo-Creation+Hub+Nigeria!5e0!3m2!1sen!2s!4v1413901023118" width="100%" height="350" frameborder="0" style="border:0"></iframe>
            </div>
        </div>
    </div>
</section>

<section class="success" id="upcoming">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Upcoming</h2>
                <hr class="star-light">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                @if(empty($meetups))
                    <div class="row">
                        <center><i class="fa fa-clock"></i> Watch this space for upcoming meetups</center>
                    </div>
                @else
                    @foreach($meetups as $meetup)
                    <h3><a href="{{ $meetup['url'] }}">{{ $meetup['date'] }}</a></h3>
                    <div class="row">
                        <div class="col-lg-2">&nbsp;</div>
                    <div class="col-lg-2">
                        <a href="{{ $meetup['url'] }}" class="btn btn-lg btn-outline">
                            <i class="fa fa-calendar"></i> RSVP
                        </a>
                    </div>
                    <div class="col-lg-6 text-left">
                        {{ $meetup['description'] }}
                        <strong>RSVPs:</strong> {{ $meetup['rsvps'] }}
                    </div>
                    </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</section>

<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>About</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <p> 
                    Laravel Nigeria is a group for people in the Lagos, Mainland area who are
                    interested in learning, exploring, and sharing knowledge
                    about the <a href="http://laravel.com">Laravel PHP</a> framework.
                </p>
            </div>
        </div>
    </div>
</section>

<section id="resources">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Resources</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="list-group">
                    @foreach($resources as $resource)
                    <a href="{{ $resource['url'] }}" class="list-group-item" target="_blank">
                        <div class="col-sm-2">
                            <img src="{{ $resource['image'] }}" class="pull-left clearfix" style="height: 52px; margin-right: 18px">
                        </div>

                        <h4 class="list-group-item-heading">{{ $resource['name'] }}</h4>
                        <p class="list-group-item-text">{{ $resource['description'] }}</p>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@stop
