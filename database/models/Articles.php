<?php declare(strict_types=1);
namespace AramHamo\Mvc\Models;
use AramHamo\MvcCore\Model;

class User extends Model{
  public String $_tableName = "articles";
  public String $title;
  public String $tags;
  public String $body;
  public String $in_url;
}
