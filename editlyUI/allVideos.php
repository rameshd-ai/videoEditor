<?php include('header.php'); ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">All Video</h1>
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


    <div class="card card-solid">
      <div class="card-body pb-0">
        <div class="row">


        <?php 
                $response = file_get_contents('http://localhost:5000/editly');
                $response = json_decode($response);
                foreach($response->videoUrl as $res)
{
                ?>
          <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
            <div class="card bg-light d-flex flex-fill">
              <div class="card-header text-muted border-bottom-0" style="font-size: 14px;">
                <?php echo("<b>Video Id:</b>".' '.$res);
                $url = 'http://localhost:5000/' .''.$res.''."/video.mp4";
                ?>
              </div>
              <div class="card-body pt-0">
                <div class="embed-responsive embed-responsive-16by9">
                  <video width="100%" height="auto" controls>
                    <source src="<?php echo $url; ?>" type="video/mp4">
                  </video>
                </div>
              </div>
              <div class="card-footer">
                <div class="text-right">
                  <a href="<?php echo $url; ?>" class="btn btn-sm bg-teal">
                    <i class="fas fa-download"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-primary">
                    <i class="fas fa-user"></i> View Profile
                  </a>
                  <a href="http://localhost:5000/delete/<?php echo $res; ?>" class="btn btn-sm bg-danger">
                    <i class="fas fa-trash"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>

<?php } ?>
        </div>
      </div>

      <!-- <div class="card-footer">
        <nav aria-label="Contacts Page Navigation">
          <ul class="pagination justify-content-center m-0">
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item"><a class="page-link" href="#">6</a></li>
            <li class="page-item"><a class="page-link" href="#">7</a></li>
            <li class="page-item"><a class="page-link" href="#">8</a></li>
          </ul>
        </nav>
      </div> -->

    </div>

  </section>
  <!-- /.content -->
</div>

<?php include('footer.php'); ?>
<script>
  setTimeout(function() {
    // alert(1);
    // $("video").css("width", "500px;");
  }, 4000);
</script>