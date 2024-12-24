<?php 
/* 
    variabel
    
    disetiap bahasa pemograman pasti ada dengan variabel 

    * tujuan variabel adalah untuk menyimpan  data atau nilai yang dapat di manipulasi selama programnya berjalan
    * variabel bertidak untuk menyimpan data sementara yang dapat diubah atau di akses oleh program
    * variabel dapat mempermudah askses data dengan nama mudah diingat sehingga dapat pengguna code berulang

    pada variabel dapat menyimpan data(nilai) dengan tipe data string,int,double(float),boolean dll

    berikut ini aturan pengunaan variabel pada PHP
    1. diawali dengan tanda ($) tidak boleh dengan angka atau karakter kecuali underscore (_),dan di akhiri dengan (;)
        contoh salah = $31nama_variabel; , $-nama_variabel;
        contoh benar = $nama_variabel; , $kamar07;
    2. gunakan nama variabel yang mudah di mengerti oleh orang lain 
        contoh salah = $x ini // sangat membingungkan
        contoh benar = $nama // mudah di mengerti
    3. jika ada 2 variabel yang sama atau lebih ,maka variabel yang terakhir menjadi value
        contoh :
        $nama = "muhammmad";
        $nama = "mirza";

        echo $nama; //output "mirza"
*/

/* 
    tipe data 

    disetiap bahasa pemograman pasti ada dengan tipe  data
    
    adapun dengan bahasa pemograman php 
     * string = ini adalah huruf 
     * int = ini adalah bilangan bulat
     * float = ini adalah bilangan desimal
     * boolean = hanya memiliki 2 nilai yaitu true dan false
     * array = menyimpan kumpulan tipe data yang lain
        *index = array dengan indeks numerik di awali angka 0 dan seterusnya
        *associative = array mengunakan key berupa string lalu value
        *multidimensional = array berisi array lainnya
     * object = tipe data yang menyimpan instansi dari sebuah kelas. objek dapat memiliki properti dan metode 
                (materi lanjutan)
     * null = data tidak ada atau kosong Contoh: $nilai = null;
*/
    $string = "Muhammad Mirza";
    $float = 3.3333;
    $integer = 31;
    $boolean = true; // true atau false
    $null = null;

    //array
    $array_index = ["apel","pisang","Ceri"]; //untuk print echo $array_index[0];
    $array_associative = ['string'=>$string,'float'=>$float,'integer'=>$integer,'boolean'=>$boolean,'null'=> $null]; //untuk print echo $array_associative['string'];
    $array_multidimensional = [
        ['array_index'=> $array_index],
        ['array_associative'=>$array_associative]
    ];
    /*
    echo array_multidimension 
        untuk print echo $array_multidimensional[0]['array_index'][0]; outputnya "apel" 
        untuk print echo $array_multidimensional[1]['array_associative']['string']; outputnya "Muhammad Mirza" 
    */

    var_dump($array_multidimensional); // var_dump untuk menampilkan informasi variabel serta value dan tipe datanya
;?>