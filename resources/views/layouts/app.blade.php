<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>
    <section id="menu">
        <div class="container">
            <div class="row">
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
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#">Action</a></li>
                                      <li><a href="#">Another action</a></li>
                                      <li><a href="#">Something else here</a></li>
                                      <li role="separator" class="divider"></li>
                                      <li><a href="#">Separated link</a></li>
                                      <li role="separator" class="divider"></li>
                                      <li><a href="#">One more separated link</a></li>
                                    </ul>
                                  </li>
                                  <li><a href="#">contuct</a></li>
                                  <li><a href="#">Gellary</a></li>
                                  <li><a href="#">portfolio</a></li>
                                </ul>
                                
                              </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                          </nav>
            </div>
        </div>
    </section>
    <section id="slider" class="text-center">
    </section>
   <section> @yield('login')
    <a href="{{url('register')}}" class="btn btn-primary">Register</a></section>
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
                                    <img src="images/servic.jpeg" alt="">
                                    <div class="service-overlay"></div>
                                    <div class="service-icon">
                                        <i class="fa fa-google-plus"></i>
                                        <i class="fa fa-facebook"></i>
                                    </div>
                                </div>
                         </div>
                         <div class="col-md-3">
                                <div class="service-item">
                                   <img src="images/service-6.jpeg" alt="">
                                   <div class="service-overlay"></div>
                                   <div class="service-icon">
                                        <i class="fa fa-google-plus"></i>
                                        <i class="fa fa-facebook"></i>
                                    </div>
                                </div>
                         </div>
                         <div class="col-md-3">
                                <div class="service-item">
                                    <img src="images/service-5.jpeg" alt="">
                                    <div class="service-overlay"></div>
                                    <div class="service-icon">
                                        <i class="fa fa-google-plus"></i>
                                        <i class="fa fa-facebook"></i>
                                    </div>
                                </div>
                         </div>
                         <div class="col-md-3">
                                <div class="service-item">
                                   <img src="images/service-4.jpeg" alt="">
                                   <div class="service-overlay"></div>
                                   <div class="service-icon">
                                        <i class="fa fa-google-plus"></i>
                                        <i class="fa fa-facebook"></i>
                                    </div>
                                </div>
                         </div>
                     </div>  
            </div>
        </section>
        <section id="portfolio" class="text-center">
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
        </section>
        <section id="" class="text-center ">
            <div class="container">
                <div class="about text-center">
                    <h2>Our Priceing</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem officiis, quo rerum quisquam laborum ut maiores ipsam laboriosam similique eaque accusamus sequi, aperiam perspiciatis</p>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="priceing">
                            <div class="priceing-top">
                                <p><sup>$</sup><em>55</em>/ mo</p>
                                <span>Basic</span>
                            </div>
                            <ul>
                                <li><a href="">GB hand width</a></li>
                                <li><a href="">GB hand width</a></li>
                                <li><a href="">GB hand width</a></li>
                                <li><a href="">GB hand width</a></li>
                            </ul>
                            <div class="btn">Order Now</div>
                        </div>
                   </div>
                    <div class="col-md-3">
                        <div class="priceing">
                            <div class="priceing-top">
                                <p><sup>$</sup><em>55</em>/ mo</p>
                                <span>Basic</span>
                            </div>
                            <ul>
                                <li><a href="">GB hand width</a></li>
                                <li><a href="">GB hand width</a></li>
                                <li><a href="">GB hand width</a></li>
                                <li><a href="">GB hand width</a></li>
                            </ul>
                            <div class="btn">Order Now</div>
                        </div>
                   </div>
                    <div class="col-md-3">
                        <div class="priceing">
                            <div class="priceing-top">
                                <p><sup>$</sup><em>55</em>/ mo</p>
                                <span>Basic</span>
                            </div>
                            <ul>
                                <li><a href="">GB hand width</a></li>
                                <li><a href="">GB hand width</a></li>
                                <li><a href="">GB hand width</a></li>
                                <li><a href="">GB hand width</a></li>
                            </ul>
                            <div class="btn">Order Now</div>
                        </div>
                   </div>
                    <div class="col-md-3">
                        <div class="priceing">
                            <div class="priceing-top">
                                <p><sup>$</sup><em>55</em>/mo</p>
                                <span>Basic</span>
                            </div>
                            <ul>
                                <li><a href="">GB hand width</a></li>
                                <li><a href="">GB hand width</a></li>
                                <li><a href="">GB hand width</a></li>
                                <li><a href="">GB hand width</a></li>
                            </ul>
                            <div class="btn">Order Now</div>
                        </div>
                   </div>
                </div>
            </div>
        </section>
        <section id="counterup-area" class="text-center">
           <div class="counter-overlay">
                <div class="container">
                    <div class="counterup">
                        <div class="row">
                           <div class="col-md-3">
                                <div class="count">
                                    <span class="counter">12345</span>
                                    <h3>Happy coustomer</h3>
                                </div>
                            </div>
                             <div class="col-md-3">
                                <div class="count">
                                    <span class="counter">12345</span>
                                    <h3>Happy coustomer</h3>
                                </div>
                            </div> 
                             <div class="col-md-3">
                                <div class="count">
                                    <span class="counter">12345</span>
                                    <h3>Happy coustomer</h3>
                                </div>
                            </div> 
                             <div class="col-md-3">
                                <div class="count">
                                    <span class="counter">12345</span>
                                    <h3>Happy coustomer</h3>
                                </div>
                            </div>     
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
    <section id="Contruct-form">
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
    </section>
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