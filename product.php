<?php 

class Product {
    public $judul = "judul",
           $pengarang = "pengarang",
           $penerbit = "penerbit",
           $stok = 0;

    public function CetakLabel(){
        return "Judul Komik : $this->judul, Pengarang : $this->pengarang";
    }

    public function __construct($judul, $pengarang, $penerbit, $stok){
        $this->judul = $judul;
        $this->pengarang = $pengarang;
        $this->penerbit = $penerbit;
        $this->stok = $stok;
    }

        
}

class CetakInfoLengkap {
    public function cetakInfo( Product $produk) {
        $str =  "{$produk->CetakLabel()} | penerbit : {$produk->penerbit}, stok : {$produk->stok} ";
        return $str;
    }

}

$product1 = new Product("Doraemon", "Fujiko F.Fujio", "Elex Media Kompution", 100);

// $product1->judul = "Doraemon";
// $product1->pengarang = "Fujiko F.Fujio";
// $product1->penerbit = "Elex Media Komputindo";
// $product1->stok = 100;

// $product2 = new Product();
// $product2->judul = "naruto";
// $product2->pengarang = "masashi kishimoto";
// $product2->penerbit = "Shonen Jump";
// $product2->stok = 50;

echo $product1->CetakLabel();
echo "<br>";
// echo $product2->CetakLabel();

$CetakInfo = new CetakInfoLengkap();
echo $CetakInfo->cetakInfo($product1);


// echo "<br>";

// var_dump($product1);


// $product2 = new Product();
// $product3 = new Product();

?>