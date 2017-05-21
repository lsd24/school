<?php

class LoginAction extends Action {
    public function login() {
        $this->display();
    }
    public function doLogin(){
        //接受值
        //判断用户在数据库中是否存在
        //存在 允许登录
        //不存在 显示错误信息
        $username=$_POST['username'];
        $pwd=$_POST['pwd'];

        $user=M('yhb');
        $where['phone']=$username;
        $where['pwd']=$pwd;
        $arr=$user->field('userId')->where($where)->find();
        if($arr){
            $_SESSION['username']=$username;
            $_SESSION['userId']=$arr['userId'];
            $this->success('用户登录成功',U('Admin/index'));
        }else{
            $this->error('该用户不存在');
        }
    }
    //退出
    public function doLogout(){
        $_SESSION=array();
        if(isset($_COOKIE[session_name()])){
            setcookie(session_name(),'',time()-1,'/');
        }
        session_destroy();
        $this->redirect('Admin/index');
    }

}