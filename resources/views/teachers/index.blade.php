@extends('layouts.app')

@section('content')
<section class="content-header">

    {{-- PDF button --}}
    <div class="btn btn-group ">
    <button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o" style="color:white"></i>PDF</button>
    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret" ></span>
    <span class="sr-only">Toggle Dropdown</span></button>
    <ul class="dropdown-menu" role="menu" id="export-menu">
        <li id="export-to-pdf">
        <a href="{{url('/teachers/pdf')}}" class="btn">Download PDF</a>
        </li>
        <li role="separator" class="divider"></li>
        <li id="import-to-pdf"><a href="">Import PDF</a></li>
    </ul>
</div>

  {{-- Excel button --}}
  <div class="btn btn-group ">
    <button type="button" class="btn btn-primary"><i class="fa fa-file-excel-o" style="color:white"></i>Excel</button>
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret" ></span>
    <span class="sr-only">Toggle Dropdown</span></button>
    <ul class="dropdown-menu" role="menu" id="export-menu">
        <li id="export-to-pdf">
        <a href="{{url('/teachers/excel-export_xlsx')}}" class="btn">Export XLSX</a>
        </li>
        <li role="separator" class="divider"></li>
        <li id="export-to-pdf">
            <a href="{{url('/teachers/excel-export_xls')}}" class="btn">Export XLS</a>
            </li>
            <li role="separator" class="divider"></li>
        <li id="export-to-pdf">
            <a href="{{url('/teachers/excel-export_csv')}}" class="btn">Export CSV</a>
            </li>
            <li role="separator" class="divider"></li>
        <li ><a href=""data-toggle="modal" data-target="#xls-add-modal" >Import XLS</a></li>
    </ul>
</div>

<div class="modal fade left" id="xls-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right modal-success" role="document">
        <div class="modal-content">
            <div class="modal-header">
               <h4 class="modal-title" id="exampleModalLabel" ><i class="fa fa-registered" aria-hidden="true">Excel </i></h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>
            </div>
        <form action="{{url('/teachers/excel-import')}}" method="post" enctype="multipart/form-data">@csrf
            <div class="modal-body">
               <input type="file" name="file" name="import">
            </div>
        <div class="modal-footer">
       <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
       {!! Form::submit('Upload', ['class' => 'btn btn-success']) !!}
      </div>
    </form>


        </div>
    </div>
</div>


  {{-- word button --}}
  <div class="btn btn-group ">
    <button type="button" class="btn btn-success"><i class="fa fa-file-word-o" style="color:white"></i>Word</button>
    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret" ></span>
    <span class="sr-only">Toggle Dropdown</span></button>
    <ul class="dropdown-menu" role="menu" id="export-menu">
        <li id="export-to-pdf">
        <a href="{{url('/teachers/excel')}}" class="btn">Download Word</a>
        </li>
        <li role="separator" class="divider"></li>
        <li id="import-to-pdf"><a href="">Import Word FIle</a></li>
    </ul>
</div>




  <a class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('teachers.create') }}"><i class="fa fa-plus-circle"
    ></i>  Add New Teacher</a>

     <h1 >Teacher</h1>


</section>

    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('teachers.table')
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
@endsection

