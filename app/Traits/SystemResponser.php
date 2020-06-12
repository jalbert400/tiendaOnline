<?php

namespace App\Traits;

use DB;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

trait SystemResponser
{

  private function successResponse($data)
  {

    return response()->json(["error" => false, "response" => $data]);
  }

  protected function showContJsonAll(Collection $collection)
  {

    return $this->successResponse(["data" => $collection]);
  }
}
