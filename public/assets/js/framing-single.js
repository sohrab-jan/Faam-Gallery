//{{{1 assets
let ASSETS = [
]
let mount_size = parseInt($("#mount_board").val() || 0);
//}}}1
//

function preload(arrayOfImages) {
    $(arrayOfImages).each(function() {
        $('<img >').attr('src', this).appendTo('body').css('display', 'none');
    });
}




const input_frame_id = $("#frame_id")
const input_mount_board = $("#mount_board")
const input_mount_color = $("#mount_color")
const input_glass = $("#glass")

const input_width = $("#width")
const input_height = $("#height")
const input_scale = $("#scale")
const input_frame_whole = $("#frame_whole")

let mount_color = 'white';
const vahed = input_scale.val() || getUrlParameter('vahed')
const sclv = vahed === 'inch' ? 25.4 : vahed === 'cm' ? 10 : 1

const b_width = input_width.val() * sclv || Math.min(800, Math.max(200, (getUrlParameter("width") || 0) * sclv));
const b_height = input_height.val() * sclv || Math.min(800, Math.max(200, (getUrlParameter("height") || 0) * sclv));
//each mm is 2pixels
const container_box = $('.box_container');

const container_width = container_box.width() - 100;

//const scale = (container_width / ((b_width + b_height) / 2));
const scale = (container_width / Math.max(b_width, b_height));

let selected_frame = parseInt(input_frame_id.val());
//IF check kone cm bva mm ya harchy ro va scale ro ava koni ba un
const frame_width = b_width * scale;
const frame_height = b_height * scale;
let assets;




$(document).ready(function() {
    $.ajax({
        type: 'get',
        url: '/assets/frames',
        success: function(data, status, xhr) {
            ASSETS = data.assets;
            const t = ASSETS.reduce((a, b) => [...a, b.face, b.side], [])
            preload(t);
            mount_color = input_mount_color.val();

            setassets();
            initthis();
            populateFrames();
            rendercanvas();
            updateScreen();
            setFakeImage();
            initslider();
            if (mount_color === 'black') turnBlack()
            else if (mount_color === 'gold') turnGold()
            else turnWhite()
            if (input_glass.val() === '2') select2mm()
            else if (input_glass.val() === '4') select4mm()
            //$(document).on('load', function() {
            //$("#isotope-container").isotope({ filter: '.black' });
            //});

        }
    })
});
$("#isotope-filters").on("click", "div", function() {
    const filterValue = $(this).attr("data-filter");
    $("#isotope-container").isotope({ filter: filterValue });
    $("#isotope-filters").find(".active").removeClass("active");
    $(this).addClass("active");
});


// Usage:


$("#AMK").on({
    mouseenter: function() {
        $(this).css("transform", "rotateY(-60deg)");
    },
    mouseleave: function() {
        $(this).css("transform", "rotateY(0deg)");
    },
});

//$("#AMK").css("transform", "rotateY(0deg) rotateZ(0deg) rotateX(180deg)");

//{{{1 assets

function setassets() {
    assets = ASSETS.map(i => ({
        ...i,
        deep: i.deep * scale,
        wide: i.wide * scale,
    }))
}

// }}}1
input_width.val(b_width);
input_height.val(b_height);
input_scale.val(vahed || 'mm');




const box = "";
//{{{1 define sides
const f_front = $(".front.three_dimensional_frame")
const f_right = $(".right.three_d_face");
const f_back = $(".back.three_d_face");
const f_left = $(".left.three_d_face");
const f_top = $(".top.three_d_face");
const f_bottom = $(".bottom.three_d_face");

const f_box_container = $(".three_d_box_container");
const f_overlay_gradiant = $(".overlay_gradient");
const f_artwork_layers = $(".artwork_layers");

const f_artwork_layer = $(".artwork_layer");
const f_artwork_layer_2 = $(".artwork_layer_2");
const f_front_mount = $(".front_mount");
const f_back_frame_shadows = $(".back_frame_shadows");

const f_right_inner = $(".right_inner")
const f_left_inner = $(".left_inner")


//}}}1

