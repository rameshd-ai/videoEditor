<?php
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
  $url = "https://";
else
  $url = "http://";

$url .= $_SERVER['HTTP_HOST'];
$url .= $_SERVER['REQUEST_URI'];
$uriSegments = explode("/", parse_url($url, PHP_URL_PATH));
$lastUriSegment = array_pop($uriSegments);
?>

<?php include('header.php'); ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div> -->
        <!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>
                <?php 
                $response = file_get_contents('http://localhost:5000/editly');
                $response = json_decode($response);
                // var_dump(count($response->videoUrl));
                echo(count($response->videoUrl));
                ?>
              </h3>

              <p>Videos created</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="allVideos" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->


      </div>
      <!-- /.row -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include('footer.php'); ?>