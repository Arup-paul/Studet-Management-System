<div class="table-responsive">
    <div class="panel">
        <div class="panel-body">
            <div class="wait" id="wait"></div>
        </div>
    </div>
    <table class="table" id="teachers-table">
        <thead>
            <tr>
                <th>Name</th> 
                <th>Gender</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Dateregistared</th>
                <th>Image</th>
                <th>Status</th>
                <th colspan="3">Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach($teachers as $teacher)
            <tr>
                <td>{{ $teacher->first_name }} {{ $teacher->last_name }}</td>
                <td>{{ $teacher->gender }}</td>
                <td>{{ $teacher->email }}</td>
                <td>{{ $teacher->phone }}</td>
                <td>{{ $teacher->dateregistared }}</td>
                <td><img src="{{asset('images/teacher_images/'.$teacher->image) }}" width="50px" alt=""></td>
            <td>
                <input type="checkbox" data-id="{{$teacher->id}}" name="status" class="js-switch updateStatus" {{$teacher->status == 1 ? 'checked' : ''}}  />
            </td>
                <td>
                    {!! Form::open(['route' => ['teachers.destroy', $teacher->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a target="_blank" href="{{ route('teachers.print', [$teacher->id]) }}" class='btn btn-default btn-xs'><i class="fa fa-print"></i></a>

                        <a target="_blank" href="{{ route('teachers.show', [$teacher->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>

                        <a href="{{ route('teachers.edit', [$teacher->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>

                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>


@push('scripts')
   <script>
       $(document).ready(function(){
           $('.updateStatus').change(function(){
                let status = $(this).prop('checked') == true ? 1 : 0;
                let teacherId = $(this).data('id');

                $.ajax({
                    type:"GET",
                    dataType:"json",
                    url:"{{url('/teacher/updateStatus')}}",
                    data: {'status':status,'id':teacherId},
                    success:function(data){
                       // console.log(data.message)

                        toastr.options.closeButton = true;
                        toastr.options.closeMethod = 'fadeOut';
                        toastr.options.closeDuration = 100;
                        toastr.success(data.message);
                    }
                })
           })
       });
   </script>
@endpush
