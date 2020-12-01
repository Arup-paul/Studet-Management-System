<div class="table-responsive">
    <table class="table" id="classAssignings-table">
        <thead>
            <tr>
        <th>Teacher Name</th>
        <th>Course</th>
        <th>Semester</th>
        <th>Details</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($classAssignings as $classAssigning)
            <tr>
                <td>{{ $classAssigning->first_name }} {{ $classAssigning->last_name }}</td>
            <td>{{ $classAssigning->course_name }}</td>
            <td>{{ $classAssigning->semester_name }}</td>
            <td>{{ $classAssigning->level }} | {{ $classAssigning->time }} - {{ $classAssigning->name }} | Batch {{ $classAssigning->batch }} | Shift - {{ $classAssigning->shift }} </td>
                <td>
                    {!! Form::open(['route' => ['classAssignings.destroy', $classAssigning->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('classAssignings.show', [$classAssigning->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('classAssignings.edit', [$classAssigning->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$classAssignings->links()}}
</div>
