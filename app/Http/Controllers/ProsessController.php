<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProsessController extends Controller
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
        //
        $nbr1=$request->nbr1;
        $nbr2=$request->nbr2;
        $op=$request->op;

        if($op=='+'){
            $hasil = $nbr1+$nbr2;
        }elseif($op=='-'){
            $hasil = $nbr1-$nbr2;
        }elseif($op=='x'){
            $hasil = $nbr1*$nbr2;
        }elseif($op=='/'){
            if($nbr2 !=0){
                $hasil = $nbr1/$nbr2;
            }
            else{
                $hasil="tidak bisa";

            }
        }
        return view('kalkulator.hasil',compact('hasil'));
    }
}
        
   