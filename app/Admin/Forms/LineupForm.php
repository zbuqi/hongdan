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
            return $this->response()->success('ζδΊ€ζε')->refresh();
        }else{
            return $this->response()->error('Your error message.');
        }
    }

    /**
     * Build a form here.
     */
    public function form()
    {
        $this->text('cesg','dgsr');
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
