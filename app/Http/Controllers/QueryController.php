<?php

namespace App\Http\Controllers;

use App\Query;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class QueryController extends Controller
{
    public function index()
    {
        $queries = Query::all();
        return $queries;
    }

    public function store()
    {
        try {
            $query = new Query();
            $query->name = request('name');
            $query->email = request('email');
            $query->case = request('case');
            $query->message = request('message');
            $query->save();
            session()->flash("message", "Thank you for your message. We will get back to you as soon as we can.");
            redirect('/');

        } catch (QueryException $ex) {
            session()->flash("message", "Something is wrong. Please try later.");
            redirect('/');
        }

        return redirect('/');
    }
}
