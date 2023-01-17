import editly from "editly";
import express from "express";
import { v4 as uuidv4 } from "uuid";
import fs from "fs";
import { exit } from "process";
import  path from 'path';
// import mime from 'mime'

// import { fileURLToPath } from 'url';
// import { dirname } from 'path';
// const __filename = fileURLToPath(import.meta.url);
// const __dirname = dirname(__filename);

const filenm = "video";
var ClipOneObject = {};
var ClipTwoObject = {};
var layerArray1 = [];
var layerArray2 = [];
var layersOne;
var layersTwo;
var ClipCombinedResult = [];
export const getEditly = (req, res) => {
  const dir = './results';
  var list = [];
  function getList(){
    fs.readdir(dir, (err, files) => {
      files.forEach(file => {
        list.push(path.parse(file).name); 
      });
      res.send({'videoUrl': list});
    });
  }
 getList();
};



export const postEditly = (req, res) => {
  // console.log(req.body);
  
  for (const key in req.body) {
    sortClip(req.body, key, req.body[key]);
  }


  function sortClip(body, key, value) {
    var subString = key.substring(0, key.indexOf("_"));
    if (subString == "clipOne") {
      ClipOneObject[key] = value;
      if(ClipOneObject["clipTwo_LayerType"] != "Select"){
        layerArray1.push(ClipOneObject);
      }
    }
    if (subString == "clipTwo") {
      ClipTwoObject[key] = value;
      // console.log(value);
      if(ClipOneObject["clipTwo_LayerType"] != "Select"){
       layerArray2.push(ClipTwoObject);
      }
    }
  }

  // console.log(layerArray2[0]);

if(req.body.clipOne_LayerType != "Select"){
   layersOne = layerFilter("clipOne", layerArray1[0]);
   var finalStructureResultOne = {
    duration: req.body.clipOne_Duration,
    transition: { name: req.body.clipOne_TransitionType },
    layers: layersOne
  };
  ClipCombinedResult.push(finalStructureResultOne);
}
if(req.body.clipTwo_LayerType != "Select"){
   layersTwo = layerFilter("clipTwo", layerArray2[0]);
   var finalStructureResultTwo = {
    duration: req.body.clipTwo_Duration,
    transition: { name: req.body.clipTwo_TransitionType },
    layers: layersTwo
  };
  ClipCombinedResult.push(finalStructureResultTwo);
}


  // console.log(ClipCombinedResult[0]);


  //filtet the layer and send it to respective function for object creation
  function layerFilter(clipNumber, layerArray) {
    var firstLayerType = layerArray[clipNumber + "_LayerType"];
    var type = firstLayerType;
    // console.log(layerArray);
    var ClipResultObject = [];
    var returnVal = caseFunction(type, clipNumber, layerArray);
    ClipResultObject.push(returnVal);
    var y = 0;
    for (const keys in layerArray) {
      var substring = "SubLayerType";
      if (keys.indexOf(substring) !== -1) {
        y++;
      }
    }
if(layerArray[clipNumber + "_SubLayerType0"] != 'Select'){
  for (let j = 0; j < y; j++) {

    var subLayerType = layerArray[clipNumber + "_SubLayerType" + j];
    var returnSubLayerVal = caseSubFunction(subLayerType, clipNumber, layerArray, j);
    ClipResultObject.push(returnSubLayerVal);

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
        if(layerArray[clipNumber + "_VideoMixVolume"] != undefined && layerArray[clipNumber + "_VideoMixVolume"] == "on"){
           videoMixVolume = 1;
        }
        return videoFunction(videoPath, videoResizeMode, videoCutFrom, videoCutTo,videoWidth,videoHeight,videoLeft,videoTop,videoOriginX,videoOriginY,videoMixVolume);
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
        if(layerArray[clipNumber + "_VideoMixVolume"] != undefined && layerArray[clipNumber + "_VideoMixVolume"] == "on"){
            videoMixVolume = 1;
        }
        return videoFunction(videoPath, videoResizeMode, videoCutFrom, videoCutTo,videoWidth,videoHeight,videoLeft,videoTop,videoOriginX,videoOriginY,videoMixVolume);
        break;
      default:
      // code block
    }
  }




function imageFunction(path, zoomDirection, resizeMode) {
  if (path == undefined) { path = ''; } if (zoomDirection == undefined) { zoomDirection = ''; } if (resizeMode == undefined) { resizeMode = ''; }
  var imageLayer = { type: 'image', path: path, resizeMode: resizeMode, zoomDirection: zoomDirection };
  return imageLayer;
}

function titleFunction(fontPath, text, textColor, position) {
  if (text == undefined) { fontPath = ''; } if (fontPath == undefined) { fontPath = ''; } if (textColor == undefined) { textColor = ''; } if (position == undefined) { position = ''; }
  var titleLayer = { type: 'title', position: position, fontPath: '', textColor: textColor, text: text };
  return titleLayer;
}

function videoFunction(videoPath, videoResizeMode, videoCutFrom, videoCutTo,videoWidth,videoHeight,videoLeft,videoTop,videoOriginX,videoOriginY,videoMixVolume){
  var videoLayer = { 
    type: 'video', 
  };

  if (videoPath.length != 0 ) {videoLayer.path = "./results/tungestolen.mp4"; }
  if (videoResizeMode.length != 0 ) { videoLayer.resizeMode = videoResizeMode;}
  if (videoCutFrom.length != 0 ) { videoLayer.cutFrom = videoCutFrom; }
  if (videoCutTo.length != 0 ) { videoLayer.cutTo = videoCutTo; }
  if (videoWidth.length != 0 ) { videoLayer.width = videoWidth; }
  if (videoHeight.length != 0 ) { videoLayer.height = videoHeight; }
  if (videoLeft.length != 0 ) { videoLayer.left = videoLeft; }
  if (videoTop.length != 0) { videoLayer.top = videoTop; }
  if (videoOriginX != undefined) { videoLayer.originX = videoOriginX; }
  if (videoOriginY != undefined) {  videoLayer.originY = videoOriginY; }
  if (videoMixVolume.length != 0) { videoLayer.mixVolume = videoMixVolume; }

  return videoLayer;
}








  let uid = uuidv4();
  let folderPath = `./results/${uid}`;







  let width = 900;
  let height = 1600;
  let outPath = "./video.mp4";
  let allowRemoteRequests = 'true';

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
          name: 'random',
          audioOutCurve: 'tri',
          audioInCurve: 'tri',
        },
        layer: { fontPath: "./assets/Patua_One/PatuaOne-Regular.ttf" },
        layerType: {
          'fill-color': {
            color: '#ff6666',
          }
          // ...more per-layer-type defaults
        },
      },
      clips: clips,
      audioFilePath: '',
      loopAudio: false,
      keepSourceAudio: false,
      clipsAudioVolume: 1,
      outputVolume: 1,
      // audioTracks: [
      //   {
      //     path:'',
      //     mixVolume: 1,
      //     cutFrom: 0,
      //     cutTo:0,
      //     start: 0,
      //   },
      //   // ...more audio tracks
      // ],
      // audioNorm: {
      //   enable: false,
      //   gaussSize: 5,
      //   maxGain: 30,
      // }
    }
  };


  // console.log(data);


  // let data = {

  //     id: uid,

  //     editlyArgs:{
  //       width: 240, height: 240, fps: 14,
  //       outPath: outPath,
  //       defaults: {

  //         layer: { fontPath: './assets/Patua_One/PatuaOne-Regular.ttf' },
  //       },
  //       clips: [
  //         { duration: 1, transition: { name: '' }, layers: [{ type: 'image', path: './assets/vertical.jpg', zoomDirection: 'out' }, { type: 'title', text: 'EDITLY' }] },
  //         { duration: 1.5, transition: { name: '' }, layers: [{ type: 'image', path: './assets/img1.jpg', duration: 2.5, zoomDirection: 'in' }, { type: 'title', position: 'bottom', text: 'Video editing API' }] },

  //         { duration: 2, layers: [
  //           { type: 'image', path: './assets/91083241_573589476840991_4224678072281051330_n.jpg' },
  //           { type: 'news-title', text: 'EDITLY' },
  //           { type: 'subtitle', text: 'Get it from npm', backgroundColor: 'rgba(0,0,0,0.5)' }
  //         ] },
  //       ],
  //     }
  //     };


  fs.mkdir(folderPath, { recursive: true }, (err) => {
    if (err) throw err;
  });

  data.editlyArgs.outPath = folderPath + '/video.mp4'

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
  res.redirect('http://localhost/editlyUI/processing?id='+uid);
  // res.send(req.body);
};






function writefiledata(filenm, jsonContent) {
  fs.writeFile(filenm, jsonContent, "utf8", function (err) {
    if (err) {
      console.log("An error occured while writing JSON Object to File.");
      return console.log(err);
    }

    console.log("JSON file has been saved.");
  });
}