<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Seting extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'seting';
}
