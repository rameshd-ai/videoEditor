<footer class="main-footer">
  <strong>
    <!-- Copyright &copy; 2021 -->
    <a href="https://www.milestoneinternet.com/">Milestone Inc.</a>
  </strong>
  <!-- All rights reserved. -->
  <div class="float-right d-none d-sm-inline-block">
    <!-- <b>Version</b> 3.2.0 -->
  </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- Clip 1 template start -->
<template id="mainSectionOne">
  <div class="clip_one_layer_records" id="layerRecordOne__count__" style="padding-top: 4px;">

    <div class="form-group row">
      <label for="clipOne_SubLayerType" class="col-sm-2 col-form-label">Select inner layer
        type</label>
      <div class="col-sm-10">
        <select class="form-control clipOne_SubLayerType" name="clipOne_SubLayerType__count__" id="clipOne_SubLayerType__count__">
          <option>Select</option>
          <option value="image">image</option>
          <option value="title">title</option>
          <option value="video">video</option>
          <option value="subtitle">subtitle</option>
          <option value="audio">audio</option>
          <option value="detached-audio">detached-audio</option>
          <option value="linear-gradient">linear-gradient</option>
          <option value="radial-gradient">radial-gradient</option>
          <option value="image-overlay">image-overlay</option>
          <option value="rainbow-colors">rainbow-colors</option>
          <option value="slide-in-text">slide-in-text</option>
          <option value="news-title">news-title</option>
          <option value="title-background">title-background</option>
          <option value="fill-color">fill-color</option>

        </select>
      </div>
    </div>
    <div class="clip1ImageLayer">
      <!-- here the template will come -->
    </div>


  </div>
</template>
<template id="imageProcessingDataOne">
  <div class="imageHtmlOne">
    <div class="container" style="background-color: #C9C9C9;">
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-4">
          <div class="form-group"> <label for="clipOne_ImageUrl">Image url</label> <input type="text" class="form-control" id="clipOne_ImageUrl" name="clipOne_ImageUrl__count__" placeholder="Enter image url">
          </div>
        </div>
        <div class="col-sm-3">
          <div class="form-group"> <label>Select resize mode</label> <select class="form-control" name="clipOne_ResizeMode__count__">
              <option value="contain">contain</option>
              <option value="contain-blur">contain-blur</option>
              <option value="cover">cover</option>
              <option value="stretch">stretch</option>
            </select> </div>
        </div>
        <div class="col-sm-3">
          <div class="form-group"> <label>Select zoom direction</label> <select class="form-control" name="clipOne_ZoomDirection__count__">
              <option value="in">in</option>
              <option value="out">out</option>
              <option value="null">null</option>
            </select> </div>
        </div>
      </div>
    </div>
  </div>
</template>
<template id="titleProcessingDataOne">
  <div class="titleHtmlOne">
    <div class="container" style="background-color: #C9C9C9;">
      <div class="row">
        <div class="col-sm-2"> </div>
        <div class="col-sm-2">
          <div class="form-group"> <label>Font path</label> <select class="form-control" name="clipOne_FontPath__count__">
              <option value="a">a</option>
              <option value="b">b</option>
              <option value="c">c</option>
              <option value="d">d</option>
            </select> </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group"> <label for="clipOne_Text">Text</label> <input type="text" class="form-control" id="clipOne_Text" name="clipOne_Text__count__" placeholder="Enter text "> </div>
        </div>
        <div class="col-sm-2">
          <div class="form-group"> <label for="imageDuration">Text Color</label> <input type="text" class="form-control" id="clipOne_TextColor" name="clipOne_TextColor__count__" placeholder="Enter hex color code"> </div>
        </div>
        <div class="col-sm-2">
          <div class="form-group"> <label>Position</label> <select class="form-control" name="clipOne_TextPosition__count__">
              <option value="top">top</option>
              <option value="bottom">bottom</option>
              <option value="center">center</option>
              <option value="top-left">top-left</option>
              <option value="top-right">top-right</option>
              <option value="center-left">center-left</option>
              <option value="center-right">center-right</option>
              <option value="bottom-left">bottom-left</option>
              <option value="bottom-right">bottom-right</option>
            </select> </div>
        </div>
      </div>
    </div>
  </div>
