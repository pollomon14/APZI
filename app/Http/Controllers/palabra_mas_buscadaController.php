<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createpalabra_mas_buscadaRequest;
use App\Http\Requests\Updatepalabra_mas_buscadaRequest;
use App\Repositories\palabra_mas_buscadaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class palabra_mas_buscadaController extends AppBaseController
{
    /** @var  palabra_mas_buscadaRepository */
    private $palabraMasBuscadaRepository;

    public function __construct(palabra_mas_buscadaRepository $palabraMasBuscadaRepo)
    {
        $this->palabraMasBuscadaRepository = $palabraMasBuscadaRepo;
    }

    /**
     * Display a listing of the palabra_mas_buscada.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $palabraMasBuscadas = $this->palabraMasBuscadaRepository->all();

        return view('palabra_mas_buscadas.index')
            ->with('palabraMasBuscadas', $palabraMasBuscadas);
    }

    /**
     * Show the form for creating a new palabra_mas_buscada.
     *
     * @return Response
     */
    public function create()
    {
        return view('palabra_mas_buscadas.create');
    }

    /**
     * Store a newly created palabra_mas_buscada in storage.
     *
     * @param Createpalabra_mas_buscadaRequest $request
     *
     * @return Response
     */
    public function store(Createpalabra_mas_buscadaRequest $request)
    {
        $input = $request->all();

        $palabraMasBuscada = $this->palabraMasBuscadaRepository->create($input);

        Flash::success('Palabra Mas Buscada saved successfully.');

        return redirect(route('palabraMasBuscadas.index'));
    }

    /**
     * Display the specified palabra_mas_buscada.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $palabraMasBuscada = $this->palabraMasBuscadaRepository->find($id);

        if (empty($palabraMasBuscada)) {
            Flash::error('Palabra Mas Buscada not found');

            return redirect(route('palabraMasBuscadas.index'));
        }

        return view('palabra_mas_buscadas.show')->with('palabraMasBuscada', $palabraMasBuscada);
    }

    /**
     * Show the form for editing the specified palabra_mas_buscada.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $palabraMasBuscada = $this->palabraMasBuscadaRepository->find($id);

        if (empty($palabraMasBuscada)) {
            Flash::error('Palabra Mas Buscada not found');

            return redirect(route('palabraMasBuscadas.index'));
        }

        return view('palabra_mas_buscadas.edit')->with('palabraMasBuscada', $palabraMasBuscada);
    }

    /**
     * Update the specified palabra_mas_buscada in storage.
     *
     * @param int $id
     * @param Updatepalabra_mas_buscadaRequest $request
     *
     * @return Response
     */
    public function update($id, Updatepalabra_mas_buscadaRequest $request)
    {
        $palabraMasBuscada = $this->palabraMasBuscadaRepository->find($id);

        if (empty($palabraMasBuscada)) {
            Flash::error('Palabra Mas Buscada not found');

            return redirect(route('palabraMasBuscadas.index'));
        }

        $palabraMasBuscada = $this->palabraMasBuscadaRepository->update($request->all(), $id);

        Flash::success('Palabra Mas Buscada updated successfully.');

        return redirect(route('palabraMasBuscadas.index'));
    }

    /**
     * Remove the specified palabra_mas_buscada from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $palabraMasBuscada = $this->palabraMasBuscadaRepository->find($id);

        if (empty($palabraMasBuscada)) {
            Flash::error('Palabra Mas Buscada not found');

            return redirect(route('palabraMasBuscadas.index'));
        }

        $this->palabraMasBuscadaRepository->delete($id);

        Flash::success('Palabra Mas Buscada deleted successfully.');

        return redirect(route('palabraMasBuscadas.index'));
    }
}
