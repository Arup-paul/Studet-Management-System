<!-- Class  Field -->
<div class="form-group col-sm-4">
    <select name="class_id" id="class_id" class="form-control">
        <option value="">Select Class</option>
        @foreach($class as $c)
          <option value="{{$c->id}}" @if(!empty($classScheduling->class_id) && $classScheduling->class_id == $c->id) selected="" @endif>{{$c->class_name}}</option>
        @endforeach
    </select>
</div>

<!-- Course  Field -->
<div class="form-group col-sm-4">
    <select name="course_id" id="course_id" class="form-control">
        <option value="">Select Course</option>
        @foreach($course as $c)
          <option value="{{$c->id}}" @if(!empty($classScheduling->course_id) && $classScheduling->course_id == $c->id) selected="" @endif>{{$c->course_name}}</option>
        @endforeach
    </select>
</div>


<!-- Level  Field -->
<div class="form-group col-sm-4">
    <select name="level_id" id="level_id" class="form-control">
        <option value="">Select Level</option>
        {{-- @foreach($level as $l)
          <option value="{{$l->id}}" @if(!empty($classScheduling->level_id) && $classScheduling->level_id == $l->id) selected="" @endif>{{$l->level}}</option>
        @endforeach --}}

    </select>
</div>



<!-- Shift  Field -->
<div class="form-group col-sm-4">
    <select name="shift_id" id="shift_id" class="form-control">
        <option value="">Select Shift</option>
         @foreach($shift as $s)
          <option value="{{$s->id}}" @if(!empty($classScheduling->shift_id) && $classScheduling->shift_id == $s->id) selected="" @endif>{{$s->shift}}</option>
        @endforeach
    </select>
</div>

<!-- Classroom  Field -->
<div class="form-group col-sm-4">
    <select name="classroom_id" id="classroom_id" class="form-control">
        <option value="">Select Classroom</option>
         @foreach($classroom as $c)
          <option value="{{$c->id}}" @if(!empty($classScheduling->classroom_id) && $classScheduling->classroom_id == $c->id) selected="" @endif>{{$c->classroom_name}} __ {{$c->classroom_code}}</option>
        @endforeach
    </select>
</div>

<!-- Batch  Field -->
<div class="form-group col-sm-4">
    <select name="batch_id" id="batch_id" class="form-control">
        <option value="">Select Batch</option>
         @foreach($batch as $b)
          <option value="{{$b->id}}" @if(!empty($classScheduling->batch_id) && $classScheduling->batch_id == $b->id) selected="" @endif>{{$b->batch}}</option>
        @endforeach
    </select>
</div>

<!-- Day  Field -->
<div class="form-group col-sm-4">
    <select name="day_id" id="day_id" class="form-control">
        <option value="">Select Day</option>
         @foreach($day as $d)
          <option value="{{$d->id}}" @if(!empty($classScheduling->day_id) && $classScheduling->day_id == $d->id) selected="" @endif>{{$d->name}}</option>
        @endforeach
    </select>
</div>

<!-- Day  Field -->
<div class="form-group col-sm-4">
    <select name="semester_id" id="semester_id" class="form-control">
        <option value="">Select Semester</option>
         @foreach($semester as $s)
          <option value="{{$s->id}}" @if(!empty($classScheduling->semester_id) && $classScheduling->semester_id == $s->id) selected="" @endif>{{$s->semester_name}} __ {{$s->semester_code}}</option>
        @endforeach
    </select>
</div>

<!-- Time  Field -->
<div class="form-group col-sm-6">
     <select name="time_id" id="time_id" class="form-control">
        <option value="">Select Time</option>
         @foreach($time as $t)
          <option value="{{$t->id}}" @if(!empty($classScheduling->time_id) && $classScheduling->time_id == $t->id) selected="" @endif>{{$t->time}}</option>
        @endforeach
    </select>
</div>

 <!-- Teacher  Field -->
<div class="form-group col-sm-6">
    <select name="teacher_id" id="teacher" class="form-control">
        <option value="">Select Teacher</option>
         @foreach($teacher as $t)
          <option value="{{$t->id}}" @if(!empty($classScheduling->teacher_id) && $classScheduling->teacher_id == $t->id) selected="" @endif>{{$t->first_name}} {{$t->last_name}}</option>
        @endforeach
    </select>
</div>

<!-- Start Time  Field -->
<div class="form-group col-sm-6">
        <label>Start Date</label>
       {!! Form::text('start_time', null, ['class' => 'form-control','id'=>'start_time']) !!}
</div>
<!-- end time field -->
<div class="form-group col-sm-6">
     <label>End Date</label>
        {!! Form::text('end_time', null, ['class' => 'form-control','id'=>'end_time']) !!}
</div>




<!-- Status Field -->
<div class="form-group col-sm-4">
    {!! Form::label('status', 'Status:') !!}
        {!! Form::hidden('status', 0) !!}
        {!! Form::checkbox('status', '1', null) !!}

</div>


<!-- Submit Field -->
</div>
@push('scripts')
<script>
      $('#start_time').datetimepicker({
          format: 'YYYY-MM-DD',
          useCurrent:false
      });
      $('#end_time').datetimepicker({
          format: 'YYYY-MM-DD',
          useCurrent:false
      });


    //course to level select
      $('#course_id').on('change',function(e){
        var course_id = e.target.value;
        console.log(course_id);
         $('#level_id').empty();
          $.get('/dynamicLevel?course_id='+course_id,function(data){
              $.each(data,function(index,lev){
                 $('#level_id').append('<option value="'+lev.id+'"    >'+lev.level+'</option>')
              });
        });
      });

</script>
@endpush




