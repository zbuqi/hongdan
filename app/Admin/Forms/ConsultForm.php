<?php

namespace App\Admin\Forms;

use Dcat\Admin\Widgets\Form;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Seting;

class ConsultForm extends Form
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
        if($input['wx'] && !strstr($input['wx'], 'uploads')){
            $input['wx'] = '/uploads/' . $input['wx'];
        }
        if($input['woa1'] != '' && !strstr($input['woa1'], 'uploads')){
            $input['woa1'] = '/uploads/' . $input['woa1'];
        }
        if($input['woa2'] != '' && !strstr($input['woa2'], 'uploads')){
            $input['woa2'] = '/uploads/' . $input['woa2'];
        }
        $input['woa'] = [$input['woa1'],$input['woa2']];
        $data= ['value' => json_encode($input, JSON_UNESCAPED_UNICODE)];
        $update = Seting::where('name', '=', 'consult')->update($data);

        if($update){
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
        $this->text('phone','联系电话');
        $this->image('wx','微信二维码')->move(date('Y-m-d', time()))->uniqueName()->autoUpload();;
        $this->image('woa1','微信公众号1')->move(date('Y-m-d', time()))->uniqueName()->autoUpload();;
        $this->image('woa2','微信公众号2')->move(date('Y-m-d', time()))->uniqueName()->autoUpload();;
    }

    /**
     * The data of the form.
     *
     * @return array
     */
    public function default()
    {
        $site = Seting::where('name','consult')->get();
        $data = $site[0]->value;
        $data = json_decode($data);
        return [
            'phone'  => $data->phone,
            'wx' => $data->wx,
            'woa1' => $data->woa1,
            'woa2' => $data->woa2
        ];
    }
}
