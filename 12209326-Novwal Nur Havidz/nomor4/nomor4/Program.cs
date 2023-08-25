using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace nomor4
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Masukan Nama Anda:" );
            string nama = Convert.ToString(Console.ReadLine());
            Console.WriteLine("Masukan Gaji Pokok:" );
            int gaji_pokok = Convert.ToInt32(Console.ReadLine());

            int tunj = (20 *  gaji_pokok)/100;
            int pjk = (15 * (gaji_pokok + tunj)) / 100;
            int gaji_bersih = gaji_pokok + tunj - pjk;

            Console.WriteLine(nama);
            Console.WriteLine(tunj);
            Console.WriteLine(pjk);
            Console.WriteLine(gaji_bersih);
        }
    }
}
