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

    <table class="table table-bordered table-responsive" id="classAssignings-table">
        <caption style="margin-top: 20px;text-align:center;color:green;font-weight:700;">Class Assign Pdf</caption>
        <thead>
            <tr>
        <th>Teacher Name</th>
        <th>Course</th>
        <th>Semester</th>
        <th>Details</th>
            </tr>
        </thead>
        <tbody>
        @foreach($classAssignings as $classAssigning)
            <tr class="border">
                <td class="  pull" style="width:20%">{{ $classAssigning->first_name }} {{ $classAssigning->last_name }}</td>
            <td class=" pull" style="width:20%">{{ $classAssigning->course_name }}</td>
            <td class=" pull" style="width:20%">{{ $classAssigning->semester_name }}</td>
            <td class="pull" style="width:32%">{{ $classAssigning->level }} | {{ $classAssigning->time }} - {{ $classAssigning->name }} | Batch {{ $classAssigning->batch }} | Shift - {{ $classAssigning->shift }} </td>


            </tr>
        @endforeach
        </tbody>
    </table>
</div>
