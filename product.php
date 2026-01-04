<?php 

class Product {
    public $judul = "judul",
           $pengarang = "pengarang",
           $penerbit = "penerbit",
           $stok = 0;

    public function CetakLabel($judul, $pengarang){
        return "Judul Komik : $judul, Pengarang : $pengarang";
    }
        
}

$product1 = new Product();
$product1->judul = "Doraemon";
$product1->pengarang = "Fujiko F.Fujio";
$product1->penerbit = "Elex Media Komputindo";
$product1->stok = 100;

echo $product1->CetakLabel($product1->judul, $product1->pengarang);

echo "<br>";

var_dump($product1);


// $product2 = new Product();
// $product3 = new Product();

?>