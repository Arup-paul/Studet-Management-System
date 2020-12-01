<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAttendenceRequest;
use App\Http\Requests\UpdateAttendenceRequest;
use App\Repositories\AttendenceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AttendenceController extends AppBaseController
{
    /** @var  AttendenceRepository */
    private $attendenceRepository;

    public function __construct(AttendenceRepository $attendenceRepo)
    {
        $this->attendenceRepository = $attendenceRepo;
    }

    /**
     * Display a listing of the Attendence.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $attendences = $this->attendenceRepository->all();

        return view('attendences.index')
            ->with('attendences', $attendences);
    }

    /**
     * Show the form for creating a new Attendence.
     *
     * @return Response
     */
    public function create()
    {
        return view('attendences.create');
    }

    /**
     * Store a newly created Attendence in storage.
     *
     * @param CreateAttendenceRequest $request
     *
     * @return Response
     */
    public function store(CreateAttendenceRequest $request)
    {
        $input = $request->all();

        $attendence = $this->attendenceRepository->create($input);

        Flash::success('Attendence saved successfully.');

        return redirect(route('attendences.index'));
    }

    /**
     * Display the specified Attendence.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $attendence = $this->attendenceRepository->find($id);

        if (empty($attendence)) {
            Flash::error('Attendence not found');

            return redirect(route('attendences.index'));
        }

        return view('attendences.show')->with('attendence', $attendence);
    }

    /**
     * Show the form for editing the specified Attendence.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $attendence = $this->attendenceRepository->find($id);

        if (empty($attendence)) {
            Flash::error('Attendence not found');

            return redirect(route('attendences.index'));
        }

        return view('attendences.edit')->with('attendence', $attendence);
    }

    /**
     * Update the specified Attendence in storage.
     *
     * @param int $id
     * @param UpdateAttendenceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAttendenceRequest $request)
    {
        $attendence = $this->attendenceRepository->find($id);

        if (empty($attendence)) {
            Flash::error('Attendence not found');

            return redirect(route('attendences.index'));
        }

        $attendence = $this->attendenceRepository->update($request->all(), $id);

        Flash::success('Attendence updated successfully.');

        return redirect(route('attendences.index'));
    }

    /**
     * Remove the specified Attendence from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $attendence = $this->attendenceRepository->find($id);

        if (empty($attendence)) {
            Flash::error('Attendence not found');

            return redirect(route('attendences.index'));
        }

        $this->attendenceRepository->delete($id);

        Flash::success('Attendence deleted successfully.');

        return redirect(route('attendences.index'));
    }
}
