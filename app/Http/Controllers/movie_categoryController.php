<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createmovie_categoryRequest;
use App\Http\Requests\Updatemovie_categoryRequest;
use App\Repositories\movie_categoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class movie_categoryController extends AppBaseController
{
    /** @var  movie_categoryRepository */
    private $movieCategoryRepository;

    public function __construct(movie_categoryRepository $movieCategoryRepo)
    {
        $this->middleware(['auth','verified']);
        $this->movieCategoryRepository = $movieCategoryRepo;
    }

    /**
     * Display a listing of the movie_category.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $movieCategories = $this->movieCategoryRepository->paginate(10);

        return view('movie_categories.index')
            ->with('movieCategories', $movieCategories);
    }

    /**
     * Show the form for creating a new movie_category.
     *
     * @return Response
     */
    public function create()
    {
        return view('movie_categories.create');
    }

    /**
     * Store a newly created movie_category in storage.
     *
     * @param Createmovie_categoryRequest $request
     *
     * @return Response
     */
    public function store(Createmovie_categoryRequest $request)
    {
        $input = $request->all();

        $movieCategory = $this->movieCategoryRepository->create($input);

        Flash::success('Movie Category saved successfully.');

        return redirect(route('movieCategories.index'));
    }

    /**
     * Display the specified movie_category.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $movieCategory = $this->movieCategoryRepository->find($id);

        if (empty($movieCategory)) {
            Flash::error('Movie Category not found');

            return redirect(route('movieCategories.index'));
        }

        return view('movie_categories.show')->with('movieCategory', $movieCategory);
    }

    /**
     * Show the form for editing the specified movie_category.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $movieCategory = $this->movieCategoryRepository->find($id);

        if (empty($movieCategory)) {
            Flash::error('Movie Category not found');

            return redirect(route('movieCategories.index'));
        }

        return view('movie_categories.edit')->with('movieCategory', $movieCategory);
    }

    /**
     * Update the specified movie_category in storage.
     *
     * @param int $id
     * @param Updatemovie_categoryRequest $request
     *
     * @return Response
     */
    public function update($id, Updatemovie_categoryRequest $request)
    {
        $movieCategory = $this->movieCategoryRepository->find($id);

        if (empty($movieCategory)) {
            Flash::error('Movie Category not found');

            return redirect(route('movieCategories.index'));
        }

        $movieCategory = $this->movieCategoryRepository->update($request->all(), $id);

        Flash::success('Movie Category updated successfully.');

        return redirect(route('movieCategories.index'));
    }

    /**
     * Remove the specified movie_category from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $movieCategory = $this->movieCategoryRepository->find($id);

        if (empty($movieCategory)) {
            Flash::error('Movie Category not found');

            return redirect(route('movieCategories.index'));
        }

        $this->movieCategoryRepository->delete($id);

        Flash::success('Movie Category deleted successfully.');

        return redirect(route('movieCategories.index'));
    }
}
