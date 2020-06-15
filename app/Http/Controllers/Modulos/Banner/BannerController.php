<?php

namespace App\Http\Controllers\Modulos\Banner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Administrador\Banner;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BannerController extends Controller
{
  public function index(){
    return view('administrador.modulos.banner.index');
  }

  public function lista(Request $request){

    //if($request->ajax()){

      #Filtrando lista de Banners
      $banner = Banner::all();

      $dataListReturn = datatables()
                          ->collection($banner);

      $dataListReturn = $dataListReturn
                          ->only(['id','nombre','imagen','enlace','orden'])
                          ->addColumn('btn', 'modulo.administrador.index')
                          ->rawColumns(['btn'])
                          ->toJson();

      return $dataListReturn;

  //}

  //return abort(404);

  }


  public function create(){
    return view('administrador.modulos.banner.create');
  }

  public function store(BannerRequest $request){

    $banner = new Banner;

    try {

      DB::beginTransaction();

      $banner->nombre = $request->nombre;
      $banner->imagen = $request->imagen;
      $banner->enlace = $request->enlace;
      $banner->orden = $request->orden;

      $banner->save();

      DB::commit();

    }catch(QueryException $ex){
      // dd($ex->getMessage());
      DB::rollback();
      return $this->errorMessage("Hubo un problema en el registro, intente nuevamente verificando que los campos estén completos!.",402);
    }catch(\Exception $e){
      // dd($e->getMessage());
      DB::rollback();
      return $this->errorMessage("Hubo un error inesperado!, intente nuevamente verificando que los campos estén completos!!.",402);
    }

    return $this->showModJsonOne($banner);

  }


  public function edit(Banner $banner){
    return view('administrador.modulos.banner.edit',
    [
      "banner"=>$this->showModJsonOne($banner)
    ]);
  }


  public function update(Banner $banner,BannerRequest $request){

    try {

      DB::beginTransaction();
      #begin Transaction Update Rol

      if($request->filled('nombre')){ //preguntamos si mando un campo nombre y no esta vacio
        $banner->nombre = $request->nombre;
        $banner->imagen = $request->imagen;
        $banner->enlace = $request->enlace;
        $banner->orden = $request->orden;
      }

      $banner->save();

      #End Begin Transaction update Rol
      DB::commit();

    }catch(QueryException $ex){
      //dd($ex->getMessage());
      DB::rollback();
      return $this->errorMessage("Hubo un problema en la actualización, intente nuevamente!.",402);
    }catch(\Exception $e){
      //dd($e->getMessage());
      DB::rollback();
      return $this->errorMessage("Hubo un error inesperado!, intente nuevamente!.",402);
    }

    return $this->showModJsonOne($banner);
  }


  public function delete(Banner $banner){
    $banner->delete();

    return $this->showModJsonOne($banner);
  }









}
