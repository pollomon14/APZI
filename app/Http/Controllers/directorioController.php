<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatedirectorioRequest;
use App\Http\Requests\UpdatedirectorioRequest;
use App\Repositories\directorioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class directorioController extends AppBaseController
{
    /** @var  directorioRepository */
    private $directorioRepository;

    public function __construct(directorioRepository $directorioRepo)
    {
        $this->directorioRepository = $directorioRepo;
    }

    /**
     * Display a listing of the directorio.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $directorios = $this->directorioRepository->all();

        return view('directorios.index')
            ->with('directorios', $directorios);
    }

    /**
     * Show the form for creating a new directorio.
     *
     * @return Response
     */
    public function create()
    {
        return view('directorios.create');
    }

    /**
     * Store a newly created directorio in storage.
     *
     * @param CreatedirectorioRequest $request
     *
     * @return Response
     */
    public function store(CreatedirectorioRequest $request)
    {
        $input = $request->all();

        $directorio = $this->directorioRepository->create($input);

        Flash::success('Directorio saved successfully.');

        return redirect(route('directorios.index'));
    }

    /**
     * Display the specified directorio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $directorio = $this->directorioRepository->find($id);

        if (empty($directorio)) {
            Flash::error('Directorio not found');

            return redirect(route('directorios.index'));
        }

        return view('directorios.show')->with('directorio', $directorio);
    }

    /**
     * Show the form for editing the specified directorio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $directorio = $this->directorioRepository->find($id);

        if (empty($directorio)) {
            Flash::error('Directorio not found');

            return redirect(route('directorios.index'));
        }

        return view('directorios.edit')->with('directorio', $directorio);
    }

    /**
     * Update the specified directorio in storage.
     *
     * @param int $id
     * @param UpdatedirectorioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatedirectorioRequest $request)
    {
        $directorio = $this->directorioRepository->find($id);

        if (empty($directorio)) {
            Flash::error('Directorio not found');

            return redirect(route('directorios.index'));
        }

        $directorio = $this->directorioRepository->update($request->all(), $id);

        Flash::success('Directorio updated successfully.');

        return redirect(route('directorios.index'));
    }

    /**
     * Remove the specified directorio from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $directorio = $this->directorioRepository->find($id);

        if (empty($directorio)) {
            Flash::error('Directorio not found');

            return redirect(route('directorios.index'));
        }

        $this->directorioRepository->delete($id);

        Flash::success('Directorio deleted successfully.');

        return redirect(route('directorios.index'));
    }
}
