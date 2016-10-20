<?php
//         foreach ($com as $key=>$value) {
//    echo ($key+1).' : '.$value->brand . ' / '.$value->asset_code.' / '.$value->cpu_type.'<br>';
//}

?>
<table class="table table-bordered">
    <thead>
        <tr align="center" class="info">
            <th>ลำดับ</th>
            <th>ยี่ห้อ</th>
            <th>รหัสครุภัณฑ์</th>
            <th>ประเภท cpu</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($com as $key => $value) {
            ?>

            <tr>
                <td align="center"><?= $key + 1 ?></td>
                <td><?= $value->brand ?></td>
                <td><?= $value->asset_code ?></td>
                <td><?= $value->cpu_type ?></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>