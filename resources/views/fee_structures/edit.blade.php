@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Fee Structure
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($feeStructure, ['route' => ['feeStructures.update', $feeStructure->id], 'method' => 'patch']) !!}

                        @include('fee_structures.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection