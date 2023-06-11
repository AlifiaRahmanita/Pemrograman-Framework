<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{
    public function getLaporan()
    {

        $data =
            [
                [
                    "keterangan" => "Uang Tunai",
                    "debit" => "Rp 8.000.000",
                    "kredit" => ""
                ],
                [
                    "keterangan" => "Piutang Usaha",
                    "debit" => "Rp 3.000.000",
                    "kredit" => ""
                ],
                [
                    "keterangan" => "Persediaan Layanan",
                    "debit" => "Rp 550.000",
                    "kredit" => ""
                ],
                [
                    "keterangan" => "Peralatan",
                    "debit" => "Rp 3.000.000",
                    "kredit" => ""
                ],
                [
                    "keterangan" => "Servis Peralatan",
                    "debit" => "Rp 15.000.000",
                    "kredit" => ""
                ],
                [
                    "keterangan" => "Akumulasi Depresiasi",
                    "debit" => "",
                    "kredit" => "Rp 20.000.000"
                ],
                [
                    "keterangan" => "Utang Akun",
                    "debit" => "",
                    "kredit" => "Rp 8.000.000"
                ],
                [
                    "keterangan" => "Utilitas Utang",
                    "debit" => "",
                    "kredit" => "Rp 8.000.000"
                ],
                [
                    "keterangan" => "Utang Pinjaman",
                    "debit" => "",
                    "kredit" => "Rp 3.000.000"
                ],
                [
                    "keterangan" => "Modal Pemilik",
                    "debit" => "",
                    "kredit" => "Rp 11.000.000"
                ],
                [
                    "keterangan" => "Prive",
                    "debit" => "Rp 3.500.000",
                    "kredit" => ""
                ],
                [
                    "keterangan" => "Pendapatan Layanan",
                    "debit" => "",
                    "kredit" => "Rp 12.000.000"
                ],
                [
                    "keterangan" => "Biaya Sewa",
                    "debit" => "",
                    "kredit" => "Rp 4.000.000"
                ],
                [
                    "keterangan" => "Biaya Gaji",
                    "debit" => "",
                    "kredit" => "Rp 2.000.000"
                ],
                [
                    "keterangan" => "Pajak",
                    "debit" => "",
                    "kredit" => "Rp 500.000"
                ],
                [
                    "keterangan" => "Biaya Utilitas ",
                    "debit" => "",
                    "kredit" => "Rp 2.000.000"
                ],
                [
                    "keterangan" => "Biaya Persediaan Layanan",
                    "debit" => "",
                    "kredit" => "Rp 1.000.000"
                ],
                [
                    "keterangan" => "Beban Penyusutan",
                    "debit" => "",
                    "kredit" => "Rp 2.000.000"
                ],
            ];

        return $data;
    }
}