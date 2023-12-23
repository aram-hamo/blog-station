<?php declare(strict_types=1);
namespace AramHamo\Mvc\Models;
use AramHamo\MvcCore\Model;

class Articles extends Model{
  public String $_tableName = "articles";
  public int $author_id;
  public String $article_title;
  public String $tags;
  public String $body;
  public String $in_url;
}
