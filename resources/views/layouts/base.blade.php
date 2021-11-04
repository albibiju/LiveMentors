<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8" />
    <meta name="author" content="Tinos" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LiveMentors- Online Learning Platform</title>

    <!-- Custom CSS -->
    <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet">

</head>

<body>

<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">

    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->
    <!-- Start Navigation -->
    <!-- <div class="header header-transparent dark-text"> -->
    <div class="header theme-bg light-menu"></div>
    <div class="container">
        <nav id="navigation" class="navigation navigation-landscape">
            <div class="nav-header">
                <a class="nav-brand" href="/">
                    <img src="{{asset('assets/img/logo.png')}}" class="logo" alt="" />
                </a>
                <div class="nav-toggle"></div>
                <div class="mobile_nav">
                    <ul>
                        <li>
                            <a href="{{route('login')}}"  class="crs_yuo12 w-auto text-white theme-bg">
                                <span class="embos_45"><i class="fas fa-sign-in-alt mr-1"></i>Sign In</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="nav-menus-wrapper">
                <ul class="nav-menu">

                    <li class="active"><a href="/">Home<span class="submenu-indicator"></span></a>

                    </li>
                    <!---
                                        <li><a href="#">Courses<span class="submenu-indicator"></span></a>
                                            <ul class="nav-dropdown nav-submenu">
                                                <li><a href="#">Data Science<span class="submenu-indicator"></span></a>
                                                    <ul class="nav-dropdown nav-submenu">
                                                        <li><a href="grid-layout-with-sidebar.html">Using PYTHON</a></li>
                                                        <li><a href="grid-layout-with-sidebar-2.html">Using C</a></li>


                                                    </ul>
                                                </li>
                                                <li><a href="#">Cyber Security<span class="submenu-indicator"></span></a>
                                                    <ul class="nav-dropdown nav-submenu">
                                                        <li><a href="list-layout-with-sidebar.html">List Layout Style 1</a></li>
                                                        <li><a href="list-layout-with-full.html">List Full Width</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Python Django<span class="submenu-indicator"></span></a>
                                                    <ul class="nav-dropdown nav-submenu">
                                                        <li><a href="course-detail.html">Course Detail 01</a></li>
                                                        <li><a href="course-detail-2.html">Course Detail 02</a></li>
                                                        <li><a href="course-detail-3.html">Course Detail 03</a></li>
                                                        <li><a href="course-detail-4.html">Course Detail 04</a></li>
                                                    </ul>
                                                </li>

                                                <li><a href="explore-category.html">Flutter</a></li>
                                                <li><a href="find-instructor.html">PHP</a></li>
                                                 <li><a href="instructor-detail.html">Instructor Detail</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="#">Instructors<span class="submenu-indicator"></span></a>
                                            <ul class="nav-dropdown nav-submenu">
                                                <li><a href="#">Shop Pages<span class="submenu-indicator"></span></a>
                                                    <ul class="nav-dropdown nav-submenu">
                                                        <li><a href="shop-with-sidebar.html">Shop Sidebar Left</a></li>
                                                        <li><a href="shop-with-right-sidebar.html">Shop Sidebar Right</a></li>
                                                        <li><a href="list-shop-with-sidebar.html">Shop List Style</a></li>
                                                        <li><a href="wishlist.html">Wishlist</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                        <li><a href="product-detail.html">Product Detail</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="contact.html">Say Hello</a></li>
                                                <li><a href="blogs.html">Blog Style</a></li>
                                                <li><a href="pricing.html">Pricing</a></li>
                                                <li><a href="404.html">404 Page</a></li>
                                                <li><a href="component.html">Elements</a></li>
                                                <li><a href="faq.html">FAQs</a></li>
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="signup.html">Signup</a></li>
                                                <li><a href="forgot.html">Forgot</a></li>
                                            </ul>
                                        </li> --->

                    <li><a href="/courses">Courses</a></li>

                    <li><a href="/FAQs">FAQs</a></li>



                    <li><a href="/contact">Contact Us</a></li>
                    <li><a href="/about_us">About Us</a></li>

                </ul>

                <ul class="nav-menu nav-menu-social align-to-right">
                    @if(Route::has('login'))
                        @auth
                            @if(Auth::user()->utype === 'ADMIN')
                                <li class="menu-item menu-item-has-children parent" >
                                    <a title="my account" href="#">My Account ({{Auth::user()->name}}) <i class="fa fa-angle-down" aria-hidden="true"></i> </a>
                                    <ul class="submenu currency">
                                        <li class="menu-item">
                                            <a title="Dashboard" href="{{route('admin.dashboard')}}">Dashboard</a>
                                        </li>

                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                                                 onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-jet-dropdown-link>
                                        </form>
                                    </ul>
                                </li>

                            @elseif(Auth::user()->utype === 'CONSULTANT')
                                <li class="menu-item menu-item-has-children parent" >
                                    <a title="my account" href="#">My Account ({{Auth::user()->name}}) <i class="fa fa-angle-down" aria-hidden="true"></i> </a>
                                    <ul class="submenu currency">
                                        <li class="menu-item">
                                            <a title="Dashboard" href="{{route('consultant.dashboard')}}">Dashboard</a>
                                        </li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                                                 onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-jet-dropdown-link>
                                        </form>
                                    </ul>
                                </li>


                            @else

                                <li class="down" >
                                    <a  href="#">({{Auth::user()->name}}) <i class="fa fa-angle-down" aria-hidden="true"></i> </a>
                                    <ul class="submenu currency">
                                        <li class="menu-item">
                                            <a title="Dashboard" href="{{route('user.dashboard')}}">Dashboard</a>
                                        </li>

                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                                                 onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-jet-dropdown-link>
                                        </form>
                                        <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                                            {{ __('Profile') }}
                                        </x-jet-responsive-nav-link>

                                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                            <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                                                {{ __('API Tokens') }}
                                            </x-jet-responsive-nav-link>
                                        @endif
                                    </ul>
                                </li>

                            @endif


                        @else



                            <li>
                                <a href="{{route('login')}}" class="alio_green" data-toggle="modal" data-target="#login">
                                    <i class="fas fa-sign-in-alt mr-1"></i><span class="dn-lg">Sign In</span>
                                </a>
                            </li>
                            <li class="add-listing theme-bg">
                                <a href="{{route('register')}}" class="text-white">Get Started</a>
                            </li>

                        @endif

                    @endif


                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- End Navigation -->
