<!-- Semester Id Field -->
<div class="form-group">
    {!! Form::label('semester_id', 'Semester Id:') !!}
    <p>{{ $feeStructure->semester_id }}</p>
</div>

<!-- Course Id Field -->
<div class="form-group">
    {!! Form::label('course_id', 'Course Id:') !!}
    <p>{{ $feeStructure->course_id }}</p>
</div>

<!-- Level Id Field -->
<div class="form-group">
    {!! Form::label('level_id', 'Level Id:') !!}
    <p>{{ $feeStructure->level_id }}</p>
</div>

<!-- Admissionsfee Field -->
<div class="form-group">
    {!! Form::label('admissionsFee', 'Admissionsfee:') !!}
    <p>{{ $feeStructure->admissionsFee }}</p>
</div>

<!-- Semesterfee Field -->
<div class="form-group">
    {!! Form::label('semesterFee', 'Semesterfee:') !!}
    <p>{{ $feeStructure->semesterFee }}</p>
</div>

