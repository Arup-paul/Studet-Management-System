<!-- Level Field -->
<div class="form-group col-sm-6">
    {!! Form::label('level', 'Level:') !!}
    {!! Form::text('level', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Course Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_id', 'Course Name:') !!}
   <select name="course_id" class="form-control" id="course_id">
       <option value="">Select Course</option>
       @foreach($courses as $course)
       <option value="{{$course->id}}" @if(!empty($level->course_id) && $level->course_id == $course->id) selected="" @endif >{{$course->course_name}}</option>
       @endforeach
       {{-- @if(!empty($productData['brand_id']) && $productData['brand_id'] == $brand['id']) selected="" @endif --}}
   </select>
</div>

<!-- Level Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('level_description', 'Level Description:') !!}
    {!! Form::textarea('level_description', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('levels.index') }}" class="btn btn-default">Cancel</a>
</div>