<div class="clearfix"></div>
<!-- ============================================================== -->
<!-- Top header  -->
<!-- ============================================================== -->


{{$slot}}

<!-- ============================ Call To Action ================================== -->
<section class="theme-bg call_action_wrap-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="call_action_wrap">
                    <div class="call_action_wrap-head">
                        <h3>Do You Have Questions ?</h3>
                        <span>We'll help you to grow your career and growth.</span>
                    </div>
                    <a href="/contact" class="btn btn-call_action_wrap">Contact Us Today</a>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- ============================ Call To Action End ================================== -->



<!-- ============================ Footer Start ================================== -->
<footer class="dark-footer skin-dark-footer style-2">
    <div class="footer-middle">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 col-md-5">
                    <div class="footer_widget">
                        <!-- <img src="assets/img/logo-light.png" class="img-footer small mb-2" alt="" /> -->
                        <h4 class="extream mb-3">Do you need help with<br>anything?</h4>
                        <p>Receive updates, hot deals, tutorials, discounts sent straignt in your inbox every month</p>
                        <div class="foot-news-last">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Email Address">
                                <div class="input-group-append">
                                    <button type="button" class="input-group-text theme-bg b-0 text-light">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-7 ml-auto">
                    <div class="row">

                        <div class="col-lg-4 col-md-4">
                            <div class="footer_widget">
                                <h4 class="widget_title">LiveMentors</h4>
                                <ul class="footer-menu">
                                    <li><a href="/">Home Page</a></li>
                                    <li><a href="/">About Page</a></li>
                                    <li><a href="/contact">Contact Page</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- <div class="col-lg-4 col-md-4">
                            <div class="footer_widget">
                                <h4 class="widget_title">All Sections</h4>
                                <ul class="footer-menu">
                                    <li><a href="#">Headers<span class="new">New</span></a></li>
                                    <li><a href="#">Features</a></li>
                                    <li><a href="#">Attractive<span class="new">New</span></a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Videos</a></li>
                                    <li><a href="#">Footers</a></li>
                                </ul>
                            </div>
                        </div> -->

                        <div class="col-lg-4 col-md-4">
                            <div class="footer_widget">
                                <h4 class="widget_title">Company</h4>
                                <ul class="footer-menu">
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Pricing</a></li>
                                    <li><a href="#">Login</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 text-center">
                    <p class="mb-0">© 2021 LiveMentors. Developed By <a href="https://tinos.co.in">Tinos Software & Security Solutions LLP</a>.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ============================ Footer End ================================== -->

