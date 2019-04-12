<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class barangsController extends Controller
{
    //
	public function index()
	{
		//
		$barangs = ['Meja','Kursi','Buku','Lampu'];
		return view('barangs.index',compact('barangs'));
	}
	public function create()
	{
		//
	}
	public function store(Request $request)
	{
		//
	}
	public function show($id)
	{
		//
	}
	public function edit($id)
	{
		//
	}
	public function update(Request $request, $id)
	{
		//
	}
	public function destroy($id)
	{
		//
	}
}
