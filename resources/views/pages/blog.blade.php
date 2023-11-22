
@include('header')
<main id="main">
    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 mt-5 entries">@foreach($info_blogs as  $info_blog)
                    <article class="entry mt-lg-5">
                        <div class="entry-img ">
                            <img src="{{asset($info_blog->image_blog)}}" alt="Blog Image" class="img-fluid" style="width:100%;object-fit:cover">
                        </div>
                        <h2 class="entry-title">
                            <a href="blog-single.html">{{ $info_blog->title }}</a>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">{{$info_blog->name}}</a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2023-01-01">Jan 1, 2023</time></a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            <p>
                              {{$info_blog->description}}
                            </p>
                            <div class=" col-lg-2 align-items-center col-sm-6 mt-5 mb-5">
                                <a href="{{route('blog-single',$info_blog->id)}}" class="btn1-get scrollto">Read More</a>
                            </div>
                        </div>

                    </article><!-- End blog entry -->
     @endforeach
                    <div class="blog-pagination">
                        <ul class="justify-content-center">
                            <li><a href="{{route('blogs',['page'=>1])}}">1</a></li>
                            <li><a href="{{route('blogs',['page'=>2])}}">2</a></li>
                            <li><a href="{{route('blogs',['page'=>3])}}">3</a></li>
                            <li><a href="{{route('blogs',['page'=>4])}}">4</a></li>
                        </ul>
                    </div>
                </div><!-- End blog entries list -->



                <div class="col-lg-4 mt-5">
                    <div class="sidebar mt-lg-5">

                        <h3 class="sidebar-title">Search</h3>
                        <div class="sidebar-item search-form">
                            <form action="">
                                <input type="text">
                                <button type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div><!-- End sidebar search formn-->

                        <h3 class="sidebar-title">Categories</h3>
                        <div class="sidebar-item categories">
                            <ul>
                                <li><a href="#">Abstract <span>(25)</span></a></li>
                                <li><a href="#">Cubism  <span>(12)</span></a></li>
                                <li><a href="#">Expressionism <span>(5)</span></a></li>
                                <li><a href="#">Pop Art <span>(22)</span></a></li>
                                <li><a href="#">Realism <span>(8)</span></a></li>
                                <li><a href="#">Surrealism <span>(14)</span></a></li>
                            </ul>
                        </div><!-- End sidebar categories-->

                        <h3 class="sidebar-title">Recent Posts</h3>
                        <div class="sidebar-item recent-posts">
                            <div class="post-item clearfix">
                                <img src="assets/img/blog/art.jpg" alt="">
                                <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
                                <time datetime="2023-01-01">Jan 1, 2023</time>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/blog/art.jpg" alt="">
                                <h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
                                <time datetime="2023-01-01">Jan 1, 2023</time>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/blog/art.jpg" alt="">
                                <h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                                <time datetime="2023-01-01">Jan 1, 2023</time>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/blog/art.jpg" alt="">
                                <h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
                                <time datetime="2023-01-01">Jan 1, 2023</time>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/blog/art.jpg" alt="">
                                <h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a></h4>
                                <time datetime="2023-01-01">Jan 1, 2023</time>
                            </div>

                        </div><!-- End sidebar recent posts-->

                        <h3 class="sidebar-title">Tags</h3>
                        <div class="sidebar-item tags">
                            <ul>
                                <li><a href="#">Animals</a></li>
                                <li><a href="#">Architecture</a></li>
                                <li><a href="#">Street Art</a></li>
                                <li><a href="#">Nature</a></li>
                                <li><a href="#">Landscape</a></li>
                                <li><a href="#">Portraiture</a></li>
                                <li><a href="#">Fantasy</a></li>
                                <li><a href="#">Studio</a></li>
                                <li><a href="#">Digital</a></li>
                                <li><a href="#">Conceptual</a></li>
                                <li><a href="#">Still Life</a></li>
                            </ul>
                        </div><!-- End sidebar tags-->

                    </div><!-- End sidebar -->

                </div><!-- End blog sidebar -->

            </div>

        </div>
    </section><!-- End Blog Section -->

</main><!-- End #main -->
@include('footer')
