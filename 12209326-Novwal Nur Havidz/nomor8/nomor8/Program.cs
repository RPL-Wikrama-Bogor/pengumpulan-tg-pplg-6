using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace nomor8
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Input Bilangan: ");
            int bil = Convert.ToInt32(Console.ReadLine());

            int satuan = bil % 10;
            int puluhan = bil % 100;
            int ratusan = bil % 1000;

            Console.WriteLine(satuan + "satuan");
            Console.WriteLine(puluhan + "puluhan");
            Console.WriteLine(ratusan + "ratusan");
        }
    }
}