</template>
<template id="videoProcessingDataOne">
  <div class="videoHtmlOne">
    <div class="container" style="background-color: #C9C9C9;">

      <div class="row">
        <div class="col-sm-3">
          <div class="form-group">
            <label for="clipOne_VideoPath">Video path</label>
            <input type="text" class="form-control" id="clipOne_VideoPath__count__" name="clipOne_VideoPath__count__" placeholder="Enter video link ">
          </div>
        </div>
        <div class="col-sm-3">
          <div class="form-group"> <label>Select video resize mode</label> <select class="form-control" name="clipOne_VideoResizeMode__count__">
              <option value="contain">contain</option>
              <option value="contain-blur">contain-blur</option>
              <option value="cover">cover</option>
              <option value="stretch">stretch</option>
            </select> </div>
        </div>
        <div class="col-sm-3">
          <div class="form-group">
            <label for="clipOne_VideoCutFrom__count__">Cut from(sec)</label>
            <input type="number" class="form-control" id="clipOne_VideoCutFrom__count__" name="clipOne_VideoCutFrom__count__" placeholder="0">
          </div>
        </div>
        <div class="col-sm-3">
          <div class="form-group">
            <label for="clipOne_VideoCutTo__count__">Cut to(sec)</label>
            <input type="number" class="form-control" id="clipOne_VideoCutTo__count__" name="clipOne_VideoCutTo__count__" placeholder="">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="form-group">
            <label for="clipOne_VideoWidth__count__">Width<br>(default is 1 if left blank, input range
              0-1)</label>
            <input type="number" class="form-control" id="clipOne_VideoWidth__count__" name="clipOne_VideoWidth__count__" placeholder="1">
          </div>
        </div>
        <div class="col-sm-3">
          <div class="form-group">
            <label for="clipOne_VideoHeight__count__">Height<br>(default is 1 if left blank, input
              range 0-1)</label>
            <input type="number" class="form-control" id="clipOne_VideoHeight__count__" name="clipOne_VideoHeight__count__" placeholder="1">
          </div>
        </div>
        <div class="col-sm-3">
          <div class="form-group">
            <label for="clipOne_VideoLeft__count__">Left <br>(X-position relative to screen width,
              default=0, range= 0-1)</label>
            <input type="number" class="form-control" id="clipOne_VideoLeft__count__" name="clipOne_VideoLeft__count__" placeholder="0">
          </div>
        </div>
        <div class="col-sm-3">
          <div class="form-group">
            <label for="clipOne_VideoTop__count__">Top <br>(Y-position relative to screen height,
              default=0, range= 0-1)</label>
            <input type="number" class="form-control" id="clipOne_VideoTop__count__" name="clipOne_VideoTop__count__" placeholder="0">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="form-group">
            <label>X anchor</label>
            <div class="custom-control custom-radio">
              <input class="custom-control-input" type="radio" id="clipOne_VideoOriginXOne__count__" name="clipOne_VideoOriginX__count__" value="left">
              <label for="clipOne_VideoOriginXOne__count__" class="custom-control-label">Left</label>
            </div>
            <div class="custom-control custom-radio">
              <input class="custom-control-input" type="radio" id="clipOne_VideoOriginXTwo__count__" name="clipOne_VideoOriginX__count__" value="right">
              <label for="clipOne_VideoOriginXTwo__count__" class="custom-control-label">Right</label>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Y anchor</label>
            <div class="custom-control custom-radio">
              <input class="custom-control-input" type="radio" id="clipOne_VideoOriginYOne__count__" name="clipOne_VideoOriginY__count__" value="top">
              <label for="clipOne_VideoOriginYOne__count__" class="custom-control-label">Top</label>
            </div>
            <div class="custom-control custom-radio">
              <input class="custom-control-input" type="radio" id="clipOne_VideoOriginYTwo__count__" name="clipOne_VideoOriginY__count__" value="bottom">
              <label for="clipOne_VideoOriginYTwo__count__" class="custom-control-label">Bottom</label>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <div class="custom-control custom-checkbox">
              <input class="custom-control-input custom-control-input-danger custom-control-input-outline" type="checkbox" id="clipOne_VideoMixVolume__count__" name="clipOne_VideoMixVolume__count__" checked="">
              <label for="clipOne_VideoMixVolume__count__" class="custom-control-label">Mix
                Volume(Relative volume when mixing this video's audio track with
                others)</label>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</template>
