<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     *
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        // tạo ra 1 mảng
        $rules = [];
        // lấy ra tên phương thức cần sử lý
        $currentAction = $this->route()->getActionMethod();
        switch ($this->method()):
            case 'POST':
                switch ($currentAction):
                    case 'store':
                        // xay dung rule validate trong nay
                        $rules = [
                            'name' => 'required',
                            'email' => 'required|email:filter|unique:users',
                            'image' => 'required | image | mimes:jpeg,jpg,png,PNG | max:5120',
                        ];

                        break;
                        case 'edit':
                            // xay dung rule validate trong nay
                            $rules = [
                                'name' => 'required',
                                'email' => 'required|email:filter|unique:users',
                                'image' => 'required',
                            ];

                            break;
                endswitch;
                break;
        endswitch;

        return $rules;
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên Không Được Để Trống',
            'email.required' => 'Email Không Được Để Trống',
            'image.required' => 'Ảnh Không Được Để Trống',
            'email.unique' => 'Đã Tồn Tại',
        ];
    }
}
