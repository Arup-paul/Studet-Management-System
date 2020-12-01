<div class="table-responsive">
    <table class="table" id="admissions-table">
        <thead>
            <tr>
        <th> Name</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Faculty</th>
        <th>Department</th>
        <th>Batch</th>
        <th>Image</th>
       <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($admissions as $admission)
            <tr>
            <td>{{ $admission->first_name }} {{ $admission->last_name }}</td>
            <td>{{ $admission->gender }}</td>
            <td>{{ $admission->email }}</td>
            <td>{{ $admission->phone }}</td>
            <td>
                @if($admission->faculty)
                {{ $admission->faculty->faculty_name }}
                @endif
            </td>
            <td>
                 @if($admission->department)
                {{ $admission->department->department_name }}
                @endif
            </td>
            <td>
                 @if($admission->batch)
                {{ $admission->batch->batch  }}
                @endif
            </td>
             <td><img src="{{asset('images/student_images/'.$admission->image) }}" width="50px" alt=""></td>
            <td>
                @if($admission->status == 1)
                <span class="badge btn-success">Active</span>
                @elseif($admission->status == 0)
                <span class="badge btn-danger">InActive</span>
                @endif
            </td>
                <td>
                    {!! Form::open(['route' => ['admissions.destroy', $admission->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admissions.show', [$admission->id]) }}" class='btn btn-warning btn-xs'><i class="glyphicon glyphicon-eye-open"></i>view</a>
                        <a href="{{ route('admissions.edit', [$admission->id]) }}" class='btn btn-info btn-xs'><i class="glyphicon glyphicon-edit"></i>Edit</a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
