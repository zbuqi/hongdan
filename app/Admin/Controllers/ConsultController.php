<?php

namespace App\Admin\Controllers;

use App\Admin\Forms\ConsultForm;
use App\Http\Controllers\Controller;
use Dcat\Admin\Widgets\Card;

use Dcat\Admin\Layout\Content;
use Dcat\Admin\Layout\Row;
use Dcat\Admin\Layout\Column;

use App\Models\Seting;

class ConsultController extends Controller
{
    public function index(Content $content)
    {
        $data = Seting::where('name','site');
        return $content
            ->header('客服')
            ->description('编辑')
            ->body(new Card(new ConsultForm()));
    }
}
