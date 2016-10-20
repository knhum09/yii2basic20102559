<?php
/* @var $this yii\web\View */
$this->params['breadcrumbs'][] = ['label' => 'ประเภทคอม', 'url' => ['/reportcomtype/index']];
?>
<h1>report-com-detail/index</h1>
<button onclick="goBack()" >Back</button>

<script>
function goBack() {
    window.history.back();
}
</script>
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
        foreach ($data as $key => $value) {
            ?>

            <tr>
                <td align="center"><?= $key + 1 ?></td>
                <td><?= $value['brand'] ?></td>
                <td><?= $value['asset_code'] ?></td>
                <td><?= $value['cpu_type'] ?></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>