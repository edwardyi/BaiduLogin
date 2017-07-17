<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $this->display();
    }

    public function register(){
		 if ($_POST){
		 	// dump($_POST);
		 	header('Content-Type: text/html; charset=utf-8');
		 	$objMember = D("Member");
		 	$strPwd = md5($_POST['pwd']);

		 	$data['account'] = $_POST['account'];
		 	$data['pass'] = $strPwd;
		 	$data['telephone'] =  $_POST['telephone'];
		 	
		 	
		 	// dump($data);
		 	// dump($objMember->create());
		 	// dump($objMember->getError());
		 	// dump($objMember);
		 	if($objMember->add($data)){
		 		redirect('profile', 5, '页面跳转中...')	;	
		 	}else{
		 		$this->assign('strMsg',"寫入資料有誤!");
		 	}
		 	
		 }
    	$this->display();
    }

    public function profile(){
    	$this->display();
    }

}