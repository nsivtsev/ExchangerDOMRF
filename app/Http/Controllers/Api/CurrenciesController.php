<?php

namespace App\Http\Controllers\Api;

use App\Models\Currency;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CurrenciesController extends Controller
{
    /**
     * Получить все курсы
     *
     * @return Currency[]|Collection
     */
    public function index()
    {
        return Currency::all();
    }
}
