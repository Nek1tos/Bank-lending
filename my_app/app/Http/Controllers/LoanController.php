<?php
namespace App\Http\Controllers;

use App\Models\Loan;

class LoanController extends Controller
{
    public function index()
    {
        $loans = Loan::all();
        return view('loans.index', ['loans' => $loans]);
    }

    public function show($id)
    {
        $loan = Loan::findOrFail($id);
        return view('loans.show', ['loan' => $loan]);
    }
}