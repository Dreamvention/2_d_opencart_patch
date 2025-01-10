<?php
namespace Opencart\Catalog\Model\Extension\DvOpencartPatch\Engine;

class Load extends \Opencart\System\Engine\Model {
    public function controller(string $route, mixed ...$args): mixed {
        if (VERSION > '4.0.1.1') {
            $route = str_replace('|', '.', $route);
        }
        return $this->load->controller($route, $args);
    }
}