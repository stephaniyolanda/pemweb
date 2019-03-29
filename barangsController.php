<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class barangsController extends Controller
{
    //
	public function index()
	{
		$barangs = 'Aqua 400ML';
		return view('barangs/index',compact('barangs'));
	}
	
	public function show()
	{
		$barangs = ['Aqua 115 ML','Minuman Bersoda','Buku Sejarah','Mouse','CPU'];
		return view('barangs/show',compact('barangs'));
	}
}
