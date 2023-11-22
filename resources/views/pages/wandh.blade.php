@include('header')

<main id="main">

    <section id="frame-size" class="frame-size section-frame-size">
        <div class="container" data-aos="fade-up">
            <div class="code">
                <h2>It’s time to Measure your artwork
                </h2>
                <p class="p-4 opacity-50">
                    <small>Please read the section below to learn how to correctly measure your artworks, limited
                        edition prints or photos
                    </small>
                </p>
            </div>
            <form action="{{route('framingstore')}}" method="get">
                <div class="container-fluid text-center">
                    <div class="row justify-content-md-center">
                        <div class="col-lg-5 container-fluid col-sm-8 col-md-6">
                            <h4 class="text-center">Width</h4>
                            <div class="container-fluid col-lg-6 col-sm-7 col-md-8 align-items-center mt-3 mb-5">
                                <div class="input-group justify-items-center mt-3 mb-3">
                                    <input type="number" class="form-control bg-transparent " name="width" style="color: #188618;" aria-label="Text input with segmented dropdown button" id="widthInput">
                                    <div class="input-group-prepend border rounded-right p-0 d-flex " style="min-width: 100px;">
                                        <select onchange="changeEvent(this)" id="vahed" name='vahed' class="container-fluid form-select-cat p-2" aria-label="Default select example" style="color:#188618">
                                            <option value='cm' selected>cm
                                            </option>
                                            <option value="mm">mm</option>
                                            <option value="inch">inch</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 container-fluid col-sm-8 col-md-6">
                            <h4 class="text-center">Height</h4>
                            <div class="container-fluid col-lg-6 col-sm-7 col-md-8 align-items-center  mt-3 mb-5">
                                <div class="input-group mt-3 mb-3">
                                    <input type="number" min="10" max="800" class="form-control bg-transparent" style="color: #188618;" name="height" aria-label="Text input with segmented dropdown button" id="heightInput">
                                    <div class="input-group-prepend rounded-right border p-0 d-flex" style="min-width: 100px;">
                                        <select onchange="changeEvent(this)" id="vahed1" name='vahed1' class="container-fluid form-select-cat p-2" aria-label="Default select example" style="color:#188618">
                                            <option selected value="cm">cm
                                            </option>
                                            <option value="mm">mm</option>
                                            <option value="inch">inch</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid col-lg-3 align-items-center col-sm-6 mt-3 mb-5">
                        <button id="startFraming" type="submit" class="btn-shop scrollto">Start Framing
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </section>
    <!--}}} section -->

    <section id="frame-level" class="frame-level section-frame-level">
        <div class="container" data-aos="fade-up">


            <div class="code">
                <h2>Measuring Instructions
                </h2>
                <p class="p-4 ">
                    <small>Measuring your artwork is very simple. The measurements you take will determine how well the
                        frame would fit your artwork, so we must get accurate measurements to ensure the best size.
                    </small>
                </p>
            </div>
            <div class="col-lg-8 align-content-center align-items-center">
                <h6 class="text-start">STEP 1
                </h6>
                <p>Ensure your artwork lays flat on a clean flat surface.
                </p>
                <div class="container-fluid col-lg-4 align-items-center col-sm-6 mt-3 mb-5">
                </div>
            </div>
            <div class="col-lg-8">
                <h6 class="text-start">STEP 2
                </h6>
                <p>Use a ruler or tape meter for measuring and have a paper to write the dimensions before inputting on
                    the website. Check your units on the ruler and change the website unit accordingly.
                    <img src="{{asset('assets/img/Measingtool.png')}}">
                </p>
            </div>
            <div class="col-lg-12">
                <h6 class="text-start">STEP 3
                </h6>
                <p>Measure the<a href="#" class="alert-link"> width </a>and <a href="#" class="alert-link"> height</a>
                    of the area you would like to frame. If your artwork has white borders and you don't want to see it,
                    use the dimensions of the image you want to be visible. Please view the examples below to help you.
                    For print with signatures please also measure the dimensions of the area you like to be visible.
                </p>
                <br>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-8 col-sm-4 mt-1 mb-5  col-lg-5">
                            <img src="{{asset('assets/img/imge1.jpg')}}" class="img-fluid" alt="image">
                        </div>
                        <div class="col-md-8 col-sm-4 mt-1 mb-5  col-lg-5">
                            <img src="{{asset('assets/img/imge2.jpg')}}" class="img-fluid" alt="image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <h6 class="text-start">STEP 4
                </h6>
                <p>Note that the frame will overlap your artwork by 5 mm from each side to secure your work in place. If
                    you include a mount (card board border), the mount will overlap your artwork by approximately 3 mm
                    from each side.
                </p>
                <p>If you like to include a mount but don't want any overlap, simply add 6mm to your width and height
                    dimensions after measuring.
                </p>
                <p class="text-muted">
                    Still not sure? Get<a href="#" class="text-link "> in touch</a> with us if you need a hand.
                </p>
            </div>
        </div>
    </section>
</main>

@include('footer')
<script>
    function changeEvent(e) {
        const val = e.value
        $('#vahed1').val(val);
        $('#vahed').val(val);

    }
</script>
