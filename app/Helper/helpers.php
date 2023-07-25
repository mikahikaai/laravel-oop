<?php

function rules(string $jenis_mobil)
{
    switch ($jenis_mobil) {
        case 'GRAN MAX':
        case 'L300':
            return collect([
                'kateg_mobil' => 'S',
                'kecepatan_kosong' => '55',
                'kecepatan_muatan' => '40',
            ]);
            break;
        case 'ENGKEL':
            return collect([
                'kateg_mobil' => 'M',
                'kecepatan_kosong' => '55',
                'kecepatan_muatan' => '40',
            ]);
            break;
        case 'PS':
            return collect([
                'kateg_mobil' => 'L',
                'kecepatan_kosong' => '50',
                'kecepatan_muatan' => '35',
            ]);
            break;
        default:
            return collect([
                'kateg_mobil' => 'XL',
                'kecepatan_kosong' => '45',
                'kecepatan_muatan' => '30',
            ]);
            break;
    }
}
