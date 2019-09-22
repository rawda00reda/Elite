@extends('layouts.head')
@section('content')
<!-- Slider area -->
<section class="slider_area row m0">
    <div class="slider_inner">
        @foreach( $sliders as $slider)
        <div data-thumb="" data-src="{{asset('imgs/sliders/'.$slider->img)}}">
            <div class="camera_caption">
                <div class="container">
                    <h5 class=" wow fadeInUp animated">{{$slider->title}}</h5>
                    <h3 class=" wow fadeInUp animated" data-wow-delay="0.5s">{{$slider->content}}</h3>
                </div>
            </div>
        </div>
            @endforeach
    </div>
</section>
<!-- End Slider area -->


<!-- Professional Builde -->
<section class="professional_builder row">
    <div class="container">
        <div class="row builder_all">
            @foreach($advs as $adv)
            <div class="col-md-3 col-sm-6 builder">
                <i class="{{$adv->icon}}" aria-hidden="true"></i>
                <h4>{{$adv->title}}</h4>
                <p>{{$adv->content}} </p>
            </div>
                @endforeach
        </div>
    </div>
</section>
<!-- End Professional Builde -->

<!-- About Us Area -->
<section class="about_us_area row">
    <div class="container">
        <div class="tittle wow fadeInUp">
            <h2>ABOUT US</h2>
            @foreach( $abouts as  $about)
            <h4> {{$about->title}}</h4>
        </div>
        <div class="row about_row">
            <div class="who_we_area col-md-7 col-sm-6">
                <div class="subtittle">
                    <h2>WHO WE ARE</h2>
                </div>
                <p>
                    {{$about->content}}
                </p>
                <a href="#" class="button_all">Contact Now</a>
            </div>
            <div class="col-md-5 col-sm-6 about_client">
                <img src="{{asset('imgs/aboutUs/'.$about->img)}}" alt="">
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End About Us Area -->


<!-- Our Features Area -->
<section class="our_feature_area">
    <div class="container">
        <div class="tittle wow fadeInUp">
            <h2>Our Features</h2>
            <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>

        </div>
        <div class="feature_row row">

            <div class="col-md-6 feature_img">

                @foreach($fimgs as $fimg)

                <img src="{{asset('imgs/features/'.$fimg->img)}}" alt="">

                @endforeach

            </div>
            <div class="col-md-6 feature_content">
                <div class="subtittle">
                    <h2>WHY CHOOSE US</h2>
                    <h5>There are many variations of passages of Lorem Ipsum available.</h5>
                </div>
                @foreach($features as $feature)

                <div class="media">
                    <div class="media-left">
                        <a href="#">
                            <i class="{{$feature->icon}}" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="media-body">
                        <a href="#">{{$feature->title}}</a>
                        <p>{{$feature->content}}</p>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- End Our Features Area -->

<!-- Our Services Area -->
<section class="our_services_area">
    <div class="container">
        <div class="tittle wow fadeInUp">
            <h2>Our Works</h2>
            @foreach($works as $work)
            <h4>{{$work->title}}</h4>
        </div>
        <div class="portfolio_inner_area">


            <div class="portfolio_filter">
                <ul>

                    <li data-filter="*" class="active"><a href=""> All</a></li>
                    <li data-filter=".photography"><a href="">{{$work->work}}</a></li>

                </ul>
                @endforeach

            </div>
            <div class="portfolio_item">
                <div class="grid-sizer"></div>
                <div class="single_facilities col-xs-4 p0 painting photography adversting">
                    <div class="single_facilities_inner">
                        <img src="images/gallery/sv-1.jpg" alt="">
                        <div class="gallery_hover">
                            <h4>Construction</h4>
                            <ul>
                                <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="single_facilities col-xs-4 p0 webdesign">
                    @foreach($wimgs as $wimg)
                    <div class="single_facilities_inner">
                        <img src="{{asset('imgs/works/'.$wimg->img)}}" alt="">

                        <div class="gallery_hover">
                            <h4>Construction</h4>
                            <ul>
                                <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                        @endforeach
                </div>

                <div class="single_facilities col-xs-4 p0 adversting webdesign adversting">
                    <div class="single_facilities_inner">
                        <img src="images/gallery/sv-4.jpg" alt="">
                    </div>
                </div>
                <div class="single_facilities col-xs-4 p0 painting adversting branding">
                    <div class="single_facilities_inner">
                        <img src="images/gallery/sv-5.jpg" alt="">
                    </div>
                </div>
                <div class="single_facilities col-xs-4 p0 webdesign photography magazine adversting">
                    <div class="single_facilities_inner">
                        <img src="images/gallery/sv-6.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Our Services Area -->



