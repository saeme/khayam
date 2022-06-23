<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    public function way1()
    {
        $finalArray = [];
        $r = 7;
        $co = 1;

        for ($i = 0; $i < $r; $i++) {
            $finalArray[] = "\t";
            for ($ws = 1; $ws <= $r - $i; $ws++) {
                $finalArray[]='&nbsp; &nbsp;';
            }

            for ($j = 0; $j <= $i; $j++) {
                if ($j == 0 || $i == 0)
                    $co = 1;
                else
                    $co = $co * ($i - $j + 1) / $j;
                $finalArray[]= $co . "&nbsp; &nbsp; &nbsp;";
            }
            $finalArray[]= "<br>";
        }
        
        return view("way1")->with(['numbers' => $finalArray]);
    }

    private function fact($num)
    {
        $fact = 1;
        for ($i = 1; $i <= $num; $i++)
            $fact *= $i;
        return $fact;
    }
    public function way2()
    {
        $finalarray=[];
        $nums = 0;
        $n = 12;

        for ($i = 0; $i <= $n - 1; $i++) {
            for ($j = 0; $j < $n - $i; $j++)
                $finalArray[]= "&nbsp;&nbsp;";
            for ($j = 0; $j <= $i; $j++) {
                if ($j == 0 || $j == $i)
                    $nums = 1;
                else
                    $nums = $this->fact($i) / ($this->fact($j) * $this->fact($i - $j));
                $finalArray[]=
                 $nums;
            }
            $finalArray[]= "&nbsp;";
            $finalArray[]= $nums;
            $finalArray[]= "<br>";
        }
        return view("way1")->with(['numbers' => $finalArray]);
        jjj

    }
}
