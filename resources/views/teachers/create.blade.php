@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Teacher
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {{-- {!! Form::open(['route' => 'teachers.store']) !!} --}}
                <form action="{{route('teachers.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                        @include('teachers.fields')

                    {{-- {!! Form::close() !!} --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
