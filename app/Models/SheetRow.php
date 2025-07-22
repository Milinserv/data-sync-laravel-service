<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SheetRow extends Model
{
    use HasFactory;

    protected $table = 'sheet_rows';
    protected $fillable = [
        'sheet_id',
        'row_data',
        'status',
    ];
}
