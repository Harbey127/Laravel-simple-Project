<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testAction(){

        $allPosts = [
            ['id' => 1, 'title' => 'MVC Pattern', 'Posted_by' => 'Ahmed', 'created_at' => '2020-04-03'],
            ['id' => 2, 'title' => 'Artisan Commends', 'Posted_by' => 'Mohamed', 'created_at' => '2020-04-06'],
            ['id' => 3, 'title' => 'Schedule Jobs', 'Posted_by' => 'Ali', 'created_at' => '2020-04-20'],
            ['id' => 4, 'title' => 'Architecture', 'Posted_by' => 'Ibrahim', 'created_at' => '2020-04-28'],

        ];
        return view('test', ['posts' => $allPosts]);
    }
}

