<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    public function percobaan()
    {
    	$a = "alif";
    	return "nama saya adalah".$a;
    }
     public function percobaan2()
    {
    	return view('about');
    }
    public function percobaan3()
    {
    	$a = "alif";
        $b = "XI RPL 2";
        $c = "SMK ASSALAAM";
    	return view('latihan.saya',compact('a','b','c'));
    }
    public function percobaan4()
    {
        $a = 1;
        $b = 2;
        $c = 3;
        return view('latihan.seleksi',compact('a','b','c'));
    }
        public function param($data,$data2 = null)
    {
       $array = array ('hewan'=> ['kucing'=>['persia','anggora'],
                                      'burung'=>['kenari','lovebird'],
                                      'anjing'=>['bulldog','healder']],
                            
                            'buah'=> ['mangga'=>['harumanis','kaweni'],
                                      'alpukat'=>['hijau','hitam'],
                                      'jeruk' =>['bali,jepang']],

                            'komputer'=> ['asus'=>['456UR','456'],
                                          'dell'=>['alienwere','insporon'],
                                          'acer'=>['69030','77809']]
                                          );

       if ($data){
        $query =(array_keys($array[$data]));
        }
        if ($data2){
              $query =($array[$data][$data2]);
        }
       return view('buah',compact('query','data','data2'));


             
   }
}
    