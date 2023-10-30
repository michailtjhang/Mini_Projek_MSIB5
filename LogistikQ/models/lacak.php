<?php
class lacak{
    private $koneksi;
    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }
    public function cetakresi($id){
        $sql = "SELECT * FROM pengiriman , kurir WHERE pengiriman.kurir_id=kurir.id AND pengiriman.kode=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();

        return $rs;
    }
}



?>