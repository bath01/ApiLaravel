<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Matieres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
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

    public function stat1()
    {
        //
        //$matieres = Matieres::get();
        //$matierArray = [];
        //$matiereArray = [];

        //foreach ($matieres as $matiere) {
        //    $matierArray[] = $matiere->nom;
        //    $matiereArray[] = $matiere->publications->count();
        //}

        try {


            //dd($matierArray, $matiereArray);
            $data = DB::table('publicationn')->select(DB::raw('nom,COUNT(*)as nbpub'))
                ->join('matieres', 'publicationn.matierePub', '=', 'matieres.id')
                ->groupBy('nom')
                ->get();
            // $data = DB::table('commentaire')->select(DB::raw('date,COUNT(*) as nbcom'))
            // ->join('commentaire', 'commentaire.created_date', '=', 'commentaire.nbcom')
            // ->groupBy('nom')
            // ->get();
            return response()->json(['code' => 200, 'status' => 'success', 'data' => $data]);
        } catch (\Throwable $th) {
            return response()->json(['code' => 201, 'status' => 'error', 'data' => '[]', 'message' => $th]);
        }
    }


    public function stat2()
    {

        try {

            $dataCom = DB::table('commentaire')->select(DB::raw('COUNT(*)as nbcomm,created_date'))
                ->groupBy('created_date')
                ->get();
            return response()->json(['code' => 200, 'status' => 'success', 'data' => $dataCom]);
        } catch (\Throwable $th) {
            return response()->json(['code' => 201, 'status' => 'error', 'data' => '[]', 'message' => $th]);
        }
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
        //
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