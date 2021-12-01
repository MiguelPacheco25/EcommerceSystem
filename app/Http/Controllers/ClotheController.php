<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clothe;

class ClotheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        if ($request->hasFile('clothe_image')) {
            $file = $request->file('clothe_image');
            //$name = time().$file->getClientOriginalName();
            //$file->move(public_path().'/img/cursos/', $name);
            $storagePath = \Storage::disk('local')->put('/public/img/',$file);
            $name = basename($storagePath);
                
        }

        $clothe = Clothe::create([
            'name' => 'London',
            'image' => $name,
            'color' => 'London',
            'amount' => 'London',
            'price' => 'London',
            'categorie_id' => 'London',
            'size_id' => 'London',
            'value_one' => 'London',
            'value_two' => 'London'
        ]);
        
        return $request;
        /*$file = "";
        if($request->hasFile('image')){
            $file = $request->file('image');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/img/', $name);
        }

        $clothe = Clothe::create([
            'name' => 'London',
            'image' => $file,
            'color' => 'London',
            'amount' => 'London',
            'price' => 'London',
            'categorie_id' => 'London',
            'size_id' => 'London',
            'value_one' => 'London',
            'value_two' => 'London'
        ]);*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
