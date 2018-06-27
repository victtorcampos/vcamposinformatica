<?php
namespace APP\controller;

use APP\controller\Util;
use Rain\Tpl;

class Pagina {
  private $tpl;
	private $options = [];
	private $defaults = [
    "title"=>"",
		"header"=>true,
		"footer"=>true,
		"data"=>[]
	];

  public function __construct($opts = array()) {
    $util = new Util();
    $localView = $util->getLocalView();
    $this->options = array_merge($this->defaults, $opts);
    $config = array(
		    "base_url"      => null,
		    "tpl_dir"       => $localView."/templates/",
		    "cache_dir"     => $localView."/templates/templates-cache/",
		    "debug"         => false
		);
    Tpl::configure( $config );
    $this->tpl = new Tpl();
    if ($this->options['title'] !== "") {$this->tpl->assign('title',$this->options['title']);}

    $this->tpl->draw("index");
  }

}

?>
