<?php

namespace App\Containers\Member\Tasks;

use App\Containers\Member\Data\Repositories\MemberRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use phpseclib\Crypt\Random;

class CreateMemberTask extends Task
{

  protected $repository;

  public function __construct(MemberRepository $repository)
  {
    $this->repository = $repository;
  }

  public function run(array $data)
  {
    $data['qr_string'] = $this->generateqrcode($data);
    try {
      return $this->repository->create($data);
    } catch (Exception $exception) {
      // var_dump($data);
      throw new CreateResourceFailedException();
    }
  }

  public function generateqrcode(array $data)
  {
    $name = $data["name"];

    return str_replace('-', '', Str::slug(Random::string(70) . Random::string(45)));
  }
}
