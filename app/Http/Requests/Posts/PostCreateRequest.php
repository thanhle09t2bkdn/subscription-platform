<?php


namespace App\Http\Requests\Posts;


use App\Http\Requests\ApiFormRequest;

class PostCreateRequest extends ApiFormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return boolean
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3|max:255',
            'url' => 'required|url|exists:App\Models\Website,url',
            'description' => 'required',
        ];
    }
}
