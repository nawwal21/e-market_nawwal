<?php

namespace App\Imports;

use App\Models\PengajuanBarang;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PengajuanBarangImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new PengajuanBarang([
            'nama_pengajuan' => $row['namapengajuan'],
            'nama_barang' => $row['namabarang'],
            'tanggal_pengajuan' => $row['tanggalpengajuan'],
            'qty' => $row['qty'],
            'terpenuhi' => $row['terpenuhi']
        ]);
    }
}
