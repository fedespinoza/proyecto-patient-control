<?php

namespace App\Http\Controllers;

use App\Models\WorkSocial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkSocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto=trim($request->get('texto'));
        $obras =DB::table('work_socials')
                    ->select('id', 'nombre','cuit', 'iva', 'cond_venta')
                    ->where('nombre', 'LIKE', '%'.$texto.'%')
                    ->orWhere('cuit', 'LIKE', '%'.$texto.'%')
                    ->orderBy('cuit', 'asc')
                    ->paginate(8);
        return view('os.index', compact('obras', 'texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('os.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obra = new WorkSocial();

        $obra->nombre = $request->nombre;
        $obra->cuit = $request->cuit;
        $obra->direccion = $request->direccion;
        $obra->iva = $request->iva;
        $obra->cond_venta = $request->cond_venta;
        $obra->url = $request->url;

        $obra->save();

        return redirect()->route('os.show', $obra);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obra = WorkSocial::find($id);
        return view("os.show", compact('obra'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obra = WorkSocial::find($id);
        return view("os.edit", compact('obra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $obra = WorkSocial::find($id);

        $obra->nombre = $request->nombre;
        $obra->cuit = $request->cuit;
        $obra->direccion = $request->direccion;
        $obra->iva = $request->iva;
        $obra->cond_venta = $request->cond_venta;
        $obra->url = $request->url;

        $obra->save();
        return redirect()->route('os.show', $obra);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obra = WorkSocial::find($id);
        $obra->delete();
        return redirect()->route('os.index', $obra);
    }
}
