<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function sayHello($firstName, $lastName = "")
    {
        return $firstName . " " . $lastName;
    }

    function t1(Request $c)
    {
        $a = $c->all();
        $b = 0;
        $s = 0;
        $error = "";
        for ($i = 1; $i <= $a['number']; $i++) {
            $b = $a['number'] % $i;
            if ($b == 0) {
                $s = $s + 1;
            }
        }

        if ($s == 2) {
            $error = "عدد اول است";
        } else {
            $error = "عدد اول نیست";
        }
        return view('greeting')
            ->with('error', $error);


        // $a = [
        //     'name' => 'Master it',
        //     'year' => 2025
        // ];
        // // var_dump($a);
        // dd($a);
    }

    function t2(Request $req)
    {
        $data = $req->all();
        $f = 1;
        $error = "";

        if ($data['number'] > 0 && $data['number'] <= 10) {
            for ($i = 1; $i <= $data['number']; $i++) {
                $f *= $i;
            }
        } else {
            $error = "عدد باید بین یک تا ده باشد.";
        }
        // $age = 2025 - $data['birth'];
        // return view('foo')
        //     ->with('firstname', $data['firstname'])
        //     ->with('lastname', $data['lastname'])
        //     ->with('age', $age);
        return view('fact')
            ->with('number', $data['number'])
            ->with('fact', $f)
            ->with('error', $error);
    }

    function t3($in, $fn = "", $ln = "", $birthday = 2025)
    {
        $age = 2025 - $birthday;

        $s = 0;
        $error = "";
        if ($in > 0 && $in <= 10) {
            for ($i = 1; $i <= $in; $i++) {
                $s += $i;
            }
        } else {
            $error = "عدد باید بین یک تا ده باشد.";
        }

        return view('foo')
            ->with('age', $age)
            ->with('first_name', $fn)
            ->with('last_name', $ln)
            ->with('input', $in)
            ->with('sum', $s)
            ->with('error', $error);
    }

    function t4($p)
    {
        // return "Hello Welcome to your system";
        "<br>";
        $data = [
            'nana' => $p
        ];
        return view('footer', $data);
    }
}