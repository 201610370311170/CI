<?php

class Hitung_gaji
{

    public function index()
    { }



    public function print($kehadiran, $capaian_target)
    {
        // echo "haloo semua";

        $UMR                = 3000000;
        $hasil_kehadiran    = $kehadiran * 10000;

        if ($capaian_target == "Tercapai") {
            $bonus = 2500000;
        } else {
            $bonus = 0;
        }

        $hasil_gaji = $UMR + $hasil_kehadiran + $bonus;
        return $hasil_gaji;
    }
}
