<?php


class product
{
    public  $name, 
            $price, 
            $discount;
    
    function __construct($nama, $harga, $diskon) {
        $this->name = $nama;
        $this->price = $harga;
        $this->discount = $diskon;
    }

    function getInfoProduct() {
        $str = "{$this->name} | Rp. {$this->price} | {$this->discount}";
        return $str;
    }

}


class CDMusic extends product 
{
    public $artist,
           $genre;

    function __construct($nama = "nama", $harga = "harga", $diskon = "diskon", $artis = "artis", $genre = "genre") {
        parent::__construct($nama, $harga, $diskon);
        $this->artist = $artis;
        $this->genre = $genre;
    }

    function getHarga() {
        return $this->price + ($this->price*0.1) - ($this->discount/100);
    }

    function getInfoProduct() {
        $str = "CDMusic : " . parent::getInfoProduct() . "| {$this->artist} | {$this->genre}";
        return $str;
    }
   
}

class CDRack extends product
{
    public $capacity,
           $model;

    function __construct($nama = "nama", $harga = "harga", $diskon = "diskon", $kapasitas = "kapasitas", $model = "model") {
    parent::__construct($nama, $harga, $diskon);
    $this->capacity = $kapasitas;
    $this->model = $model;
    }

    function getHarga() {
        return $this->price + ($this->price*0.15);
    }

    function getInfoProduct()
    {
        $str = "Rak CD : " . parent::getInfoProduct() . "| {$this->capacity} | {$this->model}";
        return $str;
    }

}

class CetakInfoProduct {
    Public $detailProduct = array();

    function tambahDetail( product $product) {
        $this->detailProduct[] = $product;
    }

    function cetak() {
        $str = "Detail Produk : <br>";

        foreach($this->detailProduct as $p) {
            $str .= "- {$p->getInfoProduct()} <br>";
        }

        return $str;
    }

}

$produk1 = new CDMusic("Hero","50.000","5%","Cash Cash ft.Christina Perri", "EDM");
$produk2 = new CDMusic("See You Again","100.000","5%","Wiz Khalifa ft. Charlie Puth", "POP");
$produk3 = new CDRack("Rak CD","150.000","-","39 Pieces","Dinding Partisi Dekoratif");

$cetakProduk = new CetakInfoProduct();
$cetakProduk->tambahDetail($produk1);
$cetakProduk->tambahDetail($produk2);
$cetakProduk->tambahDetail($produk3);
echo $cetakProduk->cetak();


?>