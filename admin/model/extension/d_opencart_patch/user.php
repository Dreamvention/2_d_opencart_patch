<?php
/*
 *  location: admin/model/extension/d_opencart_patch/user.php
 *
 */

class ModelExtensionDOpencartPatchUser extends Model {

    public function getGroupId(){
        if(VERSION == '2.0.0.0'){
            $user_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "user WHERE user_id = '" . $this->user->getId() . "'");
            $user_group_id = (int)$user_query->row['user_group_id'];
        }else{
            $user_group_id = $this->user->getGroupId();
        }

        return $user_group_id;
    }
}