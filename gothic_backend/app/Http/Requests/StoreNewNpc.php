<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewNpc extends FormRequest
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
            'name' => 'required|unique:npcs|max:50',
            'avatar' => 'required',
            'lvl' => 'required|integer|between:1,50',
            'strength' => 'required|integer',
            'dexterity' => 'required|integer',
            'mana' => 'required|integer',
            'health' => 'required|integer',
            '1h_weapons' => 'required|integer|between:1,100',
            '2h_weapons' => 'required|integer|between:1,100',
            'bow' => 'required|integer|between:1,100',
            'crossbow' => 'required|integer|between:1,100',
            'ring_of_magic' => 'required|integer|between:1,6',
            'weapon_id' => 'required|integer',
            'armor_id' => 'required|integer',
        ];
    }
}
