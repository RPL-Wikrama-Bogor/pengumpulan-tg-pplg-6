using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace nomor9
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Input Suhu Farenheit :");
            int suhu = Convert.ToInt32(Console.ReadLine());

            int celcius = (int)(suhu / 33.8);

            if (celcius >= 300)
            {
                Console.WriteLine("panas");
            }
            else if (celcius >= 250)
            {
                Console.WriteLine("dingin");
            }
            else
            {
                Console.WriteLine("normal");
            }
        }
    }
}
