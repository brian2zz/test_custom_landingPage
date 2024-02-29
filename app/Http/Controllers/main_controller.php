<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class main_controller extends Controller
{
    public function index()
    {
        // Session::forget('component');
        // dd(session('header')['title']);
        return view('pages.main.index');
    }
    public function add_layer1(Request $request)
    {


        if ($request->layer1 == '6') {
            // $components = Session::get('component', []);
            $components = [
                'component' => $request->layer1,
                'title' => 'Navbar',
                'link' => ['Home', 'services', 'About', 'Contact'],
                'href' => ['#scrollspyHero', '#scrollspyServices', '#scrollspyAbout', '#scrollspyContact'],
            ];
            Session::put('header', $components);
        } else if ($request->layer1 == '5') {
            Session::put('footer', $request->layer1);
        } else if ($request->layer1 == '1') {
            Session::put('hero', $request->layer1);
        } else {
            $components = Session::get('component', []);
            $components[] = $request->layer1;
            Session::put('component', $components);
        }
        // dd($request->layer1 == '6');
        return redirect('/');
    }
    public function delete_component(Request $request)
    {
        if ($request->query('component') == 'header') {
            Session::forget('header');
        } elseif ($request->query('component') == 'hero') {
            Session::forget('hero');
        } elseif ($request->query('component') == 'footer') {
            Session::forget('footer');
        } else {
            $parts = explode("-", $request->query('component'));
            Session::forget('component.' . $parts[1]);
        }
        return redirect('/');
    }
}
