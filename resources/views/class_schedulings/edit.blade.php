@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Class Scheduling
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($classScheduling, ['route' => ['classSchedulings.update', $classScheduling->id], 'method' => 'patch']) !!}

                        @include('class_schedulings.fields')
                        <div class="form-group col-sm-12">
                            {!! Form::submit('Updated Class Scheduled', ['class' => 'btn btn-info']) !!}
                            <a href="{{ route('classSchedulings.index') }}" class="btn btn-warning">Cancel</a>
                        </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection

