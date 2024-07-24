<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {
    public function index() {
        // "SELECT *  FROM tb_games";
        return $this->db->get("tb_games")->result_array();
    }

    public function store($user) {
        $this->db->insert("tb_users", $user);
    }

    public function show($id) {
        return $this->db->get_where("tb_games", array(
            "id" => $id
        ))->row_array();
    }

    public function update($id, $game) {
        $this->db->where("id", $id);
        return $this->db->update("tb_games", $game);
    }

    public function destroy($id) {
        $this->db->where("id", $id);
        return $this->db->delete("tb_games");
    }
}
