<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $fillable = ['user_id', 'name', 'rate', 'term', 'amount'];

    protected $appends = ['rate_numeric', 'term_numeric', 'amount_numeric'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Convert rate string like "15%" to numeric 15
    public function getRateNumericAttribute()
    {
        return (float) str_replace('%', '', (string) $this->rate);
    }

    // Convert term string like "12 міс" to numeric 12
    public function getTermNumericAttribute()
    {
        return (int) preg_replace('/[^0-9]/', '', (string) $this->term);
    }

    // Convert amount string like "50000 грн" to numeric
    public function getAmountNumericAttribute()
    {
        return (float) preg_replace('/[^0-9.,]/', '', (string) $this->amount);
    }

    // Override toArray to return clean numeric values
    public function toArray()
    {
        $array = parent::toArray();
        
        // Clean up the values for API response
        $array['rate'] = $this->rate_numeric;
        $array['term'] = $this->term_numeric;
        $array['amount'] = $this->amount_numeric;
        
        // Remove the appended attributes
        unset($array['rate_numeric']);
        unset($array['term_numeric']);
        unset($array['amount_numeric']);
        
        return $array;
    }
}

