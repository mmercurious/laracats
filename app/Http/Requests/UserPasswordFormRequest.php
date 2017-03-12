<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

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
        
        $newpassw = bcrypt($this->new_password);

        $user->password = $newpassw;
        $user->save();            
    }
}
