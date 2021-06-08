<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event;

class Event extends Model
{
    use HasFactory;
    protected $table = "events";

    protected $fillable = [
        'titulo',
        'descricao',
        'local',
        'privado',
    ];
}
