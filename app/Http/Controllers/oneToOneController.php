<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Country;
use App\Models\Location;


class oneToOneController extends Controller
{
    public function oneToOne(){
        // $country = Country::find(1);
        $country = Country::where('nome', 'China')->get()->first();
        echo $country->nome;

        $location = $country->location;
        echo "<hr>" . $location->latitude;

    }
}