//{{{1 frame init
function initthis() {
    f_back_frame_shadows.css({
        width: `${frame_width}px`,
        height: `${frame_height}px`,
    })
    f_front_mount.css({
        width: `${frame_width}px`,
        height: `${frame_height}px`,
    });
    f_artwork_layer.css({
        width: '100%',
        height: '100%',
    })
    f_artwork_layer_2.css({
        width: `${frame_width}px`,
        height: `${frame_height}px`,
    })
    f_artwork_layers.css({
        width: `${frame_width}px`,
        height: `${frame_height}px`,
    })
    f_overlay_gradiant.css({
    })
    f_front.css({
        width: `${frame_width}px`,
        height: `${frame_height}px`,
    });
    f_back.css({
        height: `${frame_height}px`,
        width: `${frame_width}px`,
    });
    f_bottom.css({
        //background: `url('${assets[selected_frame].side} ')  repeat-y`,
        'background-size': 'contain',
        'transform-origin': "top",
        height: `${frame_width}px`,
    });
    f_top.css({
        'background-size': 'contain',
        height: `${frame_width}px`,
        //background: `url('${assets[selected_frame].side} ')  repeat-y`,
    });
    f_box_container.css({
        width: `${frame_width}px`,
        height: `${frame_height}px`,
    })

    f_right.css({
        height: `${frame_height}px`,
        'background-size': 'contain',
    });
    f_left.css({
        height: `${frame_height}px`,
        'background-size': 'contain',
    });
    f_left_inner.css({
    });
    f_right_inner.css({
    });
}
//}}}1

initthis()

populateFrames();

updateScreen();
select2mm();

//{{{1 slider
function initslider() {
    const slider = document.getElementById('slider');

    noUiSlider.create(slider, {
        start: [parseInt(input_mount_board.val() || 0)],
        step: 1,
        range: {
            'min': 0,
            'max': 9
        }
    }).on('update', function(values) {
        const thing = $(".artwork_layer_2");
        const valstr = `calc(100% - ${parseInt(values[0] * 10)}px )`
        mount_size = parseInt(values[0] || 0);
        input_mount_board.val(parseInt(values[0] || 0));
        thing.css({
            'width': valstr,
            'height': valstr,
        })
        rendercanvas();
    });
}
//}}}1

//{{{1 changeBkg
function turnBlack() {
    $('.artwork_layers').css('background', 'rgb(0,0,0)');
    $('#blackstuff').addClass("active_mat_color_swatch")
    $('#whitestuff').removeClass("active_mat_color_swatch")
    $('#goldstuff').removeClass("active_mat_color_swatch")
    input_mount_color.val("black");
    mount_color = "black";
    rendercanvas();
}

function turnGold() {
    $('.artwork_layers').css('background', 'rgb(240,210,150)');
    $('#goldstuff').addClass("active_mat_color_swatch")
    $('#whitestuff').removeClass("active_mat_color_swatch")
    $('#blackstuff').removeClass("active_mat_color_swatch")
    input_mount_color.val("gold");
    mount_color = 'rgb(240,210,150)';
    rendercanvas();
}
function turnWhite() {
    $('.artwork_layers').css('background', 'rgb(255,255,255)');
    $('#whitestuff').addClass("active_mat_color_swatch")
    $('#blackstuff').removeClass("active_mat_color_swatch")
    $('#goldstuff').removeClass("active_mat_color_swatch")
    input_mount_color.val("white");
    mount_color = 'white';
    rendercanvas();
}
//}}}1


function select4mm() {
    $('.4mmselect').addClass('tick_selector');
    $('.2mmselect').removeClass('tick_selector');
    input_glass.val("4");
    f_overlay_gradiant.css({ opacity: .15 })
}
function select2mm() {
    $('.2mmselect').addClass('tick_selector');
    $('.4mmselect').removeClass('tick_selector');
    input_glass.val("2");
    f_overlay_gradiant.css({ opacity: .075 })
}

//{{{1 getUrlParameter
function getUrlParameter(sParam) {
    const sPageURL = window.location.search.substring(1)
    const sURLVariables = sPageURL.split('&')
    let sParameterName
    let i;
    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] === sParam)
            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
    }
    return false;
}
//}}}1

