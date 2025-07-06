<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function queries()
    {
        $results=User::all();
        return view('user',['users'=>$results]);
    }

    function insertData()
    {
        $results=User::insert([
            'name' => 'My user',
            'email' => 'myuser@gmail.com',
            'phone' => '112233'
        ]);
        if ($results) {
            return 'data inserted successfully';
        } else {
            return 'error in insert data';
        }

    }

    function updateData()
    {
        $results=User::where('name','User_221')->update([
            'name' => 'Sam bahadur',
        ]);
        if ($results) {
            return 'data updateData successfully';
        } else {
            return 'error in updateData data';
        }

    }





}
