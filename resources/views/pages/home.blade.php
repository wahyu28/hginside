@extends('layouts.app')
@section('title', 'BE THE BEST')

@section('content')
<!-- HERO
================================================== -->
<section class="section section-top section-full">

    <!-- Cover -->
    <div class="bg-cover" style="background-image: url(frontend/img/56.jpg);"></div>

    <!-- Overlay -->
    <div class="bg-overlay"></div>
    <!-- Content -->
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-10 col-lg-7 ">
                <div class="banner-content">
                    <!-- Preheading -->
                    <p class="text-white text-uppercase text-center text-xs">
                        Meet <span>John Doe</span>
                    </p>

                    <!-- Heading -->
                    <h1 class="text-white text-center mb-4 display-4 font-weight-bold">
                        I am a UI/UX Designer <br>& Developer
                    </h1>

                    <!-- Subheading -->
                    <p class="lead text-white text-center mb-5">
                        Having 3 years plus experience in design and develop area. I do html template conversion and wordpress theme development too. Have any project on mind or any query about project, feel free to contact.
                    </p>

                    <!-- Button -->
                    <p class="text-center mb-0" >
                        <a href="#" target="_blank" class="btn btn-primary ">
                            Contact Now
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <!-- / .row -->
    </div>
    <!-- / .container -->
</section>

<!-- FEATURES
================================================== -->
<section class="section" id="feature">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-md-8 col-lg-6 text-center">

                <!-- Heading -->
                <h2 class="lg-title mb-2">
                    Why choose me?
                </h2>

                <!-- Subheading -->
                <p class="mb-5 ">
                    Industry Leading Managed Services and Staffing Solutions
                </p>

            </div>
        </div>
        <!-- / .row -->

        <div class="row justy-content-center">
            <div class="col-lg-3 col-md-6">
                <div class="text-center feature-block">
                    <div class="feature-icon-block mb-4">
                        <i class="fa fa-gem"></i>
                    </div>
                    <h4 class="mb-3 ">Modern Design</h4>
                    <p>Our team are experts in matching you with the right provider.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="text-center feature-block">
                    <div class="feature-icon-block mb-4">
                        <i class="fa fa-anchor"></i>
                    </div>
                    <h4 class="mb-3">Recognised for excellence</h4>
                    <p>We've been awarded for our high rate of customer satisfaction.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="text-center feature-block">
                    <div class="feature-icon-block mb-4">
                        <i class="fa fa-clock"></i>
                    </div>
                    <h4 class="mb-3">Delivery On Time </h4>
                    <p>We only compare market leaders with a reputation for quality.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="text-center feature-block">
                    <div class="feature-icon-block mb-4">
                        <i class="fa fa-dice"></i>
                    </div>
                    <h4 class="mb-3">Premium Support</h4>
                    <p>We only compare market leaders with a reputation for service.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- / .container -->
</section>
@endsection

