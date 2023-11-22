@include('header')
<main id="main">


    <section id="frame" class="frame section-frame">
        <div class="container" data-aos="fade-up">


            <div class="code col-lg-12 col-md-12 col-sm-12">
                <h2>What do you want to frame?
                </h2>
                <p class="p-4 opacity-50">
                    Select one option below
                </p>

            </div>

            <div class="row justify-content-sm-between content-stretch">

                <div class="col-lg-5 col-sm-8 mb-4 order-1 col d-flex">
                    <a href="{{ route('physical') }}" class="d-flex">
                        <div class="card-group rounded-5  mb-sm-5 border-5 shadow pb-4">
                            <div class="text-center">

                                <img src="{{asset('assets/img/Artwork.png')}}" class="col-lg-10 mt-2 mb-2 " alt="Card image cap">
                                <div class="card-body-frame ">
                                    <h4 class="card-title-frame text-center fw-bold mb-1">
                                        Physical Artwork
                                    </h4>
                                    <p class="card-text-frame  text-start mb-2 mx-5 px-2">eg. Poster, Original Artworks, Certificates, Prints, Limited Edition Prints and more </p>
                                    <p class="card-text-frame  text-start mx-5 px-2">
                                        <small> *Not suitable for 3D Objects</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-5 col-sm-8 mb-4 order-2 col  d-flex">
                    <a href="{{ url('/upload') }}" class="d-flex ">
                        <div class="card-group rounded-5  mb-sm-5 border-5 shadow pb-4" >
                            <div class="text-center">
                                <img src="{{asset('assets/img/UploadfromPC.png')}}" class="col-lg-10 mt-2 mb-2 " alt="Card image cap">

                                <div class="card-body-frame">
                                    <h4 class="card-title-frame mb-1 text-center fw-bold">
                                        Digital Image
                                    </h4>
                                    <p class="card-text-frame mb-2  text-start mx-5 px-2">Upload your photos for us to print and frame. </p>
                                    <p class="card-text-frame mb-2 text-start mx-5 px-2">
                                        <small>eg. NFTs, Family Photos, Personal Photos and more</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>

            </div>



        </div>



    </section>


</main><!-- End #main -->
@include('footer')
