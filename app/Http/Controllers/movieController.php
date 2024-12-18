<?php

namespace App\Http\Controllers;

use App\DataTables\movieDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatemovieRequest;
use App\Http\Requests\UpdatemovieRequest;
use App\Repositories\movieRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
//incluimos almacenamiento class
use Illuminate\Support\Facades\Storage;
//incluir modelo
use App\Models\movie;
use App\Models\movie_category;

class movieController extends AppBaseController
{
    /** @var  movieRepository */
    private $movieRepository;

    public function __construct(movieRepository $movieRepo)
    {
        $this->middleware(['auth','verified']);
        $this->movieRepository = $movieRepo;
    }

    /**
     * Display a listing of the movie.
     *
     * @param movieDataTable $movieDataTable
     * @return Response
     */
    public function index(movieDataTable $movieDataTable)
    {
        return $movieDataTable->render('movies.index');
    }

    /**
     * Show the form for creating a new movie.
     *
     * @return Response
     */
    public function create()
    {
        $categories=movie_category::orderBy('name')->pluck('name','id');
        return view('movies.create',compact('categories'));
    }

    /**
     * Store a newly created movie in storage.
     *
     * @param CreatemovieRequest $request
     *
     * @return Response
     */
    public function store(CreatemovieRequest $request)
    {
        $input = $request->all();

        $movie = $this->movieRepository->create($input);

        if($request->file('img')){
            //almaceno si es la primera img crea la carpeta slider_images
            $path=Storage::disk('public')->put('img_videoclip/movies_img',$request->file('img'));
            //le paso la ruta completa
            //$movie->fill(['img'=> asset($path)])->save();
            $rutaImg='img_videoclip/movies_img/'.basename($path);
            $movie->fill(['img'=> $rutaImg ])->save();
        }

        Flash::success('Movie saved successfully.');

        return redirect(route('movies.index'));
    }

    /**
     * Display the specified movie.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $movie = $this->movieRepository->find($id);

        if (empty($movie)) {
            Flash::error('Movie not found');

            return redirect(route('movies.index'));
        }

        return view('movies.show')->with('movie', $movie);
    }

    /**
     * Show the form for editing the specified movie.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $movie = $this->movieRepository->find($id);
        $categories=movie_category::orderBy('name')->pluck('name','id');

        if (empty($movie)) {
            Flash::error('Movie not found');

            return redirect(route('movies.index'));
        }

        return view('movies.edit',compact('movie','categories'));
    }

    /**
     * Update the specified movie in storage.
     *
     * @param  int              $id
     * @param UpdatemovieRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemovieRequest $request)
    {
        $movie = $this->movieRepository->find($id);

        if (empty($movie)) {
            Flash::error('Movie not found');

            return redirect(route('movies.index'));
        }

        $movie = $this->movieRepository->update($request->all(), $id);

        if($request->file('img')){ 
            //almaceno si es la prima img crea la carpeta slider_images
            $path=Storage::disk('public')->put('img_videoclip/movies_img',$request->file('img'));
            //le paso la ruta completa
            $movie->fill(['img'=> asset($path)])->save();
        }

        Flash::success('Movie updated successfully.');

        return redirect(route('movies.index'));
    }

    /**
     * Remove the specified movie from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $movie = $this->movieRepository->find($id);

        if (empty($movie)) {
            Flash::error('Movie not found');

            return redirect(route('movies.index'));
        }
        
       //elimino fisicamente la img
        Storage::disk('public')->delete($movie->img);
        
        $this->movieRepository->delete($id);

        Flash::success('Movie deleted successfully.');

        return redirect(route('movies.index'));
    }
}
