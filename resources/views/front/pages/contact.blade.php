@extends('front.index')
@section('content')
    <!-- page title -->
    <div class="page-title-wrap primary-bg">
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- page title content -->
                    <div class="page-title-content text-center">
                        <ul class="mb-0 list-unstyle nav">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                        <h1 class="h2">Get In Touch</h1>
                    </div>
                    <!-- End of page title content -->
                </div><!--/.col-->
            </div><!--/.row-->
        </div><!--/.container-->
    </div><!--/.End of page title -->

    <!-- contact info -->
    <section class="pt-120 top-shape">
        <div class="conatct-info">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <!-- single contact info -->
                        <div class="single-conatct-info">
                            <h4>About</h4>
                            <p>Phaseus site amet tristique ligua donec iaculis leo sus.</p>
                        </div>
                        <!-- End of single contact info -->
                    </div>
                    <div class="col-md-4">
                        <!-- single contact info -->
                        <div class="single-conatct-info">
                            <h4>Address</h4>
                            <p>666 Road Broklyn Street, 88 New York, USA</p>
                        </div>
                        <!-- End of single contact info -->
                    </div>
                    <div class="col-md-4">
                        <!-- single contact info -->
                        <div class="single-conatct-info">
                            <h4>Contact</h4>
                            <a href="needhelp%40mineralo.html">needhelp@mineralo.com</a>
                            <a href="0008888999.html">000 8888 999</a>
                        </div>
                        <!-- End of single contact info -->
                    </div><!--/.col-->
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!--/.contact info-->
    </section><!-- /.End of contact info -->

    <!-- contact form -->
    <section class="pt-90 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <!-- section title -->
                    <div class="section-title text-center">
                        <span class="schoolbell">Contact Us</span>
                        <h2>Send Message</h2>
                    </div>
                    <!-- End of section title -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <!-- contact form -->
                    <div class="contact-form contact-page-form parsley-validate">
                        <form action="http://layerdrops.com/mineralo/sendmail.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="name" placeholder="Full Name" class="theme-input-style" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" placeholder="Email Address" class="theme-input-style" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea name="message" placeholder="Write Message" class="theme-input-style"></textarea>
                                    <div class="submite-btn text-center">
                                        <button type="submit" class="btn">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form><!--/.form-->
                    </div><!-- /.End of contact form -->
                </div><!--/.col-->
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/.End ofcontact form -->

    <!-- map -->
    <div class="google-map">
        <div id="google-map"></div>
    </div>
    <!-- End of map -->
@stop
