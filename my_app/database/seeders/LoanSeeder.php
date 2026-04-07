<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Loan;

class LoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Loan::create([
            'user_id' => 1,
            'name' => 'Споживчий кредит',
            'rate' => '15%',
            'term' => '12 міс',
            'amount' => '50 000 грн'
        ]);

        Loan::create([
            'user_id' => 1,
            'name' => 'Іпотека',
            'rate' => '10%',
            'term' => '240 міс',
            'amount' => '2 000 000 грн'
        ]);

        Loan::create([
            'user_id' => 1,
            'name' => 'Автокредит',
            'rate' => '12%',
            'term' => '60 міс',
            'amount' => '500 000 грн'
        ]);

        Loan::create([
            'user_id' => 1,
            'name' => 'Бізнес-кредит',
            'rate' => '18%',
            'term' => '36 міс',
            'amount' => '1 000 000 грн'
        ]);
    }
}
