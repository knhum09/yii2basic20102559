<?php

namespace app\controllers;

class First1Controller extends \yii\web\Controller {

    public function actionIndex() {
        $title = 'ระบบรายงาน';
        $person = [
            ['fname' => 'สมชาย', 'lname' => 'ใจดี', 'email' => 'som@htomil.com'],
            ['fname' => 'สมหญิง', 'lname' => 'ใจงาม', 'email' => 'somy@htomil.com'],
            ['fname' => 'ชาติชาย', 'lname' => 'ใจชอบ', 'email' => 'chatchay@htomil.com']];
        return $this->render('index', ['title' => $title,'person'=>$person]);
    }

}
