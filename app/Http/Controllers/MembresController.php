<?php

namespace App\Http\Controllers;

use App\Models\Membres;
use App\Http\Requests\StoreMembresRequest;
use App\Http\Requests\UpdateMembresRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MembresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $membres = Membres::all();
        return view('home', compact('membres'));
    }

    public function index2()
    {
        $membres = Membres::all();
        return view('addmembre', compact('membres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMembresRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newmember = new Membres();
        $newmember->name = $request->name;
        $newmember->genre = $request->genre;
        $newmember->age = $request->age;
        $newmember->save();
        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Membres  $membres
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id_show = Membres::find($id);
        return view('showmembre', compact('id_show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Membres  $membres
     * @return \Illuminate\Http\Response
     */
    public function edit(Membres $membres)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMembresRequest  $request
     * @param  \App\Models\Membres  $membres
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Membres::find($id);
        $update->name = $request->name;
        $update->age = $request->age;
        $update->genre = $request->genre;
        $update->save();
        return redirect(route('home'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Membres  $membres
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todelete = Membres::find($id);
        $todelete->delete();
        return redirect(route('home'));
    }
    public function destroy2()
    {
        $todelete2 = Membres::select('SELECT * from membres');
        $todelete2->delete();
        return redirect(route('home'));
    }
}
