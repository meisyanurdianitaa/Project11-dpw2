<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class ClientController extends Controller
{



  function showshop()
  {
    
    $data['list_produk'] = Produk::paginate(4);
    return view('client.shop', $data);
  }

  function filter()
  {
    $nama = request('nama');
    $data['nama'] = $nama;
    $data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();

    return view('client.shop', $data);
  }

 


  function showhome()
  {
    return view('client.home');
  }
  function showcontact()
  {
    return view('client.contact');
  }
  function showabout()
  {
    return view('client.about');
  }

  function showprodukshop(Produk $produk)
  {

    $data['produk'] = $produk;
    return view('client.produkshop', $data);
  }
}
