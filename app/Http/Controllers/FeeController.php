<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFeeRequest;
use App\Http\Requests\UpdateFeeRequest;
use App\Repositories\FeeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class FeeController extends AppBaseController
{
    /** @var  FeeRepository */
    private $feeRepository;

    public function __construct(FeeRepository $feeRepo)
    {
        $this->feeRepository = $feeRepo;
    }

    /**
     * Display a listing of the Fee.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $fees = $this->feeRepository->all();

        return view('fees.index')
            ->with('fees', $fees);
    }

    /**
     * Show the form for creating a new Fee.
     *
     * @return Response
     */
    public function create()
    {
        return view('fees.create');
    }

    /**
     * Store a newly created Fee in storage.
     *
     * @param CreateFeeRequest $request
     *
     * @return Response
     */
    public function store(CreateFeeRequest $request)
    {
        $input = $request->all();

        $fee = $this->feeRepository->create($input);

        Flash::success('Fee saved successfully.');

        return redirect(route('fees.index'));
    }

    /**
     * Display the specified Fee.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $fee = $this->feeRepository->find($id);

        if (empty($fee)) {
            Flash::error('Fee not found');

            return redirect(route('fees.index'));
        }

        return view('fees.show')->with('fee', $fee);
    }

    /**
     * Show the form for editing the specified Fee.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $fee = $this->feeRepository->find($id);

        if (empty($fee)) {
            Flash::error('Fee not found');

            return redirect(route('fees.index'));
        }

        return view('fees.edit')->with('fee', $fee);
    }

    /**
     * Update the specified Fee in storage.
     *
     * @param int $id
     * @param UpdateFeeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFeeRequest $request)
    {
        $fee = $this->feeRepository->find($id);

        if (empty($fee)) {
            Flash::error('Fee not found');

            return redirect(route('fees.index'));
        }

        $fee = $this->feeRepository->update($request->all(), $id);

        Flash::success('Fee updated successfully.');

        return redirect(route('fees.index'));
    }

    /**
     * Remove the specified Fee from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $fee = $this->feeRepository->find($id);

        if (empty($fee)) {
            Flash::error('Fee not found');

            return redirect(route('fees.index'));
        }

        $this->feeRepository->delete($id);

        Flash::success('Fee deleted successfully.');

        return redirect(route('fees.index'));
    }
}
