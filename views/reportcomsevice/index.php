<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
?>
<h1>reportcomcomsevice/index</h1>

<table class="table table-bordered">
    <thead>
        <tr align="center" class="info">
            <th>ลำดับ</th>
            <th>ยี่ห้อคอมพิวเตอร์</th>
            <th>ปัญหาคอมพิวเตอร์</th>
            
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($data as $key => $value) {
            ?>

            <tr>
                <td align="center"><?= $key + 1 ?></td>
                <td><?= $value['brand'] ?></td>
                <td><?= $value['problem'] ?></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>