<template id="subtitleProcessingDataOne">
  <div class="subTitleHtmlOne">
    <div class="container" style="background-color: #C9C9C9;">
      <div class="row">
        <div class="col-sm-2">
          <div class="form-group"> <label>Font path</label> <select class="form-control" name="clipOne_SubTitleFontPath__count__" id="clipOne_SubTitleFontPath__count__">
              <option value="a">a</option>
              <option value="b">b</option>
              <option value="c">c</option>
              <option value="d">d</option>
            </select> </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group"> <label for="clipOne_SubTitleText">Text</label> <input type="text" class="form-control" id="clipOne_SubTitleText" name="clipOne_SubTitleText__count__" placeholder="Enter text "> </div>
        </div>
        <div class="col-sm-2">
          <div class="form-group"> <label for="clipOne_SubTitleTextColor__count__">Text Color</label> <input type="text" class="form-control" id="clipOne_SubTitleTextColor" name="clipOne_SubTitleTextColor__count__" placeholder="Enter hex color code"> </div>
        </div>
        <div class="col-sm-2">
          <div class="form-group"> <label for="clipOne_SubTitleBackgroundColor__count__">Background Color</label> <input type="text" class="form-control" id="clipOne_SubTitleBackgroundColor__count__" name="clipOne_SubTitleBackgroundColor__count__" placeholder="Enter hex color code"> </div>
        </div>
        <div class="col-sm-2">
          <div class="form-group"> <label>Position</label> <select class="form-control" name="clipOne_SubTitlePosition__count__" id="clipOne_SubTitlePosition__count__">
              <option value="top">top</option>
              <option value="bottom">bottom</option>
              <option value="center">center</option>
              <option value="top-left">top-left</option>
              <option value="top-right">top-right</option>
              <option value="center-left">center-left</option>
              <option value="center-right">center-right</option>
              <option value="bottom-left">bottom-left</option>
              <option value="bottom-right">bottom-right</option>
            </select> </div>
        </div>
      </div>
    </div>
  </div>
