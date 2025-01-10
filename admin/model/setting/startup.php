<?php
namespace Opencart\Admin\Model\Extension\DvOpencartPatch\Setting;

class Startup extends \Opencart\System\Engine\Model {
    public function addStartup(array $data): void {
        $this->load->model('setting/startup');
        if (VERSION > '4.0.0.0') {
            if (VERSION > '4.0.1.1'){
                $data['action'] = str_replace('|', '.', $data['action']);
            }
			$this->model_setting_startup->addStartup($data);
		} else {
			$this->model_setting_startup->addStartup($data['code'], $data['action'], $data['status'], $data['sort_order']);
		}
    }
    public function deleteStartupByCode(string $code): void {
        $this->load->model('setting/startup');
		$this->model_setting_startup->deleteStartupByCode($code);
    }
    public function deleteStartup(int $startup_id): void {
        $this->load->model('setting/startup');
        $this->model_setting_startup->deleteStartup($startup_id);
    }
}