<!-- Log In Modal --> <!---
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true">
    <div class="modal-dialog modal-xl login-pop-form" role="document">
        <div class="modal-content overli" id="loginmodal">
            <div class="modal-header">
                <h5 class="modal-title">Login Your Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times-circle"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login-form">
                    <form>

                        <div class="form-group">
                            <label>User Name</label>
                            <div class="input-with-icon">
                                <input type="text" class="form-control" placeholder="User or email">
                                <i class="ti-user"></i>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <div class="input-with-icon">
                                <input type="password" class="form-control" placeholder="*******">
                                <i class="ti-unlock"></i>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-xl-4 col-lg-4 col-4">
                                <input id="admin" class="checkbox-custom" name="admin" type="checkbox">
                                <label for="admin" class="checkbox-custom-label">Admin</label>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-4">
                                <input id="student" class="checkbox-custom" name="student" type="checkbox" checked>
                                <label for="student" class="checkbox-custom-label">Student</label>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-4">
                                <input id="instructor" class="checkbox-custom" name="instructor" type="checkbox">
                                <label for="instructor" class="checkbox-custom-label">Tutors</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-md full-width theme-bg text-white">Login</button>
                        </div> --->
<!---
                        <div class="rcs_log_125 pt-2 pb-3">
                            <span>Or Login with Social Info</span>
                        </div>
                        <div class="rcs_log_126 full">
                            <ul class="social_log_45 row">
                                <li class="col-xl-4 col-lg-4 col-md-4 col-4"><a href="javascript:void(0);" class="sl_btn"><i class="ti-facebook text-info"></i>Facebook</a></li>
                                <li class="col-xl-4 col-lg-4 col-md-4 col-4"><a href="javascript:void(0);" class="sl_btn"><i class="ti-google text-danger"></i>Google</a></li>
                                <li class="col-xl-4 col-lg-4 col-md-4 col-4"><a href="javascript:void(0);" class="sl_btn"><i class="ti-twitter theme-cl"></i>Twitter</a></li>
                            </ul>
                        </div>

                    </form>
                </div>
            </div>
            <div class="crs_log__footer d-flex justify-content-between mt-0">
                <div class="fhg_45"><p class="musrt">Don't have account? <a href="signup.html" class="theme-cl">SignUp</a></p></div>
                <div class="fhg_45"><p class="musrt"><a href="forgot.html" class="text-danger">Forgot Password?</a></p></div>
            </div>
        </div>
    </div>
</div>--->
<!-- End Modal -->

<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('assets/js/jquery.min.js"')}}></script>
<script src="{{asset('assets/js/popper.min.js"')}}></script>
<script src="{{asset('assets/js/bootstrap.min.js"')}}></script>
<script src="{{asset('assets/js/select2.min.js"')}}></script>
<script src="{{asset('assets/js/slick.js"')}}></script>
<script src="{{asset('assets/js/moment.min.js"')}}></script>
<script src="{{asset('assets/js/daterangepicker.js"')}}></script>
<script src="{{asset('assets/js/summernote.min.js"')}}></script>
<script src="{{asset('assets/js/metisMenu.min.js"')}}></script>
<script src="{{asset('assets/js/custom.js"')}}></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->

</body>
</html>
