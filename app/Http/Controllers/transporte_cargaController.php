<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createtransporte_cargaRequest;
use App\Http\Requests\Updatetransporte_cargaRequest;
use App\Repositories\transporte_cargaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class transporte_cargaController extends AppBaseController
{
    /** @var  transporte_cargaRepository */
    private $transporteCargaRepository;

    public function __construct(transporte_cargaRepository $transporteCargaRepo)
    {
        $this->transporteCargaRepository = $transporteCargaRepo;
    }

    /**
     * Display a listing of the transporte_carga.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $transporteCargas = $this->transporteCargaRepository->all();

        return view('transporte_cargas.index')
            ->with('transporteCargas', $transporteCargas);
    }

    /**
     * Show the form for creating a new transporte_carga.
     *
     * @return Response
     */
    public function create()
    {
        return view('transporte_cargas.create');
    }

    /**
     * Store a newly created transporte_carga in storage.
     *
     * @param Createtransporte_cargaRequest $request
     *
     * @return Response
     */
    public function store(Createtransporte_cargaRequest $request)
    {
        $input = $request->all();

        $transporteCarga = $this->transporteCargaRepository->create($input);

        Flash::success('Transporte Carga saved successfully.');

        return redirect(route('transporteCargas.index'));
    }

    /**
     * Display the specified transporte_carga.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $transporteCarga = $this->transporteCargaRepository->find($id);

        if (empty($transporteCarga)) {
            Flash::error('Transporte Carga not found');

            return redirect(route('transporteCargas.index'));
        }

        return view('transporte_cargas.show')->with('transporteCarga', $transporteCarga);
    }

    /**
     * Show the form for editing the specified transporte_carga.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $transporteCarga = $this->transporteCargaRepository->find($id);

        if (empty($transporteCarga)) {
            Flash::error('Transporte Carga not found');

            return redirect(route('transporteCargas.index'));
        }

        return view('transporte_cargas.edit')->with('transporteCarga', $transporteCarga);
    }

    /**
     * Update the specified transporte_carga in storage.
     *
     * @param int $id
     * @param Updatetransporte_cargaRequest $request
     *
     * @return Response
     */
    public function update($id, Updatetransporte_cargaRequest $request)
    {
        $transporteCarga = $this->transporteCargaRepository->find($id);

        if (empty($transporteCarga)) {
            Flash::error('Transporte Carga not found');

            return redirect(route('transporteCargas.index'));
        }

        $transporteCarga = $this->transporteCargaRepository->update($request->all(), $id);

        Flash::success('Transporte Carga updated successfully.');

        return redirect(route('transporteCargas.index'));
    }

    /**
     * Remove the specified transporte_carga from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $transporteCarga = $this->transporteCargaRepository->find($id);

        if (empty($transporteCarga)) {
            Flash::error('Transporte Carga not found');

            return redirect(route('transporteCargas.index'));
        }

        $this->transporteCargaRepository->delete($id);

        Flash::success('Transporte Carga deleted successfully.');

        return redirect(route('transporteCargas.index'));
    }
}
