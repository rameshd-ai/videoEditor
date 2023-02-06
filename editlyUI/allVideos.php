<?php include('header.php'); ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">All Video Of </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/editlyUI">Home</a></li>
            <li class="breadcrumb-item active">All Video</li>
          </ol>
        </div>
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
          if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
            $url = "https://";
          else
            $url = "http://";

          $url .= $_SERVER['HTTP_HOST'];
          $url .= $_SERVER['REQUEST_URI'];
          $parts = parse_url($url);
          parse_str($parts['query'], $query);
          $proj = $query['project'];
          $data = [];

          $response = file_get_contents('http://localhost:5000/allVideos/' . '' . $proj);
          $response = json_decode($response);
          if (count($response->videoUrl) > 0) {
            foreach ($response->videoUrl as $res) {
              if ($res != "compiledVersion") {
                $data[] = $res;
          ?>
                <div class="col-12 col-sm-6 col-md-3 d-flex align-items-stretch flex-column">
                  <div class="card bg-light d-flex flex-fill">
                    <div class="card-header text-muted border-bottom-0" style="font-size: 14px;">
                      <?php echo ("<b>Video Id:</b>" . ' ' . $res);
                      $url = 'http://localhost:5000/' . '' . $proj . '/' . $res . '' . "/video.mp4";
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
                        <!-- <a href="#" class="btn btn-sm btn-primary">
                        <i class="fas fa-user"></i> View Profile
                      </a> -->
                        <a href="http://localhost:5000/delete/<?php echo $proj; ?>/<?php echo $res; ?>" class="btn btn-sm bg-danger">
                          <i class="fas fa-trash"></i>
                        </a>
                        <a href="edit_video?id=<?php echo $res; ?>" class="btn btn-sm bg-info">
                          <i class="fas fa-info"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
            <?php }
            }
          } else { ?>
            <p>No data found! <a href="add_video">Create new video</a></p>
          <?php }

          $dta = implode(',', $data);
          ?>
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


  <?php if (count($response->videoUrl) > 0) { ?>
    <div class="row">
      <div class="col-sm-12">
        <div class="row">
          <div class="col-sm-6">

            <input type="checkbox" value="1" name="autoSubmit" id="autoSubmit" checked="checked" style="display: none;">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-text-width"></i>
                    Sortable Lists
                  </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <ul id="sortable-list" class="ui-sortable" unselectable="on" style="-moz-user-select: none;">
                    <?php
                    $i = 1;
                    if (count($response->videoUrl) > 0) {
                      foreach ($response->videoUrl as $res) {
                        if ($res != "compiledVersion") {
                    ?>
                          <li title="<?php echo $res; ?>"><?php echo $res; ?></li>
                      <?php }
                      } ?>
                  </ul>
                  <form action="http://localhost:5000/editly/generateVideo" method="post">
                    <input type="hidden" name="project" id="project" value="<?php echo $proj ?>" />
                    <input type="hidden" name="sort_order" id="sort_order" value="<?php echo $dta; ?>" />
                    <button type="submit" class="btn btn-info btn-md btn-flat"> <i class="fa fa-solid fa-paper-plane fa-md mr-2"></i>Generate Video</button>
                  </form>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <p style="display: none;"> Last order: <span id="sort-result"></span></p>
          </div>
          <div class="col-sm-6">


            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-text-width"></i>
                    Processed Video
                  </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body compiledVideo">

                
                  <div class="card bg-light d-flex flex-fill ">
                    <div class="card-header text-muted border-bottom-0" style="font-size: 14px;">
                      <?php 
                      $url = 'http://localhost:5000/' . '' . $proj . "/compiledVersion/video.mp4";
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
                      </div>
                    </div>
                  </div>
               
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>

          </div>
        </div>
      </div>
    </div>
<?php }
                  } ?>

<!-- /.content -->
</div>

<?php include('footer.php'); ?>
<script>
  setTimeout(function() {
    // alert(1);
    // $("video").css("width", "500px;");
  }, 4000);






  var submit = $('#autoSubmit'),
    list = $('#sortable-list'),
    sortInput = $('#sort_order');

  var fnSubmit = function(save) {
    var sortOrder = [];
    list.children('li').each(function() {
      sortOrder.push($(this).data('id'));
    });

    sortInput.val(sortOrder.join(','));

    $('#sort-result').text(sortOrder);

    console.log(sortOrder);
    if (save) {
      // request();
    }
  };

  /* store values */
  list.children('li').each(function() {
    var tr = $(this);
    //store value and clear title value
    tr.data('id', tr.attr('title')).attr('title', '');

  });

  /* sortables */
  list.sortable({
    opacity: 0.7,
    update: function() {
      fnSubmit(submit[0].checked); //.checked return boolean
    }
  });
</script>

<script>
  $('.compiledVideo').hide();
var url_string = window.location.href;
var url = new URL(url_string);
var project = url.searchParams.get("project");
                $.ajax({
                    type: "GET",
                    url: "http://localhost:5000/finalProcessing/"+project,
                    success: function(data) {
                        console.log(data['fileCount']);

                       if(data['fileCount'] == 3){
                        $('.compiledVideo').show();
                       }else{
                        $('.card-header').append("<br><p>No processed video!</p>")
                       }
                    }
                });
</script>