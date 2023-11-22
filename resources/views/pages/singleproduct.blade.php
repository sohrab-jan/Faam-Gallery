@include('header')
<main id="main" cl>


    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="mx-5">
        <div class="col-lg-7 col-sm-12 mx-5 mt-sm-0">
            <ol>
                <li><a href="{{route('artworks')}}">Shop</a></li>
                <li><a href="#">{{$product->product_subcategory_name}}</a></li>
                <li><a href="#">{{$product->artist}}</a></li>
                <li><a href="#">{{$product->name}}</a></li>
            </ol>
        </div>
        </div>
        <div class="shop m-5">


            <div class="col mx-lg-5">
        <div class="row m-5">

            <div class="col-lg-6 order-1 float-right mt-sm-0">
                <img class="col-lg-12 col-sm-8 border-1" src="{{asset($product->image)}}" alt="Product Image">
                    </div>
            <div class="col-lg-6 order-2">
                    <div class="col-lg-10 col-sm-12 float-right text-black  mt-sm-0">
                        <h1 class="card-title-shop mb-4 ">{{$product->name}}</h1>
                        <h6 class=" mt-2 opacity-50 mb-4">By <span class="text-decoration-underline"> {{$product->artist}}</span></h6>
                        <h6 class=" mt-2 opacity-50 mb-4">Edition of {{$product->quantity}}|| <span class="text-decoration-underline">{{$product->width}} x {{$product->height}} cm </span></h6>
{{--                        <p class="card-text-shop">{{$product->product_long_des}}</p>--}}
                        <p class="card-text-shop">{{$product->product_short_des}}</p>
                        <p class="card-text-shop ">£{{$product->price}}</p>
                        <form action="{{ route('addproducttocart',$product->id) }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{$product->id}}" name="product_id">
                                <input type="hidden" value="{{$product->price}}" name="price">
                                <input type="hidden" value="{{$product->quantity}}" name="quantity">
                         <div class="btn_main">
                            <input class="btn-get" type="submit" value="ADD TO BASKET">
                             <input class="btn-get" type="submit" value="HAVE THIS FRAMED">
                         </div>
                        </form>
                    </div>
            </div>
        </div>
        </div>
            <ul class="p-3 bg-light">
                <li>Category:{{$product->product_subcategory_name}}</li>
                <li>Available Quantity:{{$product->quantity}}</li>
            </ul>
            <div class="form-group col-3">
                <input type="hidden" value="{{$product->price}}" name="price">

                <input class="form-control" type="number" min="1" placeholder="How Many pics?" name="quantity">
            </div>

            <div class="icon-boxes d-flex flex-column justify-content-lg-between">
                <div class=" col-lg-12 mt-5 align-content-between justify-content-between">
            <div class="row">
                @foreach($related_products as $product)
                    <div class="col-lg-3 align-content-between justify-content-between">
                        <div class="card-group text-center">
                            <div class="card border-0" >
                                <div class="zoom-wrapper">
                                    <a href="{{route('singleproduct',[$product->id,$product->slug])}}">
                                        <img class="col-12 card-img-shop border-1" src="{{ asset($product->image) }}" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="card-body-shop">
                                    <h6 class="card-title-shop text-center"><a href="{{route('singleproduct',[$product->id,$product->slug])}}"> {{ $product->name }}</a></h6>
                                    <p class="card-text-shop text-center">{{ $product->artist }}</p>
                                    <p class="card-text-shop text-center"><small class="text-muted">{{ $product->price }}</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
                </div>
            </div>
        </div>
        </div>


    </section>


</main><!-- End #main -->
@include('footer')
