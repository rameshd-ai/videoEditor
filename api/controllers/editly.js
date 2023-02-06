import editly from "editly";
import express from "express";
import { v4 as uuidv4 } from "uuid";
import fs from "fs";
import { exit } from "process";
import path from "path";
// import mime from 'mime'

// import { fileURLToPath } from 'url';
// import { dirname } from 'path';
// const __filename = fileURLToPath(import.meta.url);
// const __dirname = dirname(__filename);

var ClipOneObject = {};
var ClipTwoObject = {};
var layerArray1 = [];
var layerArray2 = [];
var layersOne;
var layersTwo;
var ClipCombinedResult = [];

export const getEditly = (req, res) => {
  const dir = "./results";
  var list = [];
  function getList() {
    fs.readdir(dir, (err, files) => {
      files.forEach((file) => {
        list.push(path.parse(file).name);
      });
      res.send({ videoUrl: list });
    });
  }
  getList();
};

export const postEditly = (req, res) => {
  console.log(req.body.Project);
  for (const key in req.body) {
    sortClip(req.body, key, req.body[key]);
  }
  // console.log(layerArray2[0]);
  if (req.body.clipOne_LayerType != "Select") {
    layersOne = layerFilter("clipOne", layerArray1[0]);
    var finalStructureResultOne = {
      duration: req.body.clipOne_Duration,
      transition: { name: req.body.clipOne_TransitionType },
      layers: layersOne,
    };
    ClipCombinedResult.push(finalStructureResultOne);
  }
  // if(req.body.clipTwo_LayerType != "Select"){
  //    layersTwo = layerFilter("clipTwo", layerArray2[0]);
  //    var finalStructureResultTwo = {
  //     duration: req.body.clipTwo_Duration,
  //     transition: { name: req.body.clipTwo_TransitionType },
  //     layers: layersTwo
  //   };
  //   ClipCombinedResult.push(finalStructureResultTwo);
  // }

  // console.log(ClipCombinedResult[0]);
  var projectName = req.body.Project;
  let uid = uuidv4();
  editlyVideo(uid, projectName, ClipCombinedResult);

  res.redirect(
    `http://localhost/editlyUI/processing?project=${req.body.Project}&id=` + uid
  );
  // res.send(req.body);
};

export const generateVideo = (req, res) => {
  // console.log(req.body.project);
  var proj = req.body.project;
  // console.log(req.body.sort_order);
  var finalCombinedClips = [];
  const dir = `./results/${req.body.project}`;
  var jsonData = {};
  // fs.readdir(dir, (err, files) => {
    // files.forEach((file) => {
    //   var fileName = path.parse(file).name;
    //   const innerDir = `./results/${req.body.project}/${fileName}/editly-video.json`;
    //   let rawdata = fs.readFileSync(innerDir);
    //   let student = JSON.parse(rawdata);
    //   finalCombinedClips.push(student.clips[0]);
    //   // console.log(student.clips[0]);
    // });

    var str = req.body.sort_order;
    var str_array = str.split(",");

    for (var i = 0; i < str_array.length; i++) {
      // Trim the excess whitespace.
      str_array[i] = str_array[i].replace(/^\s*/, "").replace(/\s*$/, "");
      // Add additional code here, such as:
      //  console.log(str_array[i]);

      const innerDir = `./results/${req.body.project}/${str_array[i]}/editly-video.json`;
      let rawdata = fs.readFileSync(innerDir);
      let student = JSON.parse(rawdata);
      finalCombinedClips.push(student.clips[0]);
    }

    // console.log(finalCombinedClips);
  
    let uid = uuidv4();
    let isFinal = 1;
    let folderPath = req.body.project;
    editlyVideo(uid,folderPath,finalCombinedClips,isFinal);
  // });

  // console.log(folderPath);
  // res.send({ videoUrl: req.body });
  res.redirect(
    `http://localhost/editlyUI/finalProcessing?project=${proj}`
  );
};

