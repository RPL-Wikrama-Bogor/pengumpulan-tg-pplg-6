using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace nomor7
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Input Total Gram :");
            int totalGram = Convert.ToInt32(Console.ReadLine());

            int hargaSebelum = 500 * totalGram;
            int diskon = 5 * hargaSebelum / 100;
            int hargaSetelah = hargaSebelum - diskon;
            Console.WriteLine(hargaSebelum);
            Console.WriteLine(diskon);
            Console.WriteLine(hargaSetelah);
        }
    }
}
