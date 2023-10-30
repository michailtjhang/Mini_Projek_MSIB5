<?php  

class member {
    private $koneksi;
    public function __construct() {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function cekLogin($data) {
        $sql = "SELECT * FROM member WHERE username = ? AND pass = ?";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
        $rs = $ps->fetch();

        return $rs;
    }

}

?>