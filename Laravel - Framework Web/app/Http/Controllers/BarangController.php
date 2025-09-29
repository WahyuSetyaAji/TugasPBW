<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nama ='Mahasiswa UNSIKA';
        return view('product',['nama'=> $nama, 'alertMessage'=> 'Selamat belajar blade','alertType'=> 'success']);
    }

    //public function index($id)
   // {
        // Mengembalikan view 'barang' dan melewatkan $id sebagai variabel 'isi_data'.
        //return view('barang', ['isi_data' => $id]);
   // }
}