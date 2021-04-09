<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateeventosRequest;
use App\Http\Requests\UpdateeventosRequest;
use App\Repositories\eventosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class eventosController extends AppBaseController
{
    /** @var  eventosRepository */
    private $eventosRepository;

    public function __construct(eventosRepository $eventosRepo)
    {
        $this->eventosRepository = $eventosRepo;
    }

    /**
     * Display a listing of the eventos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $eventos = $this->eventosRepository->all();

        return view('eventos.index')
            ->with('eventos', $eventos);
    }

    /**
     * Show the form for creating a new eventos.
     *
     * @return Response
     */
    public function create()
    {
        return view('eventos.create');
    }

    /**
     * Store a newly created eventos in storage.
     *
     * @param CreateeventosRequest $request
     *
     * @return Response
     */
    public function store(CreateeventosRequest $request)
    {
        $input = $request->all();

        $eventos = $this->eventosRepository->create($input);

        Flash::success('Eventos saved successfully.');

        return redirect(route('eventos.index'));
    }

    /**
     * Display the specified eventos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $eventos = $this->eventosRepository->find($id);

        if (empty($eventos)) {
            Flash::error('Eventos not found');

            return redirect(route('eventos.index'));
        }

        return view('eventos.show')->with('eventos', $eventos);
    }

    /**
     * Show the form for editing the specified eventos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $eventos = $this->eventosRepository->find($id);

        if (empty($eventos)) {
            Flash::error('Eventos not found');

            return redirect(route('eventos.index'));
        }

        return view('eventos.edit')->with('eventos', $eventos);
    }

    /**
     * Update the specified eventos in storage.
     *
     * @param int $id
     * @param UpdateeventosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateeventosRequest $request)
    {
        $eventos = $this->eventosRepository->find($id);

        if (empty($eventos)) {
            Flash::error('Eventos not found');

            return redirect(route('eventos.index'));
        }

        $eventos = $this->eventosRepository->update($request->all(), $id);

        Flash::success('Eventos updated successfully.');

        return redirect(route('eventos.index'));
    }

    /**
     * Remove the specified eventos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $eventos = $this->eventosRepository->find($id);

        if (empty($eventos)) {
            Flash::error('Eventos not found');

            return redirect(route('eventos.index'));
        }

        $this->eventosRepository->delete($id);

        Flash::success('Eventos deleted successfully.');

        return redirect(route('eventos.index'));
    }
}
