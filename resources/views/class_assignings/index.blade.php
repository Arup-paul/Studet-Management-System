@extends('layouts.app')

@section('content')
    <section class="content-header">

        <div class="btn btn-group ">
        <button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o" style="color:white"></i>PDF</button>
        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret" ></span>
        <span class="sr-only">Toggle Dropdown</span></button>
        <ul class="dropdown-menu" role="menu" id="export-menu">
            <li id="export-to-pdf">
            <a href="{{url('pdf-download-class-assign')}}" class="btn">Download PDF</a>
            </li>
            <li role="separator" class="divider"></li>
            <li id="import-to-pdf"><a href="">Import PDF</a></li>
        </ul>

    </div>




           <a class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('classAssignings.create') }}"><i class="fa fa-plus"></i> Add New</a>

         <h1 >Class Assignings</h1>


    </section>

    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('class_assignings.table')
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
@endsection

