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
                mm = mm + 1;
                ss = 00;
            }
            else
            {
                ss = 00;
            }
           if (mm >= 60)
            {
                hh = hh + 1;
                mm = 00;
                ss = 00;
            }
            else
            {
                Console.WriteLine(hh + "" + mm + "" + ss);
            }
           if (hh >= 24)
            {
                hh = 00;
                mm = 00;
                ss = 00;
            }
            else
            {
                Console.WriteLine(hh + "" + mm + "" + ss);
            }
        }
    }
}
