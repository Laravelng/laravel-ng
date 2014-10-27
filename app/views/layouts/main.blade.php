<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laravel Nigeria Meetup</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/css/freelancer.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Hammersmith+One:400,700' rel='stylesheet' type='text/css'>

    <!-- IE8 support for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/#page-top">Laravel Nigeria</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="/#page-top"></a>
                </li>
                <li class="page-scroll">
                    <a href="/#portfolio">Location/Time</a>
                </li>
                <li class="page-scroll">
                    <a href="/#upcoming">Upcoming</a>
                </li>
                <li class="page-scroll">
                    <a href="/#about">About</a>
                </li>
                <li class="page-scroll">
                    <a href="/#resources">Resources</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <img class="img-responsive" src="img/profile.png" alt="">
                <div class="intro-text">
                    <span class="name">Laravel Nigeria</span>
                    <hr class="star-light">
                    <span class="skills">Welcome to the Laravel Nigeria Meetup page!</span>
                </div>
            </div>
        </div>
    </div>
</header>

@yield('content')

<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-4">
                    <h3>Location</h3>
                    <p><br>6th Floor<br>294 Herbert Macaulay Rd Lagos,<br> Nigeria</p>
                        <a href="https://goo.gl/maps/xReZX" target="_blank"><i class="fa fa-map-marker"></i> Map</a>
                    </p>
                </div>
                <div class="footer-col col-md-4">
                    <h3>Around the Web</h3>
                    <ul class="list-inline">
                        <li>
                            <a href="https://www.facebook.com/groups/1495854810650508/" class="btn-social btn-outline" title="Facebook"><i class="fa fa-fw fa-empire"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/laravelng" class="btn-social btn-outline" title="Twitter"><i class="fa fa-fw fa-rebel"></i></a>
                        </li>
                        <li>
                            <a href="https://github.com/Laravelng" class="btn-social btn-outline" title="Github"><i class="fa fa-fw fa-github"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="footer-col col-md-4">
                    <h3>About</h3>
                    <p>Laravel Nigeria is a group for people in the Lagos, Mainland area who are
                        interested in learning, exploring, and sharing knowledge
                        about the <a href="http://laravel.com">Laravel PHP</a> framework.</p>
                    <p><a href="#irc-modal" data-toggle="modal" ><i class="glyphicon glyphicon-envelope"></i> Contact Us.</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    Copyright &copy; {{ date('Y') }} Laravel Ng
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="scroll-top page-scroll visible-xs visble-sm">
    <a class="btn btn-primary" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>

<div class="portfolio-modal modal fade" id="irc-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <form action="/contact" method="post" role="form" class="contactForm">
                          <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                          </div>
                          <div class="form-group">
                            <label for="email">Your Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                          </div>
                          <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="maxlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                          </div>
                          <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
                            <div class="validation"></div>
                          </div>
                          
                          <button type="submit" class="btn btn-theme pull-left">SEND MESSAGE</button>
                        </form>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="/js/classie.js"></script>
<script src="/js/cbpAnimatedHeader.js"></script>
<script src="/js/freelancer.js"></script>

</body>

</html>