<!---Our Achievments Area -->
<section class="our_achievments_area" data-stellar-background-ratio="0.3">
    <div class="container">
        <div class="tittle wow fadeInUp">
            <h2>Our Achievments</h2>
            <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
        </div>

        <div class="achievments_row row">
            @foreach($achievs as $achiev)
            <div class="col-md-3 col-sm-6 p0 completed">
                <i class="{{$achiev->icon}}" aria-hidden="true"></i>
                <span class="counter">{{$achiev->number}}</span>
                <h6>{{$achiev->text}}</h6>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- End Our Achievments Area -->

<!-- Our Testimonial Area -->
<section class="testimonial_area row">
    <div class="container">
        <div class="tittle wow fadeInUp">
            <h2>Our TESTIMONIALS</h2>
            <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
        </div>
        <div class="testimonial_carosel">
            <div class="item">
                <div class="media">
                    <div class="media-left">
                        @foreach($tests as $test)

                        <a href="#">
                            <img class="media-object" src="{{asset('imgs/testimonials/'.$test->img)}}" alt="">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">{{$test->name}}</h4>
                        <h6>Web Developer</h6>
                    </div>
                </div>
                <p><i class="fa fa-quote-right" aria-hidden="true"></i>{{$test->content}}<i class="fa fa-quote-left" aria-hidden="true"></i></p>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- End Our testimonial Area -->

<!-- Our Featured Works Area -->
<section class="featured_works row" data-stellar-background-ratio="0.3">
    <div class="tittle wow fadeInUp">
        <h2>Our Featured Works</h2>
        <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
    </div>
    <div class="featured_gallery">
        <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
            <img src="images/gallery/gl-1.jpg" alt="">
            <div class="gallery_hover">
                <h4>Bolt Apartments</h4>
                <a href="#">VIEW PROJECT</a>
            </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
            <img src="images/gallery/gl-2.jpg" alt="">
            <div class="gallery_hover">
                <h4>Bolt Apartments</h4>
                <a href="#">VIEW PROJECT</a>
            </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
            <img src="images/gallery/gl-3.jpg" alt="">
            <div class="gallery_hover">
                <h4>Bolt Apartments</h4>
                <a href="#">VIEW PROJECT</a>
            </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
            <img src="images/gallery/gl-4.jpg" alt="">
            <div class="gallery_hover">
                <h4>Bolt Apartments</h4>
                <a href="#">VIEW PROJECT</a>
            </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
            <img src="images/gallery/gl-5.jpg" alt="">
            <div class="gallery_hover">
                <h4>Bolt Apartments</h4>
                <a href="#">VIEW PROJECT</a>
            </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
            <img src="images/gallery/gl-6.jpg" alt="">
            <div class="gallery_hover">
                <h4>Bolt Apartments</h4>
                <a href="#">VIEW PROJECT</a>
            </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
            <img src="images/gallery/gl-7.jpg" alt="">
            <div class="gallery_hover">
                <h4>Bolt Apartments</h4>
                <a href="#">VIEW PROJECT</a>
            </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
            <img src="images/gallery/gl-8.jpg" alt="">
            <div class="gallery_hover">
                <h4>Bolt Apartments</h4>
                <a href="#">VIEW PROJECT</a>
            </div>
        </div>
    </div>
