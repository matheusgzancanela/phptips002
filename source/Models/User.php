<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

Class User extends DataLayer
{
  public function __construct()
  {
    //string $entity, array $require, string $primary = 'id' , bool $timestamps = true
    parent::__construct( "users", ["first_name", "last_name"]);
  }

  public function addresses()
  {
    return (new Address())->find("user_id = :uid", "uid=1this->id")->fetch(true);
  }
}