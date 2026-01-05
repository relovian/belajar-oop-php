<?php 

class Product {
    public $judul,
           $pengarang,
           $penerbit,
           $jumlahHlm ,
           $waktuMain,
           $tipeProduct,
           $stok;

    public function CetakLabel(){
        return " judul : {$this->judul} <br> pengarang : {$this->pengarang}";
    }

    public function __construct($judul  = "judul", $pengarang  = "pengarang", $penerbit  = "penerbit", $jumlahHlm = 0, $waktuMain  = 0, $tipeProduct = "tipe product", $stok = 0 ){
        $this->judul = $judul;
        $this->pengarang = $pengarang;
        $this->penerbit = $penerbit;
        $this->jumlahHlm = $jumlahHlm;
        $this->waktuMain = $waktuMain;
        $this->tipeProduct = $tipeProduct;
        $this->stok = $stok;
    }

    public function CetakInfoLengkap() {
        $str = "- {$this->tipeProduct} <br> {$this->CetakLabel()} <br> penerbit :  {$this->penerbit} <br> stok :  {$this->stok}  ";

        if($this->tipeProduct == "komik") {
            $str .= " <br> jumlah halaman : {$this->jumlahHlm}  ";
        } else {
            $str .= " <br> waktu main : {$this->waktuMain} ";
        }

        return $str;
    }

    public function CetakInfoDetail() {
        return "Komik : {$this->judul}, {$this->pengarang}, {$this->penerbit}, {$this->stok}, - {$this->jumlahHlm} Halaman ";
    }
        
}

class CetakInfoLengkap {
    public function cetakInfo( Product $produk) {
        $str =  "{$produk->CetakLabel()} | penerbit : {$produk->penerbit}, stok : {$produk->stok} ";
        return $str;
    }

}

$product1 = new Product("Doraemon", "Fujiko F.Fujio", "Elex Media Kompution", 50, 0, "komik", 120);
$product1 = new Product("Minecraft", "Mojang Studios", "Mojang Studios / Microsoft Studios", 0, 70, "game", 200);


// echo $product1->CetakLabel();
echo $product1->CetakInfoLengkap();

// $product1->judul = "Doraemon";
// $product1->pengarang = "Fujiko F.Fujio";
// $product1->penerbit = "Elex Media Komputindo";
// $product1->stok = 100;

// $product2 = new Product();
// $product2->judul = "naruto";
// $product2->pengarang = "masashi kishimoto";
// $product2->penerbit = "Shonen Jump";
// $product2->stok = 50;

// echo $product1->CetakLabel();
// echo "<br>";
// // echo $product2->CetakLabel();

// $CetakInfo = new CetakInfoLengkap();
// echo $CetakInfo->cetakInfo($product1);
// echo "<br>";
// echo "<br>";

// echo $product1->CetakInfoDetail();




// echo "<br>";

// var_dump($product1);


// $product2 = new Product();
// $product3 = new Product();

?>