


//Common start
$(document).on('click', '.remove-field', function (e) {
    $(this).parent('.remove').remove();
    e.preventDefault();
});
// common end

// Clip one start 
$('.clipOne_LayerType').on('change', function () {
    if (this.value == 'image') {
      $('#clip1Content').html("");
      $('#clip1Content').append('<div class="row"> <div class="col-sm-6"> <div class="form-group"> <label for="clipOne_ImageUrl">Image url</label> <input type="text" class="form-control" id="clipOne_ImageUrl" name="clipOne_ImageUrl" placeholder="Enter image url"> </div></div><div class="col-sm-3"> <div class="form-group"> <label>Select resize mode</label> <select class="form-control" name="clipOne_ResizeMode"> <option value="contain">contain</option> <option value="contain-blur">contain-blur</option> <option value="cover">cover</option> <option value="stretch">stretch</option> </select> </div></div><div class="col-sm-3"> <div class="form-group"> <label>Select zoom direction</label> <select class="form-control" name="clipOne_ZoomDirection"> <option value="in">in</option> <option value="out">out</option> <option value="null">null</option> </select> </div></div></div>')
    }
    if (this.value == 'title') {
      $('#clip1Content').html("");
      $('#clip1Content').append('<div class="row"> <div class="col-sm-6"> <div class="form-group"> <label>Font path</label> <select class="form-control" name="clipOne_FontPath"> <option value="a">a</option> <option value="b">b</option> <option value="c">c</option> <option value="d">d</option> </select> </div></div><div class="col-sm-6"> <div class="form-group"> <label for="clipOne_Text">Text</label> <input type="text" class="form-control" id="clipOne_Text" name="clipOne_Text" placeholder="Enter text "> </div></div></div><div class="row"> <div class="col-sm-6"> <div class="form-group"> <label for="imageDuration">Text Color</label> <input type="text" class="form-control" id="clipOne_TextColor" name="clipOne_TextColor" placeholder="Enter hex color code"> </div></div><div class="col-sm-6"> <div class="form-group"> <label>Position</label> <select class="form-control" name="clipOne_TextPosition"> <option value="top">top</option> <option value="bottom">bottom</option> <option value="center">center</option> <option value="top-left">top-left</option> <option value="top-right">top-right</option> <option value="center-left">center-left</option> <option value="center-right">center-right</option> <option value="bottom-left">bottom-left</option> <option value="bottom-right">bottom-right</option> </select> </div></div></div>')
    }
    if (this.value == 'video') {
        $('#clip1Content').html("");
        $('#clip1Content').append('<div class="row"> <div class="col-sm-3"> <div class="form-group"> <label for="clipOne_VideoPath">Video path</label> <input type="text" class="form-control" id="clipOne_VideoPath" name="clipOne_VideoPath" placeholder="Enter video link "> </div></div><div class="col-sm-3"> <div class="form-group"> <label>Select video resize mode</label> <select class="form-control" name="clipOne_VideoResizeMode"> <option value="contain">contain</option> <option value="contain-blur">contain-blur</option> <option value="cover">cover</option> <option value="stretch">stretch</option> </select> </div></div><div class="col-sm-3"> <div class="form-group"> <label for="clipOne_VideoCutFrom">Cut from(sec)</label> <input type="number" class="form-control" id="clipOne_VideoCutFrom" name="clipOne_VideoCutFrom" placeholder="0"> </div></div><div class="col-sm-3"> <div class="form-group"> <label for="clipOne_VideoCutTo">Cut to(sec)</label> <input type="number" class="form-control" id="clipOne_VideoCutTo" name="clipOne_VideoCutTo" placeholder=""> </div></div></div><div class="row"> <div class="col-sm-3"> <div class="form-group"> <label for="clipOne_VideoWidth">Width<br>(default is 1 if left blank, input range 0-1)</label> <input type="number" class="form-control" id="clipOne_VideoWidth" name="clipOne_VideoWidth" placeholder="1"> </div></div><div class="col-sm-3"> <div class="form-group"> <label for="clipOne_VideoHeight">Height<br>(default is 1 if left blank, input range 0-1)</label> <input type="number" class="form-control" id="clipOne_VideoHeight" name="clipOne_VideoHeight" placeholder="1"> </div></div><div class="col-sm-3"> <div class="form-group"> <label for="clipOne_VideoLeft">Left <br>(X-position relative to screen width, default=0, range=0-1)</label> <input type="number" class="form-control" id="clipOne_VideoLeft" name="clipOne_VideoLeft" placeholder="0"> </div></div><div class="col-sm-3"> <div class="form-group"> <label for="clipOne_VideoTop">Top <br>(Y-position relative to screen height, default=0, range=0-1)</label> <input type="number" class="form-control" id="clipOne_VideoTop" name="clipOne_VideoTop" placeholder="0"> </div></div></div><div class="row"> <div class="col-sm-4"> <div class="form-group"> <label>X anchor</label> <div class="custom-control custom-radio"> <input class="custom-control-input" type="radio" id="clipOne_VideoOriginXOne" name="clipOne_VideoOriginX" value="left"> <label for="clipOne_VideoOriginXOne" class="custom-control-label">Left</label> </div><div class="custom-control custom-radio"> <input class="custom-control-input" type="radio" id="clipOne_VideoOriginXTwo" name="clipOne_VideoOriginX" value="right"> <label for="clipOne_VideoOriginXTwo" class="custom-control-label">Right</label> </div></div></div><div class="col-sm-4"> <div class="form-group"> <label>Y anchor</label> <div class="custom-control custom-radio"> <input class="custom-control-input" type="radio" id="clipOne_VideoOriginYOne" name="clipOne_VideoOriginY" value="top"> <label for="clipOne_VideoOriginYOne" class="custom-control-label">Top</label> </div><div class="custom-control custom-radio"> <input class="custom-control-input" type="radio" id="clipOne_VideoOriginYTwo" name="clipOne_VideoOriginY" value="bottom"> <label for="clipOne_VideoOriginYTwo" class="custom-control-label">Bottom</label> </div></div></div><div class="col-sm-4"> <div class="form-group"> <div class="custom-control custom-checkbox"> <input class="custom-control-input custom-control-input-danger custom-control-input-outline" type="checkbox" id="clipOne_VideoMixVolume" name="clipOne_VideoMixVolume" checked=""> <label for="clipOne_VideoMixVolume" class="custom-control-label">Mix Volume(Relative volume when mixing this video audio track with others)</label> </div></div></div></div>');
    }
});
$('.extra_fields_clip_one_layer_records').click(function () {
    createSectionOne();
});
function createSectionOne(){
    var count = $('#mainSectionViewable1 .clip_one_layer_records').length; 
    $('#mainSectionViewable1').append($('#mainSectionOne').html().replace(/__count__/g, count));
    onChangeFunctionOne($('#layerRecordOne'+count),count);
}
function onChangeFunctionOne(ele,count) {
    var clipLayerToggle = ele.find(".clipOne_SubLayerType");
    clipLayerToggle.on('change', function () {
        var changeValue = $(this).val();
        var getHtml = $('#'+ changeValue +'ProcessingDataOne').html();
        var newHtml =   getHtml.replace(/__count__/g, count);
        ele.find('.clip1ImageLayer').html(newHtml);
    });
}
    createSectionOne();
