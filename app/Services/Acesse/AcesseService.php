<?php

namespace App\Services\Acesse;

use App\Exceptions\Acesse\AcesseException;
use App\Repositories\Acesse\AcesseRepository;

class AcesseService
{
    private $acesseRepository;

    public function __construct(AcesseRepository $acesseRepository)
    {
        $this->acesseRepository = $acesseRepository;
    }

    public function findAll(array $data)
    {
        switch ($data['param']) {
            case '1':
                throw AcesseException::notFound();
                break;
            case '2':
                throw AcesseException::notCreated();
                break;
            case '3':
                throw AcesseException::notUpdated();
                break;
            case '4':
                throw AcesseException::notDeleted();
                break;
            case '5':
                throw AcesseException::notFoundData();
                break;
            case '6':
                throw AcesseException::noPermission();
                break;
            default:
                return $this->acesseRepository->all();
        }
    }
}
