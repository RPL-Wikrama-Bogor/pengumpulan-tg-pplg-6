# -*- coding: utf-8 -*-
"""Untitled0.ipynb

Automatically generated by Colaboratory.

Original file is located at
    https://colab.research.google.com/drive/1mnzV5AzXRjYsADx0MoIarw3HOUxgq_yR
"""

x = 120
print(type(x))
y = "Hai"
print(type(y))

print("universitas "+"cicurug")
print("raichan " * 3)

(5*3)>(5*3)

x = 5
(x**2)+(x**3)+(x+2)-(x/2)

uang = 30000
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

nilai = 95
if nilai > 90:
  print("a")
elif nilai > 70 and  90:
  print("b")
else:
  print("c")

for i in range(3):
  print("saya berjanji tidak akan mengulangi lagi")

j = 0
while j < 5:
  print(j)
  j = j + 1

total = 0
for i in range(1,1000):
  total = total + i
print(total)

for i in range(1,999,3):
  print(i, end=" ")

for i in range(1,6):
  for j in range(1,3):
    print("ini ruang ke-",i, "lorong ke-",j)

lanjut = True
while(lanjut):
  option = input("lanjut atau tidak? (y/n): ")
  if(option == 'n'):
    lanjut = False
    print("program berhenti!")

def perkalian(angka1, angka2):
  return angka1+angka2
hasil = perkalian(10,5)
print(hasil)

def f(x):
  return (x**2)+(x**3)+(x+2)-(x/2)
hasil = f(9)
print(hasil)