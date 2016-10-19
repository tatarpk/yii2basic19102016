<?php
/* @var $this yii\web\View */
?>
<h1><?php echo $title; ?></h1>
<?php
//print_r($person);
foreach ($person as $key => $item) {
    echo $key . ' : ' . $item['fname'] . '<br>';
}
echo '<hr>';
?>


<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr class="success">
            <th>ลำดับ</th>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>อีเมลล์</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($person as $key => $value) {

            echo '<tr>';
            echo '<td>' . ($key + 1) . '</td>';
            echo '<td>' . $value['fname'] . '</td>';
            echo '<td>' . $value['lname'] . '</td>';
            echo '<td>' . $value['email'] . '</td>';
            echo '</tr>';
        }
        ?>



    </tbody>
</table>
<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>
