<?php
use AramHamo\MvcCore\Migration;
use AramHamo\MvcCore\Schema;
$GLOBALS['tableName'] = "articles";
$table = new class {
  static function up(){
    $s = new Schema;
    $m = new Migration;
    $m->id();
    $m->text("title");
    $m->text("tags");
    $m->text("body");
    $m->text("in_url")->unique("in_url");

    $s->create($GLOBALS['tableName'],$m->table,$m->options);
  }
  static function down(){
    $s = new Schema;
    $s->dropIfExists($GLOBALS['tableName']);
  }
};
