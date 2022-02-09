<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class TrainController extends Controller
{
    public function go(){
        return view(
            'test',
            [
                'name' => 'ahmed', 'age' => 20, 'books' => [
                    'HTML',
                    'CSS',
                    'PHP',
                ]
            ]
                );
    }

}