</template>
<template id="audioProcessingDataOne">
  <div class="audioHtmlOne">
    <div class="container" style="background-color: #C9C9C9;">
      <div class="row">
        <div class="col-sm-4">
          <div class="form-group"> <label for="clipOne_AudioPath__count__">Audio path</label> <input type="text" class="form-control" id="clipOne_AudioPath__count__" name="clipOne_AudioPath__count__" placeholder="Enter audio link "> </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group"> <label for="clipOne_AudioCutFrom__count__">Cut from(sec)</label> <input type="number" class="form-control" id="clipOne_AudioCutFrom__count__" name="clipOne_AudioCutFrom__count__" placeholder="0"> </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group"> <label for="clipOne_AudioCutTo__count__">Cut to(sec)</label> <input type="number" class="form-control" id="clipOne_AudioCutTo__count__" name="clipOne_AudioCutTo__count__" placeholder=""> </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <div class="custom-control custom-checkbox"> <input class="custom-control-input custom-control-input-danger custom-control-input-outline" type="checkbox" id="clipOne_AudioMixVolume__count__" name="clipOne_AudioMixVolume__count__" checked=""> <label for="clipOne_AudioMixVolume__count__" class="custom-control-label">Mix Volume(Relative volume when mixing this audio track with others)</label> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<template id="detached-audioProcessingDataOne">
  <div class="detachedAudioHtmlOne">
    <div class="container" style="background-color: #C9C9C9;">
      <div class="row">
        <div class="col-sm-4">
          <div class="form-group"> <label for="clipOne_DetachedAudioPath__count__">Audio path</label> <input type="text" class="form-control" id="clipOne_DetachedAudioPath__count__" name="clipOne_DetachedAudioPath__count__" placeholder="Enter detached audio link "> </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group"> <label for="clipOne_DetachedAudioCutFrom__count__">Cut from(sec)</label> <input type="number" class="form-control" id="clipOne_DetachedAudioCutFrom__count__" name="clipOne_DetachedAudioCutFrom__count__" placeholder="0"> </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group"> <label for="clipOne_DetachedAudioCutTo__count__">Cut to(sec)</label> <input type="number" class="form-control" id="clipOne_DetachedAudioCutTo__count__" name="clipOne_DetachedAudioCutTo__count__" placeholder=""> </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <div class="custom-control custom-checkbox"> <input class="custom-control-input custom-control-input-danger custom-control-input-outline" type="checkbox" id="clipOne_DetachedAudioMixVolume__count__" name="clipOne_DetachedAudioMixVolume__count__" checked=""> <label for="clipOne_DetachedAudioMixVolume__count__" class="custom-control-label">Mix Volume(Relative volume when mixing this detached audio track with others)</label> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<template id="linear-gradientProcessingDataOne">
  <div class="linearGradientHtmlOne">
    <div class="container" style="background-color: #C9C9C9;">
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group"> <label for="clipOne_LinearGradientColorOne__count__">Color one</label> <input type="text" class="form-control" id="clipOne_LinearGradientColorOne__count__" name="clipOne_LinearGradientColorOne__count__" placeholder="Enter hex code "> </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group"> <label for="clipOne_LinearGradientColorTwo__count__">Color two</label> <input type="text" class="form-control" id="clipOne_LinearGradientColorTwo__count__" name="clipOne_LinearGradientColorTwo__count__" placeholder="Enter hex code "> </div>
        </div>
      </div>
    </div>
  </div>
</template>
<template id="radial-gradientProcessingDataOne">
  <div class="radialGradientHtmlOne">
    <div class="container" style="background-color: #C9C9C9;">
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group"> <label for="clipOne_RadialGradientColorOne__count__">Color one</label> <input type="text" class="form-control" id="clipOne_RadialGradientColorOne__count__" name="clipOne_RadialGradientColorOne__count__" placeholder="Enter hex code "> </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group"> <label for="clipOne_RadialGradientColorTwo__count__">Color two</label> <input type="text" class="form-control" id="clipOne_RadialGradientColorTwo__count__" name="clipOne_RadialGradientColorTwo__count__" placeholder="Enter hex code "> </div>
        </div>
      </div>
    </div>
  </div>
