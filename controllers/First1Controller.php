<?php

namespace app\controllers;

class First1Controller extends \yii\web\Controller {

    public function actionIndex() {
        $title = 'ระบบรายงาน';
        
        $person = [
            ['fname' => 'สมชาย', 'lname' => 'ใจดี', 'email' => 'som@hotmail.com'],
            ['fname' => 'สมหญิง', 'lname' => 'ใจงาม', 'email' => 'ying@hotmail.com'],
            ['fname' => 'อภัย', 'lname' => 'ปิณฑะคุปต์', 'email' => 'apai.pk@gmail.com']
        ];

        $title = 'สวัสดีชาวโลก';
        return $this->render('index', ['title' => $title ,'person' => $person]);
    }

}
