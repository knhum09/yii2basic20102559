<?php

namespace app\controllers;

class ChatController extends \yii\web\Controller {

    public function actionIndex() {
        $connection = \Yii::$app->db;
        $sql = ' select t.com_type_name,count(c.com_id) as cdata from com c left join com_type t on t.com_type_id=c.com_type_id group by c.com_type_id';
        $model = $connection->createCommand($sql);
        $data = $model->queryAll();
        foreach ($data as $item) {
            $chart[] = ['name' => $item['com_type_name'], 'data' => [intval($item['cdata'])]];
        }
        return $this->render('index', ['chart' => $chart]);
    }

}
