<?php

namespace App\Admin\Controllers;

use App\Admin\Forms\TeamForm;
use App\Http\Controllers\Controller;
use Dcat\Admin\Widgets\Card;

use Dcat\Admin\Layout\Content;
use Dcat\Admin\Layout\Row;
use Dcat\Admin\Layout\Column;

use App\Models\Match;

class MatchTeamController extends Controller
{
    public function index(Content $content)
    {

        return $content
            ->header('球员信息')
            ->description('编辑')
            ->body(new Card(new TeamForm));
    }
}