<?php

namespace App\Admin\Forms;

use Dcat\Admin\Widgets\Form;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Seting;

class MobileBannerForm extends Form
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
        $data[0]['isOpen'] = $input['banner_1_isOpen'];
        $data[0]['link'] = $input['banner_1_link'];
        $data[0]['image'] = $input['banner_1_image'];
        $data[1]['isOpen'] = $input['banner_2_isOpen'];
        $data[1]['link'] = $input['banner_2_link'];
        $data[1]['image'] = $input['banner_2_image'];
        $data[2]['isOpen'] = $input['banner_3_isOpen'];
        $data[2]['link'] = $input['banner_3_link'];
        $data[2]['image'] = $input['banner_3_image'];
        $data[3]['isOpen'] = $input['banner_4_isOpen'];
        $data[3]['link'] = $input['banner_4_link'];
        $data[3]['image'] = $input['banner_4_image'];
        for($i=0; $i<count($data);$i++){
            if($data[$i]['image'] != '' && !strstr($data[$i]['image'], 'uploads')){
                $data[$i]['image'] = '/uploads/' . $data[$i]['image'];
            }
        }

        $data= ['value' => json_encode($data, JSON_UNESCAPED_UNICODE)];
        $update = Seting::where('name', 'm-banner')->update($data);

        if($update){
            return $this->response()->success('提交成功')->refresh();
        }else{
            return $this->response()->error($update);
        }
    }

    /**
     * Build a form here.
     */
    public function form()
    {
        $this->tab('海报(1)', function(){
            $this->radio('banner_1_isOpen','是否开启')->options(['1'=>'开启','0'=>'关闭']);
            $this->text('banner_1_link','海报链接地址');
            $this->image('banner_1_image','选择图片')->move(date('Y-m-d', time()))->uniqueName()->autoUpload();
        });
        $this->tab('海报(2)', function(){
            $this->radio('banner_2_isOpen','是否开启')->options(['1'=>'开启','0'=>'关闭']);
            $this->text('banner_2_link','海报链接地址');
            $this->image('banner_2_image','选择图片')->move(date('Y-m-d', time()))->uniqueName()->autoUpload();
        });
        $this->tab('海报(3)', function(){
            $this->radio('banner_3_isOpen','是否开启')->options(['1'=>'开启','0'=>'关闭']);
            $this->text('banner_3_link','海报链接地址');
            $this->image('banner_3_image','选择图片')->move(date('Y-m-d', time()))->uniqueName()->autoUpload();
        });
        $this->tab('海报(4)', function(){
            $this->radio('banner_4_isOpen','是否开启')->options(['1'=>'开启','0'=>'关闭']);
            $this->text('banner_4_link','海报链接地址');
            $this->image('banner_4_image','选择图片')->move(date('Y-m-d', time()))->uniqueName()->autoUpload();
        });

    }

    /**
     * The data of the form.
     *
     * @return array
     */
    public function default()
    {
        $data = Seting::where('name', 'm-banner')->first();
        $data = $data->value;
        if($data == ''){
            $data = '[
            {
                "isOpen":"",
                "link":"",
                "image":""
            },
            {
                "isOpen":"",
                "link":"",
                "image":""
            },
            {
                "isOpen":"",
                "link":"",
                "image":""
            },
            {
                "isOpen":"",
                "link":"",
                "image":""
            }
            ]';
        }
        $data = json_decode($data);
        return [
            'banner_1_isOpen' => $data[0]->isOpen,
            'banner_1_link'  => $data[0]->link,
            'banner_1_image'    => $data[0]->image,
            'banner_2_isOpen' => $data[1]->isOpen,
            'banner_2_link'  => $data[1]->link,
            'banner_2_image'    => $data[1]->image,
            'banner_3_isOpen' => $data[2]->isOpen,
            'banner_3_link'  => $data[2]->link,
            'banner_3_image'    => $data[2]->image,
            'banner_4_isOpen' => $data[3]->isOpen,
            'banner_4_link'  => $data[3]->link,
            'banner_4_image'    => $data[3]->image
        ];
    }
}
