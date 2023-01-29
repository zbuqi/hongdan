<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Navigation extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'navigation';
    
}
