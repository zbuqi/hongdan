<?php

namespace App\Admin\Repositories;

use App\Models\Seting as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Seting extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
