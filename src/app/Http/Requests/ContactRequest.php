<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'mame' => ['required', 'string'],
            'gender' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'tel' => ['required', 'numeric', 'digits_between:5'],
            'address' => ['required', 'string', 'max:255'],
            'building' => ['required', 'string', 'max:255'],
            'select' => ['required'],
            'content' => ['required', 'string', 'max:120'],

        ];
    }

    public function messages()
    {
        return [
            'name.required' => '姓を入力してください',
            //'name.string' => '姓を文字列で入力してください',
            'mame.required' => '名を入力してください',
            //'name.string' => '名を文字列で入力してください',
            'gender' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.string' => 'メールアドレスはメール形式で入力してください',
            //'email.max' => 'メールアドレスを255文字以下で入力してください',
            'tel.required' =>'電話番号を入力してください',
            'tel.numeric' => '電話番号を数値で入力してください',
            'tel.digits_between:5' => '電話番号は5桁までの数字で入力してください',
            'address.required' => '住所を入力してください',
            //'address.string' => '住所を文字列で入力してください',
            //'address.max' => '住所を255文字以下で入力してください',
            //'building.required' => '建物を入力してください',
            //'building.string' =>'建物を文字列で入力してください',
            //'building.max' => '建物を255文字以下で入力してください',
            'select.required' => 'お問い合わせの種類を選択してください',
            'content.required' => 'お問い合わせ内容を入力してください',
            'content.string' => 'お問い合わせ内容を文字列で入力してください',
            'content.max' => 'お問い合わせ内容120文字以内で入力してください',

        ]
    }
}
