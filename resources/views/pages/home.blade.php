@include('header')
<div class="main">
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 order-2 mt-5" data-aos="fade-up" data-aos-delay="100">
                    <h1 class="container-fluid">Start your framing<br>
                        journey</h1>
                    <h2 class="container-fluid">Make your memories immortal</h2>
                    <p class="w-75 p-3">Express framing has never been easier. You can even upload
                        your image for us to print and then view framing option. Click
                        on Start Framing to begin your journey!</p>

                    <div class="col-lg-12 mt-4 container-fluid col-md-4 col-sm-6 align-content-start">

                        <a href="{{ url('/framing') }}" class="btn-get-started scrollto">Online Framing</a>

                        <a href="{{ url('/instore') }}" class="btn-get-started scrollto">Instore Framing</a>
                    </div>
                    <div class="col-lg-12 mt-2  container-fluid col-md-4 col-sm-6 align-content-start">
                    <a href="{{ url('artworks') }}" class="btn1-get scrollto">Buy Artworks</a>
                    </div>

                </div>
                <div class="col-lg-6 order-1 float-lg-start" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('assets/img/Main-Picture-mobile-friendly.jpg') }}" alt="Faam-gallery" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <!-- ======= Tabs Section ======= -->
    <section>
        <div class="tabs">
            <div class="tab-content">
                <div class="tab-pane active show" id="tab-1">
                    <div class="row">
                        <div class="col-lg-6 order-2 p-5" data-aos="fade-up" data-aos-delay="100">
                            <h2 class="container-fluid mt-5">Framing</h2>
                            <p class="container-fluid py-5 p-3">
                                In our showroom, we have over 700 different types of frames,
                                as well as a large selection of mountboards and glass. There's a
                                frame to suit every taste!<br>
                                We've gathered our best-selling frames and mounts so you can
                                experiment with different combinations for your artwork.<br>
                                Visit our showroom today or click on online framing to get
                                started.
                            </p>
                            <div class="container-fluid">
                                <a href="{{ url('/framing') }}" class="btn1-get  scrollto">Online Framing</a>
                                <a href="{{ url('instore') }}" class="btn-get-started scrollto">In-store Framing</a>
                            </div>
                        </div>
                        <div class="col-lg-6  order-1" data-aos="fade-up" data-aos-delay="200">
                            <img src="{{ asset('assets/img/New-Framing.jpg') }}" alt="" class="img-fluid-panama">
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane active show" id="tab-1">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-2 p-5" data-aos="fade-up" data-aos-delay="100">
                            <h2 class="container-fluid mt-5">Printing</h2>
                            <p class="container-fluid py-5 p-3">
                                Professional printing for both artists and photographers. We
                                use the latest 12 colour pigment UltraChrome printing
                                technology to bring your photos to life. Our giclee prints
                                have the highest colour density and resolution possible. We
                                offer a selection of fine art and photographic papers to
                                ensure the best finish for your image.<br>
                                Get started by uploading your photo.
                            </p>
                            <div class="container-fluid">
                                <a href="{{ route('upload-printing') }}" class="btn-get-started scrollto">Upload Photo</a>
                                <a href="#about" class="btn1-get scrollto">Learn more</a>
                            </div>
                        </div>


                        <div class="col-lg-6 order-1 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                            <img src="assets/img/New-Printing.jpg" alt="" class="img-fluid-panama">
                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-content">
                <div class="tab-pane active show" id="tab-1">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-2 p-5" data-aos="fade-up" data-aos-delay="100">
                            <h2 class="container-fluid mt-5">Memorabilia</h2>
                            <p class="container-fluid py-5 p-3">
                                We are proud to have an expert team dedicated to framing your
                                special memorabilia. Our team has been thrilled to work with
                                stadiums, sport collectors, football and rugby clubs to present and
                                protect their special memorabilia.
                                From jersey shirts to sport gear and miniature models, we have
                                framed them all. We understand how precious your memorabilia
                                are and our team will always do their best to create unique designs
                                matching your taste. Both presentation and protection of your
                                memorabilia are always prioritised.
                            </p>

                            <a href="{{ route('uploadimage') }}" class="btn-get-started scrollto">Upload Photo</a>
                            <a href="#about" class="btn1-get scrollto">Learn more</a>
                        </div>




                        <div class="col-lg-6 order-1 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                            <img src="assets/img/New-Memorabillia.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-content">
                <div class="tab-pane active show" id="tab-1">
                    <div class="row">
                        <div class="col-lg-6 order-2 p-5 order-lg-2" data-aos-delay="100">
                            <h2 class="container-fluid mt-5">Exhibition</h2>
                            <p class="container-fluid py-5 p-3">
                                We are proud to have organised over 269 solo and group
                                exhibitions all around the world promoting both merging talented
                                and established artists. With over three decades of experience our
                                team has worked closely with collectors, auctioneers and buyers to
                                ...
                            </p>

                            <a href="#about" class="btn-get scrollto">View Exhibitions</a>





                        </div>
                        <div class="col-lg-6 order-1 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                            <img src="assets/img/New-Exhibition.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section><!-- End Tabs Section -->

    <!-- ======= Service Section ======= -->
    <section id="about" class="about section-ba">
        <div class="container" data-aos="fade-up">
            <div class="col-lg-12 mt-4 mb-4 d-flex align-items-center">
                <div class="icon-boxes d-flex flex-column justify-content-lg-between">
                    <div class="row">
                        <div class="col-md-3 text-center icon-box" data-aos="fade-up" data-aos-delay="100">
                            <img src="assets/img/Satisfaction-Garanteed.png" class="rounded opacity-50 mx-auto d-block" alt="...">
                            <!--                  <img src="assets/img/Satisfaction-Garanteed.png" class="icon-box" alt="">-->
                            <h5 class="text-center mt-4">Satisfaction Guaranteed</h5>
                            <p>100% guaranteed satisfaction. We go above and
                                beyond to make you happy with our service, and
                                your satisfaction is our goal</p>
                        </div>
                        <div class="col-md-3 icon-box" data-aos="fade-up" data-aos-delay="200">
                            <img src="assets/img/Delivery.png" class="rounded mx-auto opacity-50 d-block" alt="...">

                            <h5 class="text-center mt-4">Reliable Delivery</h5>
                            <p>Reliable and express delivery service national wid</p>
                        </div>
                        <div class="col-md-3 icon-box" data-aos="fade-up" data-aos-delay="300">
                            <img src="assets/img/Customer-Service.png" class="rounded mx-auto opacity-50 d-block" alt="...">

                            <h5 class="text-center mt-4">Great Customer Service</h5>
                            <p>Constantly improving our services to make it easier
                                for you to have a more enjoyable experience using
                                our services</p>
                        </div>
                        <div class="col-md-3 icon-box" data-aos="fade-up" data-aos-delay="400">
                            <img src="assets/img/Trusted-by-expert.png" class="rounded mx-auto opacity-50 d-block" alt="...">

                            <h5 class="text-center mt-4">Trusted by Professional</h5>
                            <p>Working with the bests in the field of art and framing
                                has made us an attractive choice for collectors,
                                auctioneers and art enthusiasts</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service Section -->
    <section class="container">
        <div class="section-title mt-4 mb-4"><a href="{{ route('blogs') }}">
            <h2 class="text-start">Blog</h2></a>
        </div>
        <div class="row gallery">
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="{{ route('blogs') }}" class="blog-hover">
                    <figure><img class="img-fluid img-thumbnail " src="{{asset('assets/img/black.jpg')}}" alt="Blog Image"></figure>
                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="{{ route('blogs') }}" class="blog-hover">
                    <figure><img class="img-fluid img-thumbnail" src="assets/img/black.jpg" alt="Random Image"></figure>
                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="{{ route('blogs') }}" class="blog-hover">
                    <figure><img class="img-fluid img-thumbnail" src="assets/img/black.jpg" alt="Random Image"></figure>
                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="{{ route('blogs') }}" class="blog-hover">
                    <figure><img class="img-fluid img-thumbnail" src="assets/img/black.jpg" alt="Random Image"></figure>
                </a>
            </div>





        </div>
        <div class="container-fluid col-lg-3 align-items-center col-sm-6 mt-3 mb-5">


            <a href="{{ route('blogs') }}" class="btn-get scrollto">View More </a>
        </div>

    </section><!-- End Blog Section -->

    <!-- ======= Tabs Section ======= -->
    <section id="about" class="about section-ba">
        <div class="container" data-aos="fade-up">
            <div class="about">
                <div class="row">
                    <div class="col-lg-9 mt-5 order-lg-1 order-sm-1 order-md-1" data-aos="fade-up" data-aos-delay="100">
                        <table style="height: 80px;">
                            <tbody>
                                <tr>
                                    <td class="align-baseline">
                                        <p class="fw-bolder">
                                        <h1 class="fw-bold">Upcoming
                                        </h1>
                                        <h2>Exhibitions on</h2>
                                        </p>
                                    </td>
                                    <td class="align-middle py-lg-4">
                                        <source srcset="assets/img/Art-Wall-Logo" type="png">
                                        <img src="assets/img/Art-Wall-Logo.png" class="img-fluid" width="170px" height="90px" alt="ArtWall">
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="fst-normal mb-5">
                            The steps we take to promote talented artist. We have recently introduced Art Wall which is a
                            project that focuses introducing talented and emerging artist in the beating heart of London at
                            Faam Gallery. Every two weeks, a new artist is promote
                        </p>

                        <a href="#about" class="btn-get scrollto">View All Exhibitions </a>

                    </div>

                    <div class="col-lg-3 order-sm-3 order-md-3 mt-5 order-lg-2 order-md-3 order-sm-3 order-xs-3" data-aos="fade-up" data-aos-delay="200">
                        <h3 class=" fw-bold">Interested in<br>
                            Exhibiting?</h3><br>

                        <div class="w-75">
                            <a href="#about" class="btn-get justify-content-sm-center scrollto">Apply as an artist </a>
                            <a href="#about" class="btn-get scrollto">Apply as a collector </a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-12 order-lg-2 order-sm-2  order-md-2 p-2 mt-4">
                        <div class="about">
                            <div class="row">
                                <div class="col-md-2 col-sm-5 col-lg-3  mb-sm-4">
                                    <div class="card-artwall">
                                        <div class="card-artwall-header border-0"><img src="assets/img/testimonials/Grey_Square.png" class="img-fluid-panama " alt="image"></div>
                                        <div class="card-artwall-body border-0">
                                            <h6 class="fw-bold">Leslie on ArtWall</h6>
                                        </div>
                                        <div class="card-artwall-footer border-0">
                                            <p class="container-fluid opacity-50">1-14 Dec 2022</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2 col-sm-5 col-lg-3  mb-sm-4">
                                    <div class="card-artwall">
                                        <div class="card-header border-0"><img src="assets/img/testimonials/Grey_Square.png" class="img-fluid-panama " alt="image"></div>
                                        <div class="card-artwall-body border-0">
                                            <h6 class="fw-bold">Leslie on ArtWall</h6>
                                        </div>
                                        <div class="card-artwall-footer border-0">
                                            <p class="container-fluid opacity-50">1-14 Dec 2022</p>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-2 col-sm-5 col-lg-3  mb-sm-4">
                                    <div class="card-artwall">
                                        <div class="card-header border-0"><img src="assets/img/testimonials/Grey_Square.png" class="img-fluid-panama " alt="image"></div>
                                        <div class="card-artwall-body border-0">
                                            <h6 class="fw-bold">Leslie on ArtWall</h6>
                                        </div>
                                        <div class="card-artwall-footer border-0">
                                            <p class="container-fluid opacity-50">1-14 Dec 2022</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-5 col-lg-3  mb-sm-4">
                                    <div class="card-artwall">
                                        <div class="card-header border-0"><img src="assets/img/testimonials/Grey_Square.png" class="img-fluid-panama " alt="image"></div>
                                        <div class="card-artwall-body border-0">
                                            <h6 class="fw-bold">Leslie on ArtWall</h6>
                                        </div>
                                        <div class="card-artwall-footer border-0">
                                            <p class="container-fluid opacity-50">1-14 Dec 2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Tabs Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg-video">
        <div class="row">
            <div class="col-md-6 col-lg-6 mt-2">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="section-title w-100">
                        <h3 class="text-center mb-3 mt-5">Faam Gallery<br>
                            Aim</h3>
                        <p class="container-fluid text-center">One of the most important aims of Faam Gallery is promoting
                            both talented and professional artists on an international level
                            to a wide audience. We aim to promote Asian and European
                            arts as well as holding cultural art festivals, biennials and
                            exhibitions.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 mt-4 px-5  mt-md-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                    <div class="videoWrapper">
                        {{-- <iframe src="./assets/img/FaamGallery.mp4" sandbox></iframe> -->--}}
                        <video class="video" controls>
                            <source src="./assets/img/FaamGallery.mp4" type="video/mp4">
                        </video>
                        <style>
                            .video {
                                width: 100%;
                                outline: none;
                                border: solid #330202;
                                height: auto;
                            }
                        </style>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Services Section -->
    <div class="col-md-12 col-lg-12">


        <img src="./assets/img/FaamGalleryInteriorView.jpg" style="width: 100%;" alt="FaamGalleryInteriorView">
    </div>

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">

            <div class="container-fluid">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-2 row-cols-xl-4 justify-content-lg-between">
                    <div class="col mt-5 mb-5">
                        <div class="h-100">
                            <!-- Product image-->

                            <!-- Product details-->
                            <div class="card-body mt-3">
                                <div class="text-start">
                                    <!-- Product name-->
                                    <h1 class="fw-bolder">Featured
                                        Artworks</h1>
                                    <!-- Product price-->

                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer pt-0 border-top-0 bg-transparent">
                                <div class="text-start text-black text-decoration-underline"><a href="#">View the full collection</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5 mt-5">
                        <div class="card bg-transparent h-90">
                            <!-- Sale badge-->

                            <!-- Product image-->
                            <img class="card-img-top" src="assets/img/girl.jpg" alt="..." />
                            <!-- Product details-->
                            <!--                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">-->

                            <ul class="list-group bg-transparent list-group-flush">
                                <li class="list-group-item bg-transparent opacity-75">jungle</li>
                                <li class="list-group-item bg-transparent opacity-75"><small><small class="text-start">
                                            <div class="row justify-content-between">
                                                <div class="col-6"> Diana Rosa
                                                </div>
                                                <div class="col-4">
                                                    £ 3,045</div>
                                            </div>
                                        </small></li>
                                <li class="list-group-item bg-transparent opacity-50"><small class="justify-content-between">Painting - 20*30cm |<small> Rent for £214/mo</small> </small></small></li>
                            </ul>

                            <div class="card-footer border-top-0 bg-transparent">
                                <div class="d-flex justify-content-between opacity-75 small text-black">

                                    <div class="col-2">
                                        <i class="bi bi-heart"></i></i>
                                    </div>
                                    <div class="col-8"><i class="bi bi-eye"></i> </div>
                                    <div class="col-2 mx-3"> <i class="bi bi-bag"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5 mt-5">
                        <div class="card bg-transparent h-90">
                            <!-- Sale badge-->

                            <!-- Product image-->
                            <img class="card-img-top" src="assets/img/girl.jpg" alt="..." />
                            <!-- Product details-->
                            <!--                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">-->

                            <ul class="list-group bg-transparent list-group-flush">
                                <li class="list-group-item bg-transparent opacity-75">jungle</li>
                                <li class="list-group-item bg-transparent opacity-75"><small><small class="text-start">
                                            <div class="row justify-content-between">
                                                <div class="col-6"> Diana Rosa
                                                </div>
                                                <div class="col-4">
                                                    £ 3,045</div>
                                            </div>
                                        </small></li>
                                <li class="list-group-item bg-transparent opacity-50"><small class="justify-content-between">Painting - 20*30cm |<small> Rent for £214/mo</small> </small></small></li>
                            </ul>

                            <div class="card-footer border-top-0 bg-transparent">
                                <div class="d-flex justify-content-between opacity-75 small text-black">

                                    <div class="col-2">
                                        <i class="bi bi-heart"></i></i>
                                    </div>
                                    <div class="col-8"><i class="bi bi-eye"></i> </div>
                                    <div class="col-2 mx-3"> <i class="bi bi-bag"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5 mt-5">
                        <div class="card bg-transparent h-90">
                            <!-- Sale badge-->

                            <!-- Product image-->
                            <img class="card-img-top" src="assets/img/girl.jpg" alt="..." />
                            <!-- Product details-->
                            <!--                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">-->

                            <ul class="list-group bg-transparent list-group-flush">
                                <li class="list-group-item bg-transparent opacity-75">jungle</li>
                                <li class="list-group-item bg-transparent opacity-75"><small><small class="text-start">
                                            <div class="row justify-content-between">
                                                <div class="col-6"> Diana Rosa
                                                </div>
                                                <div class="col-4">
                                                    £ 3,045</div>
                                            </div>
                                        </small></li>
                                <li class="list-group-item bg-transparent opacity-50"><small class="justify-content-between">Painting - 20*30cm |<small> Rent for £214/mo</small> </small></small></li>
                            </ul>

                            <div class="card-footer border-top-0 bg-transparent">
                                <div class="d-flex justify-content-between opacity-75 small text-black">

                                    <div class="col-2">
                                        <i class="bi bi-heart"></i>
                                    </div>
                                    <div class="col-8"><i class="bi bi-eye"></i> </div>
                                    <div class="col-2 mx-3"> <i class="bi bi-bag"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col mb-5 mt-5">
                        <div class=" h-100">
                            <!-- Sale badge-->

                            <!-- Product image-->

                            <!-- Product details-->
                            <div class="card-body">
                                <div class="text-start">
                                    <!-- Product name-->
                                    <h1 class="fw-bolder">Sale</h1>
                                    <!-- Product price-->

                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer pt-0 border-top-0 bg-transparent">
                                <div class="text-start text-decoration-underline text-black"><a href="#">View the full collection</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5 mt-5">
                        <div class="card bg-transparent h-90">
                            <!-- Sale badge-->

                            <!-- Product image-->
                            <img class="card-img-top" src="assets/img/girl.jpg" alt="..." />
                            <!-- Product details-->
                            <!--                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">-->

                            <ul class="list-group bg-transparent list-group-flush">
                                <li class="list-group-item bg-transparent opacity-75">jungle</li>
                                <li class="list-group-item bg-transparent opacity-75"><small><small class="text-start">
                                            <div class="row justify-content-between">
                                                <div class="col-6"> Diana Rosa
                                                </div>
                                                <div class="col-4">
                                                    £ 3,045</div>
                                            </div>
                                        </small></li>
                                <li class="list-group-item bg-transparent opacity-50"><small class="justify-content-between">Painting - 20*30cm |<small> Rent for £214/mo</small> </small></small></li>
                            </ul>

                            <div class="card-footer border-top-0 bg-transparent">
                                <div class="d-flex justify-content-between opacity-75 small text-black">

                                    <div class="col-2">
                                        <i class="bi bi-heart"></i>
                                    </div>
                                    <div class="col-8"><i class="bi bi-eye"></i> </div>
                                    <div class="col-2 mx-3"> <i class="bi bi-bag"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5 mt-5">
                        <div class="card bg-transparent h-90">
                            <!-- Sale badge-->

                            <!-- Product image-->
                            <img class="card-img-top" src="assets/img/girl.jpg" alt="..." />
                            <!-- Product details-->
                            <!--                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">-->

                            <ul class="list-group bg-transparent list-group-flush">
                                <li class="list-group-item bg-transparent opacity-75">jungle</li>
                                <li class="list-group-item bg-transparent opacity-75"><small><small class="text-start">
                                            <div class="row justify-content-between">
                                                <div class="col-6"> Diana Rosa
                                                </div>
                                                <div class="col-4">
                                                    £ 3,045</div>
                                            </div>
                                        </small></li>
                                <li class="list-group-item bg-transparent opacity-50"><small class="justify-content-between">Painting - 20*30cm |<small> Rent for £214/mo</small> </small></small></li>
                            </ul>

                            <div class="card-footer border-top-0 bg-transparent">
                                <div class="d-flex justify-content-between opacity-75 small text-black">

                                    <div class="col-2">
                                        <i class="bi bi-heart"></i></i>
                                    </div>
                                    <div class="col-8"><i class="bi bi-eye"></i> </div>
                                    <div class="col-2 mx-3"> <i class="bi bi-bag"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5 mt-5">
                        <div class="card bg-transparent h-90">
                            <!-- Sale badge-->

                            <!-- Product image-->
                            <img class="card-img-top" src="assets/img/girl.jpg" alt="..." />
                            <!-- Product details-->
                            <!--                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">-->

                            <ul class="list-group bg-transparent list-group-flush">
                                <li class="list-group-item bg-transparent opacity-75">jungle</li>
                                <li class="list-group-item bg-transparent opacity-75"><small><small class="text-start">
                                            <div class="row justify-content-between">
                                                <div class="col-6"> Diana Rosa
                                                </div>
                                                <div class="col-4">
                                                    £ 3,045</div>
                                            </div>
                                        </small></li>
                                <li class="list-group-item bg-transparent opacity-50"><small class="justify-content-between">Painting - 20*30cm |<small> Rent for £214/mo</small> </small></small></li>
                            </ul>

                            <div class="card-footer border-top-0 bg-transparent">
                                <div class="d-flex justify-content-between opacity-75 small text-black">

                                    <div class="col-2">
                                        <i class="bi bi-heart"></i></i>
                                    </div>
                                    <div class="col-8"><i class="bi bi-eye"></i> </div>
                                    <div class="col-2 mx-3"> <i class="bi bi-bag"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Testimonials Section -->

    <div class="container-fluid">

        <div class="row bg-white">
            <div class="col-md-6 p-lg-5 mt-4">
                <div class="col-md-6 p-3">
                    <h2>Our Clients</h2><br>
                    <p>
                        Don’t just take our word for it! We have
                        worked with over 400 artists and have
                        served over thousands of customers over
                        the years. We are proud to have worked
                        with a plethora of businesses and big
                        names
                    </p>
                </div>
            </div>
            <div class="col-md-6 justify-content-sm-center mx-col-sm-4 col-lg-6 p-4 mt-lg-5">

                <div class="row">
                    <div class="col-md-4 col-sm-4 mt-1  col-lg-4">
                        <img src="assets/img/clients/Bonhams.png" class="img-fluid float-lg-start" alt="image">
                    </div>
                    <div class="col-md-4 col-sm-4 mt-1  col-lg-4">
                        <img src="assets/img/clients/Client-Royal-Society-of-Watercolour.png" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4 col-sm-4 mt-1  col-lg-4">
                        <img src="assets/img/clients/Client-trailfinders-rugby-b&W.png" class="img-fluid" alt="image">
                    </div>

                    <div class="col-md-4 col-sm-4 mt-1  col-lg-4">
                        <img src="assets/img/clients/Client-Roseberys-Auction.png" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4 col-sm-4 mt-1  col-lg-4">
                        <img src="assets/img/clients/Client-ladyko.png" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4 col-sm-4 mt-1 col-lg-4">
                        <img src="assets/img/clients/Client-DHL.png" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4 col-sm-4 mt-1 col-lg-4">
                        <img src="assets/img/clients/Christie's.png" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4 col-sm-4 mt-1 col-lg-4">
                        <img src="assets/img/clients/Client-iron-Maiden.png" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4 col-sm-4 mt-1 col-lg-4">
                        <img src="assets/img/clients/Client-Octink.png" class="img-fluid" alt="image">
                    </div>

                </div>
            </div>

        </div>
    </div>



    </main><!-- End #main -->

</div>
@include('footer')
