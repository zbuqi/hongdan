<?php

namespace App\Admin\Repositories;

use App\Models\Article as Model;
use Dcat\Admin\Repositories\EloquentRepository;
use Dcat\Admin\Form;

class Articles extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;

}
