<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me ()
    {
        return
        [
            "Nis" => 3103118039,
            "Name" => "Darussalam Priana Putra",
            "Gender" => "Laki-Laki",
            "Phone" => "6289508677285",
            "Class" => "XII RPL 2",
        ];
    }
}
