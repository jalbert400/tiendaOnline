<?php

namespace App\Traits;

use DB;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

trait SystemResponser
{

  private function successResponse($data, $permisos = null)
  {

    //return response()->json(["error"=>false,"response"=>$data,"permisos"=>$permisos]);
    return response()->json(["error" => false, "response" => $data]);
  }

  private function transformData($data, $transformer)
  {
    $transformation = fractal($data, new $transformer);

    return $transformation->toArray();
  }



  protected function showContJsonAll(Collection $collection, $permisos = false)
  {

    if ($collection->isEmpty()) {
      return $this->successResponse(["data" => $collection]);
    }

    //App\Administrador\Permiso::permisosGenerales()
    $transformer = $collection->first()->transformer; //utilizamos el transformer de cada modelo
    //$permisosModel = $permisos ? $collection->first()::permisosGenerales(Auth::user()) : null;

    $collection = $this->transformData($collection, $transformer);

    //return $this->successResponse($collection, $permisosModel);
    return $this->successResponse($collection);
  }
}