</template>
<template id="image-overlayProcessingDataOne">
  <div class="imageOverlayHtmlOne">
    <div class="container" style="background-color: #C9C9C9;">

      <div class="row">
        <div class="col-sm-3">
          <div class="form-group"> <label for="clipOne_ImageOverlayPath__count__">Image path</label> <input type="text" class="form-control" id="clipOne_ImageOverlayPath__count__" name="clipOne_ImageOverlayPath__count__" placeholder=" "> </div>
        </div>
        <div class="col-sm-3">
          <div class="form-group"> <label for="clipOne_ImageOverlayWidth__count__">Width</label> <input type="text" class="form-control" id="clipOne_ImageOverlayWidth__count__" name="clipOne_ImageOverlayWidth__count__" placeholder=""> </div>
        </div>
        <div class="col-sm-3">
          <div class="form-group"> <label for="clipOne_ImageOverlayHeight__count__">Height</label> <input type="text" class="form-control" id="clipOne_ImageOverlayHeight__count__" name="clipOne_ImageOverlayHeight__count__" placeholder=""> </div>
        </div>
        <div class="col-sm-3">
          <div class="form-group">
            <label>Position</label>
            <select class="form-control" name="clipOne_ImageOverlayPosition__count__" id="clipOne_ImageOverlayPosition__count__">
              <option value="top">top</option>
              <option value="bottom">bottom</option>
              <option value="center">center</option>
              <option value="top-left">top-left</option>
              <option value="top-right">top-right</option>
              <option value="center-left">center-left</option>
              <option value="center-right">center-right</option>
              <option value="bottom-left">bottom-left</option>
              <option value="bottom-right">bottom-right</option>
            </select>
          </div>
        </div>
      </div>

    </div>
</template>
<template id="slide-in-textProcessingDataOne">
  <div class="slideInTextHtmlOne">
    <div class="container" style="background-color: #C9C9C9;">

      <div class="row">
        <div class="col-sm-4">
          <div class="form-group">
            <label>Font path</label>
            <select class="form-control" name="clipOne_SlideInFontPath__count__" id="clipOne_SlideInFontPath__count__">
              <option value="a">a</option>
              <option value="b">b</option>
              <option value="c">c</option>
              <option value="d">d</option>
            </select>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group"> <label for="clipOne_SlideInText__count__">Text</label> <input type="text" class="form-control" id="clipOne_SlideInText__count__" name="clipOne_SlideInText__count__" placeholder="Enter text "> </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group"> <label for="clipOne_SlideInFontSize__count__">Font size</label> <input type="text" class="form-control" id="clipOne_SlideInFontSize__count__" name="clipOne_SlideInFontSize__count__" placeholder="Enter font size "> </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-4">
          <div class="form-group"> <label for="clipOne_SlideInCharSpacing__count__">Character Spacing</label> <input type="text" class="form-control" id="clipOne_SlideInCharSpacing__count__" name="clipOne_SlideInCharSpacing__count__" placeholder="Enter char spacing"> </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group"> <label for="clipOne_SlideInColor__count__">Color</label> <input type="text" class="form-control" id="clipOne_SlideInColor__count__" name="clipOne_SlideInColor__count__" placeholder="Enter color code"> </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Position</label>
            <select class="form-control" name="clipOne_SlideInPosition__count__" id="clipOne_SlideInPosition__count__">
              <option value="top">top</option>
              <option value="bottom">bottom</option>
              <option value="center">center</option>
              <option value="top-left">top-left</option>
              <option value="top-right">top-right</option>
              <option value="center-left">center-left</option>
              <option value="center-right">center-right</option>
              <option value="bottom-left">bottom-left</option>
              <option value="bottom-right">bottom-right</option>
            </select>
          </div>
        </div>
      </div>

    </div>
