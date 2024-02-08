<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Services\Acesse\AcesseService;
use App\Http\Requests\Api\AcesseFindRequest;

class AcesseController extends Controller
{
    private $acesseService;

    public function __construct(AcesseService $acesseService)
    {
        $this->acesseService = $acesseService;
    }

    public function __invoke(AcesseFindRequest $request)
    {
        $data = $request->validated();
        return response()->json([
            'message' => 'Mensagem de sucesso.',
            'data' => $this->acesseService->findAll($data)
        ], Response::HTTP_OK);
    }
}
