<?php

namespace app\controllers;

class Report_com_detailController extends \yii\web\Controller
{
    public function actionIndex($tid)
    {
        $conn=\Yii::$app->db;
        if($tid<>''){
        $sql='select * from com where com_type_id = '.$tid;
        }  else {
            $sql='select * from com';
        }
//        $sql='select * from com where com_type_id =:id ';
//        $cmd->bindValue(':id',tid);
        
        $cmd=$conn->createCommand($sql);
        $data=$cmd->queryAll();
        
//        print_r($data);
//        die();
        return $this->render('index',['data'=>$data]);
    }

}
