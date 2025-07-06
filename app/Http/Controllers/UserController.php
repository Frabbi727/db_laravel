<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{


    function queries()
    {
        // Fetch users whose phone number contains '123'
        $results = DB::table('users')->get();
        // $results = DB::table('users')->where('phone', 'like', '%123%')->get();
        /* $results = DB::table('users')->first();  // Returns single object
         $results = [$results];*/

        return view('users', ['results' => $results]);
    }

    function insertData()
    {
        $results = DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'jhon@gmail.com',
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
        $results = DB::table('users')->where('name', 'John Doe')->update(
            [
                'phone' => '01753573579'
            ]
        );
        if ($results) {
            return 'data updated successfully';
        } else {
            return 'error update data';
        }
    }
    function deleteData()
    {
        $results = DB::table('users')->where('name', 'John Doe')->delete();
        if ($results) {
            return 'data delete successfully';
        } else {
            return 'error delete data';
        }
    }

}
