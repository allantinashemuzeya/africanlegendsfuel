<?php

namespace App\Http\Controllers;

use App\Http\Services\PagesDiscovery\Discover;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function home(): Factory|View|Application
    {
        $data = (new Discover())->homepage();

        $data['current'] = 'Home';

//        dd($data);
        return view('Pages/Home', ['data' => $data]);
    }

    public function about(): Factory|View|Application
    {
        return view('Pages/About', ['current' => 'About', 'title' => 'About Us']);
    }

    public function services(): Factory|View|Application
    {
        return view('Pages/Services', ['current' => 'Services', 'title' => 'Bunkering & Services']);
    }

    public function salesTerms(): Factory|View|Application
    {
        return view('Pages/SalesTerms', ['current' => 'SalesTerms',  'title' => 'Our Sales Terms']);
    }

    public function responsibility(): Factory|View|Application
    {
        return view('Pages/Responsibility', ['current' => 'Responsibility',  'title' => 'Responsibility']);
    }

    public function contact(): Factory|View|Application
    {
        return view('Pages/Contact', ['current' => 'Contact', 'title' => 'Contact Us']);
    }
}
