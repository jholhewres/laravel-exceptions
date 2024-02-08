<?php

namespace App\Repositories\Acesse;

use App\Models\Acesse;

class AcesseRepository
{
    protected $model;

    public function __construct(Acesse $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->all();
    }
}