</section>
<!-- End Our Featured Works Area -->

<!-- Our Latest Blog Area -->
<section class="latest_blog_area">
    <div class="container">
        <div class="tittle wow fadeInUp">
            <h2>Our Latest Blog</h2>
            <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
        </div>
        <div class="row latest_blog">
            <div class="col-md-4 col-sm-6 blog_content">
                <img src="images/blog/lb-1.jpg" alt="">
                <a href="#" class="blog_heading">Our Latest Project</a>
                <h4><small>by  </small><a href="#">Emran Khan</a><span>/</span><small>ON </small> October 15, 2016</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis iaculis velit in tristique. Curabitur ac urna urna. Sed sollicitudin at nisi sed accumsan... <a href="#">Read More</a></p>
            </div>
            <div class="col-md-4 col-sm-6 blog_content">
                <img src="images/blog/lb-2.jpg" alt="">
                <a href="#" class="blog_heading">Our Latest Project</a>
                <h4><small>by  </small><a href="#">Prodip Ghosh</a><span>/</span><small>ON </small> October 15, 2016</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis iaculis velit in tristique. Curabitur ac urna urna. Sed sollicitudin at nisi sed accumsan... <a href="#">Read More</a></p>
            </div>
            <div class="col-md-4 col-sm-6 blog_content">
                <img src="images/blog/lb-3.jpg" alt="">
                <a href="#" class="blog_heading">Our Latest Project</a>
                <h4><small>by  </small><a href="#">Prodip Ghosh</a><span>/</span><small>ON </small> October 15, 2016</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis iaculis velit in tristique. Curabitur ac urna urna. Sed sollicitudin at nisi sed accumsan... <a href="#">Read More</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End Our Latest Blog Area -->

<!-- Our Partners Area -->
<section class="our_partners_area">
    <div class="container">
        <div class="tittle wow fadeInUp">
            <h2>Our Partners</h2>
            <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
        </div>
        <div class="partners">
            @foreach($partners as $partner)
            <img src="{{asset('imgs/partners/'.$partner->img)}}" alt="">
           @endforeach
        </div>
    </div>
    <div class="book_now_aera">
        <div class="container">
            <div class="row book_now">
                <div class="col-md-10 booking_text">
                    <h4>Booking now if you need build your dream home.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="col-md-2 p0 book_bottun">
                    <a href="#" class="button_all">book now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer_area">
    <div class="container">
        <div class="footer_row row">
            <div class="col-md-3 col-sm-6 footer_about">
                <h2>ABOUT OUR COMPANY</h2>
                <img src="images/footer-logo.png" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <ul class="socail_icon">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 footer_about quick">
                <h2>Quick links</h2>
                <ul class="quick_link">
                    <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i>Building Construction</a></li>
                    <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i>Home Renovation</a></li>
                    <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i>Hardwood Flooring</a></li>
                    <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i>Repairing Of Roof</a></li>
                    <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i>Commercial Construction</a></li>
                    <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i>Concreate Transport</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 footer_about">
                <h2>Twitter Feed</h2>
                <a href="#" class="twitter">@colorlib: Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</a>
                <a href="#" class="twitter">@colorlib: Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</a>
            </div>
            <div class="col-md-3 col-sm-6 footer_about">
                <h2>CONTACT US</h2>
                <address>
                    <p>Have questions, comments or just want to say hello:</p>
                    <ul class="my_address">
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>info@thethemspro.com</a></li>
                        <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i>+880 123 456 789</a></li>
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span>Sector # 10, Road # 05, Plot # 31, Uttara, Dhaka 1230 </span></a></li>
                    </ul>
                </address>
            </div>
        </div>
    </div>
    <div class="copyright_area">
        Copyright 2017 All rights reserved. Designed by <a href="https://colorlib.com">Colorlib.</a>
    </div>
</footer>
<script src="https://kit.fontawesome.com/a2c308319d.js"></script>
@endsection
