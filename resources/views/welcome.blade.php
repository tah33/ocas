<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Advising</title>
    <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/custom.css')}}">
    <link rel="shortcut icon" href="{{ asset('icons/favicon.png') }}"/>

</head>
<body>
<section id="menu">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">
                                <div class="logo">
                                    <img src="images/logo1.jpg" alt="">
                                </div>
                            </a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class=""><a href="{{url('/')}}">Home<span class="sr-only">(current)</span></a></li>
                                <li><a href="#about_us">About Us</a></li>
                                <li><a href="#departments">Departments</a></li>
                                <li><a href="#contact_us">Contact Us</a></li>
                                <li><a href="{{url('login')}}">Sign in</a></li>
                                <li><a href="{{url('students/create')}}">Sign up</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
        </div>
    </div>
</section>
<section id="slider" class="text-center">
    <div class="slider-overlay">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                @foreach($departments as $key => $department)
                <li data-target="#carousel-example-generic" data-slide-to="{{$key}}" class="{{$key == 0 ? 'active' : ''}}"></li>
                @endforeach

                <li data-target="#carousel-example-generic" data-slide-to="{{$key+1}}"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                @foreach($departments as $key => $department)
                <div class="item {{$key == 0 ? 'active' : ''}}">
                    <h3>Are You Capable to Do?</h3>
                    <a href=""><h2>{{$department->slug}}</h2></a>
                    <a href=""><h4>Test Yourself</h4></a>
                </div>
                @endforeach
                <div class="item">
                    <h3>If You Are Confused</h3>
                    <a href=""><h2>Let Us Help</h2></a>
                    <a href=""><h4>Test Yourself</h4></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-area text-center" class="section-padding" id="about_us" >
    <div class="container">
        <div class="about">
            <h2>About us</h2>
            <img src="{{URL::asset('icons/about.png')}}" alt="about image" width="100px" height="100px">
            <p class="text-justify">At OCAS, we follow a very unique method towards providing Online Career Advising.
               We believe that the most important step towards finding ones' BEST SUITED career or course is to first find the Real Inherent Strength pattern in the individual.
               This Real Inherent Strength pattern is mapped in terms of ones' Aptitude, Personality and Interest profile using our proprietary MyTalent Psychometric Assessment.
               This Assessment is an outcome of extensive Standadization and Validation process done on a large population Students across
               different economic conditions and geographies.
               They then give their recommendations (which are there on their dashboard as well as in the form of comprehensive reports) and
                provide them with very comprehensive Online Career Advising.
            </p>
        </div>
    </div>
</section>
<section class="about-area text-center section-padding departments" id="departments" >
    <div class="container">
        <div class="about">
            <h2>Departments</h2>
            <h3>Get Services For Below Departments</h3>
        </div>
        <div class="row">
            @foreach($departments as $department)
                <a href="">
                <div class="card" style="width: 25rem;">
                    <img class="rounded-circle" src="{{URL::asset('images/department/'.$department->logo)}}" alt="Card image cap" height="50px" width="50px">
                    <div class="card-body">
                        <h5 class="card-title"><b>{{$department->name}}</b></h5><br>
                        <h5 class="card-body"><b>({{$department->slug}})</b></h5>
                    </div>
                </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
<section class="Contuct-area text-center section-padding" id="contact_us">
    <div class="container">
        <div class="about">
            <h2>Contuct us</h2>
            <p>We Are Here to Help and Answer Any Question you Might Have.We look forward to hearing from you </p>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="about-contuct">
                    <div class="contuct-icon">
                        <a href=""><i class="fa fa-phone"></i></a>
                        <h3>Call us</h3>
                    </div>
                    <p>+88017984876854,01864553548</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="about-contuct">
                    <div class="contuct-icon">
                        <a href=""><i class="fa fa-map-marker"></i></a>
                        <h3>office location</h3>
                    </div>
                    <p>450/4,west Shawrapara,Dhaka</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="about-contuct">
                    <div class="contuct-icon">
                        <a href=""><i class="fa fa-envelope"></i></a>
                        <h3>Email</h3>
                    </div>
                    <p>info@datatrixsoft.com</p>
                </div>
            </div>

        </div>
    </div>
</section>

<script src="{{URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js')}}"></script>
<script src="{{URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('assets/js/isotope.min.js')}}"></script>
<script src="{{URL::asset('assets/js/isotope.function.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.sticky.js')}}"></script>
<script src="{{URL::asset('https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.counterup.min.js')}}"></script>
<script>
    $("#menu").sticky({topSpacing: 0});

    //.........About counterup.....//
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });
</script>
</body>
</html>
