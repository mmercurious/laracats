<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserPasswordFormRequest extends Request
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
            'old' => 'required|user_password',
            'new_password' => 'required|min:6|confirmed|different:old',
        ];
    }

    public function persist() {
        $user = Auth::user();
        
        $newpassword = bcrypt($this->password);

        $user->password = $newpassword;
            
    }
}
