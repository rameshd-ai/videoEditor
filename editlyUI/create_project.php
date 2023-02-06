<?php include('header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Create New Project</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/editlyUI">Home</a></li>
                        <li class="breadcrumb-item active">Create New Project</li>
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
            <form action="http://localhost:5000/createProject" method="post">
                <div class="card-body">
                    <div id="accordion">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    <a class="d-block w-100">
                                        New Project
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="project_name">Project Name</label> <input type="text" class="form-control" id="project_name" name="project_name" placeholder="Enter project name ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 ">
                                        <button type="submit" class="btn btn-info btn-md btn-flat"> <i class="fa fa-solid fa-paper-plane fa-lg mr-2"></i>Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="container-fluid">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Bordered Table</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Projects</th>
                                        <th>Progress</th>
                                        <th style="width: 40px">Progress(%)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $response = file_get_contents('http://localhost:5000/createProject');
                                    $response = json_decode($response);
                                    if (count($response->allProjects) > 0) {
                                        $i=1;
                                        foreach ($response->allProjects as $res) {
                                    ?>
                                            <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td><a href="allVideos?project=<?php echo $res; ?>"><?php echo $res; ?> </a></td>
                                                <td>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-danger">55%</span></td>
                                            </tr>
                                     
                                    <?php }
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <!-- <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div> -->
                    </div>
                    <!-- /.card -->
                </div>

            </div>
    </section>




    <!-- /.content -->
</div><br>

<?php include('footer.php'); ?>