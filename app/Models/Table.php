<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Table extends Model
{
    public function getData()
    {
        $table = Storage::get('public/data/data.json');
        return $table;
    }
}
