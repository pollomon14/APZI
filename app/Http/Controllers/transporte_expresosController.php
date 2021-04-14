<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createtransporte_expresosRequest;
use App\Http\Requests\Updatetransporte_expresosRequest;
use App\Repositories\transporte_expresosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class transporte_expresosController extends AppBaseController
{
    /** @var  transporte_expresosRepository */
    private $transporteExpresosRepository;

    public function __construct(transporte_expresosRepository $transporteExpresosRepo)
    {
        $this->transporteExpresosRepository = $transporteExpresosRepo;
    }

    /**
     * Display a listing of the transporte_expresos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $transporteExpresos = $this->transporteExpresosRepository->all();

        return view('transporte_expresos.index')
            ->with('transporteExpresos', $transporteExpresos);
    }

    /**
     * Show the form for creating a new transporte_expresos.
     *
     * @return Response
     */
    public function create()
    {
        return view('transporte_expresos.create');
    }

    /**
     * Store a newly created transporte_expresos in storage.
     *
     * @param Createtransporte_expresosRequest $request
     *
     * @return Response
     */
    public function store(Createtransporte_expresosRequest $request)
    {
        $input = $request->all();

        $transporteExpresos = $this->transporteExpresosRepository->create($input);

        Flash::success('Transporte Expresos saved successfully.');

        return redirect(route('transporteExpresos.index'));
    }

    /**
     * Display the specified transporte_expresos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $transporteExpresos = $this->transporteExpresosRepository->find($id);

        if (empty($transporteExpresos)) {
            Flash::error('Transporte Expresos not found');

            return redirect(route('transporteExpresos.index'));
        }

        return view('transporte_expresos.show')->with('transporteExpresos', $transporteExpresos);
    }

    /**
     * Show the form for editing the specified transporte_expresos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $transporteExpresos = $this->transporteExpresosRepository->find($id);

        if (empty($transporteExpresos)) {
            Flash::error('Transporte Expresos not found');

            return redirect(route('transporteExpresos.index'));
        }

        return view('transporte_expresos.edit')->with('transporteExpresos', $transporteExpresos);
    }

    /**
     * Update the specified transporte_expresos in storage.
     *
     * @param int $id
     * @param Updatetransporte_expresosRequest $request
     *
     * @return Response
     */
    public function update($id, Updatetransporte_expresosRequest $request)
    {
        $transporteExpresos = $this->transporteExpresosRepository->find($id);

        if (empty($transporteExpresos)) {
            Flash::error('Transporte Expresos not found');

            return redirect(route('transporteExpresos.index'));
        }

        $transporteExpresos = $this->transporteExpresosRepository->update($request->all(), $id);

        Flash::success('Transporte Expresos updated successfully.');

        return redirect(route('transporteExpresos.index'));
    }

    /**
     * Remove the specified transporte_expresos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $transporteExpresos = $this->transporteExpresosRepository->find($id);

        if (empty($transporteExpresos)) {
            Flash::error('Transporte Expresos not found');

            return redirect(route('transporteExpresos.index'));
        }

        $this->transporteExpresosRepository->delete($id);

        Flash::success('Transporte Expresos deleted successfully.');

        return redirect(route('transporteExpresos.index'));
    }
}
