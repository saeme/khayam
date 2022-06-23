<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    public function way1()
    {
        $finalArray = [];
        $r = 22;
        $co = 1;

        for ($i = 0; $i < $r; $i++) {
            $finalArray[] = "\t";
            for ($ws = 1; $ws <= $r - $i; $ws++) {
                $finalArray[] = '&nbsp; &nbsp;';
            }

            for ($j = 0; $j <= $i; $j++) {
                if ($j == 0 || $i == 0)
                    $co = 1;
                else
                    $co = $co * ($i - $j + 1) / $j;
                $finalArray[] = $co . "&nbsp; &nbsp; &nbsp;";
            }
            $finalArray[] = "<br>";
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
        $finalarray = [];
        $nums = 0;
        $n = 20;

        for ($i = 0; $i <= $n - 1; $i++) {
            for ($j = 0; $j < $n - $i; $j++)
                $finalArray[] = "&nbsp;&nbsp;&nbsp;&nbsp;";
            for ($j = 0; $j <= $i; $j++) {
                if ($j == 0 || $j == $i)
                    $nums = 1;
                else
                    $nums = $this->fact($i) / ($this->fact($j) * $this->fact($i - $j));

                    $sNum = 6 - strlen((string) $nums);
                    $space = '';
                    for ($t=0; $t < $sNum; $t++) { 
                        $space .= "&nbsp;";
                    }
                    $finalArray[] = $space;
                $finalArray[] = $nums;
            }
            $finalArray[] = "<br>";
        }
        return view("way1")->with(['numbers' => $finalArray]);
    }




// PHP implementation for
// Pascal's Triangle
  
// for details of this function
// function binomialCoeff($n, $k)
// {
//     $res = 1;
//     if ($k > $n - $k)
//     $k = $n - $k;
//     for ($i = 0; $i < $k; ++$i)
//     {
//         $res *= ($n - $i);
//         $res /= ($i + 1);
//     }
// return $res;
// }
  
// // Function to print first
// // n lines of Pascal's 
// // Triangle
// function printPascal($n)
// {
//     // Iterate through every line and
//     // print entries in it
//     for ($line = 0; $line < $n; $line++)
//     {
//         // Every line has number of 
//         // integers equal to line 
//         // number
//         for ($i = 0; $i <= $line; $i++)
//                 echo "".$this->binomialCoeff($line, $i)."&nbsp;";
                  
//         echo "<br>";
//     }
// }
  
//     public function way2()
//     {
//         // Driver Code
//         $n=7;
//         dd($this->printPascal($n));
//     }
}
