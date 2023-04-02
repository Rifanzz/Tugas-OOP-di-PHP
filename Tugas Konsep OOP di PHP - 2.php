<?php
interface Hewan {
    
    function berjalan();
    function makan();
    function bersuara();
}

interface Monyet extends Hewan {
    function berkendara();
}

class Dilatih implements Monyet {
    
    public function __construct() {
    }
    
    function berjalan(){
        echo "Berjalan";
    }
    function makan() {
        echo "Makan";
    }
    function bersuara() {
        echo "Bersuara";
    }
    function berkendara() {
        echo "Berkendara";
    }
}

$dilatih = new dilatih();
$dilatih-> berjalan()

?>