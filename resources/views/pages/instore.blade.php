@include('header')

<main id="main">
    <section id="artists" class="section-artists mt-5">
        <div class="framing-in">
            <div class="col-lg-8">
                <div class="code-arti bg-white">
                    <h1 class="mt-5 fw-bold">Professional Framing</h1>
                    <p class="mt-2 mb-2 ">Proud offer professional framing services since 1993.All frames are bespoke
                        and made by our experienced tram of artisan framers.Offering free consultation for maximising
                        the presentation and protection of your artwork.Our showroom features over 700 defferent types
                        of frames in varying profiles and colours ranging from traditional to contemporary and modern
                        designs.</p>
                    <p>We also offer online framing service which is great when you like to have express framing for
                        your paintings,posters and more.</p>
                    <div class="col-12 mt-4">
                        <a href="#about" class="btn-get scrollto">View Services</a>
                    </div>
                </div>
            </div>
        </div>
        </div>


        </div>
        <img src="./assets/img/Inside-framing-Section.jpg" style="width: 100%;" alt="">
    </section>

    <section id="about" class="about section-ba">

        <div class="row mb-5 justify-content-sm-between">


            <div class="col-lg-5 col-sm-8 mx-5 text-center">
                <div class="row">
                    <div class="col-3 mx-5 mt-5">
                        <img src="./assets/img/Social Icons/At-Studio.png" class="img-fluid mx-5" alt="">
                    </div>
                    <div class="col-6 mt-5">
                        <div class="col-10">
                            <h1 class="fw-bold  text-start" style="width: 400px;">In-Store Framing</h1>
                            <p class="text-start mt-3">
                                Suitablefor those seeking professional framing advice to maximise the presentation and
                                protection of their artwork
                            </p>
                            <p class="text-start mt-3">
                                Our showroom features over 700 frames in a variety of styles,colours,and profiles, and
                                during your visit,we will provide you with personalised advice on appropriate framing
                                styles shirts,3D objects and more
                            </p>

                            <p class="text-start mt-3">
                                <a href="#about" class="btn-get scrollto">Visit us</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-sm-8 text-center">
                <div class="row">
                    <div class="col-3 mt-5">
                        <img src="./assets/img/Social Icons/Upload-from-PC.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-6 mt-5">
                        <div class="col-10">
                            <h1 class="fw-bold  text-start " style="width: 400px;">Online Framing</h1>
                            <p class=" text-start  mt-3">
                                A quick and simple way to order custom-made frames made by professionals for
                                posters,artwork,and more.
                            </p>
                            <p class="text-start mt-3">
                                From the comfort fo your own home,you can now view your artworks in various different
                                frameswith varying profiles,styles and colours.We will ship your custom-built frame
                                along with instructions for putting your art inside a little fun DIY!
                            </p>
                            <p class="text-start mt-3">
                                <a href="#about" class="btn-get scrollto">Start Framing</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="./assets/img/testimonials/framing-banner.jpg" style="width: 100%;" alt="">
        <div class="framing-in">
            <div class="col-lg-8 mb-5">
                <div class="code-arti">
                    <h1 class="mt-5 fw-bold">Services</h1>
                    <p class="mt-2 mb-2 ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti placeat
                        aliquam numquam laudantium nostrum,
                        debitis voluptates cupiditate, i.lorem Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Corrupti
                        debitis voluptates cupiditate, enim, odio repellendus eveniet! Iste molestiae voluptatum
                        veritatis illo fuga incidunt corporis magni.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat vero ullam incidunt quidem,
                        explicabo, fugiat est mollitia reiciendis
                        ab eiu.</p>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @php
                    $services = \App\Models\Service::where('is_active',1)->get();
                @endphp

                @foreach ($services as $service)
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="container-fluid text-center">
                            <div class="col-lg-12">
                                <a href="{{$service->image}}" data-lightbox="image-group" data-title="{{$service->title}}">
                                    <img src="{{asset($service->image)}}" alt="{{$service->title}}" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <hr>
        <div class="section-ba mt-4">
            <div class="container-form">
                    <div class="container mt-8 mb-4">
                        <h2 class="text-center">Get in touch</h2>
                        <form method="POST" action="{{route('contacts.store')}}">
                            @csrf
                            <div class="formBox">
                                <div class="row">
                                    <p class="text-center">Fill out this form to get an idea of our framing prices.We aim to respond to all enquiries within tow business days.</p>
                                    <br>
                                    <p class="text-center">All quotes obtained through this service are estimates;for exact quotes,please visit our showroom.</p>

                                </div>
                                <div class="row justify-content-center">
                                    <div class="form-group col-md-6 col-lg-4">
                                        <label for="inputEmail4"></label>
                                        <input type="text" class="form-control bg-transparent" name="fname" id="fname" placeholder="First Name*">
                                    </div>
                                    <div class="form-group col-md-6 col-lg-4">
                                        <label for="inputPassword4"></label>
                                        <input type="text" class="form-control bg-transparent" name="lname" id="lname"
                                               placeholder="Last Name*">
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="form-group col-md-6 col-lg-4">
                                        <label for="inputEmail4"></label>
                                        <input type="email" name="email" class="form-control bg-transparent" id="inputEmail4"
                                               placeholder="Email*">
                                    </div>
                                    <div class="form-group col-md-6 col-lg-4">
                                        <label for="inputPassword4"></label>
                                        <input type="tel" class="form-control bg-transparent" name="phone" id="inputPassword4"
                                               placeholder="Phone">
                                    </div></div>

                                <div class="row justify-content-center">
                                    <div class="form-group col-6 col-lg-4">
                                        <label for="inputPassword4"></label>
                                        <input type="text" class="form-control bg-transparent" name="company_name" id="inputPassword4"
                                               placeholder="Company(If Applicable)">
                                    </div>
                                   <div class="form-group col-6 col-lg-4">
                                        <label for="inputPassword4"></label>
                                        <select class="form-control" name="service_name">
                                            <option>Select A Service </option>
                                            <option value="Printing">Printing</option>
                                            <option value="Framing">Framing</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="row  justify-content-center">
                                    <div class="form-group col-md-6 col-lg-8">
                                        <style>
                                            textarea {
                                                border: none;
                                                outline: none;
                                                border-bottom: 1px solid #ccc; /* You can adjust the color and thickness of the outline */
                                            }
                                        </style>
                                        <label for="inputEmail4" class="basemessage" aria-label="leave a message"
                                               role="textbox"></label>
                                        <textarea aria-placeholder="Type your message here*"
                                                  placeholder="Type your message here*"
                                                  name="message" class="form-control bg-transparent" id="inputEmail4" ></textarea>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn1-get mt-5 mb-5">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
        </div>
        </div>
    </section>

    <section id="about" class="about section-p">
        <div class="container" data-aos="fade-up">


            <div class="col-lg-12 mt-4 mb-3 d-flex align-items-center">
                <div class="icon-boxes d-flex flex-column justify-content-lg-between">
                    <div class="row">
                        <div class="col-md-3 text-center icon-box" data-aos="fade-up" data-aos-delay="100">
                            <img src="assets/img/Satisfaction-Garanteed.png"
                                 class="col-2 rounded opacity-50 mx-auto d-block" alt="...">
                            <!--                  <img src="assets/img/Satisfaction-Garanteed.png" class="icon-box" alt="">-->
                            <h5 class="text-center mt-4 mb-2">Satisfaction Guaranteed</h5>
                            <p>100% guaranteed satisfaction. We go above and
                                beyond to make you happy with our service, and
                                your satisfaction is our goal</p>
                        </div>
                        <div class="col-md-3 icon-box" data-aos="fade-up" data-aos-delay="200">
                            <img src="assets/img/user.png" class="col-2 rounded mx-auto opacity-50 d-block"
                                 alt="user service">

                            <h5 class="text-center mb-2 mt-4">Consultation</h5>
                            <p>Receive free framing consultation from experienced team of artisan framers</p>
                        </div>
                        <div class="col-md-3 icon-box" data-aos="fade-up" data-aos-delay="300">
                            <img src="assets/img/Customer-Service.png" class="col-2 rounded mx-auto opacity-50 d-block"
                                 alt="...">

                            <h5 class="text-center mt-4 mb-2">Great Customer Service</h5>
                            <p>Constantly improving our services to make it easier
                                for you to have a more enjoyable experience using
                                our services</p>
                        </div>
                        <div class="col-md-3 icon-box" data-aos="fade-up" data-aos-delay="400">
                            <img src="assets/img/Trusted-by-expert.png" class="col-2 rounded mx-auto opacity-50 d-block"
                                 alt="...">

                            <h5 class="text-center mt-4 mb-2">Trusted by Professional</h5>
                            <p>Working with the bests in the field of art and framing
                                has made us an attractive choice for collectors,
                                auctioneers and art enthusiasts</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="./assets/img/Glass-displaying.jpg" style="width: 100%;" alt="">

        <section id="about" class="about section-ba">

            <div class="row mb-5 justify-content-sm-between">


                <div class="col-lg-12 col-sm-8 text-center">
                    <div class="row">
                        <div class="row">
                            <div class="col-4">
                                <h1 class="mt-5 mb-4 mx-2 fw-bold" style="width: 400px;font-size: 2rem;">
                                    Glass & Acrylic Options
                                </h1>
                                <p style="text-align: start;" class="m-5">
                                    View our extensive selection of glass and Acrylic glazing options.Apart from the
                                    widely used glass in picture framing,we
                                    also offer art specialised glass and acrylic that offer protection from UV
                                    damage and also antireflection properties.
                                </p>
                                <p style="text-align: start;" class="m-5 mb-0">
                                    UV glass are ideal for original arts and limited edition prints.Anti Reflect Glass
                                    is ideal deep frames and boxes where low reflectance for clarity of the image is
                                    critical.Please get in touch for further information and advice.

                                    <img src="./assets/img/Glass-Sample-in-box.jpg" style="width: 100%;" alt="">
                                </p>
                            </div>
                            <div class="col-7 m-4">
                                <img src="./assets/img/Glass-Types.jpg" style="width: 100%;" alt="Glass-Sample-in-box">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="./assets/img/Hanging-Image.jpg" style="width: 100%;" alt="">

            <div class="col-lg-12 col-sm-8 text-center">
                <div class="row">
                    <div class="row">
                        <div class="col-4">
                            <h1 class="mt-5 mb-4 mx-2 fw-bold" style="width: 400px;font-size: 2rem;">
                                Fixings & Hanging
                            </h1>
                            <p style="text-align: start;" class="m-5 p-4">
                                At Faam,we offer varous types of hangings suitable for a different size,
                                style and type of frame.From tranditional D ring to modern hangers that enable more
                                flushes hanging finish.
                            </p>
                        </div>
                        <div class="col-7 ">
                            <img src="./assets/img/Hanging-Styles.jpg" style="width: 100%;" alt="Glass-Sample-in-box">

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 justify-content-center">
                <div class="col-lg-12 col-sm-8">
                    <div class="row ">
                        <div class="col-9">
                            <h1 class="mt-2 mx-5 fw-bold">
                                Our Album

                            </h1>

                            <p class="p-5 mx-3">Browse through our previous works for unique framing ideas, inspiration
                                and gift ideas.
                                <br>
                                Follow us on Instagram,Facebook and Twitter.
                            </p>

                        </div>
                        <div class="col-3">
                            <div class="container text-center">
                                <div class="row">
                                    <div class="col">
                                        <a href="#">
                                            <img src="assets/img/instagram.png" class="container-fluid">
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="#">
                                            <img src="assets/img/facebook.png" class="container-fluid">
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="#">
                                            <img src="assets/img/twitter.png" class="container-fluid">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center justify-content-center">

                    <div class='sk-instagram-feed' data-embed-id='221395'></div><script src='https://widgets.sociablekit.com/instagram-feed/widget.js' async defer></script>
                </div>

            </div>


            <div class="row justify-content-center">
                <div class="col-6 p-5">
                    <div class="p-5">
                        <a href="#"><h1 class="fw-bolder mt-sm-0">Visit our showroom
                            </h1>
                        </a>


                        <div class="row">
                            <p class=" py-4">
                                For the besrt experience,visit our showroom to view our collection of 700+ frames.<br>
                                Don't forget to bring our artworks!
                            </p>
                            <p>
                                If you wish to book an appointment click <a href="#" class="text-decoration-underline">here!</a>
                            </p>
                        </div>
                        <div class="row">
                            <h3 class="mt-5" style="color: black;">Address:</h3>
                            <p class="">
                                131 Percy Road,Whitton,Twickenham,London,TW2 6HT<br>
                                Kingdom,TW2 6HT<br>
                                Mon to Fri: 9:30am to 5:30pm | Sat: 10:30am to 5:30pm | Sun: Closed
                            </p>
                            <p class="mt-3">Tel:020 36321468 | Email:<span
                                    class="text-succes text-decoration-underline">FaamPictureFraming@gmail.com</span>
                            </p>
                        </div>
                        <div class="row">
                            <h5 class="mt-2" style="color: black;">Parking:</h5>
                            <p>
                                Free street parking after 2pm on Jubilee Ave and Montrose active(except during event
                                days)
                            </p>
                            <p>
                                Paid parking bays on Jubilee Ave (3 spaces) and</p>
                            <p>Monstrose Ave</p>
                            <p class="mb-3">(expect during event days)
                            </p>
                            <p>Paid parking bays on Jubilee Ave (3 spaces)</p>
                            <p class="mb-sm-4">
                                30min:65min:£1.25 | 90min:£1.85
                            </p>


                        </div>
                        <div class="row">
                            <h5 class="mt-2" style="color: black;">Publick Transport:</h5>
                            <p>
                                Bus: Whitton Station Stop(H22 & 110) - 1 min wal</p>
                            <p> Train station: Whitton Railway station - 1 min walk
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-6 mt-5">
                    <div class="row">
                        <img src="./assets/img/parkingmap.jpg" class="">
                    </div>
                </div>
            </div>
        </section>


        </div>
    </section>

    </section><!-- End About Section -->

</main><!-- End #main -->
@include('footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
