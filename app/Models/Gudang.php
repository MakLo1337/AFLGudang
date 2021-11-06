<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    use HasFactory;

    protected $table = 'gudangs';
    protected $guarded = ["id"];
    public $timestamps = false;

    public function barang(){
        return $this->hasMany(Barang::class);
    }
}
