<?php

namespace App\Http\Requests\MainPage;

use Illuminate\Foundation\Http\FormRequest;

class CallMeRequest extends FormRequest
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
        $this->session()->put('warning', 'Номер телефон должен содержать 11 цифр. Пример: 89776665544');
        $this->redirect = route('index.announcement');
        return [
            'phone' => 'required|digits:11'
        ];
    }
}
