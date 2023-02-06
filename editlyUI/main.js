


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
        $('#clip1Content').append('<div class="row"> <div class="col-sm-3"> <div class="form-group"> <label for="clipOne_VideoPath">Video path</label> <input type="text" class="form-control" id="clipOne_VideoPath" name="clipOne_VideoPath" placeholder="Enter video link "> </div></div><div class="col-sm-3"> <div class="form-group"> <label>Select video resize mode</label> <select class="form-control" name="clipOne_VideoResizeMode" id="clipOne_VideoResizeMode"> <option value="contain">contain</option> <option value="contain-blur">contain-blur</option> <option value="cover">cover</option> <option value="stretch">stretch</option> </select> </div></div><div class="col-sm-3"> <div class="form-group"> <label for="clipOne_VideoCutFrom">Cut from(sec)</label> <input type="number" class="form-control" id="clipOne_VideoCutFrom" name="clipOne_VideoCutFrom" placeholder="0"> </div></div><div class="col-sm-3"> <div class="form-group"> <label for="clipOne_VideoCutTo">Cut to(sec)</label> <input type="number" class="form-control" id="clipOne_VideoCutTo" name="clipOne_VideoCutTo" placeholder=""> </div></div></div><div class="row"> <div class="col-sm-3"> <div class="form-group"> <label for="clipOne_VideoWidth">Width<br>(default is 1 if left blank, input range 0-1)</label> <input type="number" class="form-control" id="clipOne_VideoWidth" name="clipOne_VideoWidth" placeholder="1"> </div></div><div class="col-sm-3"> <div class="form-group"> <label for="clipOne_VideoHeight">Height<br>(default is 1 if left blank, input range 0-1)</label> <input type="number" class="form-control" id="clipOne_VideoHeight" name="clipOne_VideoHeight" placeholder="1"> </div></div><div class="col-sm-3"> <div class="form-group"> <label for="clipOne_VideoLeft">Left <br>(X-position relative to screen width, default=0, range=0-1)</label> <input type="number" class="form-control" id="clipOne_VideoLeft" name="clipOne_VideoLeft" placeholder="0"> </div></div><div class="col-sm-3"> <div class="form-group"> <label for="clipOne_VideoTop">Top <br>(Y-position relative to screen height, default=0, range=0-1)</label> <input type="number" class="form-control" id="clipOne_VideoTop" name="clipOne_VideoTop" placeholder="0"> </div></div></div><div class="row"> <div class="col-sm-4"> <div class="form-group"> <label>X anchor</label> <div class="custom-control custom-radio"> <input class="custom-control-input" type="radio" id="clipOne_VideoOriginXOne" name="clipOne_VideoOriginX" value="left"> <label for="clipOne_VideoOriginXOne" class="custom-control-label">Left</label> </div><div class="custom-control custom-radio"> <input class="custom-control-input" type="radio" id="clipOne_VideoOriginXTwo" name="clipOne_VideoOriginX" value="right"> <label for="clipOne_VideoOriginXTwo" class="custom-control-label">Right</label> </div></div></div><div class="col-sm-4"> <div class="form-group"> <label>Y anchor</label> <div class="custom-control custom-radio"> <input class="custom-control-input" type="radio" id="clipOne_VideoOriginYOne" name="clipOne_VideoOriginY" value="top"> <label for="clipOne_VideoOriginYOne" class="custom-control-label">Top</label> </div><div class="custom-control custom-radio"> <input class="custom-control-input" type="radio" id="clipOne_VideoOriginYTwo" name="clipOne_VideoOriginY" value="bottom"> <label for="clipOne_VideoOriginYTwo" class="custom-control-label">Bottom</label> </div></div></div><div class="col-sm-4"> <div class="form-group"> <div class="custom-control custom-checkbox"> <input class="custom-control-input custom-control-input-danger custom-control-input-outline" type="checkbox" id="clipOne_VideoMixVolume" name="clipOne_VideoMixVolume" checked=""> <label for="clipOne_VideoMixVolume" class="custom-control-label">Mix Volume(Relative volume when mixing this video audio track with others)</label> </div></div></div></div>');
    }
    if (this.value == 'subtitle') {
        $('#clip1Content').html("");
        $('#clip1Content').append('<div class="row"> <div class="col-sm-6"> <div class="form-group"> <label>Font path</label> <select class="form-control" name="clipOne_SubTitleFontPath" id="clipOne_SubTitleFontPath"> <option value="a">a</option> <option value="b">b</option> <option value="c">c</option> <option value="d">d</option> </select> </div></div><div class="col-sm-6"> <div class="form-group"> <label for="clipOne_SubTitleText">Text</label> <input type="text" class="form-control" id="clipOne_SubTitleText" name="clipOne_SubTitleText" placeholder="Enter text "> </div></div></div><div class="row"> <div class="col-sm-4"> <div class="form-group"> <label for="clipOne_SubTitleTextColor">Text Color</label> <input type="text" class="form-control" id="clipOne_SubTitleTextColor" name="clipOne_SubTitleTextColor" placeholder="Enter hex color code"> </div></div><div class="col-sm-4"> <div class="form-group"> <label for="clipOne_SubTitleBackgroundColor">Background Color</label> <input type="text" class="form-control" id="clipOne_SubTitleBackgroundColor" name="clipOne_SubTitleBackgroundColor" placeholder="Enter hex color code"> </div></div><div class="col-sm-4"> <div class="form-group"> <label>Position</label> <select class="form-control" name="clipOne_SubTitlePosition" id="clipOne_SubTitlePosition"> <option value="top">top</option> <option value="bottom">bottom</option> <option value="center">center</option> <option value="top-left">top-left</option> <option value="top-right">top-right</option> <option value="center-left">center-left</option> <option value="center-right">center-right</option> <option value="bottom-left">bottom-left</option> <option value="bottom-right">bottom-right</option> </select> </div></div></div>');
    }
    if (this.value == 'linear-gradient') {
        $('#clip1Content').html("");
        $('#clip1Content').append('<div class="row"> <div class="col-sm-6"> <div class="form-group"> <label for="clipOne_LinearGradientColorOne">Color one</label> <input type="text" class="form-control" id="clipOne_LinearGradientColorOne" name="clipOne_LinearGradientColorOne" placeholder="Enter color one "> </div></div><div class="col-sm-6"> <div class="form-group"> <label for="clipOne_LinearGradientColorTwo">Color two</label> <input type="text" class="form-control" id="clipOne_LinearGradientColorTwo" name="clipOne_LinearGradientColorTwo" placeholder="Enter color two"> </div></div></div>');
    }
    if (this.value == 'radial-gradient') {
        $('#clip1Content').html("");
        $('#clip1Content').append('<div class="row"> <div class="col-sm-6"> <div class="form-group"> <label for="clipOne_RadialGradientColorOne">Color one</label> <input type="text" class="form-control" id="clipOne_RadialGradientColorOne" name="clipOne_RadialGradientColorOne" placeholder="Enter color one "> </div></div><div class="col-sm-6"> <div class="form-group"> <label for="clipOne_RadialGradientColorTwo">Color two</label> <input type="text" class="form-control" id="clipOne_RadialGradientColorTwo" name="clipOne_RadialGradientColorTwo" placeholder="Enter color two"> </div></div></div>');
    }
    if (this.value == 'image-overlay') {
        $('#clip1Content').html("");
        $('#clip1Content').append('<div class="row"> <div class="col-sm-3"> <div class="form-group"> <label for="clipOne_ImageOverlayPath">Image path</label> <input type="text" class="form-control" id="clipOne_ImageOverlayPath" name="clipOne_ImageOverlayPath" placeholder=" "> </div></div><div class="col-sm-3"> <div class="form-group"> <label for="clipOne_ImageOverlayWidth">Width</label> <input type="text" class="form-control" id="clipOne_ImageOverlayWidth" name="clipOne_ImageOverlayWidth" placeholder=""> </div></div><div class="col-sm-3"> <div class="form-group"> <label for="clipOne_ImageOverlayHeight">Height</label> <input type="text" class="form-control" id="clipOne_ImageOverlayHeight" name="clipOne_ImageOverlayHeight" placeholder=""> </div></div><div class="col-sm-3"> <div class="form-group"> <label>Position</label> <select class="form-control" name="clipOne_ImageOverlayPosition" id="clipOne_ImageOverlayPosition"> <option value="top">top</option> <option value="bottom">bottom</option> <option value="center">center</option> <option value="top-left">top-left</option> <option value="top-right">top-right</option> <option value="center-left">center-left</option> <option value="center-right">center-right</option> <option value="bottom-left">bottom-left</option> <option value="bottom-right">bottom-right</option> </select> </div></div></div>');
    }
    if (this.value == 'rainbow-colors') {
        $('#clip1Content').html("");
    }

    if (this.value == 'slide-in-text') {
        $('#clip1Content').html("");
        $('#clip1Content').append('<div class="row"> <div class="col-sm-4"> <div class="form-group"> <label>Font path</label> <select class="form-control" name="clipOne_SlideInFontPath" id="clipOne_SlideInFontPath"> <option value="a">a</option> <option value="b">b</option> <option value="c">c</option> <option value="d">d</option> </select> </div></div><div class="col-sm-4"> <div class="form-group"> <label for="clipOne_SlideInText">Text</label> <input type="text" class="form-control" id="clipOne_SlideInText" name="clipOne_SlideInText" placeholder="Enter text "> </div></div><div class="col-sm-4"> <div class="form-group"> <label for="clipOne_SlideInFontSize">Font size</label> <input type="text" class="form-control" id="clipOne_SlideInFontSize" name="clipOne_SlideInFontSize" placeholder="Enter font size "> </div></div></div><div class="row"> <div class="col-sm-4"> <div class="form-group"> <label for="clipOne_SlideInCharSpacing">Character Spacing</label> <input type="text" class="form-control" id="clipOne_SlideInCharSpacing" name="clipOne_SlideInCharSpacing" placeholder="Enter char spacing"> </div></div><div class="col-sm-4"> <div class="form-group"> <label for="clipOne_SlideInColor">Color</label> <input type="text" class="form-control" id="clipOne_SlideInColor" name="clipOne_SlideInColor" placeholder="Enter color code"> </div></div><div class="col-sm-4"> <div class="form-group"> <label>Position</label> <select class="form-control" name="clipOne_SlideInPosition" id="clipOne_SlideInPosition"> <option value="top">top</option> <option value="bottom">bottom</option> <option value="center">center</option> <option value="top-left">top-left</option> <option value="top-right">top-right</option> <option value="center-left">center-left</option> <option value="center-right">center-right</option> <option value="bottom-left">bottom-left</option> <option value="bottom-right">bottom-right</option> </select> </div></div></div>');
    }
    if (this.value == 'news-title') {
        $('#clip1Content').html("");
        $('#clip1Content').append('<div class="row"> <div class="col-sm-4"> <div class="form-group"> <label>Font path</label> <select class="form-control" name="clipOne_NewsTitleFontPath" id="clipOne_NewsTitleFontPath"> <option value="a">a</option> <option value="b">b</option> <option value="c">c</option> <option value="d">d</option> </select> </div></div><div class="col-sm-4"> <div class="form-group"> <label for="clipOne_NewsTitleText">Text</label> <input type="text" class="form-control" id="clipOne_NewsTitleText" name="clipOne_NewsTitleText" placeholder="Enter text "> </div></div><div class="col-sm-4"> <div class="form-group"> <label for="clipOne_NewsTitleTextColor">Text color</label> <input type="text" class="form-control" id="clipOne_NewsTitleTextColor" name="clipOne_NewsTitleTextColor" placeholder=" "> </div></div></div><div class="row"> <div class="col-sm-4"> <div class="form-group"> <label for="clipOne_NewsTitleBackgroundColor">Background Color</label> <input type="text" class="form-control" id="clipOne_NewsTitleBackgroundColor" name="clipOne_NewsTitleBackgroundColor" placeholder=""> </div></div><div class="col-sm-4"> <div class="form-group"> <label>Position</label> <select class="form-control" name="clipOne_NewsTitlePosition" id="clipOne_NewsTitlePosition"> <option value="top">top</option> <option value="bottom">bottom</option> <option value="center">center</option> <option value="top-left">top-left</option> <option value="top-right">top-right</option> <option value="center-left">center-left</option> <option value="center-right">center-right</option> <option value="bottom-left">bottom-left</option> <option value="bottom-right">bottom-right</option> </select> </div></div></div>');
    }
    if (this.value == 'title-background') {
        $('#clip1Content').html("");
        $('#clip1Content').append('<div class="row"> <div class="col-sm-4"> <div class="form-group"> <label for="clipOne_TitleBackgroundText">Text</label> <input type="text" class="form-control" id="clipOne_TitleBackgroundText" name="clipOne_TitleBackgroundText" placeholder="Enter text "> </div></div><div class="col-sm-4"> <div class="form-group"> <label for="clipOne_TitleBackgroundTextColor">Text color</label> <input type="text" class="form-control" id="clipOne_TitleBackgroundTextColor" name="clipOne_TitleBackgroundTextColor" placeholder=" "> </div></div></div><div class="row"> <div class="col-sm-4"> <div class="form-group"> <label>Background</label> <select class="form-control" name="clipOne_TitleBackgroundColor" id="clipOne_TitleBackgroundColor"> <option value="radial-gradient">radial-gradient</option> <option value="linear-gradient">linear-gradient</option> <option value="fill-color">fill-color</option> </select> </div></div><div class="col-sm-4"> <div class="form-group"> <label>Font path</label> <select class="form-control" name="clipOne_TitleBackgroundFontPath" id="clipOne_TitleBackgroundFontPath"> <option value="a">a</option> <option value="b">b</option> <option value="c">c</option> <option value="d">d</option> </select> </div></div></div>');
    }
    if (this.value == 'fill-color') {
        $('#clip1Content').html("");
        $('#clip1Content').append('<div class="row"><div class="col-sm-6"><div class="form-group"> <label for="clipOne_FillColor">Color</label> <input type="text" class="form-control" id="clipOne_FillColor" name="clipOne_FillColor" placeholder="Enter text "> </div></div></div>');
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
// $('.clipTwo_LayerType').on('change', function () {
//     if (this.value == 'image') {
//       $('#clip2Content').html("");
//       $('#clip2Content').append('<div class="row"> <div class="col-sm-6"> <div class="form-group"> <label for="clipTwo_ImageUrl">Image url</label> <input type="text" class="form-control" id="clipTwo_ImageUrl" name="clipTwo_ImageUrl" placeholder="Enter image url"> </div></div><div class="col-sm-3"> <div class="form-group"> <label>Select resize mode</label> <select class="form-control" name="clipTwo_ResizeMode"> <option value="contain">contain</option> <option value="contain-blur">contain-blur</option> <option value="cover">cover</option> <option value="stretch">stretch</option> </select> </div></div><div class="col-sm-3"> <div class="form-group"> <label>Select zoom direction</label> <select class="form-control" name="clipTwo_ZoomDirection"> <option value="in">in</option> <option value="out">out</option> <option value="null">null</option> </select> </div></div></div>')
//     }
//     if (this.value == 'title') {
//       $('#clip2Content').html("");
//       $('#clip2Content').append('<div class="row"> <div class="col-sm-6"> <div class="form-group"> <label>Font path</label> <select class="form-control" name="clipTwo_FontPath"> <option value="a">a</option> <option value="b">b</option> <option value="c">c</option> <option value="d">d</option> </select> </div></div><div class="col-sm-6"> <div class="form-group"> <label for="clipTwo_Text">Text</label> <input type="text" class="form-control" id="clipTwo_Text" name="clipTwo_Text" placeholder="Enter text "> </div></div></div><div class="row"> <div class="col-sm-6"> <div class="form-group"> <label for="imageDuration">Text Color</label> <input type="text" class="form-control" id="clipTwo_TextColor" name="clipTwo_TextColor" placeholder="Enter hex color code"> </div></div><div class="col-sm-6"> <div class="form-group"> <label>Position</label> <select class="form-control" name="clipTwo_TextPosition"> <option value="top">top</option> <option value="bottom">bottom</option> <option value="center">center</option> <option value="top-left">top-left</option> <option value="top-right">top-right</option> <option value="center-left">center-left</option> <option value="center-right">center-right</option> <option value="bottom-left">bottom-left</option> <option value="bottom-right">bottom-right</option> </select> </div></div></div>')
//     }
//     if (this.value == 'video') {
//         $('#clip2Content').html("");
//         $('#clip2Content').append('<div class="row"> <div class="col-sm-3"> <div class="form-group"> <label for="clipTwo_VideoPath">Video path</label> <input type="text" class="form-control" id="clipTwo_VideoPath" name="clipTwo_VideoPath" placeholder="Enter video link "> </div></div><div class="col-sm-3"> <div class="form-group"> <label>Select video resize mode</label> <select class="form-control" name="clipTwo_VideoResizeMode"> <option value="contain">contain</option> <option value="contain-blur">contain-blur</option> <option value="cover">cover</option> <option value="stretch">stretch</option> </select> </div></div><div class="col-sm-3"> <div class="form-group"> <label for="clipTwo_VideoCutFrom">Cut from(sec)</label> <input type="number" class="form-control" id="clipTwo_VideoCutFrom" name="clipTwo_VideoCutFrom" placeholder="0"> </div></div><div class="col-sm-3"> <div class="form-group"> <label for="clipTwo_VideoCutTo">Cut to(sec)</label> <input type="number" class="form-control" id="clipTwo_VideoCutTo" name="clipTwo_VideoCutTo" placeholder=""> </div></div></div><div class="row"> <div class="col-sm-3"> <div class="form-group"> <label for="clipTwo_VideoWidth">Width<br>(default is 1 if left blank, input range 0-1)</label> <input type="number" class="form-control" id="clipTwo_VideoWidth" name="clipTwo_VideoWidth" placeholder="1"> </div></div><div class="col-sm-3"> <div class="form-group"> <label for="clipTwo_VideoHeight">Height<br>(default is 1 if left blank, input range 0-1)</label> <input type="number" class="form-control" id="clipTwo_VideoHeight" name="clipTwo_VideoHeight" placeholder="1"> </div></div><div class="col-sm-3"> <div class="form-group"> <label for="clipTwo_VideoLeft">Left <br>(X-position relative to screen width, default=0, range=0-1)</label> <input type="number" class="form-control" id="clipTwo_VideoLeft" name="clipTwo_VideoLeft" placeholder="0"> </div></div><div class="col-sm-3"> <div class="form-group"> <label for="clipTwo_VideoTop">Top <br>(Y-position relative to screen height, default=0, range=0-1)</label> <input type="number" class="form-control" id="clipTwo_VideoTop" name="clipTwo_VideoTop" placeholder="0"> </div></div></div><div class="row"> <div class="col-sm-4"> <div class="form-group"> <label>X anchor</label> <div class="custom-control custom-radio"> <input class="custom-control-input" type="radio" id="clipTwo_VideoOriginXOne" name="clipTwo_VideoOriginX" value="left"> <label for="clipTwo_VideoOriginXOne" class="custom-control-label">Left</label> </div><div class="custom-control custom-radio"> <input class="custom-control-input" type="radio" id="clipTwo_VideoOriginXTwo" name="clipTwo_VideoOriginX" value="right"> <label for="clipTwo_VideoOriginXTwo" class="custom-control-label">Right</label> </div></div></div><div class="col-sm-4"> <div class="form-group"> <label>Y anchor</label> <div class="custom-control custom-radio"> <input class="custom-control-input" type="radio" id="clipTwo_VideoOriginYOne" name="clipTwo_VideoOriginY" value="top"> <label for="clipTwo_VideoOriginYOne" class="custom-control-label">Top</label> </div><div class="custom-control custom-radio"> <input class="custom-control-input" type="radio" id="clipTwo_VideoOriginYTwo" name="clipTwo_VideoOriginY" value="bottom"> <label for="clipTwo_VideoOriginYTwo" class="custom-control-label">Bottom</label> </div></div></div><div class="col-sm-4"> <div class="form-group"> <div class="custom-control custom-checkbox"> <input class="custom-control-input custom-control-input-danger custom-control-input-outline" type="checkbox" id="clipTwo_VideoMixVolume" name="clipTwo_VideoMixVolume" checked=""> <label for="clipTwo_VideoMixVolume" class="custom-control-label">Mix Volume(Relative volume when mixing this video audio track with others)</label> </div></div></div></div>');
//     }
// });
// $('.extra_fields_clip_two_layer_records').click(function () {
//     createSectionTwo();
// });
// function createSectionTwo(){
//     var count = $('#mainSectionViewable2 .clip_two_layer_records').length; 
//     $('#mainSectionViewable2').append($('#mainSectionTwo').html().replace(/__count__/g, count));
//     onChangeFunctionTwo($('#layerRecordTwo'+count),count);
// }
// function onChangeFunctionTwo(ele,count) {
//     var clipLayerToggle = ele.find(".clipTwo_SubLayerType");
//     clipLayerToggle.on('change', function () {
//         var changeValue = $(this).val();
//         var getHtml = $('#'+ changeValue +'ProcessingDataTwo').html();
//         var newHtml =   getHtml.replace(/__count__/g, count);
//         ele.find('.clip2ImageLayer').html(newHtml);
//     });
// }
//     createSectionTwo();
// Clip two end






