<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Film Channel</title>

    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('Frontend/css/style.css')}}">
    <script src="{{asset('Frontend/js/navbar.js')}}"></script>

    <link href="{{asset('Frontend/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{asset('Frontend/css/owl.theme.css') }}" rel="stylesheet">
    <script src="{{asset('Frontend/js/owl.carousel.js') }}"></script>
</head>
<body>
    <header>
        <div class="container">
        <div class="row">
            <div class="row">
                <div id="logo" class="col-md-4">
                    <h1>FILMC</h1>
                </div>
                <div class="col-md-8">
                <div class="search">
                    <form>
                        <input class="textbox" value="Search:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" type="text">
                        <input value=" " type="submit">
                    </form>
                </div>
                </div>
            </div>

            <div class="col-md-12">
                    <!--NAVBAR-->
<nav class="navbar navbar-default navbar-static">
    <!--Mobile Menu-->
    <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <!--Desktop/Tablet Menu-->
    <div class="collapse navbar-collapse js-navbar-collapse">
        <div class="container">
            <div class="row">
                <div class="btn-group btn-group-justified">
                    <!--Home-->
                    <div class="btn-group">
                        <button type="button" class="btn btn-nav">
                            <span class="glyphicon glyphicon-home"></span>
                            <p id="home">Home</p>
                        </button>
                    </div>
                    <!--Wiki-->
                    <div class="btn-group">
                        <button type="button" class="btn btn-nav" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-book"></span>
                            <p id="wiki">Wiki <span class="caret"></span></p>
                        </button>
                        <ul class="dropdown-menu multi-column columns-4">
                            <li class="col-md-3 hidden-xs">
                                <ul class="multi-column-dropdown">
                                    <li class="dropdown-header">Header</li>
                                    <li><a href="#">placeholder</a></li>
                                    <li><a href="#">placeholder</a></li>
                                    <li><a href="#">placeholder</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Header</li>
                                    <li><a href="#">placeholder</a></li>
                                    <li><a href="#">placeholder</a></li>
                                    <li><a href="#">placeholder</a></li>
                                    <li><a href="#">placeholder</a></li>
                                </ul>
                            </li>
                            <li class="col-md-3 hidden-xs">
                                <ul class="multi-column-dropdown">
                                    <li class="dropdown-header">Header</li>
                                    <li><a href="#">placeholder</a></li>
                                    <li><a href="#">placeholder</a></li>
                                    <li><a href="#">placeholder</a></li>
                                    <li><a href="#">placeholder</a></li>
                                    <li><a href="#">placeholder</a></a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Header</li>
                                    <li><a href="#">placeholder</a></li>
                                </ul>
                            </li>
                            <li class="col-md-3 hidden-xs">
                                <ul class="multi-column-dropdown">
                                    <li class="dropdown-header">Header</li>
                                    <li><a href="#">placeholder</a></li>
                                    <li><a href="#">placeholder</a></li>
                                    <li><a href="#">placeholder</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Header</li>
                                    <li><a href="#">placeholder</a></li>
                                    <li><a href="#">placeholder</a></li>
                                    <li><a href="#">placeholder</a></li>
                                </ul>
                            </li>
                            <li class="col-md-3 hidden-xs">
                                <ul class="multi-column-dropdown">
                                    <li class="dropdown-header">Header</li>
                                    <li><a href="#">placeholder</a></li>
                                    <li><a href="#">placeholder</a></li>
                                    <li><a href="#">placeholder</a></li>
                                    <li><a href="#">placeholder</a></li>
                                    <li><a href="#">placeholder</a></li>
                                    <li><a href="#">placeholder</a></li>
                                    <li><a href="#">placeholder</a></li>
                                </ul>
                                <a href="#" style="float:right;padding-right:25px">See All</a>
                            </li>
                        </ul>
                    </div>
                    <!--TechTicket-->
                    <div class="btn-group">
                        <button type="button" class="btn btn-nav">
                            <span class="glyphicon glyphicon-ok-sign"></span>
                            <p id="techtickets">TechTicket</p>
                        </button>
                    </div>
                    <!--Reports-->
                    <div class="btn-group">
                        <button type="button" class="btn btn-nav">
                            <span class="glyphicon glyphicon-stats"></span>
                            <p id="reports">Reports</p>
                        </button>
                    </div>
                    <!--News-->
                    <div class="btn-group">
                        <button type="button" class="btn btn-nav">
                            <span class="glyphicon glyphicon-bell"></span>
                            <p id="news">News</p>
                        </button>
                    </div>
                    <!--Calendar-->
                    <div class="btn-group">
                        <button type="button" class="btn btn-nav">
                            <span class="glyphicon glyphicon-calendar"></span>
                            <p id="calendar">Calendar</p>
                        </button>
                    </div>
                    <!--Profile-->
                    <div class="btn-group">
                        <button type="button" class="btn btn-nav">
                            <span class="glyphicon glyphicon-user"></span>
                            <p id="profile">Profile</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
            </div>

        </div>
        </div>
    </header>

    <div class="container" id="content">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="category-heading">
                        <h4>latest collection of video</h4>
                    </div>

                     <div class="span12">
                        <div id="owl-demo" class="owl-carousel">
                            @foreach($videos as $video)
                                <div class="item content-grid">
                                <div class="video-wraper">
                                    <a href="singlepage.html"><img class="thumnail" src="{{ $video->medium_thumnail }}" title="allbum-name"></a>
                                    <h5>{{ $video->title }}</h5>
                                    <ul>
                                        <li><a href="#"><img src="{{ asset('Frontend/img/likes.png') }}" title="image-name"></a></li>
                                        <li><a href="#"><img src="{{ asset('Frontend/img/views.png') }}" title="image-name"></a></li>
                                        <li><a href="#"><img src="{{ asset('Frontend/img/link.png') }}" title="image-name"></a></li>
                                    </ul>
                                    <a class="watchbutton" href="singlepage.html">Watch now</a>
                                </div>
                            </div>
                            @endforeach
                            <div class="item content-grid">
                                <div class="video-wraper">
                                    <a href="singlepage.html"><img class="thumnail" src="{{ asset('Frontend/img/video4.jpg') }}" title="allbum-name"></a>
                                    <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>
                                    <ul>
                                        <li><a href="#"><img src="{{ asset('Frontend/img/likes.png') }}" title="image-name"></a></li>
                                        <li><a href="#"><img src="{{ asset('Frontend/img/views.png') }}" title="image-name"></a></li>
                                        <li><a href="#"><img src="{{ asset('Frontend/img/link.png') }}" title="image-name"></a></li>
                                    </ul>
                                    <a class="watchbutton" href="singlepage.html">Watch now</a>
                                </div>
                            </div>

                            <div class="item content-grid">
                                <div class="video-wraper">
                                    <a href="singlepage.html"><img class="thumnail" src="{{ asset('Frontend/img/video4.jpg') }}" title="allbum-name"></a>
                                    <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>
                                    <ul>
                                        <li><a href="#"><img src="{{ asset('Frontend/img/likes.png') }}" title="image-name"></a></li>
                                        <li><a href="#"><img src="{{ asset('Frontend/img/views.png') }}" title="image-name"></a></li>
                                        <li><a href="#"><img src="{{ asset('Frontend/img/link.png') }}" title="image-name"></a></li>
                                    </ul>
                                    <a class="watchbutton" href="singlepage.html">Watch now</a>
                                </div>
                            </div>

                            <div class="item content-grid">
                                <div class="video-wraper">
                                    <a href="singlepage.html"><img class="thumnail" src="{{ asset('Frontend/img/video.png') }}" title="allbum-name"></a>
                                    <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>
                                    <ul>
                                        <li><a href="#"><img src="{{ asset('Frontend/img/likes.png') }}" title="image-name"></a></li>
                                        <li><a href="#"><img src="{{ asset('Frontend/img/views.png') }}" title="image-name"></a></li>
                                        <li><a href="#"><img src="{{ asset('Frontend/img/link.png') }}" title="image-name"></a></li>
                                    </ul>
                                    <a class="watchbutton" href="singlepage.html">Watch now</a>
                                </div>
                            </div>

                            <div class="item content-grid">
                                <div class="video-wraper">
                                    <a href="singlepage.html"><img class="thumnail" src="{{ asset('Frontend/img/video2.jpg') }}" title="allbum-name"></a>
                                    <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>
                                    <ul>
                                        <li><a href="#"><img src="{{ asset('Frontend/img/likes.png') }}" title="image-name"></a></li>
                                        <li><a href="#"><img src="{{ asset('Frontend/img/views.png') }}" title="image-name"></a></li>
                                        <li><a href="#"><img src="{{ asset('Frontend/img/link.png') }}" title="image-name"></a></li>
                                    </ul>
                                    <a class="watchbutton" href="singlepage.html">Watch now</a>
                                </div>
                            </div>

                            <div class="item content-grid">
                                <div class="video-wraper">
                                    <a href="singlepage.html"><img class="thumnail" src="{{ asset('Frontend/img/video3.png') }}" title="allbum-name"></a>
                                    <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>
                                    <ul>
                                        <li><a href="#"><img src="{{ asset('Frontend/img/likes.png') }}" title="image-name"></a></li>
                                        <li><a href="#"><img src="{{ asset('Frontend/img/views.png') }}" title="image-name"></a></li>
                                        <li><a href="#"><img src="{{ asset('Frontend/img/link.png') }}" title="image-name"></a></li>
                                    </ul>
                                    <a class="watchbutton" href="singlepage.html">Watch now</a>
                                </div>
                            </div>

                            <div class="item content-grid">
                                <div class="video-wraper">
                                    <a href="singlepage.html"><img class="thumnail" src="{{ asset('Frontend/img/video4.jpg') }}" title="allbum-name"></a>
                                    <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>
                                    <ul>
                                        <li><a href="#"><img src="{{ asset('Frontend/img/likes.png') }}" title="image-name"></a></li>
                                        <li><a href="#"><img src="{{ asset('Frontend/img/views.png') }}" title="image-name"></a></li>
                                        <li><a href="#"><img src="{{ asset('Frontend/img/link.png') }}" title="image-name"></a></li>
                                    </ul>
                                    <a class="watchbutton" href="singlepage.html">Watch now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">

                </div>
            </div>
        </div>
    </div>

    <footer>

    </footer>
</body>
</html>
