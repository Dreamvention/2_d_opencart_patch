<?php
namespace Opencart\Admin\Model\Extension\DvOpencartPatch\Library;

class Url extends \Opencart\System\Engine\Model {
    public function link(string $route, string|array $args = '', bool $js = false): string {
        if (VERSION > '4.0.1.1'){
            $route = str_replace('|', '.', $route);
        }
		return $this->url->link($route, $args, $js);
	}
    public function linkWithToken(string $route, string|array $args = '', bool $js = false): string {
        if (VERSION > '4.0.1.1'){
            $route = str_replace('|', '.', $route);
        }
        
        if (isset($this->session->data['user_token'])) {
            if (is_array($args)) {
                $args['user_token'] = $this->session->data['user_token'];
            } else {
                $args .= '&user_token=' . $this->session->data['user_token'];
            }
        }
		return $this->url->link($route, $args, $js);
	}
}