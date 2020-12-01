<div class="row">
    <div class="col-md-4">
        <!-- Course Id Field -->
        <div class="form-group">
            {!! Form::label('course_id', 'Course Name:') !!}
            <p>{{ $classScheduling->course->course_name }}</p>
        </div>
    </div>
          <!-- Course Id Field -->
          <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('class_id', 'Class Name:') !!}
            <p>{{ $classScheduling->class->class_name }}</p>
        </div>
    </div>
    <div class="col-md-4">
        <!-- Level Id Field -->
        <div class="form-group">
            {!! Form::label('level_id', 'Level Name:') !!}
            <p>{{ $classScheduling->level->level }}</p>
        </div>
    </div>
    <div class="col-md-4">
        <!-- Shift Id Field -->
        <div class="form-group">
            {!! Form::label('shift_id', 'Shift Name:') !!}
            <p>{{ $classScheduling->shift->shift }}</p>
        </div>
    </div>
    <div class="col-md-4">
        <!-- Classroom Id Field -->
        <div class="form-group">
            {!! Form::label('classroom_id', 'Classroom Name:') !!}
            <p>{{ $classScheduling->classroom->classroom_name }}</p>
        </div>
    </div>
    <div class="col-md-4">
        <!-- Batch Id Field -->
        <div class="form-group">
            {!! Form::label('batch_id', 'Batch Name:') !!}
            <p>{{ $classScheduling->batch->batch }}</p>
        </div>
    </div>
       <div class="col-md-4">
        <!-- Semester Field -->
        <div class="form-group">
            {!! Form::label('semester_id', 'Semester Name:') !!}
            <p>{{ $classScheduling->semester->semester_name }}</p>
        </div>
    </div>
    <div class="col-md-4">
        <!-- Day Id Field -->
        <div class="form-group">
            {!! Form::label('day_id', 'Day Name:') !!}
            <p>{{ $classScheduling->day->name }}</p>
        </div>
    </div>
    <div class="col-md-4">
        <!-- Time Id Field -->
        <div class="form-group">
            {!! Form::label('time_id', 'Time :') !!}
            <p>{{ $classScheduling->time->time }}</p>
        </div>
    </div>

    <div class="col-md-4">
        <!-- Teacher Id Field -->
        <div class="form-group">
            {!! Form::label('teacher_id', 'Teacher Name:') !!}
            <p>{{ $classScheduling->teacher->first_name }} {{ $classScheduling->teacher->last_name }}</p>
        </div>
    </div>
    <div class="col-md-4">

        <!-- Start Time Field -->
        <div class="form-group">
            {!! Form::label('start_time', 'Start Time:') !!}
            <p>{{ $classScheduling->start_time }}</p>
        </div>
    </div>

    <div class="col-md-4">
        <!-- End Time Field -->
        <div class="form-group">
            {!! Form::label('end_time', 'End Time:') !!}
            <p>{{ $classScheduling->end_time }}</p>
        </div>
    </div>
    <div class="col-md-4">
        <!-- Status Field -->
        <div class="form-group">
            {!! Form::label('status', 'Status:') !!}
            <p>  @if($classScheduling->status ==1)
                 <span class="text-success">Active</span>
                 @elseif($classScheduling->status ==0)
                  <span class="text-danger">Inactive</span>
                 @endif</p>
        </div>
    </div>

</div>
