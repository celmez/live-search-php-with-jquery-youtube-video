<?php
    require_once 'db.php';

    $value = $_POST['value'];

    $control = $db->query("SELECT * FROM uyeler WHERE isim LIKE '%$value%' ORDER BY ID DESC limit 2");
    $count = $control->rowCount();

    if( $count == 0 )
    {
        echo 'Böyle bir üye yok';
    }

    else
    {
        foreach( $control as $val )
        {
?>
            <ul>
                <li>
                    <a href="<?= $val['isim']; ?>">
                        <?= $val['isim']."<br />"; ?>
                    </a>
                </li>
            </ul>
<?php
        }
    }
?>