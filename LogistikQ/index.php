<?php  

include_once 'databases/koneksi.php';
include_once 'models/barang.php';
include_once 'models/pengiriman.php';

include_once 'template/top.php';
include_once 'template/sizebar.php';
include_once 'template/navbar.php';

?>

<div>
    <div class="container-fluid px-4">
        <?php  

            $url = !isset($_GET['url']) ? 'dashboard' : $_GET['url'];
            if($url == 'dashboard') {
                include_once 'dashboard.php';
            } else if (!empty($url)) {
                include_once '' . $url . '.php';
            } else {
                include_once 'dashboard.php';
            }
        
        ?>
    </div>
</div>

<?php 

include_once 'template/bottom.php';

?>