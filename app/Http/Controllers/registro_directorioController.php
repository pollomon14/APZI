<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createregistro_directorioRequest;
use App\Http\Requests\Updateregistro_directorioRequest;
use App\Repositories\registro_directorioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class registro_directorioController extends AppBaseController
{
    /** @var  registro_directorioRepository */
    private $registroDirectorioRepository;

    public function __construct(registro_directorioRepository $registroDirectorioRepo)
    {
        $this->registroDirectorioRepository = $registroDirectorioRepo;
    }

    /**
     * Display a listing of the registro_directorio.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $registroDirectorios = $this->registroDirectorioRepository->all();

        return view('registro_directorios.index')
            ->with('registroDirectorios', $registroDirectorios);
    }

    /**
     * Show the form for creating a new registro_directorio.
     *
     * @return Response
     */
    public function create()
    {
        return view('registro_directorios.create');
    }

    /**
     * Store a newly created registro_directorio in storage.
     *
     * @param Createregistro_directorioRequest $request
     *
     * @return Response
     */
    public function store(Createregistro_directorioRequest $request)
    {
        $input = $request->all();

        $registroDirectorio = $this->registroDirectorioRepository->create($input);

        Flash::success('Registro Directorio saved successfully.');

        return redirect(route('registroDirectorios.index'));
    }

    /**
     * Display the specified registro_directorio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $registroDirectorio = $this->registroDirectorioRepository->find($id);

        if (empty($registroDirectorio)) {
            Flash::error('Registro Directorio not found');

            return redirect(route('registroDirectorios.index'));
        }

        return view('registro_directorios.show')->with('registroDirectorio', $registroDirectorio);
    }

    /**
     * Show the form for editing the specified registro_directorio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $registroDirectorio = $this->registroDirectorioRepository->find($id);

        if (empty($registroDirectorio)) {
            Flash::error('Registro Directorio not found');

            return redirect(route('registroDirectorios.index'));
        }

        return view('registro_directorios.edit')->with('registroDirectorio', $registroDirectorio);
    }

    /**
     * Update the specified registro_directorio in storage.
     *
     * @param int $id
     * @param Updateregistro_directorioRequest $request
     *
     * @return Response
     */
    public function update($id, Updateregistro_directorioRequest $request)
    {
        $registroDirectorio = $this->registroDirectorioRepository->find($id);

        if (empty($registroDirectorio)) {
            Flash::error('Registro Directorio not found');

            return redirect(route('registroDirectorios.index'));
        }

        $registroDirectorio = $this->registroDirectorioRepository->update($request->all(), $id);

        Flash::success('Registro Directorio updated successfully.');

        return redirect(route('registroDirectorios.index'));
    }

    /**
     * Remove the specified registro_directorio from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $registroDirectorio = $this->registroDirectorioRepository->find($id);

        if (empty($registroDirectorio)) {
            Flash::error('Registro Directorio not found');

            return redirect(route('registroDirectorios.index'));
        }

        $this->registroDirectorioRepository->delete($id);

        Flash::success('Registro Directorio deleted successfully.');

        return redirect(route('registroDirectorios.index'));
    }
}
