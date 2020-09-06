<?php

namespace App\Containers\Event\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class CreateEventRequest.
 */
class CreateEventRequest extends Request
{

  /**
   * The assigned Transporter for this Request
   *
   * @var string
   */
  // protected $transporter = \App\Ship\Transporters\DataTransporter::class;

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
      // 'id' => 'required',
      'name' => 'required|max:255',
      'event_date' => 'required|max:255',
      'start_time' => 'required|max:255',
      'end_time' => 'required|max:255',
      'organization_id' => 'numeric|max:255',
      'user_id' => 'numeric|max:255',
      'created_by' => 'required|numeric|max:255',
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
