@extends('layouts.app')
 
@section('content')
    <section class="content-header">
        <h1>
            Batch Year
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                     {!! Form::model($batch, ['route' => ['batches.update', $batch->id], 'method' => 'patch']) !!}

                   <!-- Name Field -->
                    <div class="form-group col-md-6">
                        {!! Form::label('name', 'Batch Year:') !!}
                        {!! Form::text('batch', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                    </div>
               </div>

                    <div  >
                        {!! Form::submit('Update Batch', ['class' => 'btn btn-info']) !!}
                    </div>


                   {!! Form::close() !!}
               </div>
       </div>
   </div>
@endsection
