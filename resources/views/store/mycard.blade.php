@include('header')
<main id="main">


    <section id="shop " class="shop section-shop mt-5">
        <div class="container" data-aos="fade-up">


            <div class="col-6 p-5">
                <div class="header mt-5">
                    @if(Session::has('message'))
                    <div class="alert alert-success " style="background-color: gray" role="alert">
                        {{ Session::get('message') }}
                    </div>
                    @endif
                </div>
            </div>

            <div class="row">
                <h1 class="card-title-shop mb-4">shop?</h1>
                <div class="col-7 mt-3 ">
                    <div class="row mb-2 ">
                        @if(session('framing_cart'))
                        @foreach(session('framing_cart') as $framing_item)
                        <div class="row mr-0 mb-4 card px-0">
                            <div class="card-body row">
                                <div class="col-4">
                                    @if(!empty($framing_item['fake_image']))
                                    <img src="{{$framing_item['fake_image']}}" width="100%" height="fit-content">
                                    @endif
                                </div>
                                <div class="col-8 d-flex flex-column">
                                    @if(!empty($framing_item['frame_name']))
                                    <h3 class="row">{{$framing_item['frame_name']}}</h3>
                                    @endif
                                    @if(!empty($framing_item['alt']))
                                    <p class="row">{{$framing_item['alt']}}</p>
                                    @endif
                                    @if(!empty($framing_item['width']))
                                    <div class="row mt-2 pb-2  border-bottom">
                                        <div class="col-6">
                                            Artwork Dimensions
                                        </div>
                                        <div class="col-6">
                                            {{$framing_item['width']}} x {{$framing_item['height']}}
                                        </div>
                                    </div>
                                    @endif

                                    @if(!empty($framing_item['mount_board']))
                                    <div class="row mt-2 pb-2  border-bottom">
                                        <div class="col-6">
                                            Mount
                                        </div>
                                        <div class="col-6">
                                            {{$framing_item['mount_color']}} x {{$framing_item['mount_board']}}
                                        </div>
                                    </div>
                                    @endif
                                    @if(!empty($framing_item['glass']))
                                    <div class="row mt-2 pb-2 border-bottom">
                                        <div class="col-6">
                                            Glass
                                        </div>
                                        <div class="col-6">
                                            {{$framing_item['glass']}}mm UV Acrylic
                                        </div>
                                    </div>
                                    @endif
                                    <div class="row mt-2 pb-2 border-bottom">
                                        <div class="col-6">
                                            Hanging Handware
                                        </div>
                                        <div class="col-6">
                                            wire / d-ring
                                        </div>
                                    </div>
                                    <div class="row mt-2 pb-2 border-bottom">
                                        <div class="col-6">
                                            printing
                                        </div>
                                        <div class="col-6">
                                            @if(!empty($framing_item['image']))
                                            Uploaded
                                            @elseif(!empty($framing_item['printing_id']))
                                            {{$framing_item['printing_id']}}
                                            @else None
                                            @endif
                                        </div>
                                    </div>
                                    @if(!empty($framing_item['width']))
                                    <div class="row mt-2 pb-2 border-bottom">
                                        <div class="col-6">
                                            Special folan
                                        </div>
                                        <div class="col-6">
                                            + folan
                                        </div>
                                    </div>
                                    @endif
                                    <div class="row m-auto"></div>

                                    <div class="row mt-2 mb-2">
                                        <div class="col-8">
                                            <a href="{{route('editStoreItem',$framing_item['session_item_id'])}}" class="btn btn-outline-dark btn-sm cart_remove">
                                                <i class="fa fa-pen"></i>
                                                Edit
                                            </a>
                                            @if(!empty($framing_item['session_item_id']))
                                            <a href="{{route('duplicateStoreItem',$framing_item['session_item_id'])}}" class="btn btn-outline-dark btn-sm cart_remove">
                                                <i class="fa fa-plus"></i>
                                                Duplicate
                                            </a>
                                            @endif
                                            <a href="{{route('deleteStoreItem',$framing_item['session_item_id'])}}" class="btn btn-outline-dark btn-sm cart_remove">
                                                <i class="fa fa-trash"></i>
                                                Delete
                                            </a>
                                        </div>
                                        <div class="col-3">
                                            price
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                    <div class="row mb-2 ">
                        @if(session('printing_cart'))
                        @foreach(session('printing_cart') as $printing_item)
                        <div class="row mr-0 mb-4 card px-0">
                            <div class="card-body row">
                                <div class="col-4">
                                    @if(!empty($printing_item['image']))
                                    <img src="{{'data:image/'.$printing_item['ext'].';base64,'.$printing_item['image']}}" width="100%" height="fit-content">
                                    @endif
                                </div>
                                <div class="col-8 d-flex flex-column">
                                    @if(!empty($printing_item['width']))
                                    <div class="row mt-2 pb-2  border-bottom">
                                        <div class="col-6">
                                            Artwork Dimensions
                                        </div>
                                        <div class="col-6">
                                            {{$printing_item['width']}} x {{$printing_item['height']}}
                                        </div>
                                    </div>
                                    @endif
                                    @if(!empty($printing_item['paper']))
                                    <div class="row mt-2 pb-2  border-bottom">
                                        <div class="col-6">
                                            Artwork Paper
                                        </div>
                                        <div class="col-6">
                                            {{$printing_item['paper']}}
                                        </div>
                                    </div>
                                    @endif

                                    <div class="row mt-2 pb-2 border-bottom">
                                        <div class="col-6">
                                            Hanging Handware
                                        </div>
                                        <div class="col-6">
                                            wire / d-ring
                                        </div>
                                    </div>
                                    <div class="row mt-2 pb-2 border-bottom">
                                        <div class="col-6">
                                            printing
                                        </div>
                                        <div class="col-6">
                                            @if(!empty($printing_item['image']))
                                            Uploaded
                                            @elseif(!empty($printing_item['printing_id']))
                                            {{$printing_item['printing_id']}}
                                            @else None
                                            @endif
                                        </div>
                                    </div>
                                    @if(!empty($printing_item['width']))
                                    <div class="row mt-2 pb-2 border-bottom">
                                        <div class="col-6">
                                            Special folan
                                        </div>
                                        <div class="col-6">
                                            + folan
                                        </div>
                                    </div>
                                    @endif
                                    <div class="row m-auto"></div>

                                    <div class="row mt-2 mb-2">
                                        <div class="col-8">
                                            <a href="{{route('duplicateStoreItem',$printing_item['session_item_id'])}}" class="btn btn-outline-dark btn-sm cart_remove">
                                                <i class="fa fa-plus"></i>
                                                Duplicate
                                            </a>
                                            <a href="{{route('deleteStoreItem',$printing_item['session_item_id'])}}" class="btn btn-outline-dark btn-sm cart_remove">
                                                <i class="fa fa-trash"></i>
                                                Delete
                                            </a>
                                        </div>
                                        <div class="col-3">
                                            price
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-5 mt-3 d-flex flex-column">
                    <div class="card">
                        <div class="card-body gap-3 d-flex flex-column">
                            <div class='row'>
                                <a href="{{url('checkout-transactions')}}" class="btn btn-outline-danger btn-sm cart_remove " style="font-size:1.3rem;">
                                    Check out
                                </a>
                            </div>
                            <div class='row'>
                                <button class="btn btn-outline-secondary btn-sm cart_remove " style="font-size:1.3rem;">
                                    keep shoping
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


    </section>


</main><!-- End #main -->
@include('footer')
