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
        <caption style="margin-top: 20px;text-align:center;color:green;font-weight:700;">Class Scheduling PDF Pdf</caption>
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
            </tr>
        </thead>
        <tbody>
        @foreach($classSchedulings as $classScheduling)
            <tr>
                <td class="pull" style="width:8%">{{ $classScheduling->course->course_name }}</td>
                <td class="pull" style="width:8%">
                    @if($classScheduling->class)
                    {{ $classScheduling->class->class_name }}
                    @endif
                </td>
            <td class="pull" style="width:8%">
                @if($classScheduling->level)
                {{ $classScheduling->level->level }}
                @endif
            </td>
            <td class="pull" style="width:8%">{{ $classScheduling->shift->shift }}</td>
            <td class="pull" style="width:8%">{{ $classScheduling->classroom->classroom_name }}</td>
            <td class="pull" style="width:8%">{{ $classScheduling->batch->batch }}</td>
            <td class="pull" style="width:8%">{{ $classScheduling->semester->semester_name }}</td>
            <td class="pull" style="width:8%">{{ $classScheduling->day->name }}</td>
            <td class="pull" style="width:8%">{{ $classScheduling->time->time }}</td>
            <td class="pull" style="width:8%">{{ $classScheduling->teacher->first_name }} {{ $classScheduling->teacher->last_name }}</td>
            <td class="pull" style="width:8%">{{ $classScheduling->start_time }}</td>
            <td class="pull" style="width:8%">{{ $classScheduling->end_time }}</td>


            </tr>
        @endforeach
        </tbody>
    </table>
</div>
