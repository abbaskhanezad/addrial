<?php
namespace Abbas\Addrial;

use Illuminate\Support\ServiceProvider;


class AddrialServiceProvider extends ServiceProvider 
{
  public function register(){
      $this->app->bind('Addrial', function(){
          return new Addrial;
      });
  }
}