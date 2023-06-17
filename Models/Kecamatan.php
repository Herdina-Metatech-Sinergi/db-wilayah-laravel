<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function kabupaten(){
        return $this->BelongsTo(Kabupaten::class);
    }

    public function provinsi(){
        return $this->BelongsTo(Provinsi::class);
    }
}
