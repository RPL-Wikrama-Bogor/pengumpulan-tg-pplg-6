#
x = 5
(x**2) + (x**3) + (x+2) - (x/2)

#
uang = 30000
if uang > 25000:
  print("uang cukup")
else:
  print("uang tidak cukup")

#
price = 25000
uang = 10000
if price == uang:
  print("uang pas")
elif price < 25000:
  print("uang lebih")
else:
  print("uang tidak cukup")

#
nilai = 90
if nilai > 90:
  print("A")
elif nilai >70 and <90:
  print("B")
else:
  print("C")

#
for i in range(10):
  print("saya berjanji tidak akan mengulanginya lagi")

#
j = 0
while j<10:
  print(j)
  j+=1

total = 0
for i in range(2,1000):
  total = total + i

print(total)

#
for i in range(1,11,2):
  print(i, end="")

#
for i in range(1,999,3):
  print(i, end="")

#
for i in range(1,6):
  for j in range(1,3):
    print("ini lorong ke-", i, "kamar ke-",j)
#
lanjut = True
while(lanjut):
  option = input("Lanjut atau tidak? (y/n)")
  if(option == 'n'):
    lanjut = False
    print("Program Berhenti!")
# 
def perkalian(angka1, angka2):
  return angka1*angka2

hasil = perkalian(10,2)
print(hasil)