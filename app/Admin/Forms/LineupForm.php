<?php

namespace App\Admin\Forms;


use Dcat\Admin\Widgets\Form;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Match;


class LineupForm extends Form
{
    /**
     * Handle the form request.
     *
     * @param array $input
     *
     * @return mixed
     */
    public function handle(array $input)
    {

        #$update = Seting::where('name', '=', 'site')->update($data);

        if($update = 0){
            return $this->response()->success('提交成功')->refresh();
        }else{
            return $this->response()->error('Your error message.');
        }
    }

    /**
     * Build a form here.
     */
    public function form()
    {
        $lineup = Match::where('id',1)->first()->linup_away;
        $lineup = json_decode($lineup);
        $this->text('cews','dgsr');

    }

    /**
     * The data of the form.
     *
     * @return array
     */
    public function default()
    {
        return [
            'cews' => '25496845'
        ];
    }
}