// Clip one end






// Clip two start 
$('.clipTwo_LayerType').on('change', function () {
    if (this.value == 'image') {
      $('#clip2Content').html("");
      $('#clip2Content').append('<div class="row"> <div class="col-sm-6"> <div class="form-group"> <label for="clipTwo_ImageUrl">Image url</label> <input type="text" class="form-control" id="clipTwo_ImageUrl" name="clipTwo_ImageUrl" placeholder="Enter image url"> </div></div><div class="col-sm-3"> <div class="form-group"> <label>Select resize mode</label> <select class="form-control" name="clipTwo_ResizeMode"> <option value="contain">contain</option> <option value="contain-blur">contain-blur</option> <option value="cover">cover</option> <option value="stretch">stretch</option> </select> </div></div><div class="col-sm-3"> <div class="form-group"> <label>Select zoom direction</label> <select class="form-control" name="clipTwo_ZoomDirection"> <option value="in">in</option> <option value="out">out</option> <option value="null">null</option> </select> </div></div></div>')
    }
    if (this.value == 'title') {
      $('#clip2Content').html("");
      $('#clip2Content').append('<div class="row"> <div class="col-sm-6"> <div class="form-group"> <label>Font path</label> <select class="form-control" name="clipTwo_FontPath"> <option value="a">a</option> <option value="b">b</option> <option value="c">c</option> <option value="d">d</option> </select> </div></div><div class="col-sm-6"> <div class="form-group"> <label for="clipTwo_Text">Text</label> <input type="text" class="form-control" id="clipTwo_Text" name="clipTwo_Text" placeholder="Enter text "> </div></div></div><div class="row"> <div class="col-sm-6"> <div class="form-group"> <label for="imageDuration">Text Color</label> <input type="text" class="form-control" id="clipTwo_TextColor" name="clipTwo_TextColor" placeholder="Enter hex color code"> </div></div><div class="col-sm-6"> <div class="form-group"> <label>Position</label> <select class="form-control" name="clipTwo_TextPosition"> <option value="top">top</option> <option value="bottom">bottom</option> <option value="center">center</option> <option value="top-left">top-left</option> <option value="top-right">top-right</option> <option value="center-left">center-left</option> <option value="center-right">center-right</option> <option value="bottom-left">bottom-left</option> <option value="bottom-right">bottom-right</option> </select> </div></div></div>')
    }
    if (this.value == 'video') {
        $('#clip2Content').html("");
        $('#clip2Content').append('<div class="row"> <div class="col-sm-3"> <div class="form-group"> <label for="clipTwo_VideoPath">Video path</label> <input type="text" class="form-control" id="clipTwo_VideoPath" name="clipTwo_VideoPath" placeholder="Enter video link "> </div></div><div class="col-sm-3"> <div class="form-group"> <label>Select video resize mode</label> <select class="form-control" name="clipTwo_VideoResizeMode"> <option value="contain">contain</option> <option value="contain-blur">contain-blur</option> <option value="cover">cover</option> <option value="stretch">stretch</option> </select> </div></div><div class="col-sm-3"> <div class="form-group"> <label for="clipTwo_VideoCutFrom">Cut from(sec)</label> <input type="number" class="form-control" id="clipTwo_VideoCutFrom" name="clipTwo_VideoCutFrom" placeholder="0"> </div></div><div class="col-sm-3"> <div class="form-group"> <label for="clipTwo_VideoCutTo">Cut to(sec)</label> <input type="number" class="form-control" id="clipTwo_VideoCutTo" name="clipTwo_VideoCutTo" placeholder=""> </div></div></div><div class="row"> <div class="col-sm-3"> <div class="form-group"> <label for="clipTwo_VideoWidth">Width<br>(default is 1 if left blank, input range 0-1)</label> <input type="number" class="form-control" id="clipTwo_VideoWidth" name="clipTwo_VideoWidth" placeholder="1"> </div></div><div class="col-sm-3"> <div class="form-group"> <label for="clipTwo_VideoHeight">Height<br>(default is 1 if left blank, input range 0-1)</label> <input type="number" class="form-control" id="clipTwo_VideoHeight" name="clipTwo_VideoHeight" placeholder="1"> </div></div><div class="col-sm-3"> <div class="form-group"> <label for="clipTwo_VideoLeft">Left <br>(X-position relative to screen width, default=0, range=0-1)</label> <input type="number" class="form-control" id="clipTwo_VideoLeft" name="clipTwo_VideoLeft" placeholder="0"> </div></div><div class="col-sm-3"> <div class="form-group"> <label for="clipTwo_VideoTop">Top <br>(Y-position relative to screen height, default=0, range=0-1)</label> <input type="number" class="form-control" id="clipTwo_VideoTop" name="clipTwo_VideoTop" placeholder="0"> </div></div></div><div class="row"> <div class="col-sm-4"> <div class="form-group"> <label>X anchor</label> <div class="custom-control custom-radio"> <input class="custom-control-input" type="radio" id="clipTwo_VideoOriginXOne" name="clipTwo_VideoOriginX" value="left"> <label for="clipTwo_VideoOriginXOne" class="custom-control-label">Left</label> </div><div class="custom-control custom-radio"> <input class="custom-control-input" type="radio" id="clipTwo_VideoOriginXTwo" name="clipTwo_VideoOriginX" value="right"> <label for="clipTwo_VideoOriginXTwo" class="custom-control-label">Right</label> </div></div></div><div class="col-sm-4"> <div class="form-group"> <label>Y anchor</label> <div class="custom-control custom-radio"> <input class="custom-control-input" type="radio" id="clipTwo_VideoOriginYOne" name="clipTwo_VideoOriginY" value="top"> <label for="clipTwo_VideoOriginYOne" class="custom-control-label">Top</label> </div><div class="custom-control custom-radio"> <input class="custom-control-input" type="radio" id="clipTwo_VideoOriginYTwo" name="clipTwo_VideoOriginY" value="bottom"> <label for="clipTwo_VideoOriginYTwo" class="custom-control-label">Bottom</label> </div></div></div><div class="col-sm-4"> <div class="form-group"> <div class="custom-control custom-checkbox"> <input class="custom-control-input custom-control-input-danger custom-control-input-outline" type="checkbox" id="clipTwo_VideoMixVolume" name="clipTwo_VideoMixVolume" checked=""> <label for="clipTwo_VideoMixVolume" class="custom-control-label">Mix Volume(Relative volume when mixing this video audio track with others)</label> </div></div></div></div>');
    }
});
$('.extra_fields_clip_two_layer_records').click(function () {
    createSectionTwo();
});
function createSectionTwo(){
    var count = $('#mainSectionViewable2 .clip_two_layer_records').length; 
    $('#mainSectionViewable2').append($('#mainSectionTwo').html().replace(/__count__/g, count));
    onChangeFunctionTwo($('#layerRecordTwo'+count),count);
}
function onChangeFunctionTwo(ele,count) {
    var clipLayerToggle = ele.find(".clipTwo_SubLayerType");
    clipLayerToggle.on('change', function () {
        var changeValue = $(this).val();
        var getHtml = $('#'+ changeValue +'ProcessingDataTwo').html();
        var newHtml =   getHtml.replace(/__count__/g, count);
        ele.find('.clip2ImageLayer').html(newHtml);
    });
}
    createSectionTwo();
// Clip two end






