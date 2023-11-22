@include('header')
<main id="main">
    <style>
        .container {
            height: 100%;
            width: 100%;
            position: relative;
            text-align: center;
        }

        .container:before {
            content: '';
            height: 100%;
            width: 0px;
            display: inline-block;
            vertical-align: middle;
        }

        .formBox {
            width: 460px;
            max-width: 100%;
            height: 552px;
            margin-left: -4px;
            margin-top: 50px;
            margin-bottom: 40px;
            position: relative;
            vertical-align: middle;
            display: inline-block;
        }

        .formBox .box {
            text-align: left;
            background-color: #fff;
            border-radius: 8px;
            padding: 60px 0px 40px 0;
            position: absolute;
            width: 100%;
            height: 100%;
            box-shadow: 0px 2px 11px -2px rgba(0, 0, 0, 0.5);
            transition: all 0.2s cubic-bezier(0.35, 0.33, 0.75, 0.9);
        }
    </style>
    <!-- ======= Breadcrumbs ======= -->
    <section class="bg-white mt-5 contact-gallery">


            <div class="row justify-content-center">
                <div class="col-6 p-5">
                    <div class="header mt-5">
                        @if(Session::has('message'))
                            <div class="alert alert-success " style="background-color: gray" role="alert">
                                {{ Session::get('message') }}
                            </div>
                        @endif
                    </div>
                    <div class="p-5">
                            <a href="#"><h1 class="fw-bolder mt-sm-0">Contact Us
                                </h1>
                            </a>


                    <div class="row">
                        <h3 class="mt-5" style="color: black;">Address:</h3>
                        <p class="mb-5 py-4">
                            131 Percy Road,Whitton,Richmond,London,United<br>
                            Kingdom,TW2 6HT
                        </p>
                    </div>
                    <div class="row">
                        <h3 class="mt-5" style="color: black;">Opening Hours:
                        </h3>
                        <p> Monday </p>
                        <p>Tuesday</p>
                        <p>Wednesday</p>
                        <p>Thursday</p>
                        <p>Friday</p>
                        <p>Saturday</p>
                        <p>Sunday</p>

                        <p class="mt-3">Tel:020 36321468</p>
                        <p>Fax:020 36321468</p>
                        <p>Email:<span class="text-primary text-decoration-underline">Faamgallery@gmail.com</span></p>
                    </div>
                    <div class="row">
                        <h5 class="mt-5" style="color: black;">Publick Transport:</h5>
                        <p>
                            Bus: Whitton Station Stop(H22 & 110) - 1 min wal</p>
                        <p> Train station: Whitton Railway station - 1 min walk
                        </p>
                    </div>
                    <div class="row">
                        <h5 class="mt-5" style="color: black;">Parking:</h5>
                        <p>
                            Free street parking after 2pm on Jubilee Ave and Montrose active(except during event days)
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

                        <img src="./assets/img/parkingmap.jpg" class="">
                       </div>
                    </div></div>
                <div class="col-6 mt-5">
                    <div class="row">
                        <img src="./assets/img/parkingmap.jpg" class="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-ba ">

        <div class="container">
            <h2>Get in touch</h2>
            <form method="POST" action="{{route('contacts.store')}}">
                @csrf
                <div class="formBox">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4"></label>
                            <input type="firstname" class="form-control bg-transparent" name="fname" id="fname"
                                   placeholder="First Name*">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4"></label>
                            <input type="lastname" class="form-control bg-transparent" name="lname" id="lname"
                                   placeholder="Last Name*">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4"></label>
                            <input type="email" name="email" class="form-control bg-transparent" id="inputEmail4"
                                   placeholder="Email*">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputPassword4"></label>
                            <input type="phonenumber" class="form-control bg-transparent" name="phone" id="inputPassword4"
                                   placeholder="Phone">
                        </div></div>
{{--                   --}}
{{--                    --}}
{{--                    --}}
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="inputPassword4"></label>
                            <input type="phonenumber" class="form-control bg-transparent" name="city" id="inputPassword4"
                                   placeholder="City* {London, New York, etc}">
                        </div>
{{--                            <select id="inputState" class="form-control bg-transparent">--}}
{{--                                <option selected></option>--}}
{{--                                <option>London</option>--}}
{{--                                <option>New York</option>--}}
{{--                                <option>etc</option>--}}
{{--                            </select>--}}

                        <div class="form-group col-6">
                            <label for="inputState"></label>
                            <div class="form-check">
                                <input class="form-check-input " name="artist" type="checkbox" value="artist" id="flexCheckChecked">
                                <label class="custom-control-label" for="CustomCheck">
                                    I am an artist
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="collector" value="collector" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    I am an art collector
                                 </label>
                              </div>
                            </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
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
                                      name="message" class="form-control bg-transparent" id="inputEmail4">
                            </textarea>
                        </div>
                    </div>

                  <button type="submit" class="btn1-get scrollto mt-5">Submit</button>
                </div>
            </form>
        </div>
    </div>


</main><!-- End #main -->

@include('footer')
