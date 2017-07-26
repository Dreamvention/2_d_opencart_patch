<?php
class ControllerModuleDOpencartPatch extends Controller {
    private $error = array();

    public function index() {
        return false;
    }

    public function install() {
        $this->load->model('extension/d_opencart_patch/modification');
        $this->model_extension_d_opencart_patch_modification->setModification('d_opencart_patch.xml', 0);
        $this->model_extension_d_opencart_patch_modification->setModification('d_opencart_patch.xml', 1);

        $this->model_extension_d_opencart_patch_modification->refreshCache();
    }

    public function uninstall() {
        $this->load->model('extension/d_opencart_patch/modification');
        $this->model_extension_d_opencart_patch_modification->setModification('d_opencart_patch.xml', 0);
    }

}