
  @push('css')
  <style>
  .profile-user-img {
    margin: 0 auto;
    width: 100px;
    padding: 3px;
    border: 3px solid #d2d6de;
    border-radius: 35px;
    height: 100px;
}
</style>

  @endpush
    <section class="content-header">
      <h1>
        Teacher Profile
      </h1>
      <ol class="breadcrumb">
        <li>   <a href="{{ route('teachers.index') }}" class="btn btn-default">Back</a></li>
      </ol>
    </section>

    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
            <img class="profile-user-img img-responsive img-circle" src="{{asset('teacher_images/'.$teacher->image) }}" width="60" height="80" alt="Teacher profile picture">

            <h3 class="profile-username text-center">{{$teacher->first_name}} {{$teacher->last_name}}</h3>

              <p class="text-muted text-center">Teacher</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Followers</b> <a class="pull-right">1,322</a>
                </li>
                <li class="list-group-item">
                  <b>Following</b> <a class="pull-right">543</a>
                </li>
                <li class="list-group-item">
                  <b>Friends</b> <a class="pull-right">13,287</a>
                </li>
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

              <p class="text-muted">
                B.S. in Computer Science from the University of Tennessee at Knoxville
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted">Malibu, California</p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

              <p>
                <span class="label label-danger">UI Design</span>
                <span class="label label-success">Coding</span>
                <span class="label label-info">Javascript</span>
                <span class="label label-warning">PHP</span>
                <span class="label label-primary">Node.js</span>
              </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Teacher TimeTable</a></li>
              <li><a href="#timeline" data-toggle="tab">Full Details</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="../../dist/img/user6-128x128.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">Adam Jones</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Posted 5 photos - 5 days ago</span>
                  </div>
                  <!-- /.user-block -->
                  <div class="row margin-bottom">
                    <div class="col-sm-6">
                      <img class="img-responsive" src="../../dist/img/photo1.png" alt="Photo">
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                      <div class="row">
                        <div class="col-sm-6">
                          <img class="img-responsive" src="../../dist/img/photo2.png" alt="Photo">
                          <br>
                          <img class="img-responsive" src="../../dist/img/photo3.jpg" alt="Photo">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                          <img class="img-responsive" src="../../dist/img/photo4.jpg" alt="Photo">
                          <br>
                          <img class="img-responsive" src="../../dist/img/photo1.png" alt="Photo">
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->

                  <ul class="list-inline">
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                    </li>
                    <li class="pull-right">
                      <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                        (5)</a></li>
                  </ul>

                  <input class="form-control input-sm" type="text" placeholder="Type a comment">
                </div>
                <!-- /.post -->
              </div>
              <div class="tab-pane" id="timeline">
                   <div class="form-group row">
                       <label class="col-md-3 control-label" for="name">Full Name:</label>
                       <div class="col-md-9">
                           <input id="name" disabled class="form-control" value="{{$teacher->first_name}} {{$teacher->last_name}}">
                       </div>
                   </div>
                    <div class="form-group row">
                       <label class="col-md-3 control-label" for="email">Email:</label>
                       <div class="col-md-9">
                           <input id="email" disabled class="form-control" value="{{$teacher->email}}">
                       </div>
                   </div>

                     <div class="form-group row">
                         <div class="col-md-6 row">
                             <label class="col-md-3 control-label" for="email">Gender:</label>
                       <div class="col-md-9">
                       <input id="email" disabled class="form-control" value="{{$teacher->gender}}">
                       </div>
                         </div>
                         <div class="col-md-6 row">
                             <label class="col-md-3 control-label" for="email">Status:</label>
                       <div class="col-md-9">
                           <input id="email" disabled class="form-control" @if($teacher->status == 0 ) value="Unmarried" @elseif($teacher->status == 1) value="Married" @endif>
                       </div>
                         </div>

                   </div>

                    <div class="form-group row">
                       <label class="col-md-3 control-label" for="email">Date of Birth:</label>
                       <div class="col-md-9">
                           <input id="email" disabled class="form-control" value="{{$teacher->dob}}">
                       </div>
                   </div>

                    <div class="form-group row">
                       <label class="col-md-3 control-label" for="email">Phone No:</label>
                       <div class="col-md-9">
                           <input id="email" disabled class="form-control" value="{{$teacher->phone}}">
                       </div>
                   </div>

                    <div class="form-group row">
                       <label class="col-md-3 control-label" for="email">Passport No:</label>
                       <div class="col-md-9">
                           <input id="email" disabled class="form-control" value="{{$teacher->passport}}">
                       </div>
                   </div>

                    <div class="form-group row">
                       <label class="col-md-3 control-label" for="email">Address:</label>
                       <div class="col-md-9">
                       <textarea class="form-control" disabled>{{$teacher->address}}</textarea>
                       </div>
                   </div>
                    <div class="form-group row">
                       <label class="col-md-3 control-label" for="email">Nationality:</label>
                       <div class="col-md-9">
                           <input id="email" disabled class="form-control" value="{{$teacher->nationality}}">
                       </div>
                   </div>

                    <div class="form-group row">
                       <label class="col-md-3 control-label" for="email">Register Date:</label>
                       <div class="col-md-9">
                           <input id="email" disabled class="form-control" value="{{$teacher->dateregistared}}">
                       </div>
                   </div>


              </div>


            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>







