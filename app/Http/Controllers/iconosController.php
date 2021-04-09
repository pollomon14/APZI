<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateiconosRequest;
use App\Http\Requests\UpdateiconosRequest;
use App\Repositories\iconosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class iconosController extends AppBaseController
{
    /** @var  iconosRepository */
    private $iconosRepository;

    public function __construct(iconosRepository $iconosRepo)
    {
        $this->iconosRepository = $iconosRepo;
    }

    /**
     * Display a listing of the iconos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $iconos = $this->iconosRepository->all();

        return view('iconos.index')
            ->with('iconos', $iconos);
    }

    /**
     * Show the form for creating a new iconos.
     *
     * @return Response
     */
    public function create()
    {
        return view('iconos.create');
    }

    /**
     * Store a newly created iconos in storage.
     *
     * @param CreateiconosRequest $request
     *
     * @return Response
     */
    public function store(CreateiconosRequest $request)
    {
        $input = $request->all();

        $iconos = $this->iconosRepository->create($input);

        Flash::success('Iconos saved successfully.');

        return redirect(route('iconos.index'));
    }

    /**
     * Display the specified iconos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $iconos = $this->iconosRepository->find($id);

        if (empty($iconos)) {
            Flash::error('Iconos not found');

            return redirect(route('iconos.index'));
        }

        return view('iconos.show')->with('iconos', $iconos);
    }

    /**
     * Show the form for editing the specified iconos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $iconos = $this->iconosRepository->find($id);

        if (empty($iconos)) {
            Flash::error('Iconos not found');

            return redirect(route('iconos.index'));
        }

        return view('iconos.edit')->with('iconos', $iconos);
    }

    /**
     * Update the specified iconos in storage.
     *
     * @param int $id
     * @param UpdateiconosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateiconosRequest $request)
    {
        $iconos = $this->iconosRepository->find($id);

        if (empty($iconos)) {
            Flash::error('Iconos not found');

            return redirect(route('iconos.index'));
        }

        $iconos = $this->iconosRepository->update($request->all(), $id);

        Flash::success('Iconos updated successfully.');

        return redirect(route('iconos.index'));
    }

    /**
     * Remove the specified iconos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $iconos = $this->iconosRepository->find($id);

        if (empty($iconos)) {
            Flash::error('Iconos not found');

            return redirect(route('iconos.index'));
        }

        $this->iconosRepository->delete($id);

        Flash::success('Iconos deleted successfully.');

        return redirect(route('iconos.index'));
    }
}
