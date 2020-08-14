<?php
namespace Abbas\Addrial;

use Illuminate\Support\Facades\Facade;


class AddrialFacade extends Facade
{
  protected static function getFacadeAccessor()
  {
      return "Addrial";
  }
}