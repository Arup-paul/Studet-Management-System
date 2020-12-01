<div class="table-responsive">
    <table class="table" id="feeStructures-table">
        <thead>
            <tr>
                <th>Semester Id</th>
        <th>Course Id</th>
        <th>Level Id</th>
        <th>Admissionsfee</th>
        <th>Semesterfee</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($feeStructures as $feeStructure)
            <tr>
                <td>{{ $feeStructure->semester_id }}</td>
            <td>{{ $feeStructure->course_id }}</td>
            <td>{{ $feeStructure->level_id }}</td>
            <td>{{ $feeStructure->admissionsFee }}</td>
            <td>{{ $feeStructure->semesterFee }}</td>
                <td>
                    {!! Form::open(['route' => ['feeStructures.destroy', $feeStructure->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('feeStructures.show', [$feeStructure->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('feeStructures.edit', [$feeStructure->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
