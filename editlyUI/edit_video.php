<?php include('header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4 class="m-0">Copy Video-
                        <?php echo $_GET['id']; ?>
                    </h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/editlyUI">Home</a></li>
                        <li class="breadcrumb-item active">Copy Video</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <form action="http://localhost:5000/editly" method="post">
                <div class="card-body">
                    <div id="accordion">

                        <!-- clip 1 accordion start -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                                        Clip #1
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Select layer type</label>
                                                <select class="form-control clipOne_LayerType" name="clipOne_LayerType" name="clipOne_LayerType" id="clipOne_LayerType">
                                                    <option>Select</option>
                                                    <option value="image">image</option>
                                                    <option value="title">title</option>
                                                    <!-- <option value="subtitle">subtitle</option> -->
                                                    <option value="video">video</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="clipOne_Duration">Duration (seconds)</label> <input type="number" class="form-control" id="clipOne_Duration" name="clipOne_Duration" placeholder="Enter duration ">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Select transition types</label>
                                                <select class="form-control" name="clipOne_TransitionType" id="clipOne_TransitionType">
                                                    <option value="directional-left">directional-left</option>
                                                    <option value="directional-right">directional-right</option>
                                                    <option value="directional-up">directional-up</option>
                                                    <option value="directional-down">directional-down</option>
                                                    <option value="random">random</option>
                                                    <option value="dummy">dummy</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container" style="background-color: #C9C9C9;">
                                        <div id="clip1Content"></div>



















                                    </div>



                                    <label class="col-form-label"><u>Add inner layers</u></label>
                                    <div id="mainSectionViewable1">
                                    </div>
                                    <a class="extra_fields_clip_one_layer_records" href="javascript:;">Add More Layers</a>
                                </div>
                            </div>
                        </div>
                        <!-- clip 1 accordion end -->

                        <!-- clip 2 accordion start -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
                                        Clip #2
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Select layer type</label>
                                                <select class="form-control clipTwo_LayerType" name="clipTwo_LayerType">
                                                    <option>Select</option>
                                                    <option value="image">image</option>
                                                    <option value="title">title</option>
                                                    <option value="video">video</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="clipTwo_Duration">Duration (seconds)</label> <input type="number" class="form-control" id="clipTwo_Duration" name="clipTwo_Duration" placeholder="Enter duration ">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Select transition types</label>
                                                <select class="form-control" name="clipTwo_TransitionType">
                                                    <option value="directional-left">directional-left</option>
                                                    <option value="directional-right">directional-right</option>
                                                    <option value="directional-up">directional-up</option>
                                                    <option value="directional-down">directional-down</option>
                                                    <option value="random">random</option>
                                                    <option value="dummy">dummy</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container" style="background-color: #C9C9C9;">
                                        <div id="clip2Content"></div>
                                    </div>
                                    <label class="col-form-label"><u>Add inner layers</u></label>
                                    <div id="mainSectionViewable2">
                                    </div>
                                    <a class="extra_fields_clip_two_layer_records" href="javascript:;">Add More Layers</a>
                                </div>
                            </div>
                        </div>
                        <!-- clip 2 accordion end -->

                    </div>
                </div>
                <div class="mt-4 text-center">
                    <button type="submit" class="btn btn-info btn-lg btn-flat"> <i class="fa fa-solid fa-paper-plane fa-lg mr-2"></i>Generate video</button>
                </div>
            </form>
    </section>
    <!-- /.content -->
</div><br>

<?php include('footer.php'); ?>

<script>
    var url = window.location.href;
    var id = url.substring(url.lastIndexOf('=') + 1);
    var i = 0;
    // console.log(id);
    $.ajax({
        type: "GET",
        url: "http://localhost:5000/viewTemplate/" + id,
        success: function(data) {
            // console.log(data['templateData']);
            let allClips = data['templateData'].clips;
            console.log(allClips);
            let clipCount = data['templateData'].clips.length;
            // console.log(clipCount);

            if (clipCount == 1) {
                // console.log(allClips[0]);
                for (i = 0; i < allClips[0].layers.length; i++) {
                    if (i == 0) {
                        ClipOne(allClips[0], i);
                    } else {
                        ClipOneSub(allClips[0], i);
                    }
                }
            } else if (clipCount == 2) {
                // console.log(allClips[0].layers.length);
                for (i = 0; i < allClips[0].layers.length; i++) {
                    if (i == 0) {
                        ClipOne(allClips[0], i);
                    } else {
                        ClipOneSub(allClips[0], i);
                    }
                }
                for (i = 0; i < allClips[1].layers.length; i++) {
                    ClipTwo(allClips[1], i);
                }
            } else {

            }




        }
    });



    function ClipOne(clipOneData, i) {
        // console.log(i);
        $('#clipOne_LayerType option[value=' + clipOneData.layers[i].type + ']').attr('selected', true);
        $('#clipOne_Duration').val(clipOneData.duration);
        $('#clipOne_TransitionType option[value=' + clipOneData.transition.name + ']').attr('selected', true)

        if (clipOneData.layers[i].type == 'image') {
            $('#clip1Content').html("");
            $('#clip1Content').append('<div class="row"> <div class="col-sm-6"> <div class="form-group"> <label for="clipOne_ImageUrl">Image url</label> <input type="text" class="form-control" id="clipOne_ImageUrl" name="clipOne_ImageUrl" placeholder="Enter image url"> </div></div><div class="col-sm-3"> <div class="form-group"> <label>Select resize mode</label> <select class="form-control" name="clipOne_ResizeMode" id="clipOne_ResizeMode"> <option value="contain">contain</option> <option value="contain-blur">contain-blur</option> <option value="cover">cover</option> <option value="stretch">stretch</option> </select> </div></div><div class="col-sm-3"> <div class="form-group"> <label>Select zoom direction</label> <select class="form-control" name="clipOne_ZoomDirection" id="clipOne_ZoomDirection"> <option value="in">in</option> <option value="out">out</option> <option value="null">null</option> </select> </div></div></div>')
            if (clipOneData.layers[i].path != undefined) {
                $('#clipOne_ImageUrl').val(clipOneData.layers[i].path);
            }
            if (clipOneData.layers[i].resizeMode != undefined) {
                $('#clipOne_ResizeMode option[value=' + clipOneData.layers[i].resizeMode + ']').attr('selected', true);
            }
            if (clipOneData.layers[i].zoomDirection != undefined) {
                $('#clipOne_ZoomDirection option[value=' + clipOneData.layers[i].zoomDirection + ']').attr('selected', true);
            }
        }
        if (clipOneData.layers[i].type == 'title') {
            $('#clip1Content').html("");
            $('#clip1Content').append('<div class="row"> <div class="col-sm-6"> <div class="form-group"> <label>Font path</label> <select class="form-control" name="clipOne_FontPath" id="clipOne_FontPath"> <option value="a">a</option> <option value="b">b</option> <option value="c">c</option> <option value="d">d</option> </select> </div></div><div class="col-sm-6"> <div class="form-group"> <label for="clipOne_Text">Text</label> <input type="text" class="form-control" id="clipOne_Text" name="clipOne_Text" placeholder="Enter text "> </div></div></div><div class="row"> <div class="col-sm-6"> <div class="form-group"> <label for="imageDuration">Text Color</label> <input type="text" class="form-control" id="clipOne_TextColor" name="clipOne_TextColor" placeholder="Enter hex color code"> </div></div><div class="col-sm-6"> <div class="form-group"> <label>Position</label> <select class="form-control" name="clipOne_TextPosition" id="clipOne_TextPosition"> <option value="top">top</option> <option value="bottom">bottom</option> <option value="center">center</option> <option value="top-left">top-left</option> <option value="top-right">top-right</option> <option value="center-left">center-left</option> <option value="center-right">center-right</option> <option value="bottom-left">bottom-left</option> <option value="bottom-right">bottom-right</option> </select> </div></div></div>')
            if (clipOneData.layers[i].fontPath != '') {
                $('#clipOne_FontPath option[value=' + clipOneData.layers[i].fontPath + ']').attr('selected', true);
            }
            $('#clipOne_TextColor').val(clipOneData.layers[i].textColor);
            $('#clipOne_Text').val(clipOneData.layers[i].text);
            if (clipOneData.layers[i].position != undefined) {
                $('#clipOne_TextPosition option[value=' + clipOneData.layers[i].position + ']').attr('selected', true);
            }

        }
        if (clipOneData.layers[i].type == 'video') {
            $('#clip1Content').html("");
            $('#clip1Content').append('<div class="row"> <div class="col-sm-3"> <div class="form-group"> <label for="clipOne_VideoPath">Video path</label> <input type="text" class="form-control" id="clipOne_VideoPath" name="clipOne_VideoPath" placeholder="Enter video link "> </div></div><div class="col-sm-3"> <div class="form-group"> <label>Select video resize mode</label> <select class="form-control" name="clipOne_VideoResizeMode" id="clipOne_VideoResizeMode"> <option value="contain">contain</option> <option value="contain-blur">contain-blur</option> <option value="cover">cover</option> <option value="stretch">stretch</option> </select> </div></div><div class="col-sm-3"> <div class="form-group"> <label for="clipOne_VideoCutFrom">Cut from(sec)</label> <input type="number" class="form-control" id="clipOne_VideoCutFrom" name="clipOne_VideoCutFrom" placeholder="0"> </div></div><div class="col-sm-3"> <div class="form-group"> <label for="clipOne_VideoCutTo">Cut to(sec)</label> <input type="number" class="form-control" id="clipOne_VideoCutTo" name="clipOne_VideoCutTo" placeholder=""> </div></div></div><div class="row"> <div class="col-sm-3"> <div class="form-group"> <label for="clipOne_VideoWidth">Width<br>(default is 1 if left blank, input range 0-1)</label> <input type="number" class="form-control" id="clipOne_VideoWidth" name="clipOne_VideoWidth" placeholder="1"> </div></div><div class="col-sm-3"> <div class="form-group"> <label for="clipOne_VideoHeight">Height<br>(default is 1 if left blank, input range 0-1)</label> <input type="number" class="form-control" id="clipOne_VideoHeight" name="clipOne_VideoHeight" placeholder="1"> </div></div><div class="col-sm-3"> <div class="form-group"> <label for="clipOne_VideoLeft">Left <br>(X-position relative to screen width, default=0, range=0-1)</label> <input type="number" class="form-control" id="clipOne_VideoLeft" name="clipOne_VideoLeft" placeholder="0"> </div></div><div class="col-sm-3"> <div class="form-group"> <label for="clipOne_VideoTop">Top <br>(Y-position relative to screen height, default=0, range=0-1)</label> <input type="number" class="form-control" id="clipOne_VideoTop" name="clipOne_VideoTop" placeholder="0"> </div></div></div><div class="row"> <div class="col-sm-4"> <div class="form-group"> <label>X anchor</label> <div class="custom-control custom-radio"> <input class="custom-control-input" type="radio" id="clipOne_VideoOriginXOne" name="clipOne_VideoOriginX" value="left"> <label for="clipOne_VideoOriginXOne" class="custom-control-label">Left</label> </div><div class="custom-control custom-radio"> <input class="custom-control-input" type="radio" id="clipOne_VideoOriginXTwo" name="clipOne_VideoOriginX" value="right"> <label for="clipOne_VideoOriginXTwo" class="custom-control-label">Right</label> </div></div></div><div class="col-sm-4"> <div class="form-group"> <label>Y anchor</label> <div class="custom-control custom-radio"> <input class="custom-control-input" type="radio" id="clipOne_VideoOriginYOne" name="clipOne_VideoOriginY" value="top"> <label for="clipOne_VideoOriginYOne" class="custom-control-label">Top</label> </div><div class="custom-control custom-radio"> <input class="custom-control-input" type="radio" id="clipOne_VideoOriginYTwo" name="clipOne_VideoOriginY" value="bottom"> <label for="clipOne_VideoOriginYTwo" class="custom-control-label">Bottom</label> </div></div></div><div class="col-sm-4"> <div class="form-group"> <div class="custom-control custom-checkbox"> <input class="custom-control-input custom-control-input-danger custom-control-input-outline" type="checkbox" id="clipOne_VideoMixVolume" name="clipOne_VideoMixVolume" > <label for="clipOne_VideoMixVolume" class="custom-control-label">Mix Volume(Relative volume when mixing this video audio track with others)</label> </div></div></div></div>');
            $('#clipOne_VideoPath').val(clipOneData.layers[i].path);
            $('#clipOne_VideoResizeMode option[value=' + clipOneData.layers[i].resizeMode + ']').attr('selected', true)
            // console.log(clipOneData.layers[i].cutTo);
            if (clipOneData.layers[i].cutFrom != undefined) {
                $('#clipOne_VideoCutFrom').val(clipOneData.layers[i].cutFrom);
            }
            if (clipOneData.layers[i].cutTo != undefined) {
                $('#clipOne_VideoCutTo').val(clipOneData.layers[i].cutTo);
            }
            if (clipOneData.layers[i].width != undefined) {
                $('#clipOne_VideoWidth').val(clipOneData.layers[i].width);
            }
            if (clipOneData.layers[i].height != undefined) {
                $('#clipOne_VideoHeight').val(clipOneData.layers[i].height);
            }
            if (clipOneData.layers[i].left != undefined) {
                $('#clipOne_VideoLeft').val(clipOneData.layers[i].left);
            }
            if (clipOneData.layers[i].top != undefined) {
                $('#clipOne_VideoTop').val(clipOneData.layers[i].top);
            }
            if (clipOneData.layers[i].originX != undefined) {
                if (clipOneData.layers[i].originX == "left") {
                    $('#clipOne_VideoOriginXOne').prop("checked", true);
                } else {
                    $('#clipOne_VideoOriginXTwo').prop("checked", true);
                }
            }
            if (clipOneData.layers[i].originY != undefined) {
                if (clipOneData.layers[i].originY == "top") {
                    $('#clipOne_VideoOriginYOne').prop("checked", true);
                } else {
                    $('#clipOne_VideoOriginYTwo').prop("checked", true);
                }
            }


            if (clipOneData.layers[i].mixVolume != undefined && clipOneData.layers[i].mixVolume == 1) {
                $("#clipOne_VideoMixVolume").prop('checked', true);
            } else {
                $("#clipOne_VideoMixVolume").prop('checked', false);
            }



        }




    }

    function ClipTwo(clipTwoData,i) {
        console.log(clipTwoData);
        $('#clipTwo_LayerType option[value="video"]').attr('selected', true)
    }


function ClipOneSub(clipOneData, i){
        i = i-1;
        // console.log(clipOneData.layers[i+1].type);
        if (clipOneData.layers[i+1].type == 'title') {
            $('#clipOne_SubLayerType'+i+ ' option[value=title]').attr('selected', true);
            // $('#mainSectionViewable1').html("");
            $('#mainSectionViewable1').append(' <div class="titleHtmlOne"> <div class="container" style="background-color: #C9C9C9;"> <div class="row"> <div class="col-sm-2"> </div><div class="col-sm-2"> <div class="form-group"> <label>Font path</label> <select class="form-control" name="clipOne_FontPath'+i+'"> <option value="a">a</option> <option value="b">b</option> <option value="c">c</option> <option value="d">d</option> </select> </div></div><div class="col-sm-4"> <div class="form-group"> <label for="clipOne_Text">Text</label> <input type="text" class="form-control" id="clipOne_Text'+i+'" name="clipOne_Text'+i+'" placeholder="Enter text "> </div></div><div class="col-sm-2"> <div class="form-group"> <label for="imageDuration">Text Color</label> <input type="text" class="form-control" id="clipOne_TextColor'+i+'" name="clipOne_TextColor'+i+'" placeholder="Enter hex color code"> </div></div><div class="col-sm-2"> <div class="form-group"> <label>Position</label> <select class="form-control" name="clipOne_TextPosition'+i+'" id="clipOne_TextPosition'+i+'"> <option value="top">top</option> <option value="bottom">bottom</option> <option value="center">center</option> <option value="top-left">top-left</option> <option value="top-right">top-right</option> <option value="center-left">center-left</option> <option value="center-right">center-right</option> <option value="bottom-left">bottom-left</option> <option value="bottom-right">bottom-right</option> </select> </div></div></div></div></div>')

            if (clipOneData.layers[i+1].text != undefined) {
                $('#clipOne_Text'+i).val(clipOneData.layers[i+1].text);
            }
            if (clipOneData.layers[i+1].textColor != undefined) {
                $('#clipOne_TextColor'+i).val(clipOneData.layers[i+1].textColor);
            }

            $('#clipOne_TextPosition'+i+ ' option[value=' + clipOneData.layers[i+1].position + ']').attr('selected', true);
        }

}


// function ClipTwoSub(clipOneData, i){
//         i = i-1;


// }
// console.log("pending from clip 2")
</script>