x = 120
print(type(x))
y = "Hai"
print(type(y))

x = 5
print(type(x))

y = 0,5
print(type(y))

mobil = "hijau"
print(type(mobil))

print("Universitas " + "Pertamina")
print("Universitas Pertamina " * 3)

print(5 * 2)
print(5 * 2.5)

print(5 * 2 > 5 * 3)

x = 5
print(x**2 + x**3 + x + 1 - x/2)

uang = 30000

if uang >= 25000:
    print("uang cukup")
else:
    print("Uang tidak cukup")

price = 25000
uang = 100000

if price == uang:
    print("Uang pas")
elif price < uang:
    print("Uang lebih")
else:
    print("Uang tidak cukup")

nilai = 78

if nilai > 89 and nilai < 101:
    print("Nilai: A")
elif nilai < 90 and nilai > 79:
    print("Nilai: B")
elif nilai < 80 and nilai > 74:
    print("Nilai: C")
else:
    print("Remedial")

for i in range(10):
    print("saya berjanji tidak mengulanginya lagi")

j = 1
while j <= 10:
    print(j)
   j = j + 1 or j+=1

total = 0
for i in range(1, 1000):
    total += i
    print(total)

for i in range(10):
  print(i)

for i in range(1, 999, 3):
    print(i, end=" ")

for i in range(1, 6):
    for j in range(1, 3):
        print("Ini lorong ke ", i, "Ini kamar ke ", j)

lanjut = True
while lanjut:
    option = input("lanjut atau tidak? (y/n)")
    if option == 'n':
        lanjut = False
        print("Program berhenti")
    elif option == 'y':
        lanjut = True

username = "Universitas"
password = "Pertamina"
kesempatan = 3

while kesempatan > 0:
    def dd(x):
        return (x**2) + (x**3) + (x+2) - (x/2)

    hasil = dd(5)
    print(hasil)

    def penjumlahan(angka1, angka2):
    return angka1+angka2

hasil = penjumlahan(10,2)
print(hasil)  
