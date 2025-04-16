<?php

namespace App\Models;

class Pelanggan
{
    private static $data = [
        [
            'Id_Pelanggan' => '01',
            'Nama' => 'Ferdi',
            'Alamat' => 'jln.afandi',
            'Nomor_Telepon' => '089508947689',
            'Email' => 'ferdiiiii@gmail.com',
            'Riwayat_Pembelian' => 'gyvfgby'
        ],
        [
            'Id_Pelanggan' => '02',
            'Nama' => 'ariq',
            'Alamat' => 'jln.babarsari',
            'Nomor_Telepon' => '089508947497',
            'Email' => 'ariqqqqqq@gmail.com',
            'Riwayat_Pembelian' => 'hdggddhbd'
        ],
    ];

    public static function all()
    {
        return self::$data;
    }

    public static function find($id)
    {
        foreach (self::$data as $Pelanggan) {
            if ($Pelanggan['Id_Pelanggan'] == $id) {
                return $Pelanggan;
            }
        }
        return null;
    }
}