</template>
<template id="news-titleProcessingDataOne">
  <div class="newsTitleHtmlOne">
    <div class="container" style="background-color: #C9C9C9;">

      <div class="row">
        <div class="col-sm-4">
          <div class="form-group">
            <label>Font path</label>
            <select class="form-control" name="clipOne_NewsTitleFontPath__count__" id="clipOne_NewsTitleFontPath__count__">
              <option value="a">a</option>
              <option value="b">b</option>
              <option value="c">c</option>
              <option value="d">d</option>
            </select>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group"> <label for="clipOne_NewsTitleText__count__">Text</label> <input type="text" class="form-control" id="clipOne_NewsTitleText__count__" name="clipOne_NewsTitleText__count__" placeholder="Enter text "> </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group"> <label for="clipOne_NewsTitleTextColor">Text color</label> <input type="text" class="form-control" id="clipOne_NewsTitleTextColor__count__" name="clipOne_NewsTitleTextColor__count__" placeholder=" "> </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-4">
          <div class="form-group"> <label for="clipOne_NewsTitleBackgroundColor__count__">Background Color</label> <input type="text" class="form-control" id="clipOne_NewsTitleBackgroundColor__count__" name="clipOne_NewsTitleBackgroundColor__count__" placeholder=""> </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Position</label>
            <select class="form-control" name="clipOne_NewsTitlePosition__count__" id="clipOne_NewsTitlePosition__count__">
              <option value="top">top</option>
              <option value="bottom">bottom</option>
              <option value="center">center</option>
              <option value="top-left">top-left</option>
              <option value="top-right">top-right</option>
              <option value="center-left">center-left</option>
              <option value="center-right">center-right</option>
              <option value="bottom-left">bottom-left</option>
              <option value="bottom-right">bottom-right</option>
            </select>
          </div>
        </div>
      </div>
    </div>
</template>
<template id="title-backgroundProcessingDataOne">
  <div class="titleBackgroundHtmlOne">
    <div class="container" style="background-color: #C9C9C9;">

      <div class="row">
        <div class="col-sm-4">
          <div class="form-group"> <label for="clipOne_TitleBackgroundText__count__">Text</label> <input type="text" class="form-control" id="clipOne_TitleBackgroundText__count__" name="clipOne_TitleBackgroundText__count__" placeholder="Enter text "> </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group"> <label for="clipOne_TitleBackgroundTextColor__count__">Text color</label> <input type="text" class="form-control" id="clipOne_TitleBackgroundTextColor__count__" name="clipOne_TitleBackgroundTextColor__count__" placeholder=" "> </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-4">
          <div class="form-group">
            <label>Background</label>
            <select class="form-control" name="clipOne_TitleBackgroundColor__count__" id="clipOne_TitleBackgroundColor__count__">
              <option value="radial-gradient">radial-gradient</option>
              <option value="linear-gradient">linear-gradient</option>
              <option value="fill-color">fill-color</option>
            </select>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Font path</label>
            <select class="form-control" name="clipOne_TitleBackgroundFontPath__count__" id="clipOne_TitleBackgroundFontPath__count__">
              <option value="a">a</option>
              <option value="b">b</option>
              <option value="c">c</option>
              <option value="d">d</option>
            </select>
          </div>
        </div>
      </div>
    </div>
</template>




<template id="fill-colorProcessingDataOne">
  <div class="fillColorHtmlOne">
    <div class="container" style="background-color: #C9C9C9;">
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group"> <label for="clipOne_FillColor__count__">Text</label> <input type="text" class="form-control" id="clipOne_FillColor__count__" name="clipOne_FillColor__count__" placeholder="Enter text "> </div>
        </div>
      </div>
    </div>
</template>
<!-- <template id="rainbow-colorsProcessingDataOne">
  <div class="rainbowColorsHtmlOne">
    <div class="container" style="background-color: #C9C9C9;">

      <div class="row">
        <div class="col-sm-12">
          <div class="form-group"> <label for="clipOne_RainbowColors__count__">Image path</label> <input type="text" class="form-control" id="clipOne_ImageOverlayPath__count__" name="clipOne_ImageOverlayPath__count__" placeholder=" "> </div>
        </div>
      </div>

    </div>
</template> -->
<!-- Clip 1 template end -->



