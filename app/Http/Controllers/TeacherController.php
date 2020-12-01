<?php

namespace App\Http\Controllers;

use PDF;
use Flash;
use Response;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Imports\TeacherImport;
use App\Exports\Teacher_export;
use Maatwebsite\Excel\Facades\Excel;
use App\Repositories\TeacherRepository;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;

class TeacherController extends AppBaseController
{
    /** @var  TeacherRepository */
    private $teacherRepository;

    public function __construct(TeacherRepository $teacherRepo)
    {
        $this->teacherRepository = $teacherRepo;
    }

    /**
     * Display a listing of the Teacher.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $teachers = $this->teacherRepository->all();

        return view('teachers.index')
            ->with('teachers', $teachers);
    }

    /**
     * Show the form for creating a new Teacher.
     *
     * @return Response
     */
    public function create()
    {
        $teacher = array();
        return view('teachers.create', compact('teacher'));
    }

    /**
     * Store a newly created Teacher in storage.
     *
     * @param CreateTeacherRequest $request
     *
     * @return Response
     */
    public function store(CreateTeacherRequest $request)
    {
        $input = $request->all();

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/teacher_images'), $filename);
            $image = $filename;
        }

        $teacher = new Teacher;

        $teacher->first_name = $request->first_name;
        $teacher->last_name = $request->last_name;
        $teacher->gender = $request->gender;
        $teacher->email = $request->email;
        $teacher->dob = $request->dob;
        $teacher->phone = $request->phone;
        $teacher->address = $request->address;
        $teacher->nationality = $request->nationality;
        $teacher->passport = $request->passport;
        $teacher->status = $request->status;
        $teacher->dateregistared = $request->dateregistared;
        $teacher->user_id = $request->user_id;
        $teacher->image = $image;
        $teacher->save();

        //$teacher = $this->teacherRepository->create($input);

        Flash::success('Teacher saved successfully.');

        return redirect(route('teachers.index'));
    }

    /**
     * Display the specified Teacher.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $teacher = $this->teacherRepository->find($id);

        if (empty($teacher)) {
            Flash::error('Teacher not found');

            return redirect(route('teachers.index'));
        }

        return view('teachers.show')->with('teacher', $teacher);
    }

    /**
     * Show the form for editing the specified Teacher.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $teacher = $this->teacherRepository->find($id);

        if (empty($teacher)) {
            Flash::error('Teacher not found');

            return redirect(route('teachers.index'));
        }

        return view('teachers.edit')->with('teacher', $teacher);
    }

    /**
     * Update the specified Teacher in storage.
     *
     * @param int $id
     * @param UpdateTeacherRequest $request
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $input = $request->all();
        // $teacher = Teacher::find($id);
        $teacher = Teacher::find($id);

        $teacher->first_name = $request->first_name;
        $teacher->last_name = $request->last_name;
        $teacher->gender = $request->gender;
        $teacher->email = $request->email;
        $teacher->dob = $request->dob;
        $teacher->phone = $request->phone;
        $teacher->address = $request->address;
        $teacher->nationality = $request->nationality;
        $teacher->passport = $request->passport;
        $teacher->status = $request->status;
        $teacher->dateregistared = $request->dateregistared;
        $teacher->user_id = $request->user_id;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            if (file_exists(public_path('teacher_images/' . $teacher->image)) and !empty($teacher->image)) {
                @unlink(public_path('images/teacher_images/' . $teacher->image));
            }

            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/teacher_images'), $filename);

            $teacher->image = $filename;

        }

        $teacher->save();

        Flash::success('Teacher updated successfully.');

        return redirect(route('teachers.index'));

    }

    public function pdfGenerator()
    {
        $teachers = $this->teacherRepository->all();
        $dompdf = PDF::loadview('teachers.pdf', ['teachers' => $teachers]);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->stream();
        return $dompdf->download('teacher.pdf');
    }

    /**
     * Remove the specified Teacher from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy(Teacher $teacher)
    {
        if (file_exists(public_path('teacher_images/' . $teacher->image)) and !empty($teacher->image)) {
            @unlink(public_path('teacher_images/' . $teacher->image));
        }
        $teacher->delete();

        Flash::success('Teacher deleted successfully.');

        return redirect(route('teachers.index'));
    }

    //Teacher Excel Part
    public function ExcelExport_xlsx()
    {
        return Excel::download(new Teacher_export, 'teacher.xlsx');
    }

    public function ExcelExport_xls()
    {
        return Excel::download(new Teacher_export, 'teacher.xls');
    }
    public function ExcelExport_csv()
    {
        return Excel::download(new Teacher_export, 'teacher.csv');
    }

    //Teacher Import

    public function ExcelImport(Request $request)  {
        $data = $request->all();

        $this->validate($request,[
            'file' => 'required|mimes:csv,xlx,xlsx'
        ]);

        $file = $request->file('file');

        $file_name = rand() .$file->getClientOriginalName();
        $file->move('Teacher_Excel_File',$file_name);

        Excel::import(new TeacherImport, public_path('/Teacher_Excel_File/'.$file_name));

        Flash::success('Teacher Saved successfully.');

        return redirect(route('teachers.index'));

     }

     public function TeacherPrint($id)  {
        $teacher = $this->teacherRepository->find($id);

        if (empty($teacher)) {
            Flash::error('Teacher not found');

            return redirect(route('teachers.index'));
        }

        return view('teachers.print')->with('teacher', $teacher);
      }

      public function updateStatus(Request $request)  {
          $teacher = Teacher::findOrFail($request->id);
          $teacher->status = $request->status;
          $teacher->save();
            return response()->json([
                 'message' => 'Teacher Status Updated Succesfully!'
            ]);
       }

}
