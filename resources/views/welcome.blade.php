<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Counselling</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/style.css">
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
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
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
                                  <li class=""><a href="#">Home<span class="sr-only">(current)</span></a></li>
                                  <li><a href="#">services</a></li>
                                  <li class="About us">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Departments <span class="caret"></span></a>
                                    <ul class="dropdown-menu" id="slider">
                                      <li><a href="#">CSE</a></li>
                                      <li><a href="#">EEE</a></li>
                                      <li><a href="#">CE</a></li>
                                      <li><a href="#">ME</a></li>
                                      <li><a href="#">BBA</a></li>
                                      <li><a href="#">OTHERS</a></li>
                                      
                                    </ul>
                                  </li>
                                  <li><a href="{{url('login')}}">Sign in</a></li>
                                  <li><a href="{{url('students/create')}}">Sign up</a></li>
                        
                                </ul>
                                <form class="navbar-form navbar-left" >
                                  <div class="form-group">
                                    <input type="text" style="padding-right: 100px" class="form-control" placeholder="Search">
                                  </div>
                                  <button type="submit" class="btn btn-default">Submit</button>
                                </form>
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
                      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                    </ol>
                
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                      <div class="item active">
                            <h3>Are You Capable to Do?</h3>
                            <a href=""><h2>CSE</h2> </a>
                            <a href=""><h4>Test Yourself</h4> </a>
                      </div>
                      <div class="item">
                            <h3>Are You Capable to Do?</h3>
                            <a href=""><h2>EEE</h2> </a>
                            <a href=""><h4>Test Yourself</h4> </a>
                      </div>
                      <div class="item">
                            <h3>Are You Capable to Do?</h3>
                            <a href=""><h2>CE</h2> </a>
                            <a href=""><h4>Test Yourself</h4> </a>
                      </div>
                      <div class="item">
                            <h3>Are You Capable to Do?</h3>
                           <a href=""><h2>ME</h2> </a>
                            <a href=""><h4>Test Yourself</h4> </a>
                      </div>
                      <div class="item">
                            <h3>Are You Capable to Do?</h3>
                           <a href=""><h2>BBA</h2> </a>
                           <a href=""><h4>Test Yourself</h4> </a>
                      </div>
                      <div class="item">
                            <h3>If You Are Confused</h3>
                            <a href=""><h2>Let Us Help</h2> </a>
                            <a href=""><h4>Test Yourself</h4> </a>
                      </div>



                    </div>
                </div>    
            </div>
    </section>
    <section class="about-area text-center">
        <div class="container">
                <div class="about">
                    <h2>About us</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem officiis, quo rerum quisquam laborum ut maiores ipsam laboriosam similique eaque accusamus sequi, aperiam perspiciatis ratione quaerat. Quidem numquam vel perspiciatis?</p>
                </div>
             <div class="row">
                 <div class="col-md-3">
                        <div class="about-content">
                            <div class="about-icon">
                                 <a href=""><i class="fa fa-desktop"></i></a>
                                 <h3>web Design</h3>
                            </div>
                             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, veritatis quisquam aspernatur optio perferendis reprehenderit hic</p>
                        </div>
                 </div>
                 <div class="col-md-3">
                        <div class="about-content">
                            <div class="about-icon">
                                <a href=""><i class="fa fa-book"></i></a>
                                <h3>web Design</h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, veritatis quisquam aspernatur optio perferendis reprehenderit hic</p>
                        </div>
                 </div>
                 <div class="col-md-3">
                        <div class="about-content">
                            <div class="about-icon">
                                <a href=""><i class="fa fa-clipboard"></i></a>
                                <h3>web Design</h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, veritatis quisquam aspernatur optio perferendis reprehenderit hic</p>
                        </div>
                 </div>
                 <div class="col-md-3">
                        <div class="about-content">
                            <div class="about-icon">
                                <a href=""><i class="fa fa-windows"></i></a>
                                 <h3>web Design</h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, veritatis quisquam aspernatur optio perferendis reprehenderit hic</p>
                        </div>
                 </div>
             </div>   
        </div>
    </section>
    <section class="about-servic text-center">
            <div class="container">
                        <div class="about text-center">
                            <h2>About Services</h2>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem officiis, quo rerum quisquam laborum ut maiores ipsam laboriosam similique eaque accusamus sequi, aperiam perspiciatis ratione quaerat. Quidem numquam vel perspiciatis?</p>
                        </div>

                        <div class="row">
                         <div class="col-md-3">
                                <div class="service-item">
                                    <img src="images/cse.jpg" alt="">
                                    <div class="service-overlay"></div>
                                    <div class="service-icon">
                                        <button>Sign in</button>
                                    </div>
                                </div>
                         </div>
                         <div class="col-md-3">
                                <div class="service-item">
                                   <img src="images/eee.jpg" alt="">
                                   <div class="service-overlay"></div>
                                   <div class="service-icon">
                                        <button>Sign in</button>

                                    </div>
                                </div>
                         </div>
                         <div class="col-md-3">
                                <div class="service-item">
                                    <img src="images/ce.jpg" alt="">
                                    <div class="service-overlay"></div>
                                    <div class="service-icon">
                    <button>Sign in</button>
                                    </div>
                                </div>
                         </div>
                         <div class="col-md-3">
                                <div class="service-item">
                                   <img src="images/me.jpg" alt="">
                                   <div class="service-overlay"></div>
                                   <div class="service-icon">
                                        <button>Sign in</button>

                                    </div>
                                </div>
                         </div>
                     </div> 
                     <div class="row">
                         <div class="col-md-3">
                                <div class="service-item">
                                    <img src="images/bba.png" alt="">
                                    <div class="service-overlay"></div>
                                    <div class="service-icon">
                                        <button>Sign in</button>
                                    </div>
                                </div>
                         </div>
                         <div class="col-md-3">
                                <div class="service-item">
                                   <img src="images/other.png" alt="">
                                   <div class="service-overlay"></div>
                                   <div class="service-icon">
                                       <button>Sign in</button>
                                    </div>
                                </div>
                         
                     </div>  
                     
            </div>
        </section>
       <!-- <section id="portfolio" class="text-center">
            <div class="container">
                <div class="about text-center">
                    <h2>Our portfolio</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem officiis, quo rerum quisquam laborum ut maiores ipsam laboriosam similique eaque accusamus sequi, aperiam perspiciatis</p>
                </div>
                <div id="filters" class="button-group">  <button class="button is-checked" data-filter="*">All works</button>
                  <button class="button" data-filter=".metal">web Design</button>
                  <button class="button" data-filter=".transition">Logo Desing</button>
                  <button class="button" data-filter=".alkali, .alkaline-earth">illstrator</button>
                  <button class="button" data-filter=":not(.transition)">Photoshope</button>
                  <button class="button" data-filter=".metal:not(.transition)">Theme Devlopment</button>
                </div>
                <div class="grid">
                  <div class="element-item transition metal " data-category="transition">
                       <img src="images/service-6.jpeg" alt="">
                  </div>
                  <div class="element-item metalloid " data-category="metalloid">
                      <img src="images/service-6.jpeg" alt="">
                  </div>
                  <div class="element-item post-transition metal " data-category="post-transition">
                     <img src="images/service-6.jpeg" alt="">
                  </div>
                  <div class="element-item post-transition metal " data-category="post-transition">
                     <img src="images/service-6.jpeg" alt="">
                  </div>
                  <div class="element-item transition metal " data-category="transition">
                    <img src="images/service-6.jpeg" alt="">
                  </div>
                  <div class="element-item alkali metal " data-category="alkali">
                     <img src="images/service-6.jpeg" alt="">
                    </div>
                </div>

            </div>
        </section>-->
        <section class="Contuct-area text-center">
        <div class="container">
                <div class="about">
                    <h2>Contuct us</h2>
                     <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem officiis, quo rerum quisquam laborum ut maiores ipsam laboriosam similique eaque accusamus sequi, aperiam perspiciatis</p>
                </div>
             <div class="row">
                 <div class="col-md-3">
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
                            <p>officemail@gmail.com</p>
                        </div>
                 </div>
                 <div class="col-md-3">
                        <div class="about-contuct">
                            <div class="contuct-icon">
                                <a href=""><i class="fa fa-globe"></i></a>
                                 <h3>Email</h3>
                            </div>
                            <p>Shayadryhan@gmail.com</p>
                        </div>
                 </div>
             </div>   
        </div>
    </section>
   <!-- <section id="Contruct-form">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form action="">
                        <input type="text" class="control-form" placeholder="name" name="name">
                        <input type="text" class="control-form" placeholder="email" name="email">
                        <input type="text" class="control-form" placeholder="password" name="password">
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="textarea">
                        <textarea name="" class="form-control" placeholder="Message" ></textarea>
                        <button class="btn btn-defalut">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/isotope.function.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script>
        $("#menu").sticky({topSpacing:0});
   
        //.........About counterup.....//
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    </script>
</body>
</html>