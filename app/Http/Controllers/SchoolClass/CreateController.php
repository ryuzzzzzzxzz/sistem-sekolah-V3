<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        {
        $classes = [

                    [

                        'id' => 1,

                        'name' => 'XII AKL 1',

                        'grade' => 'XII',

                        'major' => 'AKL',

                        'homeroom_teacher' => 'Budi Santoso'

                    ],

                    [

                        'id' => 2,

                        'name' => 'XII TKJ 1',

                        'grade' => 'XII',

                        'major' => 'TKJ',

                        'homeroom_teacher' => 'Siti Aminah'

                    ]

                    ];
        return view('classes.create',[
            'title'=> 'sistem sekolah - tambah kelas',
            'classes'=> $classes
        ]);
    }
    }
}
