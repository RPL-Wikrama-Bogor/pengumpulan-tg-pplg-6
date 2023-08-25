document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("main").addEventListener("click", function() 
    {
        const employeeCode = document.getElementById("Kodenya").value;
        const Golongan = employeeCode[0];
        const TanggalLahir = employeeCode.substring(1, 3);
        const BulanLahir = employeeCode.substring(3, 5);
        const TahunLahir = employeeCode.substring(5, 9);
        const NomorUrut = employeeCode.substring(9);

        const bulanArray = [
            "JAN", "FEB", "MAR", "APR", "MEI", "JUN",
            "JUL", "AGU", "SEP", "OKT", "NOV", "DES"
        ];
        const BulanLahirNama = bulanArray[parseInt(BulanLahir) - 1];

        document.getElementById("outputGolongan").textContent = Golongan;
        document.getElementById("outputTanggalLahir").textContent = TanggalLahir + " " + BulanLahirNama + " " + TahunLahir;
        document.getElementById("outputNomorUrut").textContent = NomorUrut;
    });
});
