using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace nomor16
{
    internal class Program
    {
        static void Main(string[] args)
        {
            for (int i = 0; i <= 50; i++)
            {
                if (i % 2 == 1)
                {
                    Console.WriteLine("Bilangan Ganjil : " + i);
                }
                else 
                {
                    Console.WriteLine("Bilangan Genap : " + i);
                }
            }
        }
    }
}
