<?php

namespace App\Http\Controllers;

use App\Sorteado;
use Illuminate\Http\Request;

class BingoController extends Controller
{
    private $sortModel;

    public function __construct(Sorteado $sorteado)
    {
        $this->sortModel = $sorteado;
    }

    public function index()
    {
        $numbers = $this->sortModel->all()->pluck('numero')->toArray();

        return view('bingo.index', compact('numbers'));
    }

    public function sortNumber()
    {
        $numbers = $this->sortModel->all()->pluck('numero')->toArray();
        $number = null;

        if (count($numbers) <= 74) {
            do {
                $number = rand(1, 75);
            } while (in_array($number, $numbers));

            $data = [
                'numero' => $number
            ];

            $this->sortModel->create($data);
        }

        return redirect(route('bingo.index'));
    }

    public function clearGame()
    {
        $this->sortModel->truncate();

        return redirect(route('bingo.index'));
    }
}
