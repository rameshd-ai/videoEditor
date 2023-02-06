<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Milestone Inc. | Video Editor</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <style>
        .main {
            width: 100%;
            height: 20vh;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 50px;
        }

        .c {
            position: relative;
            width: 50px;
            height: 50px;
            border-radius: 50px;
            border: 2px solid silver;
        }

        .c::after {
            content: "";
            position: absolute;
            width: 40px;
            border: 1px solid orangered;
            left: 50%;
            top: 50%;
            transform-origin: top left;
            animation: round 2s linear infinite;
        }

        @keyframes round {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .b {
            width: 50px;
            height: 50px;
            background-color: silver;
            border-radius: 50px;
            position: relative;
        }

        .b::before {
            content: " ";
            width: 10px;
            height: 10px;
            background-color: orangered;
            border-radius: 10px;
            position: absolute;
            top: 0px;
            left: 0px;
        }

        .b::before {
            animation: pulse 2s ease infinite;
        }

        @keyframes pulse {
            from {
                transform: rotate(0deg) translateX(50px) rotate(0deg);
            }

            to {
                transform: rotate(360deg) translateX(50px) rotate(-360deg);
            }
        }

        .a {
            width: 50px;
            height: 50px;
            background-color: silver;
            border-radius: 50px;
            position: relative;
        }

        .a::after {
            content: "";
            position: absolute;
            width: 50px;
            height: 50px;
            background-color: orangered;
            border-radius: 50px;
            animation: open 2s ease infinite;
        }

        @keyframes open {
            from {
                opacity: 1;
                scale: 0.2
            }

            75% {
                opacity: 0.4;
                scale: 0.7
            }

            to {
                opacity: 0.1;
                scale: 1
            }
        }
    </style>
</head>

<body class="hold-transition lockscreen">
    <!-- Automatic element centering -->
    <div class="lockscreen-wrapper">
        <div class="lockscreen-logo">
            <a href="index2.html"><b>Processing...</b> please wait, this might take some time.</a>

        </div>

        <!-- /.lockscreen-item -->
        <div class="help-block text-center">
            <div class="main">
                <div class="c">
                </div>
                <div class="b">
                </div>
                <div class="a">
                </div>
            </div>
        </div>
        <!-- <div class="text-center">
    <a href="login.html">Click here if not redirected in 5 mins</a>
  </div> -->

    </div>
    <!-- /.center -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<script>
    setTimeout(function() {
        // alert(1);
        // $("video").css("width", "500px;");
    }, 4000);
</script>
<script>
var url_string = window.location.href;
var url = new URL(url_string);
var project = url.searchParams.get("project");
console.log(project);
var loop =0;
    setInterval(function() {
        loop++;
                $.ajax({
                    type: "GET",
                    url: "http://localhost:5000/finalProcessing/"+project,
                    success: function(data) {
                        console.log(data['fileCount']);

                       if(data['fileCount'] == 3){
                        window.location.replace("http://localhost/editlyUI/allVideos?project="+project);
                       }
                    }
                });
            }, 5000);
</script>