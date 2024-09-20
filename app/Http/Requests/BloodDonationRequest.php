<?php

namespace App\Http\Requests;

use App\Models\BloodDonation;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class BloodDonationRequest
 */
class BloodDonationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return BloodDonation::$rules;
    }
}
