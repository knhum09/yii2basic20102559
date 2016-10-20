<?php

namespace app\controllers;

class ReportcomseviceController extends \yii\web\Controller {

    public function actionIndex() {
        $conn = \Yii::$app->db;
//        if ($tid <> '') {
//            $sql = 'select * from com where com_type_id = ' . $tid;
//        } else {
//            $sql = 'SELECT com_service.*,com.brand FROM com_service
//                    INNER JOIN com ON com_service.com_id = com.com_id';
//        }
        $sql = 'SELECT com_service.*,com.brand FROM com_service
                    INNER JOIN com ON com_service.com_id = com.com_id';
//        $cmd->bindValue(':id',tid);

        $cmd = $conn->createCommand($sql);
        $data = $cmd->queryAll();

//        print_r($data);
//        die();
        return $this->render('index', ['data' => $data]);
    }

}
