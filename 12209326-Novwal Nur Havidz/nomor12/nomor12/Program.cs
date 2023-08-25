using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace nomor12
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Inputkan Jam :");
            int hh = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("Input Menit :");
            int mm = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("Inputkan Detik :");
            int ss = Convert.ToInt32(Console.ReadLine());

            ss = ss + 1;

            if (ss >= 60)
            {
                Console.WriteLine(ss = 00);
            }
            else
            {
                mm = mm + 1;
                ss = 00;
            }
            if 
        }
    }
}
