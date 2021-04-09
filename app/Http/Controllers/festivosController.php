<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatefestivosRequest;
use App\Http\Requests\UpdatefestivosRequest;
use App\Repositories\festivosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class festivosController extends AppBaseController
{
    /** @var  festivosRepository */
    private $festivosRepository;

    public function __construct(festivosRepository $festivosRepo)
    {
        $this->festivosRepository = $festivosRepo;
    }

    /**
     * Display a listing of the festivos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $festivos = $this->festivosRepository->all();

        return view('festivos.index')
            ->with('festivos', $festivos);
    }

    /**
     * Show the form for creating a new festivos.
     *
     * @return Response
     */
    public function create()
    {
        return view('festivos.create');
    }

    /**
     * Store a newly created festivos in storage.
     *
     * @param CreatefestivosRequest $request
     *
     * @return Response
     */
    public function store(CreatefestivosRequest $request)
    {
        $input = $request->all();

        $festivos = $this->festivosRepository->create($input);

        Flash::success('Festivos saved successfully.');

        return redirect(route('festivos.index'));
    }

    /**
     * Display the specified festivos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $festivos = $this->festivosRepository->find($id);

        if (empty($festivos)) {
            Flash::error('Festivos not found');

            return redirect(route('festivos.index'));
        }

        return view('festivos.show')->with('festivos', $festivos);
    }

    /**
     * Show the form for editing the specified festivos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $festivos = $this->festivosRepository->find($id);

        if (empty($festivos)) {
            Flash::error('Festivos not found');

            return redirect(route('festivos.index'));
        }

        return view('festivos.edit')->with('festivos', $festivos);
    }

    /**
     * Update the specified festivos in storage.
     *
     * @param int $id
     * @param UpdatefestivosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatefestivosRequest $request)
    {
        $festivos = $this->festivosRepository->find($id);

        if (empty($festivos)) {
            Flash::error('Festivos not found');

            return redirect(route('festivos.index'));
        }

        $festivos = $this->festivosRepository->update($request->all(), $id);

        Flash::success('Festivos updated successfully.');

        return redirect(route('festivos.index'));
    }

    /**
     * Remove the specified festivos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $festivos = $this->festivosRepository->find($id);

        if (empty($festivos)) {
            Flash::error('Festivos not found');

            return redirect(route('festivos.index'));
        }

        $this->festivosRepository->delete($id);

        Flash::success('Festivos deleted successfully.');

        return redirect(route('festivos.index'));
    }
}
