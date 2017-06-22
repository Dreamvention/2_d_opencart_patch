<?php
/*
 *  location: admin/model/extension/d_opencart_patch/setting.php
 *
 */

class ModelExtensionDOpencartPatchSetting extends Model {
    public function getSetting($code, $store_id = 0) {
        $this->load->model('setting/setting');
        return $this->model_setting_setting->getSetting($code, $store_id);
    }

    public function editSetting($code, $data, $store_id = 0) {
        $this->load->model('setting/setting');
        $this->model_setting_setting->editSetting($code, $data, $store_id);
    }

    public function deleteSetting($code, $store_id = 0) {
        $this->load->model('setting/setting');
        $this->model_setting_setting->deleteSetting($code, $store_id);
    }

    public function editSettingValue($code = '', $key = '', $value = '', $store_id = 0) {
        $this->load->model('setting/setting');
        $this->model_setting_setting->deleteSetting($code, $key, $value, $store_id);
    }
}