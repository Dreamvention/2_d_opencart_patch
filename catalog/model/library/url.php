<?php
namespace Opencart\Catalog\Model\Extension\DvOpencartPatch\Library;

class Url extends \Opencart\System\Engine\Model {
    public function link(string $route, string|array $args = '', bool $js = false): string {
        if (VERSION > '4.0.1.1'){
            $route = str_replace('|', '.', $route);
        }
		return $this->url->link($route, $args, $js);
	}
}