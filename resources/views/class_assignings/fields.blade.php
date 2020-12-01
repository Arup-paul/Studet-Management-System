<div class="input-group col-md-12 input_fields_wrap">
    <input type="hidden" name="id" id="">
    <select name="teacher_id" id="" class="form-control" style="width: 50%;margin-top:10px; float:right;">
    <option value="0" selected="true" disabled="true">Select Teacher</option>
      @foreach($teacher  as $teach)
    <option value="{{$teach->id}}">  {{$teach->first_name}} {{$teach->last_name}}</option>
    @endforeach

</select>
</div>
<div class="table-responsive">
    <table class="table" id="classAssingingTable">
         <tbody>
             @foreach($classSchedulings as $classSchedule)


                  <tr>
                  <td><input type="checkbox" name="multiclass[]" value="{{$classSchedule->id}}"></td>
                  <td>{!! $classSchedule->course->course_name!!}</td>

                  <td>{!! $classSchedule->class->class_name!!}</td>
                  <td>
                    @if( $classSchedule->level)
                    {!! $classSchedule->level->level!!}
                    @endif
                   </td>
                  <td>{!! $classSchedule->shift->shift!!}</td>
                  <td>{!! $classSchedule->classroom->classroom_name!!}</td>
                  <td>{!! $classSchedule->batch->batch!!}</td>
                  <td>{!! $classSchedule->batch->batch!!}</td>
                  <td>{!! $classSchedule->semester->semester_name!!}</td>
                <td>{!! date('d-m-Y', strtotime($classSchedule->start_time))!!}</td>
                <td>{!! date('d-m-Y', strtotime($classSchedule->end_time))!!}</td>
                  </tr>
             @endforeach
         </tbody>
    </table>
</div>
<div class="form-group col-sm-12">
    {!! Form::submit('Generate Class Assign', ['class' => 'btn btn-success']) !!}
    <a href="{{ route('classAssignings.index') }}" class="btn btn-default">Cancel</a>
</div>





