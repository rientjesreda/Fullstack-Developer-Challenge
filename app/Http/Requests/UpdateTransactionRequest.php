<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTransactionRequest extends FormRequest
{
    /**
     * Bepaal of de gebruiker bevoegd is om deze request uit te voeren.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * De validatieregels die op de request van toepassing zijn.
     */
    public function rules(): array
    {
        return [
            'category_id' => ['required', 'integer'],
            'user_id' => ['nullable', 'integer'],
            'transaction_date' => ['required', 'date'],
            'amount' => ['required', 'numeric'],
            'description' => ['required'],
        ];
    }
}