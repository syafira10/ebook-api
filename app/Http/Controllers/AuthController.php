<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return[
            'Nis' => 3103120214,
            'Name' => 'Syafira Luthfi Masayu',
            'Phone' => '082242142225',
            'Class' => 'XII RPL 7',
        ];
    }
}