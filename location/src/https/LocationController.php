<?php

namespace Increment\Imarket\Location\Http;

use Illuminate\Http\Request;
use App\Http\Controllers\APIController;
use Increment\Imarket\Location\Models\Location;
use Carbon\Carbon;

class LocationController extends APIController
{
    //
    function __construct(){
      $this->model = new Location();
      // $this->notRequired = array(
      //     'name', 'address', 'prefix', 'logo', 'website', 'email'
      // );
    }

    public function getByParams($column, $value){
      $result = Location::where($column, '=', $value)->get();
      return sizeof($result) > 0 ? $result[0] : null;
    }
}
