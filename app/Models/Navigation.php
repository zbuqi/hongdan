<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Dcat\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;

class Navigation extends Model
{
	use HasDateTimeFormatter;
    use ModelTree;
    protected $table = 'navigation';
    protected $titleColumn = 'title';
    protected $orderColumn = 'sequence';
    protected $parentColumn = 'parentId';

}
