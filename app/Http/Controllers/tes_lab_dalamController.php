<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\tes_laboratorium_dalam;

use App\pelayanan;

use Carbon\Carbon;

class tes_lab_dalamController extends Controller
{
	public function hasiltes()
	{
		$hasilteslabs = tes_laboratorium_dalam::all();
		return view('lihatteslabdalam', compact('hasilteslabs'));
	}
}