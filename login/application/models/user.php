<?php
/**
 * Created by PhpStorm.
 * User: yao
 * Date: 2017/2/24
 * Time: 11:04
 */

class User extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    private $table = 'user';

    //得到登录的管理员的信息
    public function get_user($username)
    {
        $sql = "SELECT username,password FROM $this->table WHERE username = ?";

        $query = $this->db->query($sql,array($username));
        return $query->result_array();
    }

    //插入管理员信息
    public function insert_user($data)
    {
        $sql = " INSERT INTO $this->table (username,password) values(".$this->db->escape($data['username']).",".$this->db->escape($data['password']).")";

        $result =$this->db->query($sql);
        return $result;
    }
}