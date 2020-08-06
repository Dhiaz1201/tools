<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Zip;

class FlashtempController extends Controller
{
    public function index()
    {
        return view("flashtemp");
    }

    public function store()
    {
    //   request()->validate([
    //       'flashtemp'=> 'accept'
    //       ]);
    $is_valid = Zip::check(request('zip'));
    if ($is_valid) {
        return "berhasil ekstrak";
    }else {
        return "gagal ekstrak";
    }
    }
}
