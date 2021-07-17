for i in range(1,6):
    for j in range(1,i+1):
        print(j,end="")
    print("\n")
	
o/p:
============
1

12

123

1234

12345

==============================================
for i in range(1,6):
    for j in range(1,i+1):
        print(i,end="")
    print("\n")
	
o/p:
=========
1

22

333

4444

55555
==============================================
for i in range(1,6):
    for j in range(1,i+1):
        print("*",end="")
    print("\n")
	
o/p:
=======
*

**

***

****

*****
============================================
for i in range(5,0,-1):
    for j in range(1,i+1):
        print("*",end="")
    print("\n")
	
o/p :
==========
*****

****

***

**

*






Assignment 7:
=======================
1.Display Factors of a number:
===============================================
a = int(input("Enter any number:"))
i = 1
while i <= a:
    if a % i == 0:
        print(i)
    i += 1

2.1.Display Sum Factors of a number:
===============================================
a = int(input("Enter any number:"))
i = 1
sum = 0
while i <= a:
    if a % i == 0:
        print(i)
        sum =sum +i
    i += 1
print(sum)

3.Perfect or Not
===============================================
a = int(input("Enter any number:"))
i = 1
sum = 0
k = a
while i < a:
    if a % i == 0:
        print(i)
        sum =sum +i
    i += 1
if sum == k:
    print("Perfect")
else:
    print("Not Perfect")
4.Perfect Numbers in range:
=================================================
for a in range(1,1000):
    #a = int(input("Enter any number:"))
    i = 1
    sum = 0
    k = a
    while i < a:
        if a % i == 0:
            #print(i)
            sum = sum + i
        i += 1
    if sum == k:
        print(k)
	
5.Perfect Numbers in a Interval:
=================================================
b = int(input("Enter Interval:"))
for a in range(1,b):
    #a = int(input("Enter any number:"))
    i = 1
    sum = 0
    k = a
    while i < a:
        if a % i == 0:
            #print(i)
            sum = sum + i
        i += 1
    if sum == k:
        print(k)

6.Prime or Not
============================================
a = int(input("Enter any number:"))
if a%2!=0:
    print("Prime")
else:
    print("Not Prime")
	
	
a = int(input("Enter any number:"))
if a > 1:
    for i in range(2, a):
        if (a % i) == 0:
            print("Not Prime")
            break
    else:
        print(a)
        print("Prime")

	
7.Prime Numbers in a range:
=============================================
for a in range(1, 1000):
    if a % 2 != 0:
        print(a)
		
		

for num in range(2, 21):
   # all prime numbers are greater than 1
   if num > 1:
       for i in range(2, num):
           if (num % i) == 0:
               break
       else:
           print(num)

8.Prime Numbers in interval
=============================================
b = int(input("Enter any number:"))
for a in range(1, b):
    if a % 2 != 0:
        print(a)


b = int(input("Enter any number:"))
for a in range(2, b + 1):
    if a > 1:
        for i in range(2, a):
            if (a % i) == 0:
                break
        else:
            print(a)


9.Display Digits
==============================================
a= int(input("Enter any number:"))
while a!=0:
    b = a%10
    print(b)
    a = a//10

10.Sum of digits
===============================================
a= int(input("Enter any number:"))
sum = 0
while a!=0:
    b = a%10
    print(b)
    sum = sum + b
    a = a//10
print(sum)

11.Reverse of a Number
==================================================
a = int(input("Enter any number:"))
rev = 0
while a!=0:
    b = a % 10
    rev = rev * 10 + b
    a = a // 10
print(rev)

12.Palindrome or Not
==================================================
a = int(input("Enter any number:"))
rev = 0
k = a
while a!=0:
    b = a % 10
    rev = rev * 10 + b
    a = a // 10
#print(rev)
if rev==k:
    print("Palindrome")
else:
    print("Not palindrome")
	
13.Armstrong or Not 
=================================================
a = int(input("Enter any number:"))
sum = 0
k = a
while a != 0:
    b = a % 10
    c = b ** 3
    sum = sum + c
    a = a // 10
print(sum)
if sum==k:
    print("Armstrong")
else:
    print("Not Armstrong")
	
14.Armstrong Numbers in a range
================================================
for a in range(1, 1000):
    sum = 0
    k = a
    while a != 0:
        b = a % 10
        c = b ** 3
        sum = sum + c
        a = a // 10
    #print(sum)
    if sum == k:
        print(sum)

15.Armstrong Numbers in Interval:
=================================================
b = int(input("Enter any number:"))
for a in range(1, b):
    sum = 0
    k = a
    while a != 0:
        b = a % 10
        c = b ** 3
        sum = sum + c
        a = a // 10
    #print(sum)
    if sum == k:
        print(sum)

16.Factorial of a given nnumber:
=================================================
a = int(input("Enter any number:"))
b = 1
for i in range(1, a + 1):
    b = b * i
    a -= 1
print(b)

17.Strong or Not:
================================================
a = int(input("Enter any number:"))
sum = 0
k = a
while a != 0:
    b = a % 10
    c = 1
    for i in range(1, b + 1):
        c = c * i
    sum = sum + c
    a = a // 10
#print(sum)
if sum == k :
    print("Strong")
else:
    print("Not Strong")

18.Strong Numbers in a range:
==================================================
for a in range(1,1000):
    #a = int(input("Enter any number:"))
    sum = 0
    k = a
    while a != 0:
        b = a % 10
        c = 1
        for i in range(1, b + 1):
            c = c * i
        sum = sum + c
        a = a // 10
    # print(sum)
    if sum == k:
        print(sum)

19.Strong Numbers in Interval:
===================================================
b = int(input("Enter any number:"))
for a in range(1, b):
    # a = int(input("Enter any number:"))
    sum = 0
    k = a
    while a != 0:
        b = a % 10
        c = 1
        for i in range(1, b + 1):
            c = c * i
        sum = sum + c
        a = a // 10
    # print(sum)
    if sum == k:
        print(sum)
20.Fibonacci series in given Number:
===================================================
num = int(input("Enter any number:"))
a = 0
b = 1
i = 1
while num >= 1:
    c = a + b
    print(a)
    a = b
    b = c
    num = num - 1