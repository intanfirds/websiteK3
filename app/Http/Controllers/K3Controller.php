<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class K3Controller extends Controller
{
    public function index()
    {
        return view('k3.index');
    }

    public function pendahuluan()
    {
        return view('k3.pendahuluan');
    }

    public function landasan()
    {
        return view('k3.landasan');
    }

    public function lingkungan()
    {
        return view('k3.lingkungan');
    }

    public function keselamatan()
    {
        return view('k3.keselamatan');
    }

    public function apd()
    {
        return view('k3.apd');
    }

    public function pertolongan()
    {
        return view('k3.pertolongan');
    }

     public function organisasi()
    {
        return view('k3.organisasi');
    }

     public function risiko()
    {
        return view('k3.risiko');
    }

     public function audit()
    {
        return view('k3.audit');
    }
}
