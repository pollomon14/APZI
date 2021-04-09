<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateemergenciasRequest;
use App\Http\Requests\UpdateemergenciasRequest;
use App\Repositories\emergenciasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class emergenciasController extends AppBaseController
{
    /** @var  emergenciasRepository */
    private $emergenciasRepository;

    public function __construct(emergenciasRepository $emergenciasRepo)
    {
        $this->emergenciasRepository = $emergenciasRepo;
    }

    /**
     * Display a listing of the emergencias.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $emergencias = $this->emergenciasRepository->all();

        return view('emergencias.index')
            ->with('emergencias', $emergencias);
    }

    /**
     * Show the form for creating a new emergencias.
     *
     * @return Response
     */
    public function create()
    {
        return view('emergencias.create');
    }

    /**
     * Store a newly created emergencias in storage.
     *
     * @param CreateemergenciasRequest $request
     *
     * @return Response
     */
    public function store(CreateemergenciasRequest $request)
    {
        $input = $request->all();

        $emergencias = $this->emergenciasRepository->create($input);

        Flash::success('Emergencias saved successfully.');

        return redirect(route('emergencias.index'));
    }

    /**
     * Display the specified emergencias.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $emergencias = $this->emergenciasRepository->find($id);

        if (empty($emergencias)) {
            Flash::error('Emergencias not found');

            return redirect(route('emergencias.index'));
        }

        return view('emergencias.show')->with('emergencias', $emergencias);
    }

    /**
     * Show the form for editing the specified emergencias.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $emergencias = $this->emergenciasRepository->find($id);

        if (empty($emergencias)) {
            Flash::error('Emergencias not found');

            return redirect(route('emergencias.index'));
        }

        return view('emergencias.edit')->with('emergencias', $emergencias);
    }

    /**
     * Update the specified emergencias in storage.
     *
     * @param int $id
     * @param UpdateemergenciasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateemergenciasRequest $request)
    {
        $emergencias = $this->emergenciasRepository->find($id);

        if (empty($emergencias)) {
            Flash::error('Emergencias not found');

            return redirect(route('emergencias.index'));
        }

        $emergencias = $this->emergenciasRepository->update($request->all(), $id);

        Flash::success('Emergencias updated successfully.');

        return redirect(route('emergencias.index'));
    }

    /**
     * Remove the specified emergencias from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $emergencias = $this->emergenciasRepository->find($id);

        if (empty($emergencias)) {
            Flash::error('Emergencias not found');

            return redirect(route('emergencias.index'));
        }

        $this->emergenciasRepository->delete($id);

        Flash::success('Emergencias deleted successfully.');

        return redirect(route('emergencias.index'));
    }
}