//{{{1 populateFrames
function populateFrames() {
    assets?.forEach((asset, idx) => {
        const text =
            `
         <div id = "frame_style_option_${idx}" class= "categories-radio-button image ${asset.picture} " >
            <input type="radio" name="frame_style" data-text="${asset.name}" value="344"/>
            <label>
               <div class="categories-radio-button-icon">
                  <img src="/assets/img/frame/${asset.name}.png" class="img-fluid rounded">
                  <div class="radio-active-icon"></div>
               </div>
            </label>
         </div>
         `

        $('#isotope-container').append(text)
    })

    const mylist = assets?.map(({ id }, idx) => ({ id, tag: `#frame_style_option_${idx}` }));
    mylist?.forEach(({ id, tag }, idx) => {
        const selector = $(tag)
        selector.click(function() {

            mylist.forEach(({ tag }) => {
                a = $(tag).find('.radio-active-icon')
                a.css('background-image', 'url("")');
                a.css('background-color', '#f8f6f8 ');
            });
            a = selector.find('.radio-active-icon')
            a.css('background-image', 'url("/assets/img/item/Ticksymbol.png")');
            a.css('background-color', '#999999 ');

            selected_frame = id;
            console.log(id)
            input_frame_id.val(id);
            updateScreen();
        })

    })
    const selector = $((mylist?.find(i => i.id === selected_frame) || mylist?.[0])?.tag)
    selector.click();
}
//}}}1

//{{{1 updateScreen
function updateScreen() {
    if (assets?.length === 0) return;
    f_front.css({
        'transition-property': 'all',
        'transition-duration': '500ms',
        'transition-timing-function': 'ease',
    })
    f_front_mount.css({
        'transition-property': 'all',
        'transition-duration': '500ms',
        'transition-timing-function': 'ease',
    })
    f_overlay_gradiant.css({
        'transition-property': 'all',
        'transition-duration': '500ms',
        'transition-timing-function': 'ease',
    })
    f_artwork_layer_2.css({
        'transition-property': 'all',
        'transition-duration': '500ms',
        'transition-timing-function': 'ease',
    })
    f_artwork_layer.css({
        'transition-property': 'all',
        'transition-duration': '500ms',
        'transition-timing-function': 'ease',
    })
    const masset = assets?.find(i => i.id === selected_frame) || assets?.[0] || { wide: 0, deep: 0, face: '', side: '' };
    f_back_frame_shadows.css({
        left: `-${masset.wide}px`,
        top: `-${masset.wide}px`,
        'transition-property': 'all',
        'transition-duration': '500ms',
        'transition-timing-function': 'ease',
    });

    f_back.css({
        'border-image-source': `url('${masset.face}') `,
        'border-image-slice': `${frame_width / masset.wide}`,
        'border-width': `${masset.wide}px`,
        'border-image-width': `${masset.wide}px`,
        transform: `rotateY(0deg) translateZ(-${masset.deep / 2}px) translateY(0px) translateX(0px)`,
        'transition-property': 'all',
        'transition-duration': '500ms',
        'transition-timing-function': 'ease',
    })
    f_overlay_gradiant.css({
        transform: `rotateY(0deg) translateZ(${masset.deep / 2 + 1}px) translateY(0px) translateX(0px)`,
        'transition-property': 'all',
        'transition-duration': '500ms',
        'transition-timing-function': 'ease',
    })
    f_front.css({
        'border-image-source': `url('${masset.face}')`,
        'border-image-slice': `${frame_width / masset.wide}`,
        'border-width': `${masset.wide}px`,
        'border-image-width': `${masset.wide}px`,
        transform: `rotateY(0deg) translateZ(${masset.deep / 2}px) translateY(0px) translateX(0px)`,
        'transition-property': 'all',
        'transition-duration': '500ms',
        'transition-timing-function': 'ease',
    });
    f_bottom.css({
        background: `url(' ${masset.side}')  repeat-y`,
        width: `${masset.deep}px`,
        left: `-${masset.deep / 2}px`,
        top: `${frame_height}px`,
        transform: `translateZ(${0}px) translateY(${0 / 2}px) translateX(${0 / 2}px) rotateY(90deg) rotateX(90deg) `,
        'transition-property': 'all',
        'transition-duration': '500ms',
        'transition-timing-function': 'ease',
    })
    f_top.css({
        background: `url(' ${masset.side}')  repeat-y`,
        transform: `translateZ(${0}px) translateY(-${frame_width / 2}px) translateX(0px) rotateY(90deg) rotateX(90deg) `,
        width: `${masset.deep}`,
        top: `${0}px`,
        left: `${frame_width / 2 - masset.deep / 2}px`,
        'transition-property': 'all',
        'transition-duration': '500ms',
        'transition - timing - function': 'ease',
    })
    f_artwork_layers.css({
        transform: `rotateY(0deg) translateZ(${masset.deep / 4}px) translateY(0px) translateX(0px)`,
        width: `${frame_width - masset.wide * 2}px`,
        height: `${frame_height - masset.wide * 2}px`,
        'transition-property': 'all',
        'transition-duration': '500ms',
        'transition-timing-function': 'ease',
    })
    f_right_inner.css({
        height: `${frame_height - masset.wide * 2}px`,
        background: `url('${masset.side}')  repeat-y`,
        transform: `translateZ(0px) translateY(0px) translateX(-${masset.deep / 2}px) rotateY(90deg) `,
        left: `${frame_width - masset.wide + 1}px`,
        width: `${masset.deep}`,
        'transition-property': 'all',
        'transition-duration': '500ms',
        'transition-timing-function': 'ease',
    })
    f_left_inner.css({
        height: `${frame_height - masset.wide * 2}px`,
        background: `url('${masset.side}')  repeat-y`,
        left: `${masset.wide - 1}px`,
        width: `${masset.deep}`,
        transform: `translateZ(0px) translateY(0px) translateX(-${masset.deep / 2}px) rotateY(90deg) `,
        'transition-property': 'all',
        'transition-duration': '500ms',
        'transition-timing-function': 'ease',
    })
    f_right.css({
        background: `url('${masset.side}')  repeat-y`,
        left: `${frame_width}px`,
        width: `${masset.deep}`,
        transform: `translateZ(0px) translateY(0px) translateX(-${masset.deep / 2}px) rotateY(90deg) `,
        'transition-property': 'all',
        'transition-duration': '500ms',
        'transition-timing-function': 'ease',
    })
    f_left.css({
        left: '0px',
        width: `${masset.deep}`,
        background: `url('${masset.side}')  repeat-y`,
        transform: `translateZ(-0px) translateY(0px) translateX(-${masset.deep / 2}px) rotateY(90deg) `,
        'transition-property': 'all',
        'transition-duration': '500ms',
        'transition-timing-function': 'ease',
    })

    container_box.removeClass('hidden');

    $("#AMK").css({ opacity: 1 })
    //const jpegUrl = $('#AMK').toDataURL("image/jpeg");
    //input_scale.val(vahed || 'mm');

    rendercanvas();
}
//}}}1

