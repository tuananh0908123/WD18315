<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinhVien extends Controller
{
    public function showStudentInfo()
    {
        $data = [
            [
                "ten" => "Tuan Anh",
                "tuoi" => 19
            ],
            [
                "ten" => "ABC",
                "tuoi" => 20
            ]
        ];

        return view('thongtinsv', ['thongtinsv' => $data]);
    }
}