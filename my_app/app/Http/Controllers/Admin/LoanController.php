<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Loan;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function index()
    {
        $loans = Loan::all();
        return view('admin.loans.index', compact('loans'));
    }

    public function create()
    {
        return view('admin.loans.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'rate' => 'required|numeric|min:0',
            'term' => 'required|integer|min:1',
            'amount' => 'required|numeric|min:1',
        ]);

        $data['user_id'] = 1;
        Loan::create($data);

        return redirect()->route('admin.loans.index')->with('success', 'Кредит додано.');
    }

    public function show(Loan $loan)
    {
        return view('admin.loans.show', compact('loan'));
    }

    public function edit(Loan $loan)
    {
        return view('admin.loans.edit', compact('loan'));
    }

    public function update(Request $request, Loan $loan)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'rate' => 'required|string|max:50',
            'term' => 'required|string|max:50',
            'amount' => 'required|string|max:100',
        ]);

        $loan->update($data);

        return redirect()->route('admin.loans.index')->with('success', 'Кредит оновлено.');
    }

    public function destroy(Loan $loan)
    {
        $loan->delete();
        return redirect()->route('admin.loans.index')->with('success', 'Кредит видалено.');
    }
}