//{{{1 render canvas
function rendercanvas() {
    if (!assets?.length > 0) return;
    const canvas = document.getElementById('fcanvas')

    canvas.width = `${frame_width}`;
    canvas.height = `${frame_height}`;

    context = canvas.getContext('2d');

    const s = assets?.find(i => i.id === selected_frame) || assets?.[0];
    const wide = s.wide;
    const face = s.face

    context.fillStyle = mount_color || 'white';
    context.fillRect(0, 0, canvas.width, canvas.height);
    img1 = new Image();
    img1.src = "/assets/img/BackingBoard.jpg";
    img1.onload = function() {
        context.drawImage(img1,
            wide + mount_size * 5, wide + mount_size * 5, frame_width - 2 * wide - 2 * mount_size * 5, frame_height - 2 * wide - 2 * mount_size * 5);
        img2 = new Image();
        img2.src = "/assets/img/Logo_for_BackingBoard.png"
        context.drawImage(img2,
            frame_width / 2 - img2.width / 4, frame_height / 2 - img2.height / 4, img2.width / 2, img2.height / 2);
        img2.onload = function() {
            img_im = new Image();
            img_im.src = face
            img_im.onload = function() {
                context.drawImage(img_im,
                    0, 0, frame_width, wide,
                    0, 0, frame_width, wide);
                context.drawImage(img_im,
                    0, 0, wide, frame_height,
                    0, 0, wide, frame_height);
                context.drawImage(img_im,
                    0, img_im.height - wide, frame_width, wide,
                    0, frame_height - wide, frame_width, wide);
                context.drawImage(img_im,
                    img_im.width - wide, 0, wide, frame_height,
                    frame_width - wide, 0, wide, frame_height);

                if ($('#iiimg').attr('src')) {
                    img_img = new Image();
                    img_img.src = $('#iiimg').attr('src');
                    img_img.onload = function() {
                        context.drawImage(img_img,
                            wide + mount_size * 5, wide + mount_size * 5,
                            frame_width - 2 * wide - 2 * mount_size * 5, frame_height - 2 * wide - 2 * mount_size * 5);
                        setFakeImage();
                    }
                } else {
                    setFakeImage();
                }
            }

        }
    }



}

function setFakeImage() {
    const canvas = document.getElementById('fcanvas')
    const fake_image = canvas.toDataURL();
    $('#fake_image').val(fake_image);
}
//}}}1
//
//
//
function editstuff(e) {
    console.log('event', e);
}

