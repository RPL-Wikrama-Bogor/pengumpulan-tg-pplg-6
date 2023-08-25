using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace nomor11
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Input Nomor Pegawai :");
            string noga = Console.ReadLine();

            if (noga.Length != 11)
            {
                Console.WriteLine("Nomor Pegawai Tidak Sesuai");
            }
            else
            {
                string nogol = noga.Substring(0, 2);
                string tanggal = noga.Substring(2, 2);
                string bulan = noga.Substring(4, 2);
                string tahun = noga.Substring(6, 4);
                string nour = noga.Substring(10, 2);

                switch (bulan)
                {
                    case 1:
                        Console.WriteLine("Januari");
                        break;
                    case 2:
                        Console.WriteLine("Februari");
                        break;
                    case 3:
                        Console.WriteLine("Maret");
                        break;
                    case 4:
                        Console.WriteLine("April");
                        break;
                    case 5:
                        Console.WriteLine("Mei");
                        break;
                    case 6:
                        Console.WriteLine("Juni");
                        break;
                    case 7:
                        Console.WriteLine("Juli");
                        break;
                    case 8:
                        Console.WriteLine("Agustus");
                        break;
                    case 9:
                        Console.WriteLine("September");
                        break;
                    case 10:
                        Console.WriteLine("Oktober");
                        break;
                    case 9:
                        Console.WriteLine("November");
                        break;
                    case 12:
                        Console.WriteLine("Desember");
                        break;
                    default:
                        Console.WriteLine("Bulan tidak valid");
                        return;
                }

                string tanggalLahir = tanggal + " " + bulan + " " + tahun;

                Console.WriteLine(nogol);
                Console.WriteLine(tanggalLahir);
                Console.WriteLine(nour);
            }
        }
    }
}