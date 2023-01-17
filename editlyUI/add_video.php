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
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <label>Select layer type</label>
                                    <select class="form-control clipOne_LayerType" name="clipOne_LayerType">
                                      <option>Select</option>
                                      <option value="image">image</option>
                                      <option value="title">title</option>
                                      <option value="video">video</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-sm-3">
                                  <div class="form-group">
                                    <label for="clipOne_Duration">Duration (seconds)</label> <input type="number"
                                      class="form-control" id="clipOne_Duration" name="clipOne_Duration"
                                      placeholder="Enter duration ">
                                  </div>
                                </div>
                                <div class="col-sm-3">
                                  <div class="form-group">
                                    <label>Select transition types</label>
                                    <select class="form-control" name="clipOne_TransitionType">
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
                        <div class="card card-primary">
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
                                    <label for="clipTwo_Duration">Duration (seconds)</label> <input type="number"
                                      class="form-control" id="clipTwo_Duration" name="clipTwo_Duration"
                                      placeholder="Enter duration ">
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
                        </div>
                        <!-- clip 2 accordion end -->






                      </div>
                    </div>
                    <div class="mt-4 text-center">
                      <button type="submit" class="btn btn-info btn-lg btn-flat"> <i
                          class="fa fa-solid fa-paper-plane fa-lg mr-2"></i>Generate video</button>
                    </div>
                  </form>













                  <!-- <div class="row mt-4">
                  <nav class="w-100">
                    <div class="nav nav-tabs" id="product-tab" role="tablist">
                      <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
                      <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Comments</a>
                      <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">Rating</a>
                    </div>
                  </nav>
                  <div class="tab-content p-3" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae condimentum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed posuere, purus at efficitur hendrerit, augue elit lacinia arcu, a eleifend sem elit et nunc. Sed rutrum vestibulum est, sit amet cursus dolor fermentum vel. Suspendisse mi nibh, congue et ante et, commodo mattis lacus. Duis varius finibus purus sed venenatis. Vivamus varius metus quam, id dapibus velit mattis eu. Praesent et semper risus. Vestibulum erat erat, condimentum at elit at, bibendum placerat orci. Nullam gravida velit mauris, in pellentesque urna pellentesque viverra. Nullam non pellentesque justo, et ultricies neque. Praesent vel metus rutrum, tempus erat a, rutrum ante. Quisque interdum efficitur nunc vitae consectetur. Suspendisse venenatis, tortor non convallis interdum, urna mi molestie eros, vel tempor justo lacus ac justo. Fusce id enim a erat fringilla sollicitudin ultrices vel metus. </div>
                    <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab"> Vivamus rhoncus nisl sed venenatis luctus. Sed condimentum risus ut tortor feugiat laoreet. Suspendisse potenti. Donec et finibus sem, ut commodo lectus. Cras eget neque dignissim, placerat orci interdum, venenatis odio. Nulla turpis elit, consequat eu eros ac, consectetur fringilla urna. Duis gravida ex pulvinar mauris ornare, eget porttitor enim vulputate. Mauris hendrerit, massa nec aliquam cursus, ex elit euismod lorem, vehicula rhoncus nisl dui sit amet eros. Nulla turpis lorem, dignissim a sapien eget, ultrices venenatis dolor. Curabitur vel turpis at magna elementum hendrerit vel id dui. Curabitur a ex ullamcorper, ornare velit vel, tincidunt ipsum. </div>
                    <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab"> Cras ut ipsum ornare, aliquam ipsum non, posuere elit. In hac habitasse platea dictumst. Aenean elementum leo augue, id fermentum risus efficitur vel. Nulla iaculis malesuada scelerisque. Praesent vel ipsum felis. Ut molestie, purus aliquam placerat sollicitudin, mi ligula euismod neque, non bibendum nibh neque et erat. Etiam dignissim aliquam ligula, aliquet feugiat nibh rhoncus ut. Aliquam efficitur lacinia lacinia. Morbi ac molestie lectus, vitae hendrerit nisl. Nullam metus odio, malesuada in vehicula at, consectetur nec justo. Quisque suscipit odio velit, at accumsan urna vestibulum a. Proin dictum, urna ut varius consectetur, sapien justo porta lectus, at mollis nisi orci et nulla. Donec pellentesque tortor vel nisl commodo ullamcorper. Donec varius massa at semper posuere. Integer finibus orci vitae vehicula placerat. </div>
                  </div>
                </div> -->
             

        
      </section>
      <!-- /.content -->
</div><br>

<?php include('footer.php'); ?>