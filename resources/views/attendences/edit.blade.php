@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Attendence
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($attendence, ['route' => ['attendences.update', $attendence->id], 'method' => 'patch']) !!}

                        @include('attendences.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection