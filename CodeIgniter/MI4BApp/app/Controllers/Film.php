<?php

namespace App\Controllers;

use App\Controllers\BaseController;

//step1
use App\Models\FilmModel;

class Film extends BaseController
{

    //step2 prperti
    protected $Film;
    //step 3 buat fungsi construct untuk inisiasi clas model
    public function __construct()
    {
        //step 4 panggil property film
        $this->Film = new FilmModel();
    }


    public function index()
    {
        // //step 5 memanggil ulang
        // dd($this->Film->getFilm());
        //array
        $data['data_film'] = $this->Film->getAllDataJoin();
        return view("film/index", $data);
        
    }

    public function all(){
        $data['semuaFilm'] = $this->Film->getAllDataJoin();
        return view("film/semuaFilm",$data);
    }

    public function film_by_id(){
        dd($this->Film->getDataByID(1));
    }

    public function film_by_genre(){
        dd($this->Film->getDataBy("Horror"));
    }

    public function film_order(){
        dd($this->Film->getOrderBy());
    }

    public function film_limit_five(){
        dd($this->Film->getLimit());
    }
}
