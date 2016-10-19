<?php
/* @var $this yii\web\View */
?>

<h1><?= $title ?></h1>
<hr>
<?php
foreach ($person as $key => $items) {
    echo $key.' : '.$items['fname'].' / '.$items['lname'].' / '.$items['email'].'<br>';
    
}
?>
<p>
<div class="panel panel-primary">
    <table class="table table-striped"  align="center">
        <thead>
            <tr class="success">
                <th>no</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=1;
            foreach ($person as $item) {
                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $item['fname'] ?></td>
                    <td><?= $item['lname'] ?></td>
                    <td><?= $item['email'] ?></td>
                </tr>
            <?php $no++; } ?>
        </tbody>
    </table>
</div>
</p>
