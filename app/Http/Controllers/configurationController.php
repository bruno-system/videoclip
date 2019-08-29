<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateconfigurationRequest;
use App\Http\Requests\UpdateconfigurationRequest;
use App\Repositories\configurationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class configurationController extends AppBaseController
{
    /** @var  configurationRepository */
    private $configurationRepository;

    public function __construct(configurationRepository $configurationRepo)
    {
        $this->middleware(['auth','verified']);
        $this->configurationRepository = $configurationRepo;
    }

    /**
     * Display a listing of the configuration.
     *
     * @param Request $request
     *
     * @return Response
     */
/*     public function index(Request $request)
    {
        $configurations = $this->configurationRepository->all();

        return view('configurations.index')
            ->with('configurations', $configurations);
    }
 */


public function index()
{
    $id=1;
    $configuration = $this->configurationRepository->find($id);

    if (empty($configuration)) {
        Flash::error('Configuration not found');

        return redirect(route('home'));
    }

    return view('configurations.edit')->with('configuration', $configuration);
}


    /**
     * Show the form for creating a new configuration.
     *
     * @return Response
     */
    public function create()
    {
      //  return view('configurations.create');
      return redirect(route('configurations.index'));
    }

    /**
     * Store a newly created configuration in storage.
     *
     * @param CreateconfigurationRequest $request
     *
     * @return Response
     */
    public function store(CreateconfigurationRequest $request)
    {
        $input = $request->all();

        $configuration = $this->configurationRepository->create($input);

        Flash::success('Configuration saved successfully.');

        return redirect(route('configurations.index'));
    }

    /**
     * Display the specified configuration.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $configuration = $this->configurationRepository->find($id);

        if (empty($configuration)) {
            Flash::error('Configuration not found');

            return redirect(route('configurations.index'));
        }

        return view('configurations.show')->with('configuration', $configuration);
    }

    /**
     * Show the form for editing the specified configuration.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $configuration = $this->configurationRepository->find($id);

        if (empty($configuration)) {
            Flash::error('Configuration not found');

            return redirect(route('configurations.index'));
        }

        return view('configurations.edit')->with('configuration', $configuration);
    }

    /**
     * Update the specified configuration in storage.
     *
     * @param int $id
     * @param UpdateconfigurationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateconfigurationRequest $request)
    {
        $configuration = $this->configurationRepository->find($id);

        if (empty($configuration)) {
            Flash::error('Configuration not found');

            return redirect(route('configurations.index'));
        }

        $configuration = $this->configurationRepository->update($request->all(), $id);

        Flash::success('Configuration updated successfully.');

        return redirect(route('configurations.index'));
    }

    /**
     * Remove the specified configuration from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
/*         $configuration = $this->configurationRepository->find($id);

        if (empty($configuration)) {
            Flash::error('Configuration not found');

            return redirect(route('configurations.index'));
        }

        $this->configurationRepository->delete($id);

        Flash::success('Configuration deleted successfully.');
 */
        return redirect(route('configurations.index'));
    }
}
