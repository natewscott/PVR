<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageContentController extends Controller
{
    public function home() {
    	return view('pages/home');
    }
    public function main_house() {
    	return view('pages/main_house');
    }
    public function history() {
    	return view ('pages/history');
    }
    public function riding() {
    	return view('riding');
    }
    public function info() {
    	return view('pages/info');
    }
    public function party_pad() {
    	return view('pages/party_pad');
    }
    public function bunk_house() {
    	return view('pages/bunk_house');
    }
    public function activities() {
        return view('pages/activities');
    }
    public function shooting() {
    	return view('pages/shooting');
    }
    public function accommodations() {
    	return view('pages/accommodations');
    }
    public function contact() {
        return view('pages/contact');
    }
}
