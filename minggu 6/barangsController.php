<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class barangsController extends Controller
{
    //
	public function index()
	{
		$barangs = DB::table('barangs')
			->join('kategori','barangs.id_kategori','=','kategori.id')
			->get();
		
		return view('barangs/index',compact('barangs'));
	}
	
	
	public function create()
	{
		//
	}
	public function store()
	{
		
		DB::table('barangs')
		->insert(array([
			'nama' => 'Lampu',
			'id_kategori' => 1,
			'qty' => 14,
			'harga_beli' => 40000,
			'harga_jual' => 60000,
		]));
		
		echo "Data Berhasil Ditambah";
	}
	public function show($id)
	{
		//
	}
	public function edit($id)
	{
		// 
	}
	public function update()
	{
		DB::table('barangs')->where('id',3)
		->update([
			'nama' => 'Bola Lampu',
			'qty' => 20,
			'harga_beli' => 45000,
			'harga_jual' => 55000,
		]);
		
		echo "Data Berhasil Diperbaharui";
	}
	public function destroy($id)
	{
		
	}
	
	public function delete()
	{
		DB::table('barangs')->where('id',3)->delete();
		echo "Data Berhasil Dihapus";
	}
}
