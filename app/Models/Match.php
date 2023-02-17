<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    use HasDateTimeFormatter;
    protected $table = 'matchs';

}
