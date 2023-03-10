<?php

namespace App\Admin\Controllers;

use App\Admin\Forms\SiteForm;
use App\Http\Controllers\Controller;
use Dcat\Admin\Widgets\Card;

use Dcat\Admin\Layout\Content;
use Dcat\Admin\Layout\Row;
use Dcat\Admin\Layout\Column;

use App\Models\Seting;

class SiteController extends Controller
{
    public function index(Content $content)
    {
        $data = Seting::where('name','site');
        return $content
            ->header('网站信息')
            ->description('编辑')
            ->body(new Card(new SiteForm()));
    }
}
