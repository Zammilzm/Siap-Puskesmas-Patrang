<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\BPJS;

use Carbon\Carbon;

class BpjsController extends Controller
{
    	public function bpjs()
    	{
    		$bpjses = BPJS::all();

    		return view('bpjs', compact('bpjses'));
    		// return $mahasiswas;
    	}
    }