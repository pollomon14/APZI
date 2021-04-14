<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createtransporte_taxisRequest;
use App\Http\Requests\Updatetransporte_taxisRequest;
use App\Repositories\transporte_taxisRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class transporte_taxisController extends AppBaseController
{
    /** @var  transporte_taxisRepository */
    private $transporteTaxisRepository;

    public function __construct(transporte_taxisRepository $transporteTaxisRepo)
    {
        $this->transporteTaxisRepository = $transporteTaxisRepo;
    }

    /**
     * Display a listing of the transporte_taxis.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $transporteTaxes = $this->transporteTaxisRepository->all();

        return view('transporte_taxes.index')
            ->with('transporteTaxes', $transporteTaxes);
    }

    /**
     * Show the form for creating a new transporte_taxis.
     *
     * @return Response
     */
    public function create()
    {
        return view('transporte_taxes.create');
    }

    /**
     * Store a newly created transporte_taxis in storage.
     *
     * @param Createtransporte_taxisRequest $request
     *
     * @return Response
     */
    public function store(Createtransporte_taxisRequest $request)
    {
        $input = $request->all();

        $transporteTaxis = $this->transporteTaxisRepository->create($input);

        Flash::success('Transporte Taxis saved successfully.');

        return redirect(route('transporteTaxes.index'));
    }

    /**
     * Display the specified transporte_taxis.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $transporteTaxis = $this->transporteTaxisRepository->find($id);

        if (empty($transporteTaxis)) {
            Flash::error('Transporte Taxis not found');

            return redirect(route('transporteTaxes.index'));
        }

        return view('transporte_taxes.show')->with('transporteTaxis', $transporteTaxis);
    }

    /**
     * Show the form for editing the specified transporte_taxis.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $transporteTaxis = $this->transporteTaxisRepository->find($id);

        if (empty($transporteTaxis)) {
            Flash::error('Transporte Taxis not found');

            return redirect(route('transporteTaxes.index'));
        }

        return view('transporte_taxes.edit')->with('transporteTaxis', $transporteTaxis);
    }

    /**
     * Update the specified transporte_taxis in storage.
     *
     * @param int $id
     * @param Updatetransporte_taxisRequest $request
     *
     * @return Response
     */
    public function update($id, Updatetransporte_taxisRequest $request)
    {
        $transporteTaxis = $this->transporteTaxisRepository->find($id);

        if (empty($transporteTaxis)) {
            Flash::error('Transporte Taxis not found');

            return redirect(route('transporteTaxes.index'));
        }

        $transporteTaxis = $this->transporteTaxisRepository->update($request->all(), $id);

        Flash::success('Transporte Taxis updated successfully.');

        return redirect(route('transporteTaxes.index'));
    }

    /**
     * Remove the specified transporte_taxis from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $transporteTaxis = $this->transporteTaxisRepository->find($id);

        if (empty($transporteTaxis)) {
            Flash::error('Transporte Taxis not found');

            return redirect(route('transporteTaxes.index'));
        }

        $this->transporteTaxisRepository->delete($id);

        Flash::success('Transporte Taxis deleted successfully.');

        return redirect(route('transporteTaxes.index'));
    }
}
