<?php

namespace App\Models;

use App\Models\Kabupaten;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Propinsi extends Model
{
    use HasFactory;

    protected $table = 'propinsi';

    protected $fillable = [
        "nama_prop",
        "nama_lembaga"
    ];

    public function kabupaten()
    {
        return $this->hasMany(Kabupaten::class, "propinsi_id", "id");
    }
}
