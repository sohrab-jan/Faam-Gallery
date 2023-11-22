@include('header')
<script src="{{asset('assets/js/nouislider.js')}}"></script>
<link href="{{asset('assets/css/framing.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
<main id="main">
    <section id="frame" class="frame section-frame">
        <div class="container mt-5" data-aos="fade-up">
            <canvas hidden id="fcanvas"></canvas>

            <form action="{{route('mycart')}}" method="POST">
                @csrf

                @if(!empty($session_item_id))
                <input type="hidden" id="session_item_id" name="session_item_id" value="{{$session_item_id}}" />
                @else
                <input type="hidden" id="session_item_id" name="session_item_id" value="{{uniqid('framing_item_id')}}" />
                @endif

                @if(!empty($edit_data['frame_id']))
                <input type="hidden" id="frame_id" name="frame_id" value="{{$edit_data['frame_id']}}" />
                @else
                <input type="hidden" id="frame_id" name="frame_id" />
                @endif
                @if(!empty($edit_data['mount_board']))
                <input type="hidden" id="mount_board" name="mount_board" value="{{$edit_data['mount_board']}}" />
                @else
                <input type="hidden" id="mount_board" name="mount_board" value="0" />
                @endif
                @if(!empty($edit_data['mount_color']))
                <input type="hidden" id="mount_color" name="mount_color" value="{{$edit_data['mount_color']}}" />
                @else
                <input type="hidden" id="mount_color" name="mount_color" value="white" />
                @endif
                @if(!empty($edit_data['glass']))
                <input type="hidden" id="glass" name="glass" value="{{$edit_data['glass']}}" />
                @else
                <input type="hidden" id="glass" name="glass" value="" />
                @endif
                @if(!empty($edit_data['width']))
                <input type="hidden" id="width" name="width" value="{{$edit_data['width']}}" />
                <input type="hidden" id="height" name="height" value="{{$edit_data['height']}}" />
                <input type="hidden" id="scale" name="scale" value="{{$edit_data['vahed']}}" />
                @else
                <input type="hidden" id="width" name="width" value="" />
                <input type="hidden" id="height" name="height" value="" />
                <input type="hidden" id="scale" name="scale" value="" />
                @endif
                <input type="hidden" id="fake_image" name="fake_image" value="" />

                <!-- <input hidden name="printing_id" value="" />-->
                @if(!empty($print_id))
                <input type="hidden" id="print_id" name="print_id" value="{{$print_id}}" />
                @endif

                @if(!empty($test))
                <input type="hidden" name="image" value="{{$test}}">
                <input type="hidden" name="ext" value="{{$ext}}">
                @elseif(!empty($edit_data['image']))
                <input type="hidden" name="image" value="{{$edit_data['image']}}">
                <input type="hidden" name="ext" value="{{$edit_data['ext']}}">
                @else
                <input type="hidden" name="image" value="">
                @endif


                <div class="row">
                    <div class="col-md-6 mt-5 order-md-1">
                        <div class="">
                            <div class="row">
                                <div class="frame_and_drawer_column">
                                    <div class="frame_and_arrows_container">
                                        <div class="box_container hidden">
                                            <div class="align_center">
                                                <div class="gyroscope_loader gyroscope_loader--rings " style="display: none">
                                                </div>
                                            </div>

                                            <div class="three_d_box_container panels-backface-invisible right_side_out_shadows" id="AMK" style="transform: rotateY(-0deg);display: flex;align-items: center;justify-content: center;">
                                                <figure class="front three_dimensional_frame" style=" background: transparent; box-shadow: rgba(0, 0, 0, 0.7) 0px 2px 5px inset; transform: translateZ(-3px); border-style: solid; border-image-repeat: stretch;">
                                                    <div class="overlay_gradient" style="display: block;margin-top: 0px;margin-left: 0px;"> </div>
                                                </figure>
                                                <figure class="artwork_layers" style="display: flex; background: rgb(255, 255, 255); align-items: center; justify-content: center; ">
                                                    <div class="artwork_layer_2" style="display: inline-block; background: url('/assets/img/BackingBoard.jpg') center no-repeat transparent; z-index: 100; inset:0; box-shadow: none; ">
                                                        <div class="artwork_layer" style="display: inline-block; background: url('/assets/img/Logo_for_BackingBoard.png') center 48% / 87.8px no-repeat transparent; z-index: 100; inset:0; box-shadow: none; ">
                                                            @if(!empty($test))
                                                            <img id="iiimg" src="{{'data:image/'.$ext.';base64,'.$test}}" style="width: 100%; height:100%">
                                                            @elseif(!empty($edit_data['image']))
                                                            <img id="iiimg" src="{{'data:image/'.$edit_data['ext'].';base64,'.$edit_data['image']}}" style="width: 100%; height:100%">
                                                            @endif
                                                        </div>
                                                    </div>
                                                </figure>
                                                <figure class="front_mount three_d_face" style="background: rgb(51, 51, 51); transform: rotateY(0deg) translateZ(0px) translateY(0px) translateX(0px); opacity: 0; "> </figure>
                                                <figure class="right three_d_face" style="background: url('') repeat-y;"> </figure>
                                                <figure class="left three_d_face" style="background: url('') repeat-y;"> </figure>
                                                <figure class="back three_d_face" style="border-style: solid; border-image-repeat: stretch; box-shadow: rgba(0, 0, 0, 0.5) 0px 1px 20px 1px inset; background-size: contain; ">
                                                    <div class="back_frame_shadows" style="opacity: 1;"></div>
                                                </figure>
                                                <figure class="top three_d_face" style="background: url('') repeat-y; ">
                                                </figure>
                                                <figure class="bottom three_d_face" style="background: url('') repeat-y;translate: rotateX('90deg') rotateY('90deg');transition:all  0ms linear;">
                                                </figure>
                                                <figure class="top_inner three_d_face"></figure>
                                                <figure class="right_inner three_d_face" style="background: url('') round;"></figure>
                                                <figure class="bottom_inner three_d_face"></figure>
                                                <figure class="left_inner three_d_face" style="background: url('') round;"></figure>
                                                <div class="front_frame_shadows"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="mt-4"><input type="hidden" id="file" data-tabs="file facebook instagram dropbox url" data-images-only="true" data-preview-step="true" data-clearable="true" data-crop="400x200">
                                <div class="uploadcare--widget uploadcare--widget_option_clearable uploadcare--widget_status_ready" aria-describedby="uploadcare--widget__text uploadcare--widget__progress" data-status="ready" aria-busy="false">
                                    <div id="uploadcare--widget__progress" class="uploadcare--progress uploadcare--progress_type_canvas uploadcare--widget__progress" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="">
                                        <canvas class="uploadcare--progress__canvas" width="56" height="56"></canvas>
                                    </div>
                                    <div id="uploadcare--widget__text" class="uploadcare--widget__text" aria-live="polite">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mt-5 order-md-2">
                        <div class="frame-design-tools">
                            <div class="row mt-5 mb-3">
                                <div class="col-md-24">
                                    <p class="text-center">
                                    <h4 class="frame-heading mb-1"> Wide Panther Smooth </h4>
                                    <p class="frame-headingp">
                                        <small>
                                            Smooth Matte Finish | 30 mm wide and 15 mm deep
                                            <br>
                                        </small>
                                    </p>
                                    <p class="frame-headingp py-2">
                                        <small>
                                            Stylish black matte wide frame with a smooth flawless finish. Hard to go wrong with this timeless profile.
                                        </small>
                                    </p>
                                </div>

                                <div class="clear-both">
                                    <div class="controller-heading">Frame</div>

                                    <div class="float-right">
                                        <div class="categories-radio-buttons d-inline-block" id="isotope-filters">

                                            <div class="categories-radio-button radio-text" data-filter=".white">
                                                <input type="radio" id="frame_colour_option_0" name="frame_colour" data-text="White" value="1"><label for="frame_colour_option_0">
                                                    <div>White</div>
                                                </label>
                                            </div>
                                            <div class="categories-radio-button radio-text" data-filter=".black">
                                                <input type="radio" id="frame_colour_option_1" name="frame_colour" name="frame_colour" data-text="Black" value="2"><label for="frame_colour_option_1">
                                                    <div>Black</div>
                                                </label>
                                            </div>
                                            <div class="categories-radio-button radio-text" data-filter=".wood">
                                                <input type="radio" id="frame_colour_option_2" name="frame_colour" data-text="Wood" value="3"><label for="frame_colour_option_2">
                                                    <div>Luxary</div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-left  mt-3 frame-style-selector" id="isotope-container">
                                        <!--<div class="categories-radio-buttons frame-style-radios">-->
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="controller">
                                    <div class="clearfix">
                                        <div class="controller-heading mt-2 mb-2">Mountboard</div>
                                        <div class="matting_controls_section m-top-15">
                                            <div class="row">
                                                <div class="col-6 flex-1">
                                                    <div class="mat_slider_and_colors_wrapper ">
                                                        <span class="generate_mat_width_controls mt-3 flex-1 w-100" style="vertical-align: top">
                                                            <div id="slider" style="width: 100%;" />
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 flex-1">
                                                <div class="mat_swatch_controls_wrapper" style="display: inline">
                                                    <div class="mat_color_swatches mat_color_swatches_with_tooltips">
                                                        <a onclick="turnWhite()" id="whitestuff" class="mat_control_swatch mat_color_id_1 bottom_tooltip active_mat_color_swatch tooltipstered" data-mat-color="White">
                                                            <span class="mat_swatch_wrapper">
                                                                <span class="solid_color_swatch" style="background-color: rgb(255, 255, 255)"></span>
                                                            </span>
                                                        </a>
                                                        <a onclick="turnBlack()" id="blackstuff" class="mat_control_swatch mat_color_id_2 bottom_tooltip tooltipstered" data-mat-color="Black">
                                                            <span class="mat_swatch_wrapper">
                                                                <span class="solid_color_swatch" style="background-color: hsl(0, 0%, 13%)"></span>
                                                            </span>
                                                        </a>
                                                        <a onclick="turnGold()" id="goldstuff" class="mat_control_swatch mat_color_id_2 bottom_tooltip tooltipstered" data-mat-color="Cream">
                                                            <span class="mat_swatch_wrapper">
                                                                <span class="solid_color_swatch" style="background-color: hsl(41, 79%, 77%)"></span>

                                                            </span>
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear-both">
                                    <div class="controller-heading mt-4 mb-3">GLASS</div>
                                    <div class="row mb-2">
                                        <div class="col-6">
                                            <div class="card">
                                                <div class="card-body" onclick="select2mm()">
                                                    <h6 class="glass-title mb-2">UV Acrylic 2mm</h6>
                                                    <div class="radio-active-icon 2mmselect"></div>
                                                    <p class="frame-headingp card-text">Some quick example text to build on
                                                        the card
                                                        title and make up the bulk of the card's content.</p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="card">
                                                <div class="card-body" onclick="select4mm()">
                                                    <h6 class="glass-title mb-2">UV Acrylic 4mm</h6>
                                                    <div class="radio-active-icon 4mmselect"></div>
                                                    <p class="frame-headingp card-text">Some quick example text to build on
                                                        the card
                                                        title and make up the bulk of the card's content.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="controller mb-2">
                                <h4 class="price-big d-inline-block animated"><span class="mini-currency">£</span><span>55</span>
                                </h4>
                                <span></span><span class="text-muted ml-2"><small>Total size 53cm × 33cm</small></span>
                                <div class="mb-2">
                                    <div class="smallish mb-4">Or 4 payments of £13.75 with<img src="">

                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div>
                                    <input class="btn-get" type="submit" value="Add To Cart">
                                </div>
                            </div>
                            <div class="f">
                                <button type="button" class="btn btn-block btn-lg bg-pale smaller"><i class="icon-truck"></i>
                                    View Delivery Info
                                    <div>
                                        <div class="small text-muted">
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>


</main><!-- End #main -->

@include('footer')
<script src="{{asset('assets/js/framing-single.js')}}"></script>
