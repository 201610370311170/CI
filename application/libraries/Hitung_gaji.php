<?php

class Hitung_gaji
{

    public function index()
    { }


    // Golongan 1        = Staff Kepala / Supervisor
    // Golongan 2        = Karyawan 
    public function hitung($kehadiran, $capaian_target, $golongan)
    {
        $UMR             = 3000000;

        switch ($golongan) {
            case 1:
                if ($kehadiran > 10) {
                    $hasil_kehadiran = $kehadiran * 10000;

                    if ($capaian_target == "Tercapai") {
                        $bonus = 250000;
                    } else {
                        $bonus = 0;
                    }

                    $hasil_gaji = $UMR + $hasil_kehadiran + $bonus;
                    return $hasil_gaji;
                } else {
                    $hasil_gaji = 0;
                    return $hasil_gaji;
                }
                break;

            case 2:
                if ($kehadiran > 10) {
                    $hasil_kehadiran = $kehadiran * 10000;

                    if ($capaian_target == "Tercapai") {
                        $bonus = 10000;
                    } else {
                        $bonus = 0;
                    }

                    $hasil_gaji = $UMR + $hasil_kehadiran + $bonus;
                    return $hasil_gaji;
                } else {
                    $hasil_gaji = 0;
                    return $hasil_gaji;
                }
                break;

            default:
                echo "Silahkan tentukan golongan Karyawan";
        }
    }
}
