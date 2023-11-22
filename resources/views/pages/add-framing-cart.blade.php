@include('header')
<main id="main">


    <section id="shop " class="shop section-shop mt-5">
        <div class="container" data-aos="fade-up">


            {{--            <div class="col-6 p-5">--}}
            {{--                <div class="header mt-5">--}}
            {{--                    @if(Session::has('message'))--}}
            {{--                        <div class="alert alert-success " style="background-color: gray" role="alert">--}}
            {{--                            {{ Session::get('message') }}--}}
            {{--                        </div>--}}
            {{--                    @endif--}}
            {{--                </div>--}}
            {{--            </div>--}}

            <div class="icon-boxes d-flex flex-column justify-content-lg-between">
                <div class=" col-lg-12 mt-5 align-content-between justify-content-between">
                    <div class="row mt-5 ">

                        <div class="col-lg-6 mt-5">
                            <div class="card-body-shop mt-5 mt-sm-0">
                                <h1 class="card-title-shop mb-4 "></h1>
                                <div class="row">
                                    <div class="table-responsive">
                                        <thead>
                                        <tr>
                                            <th style="width: 50%">Product Name</th>
                                            <th style="width: 10%">Price</th>
                                            <th style="width: 8%">Quantity</th>
                                            <th style="width: 22%">Subtotal</th>
                                            <th style="width: 10%"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $total = 0 @endphp
                                        @if(session('add-printing-cart'))
                                            @foreach(session('add-printing-cart') as  $details)
{{--                                                <p>{{$details['printing_id']}}</p>--}}

                                                @php $total += $details['price'] * $details['quantity']@endphp
                                                <tr data-th="" >
                                                    <td data-th="Product">
                                                        <div class="row">
                                                            <div class="col-sm-3 ">
                                                                <img src="{{ asset($details['image']) }}" width="100" height="100">
                                                            </div>
                                                            <div class="col-sm-9">
                                                                <h4 class="Price">${{$details['price'] }}</h4>
                                                            </div></div>
                                                    </td>
                                                    <td data-hd="Paper">
                                                        <h4 class="Paper">{{$details['paper'] }}</h4>
                                                    </td>
                                                    <td data-hd="Quantity">
                                                        <input type="number" value="{{$details['quantity'] }}" class="form-control quantity cart_update" min="1">
                                                    </td>
                                                    <td data-th="Subtotal" class="text-center">{{$details['price'] * $details['quantity']}}</td>
                                                    <td class="actions" data-th="">
                                                        <button class="btn btn-danger btn-sm cart_remove"><i class="fa fa-trash-o"></i>Delete </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <td colspan="5" style="text-align:right;"><h3><strong>Total ${{$total}}</strong></h3>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" style="text-align:right;">
                                                <a href="{{ url('/') }}" class="btn btn-danger"><i class="fa fa-arrow-left"></i>Continue Shopping </a>
                                                <button class="btn btn-success" type="submit" >Checkout</button>
                                            </td>
                                        </tr>
                                        </tfoot>
                                    </div>
                                </div>
                            </div></div>


                    </div>
    </section>


</main><!-- End #main -->
@include('footer')
