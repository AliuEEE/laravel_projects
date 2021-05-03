<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oppurtunity;

use Illuminate\Support\Facades\DB;

class OppurtunityController extends Controller
{

    //index function in the home controller since index information displays on the home page

    public function createOppurtunityForm(){
        return view('users.createOppurtunityForm');
    }
}
