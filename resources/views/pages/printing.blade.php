@include('header')

<main id="main">
    <section id="Home" class="mt-4" style="z-index:0;background:white;">
        <video id="home-bg-video" autoplay muted>
            <source src="{{asset('./assets/img/print/whitebackground.mp4')}}" type="video/mp4">
            <source src="/video/solo.ogv" type="video/ogg">
            <source src="/video/solo.webm" type="video/webm">
        </video>


        <div id="home-overlay"></div>



        <!-- Home Content -->

        <div id="home-content">
            <div id="home-content-inner" class="text-center">
                <div id="home-heading" class="col-lg-6 col-sm-8 mt-5 ">
                    <h1 id="home-heading-1" class="">Professional<br>
                        Photo & Art Printing</h1><br>
                    <h3 id="home-heading-2" class="mt-2">100% Guaranteed Satisfaction </h3>

                    <div id="home-text" class="col-lg-12 mt-3 px-5">
                        <p>Utilising cutting-edge technology to create colour-accurate Giclée
                            prints for you.Our hand-picked paper and canvascollection includes
                            seven different types of professional and sustainable art papers,
                            ranging from highly textured to smooth and matte to glossy.</p>

                        <p class="mt-4">Highest Resolution With Vivid Colours</p>


                        <div id="home-btn">
                            <a class="btn btn-general btn-home mt-4" href="{{ route('upload-printing') }}" title="Start Printing" role="button">Start Printing</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </section>


    <section id="about" class="about bg-white">

        <div class="row">


            <div class="icon-boxes mt-3 mb-3">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-2 text-center icon-box" data-aos="fade-up" data-aos-delay="100">
                        <img src="assets/img/print/Time-icon.png" class="img-fluid  mx-auto d-block" alt="...">
                        <!--                  <img src="assets/img/Satisfaction-Garanteed.png" class="icon-box" alt="">-->
                        <h5 class="text-center mt-2 mb-2">Archival Quality </h5>
                        <p>Up to 200 years</p>
                    </div>
                    <div class="col-lg-2 text-center icon-box" data-aos="fade-up" data-aos-delay="200">
                        <img src="assets/img/print/dpi.png" class="img-fluid mx-auto d-block" alt="...">

                        <h5 class="text-center mt-2 mb-2">Highest Resolution</h5>
                        <p>1,200 x 2,400 DPI</p>
                    </div>
                    <div class="col-lg-2 text-center icon-box" data-aos="fade-up" data-aos-delay="300">
                        <img src="assets/img/print/colour.png" class="img-fluid mx-auto d-block" alt="...">

                        <h5 class="text-center mt-2 mb-2">12 Inks</h5>
                        <p>Archival Pigment Based</p>
                    </div>
                    <div class="col-lg-2 text-center  icon-box" data-aos="fade-up" data-aos-delay="300">
                        <img src="assets/img/print/accuracy.png" class="img-fluid mx-auto d-block" alt="...">

                        <h5 class="text-center mt-2 mb-2">Vibrant, Detailed & Sharp</h5>
                        <p>UltraChrome Tecnology</p>
                    </div>
                    <div class="col-lg-2 text-center icon-box" data-aos="fade-up" data-aos-delay="300">
                        <img src="assets/img/print/pantoncolour.png" class="img-fluid mx-auto d-block" alt="...">

                        <h5 class="text-center mt-2 mb-2">Widest Colour Gamut</h5>
                        <p>99% Pantone Coverage</p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <section id="print-size" class="print-size section-print-size">
        <div class="container" data-aos="fade-up">

            <div class="code-print">
                <h4 class="fw-bold">Hand-picked selection of high quality papers and canvas

                </h4>
                <p class="px-5 py-3">
                    <small>Utilising the latest Epson UltraChrome precision core printers with 12 archival quality
                        pigment inks to produce proffesional Giclée print. This service is suitable for reproducyions of
                        photographs, illustrations, painting, architectural plans or even posters thet requires maximum
                        detail and longevity
                    </small>


                </p>

            </div>
        </div>


        <div class="container">
            <div class="row d-flex justify-content-sm-between">
                <div class="col-lg-4 col-md-8 mb-4 container-fluid text-center">
                    <div class="col-lg-12">


                        <a href="Photo-Satain.html">
                            <img src="assets/img/print/Photo-Satin.jpg" class="col-8">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4  col-md-8 mb-4 container-fluid text-center">
                    <div class="col-lg-12">
                        <a href="Photo-Matt.html">
                            <img src="assets/img/print/Photo-Matt.jpg" class="col-8">
                        </a>
                    </div>
                </div>


                <div class="col-lg-4  col-md-8 mb-4  text-center">
                    <div class="col-lg-12  text-center">
                        <a href="Photo-William.html">
                            <img src="assets/img/print/William-Turner.jpg" class="col-8 ">
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row d-flex justify-content-sm-between">
                <div class="col-lg-4 col-md-8 mb-4 container-fluid text-center">
                    <div class="col-lg-12">
                        <a href="Photo-German.html">
                            <img src="assets/img/print/German-Etching.jpg" class="col-8">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-8 mb-4 container-fluid text-center">
                    <div class="col-lg-12">
                        <a href="Photo-Museum.html">
                            <img src="assets/img/print/ProCanvas.jpg" class="col-8">
                        </a>
                    </div>
                </div>


                <div class="col-lg-4 col-md-8 mb-4 container-fluid text-center">
                    <div class="col-lg-12">
                        <a href="Photo-Coming.html">
                            <img src="assets/img/print/comingsoon.jpg" class="col-8">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Images -->

    <!-- Section: Modals -->
    <section id="about" class="about section-p">
        <div class="container" data-aos="fade-up">


            <div class="col-lg-12 mt-4 mb-3 d-flex align-items-center">
                <div class="icon-boxes d-flex flex-column justify-content-lg-between">
                    <div class="row">
                        <div class="col-md-3 text-center icon-box" data-aos="fade-up" data-aos-delay="100">
                            <img src="assets/img/Satisfaction-Garanteed.png" class="rounded opacity-50 mx-auto d-block" alt="...">
                            <!--                  <img src="assets/img/Satisfaction-Garanteed.png" class="icon-box" alt="">-->
                            <h5 class="text-center mt-4">Satisfaction Guaranteed</h5>
                            <p>100% guaranteed satisfaction. We go above and
                                beyond to make you happy with our service, and
                                your satisfaction is our goal</p>
                        </div>
                        <div class="col-md-3 icon-box" data-aos="fade-up" data-aos-delay="200">
                            <img src="assets/img/Delivery.png" class="rounded mx-auto opacity-50 d-block" alt="...">

                            <h5 class="text-center mt-4">Reliable Delivery</h5>
                            <p>Reliable and express delivery service national wid</p>
                        </div>
                        <div class="col-md-3 icon-box" data-aos="fade-up" data-aos-delay="300">
                            <img src="assets/img/Customer-Service.png" class="rounded mx-auto opacity-50 d-block" alt="...">

                            <h5 class="text-center mt-4">Great Customer Service</h5>
                            <p>Constantly improving our services to make it easier
                                for you to have a more enjoyable experience using
                                our services</p>
                        </div>
                        <div class="col-md-3 icon-box" data-aos="fade-up" data-aos-delay="400">
                            <img src="assets/img/Trusted-by-expert.png" class="rounded mx-auto opacity-50 d-block" alt="...">

                            <h5 class="text-center mt-4">Trusted by Professional</h5>
                            <p>Working with the bests in the field of art and framing
                                has made us an attractive choice for collectors,
                                auctioneers and art enthusiasts</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section><!-- End About Section -->

    <section id="print" class="print-bg">


        <div class="row">
            <div class="col-lg-6 p-5 order-1 mt-2" data-aos="fade-up" data-aos-delay="100">
                <h1 class="fw-bold text-start p-3">What is Giclée Printing</h1>

                <p class="text-start text-secondary p-4">
                    The word Giclée ("gee-clay"), is based on the French word
                    giclee which means "to squirt or to spray" and was originally
                    mentioned by printmaker Jack Duganne in 1991.Giclée printing
                    is a fine art digital printing process using specialist archival
                    pigment inks and acid-free papers; creating gallery-quality
                    inkjet prints with excellent depth of colour,longevity and
                    stability.
                </p>
                <p class="text-secondary text-start px-4">
                    The print process involves squirting microscopic dots of
                    pigment ink onto high quality fine art or photographic papers
                    using sophisticated high-end inkjrt printers with exceptional
                    accuracy,wide tonal range and colour gamut.
                </p>
                <p class="text-start text-secondary p-4">
                    Studies have shown that the vivid colours in Giclée Prints can
                    last more than 200 years with tests by independent bodies
                    such as Wilhelm Research and printer manufactures such as
                    Canon. This gives assurance to artistd, photographers,
                    collectors and art buyers of the high quality of these types of
                    prints. Giclée printing is a type of inkjet printing - but
                    importantly, not all inkjet prints are giclée prints. Giclée printing
                    produces a product at a higher quality and with a much longer
                    lifespan than a standard desktop inkjet printers.

                </p>
            </div>
            <div class="col-lg-6 order-2 p-5 mt-2" data-aos="fade-up" data-aos-delay="100">
                <h1 class="fw-bold text-start p-3">Why Giclée?</h1>


                <ol class="p-4">
                    <li class="text-secondary">Has greater accuracy and depth of colour, ensuring
                        faithful reproductions of originals. There are more vivid
                        and saturated colours than C-Type or digital offset, due
                        to the bright pigments used to make up the inks.
                    </li>
                    <li class="text-secondary mt-4 mb-4">A perfect solution for artists and photographers who do
                        not wish to go to the expense of mass-producing their
                        work using more commercial based printers but prefer
                        to print on demand.
                    </li>
                    <li class="text-secondary mt-4 mb-2">Print on demand means a single artwork can be made available in
                        many papers and at different sizes.
                        There are a much greater number of papers to choose from, incorporating different weights,
                        texture
                        and whiteness.
                    </li>
                    <li class="text-secondary mt-4 mb-4">Better longevity; a giclée print will outlast other prints
                        and technologies by up to six times. The numerous
                        research done by the independent Wilhelm Research
                        group provides supporting data and evidence for this claim.
                    </li>
                    <li class="text-secondary mt-4 mb-4">Once Framed, their longevity doubles and with a UV
                        filtered glass multiplies which preserves the prints and
                        maintains the vivid colours of image.
                    </li>
                    <li class="text-secondary mt-4 mb-4">Widely accepted by art buyers, galleries and museums
                        as archival,collectable art pieces.
                    </li>
                </ol>
            </div>
        </div>


        </div>
    </section><!-- End Section -->
    <!-- Section: Modals -->
    <section class="bg-white" id="print-container">
        <div class="row">
            <div class="container mt-5 mb-5">
                <div class="row ">
                    <div class="col-3 mx-5">
                        <div class="col-lg-6 mx-5 show_sizes">
                            <h2 class="bottom_border">Units</h2>
                            <a class="select_int" data-filter=".inches" href="#">inches</a>
                            <a class="select_int active" data-filter=".mm" href="#">mm</a>
                            <a class="select_int" data-filter=".cm" href="#">cm</a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="col-6 show_prices">
                            <h2 class="bottom_border">Prices</h2>
                            <a class="select_int active" data-filter=".inc" href="#">inc VAT</a>
                            <a class="select_int" data-filter=".exc" href="#">exc VAT</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container mx-5 text-center">
            <div class="row ">


                <div class="col-lg-3 ">
                    <div class="col-lg-8 text-start mx-5">
                        <h2 class="bottom_border">A Sizes</h2>

                        <div class="size_prices sizes-container">
                            <p class="bottom_border">
                                <span class="label">A5</span>
                                <span class="label-detail">
                                    <span class="mm small" style="display: none;">148x210<span>mm</span></span>
                                    <span class="cm small" style="display: inline;">15x21<span>cm</span></span>
                                    <span class="inches small" style="display: none;">5.8x8.3″</span>
                                </span>

                                <span class="price-print "><span class="inc" style="display: inline;"><span class="pound_sign">£</span>12</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>10</span>
                                </span>
                            </p>
                            <p class="bottom_border">
                                <span class="label">A4</span> <span class="label-detail"><span class="mm" style="display: none;">210x297<span>mm</span></span>
                                    <span class="cm" style="display: inline;">21x30<span>cm</span></span>
                                    <span class="inches" style="display: none;">8.3x11.7″</span>
                                </span><span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>15</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>13</span>
                                </span>
                            </p>
                            <p class="bottom_border">
                                <span class="label">A3</span> <span class="label-detail"><span class="mm" style="display: none;">297x420<span>mm</span></span>
                                    <span class="cm" style="display: inline;">30x42<span>cm</span></span>
                                    <span class="inches" style="display: none;">11.7x16.5″</span>
                                </span><span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>19</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>16</span>
                                </span>
                            </p>
                            <p class="bottom_border">
                                <span class="label">A3+</span> <span class="label-detail"> <span class="mm" style="display: none;">329x483<span>mm</span></span>
                                    <span class="cm" style="display: inline;">33x48<span>cm</span></span>
                                    <span class="inches" style="display: none;">13x19″</span>
                                </span> <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>22</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>18</span>
                                </span>
                            </p>
                            <p class="bottom_border">
                                <span class="label">A2</span> <span class="label-detail"> <span class="mm" style="display: none;">420x594<span>mm</span></span>
                                    <span class="cm" style="display: inline;">42x59<span>cm</span></span>
                                    <span class="inches" style="display: none;">16.5x23.4″</span>
                                </span> <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>29</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>24</span>
                                </span>
                            </p>
                            <p class="bottom_border">
                                <span class="label">A2+</span> <span class="label-detail"> <span class="mm" style="display: none;">457x610<span>mm</span></span>
                                    <span class="cm" style="display: inline;">46x61<span>cm</span></span>
                                    <span class="inches" style="display: none;">18x24″</span>
                                </span> <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>35</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>29</span>
                                </span>
                            </p>
                            <p class="bottom_border">
                                <span class="label">A1</span> <span class="label-detail">
                                    <span class="mm" style="display: none;">594x841<span>mm</span></span>
                                    <span class="cm" style="display: inline;">59x84<span>cm</span></span>
                                    <span class="inches" style="display: none;">23.4x33.1″</span>
                                </span> <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>56</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>47</span>
                                </span>
                            </p>
                            <p class="bottom_border">
                                <span class="label">A0</span> <span class="label-detail">
                                    <span class="mm" style="display: none;">841x1189<span>mm</span></span>
                                    <span class="cm" style="display: inline;">84x119<span>cm</span></span>
                                    <span class="inches" style="display: none;">33.1x46.8″</span>
                                </span> <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>113</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>94</span>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mx-5 ">
                    <div class="col-lg-8 mx-5 text-start">
                        <h2 class="bottom_border">Square</h2>

                        <div class="size_prices sizes-container">
                            <p class="bottom_border">
                                <span class="label">
                                    <span class="mm" style="display: none;">148x210<span>mm</span></span>
                                    <span class="cm" style="display: inline;">20x20<span>cm</span></span>
                                    <span class="inches" style="display: none;">5.8x8.3″</span></span>
                                <span class="price-print price-container">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>13</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>10</span>
                                </span>
                            </p>
                            <p class="bottom_border">
                                <span class="label">
                                    <span class="mm" style="display: none;">210x297<span>mm</span></span>
                                    <span class="cm" style="display: inline;">30x30<span>cm</span></span>
                                    <span class="inches" style="display: none;">8.3x11.7″</span></span>
                                <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>17</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>13</span>
                                </span>
                            </p>
                            <p class="bottom_border">
                                <span class="label">
                                    <span class="mm" style="display: none;">297x420<span>mm</span></span>
                                    <span class="cm" style="display: inline;">41x41<span>cm</span></span>
                                    <span class="inches" style="display: none;">11.7x16.5″</span>
                                </span> <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>22</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>16</span>
                                </span>
                            </p>
                            <p class="bottom_border">
                                <span class="label">
                                    <span class="mm" style="display: none;">329x483<span>mm</span></span>
                                    <span class="cm" style="display: inline;">51x51<span>cm</span></span>
                                    <span class="inches" style="display: none;">13x19″</span>
                                </span> <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>33</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>18</span>
                                </span>
                            </p>
                            <p class="bottom_border">
                                <span class="label">
                                    <span class="mm" style="display: none;">420x594<span>mm</span></span>
                                    <span class="cm" style="display: inline;">76x76<span>cm</span></span>
                                    <span class="inches" style="display: none;">16.5x23.4″</span>
                                </span> <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>62</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>24</span>
                                </span>
                            </p>
                            <p class="bottom_border">
                                <span class="label">
                                    <span class="mm" style="display: none;">420x594<span>mm</span></span>
                                    <span class="cm" style="display: inline;">102x102<span>cm</span></span>
                                    <span class="inches" style="display: none;">16.5x23.4″</span>
                                </span> <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>112</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>24</span>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mx-5">
                    <div class="col-8 text-start">
                        <h2 class="bottom_border">Standard</h2>

                        <div class="size_prices sizes-container">
                            <p class="bottom_border">
                                <span class="label">
                                    <span class="mm" style="display: none;">148x210<span>mm</span></span>
                                    <span class="cm" style="display: inline;">13x18<span>cm</span></span>
                                    <span class="inches" style="display: none;">5.8x8.3″</span>
                                </span> <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>11</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>10</span>
                                </span>
                            </p>
                            <p class="bottom_border">
                                <span class="label">
                                    <span class="mm" style="display: none;">210x297<span>mm</span></span>
                                    <span class="cm" style="display: inline;">20x25<span>cm</span></span>
                                    <span class="inches" style="display: none;">8.3x11.7″</span>
                                </span> <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>14</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>13</span>
                                </span>
                            </p>
                            <p class="bottom_border">
                                <span class="label">
                                    <span class="mm" style="display: none;">297x420<span>mm</span></span>
                                    <span class="cm" style="display: inline;">20x30<span>cm</span></span>
                                    <span class="inches" style="display: none;">11.7x16.5″</span>
                                </span> <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>19</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>16</span>
                                </span>
                            </p>
                            <p class="bottom_border">
                                <span class="label">
                                    <span class="mm" style="display: none;">329x483<span>mm</span></span>
                                    <span class="cm" style="display: inline;">30x41<span>cm</span></span>
                                    <span class="inches" style="display: none;">13x19″</span>
                                </span> <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>19</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>18</span>
                                </span>
                            </p>
                            <p class="bottom_border">
                                <span class="label">
                                    <span class="mm" style="display: none;">420x594<span>mm</span></span>
                                    <span class="cm" style="display: inline;">41x51<span>cm</span></span>
                                    <span class="inches" style="display: none;">16.5x23.4″</span>
                                </span> <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>26</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>24</span>
                                </span>
                            </p>
                            <p class="bottom_border">
                                <span class="label">
                                    <span class="mm" style="display: none;">457x610<span>mm</span></span>
                                    <span class="cm" style="display: inline;">51x76<span>cm</span></span>
                                    <span class="inches" style="display: none;">18x24″</span>
                                </span> <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>46</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>29</span>
                                </span>
                            </p>
                            <p class="bottom_border">
                                <span class="label">
                                    <span class="mm" style="display: none;">594x841<span>mm</span></span>
                                    <span class="cm" style="display: inline;">76x102<span>cm</span></span>
                                    <span class="inches" style="display: none;">23.4x33.1″</span>
                                </span> <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>81</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>47</span>
                                </span>
                            </p>
                            <p class="bottom_border">
                                <span class="label">
                                    <span class="mm" style="display: none;">841x1189<span>mm</span></span>
                                    <span class="cm" style="display: inline;">102x152<span>cm</span></span>
                                    <span class="inches" style="display: none;">33.1x46.8″</span>
                                </span> <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>171</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>94</span>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>

        <div class="container mt-5 mx-5 text-center">
            <div class="row ">


                <div class="col-lg-3 ">
                    <div class="col-12 text-start mx-5">
                        <h2 class="bottom_border">Popular Frame Sizes</h2>

                        <div class="size_prices sizes-container">
                            <p class="bottom_border">
                                <span class="label">
                                    <span class="mm" style="display: none;">148x210<span>mm</span></span>
                                    <span class="cm" style="display: inline;">10x15<span>cm</span></span>
                                    <span class="inches" style="display: none;">5.8x8.3″</span></span>
                                <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>11</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>10</span>
                                </span>
                            </p>
                            <p class="bottom_border">
                                <span class="label">
                                    <span class="mm" style="display: none;">210x297<span>mm</span></span>
                                    <span class="cm" style="display: inline;">13x18<span>cm</span></span>
                                    <span class="inches" style="display: none;">8.3x11.7″</span></span>
                                <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>11</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>13</span>
                                </span>
                            </p>
                            <p class="bottom_border">
                                <span class="label">
                                    <span class="mm" style="display: none;">297x420<span>mm</span></span>
                                    <span class="cm" style="display: inline;">28x35<span>cm</span></span>
                                    <span class="inches" style="display: none;">11.7x16.5″</span>
                                </span> <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>17</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>16</span>
                                </span>
                            </p>
                            <p class="bottom_border">
                                <span class="label">
                                    <span class="mm" style="display: none;">329x483<span>mm</span></span>
                                    <span class="cm" style="display: inline;">30x30<span>cm</span></span>
                                    <span class="inches" style="display: none;">13x19″</span>
                                </span> <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>16</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>18</span>
                                </span>
                            </p>
                            <p class="bottom_border">
                                <span class="label">
                                    <span class="mm" style="display: none;">420x594<span>mm</span></span>
                                    <span class="cm" style="display: inline;">30x40<span>cm</span></span>
                                    <span class="inches" style="display: none;">16.5x23.4″</span>
                                </span> <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>19</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>24</span>
                                </span>
                            </p>
                            <p class="bottom_border">
                                <span class="label">
                                    <span class="mm" style="display: none;">420x594<span>mm</span></span>
                                    <span class="cm" style="display: inline;">40x50<span>cm</span></span>
                                    <span class="inches" style="display: none;">16.5x23.4″</span>
                                </span> <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>25</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>24</span>
                                </span>
                            </p>
                            <p class="bottom_border">
                                <span class="label">
                                    <span class="mm" style="display: none;">420x594<span>mm</span></span>
                                    <span class="cm" style="display: inline;">50x50<span>cm</span></span>
                                    <span class="inches" style="display: none;">16.5x23.4″</span>
                                </span> <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>29</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>24</span>
                                </span>
                            </p>
                            <p class="bottom_border">
                                <span class="label">
                                    <span class="mm" style="display: none;">420x594<span>mm</span></span>
                                    <span class="cm" style="display: inline;">50x70<span>cm</span></span>
                                    <span class="inches" style="display: none;">16.5x23.4″</span>
                                </span> <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>42</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>24</span>
                                </span>
                            </p>
                            <p class="bottom_border">
                                <span class="label">
                                    <span class="mm" style="display: none;">420x594<span>mm</span></span>
                                    <span class="cm" style="display: inline;">70x100<span>cm</span></span>
                                    <span class="inches" style="display: none;">16.5x23.4″</span>
                                </span> <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>75</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>24</span>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mx-5 ">
                    <div class="col-8 mx-5 text-start">
                        <h2 class="bottom_border">Popular Digital</h2>

                        <div class="size_prices sizes-container">
                            <p class="bottom_border">
                                <span class="label">
                                    <span class="mm" style="display: none;">148x210<span>mm</span></span>
                                    <span class="cm" style="display: inline;">10x15<span>cm</span></span>
                                    <span class="inches" style="display: none;">5.8x8.3″</span></span>
                                <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>11</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>10</span>
                                </span>
                            </p>
                            <p class="bottom_border">
                                <span class="label">
                                    <span class="mm" style="display: none;">210x297<span>mm</span></span>
                                    <span class="cm" style="display: inline;">25x38<span>cm</span></span>
                                    <span class="inches" style="display: none;">8.3x11.7″</span></span>
                                <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>17</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>13</span>
                                </span>
                            </p>
                            <p class="bottom_border">
                                <span class="label">
                                    <span class="mm" style="display: none;">297x420<span>mm</span></span>
                                    <span class="cm" style="display: inline;">38x51<span>cm</span></span>
                                    <span class="inches" style="display: none;">11.7x16.5″</span>
                                </span> <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>25</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>16</span>
                                </span>
                            </p>
                            <p class="bottom_border">
                                <span class="label">
                                    <span class="mm" style="display: none;">329x483<span>mm</span></span>
                                    <span class="cm" style="display: inline;">41x61<span>cm</span></span>
                                    <span class="inches" style="display: none;">13x19″</span>
                                </span> <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>29</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>18</span>
                                </span>
                            </p>
                            <p class="bottom_border">
                                <span class="label">
                                    <span class="mm" style="display: none;">420x594<span>mm</span></span>
                                    <span class="cm" style="display: inline;">46x61<span>cm</span></span>
                                    <span class="inches" style="display: none;">16.5x23.4″</span>
                                </span> <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>29</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>24</span>
                                </span>
                            </p>
                            <p class="bottom_border">
                                <span class="label">
                                    <span class="mm" style="display: none;">420x594<span>mm</span></span>
                                    <span class="cm" style="display: inline;">61x91<span>cm</span></span>
                                    <span class="inches" style="display: none;">16.5x23.4″</span>
                                </span> <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>62</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>24</span>
                                </span>
                            </p>
                            <p class="bottom_border">
                                <span class="label">
                                    <span class="mm" style="display: none;">420x594<span>mm</span></span>
                                    <span class="cm" style="display: inline;">76x114<span>cm</span></span>
                                    <span class="inches" style="display: none;">16.5x23.4″</span>
                                </span> <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>92</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>24</span>
                                </span>
                            </p>
                            <p class="bottom_border">
                                <span class="label">
                                    <span class="mm" style="display: none;">420x594<span>mm</span></span>
                                    <span class="cm" style="display: inline;">91x137<span>cm</span></span>
                                    <span class="inches" style="display: none;">16.5x23.4″</span>
                                </span> <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>140</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>24</span>
                                </span>
                            </p>
                            <p class="bottom_border">
                                <span class="label">
                                    <span class="mm" style="display: none;">420x594<span>mm</span></span>
                                    <span class="cm" style="display: inline;">107x142<span>cm</span></span>
                                    <span class="inches" style="display: none;">16.5x23.4″</span>
                                </span> <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>165</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>24</span>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-3 mx-5">
                    <div class="col-lg-12 mt-5 text-start">
                        <h2 class="bottom_border">Ultra Panoramic</h2>

                        <div class="size_prices sizes-container">
                            <p class="bottom_border">
                                <span class="label"> <span class="mm" style="display: none;">148x210<span>mm</span></span>
                                    <span class="cm" style="display: inline;">25x76<span>cm</span></span>
                                    <span class="inches" style="display: none;">5.8x8.3″</span>
                                </span> <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>27</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>10</span>
                                </span>
                            </p>
                            <p class="bottom_border">
                                <span class="label">
                                    <span class="mm" style="display: none;">210x297<span>mm</span></span>
                                    <span class="cm" style="display: inline;">41x122<span>cm</span></span>
                                    <span class="inches" style="display: none;">8.3x11.7″</span>
                                </span> <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>63</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>13</span>
                                </span>
                            </p>
                            <p class="bottom_border">
                                <span class="label">
                                    <span class="mm" style="display: none;">297x420<span>mm</span></span>
                                    <span class="cm" style="display: inline;">51x152<span>cm</span></span>
                                    <span class="inches" style="display: none;">11.7x16.5″</span>
                                </span> <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>93</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>16</span>
                                </span>
                            </p>
                            <p class="bottom_border">
                                <span class="label">
                                    <span class="mm" style="display: none;">329x483<span>mm</span></span>
                                    <span class="cm" style="display: inline;">102x305<span>cm</span></span>
                                    <span class="inches" style="display: none;">13x19″</span>
                                </span> <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>378</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>18</span>
                                </span>
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-12 mt-5 text-start">
                        <h2 class="bottom_border">Panoramic</h2>

                        <div class="size_prices sizes-container mb-5">
                            <p class="bottom_border">
                                <span class="label"> <span class="mm" style="display: none;">148x210<span>mm</span></span>
                                    <span class="cm" style="display: inline;">25x76<span>cm</span></span>
                                    <span class="inches" style="display: none;">5.8x8.3″</span>
                                </span> <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>27</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>10</span>
                                </span>
                            </p>
                            <p class="bottom_border">
                                <span class="label">
                                    <span class="mm" style="display: none;">210x297<span>mm</span></span>
                                    <span class="cm" style="display: inline;">25x51<span>cm</span></span>
                                    <span class="inches" style="display: none;">8.3x11.7″</span>
                                </span> <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>20</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>13</span>
                                </span>
                            </p>
                            <p class="bottom_border">
                                <span class="label">
                                    <span class="mm" style="display: none;">297x420<span>mm</span></span>
                                    <span class="cm" style="display: inline;">41x81<span>cm</span></span>
                                    <span class="inches" style="display: none;">11.7x16.5″</span>
                                </span> <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>42</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>16</span>
                                </span>
                            </p>
                            <p class="bottom_border">
                                <span class="label">
                                    <span class="mm" style="display: none;">329x483<span>mm</span></span>
                                    <span class="cm" style="display: inline;">51x102<span>cm</span></span>
                                    <span class="inches" style="display: none;">13x19″</span>
                                </span> <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>61</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>18</span>
                                </span>
                            </p>
                            <p class="bottom_border">
                                <span class="label"> <span class="mm" style="display: none;">148x210<span>mm</span></span>
                                    <span class="cm" style="display: inline;">76x152<span>cm</span></span>
                                    <span class="inches" style="display: none;">5.8x8.3″</span>
                                </span> <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>136</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>10</span>
                                </span>
                            </p>
                            <p class="bottom_border">
                                <span class="label"> <span class="mm" style="display: none;">148x210<span>mm</span></span>
                                    <span class="cm" style="display: inline;">102x203<span>cm</span></span>
                                    <span class="inches" style="display: none;">5.8x8.3″</span>
                                </span> <span class="price-print">
                                    <span class="inc" style="display: inline;"><span class="pound_sign">£</span>235</span>
                                    <span class="exc" style="display: none;"><span class="pound_sign">£</span>10</span>
                                </span>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

</main><!-- End #main -->
@include('footer')
<script src="{{asset('./assets/js/printing.js')}}"></script>
