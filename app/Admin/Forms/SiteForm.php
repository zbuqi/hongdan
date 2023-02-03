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
        // dump($input);

        // return $this->response()->error('Your error message.');

        return $this
				->response()
				->success('Processed successfully.')
				->refresh();
    }

    /**
     * Build a form here.
     */
    public function form()
    {
        $this->text('site_name','网站名称');
        $this->text('site_subtitle', '网站副标题');
        $this->text('host','网站域名');
        $this->image('logo', '网站LOGO');
        $this->image('ico','浏览器图标');
        $this->text('seo_keywords','SEO关键词');
        $this->text('seo_description','SEO描述信息');
        $this->text('copyright','版权方');
        $this->textarea('census','统计分析代码');
        /*
        $this->text('name')->required();
        $this->email('email')->rules('email');
        */
    }

    /**
     * The data of the form.
     *
     * @return array
     */
    public function default()
    {
        $site = Seting::where('name','=','site')->get();
        
        return [
            'site_name'       => '学ui设计网',
            'site_subtitle'   => '学ui设计,平面设计,网页设计,免费的设计师学习平台',
            'host'            => 'http://www.xue-ui.com',
            'logo'            => '',
            'ico'             => '',
            'seo_keywords'    => '学ui,学ui设计,ui设计,学平面设计,平面设计,网页设计,电商设计,电商美工设计',
            'seo_description' => '学ui设计网，致力于为自学(初学)者提供ui设计、平面设计、网页设计、电商美工设计等设计类的学习教程、  视频、资料、软件等。学ui设计网，免费的设计师学习平台。',
            'copyright'       => '红单库',
            'census'          => '统计分析代码'
        ];
    }
}
