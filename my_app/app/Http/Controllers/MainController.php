<?php
namespace App\Http\Controllers;

class MainController extends Controller
{
    public function index()
    {
        return view('main', ['title' => 'Банківське кредитування']);
    }

    public function about()
    {
        return view('about', ['title' => 'Про проєкт']);
    }
}