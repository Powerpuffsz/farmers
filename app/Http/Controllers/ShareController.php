<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Share; //include model

class ShareController extends Controller
{

    public function index()
    {
      $shares = Share::all();

      return view('shares.index', compact('shares'));
    }

    public function create()
    {
    return view('shares.create');
    
    }


    public function store(Request $request)
    {
      $request->validate([
        'share_name'=>'required',
        'share_price'=> 'required|integer',
        'share_qty' => 'required|integer'
      ]);
      
      $share = new Share([
        'share_name' => $request->get('share_name'),
        'share_price'=> $request->get('share_price'),
        'share_qty'=> $request->get('share_qty')
      ]);
      $share->save();

      $share = Share::create([
        'share_name' => $request->get('share_name'),
        'share_price'=> $request->get('share_price'),
        'share_qty'=> $request->get('share_qty')
      ]);

      
      return redirect('/shares')->with('success', 'Stock has been added');
    }


    public function edit($id)
    {
        $share = Share::find($id);

        return view('shares.edit', compact('share'));
    }
}
