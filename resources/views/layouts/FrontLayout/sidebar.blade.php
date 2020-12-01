@php
  use App\Http\Controllers;
  use App\Models\Roll;
  $students = Roll::onlineStudent();
@endphp


<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
        <img src="{{asset('images/student_images/'.$students->image)}}" class="img-circle" alt="Student Image">
        </div>
        <div class="pull-left info">
        <p>{{$students->first_name}} {{$students->last_name}}
        </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="#">
            <i class="fa fa-dashboard text-primary"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users text-success"></i>
            <span>Profile</span>
          </a>
          <ul class="treeview-menu">
          <li><a href="{{url('/student-biodata')}}"><i class="fa fa-circle-o text-red"></i>Bio Data</a></li>
          </ul>
        </li>
        <li>
          <a href="{{url('/time-schedule')}}">
            <i class="fa fa-calendar-o text-aqua"></i> <span>Time Tables</span>

          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book text-yellow"></i>
            <span>Lectures</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="{{url('/student-choose-course')}}"><i class="fa fa-circle-o text-green"></i> Choose Course</a></li>
          <li><a href="{{url('/student-lecture-calender')}}"><i class="fa fa-circle-o text-warning"></i>Academy Calender</a></li>
          <li><a href="{{url('/student-lecture-activities')}}"><i class="fa fa-circle-o text-aqua"></i> Activity</a></li>
          <li><a href="{{url('/student-exam-marks')}}"><i class="fa fa-circle-o text-red"></i> Result</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
          </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
