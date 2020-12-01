<!-- Student Id Field -->
<div class="form-group">
    {!! Form::label('student_id', 'Student Id:') !!}
    <p>{{ $attendence->student_id }}</p>
</div>

<!-- Class Id Field -->
<div class="form-group">
    {!! Form::label('class_id', 'Class Id:') !!}
    <p>{{ $attendence->class_id }}</p>
</div>

<!-- Subject Id Field -->
<div class="form-group">
    {!! Form::label('subject_id', 'Subject Id:') !!}
    <p>{{ $attendence->subject_id }}</p>
</div>

<!-- Teacher Id Field -->
<div class="form-group">
    {!! Form::label('teacher_id', 'Teacher Id:') !!}
    <p>{{ $attendence->teacher_id }}</p>
</div>

<!-- Attendace Status Field -->
<div class="form-group">
    {!! Form::label('attendace_status', 'Attendace Status:') !!}
    <p>{{ $attendence->attendace_status }}</p>
</div>

