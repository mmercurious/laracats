<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class UserUpdateFormRequest extends Request
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
            'name' => 'max:255',
            'email' => 'email|max:255|unique:users,email,'.$this->get('userid'),
            'thoughts' => 'string'
        ];
    }

    public function persist() {
        $user = Auth::user();

        if (!empty($this->name) && ($user->name != $this->name)) {
            $user->name = $this->name;
        }

        if (!empty($this->email) && ($user->email != $this->email)) {
            $user->email = $this->email;
        }

        if (!empty($this->thoughts)) {
            $user->thoughts = $this->thoughts;
        }

        if ($this->remove == 1) {
            $user->thoughts = null;
        }

        $user->save();
    }
}
