<?php
namespace App\Http\Controllers;

class LoanController extends Controller
{
    private array $loans = [
        ['id' => 1, 'name' => 'Споживчий кредит', 'rate' => '15%', 'term' => '12 міс', 'amount' => '50 000 грн'],
        ['id' => 2, 'name' => 'Іпотека',           'rate' => '10%', 'term' => '240 міс','amount' => '2 000 000 грн'],
        ['id' => 3, 'name' => 'Автокредит',         'rate' => '12%', 'term' => '60 міс', 'amount' => '500 000 грн'],
        ['id' => 4, 'name' => 'Бізнес-кредит',      'rate' => '18%', 'term' => '36 міс', 'amount' => '1 000 000 грн'],
    ];

    public function index()
    {
        return view('loans.index', ['loans' => $this->loans]);
    }

    public function show($id)
    {
        $loan = collect($this->loans)->firstWhere('id', (int)$id);
        if (!$loan) abort(404);
        return view('loans.show', ['loan' => $loan]);
    }
}