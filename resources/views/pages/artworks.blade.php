@php
    $categories = App\Models\Category::latest()->get();
@endphp

@include('header')

<main id="main">
    <section class="filters-shop col-md-12">
        <form action={{route('artworks.filter')}} method="GET">
            <div class="ra-filter-container-loader-loader"></div>
            <div type="flex" class="ant-row " id="style" style="margin-left: 60px;row-gap: 0px;">
                <div class="col-xl-2 mt-3 col-md-2 col-sm-8" style="padding-left: 16px; padding-right: 16px;">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <input type="number" id="minHeight" name="min_height" min="0" placeholder="Min Height:">
                    </div>
                        <div class="d-flex justify-content-between align-items-center">
                        <input type="number" id="maxHeight" name="max_height" min="0"  placeholder="Max Height:">
                    </div>
                    <div class="d-flex justify-content-between align-items-center">

                    </div>
                </div>
                <div class="col-xl-2 mt-3 col-md-2 col-sm-8" style="padding-left: 16px; padding-right: 16px;">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <input type="number" id="minWidth" name="min_width" min="0" placeholder="Min Width:">
                    </div>
                        <div class="d-flex justify-content-between align-items-center">
                        <input type="number" id="maxWidth" name="max_width" min="0"  placeholder="Max Width:">
                    </div>
                    <div class="d-flex justify-content-between align-items-center">

                    </div>
                </div>
                <hr class="mt-1">
                <div class="col-xl-2 mt-3 col-md-8 col-sm-8" style="padding-left: 16px; padding-right: 16px;">
                    <select class="container-fluid form-select-cat" aria-label="Default select example" name="size">
                        <option value="Large">Large</option>
                        <option value="Medium">Medium</option>
                        <option value="Small">Small</option>
                    </select>
                    <hr class="mt-1">
                </div>
                <div class="col-xl-2 mt-3 col-md-8 col-sm-8" style="padding-left: 16px; padding-right: 16px;">
                    @php
                        $mediumCategories = App\Models\Category::where('parent_id',1)->latest()->get();
                    @endphp
                    <select class="container-fluid form-select-cat" aria-label="Default select example" name="category_ids[]">

                        @foreach($mediumCategories as $category)
                            <option value="">Medium</option>
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    <hr class="mt-1">
                </div>
                @php
                    $stylesCategories = App\Models\Category::where('parent_id',2)->latest()->get();
                @endphp
                <div class="col-xl-2 mt-3 col-sm-8" style="padding-left: 16px; padding-right: 16px;" >
                    <select class="container-fluid form-select-cat" aria-label="Default select example" name="category_ids[]" id="sections">
                        <option value="">Style</option>
                        @foreach($stylesCategories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    <hr class="mt-1">
                </div>
                @php
                    $themeCategories = App\Models\Category::where('parent_id',3)->latest()->get();
                @endphp
                <div class=" col-xl-2 mt-3 col-md-8 col-sm-8" style="padding-left: 16px; padding-right: 16px;">
                    <select class="container-fluid form-select-cat" aria-label="Default select example" name="category_ids[]">
                        <option value="">Theme</option>
                        @foreach($themeCategories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    <hr class="mt-1">
                </div>
                @php
                    $artists = App\Models\Artist::get();
                @endphp
                <div class=" col-xl-2 mt-3 col-md-8 col-sm-8" style="padding-left: 16px; padding-right: 16px;">
                    <select class="container-fluid form-select-cat" aria-label="Default select example" name="artist_id">
                        @foreach($artists as $artist)
                        <option value="{{$artist->id}}">{{$artist->full_name}}</option>
                        @endforeach
                    </select>
                    <hr class="mt-1">
                </div>
                <div class="col-lg-2 mt-3 col-md-2 col-sm-8 justify-content-between align-content-between" style="padding-left: 22px; padding-right: 0px;">
                    <div class="ra-filter-item">
                        <label class="control control--checkbox">In Stock
                            <input type="checkbox" name="in_stock"/>
                            <div class="control__indicator"></div>
                        </label>
{{--                        <label class="control control--checkbox" > Sale--}}
{{--                            <input type="checkbox"/>--}}
{{--                            <div class="control__indicator"></div>--}}
{{--                        </label>--}}
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Filter</button>
                </div>
            </div>
        </form>
    </section>

    <section id="shop" class="shop section-shop">
        <div class="container" data-aos="fade-up">
                <div class="icon-boxes d-flex flex-column justify-content-lg-between">
                    <div class=" col-lg-12 mt-5 align-content-between justify-content-between">
                        <div class="row">
                              @foreach($filteredProducts as $product)
                                <div class="col-lg-3 align-content-between justify-content-between">
                                    <div class="card-group text-center">
                                        <div class="card border-0" >
                                            <div class="zoom-wrapper">
                                                <a href="{{route('singleproduct',[$product->id,$product->slug])}}" type="submit">
                                                <img class="col-12 card-img-shop border-1" src="{{ asset($product->image) }}" alt="Card image cap">
                                                </a>
                                            </div>
                                            <div class="card-body-shop">
                                                <h6 class="card-title-shop text-center">
                                                    <a href="{{route('singleproduct',[$product->id,$product->slug])}}"> {{ $product->name }}</a>
                                                </h6>
                                                <p class="card-text-shop text-center">{{ $product->artist->full_name }}</p>
                                                <p class="card-text-shop text-center">
                                                    <small class="text-muted">£ {{ $product->price }}</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            {{ $filteredProducts->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>

</main>
@include('footer')
