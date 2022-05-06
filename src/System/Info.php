<?php
namespace Hydra;

/*
 *---------------------------------------------------------
 * ©IIPEC
 * Santo Domingo República Dominicana.
 *---------------------------------------------------------
*/

class Info {

  	public function app() {
  		return [
  			"type"			=> "Hydra",
  			"slug"			=> "hydra",
  			"kernel"		   => \Hydra\Kernel::class,
  			"info"			=> \Hydra\Info::class,
  			"token"			=> NULL,
  			"activated" 	=> 1,
  		];
  	}

  	public function info() {
  		return [
  			"name"			=> "Name",
  			"author"		   => "Ing. Ramón A Linares Febles",
  			"email"			=> "rlinares4381@gmail.com",
  			"license"		=> "MIT",
  			"support"		=> "http://www.iipec.net",
  			"version"		=> "V-1.0",
  			"description" 	=> "Name V-1.0",
  		];
  	}

  	public function meta() {
  		return [
  		];
  	}

   public function configs() {
  		return [
  		];
  	}

   public function locales() {
  		return [
  		];
  	}

  	public function handler($core) {
  		$core->create($this->app())
            ->addInfo($this->info())->addMeta("type", $this->meta());
  	}
}
