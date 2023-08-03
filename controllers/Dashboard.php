<?php declare(strict_types=1);
namespace AramHamo\Mvc\Controllers;
use AramHamo\MvcCore\View;
use AramHamo\MvcCore\Middleware;

class Dashboard extends Middleware{
  public function get(){
    $this->middleware("auth");
    return View::render("dashboard",array("title"=>"dashboard"));
  }
  public function post(){
  }
  public function update(){
  }
  public function delete(){
  }
}
