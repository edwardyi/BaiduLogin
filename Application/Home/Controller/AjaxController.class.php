<?php
namespace Home\Controller;

use Think\Controller;

class AjaxController extends Controller
{
	public function login(){
		if($_POST){
			$objMember = D("Member");
			$strAccount = trim(I('account'));
			$oPwd = trim(I('password'));
			$strPwd = md5($oPwd);
			$map['account'] = $strAccount;
			$map['pwd'] = $strPwd;
			
			if(!$strAccount){
				echo "請設置手機/郵箱/用戶名";
				exit;
			}
			if(!$oPwd){
				echo "請設置密碼";
				exit;
			}
			// dump($objMember->where($map)->find());
			if($arrResult = $objMember->where($map)->find()){
				 session('id',$arrResult['id']);
				 session('account',$arrResult['account']);
				 $url = U('home/index/profile');

				 echo "<script>location.href='$url'</script>";
				 // $this->success("登入成功",U('home/index/profile'));
				 // header('location:'.U('home/index/profile'));
				 // echo 'home/index/profile';
			}else{
				 echo "您输入的帐号或密码有误";				
			}
		}
	}
	public function saveProfile(){
		if($_POST){
			$data['bodyType'] = I('bodyType');
			$data['mariageType'] = I('marriage');
			$data['smokeHabit'] = I('isSmoke');
			$data['foodHabit'] = I('eatingHabit');
			$data['sleepHabit'] = I('sleepHabit');
			$data['personalitySet'] = implode(I('personality'),',');
			$data['education'] = I('education');
			$data['ocupation'] = I('ocupation');
			$data['contact'] = I('contact');
			$objProfile = M('profile');
			$objMember = M('member')->where(array('id'=>session('id')));
			$profile_id = $objMember->find()['profile_id'];
			
			if($profile_id){
				$objProfile->where(array('id'=>$objMember->profile_id))->save($data);
				echo '修改成功!';
			}else{
				echo $objMember->profile_id;
				if($profile_id = $objProfile->add($data)){
					$dataChange['profile_id'] = $profile_id;
					$objMember->save($dataChange);
					echo "保存成功!";	
				}
			}
			// var_dump($_POST);
			// echo "保存成功!";	
		}
	}
}