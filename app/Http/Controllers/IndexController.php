<?php

namespace CodeAgenda\Http\Controllers;

class IndexController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function Index()
    {
        return view('layout');
    }
}
