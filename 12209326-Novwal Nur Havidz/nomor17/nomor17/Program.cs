using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading;
using System.Threading.Tasks;

namespace nomor17
{
    internal class Program
    {
        static void Main(string[] args)
        {
                List<int> dataArray = new List<int>();

                while (true)
                {
                    
                    Console.Write("Masukkan data: ");
                    string inputData = Console.ReadLine();

                    
                    if (int.TryParse(inputData, out int data))
                    {
                        dataArray.Add(data);
                    }
                    else
                    {
                        Console.WriteLine("Data harus berupa angka. Coba lagi.");
                        continue;
                    }

                    
                    int dataCount = dataArray.Count;
                    Console.WriteLine("Jumlah data yang telah dimasukkan: {dataCount}");

                    
                    if (dataCount >= 20)
                    {
                        break;
                    }
                    else
                    {
                        Console.WriteLine("Masukkan data lagi untuk mencapai 20 data.");
                    }
                }

                
                Console.WriteLine("Data telah mencapai 20.");
                Console.WriteLine("Data yang dimasukkan:");

                foreach (int data in dataArray)
                {
                    Console.WriteLine(data);
                }

                
                int max = dataArray.Max();
                int min = dataArray.Min();
                double average = dataArray.Average();

                Console.WriteLine($"Bilangan terbesar: {max}");
                Console.WriteLine($"Bilangan terkecil: {min}");
                Console.WriteLine($"Nilai rata-rata: {average}");
        }
    }

 }


