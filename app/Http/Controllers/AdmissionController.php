<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateAdmissionRequest;
use App\Http\Requests\UpdateAdmissionRequest;
use App\Models\Admission;
use App\Models\Batch;
use App\Models\Department;
use App\Models\Faculty;
use App\Models\Roll;
use App\Repositories\AdmissionRepository;
use Flash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Response;

class AdmissionController extends AppBaseController
{
    /** @var  AdmissionRepository */
    private $admissionRepository;

    public function __construct(AdmissionRepository $admissionRepo)
    {
        $this->admissionRepository = $admissionRepo;
    }

    /**
     * Display a listing of the Admission.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $admissions = Admission::with(['batch', 'department', 'faculty'])->get();

        return view('admissions.index')
            ->with('admissions', $admissions);
    }

    /**
     * Show the form for creating a new Admission.
     *
     * @return Response
     */
    public function create()
    {
        $student_id = Roll::max('id');
        $faculties = Faculty::all();
        $departments = Department::all();
        $batches = Batch::all();
        $admission = [];

        $rand_username_password = mt_rand(11160930011 . $student_id, 11160930011 . $student_id);
        return view('admissions.create', compact('rand_username_password', 'student_id', 'faculties', 'departments', 'batches', 'admission'));
    }

    /**
     * Store a newly created Admission in storage.
     *
     * @param CreateAdmissionRequest $request
     *
     * @return Response
     */
    public function store(CreateAdmissionRequest $request)
    {
        $input = $request->all();
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/student_images'), $filename);
            $image = $filename;
        }

        $student = new Admission;

        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->father_name = $request->father_name;
        $student->mother_name = $request->mother_name;
        $student->father_phone = $request->father_phone;
        $student->gender = $request->gender;
        $student->email = $request->email;
        $student->dob = $request->dob;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->current_address = $request->current_address;
        $student->nationality = $request->nationality;
        $student->passport = $request->passport;
        $student->status = $request->status;
        $student->dateregistared = $request->dateregistared;
        $student->user_id = Auth::user()->id;
        $student->department_id = $request->department_id;
        $student->faculty_id = $request->faculty_id;
        $student->batch_id = $request->batch_id;
        $student->image = $image;

        if ($student->save()) {
            $student_id = $student->id;
            $username = $student->username;
            $password = $student->password;

            Roll::insert(['student_id' => $student_id, 'username' => $request->username, 'password' => $request->password]);
        }

        // $admission = $this->admissionRepository->create($input);

        Flash::success('Admission saved successfully.');

        return redirect(route('admissions.index'));
    }

    /**
     * Display the specified Admission.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        // $admission = $this->admissionRepository->find($id);
        $admission = Admission::with(['batch', 'department', 'faculty'])->find($id);


        if (empty($admission)) {
            Flash::error('Admission not found');

            return redirect(route('admissions.index'));
        }

        return view('admissions.show')->with('admission', $admission);
    }

    /**
     * Show the form for editing the specified Admission.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $student_id = Roll::max('id');
        $faculties = Faculty::all();
        $departments = Department::all();
        $batches = Batch::all();

        $rand_username_password = mt_rand(11160930011 . $student_id, 11160930011 . $student_id);

        $admission = $this->admissionRepository->find($id);

        if (empty($admission)) {
            Flash::error('Admission not found');

            return redirect(route('admissions.index'));
        }

        return view('admissions.edit', compact('rand_username_password', 'admission', 'student_id', 'faculties', 'departments', 'batches'));

    }

    /**
     * Update the specified Admission in storage.
     *
     * @param int $id
     * @param UpdateAdmissionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAdmissionRequest $request)
    {
        //$admission = $this->admissionRepository->find($id);

        $student = Admission::find($id);

        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->father_name = $request->father_name;
        $student->mother_name = $request->mother_name;
        $student->father_phone = $request->father_phone;
        $student->gender = $request->gender;
        $student->email = $request->email;
        $student->dob = $request->dob;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->current_address = $request->current_address;
        $student->nationality = $request->nationality;
        $student->passport = $request->passport;
        $student->status = $request->status;
        $student->dateregistared = $request->dateregistared;
        $student->user_id = Auth::user()->id;
        $student->department_id = $request->department_id;
        $student->faculty_id = $request->faculty_id;
        $student->batch_id = $request->batch_id;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            if (file_exists(public_path('images/student_images/' . $student->image)) and !empty($student->image)) {
                @unlink(public_path('images/student_images/' . $student->image));
            }

            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/student_images/'), $filename);

            $student->image = $filename;

        }
        $student->save();


        Flash::success('Admission updated successfully.');

        return redirect(route('admissions.index'));
    }

    /**
     * Remove the specified Admission from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $admission = $this->admissionRepository->find($id);

        if (empty($admission)) {
            Flash::error('Admission not found');

            return redirect(route('admissions.index'));
        }

        $this->admissionRepository->delete($id);

        Flash::success('Admission deleted successfully.');

        return redirect(route('admissions.index'));
    }
}
