import express from 'express';
import bodyParser from 'body-parser'; // this allows us to take in incoming post request body.
import path from "path";
import { fileURLToPath } from "url";
import cors from "cors";
import editlyRoutes from './routes/editly.js';
import fs from "fs";
const app = express();
const PORT = 5000;

// var corsOptions = {
//   origin: 'http://localhost/editlyUI/',
//   optionsSuccessStatus: 200 // For legacy browser support
// }
// app.use(cors(corsOptions));
app.use(cors({
  origin: 'http://localhost'
}));



const __filename = fileURLToPath(import.meta.url);

const __dirname = path.dirname(__filename);
app.use(express.static('results')); 

// this says we are going to use json data in whole appication
// app.use(bodyParser.json());

app.use(express.json());
app.use(
  express.urlencoded({
    extended: true,
  })
);
app.set('view engine','ejs');
app.use('/editly', editlyRoutes);

//this is for single video view
app.get('editly/:id', (req,res)=>{
    res.render('home',{data: req.params.id});
});


app.get('/processing/:id', (req,res)=>{
  const testFolder = './results';
  fs.readdir(testFolder, (err, files) => {
    var i=0;
    files.forEach(file => {
      if(file == req.params.id){
        console.log(file);
        i++;
      }
    });
  if(i == 1){
    const newTestFolder = './results/'+req.params.id;
    fs.readdir(newTestFolder, (err, files) => {
      var fileCount = files.length; 
      res.send({"fileCount":fileCount});  
    });
  }else{
     res.send({"fileCount":0});  
  }
  });
}); 



app.get('/delete/:id', (req,res)=>{

  const deleteFolder = './results/'+req.params.id;

  fs.rmdir(deleteFolder,
  { recursive: true, force: true }, (err) => {

    if (err) {
    return console.log("error occurred in deleting directory", err);
    }
    
    console.log("Directory deleted successfully");
    });
    res.redirect('http://localhost/editlyUI/allVideos');


}); 


app.listen(PORT, () => console.log(`Server running on port: http://localhost:${PORT}`));