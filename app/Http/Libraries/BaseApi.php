<?php

// perbedaan helpers dan libraries
// helpers : bikin API, method atau func nya cuman ada 1
// libraries : pake API, method atau func nya lebih dari 1

namespace App\Http\Libraries;
// mengatur posisi file : namespace
use Illuminate\Support\Facades\Http;

class BaseApi
{
    // variable yang cuman bisa diakses di class ini dan turunannya
    protected $baseUrl;
    // constractor |:| menyiapkan isi data, dijalankan otomatis tanpa dipanggil
    public function __construct()
    {
        // var $baseUrl yang diatas diisi nilainya dari isian file .env bagian API_HOST
        // var ini diisi otomatis ketika file/class BaseApi dipanggil di controller
        $this->baseUrl ="http://127.0.0.1:7717";
    }
    private function client()
    {
        // koneksikan ip dari var $baseUrl ke depedency Http
        // menggunakan depedency Http karena project API nya berbasis web (protocol Http) 
        return Http::baseUrl($this->baseUrl);
    }
    public function index(String $endpoint, Array $data = [])
    {
        // manggil ke func client yang diatas, terus manggil path yang dari $endpoint yang dikirim controllernya, kalau ada data yang mau dicari (params di postman) diambil dari parameter2 $data
        return $this->client()->get($endpoint, $data);
    }
    public function store(String $endpoint, Array $data = [])
    {
        // pake post() karena buat route tambah data di project REST API nya pake ::post
        return $this->client()->post($endpoint, $data);
    }
    public function edit(String $endpoint, Array $data = [])
    {
        // manggil ke func client yang diatas, terus manggil path yang dari $endpoint yang dikirim controllernya, kalau ada data yang mau dicari (params di postman) diambil dari parameter2 $data
        return $this->client()->get($endpoint, $data);
    }
    public function update(String $endpoint, Array $data = [])
    {
        // manggil ke func client yang diatas, terus manggil path yang dari $endpoint yang dikirim controllernya, kalau ada data yang mau dicari (params di postman) diambil dari parameter2 $data
        return $this->client()->patch($endpoint, $data);
    }
    public function delete(String $endpoint, Array $data = [])
    {
        // manggil ke func client yang diatas, terus manggil path yang dari $endpoint yang dikirim controllernya, kalau ada data yang mau dicari (params di postman) diambil dari parameter2 $data
        return $this->client()->delete($endpoint, $data);
    }
    public function trash(String $endpoint, Array $data = [])
    {
        // manggil ke func client yang diatas, terus manggil path yang dari $endpoint yang dikirim controllernya, kalau ada data yang mau dicari (params di postman) diambil dari parameter2 $data
        return $this->client()->get($endpoint, $data);
    }
    public function restore(String $endpoint, Array $data = [])
    {
        // manggil ke func client yang diatas, terus manggil path yang dari $endpoint yang dikirim controllernya, kalau ada data yang mau dicari (params di postman) diambil dari parameter2 $data
        return $this->client()->get($endpoint, $data);
    }
    public function permanent(String $endpoint, Array $data = [])
    {
        // manggil ke func client yang diatas, terus manggil path yang dari $endpoint yang dikirim controllernya, kalau ada data yang mau dicari (params di postman) diambil dari parameter2 $data
        return $this->client()->get($endpoint, $data);
    }
}