<?php

namespace App\Http\Controllers;

use Flash;
use Response;
use App\Models\Status;
use App\Models\Teacher;
use  PDF;
use Illuminate\Http\Request;
use App\Models\ClassAssigning;
use App\Models\ClassScheduling;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\AppBaseController;
use App\Repositories\ClassAssigningRepository;
use App\Http\Requests\CreateClassAssigningRequest;
use App\Http\Requests\UpdateClassAssigningRequest;

class ClassAssigningController extends AppBaseController
{
    /** @var  ClassAssigningRepository */
    private $classAssigningRepository;

    public function __construct(ClassAssigningRepository $classAssigningRepo)
    {
        $this->classAssigningRepository = $classAssigningRepo;
    }

    /**
     * Display a listing of the ClassAssigning.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {

        $classAssignings =  ClassAssigning::join('class_scheduling','class_scheduling.id', '=','class_assignings.class_schedule_id')
        ->join('teachers','teachers.id', '=','class_assignings.teacher_id')
        ->join('courses','courses.id', '=' , 'class_scheduling.course_id')
        ->join('semesters','semesters.id', '=' , 'class_scheduling.semester_id')
        ->join('levels','levels.id', '=' , 'class_scheduling.level_id')
        ->join('times','times.id', '=' , 'class_scheduling.time_id')
        ->join('days','days.id', '=' , 'class_scheduling.day_id')
        ->join('batches','batches.id', '=' , 'class_scheduling.batch_id')
        ->join('shifts','shifts.id', '=' , 'class_scheduling.shift_id')
        ->paginate(10);



        return view('class_assignings.index')
            ->with('classAssignings', $classAssignings);
    }

    /**
     * Show the form for creating a new ClassAssigning.
     *
     * @return Response
     */
    public function create()
    {
        $classSchedulings = ClassScheduling::with(['batch','class','course','day','level','semester','shift','time','classroom' ])->get();
        $teacher = Teacher::get();
        return view('class_assignings.create',compact('classSchedulings','teacher'));
    }

    /**
     * Store a newly created ClassAssigning in storage.
     *
     * @param CreateClassAssigningRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {

        $input = $request->all();


      $validator = Validator::make($input,[
        'teacher_id' => 'required',
        'multiclass' => 'required  ',
       ]);

       if($validator->fails()){
           return redirect()->back()->withErrors($validator)->withInput();
       }

        $teacher = new Status;
        $teacher->teacher_id = $request->teacher_id;

        $status_id = $teacher->save();

        if($status_id != 0 ){
            foreach($request->multiclass as $key => $teach){
                $data2 = array('teacher_id' => $request->teacher_id,
                 'class_schedule_id' => $request->multiclass[$key]);

                //  $checkExist = ClassAssigning::where('teacher_id',$request->teacher_id)->first();

                //  $chk = ClassAssigning::where('class_schedule_id',$request->multiclass)->first();

                //  $r = ($checkExist ||  $chk);



                //   if($r){
                //       if($checkExist){
                //         Flash::error('Class Assinging for this teacher already exist');
                //       }else if($chk){
                //         Flash::error('Class Assinging Schedule already exist');
                //       }
                //     return redirect(route('classAssignings.index'));
                //   }

                  ClassAssigning::insert($data2);
            }
        }


        Flash::success('Class Assigning Generated successfully.');

        return redirect(route('classAssignings.index'));
    }

    /**
     * Display the specified ClassAssigning.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $classAssigning = $this->classAssigningRepository->find($id);

        if (empty($classAssigning)) {
            Flash::error('Class Assigning not found');

            return redirect(route('classAssignings.index'));
        }

        return view('class_assignings.show')->with('classAssigning', $classAssigning);
    }

    /**
     * Show the form for editing the specified ClassAssigning.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $classAssigning = $this->classAssigningRepository->find($id);

        if (empty($classAssigning)) {
            Flash::error('Class Assigning not found');

            return redirect(route('classAssignings.index'));
        }

        return view('class_assignings.edit')->with('classAssigning', $classAssigning);
    }

    //pdf generator
    public function pdfGenerator(Request $request)  {
        $classAssignings = ClassAssigning::all();
        $classAssignings =  ClassAssigning::join('class_scheduling','class_scheduling.id', '=','class_assignings.class_schedule_id')
        ->join('teachers','teachers.id', '=','class_assignings.teacher_id')
        ->join('courses','courses.id', '=' , 'class_scheduling.course_id')
        ->join('semesters','semesters.id', '=' , 'class_scheduling.semester_id')
        ->join('levels','levels.id', '=' , 'class_scheduling.level_id')
        ->join('times','times.id', '=' , 'class_scheduling.time_id')
        ->join('days','days.id', '=' , 'class_scheduling.day_id')
        ->join('batches','batches.id', '=' , 'class_scheduling.batch_id')
        ->join('shifts','shifts.id', '=' , 'class_scheduling.shift_id')
        ->get();

     //   return view('class_assignings.pdf',compact('classAssignings'));

        $dompdf = PDF::loadview('class_assignings.pdf',['classAssignings' => $classAssignings]);
        $dompdf->setPaper('A4','landscape');
        $dompdf->stream();
        return $dompdf->download('class_assign.pdf');
     }

    /**
     * Update the specified ClassAssigning in storage.
     *
     * @param int $id
     * @param UpdateClassAssigningRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClassAssigningRequest $request)
    {
        $classAssigning = $this->classAssigningRepository->find($id);

        if (empty($classAssigning)) {
            Flash::error('Class Assigning not found');

            return redirect(route('classAssignings.index'));
        }

        $classAssigning = $this->classAssigningRepository->update($request->all(), $id);

        Flash::success('Class Assigning updated successfully.');

        return redirect(route('classAssignings.index'));
    }

    /**
     * Remove the specified ClassAssigning from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $classAssigning = $this->classAssigningRepository->find($id);

        if (empty($classAssigning)) {
            Flash::error('Class Assigning not found');

            return redirect(route('classAssignings.index'));
        }

        $this->classAssigningRepository->delete($id);

        Flash::success('Class Assigning deleted successfully.');

        return redirect(route('classAssignings.index'));
    }
}
