<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Dcat\Admin\Form;
use Dcat\Admin\Layout\Content;

class SetingController extends Controller
{
    public function home(content $content)
    {
        return $content
            ->header('首页')
            ->description('设置')
            ->body('没有内容');
    }
}