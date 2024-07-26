<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('evaluasi/jawab/empat/{jawab}', function($jawab){
    $profile=[
        'tkro'=>[
            'nama'=>'Teknik Kendaraan Ringan Otomotif',
            'kajur'=>'Rivan Indrayan, S.T',
            'kelas'=>6
        ],
        'tp'=>[
            'nama'=>'Teknik Permesinan',
            'kajur'=>'Siti Hamidah, A.Md',
            'kelas'=>5
        ],
        'rpl'=>[
            'nama'=>'Rekayasa Perangkat Lunak',
            'kajur'=>'Joko Kristianto, S.T',
            'kelas'=>3
        ],
        'ak'=>[
            'nama'=>'Akutansi',
            'kajur'=>'Yulianti, S.E, M.M',
            'kelas'=>1
        ],
    ];

    $title='Evaluasi';

    return view('evaluasi',['profile'=>$profile,'jawab'=>$jawab,'title'=>$title]);
});