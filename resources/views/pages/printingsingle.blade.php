@include('header')

<script src="{{asset('assets/js/nouislider.js')}}"></script>
<link href="{{asset('assets/css/framing.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

<main id="main">
    <section id="frame_section" class="frame section-frame">
        <div class="container mb-0" data-aos="fade-up">
            <div class="code col-lg-12 col-md-12 col-sm-12">
                <h2>Lets view your image</h2>
                <p class="p-4 opacity-50">Please upload the highest resolution file you have for best result</p>
            </div>
        </div>
        <div class="container mt-1" data-aos="fade-up">
            <form action="{{route('mycart-printing')}}" method="POST">
                @csrf
                <input type="hidden" id="session_item_id" name="session_item_id" value="{{uniqid('printing_item_id_')}}" />
                <input type="hidden" id="frame" name="frame" value="" />
                <input type="hidden" id="paper" name="paper" value="" />
                <input type="hidden" id="image" name="image" value="{{$test}}">
                <input type="hidden" id="ext" name="ext" value="{{$ext}}">
                <input type="hidden" id="vahed" name="vahed" value="cm">
                <div class="row">
                    <div class="col-md-6 mt-5 order-md-1">
                        <div>
                            <img id="draw" src="{{'data:image/'.$ext.';base64,'.$test}}" style="display: block;max-width: 100%;">
                        </div>
                        <div class="m-3 mt-3">
                            <div id="slider" style="width: 100%;"></div>
                        </div>
                    </div>

                    <div class="col-md-6 order-md-2">
                        <div class="frame-design-tools">
                            <div class="col-md-24 mb-3">
                                <h4 class="frame-heading mb-2">Choose your print size </h4>
                                <div class="d-flex gap-2">
                                    <input type="name" name="width" id="width" value="20" style="max-width: 100px;" min="20" max="80" onchange="widthOnchange(this)">
                                    <p>x</p>
                                    <input type="name" value="20" name="height" id="height" style="max-width: 100px;" min="20" max="80" onchange="widthOnchange(this)">
                                    <p>cm</p>
                                    <p class="flex-1" style="white-space: nowrap;margin-left: 15px;">
                                        <small id="dpi">
                                        </small>
                                        dpi at this size
                                    </p>
                                </div>
                            </div>

                            <div class="clear-both">
                                <h5 class="controller-heading mt-4 mb-3">PAPER CHOICE</h5>
                                <div class="row mb-2">
                                    <div class="col-6">
                                        <div class="card">
                                            <div class="card-body" onclick="select_paper_1()">
                                                <h6 class="glass-title mb-2">Satin photo paper</h6>
                                                <div class="radio-active-icon select_paper_1"></div>
                                                <p class="frame-headingp card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="card">
                                            <div class="card-body" onclick="select_paper_2()">
                                                <h6 class="glass-title mb-2">Matte photo paper</h6>
                                                <div class="radio-active-icon select_paper_2"></div>
                                                <p class="frame-headingp card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="clear-both">
                                <h5 class="controller-heading mt-4 mb-3">Frame</h5>
                                <div class="row mb-2">
                                    <div class="col-6">
                                        <div class="card">
                                            <div class="card-body" onclick="select_no_frame()">
                                                <h6 class="glass-title mb-2">No Frame</h6>
                                                <div class="radio-active-icon select_no_frame"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="card">
                                            <div class="card-body" onclick="select_frame()">
                                                <h6 class="glass-title mb-2">Add Frame</h6>

                                                <div class="radio-active-icon select_frame"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input class="btn-get" type="submit" value="Add To Cart">



                        </div>
                    </div>
                </div>
            </form>
        </div>

    </section>
</main><!-- End #main -->

@include('footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.js" integrity="sha512-LjPH94gotDTvKhoxqvR5xR2Nur8vO5RKelQmG52jlZo7SwI5WLYwDInPn1n8H9tR0zYqTqfNxWszUEy93cHHwg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.css" integrity="sha512-C4k/QrN4udgZnXStNFS5osxdhVECWyhMsK1pnlk+LkC7yJGCqoYxW4mH3/ZXLweODyzolwdWSqmmadudSHMRLA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="{{asset('assets/js/jquery-cropper.js')}}"></script>
<script src="{{asset('assets/js/printing-single.js')}}"></script>
