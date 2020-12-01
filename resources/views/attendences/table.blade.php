<div class="table-responsive">
    <table class="table" id="attendences-table">
        <thead>
            <tr>
                <th>Student Id</th>
        <th>Class Id</th>
        <th>Subject Id</th>
        <th>Teacher Id</th>
        <th>Attendace Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($attendences as $attendence)
            <tr>
                <td>{{ $attendence->student_id }}</td>
            <td>{{ $attendence->class_id }}</td>
            <td>{{ $attendence->subject_id }}</td>
            <td>{{ $attendence->teacher_id }}</td>
            <td>{{ $attendence->attendace_status }}</td>
                <td>
                    {!! Form::open(['route' => ['attendences.destroy', $attendence->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('attendences.show', [$attendence->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('attendences.edit', [$attendence->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
