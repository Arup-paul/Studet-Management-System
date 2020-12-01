
<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name', 'Last Name:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Father Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('father_name', 'Father Name:') !!}
    {!! Form::text('father_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Father Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('father_phone', 'Father Phone:') !!}
    {!! Form::text('father_phone', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Mother Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mother_name', 'Mother Name:') !!}
    {!! Form::text('mother_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gender', 'Gender:') !!}
    <label for="">
            <input type="radio" name="gender" id="gender" value="Male" required checked>Male
        </label>
        <label for="">
            <input type="radio" name="gender" id="gender" value="Female" required >Female
        </label>
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Dob Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dob', 'Date Of Birth:') !!}
    {!! Form::text('dob', null, ['class' => 'form-control','id'=>'dob']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#dob').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-12 col-lg-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Current Address Field -->
<div class="form-group col-sm-12 col-lg-6">
    {!! Form::label('current_address', 'Current Address:') !!}
    {!! Form::textarea('current_address', null, ['class' => 'form-control']) !!}
</div>

<!-- Nationality Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nationality', 'Nationality:') !!}
    {!! Form::text('nationality', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Passport Field -->
<div class="form-group col-sm-6">
    {!! Form::label('passport', 'Passport:') !!}
    {!! Form::text('passport', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>




<!-- Dateregistared Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dateregistared', 'Date Registared:') !!}
    <input type="text" name="dateregistared" class="form-control" id="dateregistared" value="<?php echo date('Y-m-d') ?>">
</div>

@push('scripts')
    <script type="text/javascript">
        $('#dateregistared').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush


{{-- <!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div> --}}


{{-- student username and password --}}
<input type="hidden" name="username" id="username" value="{{$rand_username_password}}">
<input type="hidden" name="password" id="password" value="{{$rand_username_password}}">

{{-- student username and password --}}

<!-- Class Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('department_id', 'Department:') !!}
     <select name="department_id" id="department_id" class="form-control">
         <option value="0" selected="true" disabled="true">Choose department</option>
         @foreach($departments as $department)
     <option value="{{$department->id}}" @if(!empty($admission->department_id) && $admission->department_id == $department->id) selected="" @endif>{{$department->department_name}}</option>
         @endforeach
     </select>

</div>

<!-- Class Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('faculty_id', 'Faculty Name:') !!}
     <select name="faculty_id" id="faculty_id" class="form-control">
         <option value="0" selected="true" disabled="true">Choose Faculty</option>
           @foreach($faculties as $faculty)
     <option value="{{$faculty->id}}" @if(!empty($admission->faculty_id) && $admission->faculty_id == $faculty->id) selected="" @endif>{{$faculty->faculty_name}}</option>
         @endforeach
     </select>

</div>

<!-- Class Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('batch_id', 'Batch:') !!}
     <select name="batch_id" id="batch_id" class="form-control">
         <option value="0" selected="true" disabled="true">Choose Batch</option>
           @foreach($batches as $batch)
         <option value="{{$batch->id}}" @if(!empty($admission->batch_id) && $admission->batch_id == $batch->id) selected="" @endif>{{$batch->batch}}</option>
         @endforeach
     </select>

</div>



<!-- Image Field -->
<div class="form-group col-sm-6">
     @if($admission)
    <img src="{{asset('images/admission_images/'.$admission->image) }}" width="50px" alt="">
    @endif
    {!! Form::label('image', 'Image:') !!}
    <input type="file" name="image" id="image" class="form-control">
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
        {!! Form::hidden('status', 0) !!}
        {!! Form::checkbox('status', '1', null) !!}
</div>


