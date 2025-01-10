<?php
namespace Opencart\Admin\Model\Extension\DvOpencartPatch\Setting;

class Event extends \Opencart\System\Engine\Model {
    public function addEvent(array $data): void {
        $this->load->model('setting/event');
        if (VERSION > '4.0.0.0') {
            if (VERSION > '4.0.1.1'){
                $data['trigger'] = str_replace('|', '.', $data['trigger']);
                $data['action'] = str_replace('|', '.', $data['action']);
            }
			$this->model_setting_event->addEvent($data);
		} else {
			$this->model_setting_event->addEvent($data['code'], $data['description'], $data['trigger'], $data['action'], $data['status'], $data['sort_order']);
		}
    }
    public function deleteEventByCode(string $code): void {
        $this->load->model('setting/event');
        $this->model_setting_event->deleteEventByCode($code);
    }
    public function deleteEvent(int $event_id): void {
        $this->load->model('setting/event');
        $this->model_setting_event->deleteEvent($event_id);
    }
}