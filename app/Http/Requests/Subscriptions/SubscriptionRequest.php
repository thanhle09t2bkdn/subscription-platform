<?php


namespace App\Http\Requests\Subscriptions;


use App\Http\Requests\ApiFormRequest;

class SubscriptionRequest extends ApiFormRequest
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

        ];
    }
}
