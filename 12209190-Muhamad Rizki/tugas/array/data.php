<?php
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $umur_di_bawah_17 = false; 
        
    foreach($names as $key => $data_siswa){
        if($nama == $data_siswa['nama']){
            if($data_siswa['umur'] <= 17){
                $umur_di_bawah_17 = true;
                break; 
            }
                echo "Nama: $nama<br>";
                echo "NIS: {$data_siswa['nis']}<br>";
                echo "Rombel: {$data_siswa['rombel']}<br>";
                echo "Rayon: {$data_siswa['rayon']}<br>";
                echo "Umur: {$data_siswa['umur']}<br>";
        }
    }
    
    if($umur_di_bawah_17){
        echo "Umur Anda di bawah 17 tahun";
    }
}
?>