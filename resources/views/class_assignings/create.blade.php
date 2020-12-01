@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Class Assigning
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        @include('flash::message')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'classAssignings.store']) !!}


                        @include('class_assignings.fields')

                        <div class=""></div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
