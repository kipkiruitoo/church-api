<?php

namespace App\Containers\Member\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class CreateMemberRequest.
 */
class CreateMemberRequest extends Request
{

    /**
     * The assigned Transporter for this Request
     *
     * @var string
     */
    protected $transporter = \App\Containers\Member\Data\Transporters\CreateMemberTransporter::class;

    /**
     * Define which Roles and/or Permissions has access to this request.
     *
     * @var  array
     */
    protected $access = [
        'permissions' => '',
        'roles'       => '',
    ];

    /**
     * Id's that needs decoding before applying the validation rules.
     *
     * @var  array
     */
    protected $decode = [
        // 'id',
    ];

    /**
     * Defining the URL parameters (e.g, `/user/{id}`) allows applying
     * validation rules on them and allows accessing them like request data.
     *
     * @var  array
     */
    protected $urlParameters = [
        // 'id',
    ];

    /**
     * @return  array
     */
    public function rules()
    {
        return [
            // 'name' => 'required',
            'name' => 'required',
            'gender' => 'required|in:Male,Female',
            'phone' => 'required|numeric',
            'church_id' => 'required|numeric',
            'location' => 'required',
            'yob' => 'required|numeric',
            // '{user-input}' => 'required|max:255',
        ];
    }

    /**
     * @return  bool
     */
    public function authorize()
    {
        return $this->check([
            'hasAccess',
        ]);
    }
}
