<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class CPController extends Controller {


    public function login() {
        return redirect('/login');
    }

    public function home() {
        return redirect('/');
    }
}