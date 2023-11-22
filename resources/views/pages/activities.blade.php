@include('header')

<main id="main">

    <section id="activities" class="about section-ba">
        <div class="container" data-aos="fade-up">
            <div class="code-arti">
                <div class="image-container">
                    <div class="slide">
                        <div class="row pb-5">
                            <div class="d-flex col col-6 mt-5 amin2">
                                @foreach($all_exhibitions as $exhibition)
                                    <div class="text-slider-amin w-100">
                                        <h1 class="fw-bold mt-lg-5 text-start"
                                            value="{{ $exhibition->id}}">{{ $exhibition->exhibition_name }}</h1>
                                        <p class="text-black  mt-4 mb-5  text-start " style="height:150px">
                                            {{$exhibition->exhibition_short_des}}
                                        </p>
                                    </div>
                                @endforeach

                                <div class="d-flex amin">
                                    <a class="previous" onclick="moveSlides(-1)">
                                        <i class="bi bi-chevron-compact-left Slide-Size"></i>
                                    </a>
                                    <div style="text-align:start">
                                        <span class="footerdot" onclick="activeSlide(1)"></span>
                                        <span class="footerdot" onclick="activeSlide(2)"></span>
                                        <span class="footerdot" onclick="activeSlide(3)"></span>
                                    </div>
                                    <a class="next" onclick="moveSlides(1)">
                                        <i class="bi bi-chevron-compact-right Slide-Size"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 mt-3">
                                @foreach($all_exhibitions as $exhibition)
                                    <img class="image-slider-amin" src="{{asset($exhibition->image_exhibition)}}"
                                         style="height: 400px;object-fit: contain;"/>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="artists" class="artists section-artists" >


        <div class="container" data-aos="fade-up">
            <div class="col justify-content-between">
                <h4 class="hr-h4">
                    <nav class="navbar-nav" style="border-bottom: 6px solid #d9d9d9;">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" id="tab1-link" data-bs-toggle="tab" href="#tab1">Art Wall</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab2-link" data-bs-toggle="tab" href="#tab2">Art Fairs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab3-link" data-bs-toggle="tab" href="#tab3">Exhibitions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab4-link" data-bs-toggle="tab" href="#tab4">Festivals & Events</a>
                            </li>
                        </ul>
                    </nav>
                </h4>
            </div>

            <!-- Tab Content -->
            <div class="tab-content">
                <div id="tab1" class="tab-pane fade show active">
                    <!-- Content for Art Wall tab -->
                    @include('pages.artwall')
                </div>
                <div id="tab2" class="tab-pane fade">
                    <!-- Content for Art Fairs tab -->
                    @include('pages.artfairs')
                </div>
                <div id="tab3" class="tab-pane fade">
                    <!-- Content for Exhibitions tab -->
                    @include('pages.exhibition')
                </div>
                <div id="tab4" class="tab-pane fade">
                    <!-- Content for Festivals & Events tab -->
                    @include('pages.festival-event')
                </div>
            </div>
        </div>

        {{--        <div class="container" data-aos="fade-up">--}}
{{--            <div class="col justify-content-between">--}}
{{--                <h4 class="hr-h4">--}}
{{--                    <nav class="navbar-nav" style="border-bottom: 6px solid #d9d9d9;">--}}
{{--                        <ul>--}}
{{--                            <li class="nav-item-Gallery p-2" style="box-shadow: 0px 6px #0a0a0a;">--}}
{{--                                <a class="nav-link-G active" href="#">Art Wall</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item-Gallery px-2">--}}
{{--                                <a class="nav-link-G" href="{{route('artfairs')}}">Art Fairs</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item-Gallery px-2">--}}
{{--                                <a class="nav-link-G" href="{{route ('exhibition')}}">Exhibitions</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item-Gallery px-2">--}}
{{--                                <a class="nav-link-G" href="{{route('festival.event')}}">Festivals & Events</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </nav>--}}
{{--                </h4>--}}
{{--            </div>--}}

{{--            <div class="container">--}}
{{--                <div class="row mt-5">--}}
{{--                    @foreach($all_6_exhibitions as $exhibition)--}}
{{--                        <div class="col-lg-3 mb-4 text-start">--}}
{{--                            <a href="{{route('singleactivity',$exhibition->id)}}" class="card border-0">--}}
{{--                                <img style="width:100%;aspect-ratio:3/2;object-fit:cover"--}}
{{--                                     src="{{asset($exhibition->image_exhibition)}}" class="card-img-top" alt="..."/>--}}
{{--                                <div class="card-body card-ex">--}}
{{--                                    <h5 class="card-title">{{$exhibition->title}}</h5>--}}
{{--                                    <h6 class="card-subtitle mb-2 text-body-red">{{$exhibition->date}}</h6>--}}
{{--                                    <p class="card-text">{{substr($exhibition->exhibition_short_des,0,40)}}....</p>--}}
{{--                                </div>--}}

{{--                            </a>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </section>

</main><!-- End #main -->
@include('footer')
<script src="{{asset('assets/js/activities.js')}}"></script>

