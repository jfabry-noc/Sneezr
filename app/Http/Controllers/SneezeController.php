<?php

namespace App\Http\Controllers;

use App\Models\Sneeze;
use Illuminate\Http\Request;

class SneezeController extends Controller
{
    public function index()
    {
        return view('sneezes.index', [
            'sneezes' => Sneeze::latest()->paginate(3),
        ]);
    }
}
