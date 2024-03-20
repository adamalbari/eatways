<?php

//app/Http/Controllers/SignupController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    // Method untuk menampilkan halaman pendaftaran
    public function create()
    {
        return view('signup');
    }
}
