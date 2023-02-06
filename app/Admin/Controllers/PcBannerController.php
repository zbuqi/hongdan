<?php

namespace App\Admin\Controllers;

use App\Admin\Forms\PcBannerForm;
use App\Http\Controllers\Controller;
use Dcat\Admin\Widgets\Card;

use Dcat\Admin\Layout\Content;
use Dcat\Admin\Layout\Row;
use Dcat\Admin\Layout\Column;


class PcBannerController extends Controller
{
    public function index(Content $content)
    {

        return $content
            ->header('PC端▪首页轮播图')
            ->description('编辑')
            ->body(new Card(new PcBannerForm()));
    }
}
