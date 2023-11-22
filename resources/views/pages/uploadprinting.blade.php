@include('header')

<main id="main">


    <section id="frame-level" class="frame-level section-frame-level">
        <div class="container" data-aos="fade-up">


            <div class="code">
                <h2>Upload your image here


                </h2>
                <p class="p-3">
                    Please upload the highest resolution file you have for best results.

                </p>

            </div>




            <div class="col-lg-6 container-fluid">

                <div class="card-group rounded-5 border-5 shadow pb-4">
                    <div class="text-center">

                        <a href="">
                            <img src="./assets/img/Uploadsymbol.png" class="col-8" alt="Card image cap">
                        </a>
                        <div class="card-body-frame flex items-center ">
                            <h6 class="card-title-frame text-center"><a href="#">Upload your JPEG, TIFF & PNG image
                                </a>
                            </h6>
                            <form action="{{route('uploadimgprinting')}}" method="POST" enctype="multipart/form-data"
                            >
                                @csrf
                                <input class="mx-auto items-center self-center w-auto" name="image" type="file" placeholder="file" />
                                <button type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </section>


</main><!-- End #main -->

@include('footer')
