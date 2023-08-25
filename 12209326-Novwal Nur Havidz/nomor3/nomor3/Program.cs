using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace nomor3
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Input bilangan pertama :");
            int a= Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("Input bilangan kedua :");
            int b = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("Input bilangan ketiga :");
            int c = Convert.ToInt32(Console.ReadLine());

            if(a > b && a > c)
            {
                Console.WriteLine("bilangan paling besar adalah : " +a);
            }
            else if (b > c && b > c)
            {
                Console.WriteLine("bilangan paling besar adalah : " + b);
            }
            else if (c > a && c > b)
            {
                Console.WriteLine("bilangan paling besar adalah : " + c);
            }
            else
            {
                Console.WriteLine("bilangan sama besar");
            }
        }
    }
}
