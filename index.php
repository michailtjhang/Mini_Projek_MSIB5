<?php
include_once 'models/koneksi.php';
include_once 'models/lacak.php';
include_once 'header.php';


?>


<div>
    <div class="container-fluid px-4">
        <?php
        $url = !isset($_GET['hal'])  ? 'header' : $_GET['hal'];
        if ($url == 'home') {
            include_once 'home.php';
        } else if (!empty($url)) {
            include_once '' . $url . '.php';
        } else {
            include_once 'header.php';
        }

        ?>
    </div>
</div>


<?php
 include_once 'footer.php';

 ?>