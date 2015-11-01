<?php

namespace frontend\controllers;

class TestController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionTest1(){
        // echo 'ทดสอบ 1';
        $a=3;
        $b=5;
        $sum=$a+$b;
        
        $param=['sum'=>$sum,'a'=>$a,'bb'=>$b];
        
        //แสดงผลค่า sum ไปที่ view ยังไง คือ
        return $this->render('test1',$param);
        //หรือ return $this->render('test1',['sum'=>$sum]);
    } // จบ test 1
    
    public function actionTest2($name=null,$lname=null){
        
        $info = "Your name is $name $lname";
        return $this->render('test2',['info'=>$info]);
    }
    
    
}