//Functions begin
function editlyVideo(uid, projectName, ClipCombinedResult, isFinal = 0) {
  const filenm = "video";
  var audioTrack = [];
  let folderPath = `./results/${projectName}/${uid}`;

  if (isFinal == 1) {
    folderPath = `./results/${projectName}/compiledVersion`;
    fs.rmdir(folderPath,
    { recursive: true, force: true }, (err) => {
      if (err) {
      return console.log("error occurred in deleting directory", err);
      }
      console.log("Directory deleted successfully");
      });
  }

  let width = 900;
  let height = 1600;
  let outPath = "./video.mp4";
  let allowRemoteRequests = "true";
  let clips = ClipCombinedResult;
  let data = {
    id: uid,
    editlyArgs: {
      width: width,
      height: height,
      outPath: outPath,
      fps: 30,
      allowRemoteRequests: allowRemoteRequests,
      defaults: {
        duration: 4,
        transition: {
          duration: 0.5,
          name: "random",
          audioOutCurve: "tri",
          audioInCurve: "tri",
        },
        layer: { fontPath: "./assets/Patua_One/PatuaOne-Regular.ttf" },
        layerType: {
          "fill-color": {
            color: "#ff6666",
          },
          // ...more per-layer-type defaults
        },
      },
      clips: clips,
      audioFilePath: "",
      loopAudio: false,
      keepSourceAudio: true,
      clipsAudioVolume: 1,
      outputVolume: 1,
      audioTracks: audioTrack,
      // audioNorm: {
      //   enable: false,
      //   gaussSize: 5,
      //   maxGain: 30,
      // }
    },
  };
  console.log(data);

  fs.mkdir(folderPath, { recursive: true }, (err) => {
    if (err) throw err;
  });

  data.editlyArgs.outPath = folderPath + "/video.mp4";

  Promise.all([
    editly(data.editlyArgs).catch((e) => {
      return e;
    }),
  ]).then((r) => {
    writefiledata(`${folderPath}/${filenm}.json`, JSON.stringify(data));
    writefiledata(
      `${folderPath}/editly-${filenm}.json`,
      JSON.stringify(data.editlyArgs)
    );
    console.log(`r: `, r); // still returns undefined but its ok now!  [ undefined ]
  });
  return 1;
}

function writefiledata(filenm, jsonContent) {
  fs.writeFile(filenm, jsonContent, "utf8", function (err) {
    if (err) {
      console.log("An error occured while writing JSON Object to File.");
      return console.log(err);
    }

    console.log("JSON file has been saved.");
  });
}

function sortClip(body, key, value) {
  var subString = key.substring(0, key.indexOf("_"));
  if (subString == "clipOne") {
    ClipOneObject[key] = value;
    if (ClipOneObject["clipOne_LayerType"] != "Select") {
      layerArray1.push(ClipOneObject);
    }
  }
  // if (subString == "clipTwo") {
  //   ClipTwoObject[key] = value;
  //   // console.log(value);
  //   if(ClipOneObject["clipTwo_LayerType"] != "Select"){
  //    layerArray2.push(ClipTwoObject);
  //   }
  // }
}

//filtet the layer and send it to respective function for object creation
function layerFilter(clipNumber, layerArray) {
  var firstLayerType = layerArray[clipNumber + "_LayerType"];
  var type = firstLayerType;
  // console.log(layerArray);
  var ClipResultObject = [];
  var returnVal = caseFunction(type, clipNumber, layerArray);
  if (returnVal != undefined) {
    ClipResultObject.push(returnVal);
  }
  var y = 0;
  for (const keys in layerArray) {
    var substring = "SubLayerType";
    if (keys.indexOf(substring) !== -1) {
      y++;
    }
  }
  if (layerArray[clipNumber + "_SubLayerType0"] != "Select") {
    for (let j = 0; j < y; j++) {
      var subLayerType = layerArray[clipNumber + "_SubLayerType" + j];
      var returnSubLayerVal = caseSubFunction(
        subLayerType,
        clipNumber,
        layerArray,
        j
      );
      if (returnSubLayerVal != undefined) {
        ClipResultObject.push(returnSubLayerVal);
      }
    }
  }

  return ClipResultObject;
}

