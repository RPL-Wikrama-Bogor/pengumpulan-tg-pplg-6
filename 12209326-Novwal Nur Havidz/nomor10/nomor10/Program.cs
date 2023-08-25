using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace nomor10
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Input Nilai MTK :");
            int Mtk = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("Input Nilai PABP :");
            int Pabp = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("Input Nilai DPK :");
            int Dpk = Convert.ToInt32(Console.ReadLine());

            int rata = (Pabp + Mtk + Dpk)/3;

            if (rata <= 100 && rata >= 80)
            {
                Console.WriteLine("A");
            }
            else if (rata <= 80 && rata >= 75)
            {
                Console.WriteLine("B");
            }
            else if (rata <= 75 && rata >= 65)
            {
                Console.WriteLine("C");
            }
            else if (rata <= 65 && rata >= 45)
            {
                Console.WriteLine("D");
            }
            else if (rata <= 45 && rata >= 0)
            {
                Console.WriteLine("E");
            }
            else { Console.WriteLine("Angka Tidak Memenuhi Persyaratan"); }
        }
    }
}
