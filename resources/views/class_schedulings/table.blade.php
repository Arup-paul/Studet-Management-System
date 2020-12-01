<div class="table-responsive">
    <table class="table" id="classSchedulings-table">
        <thead>
            <tr>
                <th>Course </th>
                <th>Class </th>
                <th>Level</th>
                <th>Shift</th>
                <th>Classroom</th>
                <th>Batch</th>
                <th>Semester</th>
                <th>Day</th>
                <th>Time</th>
                <th>Teacher</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($classSchedulings as $classScheduling)
            <tr>
                <td>{{ $classScheduling->course->course_name }}</td>
                <td>
                    @if($classScheduling->class)
                    {{ $classScheduling->class->class_name }}
                    @endif
                </td>
            <td>
                @if($classScheduling->level)
                {{ $classScheduling->level->level }}
                @endif
            </td>
            <td>{{ $classScheduling->shift->shift }}</td>
            <td>{{ $classScheduling->classroom->classroom_name }}</td>
            <td>{{ $classScheduling->batch->batch }}</td>
            <td>{{ $classScheduling->semester->semester_name }}</td>
            <td>{{ $classScheduling->day->name }}</td>
            <td>{{ $classScheduling->time->time }}</td>
            <td>{{ $classScheduling->teacher->first_name }} {{ $classScheduling->teacher->last_name }}</td>
            <td>{{ $classScheduling->start_time }}</td>
            <td>{{ $classScheduling->end_time }}</td>
            <td>
                  @if($classScheduling->status ==1)
                 <span class="text-success">Active</span>
                 @elseif($classScheduling->status ==0)
                  <span class="text-danger">Inactive</span>
                 @endif
                </td>
                <td>
                    {!! Form::open(['route' => ['classSchedulings.destroy', $classScheduling->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('classSchedulings.show', [$classScheduling->id]) }}" class='btn btn-warning btn-xs'><i class="glyphicon glyphicon-eye-open">View</i></a>
                        <a href="{{ route('classSchedulings.edit', [$classScheduling->id]) }}" class='btn btn-info btn-xs'><i class="glyphicon glyphicon-edit">Edit</i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
