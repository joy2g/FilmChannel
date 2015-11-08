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

    <div class="row-fluid stream-wrapper" id="content">
        <div class="row-fluid main-wrapper">
        <div class="container">
            <section id="about">
            <div class="more page-scroll" id="more">
            <a href="#about"><i class="fa fa-angle-down"></i></a>
            </div>
            
    <div class="container wp2 animated fadeInUp">
    <h1 class="section-title">About the film</h1>
 
        <div class="row">
            <div class="col-lg-6 wp2 delay-05s animated fadeInUp">   
    

              <div class="movie-disc">
              <div class="movie-avatar">
                      <div class="movie-avatar-img">
                            <img src="{{asset('Frontend/img/video.png')}}" alt="">
                      </div><!-- /.movie-avatar-img --> 
                  </div><!-- /.movie-disc --> 
              </div><!-- /.movie-avatar --> 

            </div><!-- /.col-lg-6 -->
            
            <div class="col-lg-6 wp2 delay-1s animated fadeInUp">  
            <h2>The Story of Avengers <span class="text-color">2</span></h2>
            <h4 class="sub-text">Release Date: May 05, 2015 <br>
                                 Rating: PG-13 <br>
            </h4>
            
          
            
            <table class="text-dark">

                    <tbody><tr><td>Year </td>  <td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td><td>May 05, 2015</td></tr>
                    
                    <tr><td>By </td>    <td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td><td>United Atates of America</td></tr>
                    
                    <tr><td>Slogan </td><td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td><td>«Some assembly required»</td></tr>
                    
                    <tr><td>Genre </td><td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td><td>Fiction, fFantasy, Thriller, Adventure</td></tr>
                    
                    <tr><td>Time </td><td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td><td>142 min. / 2:22</td></tr>
                    
                    <tr><td>Budget </td><td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td><td>$220 000 000</td></tr>
                     
                    <tr><td>Age </td>   <td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td><td><span class="detailed-text">12+</span></td></tr>           

            </tbody></table>
            <br>
            

            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean eget dolor. Aenean massa. Natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Corper ipsum rutrum nunc. Vestibulum volutpat pretium libero ultricies nec. 
            <br>

            </p><div class="detailed">
            Rating:&nbsp;&nbsp; 
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            <span>IMDb &nbsp;<b>/  4.5</b></span> 
            
            </div> 
            <p></p> 
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container --> 
    <div class="col-md-2 col-md-offset-5 watch">
        <button id="watch-button" type="button" class="btn btn-danger btn-block btn-lg">Watch</button>
    </div>
    </section>
    
            <div id="video" class="col-md-12 video-container">
                <iframe width="100%" height="580px"src="https://www.youtube.com/embed/zTXLy029k28" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        </div>
        
        <div class="container video-info">
            <div class="category-heading">
                        <h4>You Are watching "The Avenger 2"</h4>
            </div>
        </div>
    </div>

    <footer>
        
    </footer>

<script>
function displayVideo() {
    $('#video').fadeIn(1000);
    $('.video-info').fadeIn(1000);
}

$(document).ready(function () {
$('#watch-button').on('click', function () {
        $('#about').fadeOut(1000);
        setTimeout(displayVideo, 1000);
        $('.main-wrapper').css('padding-bottom', '0px');
    });
});
    
</script>
</body>
</html>