<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createtransporte_domiciliariosRequest;
use App\Http\Requests\Updatetransporte_domiciliariosRequest;
use App\Repositories\transporte_domiciliariosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class transporte_domiciliariosController extends AppBaseController
{
    /** @var  transporte_domiciliariosRepository */
    private $transporteDomiciliariosRepository;

    public function __construct(transporte_domiciliariosRepository $transporteDomiciliariosRepo)
    {
        $this->transporteDomiciliariosRepository = $transporteDomiciliariosRepo;
    }

    /**
     * Display a listing of the transporte_domiciliarios.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $transporteDomiciliarios = $this->transporteDomiciliariosRepository->all();

        return view('transporte_domiciliarios.index')
            ->with('transporteDomiciliarios', $transporteDomiciliarios);
    }

    /**
     * Show the form for creating a new transporte_domiciliarios.
     *
     * @return Response
     */
    public function create()
    {
        return view('transporte_domiciliarios.create');
    }

    /**
     * Store a newly created transporte_domiciliarios in storage.
     *
     * @param Createtransporte_domiciliariosRequest $request
     *
     * @return Response
     */
    public function store(Createtransporte_domiciliariosRequest $request)
    {
        $input = $request->all();

        $transporteDomiciliarios = $this->transporteDomiciliariosRepository->create($input);

        Flash::success('Transporte Domiciliarios saved successfully.');

        return redirect(route('transporteDomiciliarios.index'));
    }

    /**
     * Display the specified transporte_domiciliarios.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $transporteDomiciliarios = $this->transporteDomiciliariosRepository->find($id);

        if (empty($transporteDomiciliarios)) {
            Flash::error('Transporte Domiciliarios not found');

            return redirect(route('transporteDomiciliarios.index'));
        }

        return view('transporte_domiciliarios.show')->with('transporteDomiciliarios', $transporteDomiciliarios);
    }

    /**
     * Show the form for editing the specified transporte_domiciliarios.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $transporteDomiciliarios = $this->transporteDomiciliariosRepository->find($id);

        if (empty($transporteDomiciliarios)) {
            Flash::error('Transporte Domiciliarios not found');

            return redirect(route('transporteDomiciliarios.index'));
        }

        return view('transporte_domiciliarios.edit')->with('transporteDomiciliarios', $transporteDomiciliarios);
    }

    /**
     * Update the specified transporte_domiciliarios in storage.
     *
     * @param int $id
     * @param Updatetransporte_domiciliariosRequest $request
     *
     * @return Response
     */
    public function update($id, Updatetransporte_domiciliariosRequest $request)
    {
        $transporteDomiciliarios = $this->transporteDomiciliariosRepository->find($id);

        if (empty($transporteDomiciliarios)) {
            Flash::error('Transporte Domiciliarios not found');

            return redirect(route('transporteDomiciliarios.index'));
        }

        $transporteDomiciliarios = $this->transporteDomiciliariosRepository->update($request->all(), $id);

        Flash::success('Transporte Domiciliarios updated successfully.');

        return redirect(route('transporteDomiciliarios.index'));
    }

    /**
     * Remove the specified transporte_domiciliarios from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $transporteDomiciliarios = $this->transporteDomiciliariosRepository->find($id);

        if (empty($transporteDomiciliarios)) {
            Flash::error('Transporte Domiciliarios not found');

            return redirect(route('transporteDomiciliarios.index'));
        }

        $this->transporteDomiciliariosRepository->delete($id);

        Flash::success('Transporte Domiciliarios deleted successfully.');

        return redirect(route('transporteDomiciliarios.index'));
    }
}
