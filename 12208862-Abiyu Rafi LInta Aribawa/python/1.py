x = 120
y = "hello world"
print(y)

# operator python
print("Universitas" + "Pertamina")

print("Universitas Pertamina " *3)

print(5*2)
print(5*2.5)

(5*2) > (5*2)

x = 5 
(x**2) + (x**3) + (x+2) - (x/2)
# percabangan python
uang = 25000
if uang >= 25000:
    print("uang cukup")
else:
    print("uang tidak cukup")


price = 25000
uang = 10000
if price == uang:
    print("uang pas")
elif price < 25000:
    print("uang lebih")
else:
    print("uang tidak cukup")

nilai = 80 

if nilai >= 90:
    print("A")
elif nilai >= 70 < 90:
    print("B")
else:
    print("C")


price = 25000
kondisi = 'baik'

if price > 25000:
    print("uang pas")
    if kondisi == 'baik':
        print("uang laku")
    else:
        print("uang tidak laku")
else:
    print("uang tidak cukup") 
# perulangan python
for i in range(50):
    print("lapar")

j = 1
while j <= 10:
    print(j)
    j = j + 1

total = 0 
for i in range(1, 999, 3):
    print(i, end=" ")

for i in range(1, 6):
    for j in range(1, 3):
        print("ini lorong ke,", i, "kamar ke", j)


while True:
    option = input("lanjut atau tidak? (y/n): ")
    if option == 'y':
        print("program berjalan")
    elif option == 'n':
        print('Program dihentikan')
        break

# input username password
username = "universitas"
password = "pertamina"
kesempatan = 3

while kesempatan > 0:
    username_user = input("Masukan Username : ")
    password_user = input("Masukan Password: ")

    if username_user == username and password_user == password:
        print("Berhasil Login")
        break
    else:
        kesempatan -1
        print("login gagal dan kesempatan tersisa {}". format((kesempatan)))

def perkalian(angka1, angka2):
    return angka1 + angka2

hasil = perkalian(12,2)
print(hasil)

def f(angka):
    return (angka**2) + (angka**3) + (angka+2) - (angka/2)

hasil = f(3)
print(hasil)