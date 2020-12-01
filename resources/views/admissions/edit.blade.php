@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Admission
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($admission, ['route' => ['admissions.update', $admission->id], 'method' => 'patch','enctype' => 'multipart/form-data']) !!}

                        @include('admissions.fields')
                        <!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Update', ['class' => 'btn btn-success']) !!}
    <a href="{{ route('admissions.index') }}" class="btn btn-default">Cancel</a>
</div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
