<?php



function daftarMenu(){
    
    $menu = [
        [
            "nama" => "Nasi Goreng",
            "harga" => 15000,
            "jenis" => "makanan"
        ],

        [
            "nama" => "Mie Goreng",
            "harga" => 10000,
            "jenis" => "makanan"
        ],
        [
            "nama" => "kwetiaw",
            "harga" => 15000,
            "jenis" => "makanan"
        ],
        [
            "nama" => "Es Jeruk",
            "harga" => 5000,
            "jenis" => "minuman"
        ],
        [
            "nama" => "Teh Manis",
            "harga" => 5000,
            "jenis" => "minuman"
        ]
    ];

    return $menu;
}


function proses($data){
    
    $makanan = $data['makanan'];
    $tMakanan = $data['totalMakanan'];
    $minuman = $data['minuman'];
    $tMinuman = $data['totalMinuman'];
    $menu = daftarMenu();
    $total3 = 0;
    $total4 = 0;

    $namaMakanan = $menu[$makanan]['nama'];
    $namaMinuman = $menu[$minuman]['nama'];


    $total1 = $menu[$makanan]['harga'] * $tMakanan;
    $total2 = $menu[$minuman]['harga'] * $tMinuman;

    $tMakanan + $tMinuman;

    if($tMakanan > 3 && $tMakanan <= 5){
        $total3 = $total1 * 5/100;
    }elseif($tMakanan > 5){
        $total3 = $total1 * 10/100;
    }


    if($tMinuman > 3 && $tMinuman <= 5){
        $total4 = $total2 * 5/100;
    }elseif($tMinuman > 5){
        $total4 = $total2 * 10/100;
    }


    return [
        'menu1' => $namaMakanan,
        'menu2' => $namaMinuman,
        'jmlhMakanan' => $tMakanan,
        'jmlhMinuman' => $tMinuman,
        'totalMakanan' => $total1,
        'totalMinuman' => $total2,
        'diskon1' => $total3,
        'diskon2' => $total4,
    ];
}

