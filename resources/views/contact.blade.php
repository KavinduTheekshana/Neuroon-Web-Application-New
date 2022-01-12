@extends('includes.include')
@section('content')


    <!-- breadcrumb area start -->
    <section class="breadcrumb pt-150 pb-150 bg_img" data-background="assets/images/bg/breadcrumb-bg-1.jpeg"
        data-overlay="dark" data-opacity="5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb__wrap">
                        <h2 class="title">Contact Us</h2>
                        <div class="breadcrumb__nav">
                            <ul>
                                <li><span>//</span></li>
                                <li><a href="index.html">Home</a></li>
                                <li>|</li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- cotact area start -->
    <div class="contact__area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="contact__wrap pt-95 pb-95">
                        <div class="row justify-content-center">
                            <div class="col-xl-10">
                                <div class="contact__form">
                                    <form id="contacts-us-form" action="mail.php" method="POST">
                                        <div class="row mt-none-30">
                                            <div class="col-xl-6 mt-30">
                                                <div class="form__group">
                                                    <label for="name"><i class="fal fa-user"></i></label>
                                                    <input name="name" type="text" id="name" placeholder="Enter your full name">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 mt-30">
                                                <div class="form__group">
                                                    <label for="email"><i class="fal fa-envelope"></i></label>
                                                    <input name="email" type="email" id="email" placeholder="Enter email address">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 mt-30">
                                                <div class="form__group">
                                                    <label for="tel"><i class="fal fa-phone"></i></label>
                                                    <input name="phone" type="tel" id="tel" placeholder="Add phone number">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 mt-30">
                                                <div class="form__group">
                                                    <label for="subject"><i class="fal fa-book"></i></label>
                                                    <input name="subject" type="text" id="subject" placeholder="Enter your subject">
                                                </div>
                                            </div>
                                            <div class="col-xl-12 mt-30">
                                                <div class="form__group">
                                                    <label for="message"><i class="fal fa-pen"></i></label>
                                                    <textarea name="message" id="message" placeholder="Enter messages"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 mt-30 text-center">
                                                <button class="site-btn" type="submit">Get Free Consultancy</button>
                                                <p class="ajax-response mt-15" style="color: #fff;"></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cotact area end -->

    <!-- contact info area start -->
    <div class="contactinfo__area">
        <div class="container">
            <div class="row mt-none-30">
                <div class="col-xl-4 col-lg-6 mt-30">
                    <div class="contact__info">
                        <div class="icon">
                            <i class="fal fa-map"></i>
                            <span><i class="fal fa-check"></i></span>
                        </div>
                        <div class="content">
                            <h2 class="title">Office Address</h2>
                            <p>629/1,
                                Pinketha Road,
                                <br>
                                Homagama.</p>
                     
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 mt-30">
                    <div class="contact__info contact__info--black">
                        <div class="icon">
                            <i class="fal fa-phone"></i>
                            <span><i class="fal fa-check"></i></span>
                        </div>
                        <div class="content">
                            <h2 class="title">Phone Number</h2>
                            <a href="tel:+94 71 251 5020">+94 71 251 5020</a>
                            <a href="tel:+94 71 399 6549">+94 71 399 6549</a>
                      
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 mt-30">
                    <div class="contact__info contact__info--blue">
                        <div class="icon">
                            <i class="fal fa-globe"></i>
                            <span><i class="fal fa-check"></i></span>
                        </div>
                        <div class="content">
                            <h2 class="title">Web Connect</h2>
                            <a href="mailto:info@neuroon.lk">info@neuroon.lk</a>
                            <a href="mailto:hr@neuroon.lk">hr@neuroon.lk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact info area end -->

    <!-- map area start -->
    <div id="contact-map"></div>
    <!-- map area end -->


@endsection