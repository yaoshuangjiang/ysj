<?php
/**
 * Created by PhpStorm.
 * User: yao
 * Date: 2017/2/24
 * Time: 10:43
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Gogo extends CI_Controller{

    public function  __construct()
    {
        parent::__construct();
        //加载User数据模型
        $this->load->model("user");
        $this->load->helper("url");
    }

    public function index()
    {
        $this->load->view('login');
    }

    public  function  hello()
    {
        $this->load->view('test');
    }

    public function  register0()
    {
        $this->load->view('register');
    }

    public function  register1()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username === '' || $password === '' ) {
            $this->load->view('register');
        }else if (strlen($username)>16 || strlen($password)>16) {
            $this->load->view('register');
        }
        else{
            $pwd = md5($password);
            $data = array('username'=>$username,'password'=>$pwd);
            $this->user->insert_user($data);

            $this->load->view('login');
        }
    }

    public function check()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username === '' || $password === '' )
        {
            //加载登录页面
            $data['mess'] = "账号或密码为空";
            $this->load->view('faild',$data);
            return false;

        }else if (strlen($username)>16 || strlen($password)>16)
        {
            $data['mess'] = "用户名和密码太长";
            $this->load->view('faild',$data);
            return false;
        }else{
            $row = $this->user->get_user($username);
            if (count($row)!=0) {
                if( $row[0]['password'] !=md5($password)) {
                    $data['mess'] = "密码错误！";
                    $this->load->view('faild',$data);
                    return;
                }
                $data['mess'] = $row[0]['username'];
                $this->load->view('secssuse',$data);
            }
            else{
                $data['mess'] = "账户不存在！";
                $this->load->view('faild',$data);
            }
        }
    }
}

