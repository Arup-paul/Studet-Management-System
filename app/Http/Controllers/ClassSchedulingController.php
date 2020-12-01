<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateClassSchedulingRequest;
use App\Http\Requests\UpdateClassSchedulingRequest;
use App\Models\Batch;
use App\Models\Classes;
use App\Models\Classroom;
use App\Models\ClassScheduling;
use App\Models\Course;
use App\Models\Day;
use App\Models\Level;
use App\Models\Semester;
use App\Models\Shift;
use App\Models\Teacher;
use App\Models\Time;
use App\Repositories\ClassSchedulingRepository;
use Flash;
use Illuminate\Http\Request;
use Response;
use PDF;

class ClassSchedulingController extends AppBaseController
{
    /** @var  ClassSchedulingRepository */
    private $classSchedulingRepository;

    public function __construct(ClassSchedulingRepository $classSchedulingRepo)
    {
        $this->classSchedulingRepository = $classSchedulingRepo;
    }

    /**
     * Display a listing of the ClassScheduling.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {



        $title = "create Class Scheduled";

        $classSchedulings = ClassScheduling::with(['batch','class','course','day','level','semester','shift','time'])->get();

        return view('class_schedulings.index')
            ->with(compact('classSchedulings', 'title'));
    }

    public function pdfGenerator(Request $request)
    {
        $classSchedulings = ClassScheduling::with(['batch','class','course','day','level','semester','shift','time'])->get();

        //return view('class_schedulings.pdf')
          //  ->with(compact('classSchedulings'));
            $dompdf = PDF::loadview('class_schedulings.pdf',['classSchedulings' => $classSchedulings]);
            $dompdf->setPaper('A4','landscape');
            $dompdf->stream();
            return $dompdf->download('class_schedule.pdf');
    }

    /**
     * Show the form for creating a new ClassScheduling.
     *
     * @return Response
     */
    public function create()
    {
        $classScheduling = array();

        $batch = Batch::all();
        $class = Classes::all();
        $course = Course::all();
        $day = Day::all();
        $level = Level::all();
        $semester = Semester::all();
        $shift = Shift::all();
        $time = Time::all();
        $classroom = Classroom::all();
        $teacher = Teacher::all();



        return view('class_schedulings.create')->with(compact('batch', 'class', 'course', 'day', 'level', 'semester', 'shift', 'time','classroom','teacher','classScheduling'));
    }

    //dynamic level function

    public function DynamicLevel(Request $request){
       $course_id = $request->get('course_id');

       $levels = Level::where('course_id','=',$course_id)->get();


       return Response::json($levels);
     // return response()->json($levels);

    }

    /**
     * Store a newly created ClassScheduling in storage.
     *
     * @param CreateClassSchedulingRequest $request
     *
     * @return Response
     */
    public function store(CreateClassSchedulingRequest $request)
    {
        $input = $request->all();

        $classScheduling = $this->classSchedulingRepository->create($input);

        Flash::success('Class Scheduling saved successfully.');

        return redirect(route('classSchedulings.index'));
    }

    /**
     * Display the specified ClassScheduling.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $classScheduling = $this->classSchedulingRepository->find($id);

        if (empty($classScheduling)) {
            Flash::error('Class Scheduling not found');

            return redirect(route('classSchedulings.index'));
        }

        return view('class_schedulings.show')->with('classScheduling', $classScheduling);
    }

    /**
     * Show the form for editing the specified ClassScheduling.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)

    {
          $batch = Batch::all();
        $class = Classes::all();
        $course = Course::all();
        $day = Day::all();
        $level = Level::all();
        $semester = Semester::all();
        $shift = Shift::all();
        $time = Time::all();
        $classroom = Classroom::all();
        $teacher = Teacher::all();

        $classScheduling = $this->classSchedulingRepository->find($id);

        if (empty($classScheduling)) {
            Flash::error('Class Scheduling not found');

            return redirect(route('classSchedulings.index'));
        }

        return view('class_schedulings.edit')->with(compact('batch', 'class', 'course', 'day', 'level', 'semester', 'shift', 'time','classroom','teacher','classScheduling'));
    }

    /**
     * Update the specified ClassScheduling in storage.
     *
     * @param int $id
     * @param UpdateClassSchedulingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClassSchedulingRequest $request)
    {
        $classScheduling = $this->classSchedulingRepository->find($id);

        if (empty($classScheduling)) {
            Flash::error('Class Scheduling not found');

            return redirect(route('classSchedulings.index'));
        }

        $classScheduling = $this->classSchedulingRepository->update($request->all(), $id);

        Flash::success('Class Scheduling updated successfully.');

        return redirect(route('classSchedulings.index'));
    }

    /**
     * Remove the specified ClassScheduling from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $classScheduling = $this->classSchedulingRepository->find($id);

        if (empty($classScheduling)) {
            Flash::error('Class Scheduling not found');

            return redirect(route('classSchedulings.index'));
        }

        $this->classSchedulingRepository->delete($id);

        Flash::success('Class Scheduling deleted successfully.');

        return redirect(route('classSchedulings.index'));
    }




}
