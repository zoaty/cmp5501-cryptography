<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrequencyController extends Controller
{
    public function calculate(){
        if(isset($_POST['submit']))
        {
            $str = $_POST['name1'];
            $freq = array();
            $words = str_word_count($str);
            $lines = substr_count( $str, "\n" );
//To find length of the given string
            for($i = 0; $i < strlen($str); $i++)
            {
                array_push($freq, 1);
                for($j = $i+1; $j < strlen($str); $j++)
                {
                    if($str[$i] == $str[$j])
                    {
                        $freq[$i]++;
//Set $str[$j] to 0 to avoid printing visited character
                        $str[$j] ='0';
                    }
                }
            }
            return view('calculate', compact('str', 'freq', 'words', 'lines'));
        }
    }
}
