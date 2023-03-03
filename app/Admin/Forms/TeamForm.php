<?php

namespace App\Admin\Forms;


use Dcat\Admin\Widgets\Form;
use Symfony\Component\HttpFoundation\Response;
use App\Models\match;


class TeamForm extends Form
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

        return $this->response()->success('提交成功')->refresh();
        /*
        if($update){
            return $this->response()->success('提交成功')->refresh();
        }else{
            return $this->response()->error('Your error message.');
        }
        */
    }

    /**
     * Build a form here.
     */
    public function form()
    {
        $this->text('shirt_number','球衣号');
        $this->text('logo','球员logo');
        $this->text('name','球员名字');
        $this->text('reason_type','事件');
    }

    /**
     * The data of the form.
     *
     * @return array
     */
    public function default()
    {
        $url = $_SERVER['PHP_SELF'];
        preg_match("/match\/([0-9]*)\/edit\/([0-9]*)/i",$url,$preg);
        $match_id = $preg[1];
        $id = $preg[2];

        return [
            'shirt_number' => $match_id,
            'logo' => $id,
            'name' => '',
            'reason_type' => ''
        ];
    }
}
