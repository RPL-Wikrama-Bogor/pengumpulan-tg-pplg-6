using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace nomor5
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Inputkan Jam: ");
            int jam = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("Inputkan Menit: ");
            int menit = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("Inputkan Detik: ");
            int detik = Convert.ToInt32(Console.ReadLine());

            jam = jam * 3600;
            menit = menit * 60;
            int total = jam + menit + detik;

            Console.WriteLine("Totalnya adalah: " + total);
        }
    }
}
