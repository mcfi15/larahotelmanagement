@extends('layouts.front')

@section('title', 'About Us Page')

@section('content')

<div class="hero small-height jarallax" data-jarallax data-speed="0.2">
    <img class="jarallax-img" src="{{ asset('assets/front/img/hero_home_1.jpg') }}" alt="">
    <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
        <div class="container">
            <small class="slide-animated one">Luxury Hotel Experience</small>
            <h1 class="slide-animated two">About {{ $appSetting->website_name }}</h1>
        </div>
    </div>
</div>
<!-- /Background Img Parallax -->

<div class="container margin_120_95">
    <div class="row justify-content-between align-items-center">
        <div class="col-lg-5">
            <div class="parallax_wrapper inverted">
                <img src="{{ asset('assets/front/img/about_1.jpg') }}" alt="" class="img-fluid rounded-img">
                <div data-cue="slideInUp" class="img_over"><span data-jarallax-element="-30"><img src="{{ asset('assets/front/img/about_1.jpg') }}" alt="" class="rounded-img"></span></div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="intro">
                <div class="title">
                    <small>Paradise Hotel</small>
                    <h2>Our History</h2>
                </div>
                <p class="lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab.</p>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
                <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo.</p>
                <p><em>Maria...the Owner</em></p>
            </div>
        </div>
    </div>
    <!-- /Row -->
</div>
<!-- /container -->

<div class="bg_white">
    <div class="container margin_120_95">
        <div>
            <div class="row justify-content-between">
                <div class="col-lg-5 fixed_title">
                    <div class="title">
                        <small>Paradise Hotel</small>
                        <h2>Local Amenities</h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                    </div>
                    <div class="list_ok">
                        <ul>
                            <li data-cue="slideInUp" data-delay="200">
                                <h5>Local Restaurants</h5>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>
                            </li>
                            <li data-cue="slideInUp" data-delay="300">
                                <h5>Nature</h5>
                                <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p>
                            </li>
                            <li data-cue="slideInUp" data-delay="400">
                                <h5>Art and Culture</h5>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div data-cue="fadeIn" data-delay="500">
                        <figure><img src="{{ asset('assets/front/img/local_amenities_1.jpg') }}" alt="" class="img-fluid rounded-img"></figure>
                    </div>
                    <div data-cue="fadeIn" data-delay="500">
                        <figure>
                            <img src="{{ asset('assets/front/img/local_amenities_1.jpg') }}" alt="" class="img-fluid rounded-img">
                        </figure>
                    </div>
                    <div data-cue="fadeIn" data-delay="500">
                        <figure>
                            <img src="{{ asset('assets/front/img/local_amenities_1.jpg') }}" alt="" class="img-fluid rounded-img">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /container-->
</div>
<!-- /bg_white -->

<div class="parallax_section_1 jarallax" data-jarallax data-speed="0.2">
    <img class="jarallax-img" src="img/hero_home_1.jpg" alt="">
    <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="title white">
                        <small class="mb-1">Testimonials</small>
                        <h2>What Clients Says</h2>
                    </div>
                    <div class="carousel_testimonials owl-carousel owl-theme nav-dots-orizontal">
                        <div>
                            <div class="box_overlay">
                                <div class="pic">
                                    <figure><img src="img/testimonial_1.jpg" alt="" class="img-circle">
                                    </figure>
                                    <h4>Roberta<small>12 Oct</small></h4>
                                </div>
                                <div class="comment">
                                    "Mea ad postea meliore fuisset. Timeam repudiare id eum, ex paulo dictas elaboraret sed, mel cu unum nostrud."
                                </div>
                            </div>
                            <!-- End box_overlay -->
                        </div>
                        <div>
                            <div class="box_overlay">
                                <div class="pic">
                                    <figure><img src="img/testimonial_1.jpg" alt="" class="img-circle">
                                    </figure>
                                    <h4>Roberta<small>2 Nov</small></h4>
                                </div>
                                <div class="comment">
                                    "Mea ad postea meliore fuisset. Timeam repudiare id eum, ex paulo dictas elaboraret sed, mel cu unum nostrud."
                                </div>
                            </div>
                            <!-- End box_overlay -->
                        </div>
                        <div>
                            <div class="box_overlay">
                                <div class="pic">
                                    <figure><img src="img/testimonial_1.jpg" alt="" class="img-circle">
                                    </figure>
                                    <h4>Roberta<small>3 Dec</small></h4>
                                </div>
                                <div class="comment">
                                    "Mea ad postea meliore fuisset. Timeam repudiare id eum, ex paulo dictas elaboraret sed, mel cu unum nostrud."
                                </div>
                            </div>
                            <!-- End box_overlay -->
                        </div>
                    </div>
                    <!-- End carousel_testimonials -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /parallax_section_1-->

