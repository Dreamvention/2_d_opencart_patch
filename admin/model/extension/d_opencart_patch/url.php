<?php
/*
 *  location: admin/model/extension/d_opencart_patch/store.php
 *
 */

class ModelExtensionDOpencartPatchUrl extends Model {

    public function link($route, $url = '', $secure = 'SSL'){

        if(VERSION >= '3.0.0.0'){
            $token = 'user_token=' . $this->session->data['user_token'];
        }else{
            $token = 'token=' . $this->session->data['token'];
        }

        if($url){
            $url = $token . '&' .$url;
        }else{
            $url = $token;
        }

        if(VERSION >= '3.0.0.0'){
            $routes = array(
                'marketplace/extension' => 'marketplace/extension',
                'extension/extension' => 'marketplace/extension',
                'extension/module' => 'marketplace/extension'
            );
        }elseif(VERSION >= '2.3.0.0'){
            $routes = array(
                'marketplace/extension' => 'extension/extension',
                'extension/extension' => 'extension/extension',
                'extension/module' => 'extension/extension'
            );
        }else{
            $routes =  array(
                'marketplace/extension' => 'extension/module',
                'extension/extension' => 'extension/module',
                'extension/module' => 'extension/module'
            );
        }
        
        foreach($routes as $key => $value){
            if (strpos($route, $key) === 0) {
                $route = str_replace($key, $value, $route);
            }
        }
        

        return $this->url->link($route, $url, $secure);
    }
}