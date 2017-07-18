<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
    	if(session('id')){
    		$this->redirect('home/index/profile');
    	}

        $this->display();
    }

    public function logout(){
    	session('id',null);
    	session('account',null);
    	$this->redirect('home/index/index');
    }

    public function register(){
		 if ($_POST){
		 	// dump($_POST);
		 	header('Content-Type: text/html; charset=utf-8');
		 	$objMember = D("Member");
		 	$strPwd = md5(I('pwd'));

		 	$data['account'] = I('account');
		 	$data['pwd'] = $strPwd;
		 	$data['telephone'] =  I('telephone');
		 	$data['yyy'] = 'yyyy';
		 	$data['email'] = 'test@qq.com';
		 	
		 	// dump($data);
		 	// // dump($objMember->create());
		 	// // dump($objMember->getError());
		  //   $intData = $objMember->add($data);
		  //   $data['account'] ='qq';
		  //   echo $strPwd;
		  //   $objMember->pwd = "tttt";
		  //   // $data = "ttttt";
		  //   $objMember->where('id='.$intData)->save($data);
		 	// dump($objMember->find($intData));
		 	// dump($objMember);
		 	if($id = $objMember->add($data)){
		 		session('id',$id);
		 		redirect('profile', 5, '页面跳转中...')	;	
		 	}else{
		 		$this->assign('strMsg',"寫入資料有誤!");
		 	}
		 	
		 }
    	$this->display();
    }

    public function profile(){

        $objMember = M('member')->where(array('id'=>session('id')));
        $profile_id = $objMember->find()['profile_id'];
        
        $objProfile = M('profile')->where(array('id'=>$profile_id));
        $arrProfile = $objProfile->find();

    	$objArrData = M('habittype');
    	$arrAll = $objArrData->select();

    	$arrResult['bodyType'][0] = array("name" => "請選擇體型","id"=>"0");
   		$arrResult['marriage'][0] = array("name" => "請選擇婚姻狀況","id"=>"0");
   		$arrResult['isSmoke'][0] = array("name" => "抽菸習慣","id"=>"0");
   		$arrResult['eatingHabit'][0] = array("name" => "飲食習慣","id"=>"0");
   		$arrResult['sleepHabit'][0] = array("name" => "睡眠習慣","id"=>"0");
   		$arrResult['ocupation'][0] = array("name" => "請選擇當前職業","id"=>"0");


        $arrKey = $arrProfile;
        unset($arrKey['contact']);
        unset($arrKey['id']);
        
        $arrKey = array_merge($arrKey,explode(',',$arrKey['personalityset']));

    	foreach ($arrAll as $key => $value) {
            $check = (array_search($value['id'], $arrKey) ? "1" : "0");

            if($value['type']=="personality"){
                $i = $i + 1;
            }else{
                $i = 0;
            }
    		$arrResult[$value['type']][$key+1] = 
    										array("name_en" => $value['name_en'],
    										       "name" => $value['name'],
    										       "id"=>$value['id'],
                                                   "checked"=>$check,
                                                   "i"=>$i);
    	}

    	// dump($arrResult['personality']);
   		// dump($arrKey);
        
    	$this->assign('bodyType',$arrResult['bodyType']);
    	$this->assign('marriage',$arrResult['marriage']);
    	$this->assign('isSmoke',$arrResult['isSmoke']);
    	$this->assign('eatingHabit',$arrResult['eatingHabit']);
    	$this->assign('sleepHabit',$arrResult['sleepHabit']);
    	$this->assign('personality',$arrResult['personality']);
    	$this->assign('education',$arrResult['education']);
    	$this->assign('ocupation',$arrResult['ocupation']);
        $this->assign('contact',$arrProfile['contact']);
    	// dump($arrAll);

    	$this->display();
    }

}