x = 5
print(type(x))

y = "hello"
print(type(y))

print("SMK " + "Wikrama")
print("SMK Wikrama " * 3)
(5 * 2) > (5 * 3)

x = 5
(x**2) + (x**3) + (x + 2) - (x / 2)


uang = 10000
price = 25000

if price == uang:
    print("uang pas")
elif uang < 25000:
    print("uang lebih")
else:
    print("uang ga cukup")

nilai = 95

if nilai > 90:
    print("Nilai A!")
elif 70 < nilai > 90:
    print("Nilai B!")
else:
    print("Nilai C!")

for i in range(10):
    print("angkot")

j = 9
while j > 0:
    print(j)
    j -= 1

total = 0
for i in range(1, 1000):
    total = total + i

    print(total)

for i in range(1, 999, 3):
    print(i, end=" ")

for i in range(1, 6):
    for j in range(1, 3):
        print("Lorong ke ", i, "kamar ke ", j)

lanjut = True
while lanjut:
    option = input("Lanjut ga? y/n: ")
    if option == "n":
        lanjut = False
        print("Berhenti")
    elif option == "y":
        print("Lanjut")


def perkalian(angka1, angka2):
    return angka1 * angka2


hasil = perkalian(5, 5)
print(hasil)


def f(angka):
    return (angka**2) + (angka**3) + (angka + 2) - (angka / 2)


cuy = f(7)
print(cuy)
