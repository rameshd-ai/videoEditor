<?php include('header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Create New Video</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/editlyUI">Home</a></li>
                        <li class="breadcrumb-item active">Create New Video</li>
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
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Select project</label>
                                                <select class="form-control clipOne_LayerType" name="Project" id="Project">
                                                    <?php
                                                    $response = file_get_contents('http://localhost:5000/createProject');
                                                    $response = json_decode($response);
                                                    if (count($response->allProjects) > 0) {
                                                        $i = 1;
                                                        foreach ($response->allProjects as $res) {
                                                    ?>
                                                            <option value="<?php echo $res; ?>"><?php echo $res; ?></option>
                                                    <?php }
                                                    } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Select layer type</label>
                                                <select class="form-control clipOne_LayerType" name="clipOne_LayerType" id="clipOne_LayerType">
                                                    <option>Select</option>
                                                    <option value="image">image</option>
                                                    <option value="title">title</option>
                                                    <option value="video">video</option>
                                                    <option value="subtitle">subtitle</option>
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
                        <!-- <div class="card card-primary">
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
                        </div> -->
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