<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    //

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function restaurant()
    {
        return view('restaurant');
    }    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function socios()
    {
        return view('socios');
    }  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function eventos()
    {
        return view('eventos');
    }  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function accommodation()
    {
        return view('accommodation');
    }    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function matrimonial()
    {
        return view('matrimonial');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function matrimonialSofa()
    {
        return view('matrimonialSofa');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function doble()
    {
        return view('doble');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function duplex()
    {
        return view('duplex');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function gallery()
    {
        return view('gallery');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function especial()
    {
        return view('especial');
    }      
    
}
