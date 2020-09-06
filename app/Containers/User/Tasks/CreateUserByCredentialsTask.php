<?php

namespace App\Containers\User\Tasks;

use Illuminate\Support\Str;
use phpseclib\Crypt\Random;
use App\Containers\User\Data\Repositories\UserRepository;
use App\Containers\User\Models\User;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use Illuminate\Support\Facades\Hash;

/**
 * Class CreateUserByCredentialsTask.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class CreateUserByCredentialsTask extends Task
{

  protected $repository;

  public function __construct(UserRepository $repository)
  {
    $this->repository = $repository;
  }

  /**
   * @param bool        $isClient
   * @param string      $email
   * @param string      $password
   * @param string|null $name
   * @param string|null $gender
   * @param string|null $birth
   *
   * @return  mixed
   * @throws  CreateResourceFailedException
   */
  public function run(
    bool $isClient = true,
    string $email,
    string $password,
    string $name = null,
    string $gender = null,
    string $birth = null,
    string $qr_string = null
  ): User {

    try {
      // create new user
      $user = $this->repository->create([
        'password'  => Hash::make($password),
        'email'     => $email,
        'name'      => $name,
        'gender'    => $gender,
        'birth'     => $birth,
        'qr_string' => $this->generateqrcode(),
        'is_client' => $isClient,
      ]);
    } catch (Exception $e) {
      throw (new CreateResourceFailedException())->debug($e);
    }

    return $user;
  }


  public function generateqrcode()
  {

    return str_replace('-', '', Str::slug(Random::string(70) . Random::string(45)));
  }
}
