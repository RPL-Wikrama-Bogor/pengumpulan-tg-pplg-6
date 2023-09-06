using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace nomoorr18
{
    internal class Program
    {
        static void Main(string[] args)
        {
            string[] namaSiswa = new string[15];
            int[] kehadiran = new int[15];
            int[] matematika = new int[15];
            int[] bahasaIndonesia = new int[15];
            int[] bahasaInggris = new int[15];
            int[] dpk = new int[15];
            int[] agama = new int[15];
            int[] rataRata = new int[15];

            for (int i = 0; i < 15; i++)
            {
                Console.WriteLine("Masukkan data untuk siswa ke-" + (i + 1));
                Console.Write("Nama: ");
                namaSiswa[i] = Console.ReadLine();
                Console.Write("Kehadiran (0-100): ");
                kehadiran[i] = int.Parse(Console.ReadLine());
                Console.Write("Matematika: ");
                matematika[i] = int.Parse(Console.ReadLine());
                Console.Write("Bahasa Indonesia: ");
                bahasaIndonesia[i] = int.Parse(Console.ReadLine());
                Console.Write("Bahasa Inggris: ");
                bahasaInggris[i] = int.Parse(Console.ReadLine());
                Console.Write("DPK: ");
                dpk[i] = int.Parse(Console.ReadLine());
                Console.Write("Agama: ");
                agama[i] = int.Parse(Console.ReadLine());
                rataRata[i] = (kehadiran[i] + matematika[i] + bahasaIndonesia[i] + bahasaInggris[i] + dpk[i] + agama[i]) / 6;
            }

            int maxRataRata = -1;
            int juaraIndex = -1;

            for (int i = 0; i < 15; i++)
            {
                if (rataRata[i] >= 475 && kehadiran[i] == 100)
                {
                    if (rataRata[i] > maxRataRata)
                    {
                        maxRataRata = rataRata[i];
                        juaraIndex = i;
                    }
                }
            }

            if (juaraIndex != -1)
            {
                Console.WriteLine("Juara: " + namaSiswa[juaraIndex]);
            }
            else
            {
                Console.WriteLine("Tidak ada juara yang memenuhi syarat.");
            }
        }
    }
}