<!-- Clip 2 template start -->
<!-- <template id="mainSectionTwo">
    <div class="clip_two_layer_records" id="layerRecordTwo__count__" style="padding-top: 4px;">
      <div class="form-group row">
        <label for="clipTwo_SubLayerType" class="col-sm-2 col-form-label">Select inner layer
          type</label>
        <div class="col-sm-10">
          <select class="form-control clipTwo_SubLayerType" name="clipTwo_SubLayerType__count__">
            <option>Select</option>
            <option value="image">image</option>
            <option value="title">title</option>
            <option value="video">video</option>
          </select>
        </div>
      </div>
      <div class="clip2ImageLayer">
      </div>
    </div>
  </template>
  <template id="imageProcessingDataTwo">
    <div class="imageHtmlTwo">
      <div class="container" style="background-color: #C9C9C9;">
        <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-sm-4">
            <div class="form-group"> <label for="clipTwo_ImageUrl">Image url</label> <input type="text"
                class="form-control" id="clipTwo_ImageUrl" name="clipTwo_ImageUrl__count__"
                placeholder="Enter image url">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group"> <label>Select resize mode</label> <select class="form-control"
                name="clipTwo_ResizeMode__count__">
                <option value="contain">contain</option>
                <option value="contain-blur">contain-blur</option>
                <option value="cover">cover</option>
                <option value="stretch">stretch</option>
              </select> </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group"> <label>Select zoom direction</label> <select class="form-control"
                name="clipTwo_ZoomDirection__count__">
                <option value="in">in</option>
                <option value="out">out</option>
                <option value="null">null</option>
              </select> </div>
          </div>
        </div>
      </div>
    </div>
  </template>
  <template id="titleProcessingDataTwo">
    <div class="titleHtmlTwo">
      <div class="container" style="background-color: #C9C9C9;">
        <div class="row">
          <div class="col-sm-2"> </div>
          <div class="col-sm-2">
            <div class="form-group"> <label>Font path</label> <select class="form-control"
                name="clipTwo_FontPath__count__">
                <option value="a">a</option>
                <option value="b">b</option>
                <option value="c">c</option>
                <option value="d">d</option>
              </select> </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group"> <label for="clipTwo_Text">Text</label> <input type="text" class="form-control"
                id="clipTwo_Text" name="clipTwo_Text__count__" placeholder="Enter text "> </div>
          </div>
          <div class="col-sm-2">
            <div class="form-group"> <label for="clipTwo_TextColor">Text Color</label> <input type="text"
                class="form-control" id="clipTwo_TextColor" name="clipTwo_TextColor__count__"
                placeholder="Enter hex color code"> </div>
          </div>
          <div class="col-sm-2">
            <div class="form-group"> <label>Position</label> <select class="form-control"
                name="clipTwo_TextPosition__count__">
                <option value="top">top</option>
                <option value="bottom">bottom</option>
                <option value="center">center</option>
                <option value="top-left">top-left</option>
                <option value="top-right">top-right</option>
                <option value="center-left">center-left</option>
                <option value="center-right">center-right</option>
                <option value="bottom-left">bottom-left</option>
                <option value="bottom-right">bottom-right</option>
              </select> </div>
          </div>
        </div>
      </div>
    </div>
  </template>
  <template id="videoProcessingDataTwo">
    <div class="videoHtmlTwo">
      <div class="container" style="background-color: #C9C9C9;">
       
          <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label for="clipTwo_VideoPath">Video path</label>
                <input type="text" class="form-control" id="clipTwo_VideoPath__count__"
                  name="clipTwo_VideoPath__count__" placeholder="Enter video link ">
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group"> <label>Select video resize mode</label> <select
                  class="form-control" name="clipTwo_VideoResizeMode__count__">
                  <option value="contain">contain</option>
                  <option value="contain-blur">contain-blur</option>
                  <option value="cover">cover</option>
                  <option value="stretch">stretch</option>
                </select> </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label for="clipTwo_VideoCutFrom__count__">Cut from(sec)</label>
                <input type="number" class="form-control" id="clipTwo_VideoCutFrom__count__"
                  name="clipTwo_VideoCutFrom__count__" placeholder="0">
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label for="clipTwo_VideoCutTo__count__">Cut to(sec)</label>
                <input type="number" class="form-control" id="clipTwo_VideoCutTo__count__"
                  name="clipTwo_VideoCutTo__count__" placeholder="">
              </div>
            </div>
            </div>
            <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label for="clipTwo_VideoWidth__count__">Width<br>(default is 1 if left blank, input range
                  0-1)</label>
                <input type="number" class="form-control" id="clipTwo_VideoWidth__count__"
                  name="clipTwo_VideoWidth__count__" placeholder="1">
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label for="clipTwo_VideoHeight__count__">Height<br>(default is 1 if left blank, input
                  range 0-1)</label>
                <input type="number" class="form-control" id="clipTwo_VideoHeight__count__"
                  name="clipTwo_VideoHeight__count__" placeholder="1">
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label for="clipTwo_VideoLeft__count__">Left <br>(X-position relative to screen width,
                  default=0, range= 0-1)</label>
                <input type="number" class="form-control" id="clipTwo_VideoLeft__count__"
                  name="clipTwo_VideoLeft__count__" placeholder="0">
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label for="clipTwo_VideoTop__count__">Top <br>(Y-position relative to screen height,
                  default=0, range= 0-1)</label>
                <input type="number" class="form-control" id="clipTwo_VideoTop__count__"
                  name="clipTwo_VideoTop__count__" placeholder="0">
              </div>
            </div>
            </div>
            <div class="row">
            <div class="col-sm-4">
              <div class="form-group">
                <label>X anchor</label>
                <div class="custom-control custom-radio">
                  <input class="custom-control-input" type="radio" id="clipTwo_VideoOriginXOne__count__"
                    name="clipTwo_VideoOriginX__count__" value="left">
                  <label for="clipTwo_VideoOriginXOne__count__" class="custom-control-label">Left</label>
                </div>
                <div class="custom-control custom-radio">
                  <input class="custom-control-input" type="radio" id="clipTwo_VideoOriginXTwo__count__"
                    name="clipTwo_VideoOriginX__count__" value="right">
                  <label for="clipTwo_VideoOriginXTwo__count__" class="custom-control-label">Right</label>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label>Y anchor</label>
                <div class="custom-control custom-radio">
                  <input class="custom-control-input" type="radio" id="clipTwo_VideoOriginYOne__count__"
                    name="clipTwo_VideoOriginY__count__" value="top">
                  <label for="clipTwo_VideoOriginYOne__count__" class="custom-control-label">Top</label>
                </div>
                <div class="custom-control custom-radio">
                  <input class="custom-control-input" type="radio" id="clipTwo_VideoOriginYTwo__count__"
                    name="clipTwo_VideoOriginY__count__" value="bottom">
                  <label for="clipTwo_VideoOriginYTwo__count__" class="custom-control-label">Bottom</label>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input
                    class="custom-control-input custom-control-input-danger custom-control-input-outline"
                    type="checkbox" id="clipTwo_VideoMixVolume__count__" name="clipTwo_VideoMixVolume__count__"
                    checked="">
                  <label for="clipTwo_VideoMixVolume__count__" class="custom-control-label">Mix
                    Volume(Relative volume when mixing this video's audio track with
                    others)</label>
                </div>
              </div>
            </div>
            </div>
        
        </div>
    </div>
  </template> -->
<!-- Clip 2 template end -->







<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<!-- <script src="plugins/chart.js/Chart.min.js"></script> -->
<!-- Sparkline -->
<!-- <script src="plugins/sparklines/sparkline.js"></script> -->
<!-- JQVMap -->
<!-- <script src="plugins/jqvmap/jquery.vmap.min.js"></script> -->
<!-- <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->
<!-- jQuery Knob Chart -->
<!-- <script src="plugins/jquery-knob/jquery.knob.min.js"></script> -->
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="dist/js/pages/dashboard.js"></script> -->
<script src="main.js"></script>


</body>

</html>