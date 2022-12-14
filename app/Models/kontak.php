<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kontak extends Model
{
    use HasFactory;
    protected $fillable = [
    'id_siswa',
    'id_jenis',
    'deskripsi'
];
protected $table = "kontak";
public function siswa(){
    return $this->belongsTo(siswa::class, 'id_siswa');
}
public function jeniskontak(){
    return $this->belongsTo(Jenis_kontak::class, 'id_jenis');
}

}

