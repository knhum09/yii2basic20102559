<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
?>
<h1>reportcomtype/index</h1>

<table class="table table-bordered">
    <thead>
        <tr align="center" class="info">
            <th>ลำดับ</th>
            <th>รหัสประเภท</th>
            <th>ประเภท</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($data as $key => $value) {
            ?>

            <tr>
                <td align="center"><?= $key + 1 ?></td>
                <td><?= $value['com_type_id'] ?></td>
                <td><?= $value['com_type_name'] ?></td>
                <td align="center"><?= Html::a('<span class="glyphicon glyphicon-search"></span>', ['/report_com_detail/','tid'=>$value['com_type_id']]) ?></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>