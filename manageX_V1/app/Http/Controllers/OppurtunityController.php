<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oppurtunity;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;


class OppurtunityController extends Controller
{

    //index function in the home controller since index information displays on the home page

    public function createOppurtunityForm(){
        return view('users.createOppurtunityForm');
    }

    public function createOppurtunity(Request $request){


        $customer = $request->input('customer');
        $service = $request->input('service');
        $description = $request->input('description');
        $duration = $request->input('duration');
        $partner = $request->input('partner');
        $status = $request->input('status');
        $id = $request->input('user_id');

        $id = Auth::user()->id;


        DB::table('oppurtunities')->insert([
            'customer'=>$customer,
            'service' => $service,
            'description' => $description,
            'duration' => $duration,
            'partner' => $partner,
            'status' => $status,
            'user_id' => $id

        ]);

        return \redirect('/home');
    }
}
