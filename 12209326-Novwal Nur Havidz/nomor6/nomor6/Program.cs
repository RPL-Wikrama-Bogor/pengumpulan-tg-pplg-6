using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace nomor6
{
    internal class Program
    {
        static void Main(string[] args)
        {
            string hasil = "";

            Console.WriteLine("Input Waktu: ");
            int waktu = Convert.ToInt32(Console.ReadLine());

            int jam = waktu / 3600;
            int sisadetik = waktu % 3600;
            int menit = sisadetik % 60;
            int detik = sisadetik % 60;

            Console.WriteLine("Hasilnya adalah: ");
            Console.WriteLine(jam + " jam");
            Console.WriteLine(menit + " menit");
            Console.WriteLine(detik + " detik");
        }
    }
}
