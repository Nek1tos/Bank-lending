<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Loan;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function index()
    {
        return response()->json(Loan::all());
    }

    public function show($id)
    {
        $loan = Loan::find($id);
        if (!$loan) {
            return response()->json(['message' => 'Не знайдено'], 404);
        }
        return response()->json($loan);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'rate' => 'required|numeric|min:0',
            'term' => 'required|integer|min:1',
            'amount' => 'required|numeric|min:1',
        ]);

        $data = $request->all();
        $data['user_id'] = 1;

        $loan = Loan::create($data);
        return response()->json($loan, 201);
    }

    public function update(Request $request, $id)
    {
        $loan = Loan::find($id);
        if (!$loan) {
            return response()->json(['message' => 'Не знайдено'], 404);
        }

        $request->validate([
            'name' => 'required|string',
            'rate' => 'required|numeric|min:0',
            'term' => 'required|integer|min:1',
            'amount' => 'required|numeric|min:1',
        ]);

        $loan->update($request->all());
        return response()->json($loan, 200);
    }

    public function destroy($id)
    {
        $loan = Loan::find($id);
        if (!$loan) {
            return response()->json(['message' => 'Не знайдено'], 404);
        }

        $loan->delete();
        return response()->json(['message' => 'Видалено'], 200);
    }
}