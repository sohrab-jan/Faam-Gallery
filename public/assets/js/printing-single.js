const input_paper = $("#paper")
const input_frame = $("#frame")

$(document).ready(function() {
    select_no_frame();
    select_paper_1();
})


function select_paper_1() {
    $('.select_paper_1').addClass('tick_selector');
    $('.select_paper_2').removeClass('tick_selector');
    input_paper.val('matte');
}
function select_paper_2() {
    $('.select_paper_2').addClass('tick_selector');
    $('.select_paper_1').removeClass('tick_selector');
    input_paper.val('satin')
}

function select_no_frame() {
    $('.select_no_frame').addClass('tick_selector');
    $('.select_frame').removeClass('tick_selector');
    input_frame.val('0')
}
function select_frame() {
    $('.select_frame').addClass('tick_selector');
    $('.select_no_frame').removeClass('tick_selector');
    input_frame.val('1');

}






const image = $('#draw');

const _input_image = $("#image");
const _input_ext = $("#ext");
const _input_width = $("#width");
const _input_height = $("#height");
image.cropper({
    aspectRatio: (_input_width.val() / _input_height.val()) || 1,
    viewMode: 1,
    //autoCrop: false,
    reponsive: true,
    guides: false,
    rotatable: false,
    scalable: true,
    zoomOnWheel: false,
    zoomOnTouch: false,
    center: true,
    crop: function(event) {
        _input_image.val(cropper.getCroppedCanvas().toDataURL("image/jpeg").split(',')[1]);
        _input_ext.val("jpg");
        calcdpi();

    },

});


// Get the Cropper.js instance after initialized
const cropper = image.data('cropper');

const slider = document.getElementById('slider');

noUiSlider.create(slider, {
    start: [0],
    step: 1 / 10,

    range: {
        'min': 0,
        'max': 1
    }
}).on('update', function(values) {
    cropper?.zoomTo(values[0]);
});
//}}}1


function widthOnchange(event) {
    cropper.setAspectRatio(_input_width.val() / _input_height.val());
    calcdpi()
}
function calcdpi() {
    $("#dpi").text(parseInt(cropper.getCroppedCanvas().height / _input_height.val() * 10 + cropper.getCroppedCanvas().width / _input_width.val() * 10));
}
