<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Response;

class Experience extends Model
{
    use HasFactory;

    const HTTP_OK = Response::HTTP_OK;
}
