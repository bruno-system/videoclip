<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createimg_sliderRequest;
use App\Http\Requests\Updateimg_sliderRequest;
use App\Repositories\img_sliderRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
//incluimos almacenamiento class
use Illuminate\Support\Facades\Storage;
//incluir modelo
use App\Models\img_slider;
use App\User;

class img_sliderController extends AppBaseController
{
    /** @var  img_sliderRepository */
    private $imgSliderRepository;

    public function __construct(img_sliderRepository $imgSliderRepo)
    {
        $this->middleware(['auth','verified']);
        $this->imgSliderRepository = $imgSliderRepo;
    }

    /**
     * Display a listing of the img_slider.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $imgSliders = $this->imgSliderRepository->all();
        $imgSliders = Img_slider::orderBy('id','DESC')->paginate(5);

        return view('img_sliders.index')
            ->with('imgSliders', $imgSliders);
    }

    /**
     * Show the form for creating a new img_slider.
     *
     * @return Response
     */
    public function create()
    {
        $users=User::pluck('name','id');
        return view('img_sliders.create',compact('users'));
    }

    /**
     * Store a newly created img_slider in storage.
     *
     * @param Createimg_sliderRequest $request
     *
     * @return Response
     */
    public function store(Createimg_sliderRequest $request)
    {
        $input = $request->all();

        $imgSlider = $this->imgSliderRepository->create($input); 


        $image_name= time().'.jpeg';
        $base64_image = $request->imge;

        if (preg_match('/^data:image\/(\w+);base64,/', $base64_image)) {
            $data = substr($base64_image, strpos($base64_image, ',') + 1);
            $data = base64_decode($data);
            //armamos el path
            $path='img_videoclip/slider_images/slider-'.$image_name;
            //almaceno si es la prima img crea la carpeta slider_images
            Storage::disk('public')->put('img_videoclip/slider_images/slider-'.$image_name, $data);
            //le paso la ruta completa
            $imgSlider->fill(['img'=> asset($path)])->save();
        }


      //  $path = public_path() . "/img_videoclip/slider_images" . $image_name;
     //   file_put_contents($path, $image);

/*         if($request->file('img')){
            //almaceno si es la prima img crea la carpeta slider_images
            $path=Storage::disk('public')->put('img_videoclip/slider_images',$request->file('img'));
            //le paso la ruta completa
            $imgSlider->fill(['img'=> asset($path)])->save();
        }

        Flash::success('Img Slider saved successfully.'); */

    //    return redirect(route('imgSliders.index'));
        return response()->json(['success'=>'done']);
    }

    /**
     * Display the specified img_slider.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $imgSlider = $this->imgSliderRepository->find($id);

        if (empty($imgSlider)) {
            Flash::error('Img Slider not found');

            return redirect(route('imgSliders.index'));
        }

        return view('img_sliders.show')->with('imgSlider', $imgSlider);
    }

    /**
     * Show the form for editing the specified img_slider.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $imgSlider = $this->imgSliderRepository->find($id);
        $users=User::pluck('name','id');

        if (empty($imgSlider)) {
            Flash::error('Img Slider not found');

            return redirect(route('imgSliders.index'));
        }

        return view('img_sliders.edit',compact('imgSlider','users'));
    }

    /**
     * Update the specified img_slider in storage.
     *
     * @param int $id
     * @param Updateimg_sliderRequest $request
     *
     * @return Response
     */
    public function update($id, Updateimg_sliderRequest $request)
    {
        $imgSlider = $this->imgSliderRepository->find($id);

        if (empty($imgSlider)) {
            Flash::error('Img Slider not found');

            return redirect(route('imgSliders.index'));
        }

        $imgSlider = $this->imgSliderRepository->update($request->all(), $id);

        if($request->file('img')){
            //almaceno si es la prima img crea la carpeta slider_images
            $path=Storage::disk('public')->put('img_videoclip/slider_images',$request->file('img'));
            //le paso la ruta completa
            $imgSlider->fill(['img'=> asset($path)])->save();
        }

        Flash::success('Img Slider updated successfully.');

        return redirect(route('imgSliders.index'));
    }

    /**
     * Remove the specified img_slider from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $imgSlider = $this->imgSliderRepository->find($id);

        if (empty($imgSlider)) {
            Flash::error('Img Slider not found');

            return redirect(route('imgSliders.index'));
        }

        $this->imgSliderRepository->delete($id);

        Flash::success('Img Slider deleted successfully.');

        return redirect(route('imgSliders.index'));
    }
}
