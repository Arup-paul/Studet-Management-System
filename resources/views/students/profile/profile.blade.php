@extends('layouts.FrontLayout.app')

@section('content')
    <section class="content-header">
        <h1>
            Student
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
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
.input-icon{
    position: static;
    right: 3px;
    top:calc(50%-0.5em);

}
</style>

  @endpush
    <section class="content-header">
      <h1>
        Student Profile
        @include('adminlte-templates::common.errors')
      </h1>
      <ol class="breadcrumb">
        <li>   <a href="#" class="btn btn-default">Back</a></li>
      </ol>
    </section>

    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
            <img class="profile-user-img img-responsive img-circle" src="{{asset('images/student_images/'.$students->image) }}" width="60" height="80" alt="students profile picture">

            <h3 class="profile-username text-center">{{$students->first_name}} {{$students->last_name}}</h3>

              <p class="text-muted text-center">students</p>

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
              <li class="active"><a href="#activity" data-toggle="tab">students TimeTable</a></li>
              <li><a href="#timeline" data-toggle="tab">Full Details</a></li>
              <li><a href="#settings" data-toggle="tab">Settings</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                  <section class="content-header ">
                    <h1 class="text-aqua">
                      Class  Time Table
                    </h1>
                </section>
               <div class="content">
              <div class="box box-primary">
                <div class="box-body">
                <div class="post">

                  <div class="row margin-bottom">
                      <h1>here is a student time table</h1>
                  </div>
                </div>
                </div>
              </div>
               </div>
                <!-- /.post -->
              </div>
              <div class="tab-pane" id="timeline">
                   <section class="content-header ">
                    <h1 class="text-aqua">
                       Full Details
                    </h1>
                </section>
               <div class="content">
              <div class="box box-primary">
                <div class="box-body">
                   <div class="form-group row">
                       <label class="col-md-3 control-label" for="name">Full Name:</label>
                       <div class="col-md-9">
                           <input id="name" disabled class="form-control" value="{{$students->first_name}} {{$students->last_name}}">
                       </div>
                   </div>
                    <div class="form-group row">
                       <label class="col-md-3 control-label" for="email">Email:</label>
                       <div class="col-md-9">
                           <input id="email" disabled class="form-control" value="{{$students->email}}">
                       </div>
                   </div>

                     <div class="form-group row">
                         <div class="col-md-6 row">
                             <label class="col-md-3 control-label" for="email">Gender:</label>
                       <div class="col-md-9">
                       <input id="email" disabled class="form-control" value="{{$students->gender}}">
                       </div>
                         </div>
                         <div class="col-md-6 row">
                             <label class="col-md-3 control-label" for="email">Status:</label>
                       <div class="col-md-9">
                           <input id="email" disabled class="form-control"
                           @if($students->status == 0) value="Active"
                           @else
                           value="InActive" @endif
                            >
                       </div>
                         </div>

                   </div>

                    <div class="form-group row">
                       <label class="col-md-3 control-label" for="email">Date of Birth:</label>
                       <div class="col-md-9">
                           <input id="email" disabled class="form-control" value="{{$students->dob}}">
                       </div>
                   </div>

                    <div class="form-group row">
                       <label class="col-md-3 control-label" for="email">Phone No:</label>
                       <div class="col-md-9">
                           <input id="email" disabled class="form-control" value="{{$students->phone}}">
                       </div>
                   </div>

                    <div class="form-group row">
                       <label class="col-md-3 control-label" for="email">Passport No:</label>
                       <div class="col-md-9">
                           <input id="email" disabled class="form-control" value="{{$students->passport}}">
                       </div>
                   </div>

                    <div class="form-group row">
                       <label class="col-md-3 control-label" for="email">Address:</label>
                       <div class="col-md-9">
                       <textarea class="form-control" disabled>{{$students->address}}</textarea>
                       </div>
                   </div>
                    <div class="form-group row">
                       <label class="col-md-3 control-label" for="email">Nationality:</label>
                       <div class="col-md-9">
                           <input id="email" disabled class="form-control" value="{{$students->nationality}}">
                       </div>
                   </div>

                    <div class="form-group row">
                       <label class="col-md-3 control-label" for="email">Register Date:</label>
                       <div class="col-md-9">
                           <input id="email" disabled class="form-control" value="{{$students->dateregistared}}">
                       </div>
                   </div>
                </div>
              </div>
               </div>

              </div>
              <div class="tab-pane" id="settings">
                  <section class="content-header ">
                    <h1 class="text-aqua">
                        Change Password
                    </h1>
                </section>
            <div class="content">
              <div class="box box-primary">
                <div class="box-body">
                <form action="{{url('student-update-password')}}" method="post" class="form-horizontal">
                        @csrf
                      <div class="form-group row">
                      <input type="hidden" name="email" id="email" value="{{$students->email}}">
                        <label for="oldpassword" class="col-sm-4 col-form-label">Old Password</label>
                        <div class="col-sm-8">
                          <input type="password" name="oldpassword" class="form-control" id="oldpassword" placeholder="Old Password">
                          <i class="input-icon" id="messageError"></i>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="newPassword"
                         class="col-sm-4 col-form-label">New Password</label>
                        <div class="col-sm-8">
                          <input type="password" name="password" class="form-control" id="password" placeholder="New Password">
                        </div>
                      </div>
                      {{-- <div class="form-group row">
                        <label for="confirmPassword" class="col-sm-4 col-form-label">Confirm Password</label>
                        <div class="col-sm-8">
                          <input type="text" name="confirmPassword" class="form-control" id="confirmPassword" placeholder="Confirm Password">
                        </div>
                      </div> --}}

                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-success">Update Password</button>
                        </div>
                      </div>
                    </form>
                </div>
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
   <a href="#" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')


<script>
   $(document).ready(function(){
    $("#oldpassword").keyup(function(){
        var oldpassword = $("#oldpassword").val();
        $.ajax({
            type:'get',
            url:'/verify-student-password',
            data:{oldpassword:oldpassword},
            success:function(response){
               if(response == "false"){
                  $("#messageError").html("<font color:'red'>Password Incorrect</font>")
               }else if(response == "true"){
                  $("#messageError").html("<font color:'green'>Password Match</font>")

               }
            }
        });
    });
   });
</script>


@endpush






