<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;
use App\Cat;

class CatFormRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:2',
            'description' => 'required',
        ];
    }

    public function persist()
    {
        $user = Auth::user();
        $cat = Cat::create([
            'name' => $this->name,
            'description' => $this->description,
            'creator' => $user->id,
        ]);

    }
}
