<?php declare(strict_types=1);
namespace AramHamo\Mvc\Controllers;
use AramHamo\MvcCore\View;
use AramHamo\MvcCore\Middleware;

class Home extends Middleware{
  public function get(){
    $this->middleware("auth");
    return View::render("home",array("title"=>"home"));
  }
  public function post(){
    echo "POST\n";
  }
  public function update(){
    echo "UPDATE\n";
  }
  public function delete(){
    echo "DELETE\n";
  }
}