function caseFunction(type, clipNumber, layerArray) {
  switch (type) {
    case "image":
      var path = layerArray[clipNumber + "_ImageUrl"];
      var zoomDirection = layerArray[clipNumber + "_ZoomDirection"];
      var resizeMode = layerArray[clipNumber + "_ResizeMode"];
      return imageFunction(path, zoomDirection, resizeMode);
      break;
    case "title":
      var fontPath = layerArray[clipNumber + "_FontPath"];
      var text = layerArray[clipNumber + "_Text"];
      var textColor = layerArray[clipNumber + "_TextColor"];
      var position = layerArray[clipNumber + "_TextPosition"];
      return titleFunction(fontPath, text, textColor, position);
      break;
    case "video":
      var videoPath = layerArray[clipNumber + "_VideoPath"];
      var videoResizeMode = layerArray[clipNumber + "_VideoResizeMode"];
      var videoCutFrom = layerArray[clipNumber + "_VideoCutFrom"];
      var videoCutTo = layerArray[clipNumber + "_VideoCutTo"];
      var videoWidth = layerArray[clipNumber + "_VideoWidth"];
      var videoHeight = layerArray[clipNumber + "_VideoHeight"];
      var videoLeft = layerArray[clipNumber + "_VideoLeft"];
      var videoTop = layerArray[clipNumber + "_VideoTop"];
      var videoOriginX = layerArray[clipNumber + "_VideoOriginX"];
      var videoOriginY = layerArray[clipNumber + "_VideoOriginY"];
      var videoMixVolume = 0;
      if (
        layerArray[clipNumber + "_VideoMixVolume"] != undefined &&
        layerArray[clipNumber + "_VideoMixVolume"] == "on"
      ) {
        videoMixVolume = 1;
      }
      return videoFunction(
        videoPath,
        videoResizeMode,
        videoCutFrom,
        videoCutTo,
        videoWidth,
        videoHeight,
        videoLeft,
        videoTop,
        videoOriginX,
        videoOriginY,
        videoMixVolume
      );
      break;
    case "subtitle":
      var fontPath = layerArray[clipNumber + "_SubTitleFontPath"];
      var text = layerArray[clipNumber + "_SubTitleText"];
      var textColor = layerArray[clipNumber + "_SubTitleTextColor"];
      var backgroundColor = layerArray[clipNumber + "_SubTitleBackgroundColor"];
      var position = layerArray[clipNumber + "_SubTitleposition"];
      return subTitleFunction(
        fontPath,
        text,
        textColor,
        backgroundColor,
        position
      );
      break;

    case "linear-gradient":
      var colorOne = layerArray[clipNumber + "_LinearGradientColorOne"];
      var colorTwo = layerArray[clipNumber + "_LinearGradientColorTwo"];
      return linearGradientFunction(colorOne, colorTwo);
      break;
    case "radial-gradient":
      var colorOne = layerArray[clipNumber + "_RadialGradientColorOne"];
      var colorTwo = layerArray[clipNumber + "_RadialGradientColorTwo"];
      return radialGradientFunction(colorOne, colorTwo);
      break;

    case "image-overlay":
      var imageOverlayPath = layerArray[clipNumber + "_ImageOverlayPath"];
      var imageOverlayWidth = layerArray[clipNumber + "_ImageOverlayWidth"];
      var imageOverlayHeight = layerArray[clipNumber + "_ImageOverlayHeight"];
      var imageOverlayPosition =
        layerArray[clipNumber + "_ImageOverlayPosition"];
      return imageOverlayFunction(
        imageOverlayPath,
        imageOverlayWidth,
        imageOverlayHeight,
        imageOverlayPosition
      );
      break;
    case "rainbow-colors":
      return rainbowColorsFunction();
      break;
    case "slide-in-text":
      var slideInFontPath = layerArray[clipNumber + "_SlideInFontPath"];
      var slideInText = layerArray[clipNumber + "_SlideInText"];
      var slideInFontSize = layerArray[clipNumber + "_SlideInFontSize"];
      var slideInCharSpacing = layerArray[clipNumber + "_SlideInCharSpacing"];
      var slideInColor = layerArray[clipNumber + "_SlideInColor"];
      var slideInPosition = layerArray[clipNumber + "_SlideInPosition"];
      return slideInTextFunction(
        slideInFontPath,
        slideInText,
        slideInFontSize,
        slideInCharSpacing,
        slideInColor,
        slideInPosition
      );
      break;
    case "news-title":
      var newsTitleFontPath = layerArray[clipNumber + "_NewsTitleFontPath"];
      var newsTitleText = layerArray[clipNumber + "_NewsTitleText"];
      var newsTitleTextColor = layerArray[clipNumber + "_NewsTitleTextColor"];
      var newsTitleBackgroundColor =
        layerArray[clipNumber + "_NewsTitleBackgroundColor"];
      var newsTitlePosition = layerArray[clipNumber + "_NewsTitlePosition"];
      return newsTitleFunction(
        newsTitleFontPath,
        newsTitleText,
        newsTitleTextColor,
        newsTitleBackgroundColor,
        newsTitlePosition
      );
      break;
    case "title-background":
      var titleBackgroundText = layerArray[clipNumber + "_TitleBackgroundText"];
      var titleBackgroundTextColor =
        layerArray[clipNumber + "_TitleBackgroundTextColor"];
      var titleBackgroundColor =
        layerArray[clipNumber + "_TitleBackgroundColor"];
      var titleBackgroundFontPath =
        layerArray[clipNumber + "_TitleBackgroundFontPath"];
      return titleBackgroundFunction(
        titleBackgroundText,
        titleBackgroundTextColor,
        titleBackgroundColor,
        titleBackgroundFontPath
      );
      break;
    case "fill-color":
      var fillColor = layerArray[clipNumber + "_FillColor"];
      // console.log(fillColor);
      return fillColorFunction(fillColor);
      break;

    default:
    // code block
  }
}
function caseSubFunction(type, clipNumber, layerArray, j) {
  switch (type) {
    case "image":
      var path = layerArray[clipNumber + "_ImageUrl" + j];
      var zoomDirection = layerArray[clipNumber + "_ZoomDirection" + j];
      var resizeMode = layerArray[clipNumber + "_ResizeMode" + j];
      return imageFunction(path, zoomDirection, resizeMode);
      break;
    case "title":
      var fontPath = layerArray[clipNumber + "_FontPath" + j];
      var text = layerArray[clipNumber + "_Text" + j];
      var textColor = layerArray[clipNumber + "_TextColor" + j];
      var position = layerArray[clipNumber + "_TextPosition" + j];
      return titleFunction(fontPath, text, textColor, position);
      break;
    case "video":
      var videoPath = layerArray[clipNumber + "_VideoPath" + j];
      var videoResizeMode = layerArray[clipNumber + "_VideoResizeMode" + j];
      var videoCutFrom = layerArray[clipNumber + "_VideoCutFrom" + j];
      var videoCutTo = layerArray[clipNumber + "_VideoCutTo" + j];
      var videoWidth = layerArray[clipNumber + "_VideoWidth" + j];
      var videoHeight = layerArray[clipNumber + "_VideoHeight"] + j;
      var videoLeft = layerArray[clipNumber + "_VideoLeft" + j];
      var videoTop = layerArray[clipNumber + "_VideoTop" + j];
      var videoOriginX = layerArray[clipNumber + "_VideoOriginX" + j];
      var videoOriginY = layerArray[clipNumber + "_VideoOriginY" + j];
      var videoMixVolume = 0;
      if (
        layerArray[clipNumber + "_VideoMixVolume"] != undefined &&
        layerArray[clipNumber + "_VideoMixVolume"] == "on"
      ) {
        videoMixVolume = 1;
      }
      return videoFunction(
        videoPath,
        videoResizeMode,
        videoCutFrom,
        videoCutTo,
        videoWidth,
        videoHeight,
        videoLeft,
        videoTop,
        videoOriginX,
        videoOriginY,
        videoMixVolume
      );
      break;
    case "subtitle":
      var fontPath = layerArray[clipNumber + "_SubTitleFontPath" + j];
      var text = layerArray[clipNumber + "_SubTitleText" + j];
      var textColor = layerArray[clipNumber + "_SubTitleTextColor" + j];
      var backgroundColor =
        layerArray[clipNumber + "_SubTitleBackgroundColor" + j];
      var position = layerArray[clipNumber + "_SubTitleposition"];
      return subTitleFunction(
        fontPath,
        text,
        textColor,
        backgroundColor,
        position
      );
      break;
    case "audio":
      var audioPath = layerArray[clipNumber + "_AudioPath" + j];
      var audioCutFrom = layerArray[clipNumber + "_AudioCutFrom" + j];
      var audioCutTo = layerArray[clipNumber + "_AudioCutTo" + j];
      var audioMixVolume = 0;
      if (
        layerArray[clipNumber + "_AudoMixVolume" + j] != undefined &&
        layerArray[clipNumber + "_AudoMixVolume" + j] == "on"
      ) {
        audioMixVolume = 1;
      }
      return audioFunction(audioPath, audioCutFrom, audioCutTo, audioMixVolume);
      break;
    case "detached-audio":
      var detachedAudioPath = layerArray[clipNumber + "_DetachedAudioPath" + j];
      var detachedAudioCutFrom =
        layerArray[clipNumber + "_DetachedAudioCutFrom" + j];
      var detachedAudioCutTo =
        layerArray[clipNumber + "_DetachedAudioCutTo" + j];
      var detachedAudioMixVolume = 0;
      if (
        layerArray[clipNumber + "_DetachedAudoMixVolume" + j] != undefined &&
        layerArray[clipNumber + "_DetachedAudoMixVolume" + j] == "on"
      ) {
        detachedAudioMixVolume = 1;
      }
      return detachedAudioFunction(
        detachedAudioPath,
        detachedAudioCutFrom,
        detachedAudioCutTo,
        detachedAudioMixVolume
      );
      break;

    case "linear-gradient":
      var colorOne = layerArray[clipNumber + "_LinearGradientColorOne" + j];
      var colorTwo = layerArray[clipNumber + "_LinearGradientColorTwo" + j];
      return linearGradientFunction(colorOne, colorTwo);
      break;
    case "radial-gradient":
      var colorOne = layerArray[clipNumber + "_RadialGradientColorOne" + j];
      var colorTwo = layerArray[clipNumber + "_RadialGradientColorTwo" + j];
      return radialGradientFunction(colorOne, colorTwo);
      break;
    case "image-overlay":
      var imageOverlayPath = layerArray[clipNumber + "_ImageOverlayPath" + j];
      var imageOverlayWidth = layerArray[clipNumber + "_ImageOverlayWidth" + j];
      var imageOverlayHeight =
        layerArray[clipNumber + "_ImageOverlayHeight" + j];
      var imageOverlayPosition =
        layerArray[clipNumber + "_ImageOverlayPosition" + j];
      return imageOverlayFunction(
        imageOverlayPath,
        imageOverlayWidth,
        imageOverlayHeight,
        imageOverlayPosition
      );
      break;
    case "rainbow-colors":
      return rainbowColorsFunction();
      break;
    case "slide-in-text":
      var slideInFontPath = layerArray[clipNumber + "_SlideInFontPath" + j];
      var slideInText = layerArray[clipNumber + "_SlideInText" + j];
      var slideInFontSize = layerArray[clipNumber + "_SlideInFontSize" + j];
      var slideInCharSpacing =
        layerArray[clipNumber + "_SlideInCharSpacing" + j];
      var slideInColor = layerArray[clipNumber + "_SlideInColor" + j];
      var slideInPosition = layerArray[clipNumber + "_SlideInPosition" + j];
      return slideInTextFunction(
        slideInFontPath,
        slideInText,
        slideInFontSize,
        slideInCharSpacing,
        slideInColor,
        slideInPosition
      );
      break;
    case "news-title":
      var newsTitleFontPath = layerArray[clipNumber + "_NewsTitleFontPath" + j];
      var newsTitleText = layerArray[clipNumber + "_NewsTitleText" + j];
      var newsTitleTextColor =
        layerArray[clipNumber + "_NewsTitleTextColor" + j];
      var newsTitleBackgroundColor =
        layerArray[clipNumber + "_NewsTitleBackgroundColor" + j];
      var newsTitlePosition = layerArray[clipNumber + "_NewsTitlePosition" + j];
      return newsTitleFunction(
        newsTitleFontPath,
        newsTitleText,
        newsTitleTextColor,
        newsTitleBackgroundColor,
        newsTitlePosition
      );
      break;
    case "title-background":
      var titleBackgroundText =
        layerArray[clipNumber + "_TitleBackgroundText" + j];
      var titleBackgroundTextColor =
        layerArray[clipNumber + "_TitleBackgroundTextColor" + j];
      var titleBackgroundColor =
        layerArray[clipNumber + "_TitleBackgroundColor" + j];
      var titleBackgroundFontPath =
        layerArray[clipNumber + "_TitleBackgroundFontPath" + j];
      return titleBackgroundFunction(
        titleBackgroundText,
        titleBackgroundTextColor,
        titleBackgroundColor,
        titleBackgroundFontPath
      );
      break;
    case "fill-color":
      var fillColor = layerArray[clipNumber + "_FillColor" + j];
      return fillColorFunction(fillColor);
      break;

    default:
    // code block
  }
}
function imageFunction(path, zoomDirection, resizeMode) {
  // console.log(path);
  // console.log(zoomDirection);
  // console.log(resizeMode);

  if (path.length == 0) {
    path = "";
  }
  if (zoomDirection.length == 0) {
    zoomDirection = "";
  }
  if (resizeMode.length == 0) {
    resizeMode = "";
  }
  var imageLayer = {
    type: "image",
    path: path,
    resizeMode: resizeMode,
    zoomDirection: zoomDirection,
  };
  return imageLayer;
}
function titleFunction(fontPath, text, textColor, position) {
  if (text == undefined) {
    fontPath = "";
  }
  if (fontPath == undefined) {
    fontPath = "";
  }
  if (textColor == undefined) {
    textColor = "";
  }
  if (position == undefined) {
    position = "";
  }
  var titleLayer = {
    type: "title",
    position: position,
    fontPath: "",
    textColor: textColor,
    text: text,
  };
  return titleLayer;
}
function subTitleFunction(
  fontPath,
  text,
  textColor,
  backgroundColor,
  position
) {
  if (text == undefined) {
    fontPath = "";
  }
  if (position == undefined) {
    position = "";
  }
  if (fontPath == undefined) {
    fontPath = "";
  }
  if (textColor == undefined) {
    textColor = "";
  }
  if (backgroundColor == undefined) {
    backgroundColor = "";
  }
  var subtitleLayer = {
    type: "title",
    backgroundColor: backgroundColor,
    position: position,
    fontPath: "",
    textColor: textColor,
    text: text,
  };
  return subtitleLayer;
}
function videoFunction(
  videoPath,
  videoResizeMode,
  videoCutFrom,
  videoCutTo,
  videoWidth,
  videoHeight,
  videoLeft,
  videoTop,
  videoOriginX,
  videoOriginY,
  videoMixVolume
) {
  var videoLayer = {
    type: "video",
  };

  if (videoPath.length != 0) {
    videoLayer.path = "./temp/tungestolen.mp4";
  }
  if (videoResizeMode.length != 0) {
    videoLayer.resizeMode = videoResizeMode;
  }
  if (videoCutFrom.length != 0) {
    videoLayer.cutFrom = videoCutFrom;
  }
  if (videoCutTo.length != 0) {
    videoLayer.cutTo = videoCutTo;
  }
  if (videoWidth.length != 0) {
    videoLayer.width = videoWidth;
  }
  if (videoHeight.length != 0) {
    videoLayer.height = videoHeight;
  }
  if (videoLeft.length != 0) {
    videoLayer.left = videoLeft;
  }
  if (videoTop.length != 0) {
    videoLayer.top = videoTop;
  }
  if (videoOriginX != undefined) {
    videoLayer.originX = videoOriginX;
  }
  if (videoOriginY != undefined) {
    videoLayer.originY = videoOriginY;
  }
  if (videoMixVolume != 0) {
    videoLayer.mixVolume = videoMixVolume;
  }

  return videoLayer;
}
function audioFunction(audioPath, audioCutFrom, audioCutTo, audioMixVolume) {
  var audioLayer = {
    type: "audio",
  };
  if (audioPath.length != 0) {
    audioLayer.path =
      "./temp/High [NCS Release] - JPB  (No Copyright Music)-R8ZRCXy5vhA.m4a";
  }
  if (audioCutFrom.length != 0) {
    audioLayer.cutFrom = audioCutFrom;
  }
  if (audioCutTo.length != 0) {
    audioLayer.cutTo = audioCutTo;
  }
  if (audioMixVolume != 0) {
    audioLayer.mixVolume = audioMixVolume;
  }
  return audioLayer;
}
function detachedAudioFunction(
  detachedAudioPath,
  detachedAudioCutFrom,
  detachedAudioCutTo,
  detachedAudioMixVolume
) {
  var detachedAudioLayer = {
    type: "audio",
  };
  if (detachedAudioPath.length != 0) {
    detachedAudioLayer.path =
      "./temp/High [NCS Release] - JPB  (No Copyright Music)-R8ZRCXy5vhA.m4a";
  }
  if (detachedAudioCutFrom.length != 0) {
    detachedAudioLayer.cutFrom = detachedAudioCutFrom;
  }
  if (detachedAudioCutTo.length != 0) {
    detachedAudioLayer.cutTo = detachedAudioCutTo;
  }
  if (detachedAudioMixVolume != 0) {
    detachedAudioLayer.mixVolume = detachedAudioMixVolume;
  }
  return detachedAudioLayer;
}
function linearGradientFunction(colorOne, colorTwo) {
  var linearGradientLayer = {
    type: "linear-gradient",
  };

  if (colorOne.length != 0 && colorTwo.length != 0) {
    linearGradientLayer.color = [colorOne, colorTwo];
  }
  return linearGradientLayer;
}
function radialGradientFunction(colorOne, colorTwo) {
  var radialGradientLayer = {
    type: "radial-gradient",
  };

  if (colorOne.length != 0 && colorTwo.length != 0) {
    radialGradientLayer.color = [colorOne, colorTwo];
  }
  return radialGradientLayer;
}
function imageOverlayFunction(
  imageOverlayPath,
  imageOverlayWidth,
  imageOverlayHeight,
  imageOverlayPosition
) {
  var imageOverlayLayer = {
    type: "image-overlay",
  };

  if (imageOverlayPath.length != 0) {
    imageOverlayLayer.path = imageOverlayPath;
  }
  if (imageOverlayWidth.length != 0) {
    imageOverlayLayer.width = imageOverlayWidth;
  }
  if (imageOverlayHeight.length != 0) {
    imageOverlayLayer.height = imageOverlayHeight;
  }
  if (imageOverlayPosition.length != 0) {
    imageOverlayLayer.position = imageOverlayPosition;
  }
  return imageOverlayLayer;
}
function rainbowColorsFunction() {
  var rainbowColorsLayer = {
    type: "rainbow-colors",
  };

  return rainbowColorsLayer;
}
function slideInTextFunction(
  slideInFontPath,
  slideInText,
  slideInFontSize,
  slideInCharSpacing,
  slideInColor,
  slideInPosition
) {
  var slideInTextLayer = {
    type: "slide-in-text",
  };

  if (slideInFontPath.length != 0) {
    slideInTextLayer.fontPath = "./assets/Patua_One/PatuaOne-Regular.ttf";
  }
  if (slideInText.length != 0) {
    slideInTextLayer.text = slideInText;
  }
  if (slideInFontSize.length != 0) {
    slideInTextLayer.fontSize = slideInFontSize;
  }
  if (slideInCharSpacing.length != 0) {
    slideInTextLayer.charSpacing = slideInCharSpacing;
  }
  if (slideInColor.length != 0) {
    slideInTextLayer.color = slideInColor;
  }
  if (slideInPosition.length != 0) {
    slideInTextLayer.position = slideInPosition;
  }
  return slideInTextLayer;
}
function newsTitleFunction(
  newsTitleFontPath,
  newsTitleText,
  newsTitleTextColor,
  newsTitleBackgroundColor,
  newsTitlePosition
) {
  var newsTitleLayer = {
    type: "news-title",
  };

  if (newsTitleFontPath.length != 0) {
    newsTitleLayer.fontPath = "./assets/Patua_One/PatuaOne-Regular.ttf";
  }
  if (newsTitleText.length != 0) {
    newsTitleLayer.text = newsTitleText;
  }
  if (newsTitleTextColor.length != 0) {
    newsTitleLayer.textColor = newsTitleTextColor;
  }
  if (newsTitleBackgroundColor.length != 0) {
    newsTitleLayer.backgroundColor = newsTitleBackgroundColor;
  }
  if (newsTitlePosition.length != 0) {
    newsTitleLayer.position = newsTitlePosition;
  }
  return newsTitleLayer;
}
function titleBackgroundFunction(
  titleBackgroundText,
  titleBackgroundTextColor,
  titleBackgroundColor,
  titleBackgroundFontPath
) {
  var titleBackgroundLayer = {
    type: "title-background",
  };

  if (titleBackgroundFontPath.length != 0) {
    titleBackgroundLayer.fontPath = "./assets/Patua_One/PatuaOne-Regular.ttf";
  }
  if (titleBackgroundText.length != 0) {
    titleBackgroundLayer.text = titleBackgroundText;
  }
  if (titleBackgroundTextColor.length != 0) {
    titleBackgroundLayer.textColor = titleBackgroundTextColor;
  }
  if (titleBackgroundColor.length != 0) {
    titleBackgroundLayer.background = { type: titleBackgroundColor };
  }
  return titleBackgroundLayer;
}
function fillColorFunction(fillColor) {
  var fillColorLayer = {
    type: "fill-color",
  };
  if (fillColor.length != 0) {
    fillColorLayer.color = fillColor;
  }
  return fillColorLayer;
}
