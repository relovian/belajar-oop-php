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

$product1 = new Product("Doraemon", "Fujiko F.Fujio", "Elec Media Komputindo", 100);
$product2 = new Product("naruto", "masashi kishimoto", "shonen jump", 50);
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
echo $product2->CetakLabel();

// echo "<br>";

// var_dump($product1);


// $product2 = new Product();
// $product3 = new Product();

?>