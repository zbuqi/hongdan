<?php

namespace App\Admin\Forms;


use Dcat\Admin\Widgets\Form;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Seting;


class SiteForm extends Form
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
        if($input['logo'] && !strstr($input['logo'], 'uploads')){
            $input['logo'] = '/uploads/' . $input['logo'];
        }

        if($input['ico'] != '' && !strstr($input['ico'], 'uploads')){
            $input['ico'] = '/uploads/' . $input['ico'];
        }
        $data= ['value' => json_encode($input, JSON_UNESCAPED_UNICODE)];
        $update = Seting::where('name', '=', 'site')->update($data);

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
        $this->fieldset('网站信息', function(){
            $this->text('site_name','网站名称');
            $this->text('site_subtitle', '网站副标题');
            $this->text('host','网站域名');
            $this->image('logo', '网站LOGO')->move(date('Y-m-d', time()))->uniqueName()->autoUpload();;
            $this->image('ico','浏览器图标')->move(date('Y-m-d', time()))->uniqueName()->autoUpload();;
            $this->text('seo_keywords','SEO关键词');
            $this->text('seo_description','SEO描述信息');
            $this->text('copyright','版权方');
            $this->text('baidu_ts_api','百度推送接口');
        });
        $this->fieldset('ICP备案信息', function(){
            $this->text('put_on_record','ICP备案号');
            $this->text('put_on_record_link','ICP备案链接');
        });
        $this->fieldset('网站统计分析代码部署', function(){
            $this->textarea('census','统计分析代码');
        });


    }

    /**
     * The data of the form.
     *
     * @return array
     */
    public function default()
    {
        $site = Seting::where('name','site')->first();
        $data = $site->value;
        if($data == ''){
            $data = '{
                "site_name":"",
                "site_subtitle":"",
                "host":"",
                "logo":"",
                "ico":"",
                "seo_keywords":"",
                "seo_description":"",
                "copyright":"",
                "baidu_ts_api":"",
                "census":"",
                "put_on_record":"",
                "put_on_record_link":""
            }';
        }
        $data = json_decode($data);
        return [
            'site_name'          => $data->site_name,
            'site_subtitle'      => $data->site_subtitle,
            'host'               => $data->host,
            'logo'               => $data->logo,
            'ico'                => $data->ico,
            'seo_keywords'       => $data->seo_keywords,
            'seo_description'    => $data->seo_description,
            'copyright'          => $data->copyright,
            'baidu_ts_api'       => $data->baidu_ts_api,
            'census'             => $data->census,
            'put_on_record'      => $data->put_on_record,
            'put_on_record_link' => $data->put_on_record_link,
        ];
    }
}
