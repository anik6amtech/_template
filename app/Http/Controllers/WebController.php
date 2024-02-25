<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        // Set the layout for the entire controller
        $this->layout = 'layouts.app';

        // ... your controller logic

        // Include additional scripts for this method
        $this->pushScripts(['js/another-script.js']);
    }
}
