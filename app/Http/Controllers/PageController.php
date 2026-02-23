<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return '244107020156 - Wahda Adella Putri Febriana';
    }

    public function articles($id) {
        return 'Halaman Artikel dengan Id ' . $id;
    }
}

