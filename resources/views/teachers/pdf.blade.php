<style>
    .pull{
        text-align: center;
        border:2px solid;
            }
            th{
                text-align: center;
            }
            table{
              align-content: center;
            }
            h1 h2 h3 h4 h5 h6{
                margin: 0;
                padding: 0;
            }


</style>

<div class="table-responsive">
    <h1 style="float: right;color:#ff24dacb;margin-top:20px;">Student Management System</h1>
    <h5><i>Name:</i> EAST DELTA University</h5>
    <h5><i>Location:</i> Chattogram</h5>
    <h6><i>Email:</i>eastdelta@edu.bd</h6>
    <h6><i>Phone:</i> 031 -77777</h6>

    <table class="table table-bordered table-responsive" id="teachers-table">
        <caption style="margin-top: 20px;text-align:center;color:green;font-weight:700;">All Teacher List Pdf</caption>
        <thead>
            <tr>
                <th>Name</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Dateregistared</th>
                <th>Image</th>
          </tr>
        </thead>
        <tbody>
        @foreach($teachers as $teacher)
            <tr>
                <td class="pull" style="width:16%">{{ $teacher->first_name }} {{ $teacher->last_name }}</td>
                <td class="pull" style="width:16%">{{ $teacher->gender }}</td>
                <td class="pull" style="width:16%">{{ $teacher->email }}</td>
                <td class="pull" style="width:16%">{{ $teacher->phone }}</td>
                <td class="pull" style="width:16%">{{ $teacher->dateregistared }}</td>
                <td class="pull" style="width:16%"><img src="{{asset('images/teacher_images/'.$teacher->image) }}" width="50px" alt=""></td>

            </tr>
        @endforeach
        </tbody>
    </table>

</div>
