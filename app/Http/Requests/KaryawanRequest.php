<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KaryawanRequest extends FormRequest
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
            'name'  => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'image' => 'sometimes|mimes:jpg,jpeg,png|max:2480',
            'password' => 'required|string|min:6|confirmed',
            'nip' => 'required|min:16', 
            'pendidikan' => 'required', 
            'kota_lahir' => 'required', 
            'tgl_lahir' => 'required', 
            'tgl_masuk' => 'required', 
            'jk' => 'required', 
            'agama' => 'required', 
            'status' => 'required', 
            'alamat' => 'required', 
            'foto' => 'sometimes', 
            'jenis_karyawan' => 'required', 
            'divisi_id' => 'required', 
            'jabatan_id' => 'required',
        ];
    }
}