<div class="container margin_120_95">
    <div class="title text-center mb-5">
        <small data-cue="slideInUp">Paradise Hotel</small>
        <h2 data-cue="slideInUp" data-delay="100">Main Facilities</h2>
    </div>
    <div class="row mt-4">
        <div class="col-lg-3 col-md-6">
            <div class="box_facilities no-border" data-cue="slideInUp">
                <i class="customicon-private-parking"></i>
                <h3>Private Parking</h3>
                <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="box_facilities" data-cue="slideInUp">
                <i class="customicon-wifi"></i>
                <h3>High Speed Wifi</h3>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="box_facilities" data-cue="slideInUp">
                <i class="customicon-cocktail"></i>
                <h3>Bar & Restaurant</h3>
                <p>Similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="box_facilities" data-cue="slideInUp">
                <i class="customicon-swimming-pool"></i>
                <h3>Swimming Pool</h3>
                <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.</p>
            </div>
        </div>
    </div>
    <!-- /Row -->
    <hr class="more_margin">
    <div class="row justify-content-between margin_60_0">
        <div class="col-lg-4">
            <div class="title">
                <small>Paradise Hotel Faq</small>
                <h3>Frequently Questions</h3>
            </div>
            <p>Can’t find your question in the list?
                Let us know your questions.</p>
            <p><a href="contacts.html" class="animated_link"><strong>Contact Us <i class="bi bi-arrow-right"></i></strong></a></p>
        </div>
        <div class="col-lg-7">
            <div role="tablist" class="mb-5 accordion" id="faq">
                <div class="card">
                    <div class="card-header" role="tab">
                        <h5 class="mb-0">
                            <a class="collapsed" data-bs-toggle="collapse" href="#collapseOne_product" aria-expanded="false">
                                <i class="indicator bi-plus-lg"></i>Cancellation
                            </a>
                        </h5>
                    </div>
                    <div id="collapseOne_product" class="collapse" role="tabpanel" data-bs-parent="#faq">
                        <div class="card-body">
                            <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                        </div>
                    </div>
                </div>
                <!-- /card -->
                <div class="card">
                    <div class="card-header" role="tab">
                        <h5 class="mb-0">
                            <a class="collapsed" data-bs-toggle="collapse" href="#collapseTwo_product" aria-expanded="false">
                                <i class="indicator bi-plus-lg"></i>Payments
                            </a>
                        </h5>
                    </div>
                    <div id="collapseTwo_product" class="collapse" role="tabpanel" data-bs-parent="#faq">
                        <div class="card-body">
                            <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                        </div>
                    </div>
                </div>
                <!-- /card -->
                <div class="card">
                    <div class="card-header" role="tab">
                        <h5 class="mb-0">
                            <a class="collapsed" data-bs-toggle="collapse" href="#collapseThree_product" aria-expanded="false">
                                <i class="indicator bi-plus-lg"></i>Check In / Out Rules
                            </a>
                        </h5>
                    </div>
                    <div id="collapseThree_product" class="collapse" role="tabpanel" data-bs-parent="#faq">
                        <div class="card-body">
                            <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                        </div>
                    </div>
                </div>
                <!-- /card -->
                <div class="card">
                    <div class="card-header" role="tab">
                        <h5 class="mb-0">
                            <a class="collapsed" data-bs-toggle="collapse" href="#collapseFour_product" aria-expanded="false">
                                <i class="indicator bi-plus-lg"></i>Disable Access
                            </a>
                        </h5>
                    </div>
                    <div id="collapseFour_product" class="collapse" role="tabpanel" data-bs-parent="#faq">
                        <div class="card-body">
                            <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                        </div>
                    </div>
                </div>
                <!-- /card -->
            </div>
            <!-- /accordion -->
        </div>
    </div>
    <!-- /Row -->
</div>
<!-- /container -->

@endsection