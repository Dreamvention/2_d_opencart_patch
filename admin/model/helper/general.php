<?php
namespace Opencart\Admin\Model\Extension\DvOpencartPatch\Helper;

class General extends \Opencart\System\Engine\Model {
    public function token(int $length = 32) {
        if (VERSION > '4.0.1.1') {
            return oc_token($length);
        } else if (VERSION > '4.0.0.0') {
            return \Opencart\System\Helper\General\token($length);
        } else {
            return token($length);
        }
    }
    
    function strlen(string $string) {
        if (VERSION > '4.0.1.1') {
            return oc_strlen($string);
        } else if (VERSION > '4.0.0.0') {
            return \Opencart\System\Helper\Utf8\strlen($string);
        } else {
            return utf8_strlen($string);
        }
    }
    
    function strpos(string $string, string $needle, int $offset = 0) {
        if (VERSION > '4.0.1.1') {
            return oc_strpos($string, $needle, $offset);
        } else if (VERSION > '4.0.0.0') {
            return \Opencart\System\Helper\Utf8\strpos($string, $needle, $offset);
        } else {
            return utf8_strpos($string, $needle, $offset);
        }
    }
    
    function strrpos(string $string, string $needle, int $offset = 0) {
        if (VERSION > '4.0.1.1') {
            return oc_strrpos($string, $needle, $offset);
        } else if (VERSION > '4.0.0.0') {
            return \Opencart\System\Helper\Utf8\strrpos($string, $needle, $offset);
        } else {
            return utf8_strrpos($string, $needle, $offset);
        }
    }
    
    function substr(string $string, int $offset, ?int $length = null) {
        if (VERSION > '4.0.1.1') {
            return oc_substr($string, $offset, $length);
        } else if (VERSION > '4.0.0.0') {
            return \Opencart\System\Helper\Utf8\substr($string, $offset, $length);
        } else {
            return utf8_substr($string, $offset, $length);
        }
    }
    
    function strtoupper(string $string) {
        if (VERSION > '4.0.1.1') {
            return oc_strtoupper($string);
        } else if (VERSION > '4.0.0.0') {
            return \Opencart\System\Helper\Utf8\strtoupper($string);
        } else {
            return utf8_strtoupper($string);
        }
    }
    
    function strtolower(string $string) {
        if (VERSION > '4.0.1.1') {
            return oc_strtolower($string);
        } else if (VERSION > '4.0.0.0') {
            return \Opencart\System\Helper\Utf8\strtolower($string);
        } else {
            return utf8_strtolower($string);
        }
    }
}