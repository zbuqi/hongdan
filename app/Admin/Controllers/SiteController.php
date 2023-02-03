<?php

namespace App\Admin\Controllers;

use App\Admin\Forms\SiteForm;
use App\Http\Controllers\Controller;
use Dcat\Admin\Widgets\Card;

use Dcat\Admin\Layout\Content;
use Dcat\Admin\Layout\Row;
use Dcat\Admin\Layout\Column;

class SiteController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->header('网站信息')
            ->description('编辑')
            ->body(new Card(new SiteForm()));
                /*
                function (Row $row){
                $row->column(new Card(new SiteForm()));
            });
            */
    }
}
