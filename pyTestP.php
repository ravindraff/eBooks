
Lesson Completed: Strings & Console Output:
====================================================================================================================

# Set the variable brian on line 3!
brian  = "Hello life!";
# Assign your variables below, each on its own line!
# Put your variables above this line
caesar = "Graham"
praline =  "John"
viking = "Teresa"
print caesar
print praline
print viking
# The string below is broken. Fix it using the escape backslash!

'This isn\'t flying, this is falling with style!'
"""
The string "PYTHON" has six characters,
numbered 0 to 5, as shown below:

+---+---+---+---+---+---+
| P | Y | T | H | O | N |
+---+---+---+---+---+---+
  0   1   2   3   4   5

So if you wanted "Y", you could just type
"PYTHON"[1] (always start counting from 0!)
"""
stin = "MONTY"

fifth_letter = stin[4]

print fifth_letter

parrot  = "Norwegian Blue"
print len(parrot)
print str.lower(parrot)
print str.upper(parrot)

parrot = "Norwegian Blue"

print parrot.lower()

parrot = "norwegian blue"

print parrot.upper()

"""Declare and assign your variable on line 4,
then call your method on line 5!"""

pi = 3.14
print str(pi)

ministry = "The Ministry of Silly Walks"

print len(ministry)
print ministry.upper()

"""Tell Python to print "Monty Python"
to the console on line 4!"""

print "Monty Python"


"""Assign the string "Ping!" to
the variable the_machine_goes on
line 5, then print it out on line 6!"""

the_machine_goes = "Ping!"
print the_machine_goes


# Print the concatenation of "Spam and eggs" on line 3!

print "Spam "+"and "+"eggs"

# Turn 3.14 into a string on line 3!

print "The value of pi is around " + str(3.14)


string_1 = "Camelot"
string_2 = "place"

print "Let's not go to %s. 'Tis a silly %s." % (string_1, string_2)


name = "Alex"
quest = "Teaching Python"
color = "Blue"

print "Ah, so your name is %s, your quest is %s, " \
"and your favorite color is %s." % (name, quest, color)


# Write your code below, starting on line 3!

my_string  ="Teaching Python"
print len(my_string)
print my_string.upper()


The datetime Library:
==================================================================================================================

from datetime import datetime

print datetime
=======

from datetime import datetime
now = datetime.now()
print(now)
=========
from datetime import datetime
now = datetime.now()
print(now.year)
print(now.month)
print(now.day)

=========
from datetime import datetime
now = datetime.now()
print '%02d/%02d/%04d' % (now.month, now.day, now.year)
==========

from datetime import datetime
now = datetime.now()

print '%02d:%02d:%02d' % (now.hour, now.minute, now.second)
=========
from datetime import datetime
now = datetime.now()

print '%02d/%02d/%04d' % (now.month, now.day, now.year)
print '%02d:%02d:%02d' % (now.hour, now.minute, now.second)
print '%02d:%02d:%02d' % (now.hour, now.minute, now.second)



print '%02d/%02d/%04d %02d:%02d:%02d' % (now.month, now.day, now.year, now.hour, now.minute, now.second)
===============

Conditionals & Control Flow:
====================================================================================================================

# Assign True or False as appropriate on the lines below!

# Set this to True if 17 < 328 or to False if it is not.
bool_one = True   # We did this one for you!

# Set this to True if 100 == (2 * 50) or to False otherwise.
bool_two = True

# Set this to True if 19 <= 19 or to False if it is not.
bool_three = True

# Set this to True if -22 >= -18 or to False if it is not.
bool_four = False

# Set this to True if 99 != (98 + 1) or to False otherwise.
bool_five = False

if 17<328:
  bool_one
  
if 100==(2*50):
  bool_two

if 19<=19:
  bool_three

if -22>=-18:
  bool_four
  
if 99!=(98+1):
  bool_five
  
================

# Assign True or False as appropriate on the lines below!

# (20 - 10) > 15
bool_one = False    # We did this one for you!

# (10 + 17) == 3**16
# Remember that ** can be read as 'to the power of'. 3**16 is about 43 million.
bool_two = False

# 1**2 <= -1
bool_three = False

# 40 * 4 >= -4
bool_four = True

# 100 != 10**2
bool_five = False

if (20-10) > 15 :
  bool_one
if (10+17)==3**16:
  bool_two

if 1**2 <= -1:
  bool_three

if 40*4 >= -4:
  bool_four
if 100 != 10**2:
  bool_five
===============
# Create comparative statements as appropriate on the lines below!

# Make me true!
bool_one = 3 < 5  # We already did this one for you!

# Make me false!
bool_two = 3==2

# Make me true!
bool_three = 3>2

# Make me false!
bool_four = 3<2

# Make me true!
bool_five = 3!=2

===========
bool_one = 1>2 and 2>3

bool_two = -(-(-(-2))) == -2 and 4 >= 16 ** 0.5

bool_three = 19 % 4 != 300 / 10 / 10 and False

bool_four = -(1 ** 2) < 2 ** 0 and 10 % 10 <= 20 - 10 * 2

bool_five = 1<2 and 2<3

===============
bool_one = 2 ** 3 == 108 % 100 or 'Cleese' == 'King Arthur'

bool_two = 2>1 or 2<1

bool_three = 100 ** 0.5 >= 50 or False

bool_four = 3>1 or 2<4

bool_five = 1 ** 100 == 100 ** 1 or 3 * 2 * 1 != 3 + 2 + 1

=============
bool_one = 3<2

bool_two = not 3 ** 4 < 4 ** 3

bool_three = not 10 % 3 <= 10 % 2

bool_four = not 3 ** 2 + 4 ** 2 != 5 ** 2

bool_five = not not 3<2
=========
bool_one = 3>5 or 3<2 and 3>1

bool_two = 4>6 and 3==5 or 3<7

bool_three = 4>2 and not(3>5 or 7<2)

bool_four = not not 3<5 or 3>5 and not 3>2

bool_five = 3==2 or not (4>2 and 1<6)

===================
# Use boolean expressions as appropriate on the lines below!

# Make me false!
bool_one = (2 <= 2) and "Alpha" == "Bravo"  # We did this one for you!

# Make me true!
bool_two = bool_one or 3>2

# Make me false!
bool_three = bool_two and bool_one

# Make me true!
bool_four = bool_two or bool_one

# Make me true!
bool_five = bool_two and not bool_one
==========
response = 'Y'

answer = "Left"
if answer == "Left":
    print "This is the Verbal Abuse Room, you heap of parrot droppings!"
    
# Will the above print statement print to the console?
# Set response to 'Y' if you think so, and 'N' if you think not.

===========
def using_control_once():
    if 3>2:
        return "Success #1"

def using_control_again():
    if 2<7:
        return "Success #2"

print using_control_once()
print using_control_again()

=============

answer = "'Tis but a scratch!"

def black_knight():
    if answer == "'Tis but a scratch!":
        return True
    else:             
        return False       # Make sure this returns False


def french_soldier():
    if answer == "Go away, or I shall taunt you a second time!":
        return True
    else:             
        return False       # Make sure this returns False
===========
def greater_less_equal_5(answer):
    if answer>5:
        return 1
    elif answer<5:          
        return -1
    else:
        return 0
        
print greater_less_equal_5(4)
print greater_less_equal_5(5)
print greater_less_equal_5(6)

===========
# Complete the if and elif statements!
def grade_converter(grade):
    if grade >= 90:
        return "A"
    elif grade >= 80:
        return "B"
    elif grade >= 70:
        return "C"
    elif grade >= 65:
        return "D"
    else:
        return "F"
      
# This should print an "A"      
print grade_converter(92)

# This should print a "C"
print grade_converter(70)

# This should print an "F"
print grade_converter(61)

PygLatin:
====================================================================================================
print 'Welcome to the Pig Latin Translator!'

# Start coding here!
original = raw_input("Enter a Word: ")

===============
print 'Welcome to the Pig Latin Translator!'

# Start coding here!
original = raw_input("Enter a Word: ")
if len(original) > 0 :
  print original
else:
  print "empty"
  
===================
print 'Welcome to the Pig Latin Translator!'

# Start coding here!
original = raw_input("Enter a Word: ")
if len(original) > 0 :
  print original
else:
  print "empty"
  
================
print 'Welcome to the Pig Latin Translator!'

# Start coding here!
original = raw_input("Enter a Word: ")
if len(original) > 0 :
  print original
  if original.isalpha():
    print "character"
  else:
    print "number"
else:
  print "empty"
==============
pyg = 'ay'

original = raw_input('Enter a word:')

word = original.lower()
first = word[0]

if len(original) > 0 and original.isalpha():
    print original
    print first
else:
    print 'empty'
	
====================
pyg = 'ay'

original = raw_input('Enter a word:')

word = original.lower()
first = word[0]
new_word = word + first + pyg

if len(original) > 0 and original.isalpha():
    print original
    print first
    print new_word
else:
    print 'empty'
	
================
pyg = 'ay'

original = raw_input('Enter a word:')

if len(original) > 0 and original.isalpha():
  word = original.lower()
  first = word[0]
  new_word = word + first + pyg
  new_word = new_word[1:len(new_word)]
else:
    print 'empty'
	
	
Functions:
==================================================================================================
def tax(bill):
  """Adds 8% tax to a restaurant bill."""
  bill *= 1.08
  print "With tax: %f" % bill
  return bill

def tip(bill):
  """Adds 15% tip to a restaurant bill."""
  bill *= 1.15
  print "With tip: %f" % bill
  return bill
  
meal_cost = 100
meal_with_tax = tax(meal_cost)
meal_with_tip = tip(meal_with_tax)
======================
# Define your spam function starting on line 5. You
# can leave the code on line 10 alone for now--we'll
# explain it soon!

def spam():
  """Prints 'Eggs!'"""
  print "Eggs!"

# Define the spam function above this line.
spam()
========================
def square(n):
  """Returns the square of a number."""
  squared = n ** 2
  print "%d squared is %d." % (n, squared)
  return squared
  
# Call the square function on line 10! Make sure to
# include the number 10 between the parentheses.
square(10)

=======================
def power(base, exponent):  # Add your parameters here!
  result = base ** exponent
  print "%d to the power of %d is %d." % (base, exponent, result)

power(37, 4)  # Add your arguments here!

============
def one_good_turn(n):
  return n + 1
    
def deserves_another(n):
  return one_good_turn(n) + 2
  
==========
def cube(number):
  return number * number * number

def by_three(number):
  if number % 3 == 0:
    return cube(number)
  else:
    return False
==========
# Ask Python to print sqrt(25) on line 3.
import math
print math.sqrt(25)

==================
# Import *just* the sqrt function from math on line 3!

from math import sqrt

===================
# Import *everything* from the math module on line 3!

from math import *

====================
import math # Imports the math module
everything = dir(math) # Sets everything to a list of things from math
print everything # Prints 'em all!

====================
def biggest_number(*args):
  print max(args)
  return max(args)
    
def smallest_number(*args):
  print min(args)
  return min(args)

def distance_from_zero(arg):
  print abs(arg)
  return abs(arg)

biggest_number(-10, -5, 5, 10)
smallest_number(-10, -5, 5, 10)
distance_from_zero(-10)

====================

# Set maximum to the max value of any set of numbers on line 3!

maximum = max(1,2,3)

print maximum

===============

# Set minimum to the min value of any set of numbers on line 3!

minimum = min(3,4,1)

print minimum

=================

absolute = abs(-42)

print absolute

=================

# Print out the types of an integer, a float,
# and a string on separate lines below.

print type(4)
print type(4.0)
print type('4')

===================

def shut_down(s):
  if s == "yes":
    return "Shutting down"
  elif s == "no":
    return "Shutdown aborted"
  else:
    return "Sorry"
	
===========
from math import sqrt
print sqrt(13689)
===========
def distance_from_zero(num):
  if type(num) == int or type(num) == float:
    return abs(num)
  else:
    return "Nope"
	
=============
Taking a Vacation :
==========================================================================================================================================
def answer():
  return 42
  
=====================

def hotel_cost(nights):
  return 140 * nights

================================
def plane_ride_cost(city):
  if city=="Charlotte":
    return 183
  elif city=="Tampa":
    return 220
  elif city=="Pittsburgh":
    return 222
  elif city=="Los Angeles":
    return 475


===================================
def hotel_cost(nights):
  return 140 * nights

def plane_ride_cost(city):
  if city == "Charlotte":
    return 183
  elif city == "Tampa":
    return 220
  elif city == "Pittsburgh":
    return 222
  elif city == "Los Angeles":
    return 475

def rental_car_cost(days):
  cost = days * 40
  if days >= 7:
    cost -= 50
  elif days >= 3:
    cost -= 20
  return cost
  
=====================================
def hotel_cost(nights):
  return 140 * nights

def plane_ride_cost(city):
  if city == "Charlotte":
    return 183
  elif city == "Tampa":
    return 220
  elif city == "Pittsburgh":
    return 222
  elif city == "Los Angeles":
    return 475

def rental_car_cost(days):
  cost = days * 40
  if days >= 7:
    cost -= 50
  elif days >= 3:
    cost -= 20
  return cost

def trip_cost(city,days):
  return rental_car_cost(days)+hotel_cost(days - 1)+plane_ride_cost(city)
==================================
def hotel_cost(nights):
  return 140 * nights

def plane_ride_cost(city):
  if city == "Charlotte":
    return 183
  elif city == "Tampa":
    return 220
  elif city == "Pittsburgh":
    return 222
  elif city == "Los Angeles":
    return 475

def rental_car_cost(days):
  cost = days * 40
  if days >= 7:
    cost -= 50
  elif days >= 3:
    cost -= 20
  return cost

def trip_cost(city,days,spending_money):
  return rental_car_cost(days)+hotel_cost(days - 1)+plane_ride_cost(city)+spending_money

=================================

def hotel_cost(nights):
  return 140 * nights

def plane_ride_cost(city):
  if city == "Charlotte":
    return 183
  elif city == "Tampa":
    return 220
  elif city == "Pittsburgh":
    return 222
  elif city == "Los Angeles":
    return 475

def rental_car_cost(days):
  cost = days * 40
  if days >= 7:
    cost -= 50
  elif days >= 3:
    cost -= 20
  return cost

def trip_cost(city, days, spending_money):
  return rental_car_cost(days) + hotel_cost(days) + plane_ride_cost(city) + spending_money

print trip_cost("Los Angeles", 5, 600)

==============
Python Lists and Dictionaries :
========================================================================================================================================

zoo_animals = ["pangolin", "cassowary", "sloth", "zebra"];
# One animal is missing!

if len(zoo_animals) > 3:
  print "The first animal at the zoo is the " + zoo_animals[0]
  print "The second animal at the zoo is the " + zoo_animals[1]
  print "The third animal at the zoo is the " + zoo_animals[2]
  print "The fourth animal at the zoo is the " + zoo_animals[3]
===============================
numbers = [5, 6, 7, 8]

print "Adding the numbers at indices 0 and 2..."
print numbers[0] + numbers[2]
print "Adding the numbers at indices 1 and 3..."
# Your code here!
print numbers[1] + numbers[3]
================================
zoo_animals = ["pangolin", "cassowary", "sloth", "tiger"]
# Last night our zoo's sloth brutally attacked 
# the poor tiger and ate it whole.

# The ferocious sloth has been replaced by a friendly hyena.
zoo_animals[2] = "hyena"

# What shall fill the void left by our dear departed tiger?
# Your code here!
zoo_animals[3] ="Zebra"

====================================
suitcase = [] 
suitcase.append("sunglasses")

# Your code here!
suitcase.append("shirt")
suitcase.append("pants")
suitcase.append("shoes")

list_length = len(suitcase) # Set this to the length of suitcase

print "There are %d items in the suitcase." % (list_length)
print suitcase
==========================
suitcase = ["sunglasses", "hat", "passport", "laptop", "suit", "shoes"]

# The first and second items (index zero and one)
first = suitcase[0:2]

# Third and fourth items (index two and three)
middle = suitcase[2:4]

# The last two items (index four and five)
last = suitcase[4:6]
========================
animals = "catdogfrog"

# The first three characters of animals
cat = animals[:3]

# The fourth through sixth characters
dog = animals[3:6]

# From the seventh character to the end
frog = animals[6:]
==================
animals = ["aardvark", "badger", "duck", "emu", "fennec fox"]
duck_index = animals.index("duck") # Use index() to find "duck"

# Your code here!
animals.insert(duck_index,'cobra')

print animals # Observe what prints after the insert operation
===========================

my_list = [1,9,3,8,5,7]

for number in my_list:
  # Your code here
  print 2 * number
  
=============================
  
  start_list = [5, 3, 1, 2, 4]
square_list = []

# Your code here!

for number in start_list:
  num = number ** 2
  square_list.append(num)
square_list.sort()

print square_list

==========================
# Assigning a dictionary with three key-value pairs to residents:
residents = {'Puffin' : 104, 'Sloth' : 105, 'Burmese Python' : 106}

print residents['Puffin'] # Prints Puffin's room number

# Your code here!

print residents['Sloth']
print residents['Burmese Python']

===========
menu = {} # Empty dictionary
menu['Chicken Alfredo'] = 14.50 # Adding new key-value pair
print menu['Chicken Alfredo']

# Your code here: Add some dish-price pairs to menu!

menu['Chicken'] = 2.50
menu['ChickenPulao'] = 222.50
menu['ChickenBiryani'] = 259.50


print "There are " + str(len(menu)) + " items on the menu."
print menu
======================
# key - animal_name : value - location 
zoo_animals = { 'Unicorn' : 'Cotton Candy House',
'Sloth' : 'Rainforest Exhibit',
'Bengal Tiger' : 'Jungle House',
'Atlantic Puffin' : 'Arctic Exhibit',
'Rockhopper Penguin' : 'Arctic Exhibit'}
# A dictionary (or list) declaration may break across multiple lines

# Removing the 'Unicorn' entry. (Unicorns are incredibly expensive.)
del zoo_animals['Unicorn']

# Your code here!

del zoo_animals['Sloth']
del zoo_animals['Bengal Tiger']
 
zoo_animals['Rockhopper Penguin'] ='hopper Penguin'

print zoo_animals
====================
backpack = ['xylophone', 'dagger', 'tent', 'bread loaf']
backpack.remove('dagger')
===============
inventory = {
  'gold' : 500,
  'pouch' : ['flint', 'twine', 'gemstone'], # Assigned a new list to 'pouch' key
  'backpack' : ['xylophone','dagger', 'bedroll','bread loaf']
}

# Adding a key 'burlap bag' and assigning a list to it
inventory['burlap bag'] = ['apple', 'small ruby', 'three-toed sloth']

# Sorting the list found under the key 'pouch'
inventory['pouch'].sort() 


# Your code here
inventory['pocket'] = ['seashell','strange berry','lint']
inventory['backpack'].sort()
inventory['backpack'].remove('dagger')
inventory['gold'] +=50

=============
names = ["Adam","Alex","Mariah","Martine","Columbus"]
for name in names:
  print name
  
 ======================
 webster = {
  "Aardvark" : "A star of a popular children's cartoon show.",
  "Baa" : "The sound a goat makes.",
  "Carpet": "Goes on the floor.",
  "Dab": "A small amount."
}

# Add your code below!
for w in webster:
  print webster[w]
  
==================
a = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13]

for i in range(len(a)):
  if i%2==0:
    print i
	
==============
# Write your function below!
def fizz_count(x):
  count = 0
  
  for item in x:
    if item == "fizz":
      count = count + 1
  return count
  
=============
for letter in "Codecademy":
  print letter
    
# Empty lines to make the output pretty
print
print

word = "Programming is fun!"

for letter in word:
  # Only print out the letter i
  if letter == "i":
    print letter
	
=============
prices = {
  "banana" : 4,
  "apple" : 2,
  "orange" : 1.5,
  "pear" :3
}

=============
prices={"banana":4,"apple":2,"orange":1.5,"pear":3}
stock={"banana":6,"apple":0,"orange":32,"pear":15}
for key in prices:
  print key
  print "Price : %s" % prices[key]
  print "Stock : %s" % stock[key]

================
prices = {
  "banana" : 4,
  "apple"  : 2,
  "orange" : 1.5,
  "pear"   : 3,
}
stock = {
  "banana" : 6,
  "apple"  : 0,
  "orange" : 32,
  "pear"   : 15,
}
total = 0
for key in prices:
  print key
  ttotal = prices[key] * stock[key]
  print "price: %s" % prices[key]
  print "stock: %s" % stock[key]
  print "total: %s" % ttotal
  total = total +ttotal

print total
==========
groceries = ["banana","orange","apple"]
===========
shopping_list = ["banana", "orange", "apple"]

stock = {
  "banana": 6,
  "apple": 0,
  "orange": 32,
  "pear": 15
}
    
prices = {
  "banana": 4,
  "apple": 2,
  "orange": 1.5,
  "pear": 3
}

# Write your code below!
def compute_bill(food):
  total = 0
  for item in food:
    total = total + prices[item]
  return total

====================
shopping_list = ["banana", "orange", "apple"]

stock = {
  "banana": 6,
  "apple": 0,
  "orange": 32,
  "pear": 15
}
    
prices = {
  "banana": 4,
  "apple": 2,
  "orange": 1.5,
  "pear": 3
}

# Write your code below!
def compute_bill(food):
  total = 0
  for item in food:
    if stock[item] > 0:
      total += prices[item]
      stock[item] -= 1
  return total
  
 ===============
 lloyd = {
  "name" : "Lloyd",
  "homework" : [],
  "quizzes" : [],
  "tests" : []
}

alice = {
  "name" : "Alice",
  "homework" : [],
  "quizzes" : [],
  "tests" : []
}

tyler = {
  "name" : "Tyler",
  "homework" : [],
  "quizzes" : [],
  "tests" : []
}
===================
lloyd = {
  "name": "Lloyd",
  "homework": [90.0, 97.0, 75.0 ,92.0],
  "quizzes": [88.0, 40.0, 94.0],
  "tests": [75.0, 90.0]
}
alice = {
  "name": "Alice",
  "homework": [100.0, 92.0, 98.0, 100.0],
  "quizzes": [82.0, 83.0, 91.0],
  "tests": [89.0, 97.0]
}
tyler = {
  "name": "Tyler",
  "homework": [0.0, 87.0, 75.0, 22.0],
  "quizzes": [0.0, 75.0, 78.0],
  "tests": [100.0, 100.0]
}
===========
lloyd = {
  "name": "Lloyd",
  "homework": [],
  "quizzes": [],
  "tests": []
}
alice = {
  "name": "Alice",
  "homework": [100.0, 92.0, 98.0, 100.0],
  "quizzes": [82.0, 83.0, 91.0],
  "tests": [89.0, 97.0]
}
tyler = {
  "name": "Tyler",
  "homework": [0.0, 87.0, 75.0, 22.0],
  "quizzes": [0.0, 75.0, 78.0],
  "tests": [100.0, 100.0]
}

students = [lloyd, alice, tyler]
=======================

lloyd = {
  "name": "Lloyd",
  "homework": [],
  "quizzes": [],
  "tests": []
}
alice = {
  "name": "Alice",
  "homework": [100.0, 92.0, 98.0, 100.0],
  "quizzes": [82.0, 83.0, 91.0],
  "tests": [89.0, 97.0]
}
tyler = {
  "name": "Tyler",
  "homework": [0.0, 87.0, 75.0, 22.0],
  "quizzes": [0.0, 75.0, 78.0],
  "tests": [100.0, 100.0]
}

students = [lloyd, alice, tyler]
for val in students:
  print val['name']
  print val['homework']
  print val['quizzes']
  print val['tests']
  
 ===================
 lloyd = {
  "name": "Lloyd",
  "homework": [90.0, 97.0, 75.0, 92.0],
  "quizzes": [88.0, 40.0, 94.0],
  "tests": [75.0, 90.0]
}
alice = {
  "name": "Alice",
  "homework": [100.0, 92.0, 98.0, 100.0],
  "quizzes": [82.0, 83.0, 91.0],
  "tests": [89.0, 97.0]
}
tyler = {
  "name": "Tyler",
  "homework": [0.0, 87.0, 75.0, 22.0],
  "quizzes": [0.0, 75.0, 78.0],
  "tests": [100.0, 100.0]
}

# Add your function below!
def average(numbers):
  total = sum(numbers)
  total = float(total)
  return total / len(numbers)
  
===============
lloyd = {
  "name": "Lloyd",
  "homework": [90.0, 97.0, 75.0, 92.0],
  "quizzes": [88.0, 40.0, 94.0],
  "tests": [75.0, 90.0]
}
alice = {
  "name": "Alice",
  "homework": [100.0, 92.0, 98.0, 100.0],
  "quizzes": [82.0, 83.0, 91.0],
  "tests": [89.0, 97.0]
}
tyler = {
  "name": "Tyler",
  "homework": [0.0, 87.0, 75.0, 22.0],
  "quizzes": [0.0, 75.0, 78.0],
  "tests": [100.0, 100.0]
}

# Add your function below!
def average(numbers):
  total = sum(numbers)
  total = float(total)
  return total / len(numbers)

def get_average(student):
  homework = average(student["homework"])
  quizzes = average(student["quizzes"])
  tests = average(student["tests"])
  
  total = homework *.1 + quizzes * .3 + tests * .6
  return total
================
lloyd = {
  "name": "Lloyd",
  "homework": [90.0, 97.0, 75.0, 92.0],
  "quizzes": [88.0, 40.0, 94.0],
  "tests": [75.0, 90.0]
}
alice = {
  "name": "Alice",
  "homework": [100.0, 92.0, 98.0, 100.0],
  "quizzes": [82.0, 83.0, 91.0],
  "tests": [89.0, 97.0]
}
tyler = {
  "name": "Tyler",
  "homework": [0.0, 87.0, 75.0, 22.0],
  "quizzes": [0.0, 75.0, 78.0],
  "tests": [100.0, 100.0]
}

# Add your function below!
def average(numbers):
  total = sum(numbers)
  total = float(total)
  return total/len(numbers)

def get_average(student):
  homework = average(student["homework"])
  quizzes = average(student["quizzes"])
  tests = average(student["tests"])
  return 0.1 * homework + 0.3 * quizzes + 0.6 * tests

def get_letter_grade(score):
  if score >= 90:
    return "A"
  elif score >=80:
    return "B"
  elif score >=70:
    return "C"
  elif score >=60:
    return "D"
  else:
    return "F"
  
print get_letter_grade(get_average(lloyd))

================
lloyd = {
  "name": "Lloyd",
  "homework": [90.0, 97.0, 75.0, 92.0],
  "quizzes": [88.0, 40.0, 94.0],
  "tests": [75.0, 90.0]
}
alice = {
  "name": "Alice",
  "homework": [100.0, 92.0, 98.0, 100.0],
  "quizzes": [82.0, 83.0, 91.0],
  "tests": [89.0, 97.0]
}
tyler = {
  "name": "Tyler",
  "homework": [0.0, 87.0, 75.0, 22.0],
  "quizzes": [0.0, 75.0, 78.0],
  "tests": [100.0, 100.0]
}

# Add your function below!
def average(numbers):
  total = sum(numbers)
  total = float(total)
  return total/len(numbers)

def get_average(student):
  homework = average(student["homework"])
  quizzes = average(student["quizzes"])
  tests = average(student["tests"])
  return 0.1 * homework + 0.3 * quizzes + 0.6 * tests

def get_class_average(class_list):
  results = []
  for student in class_list:
    student_avg = get_average(student)
    results.append(student_avg)
  return average(results)

=================

lloyd = {
  "name": "Lloyd",
  "homework": [90.0, 97.0, 75.0, 92.0],
  "quizzes": [88.0, 40.0, 94.0],
  "tests": [75.0, 90.0]
}
alice = {
  "name": "Alice",
  "homework": [100.0, 92.0, 98.0, 100.0],
  "quizzes": [82.0, 83.0, 91.0],
  "tests": [89.0, 97.0]
}
tyler = {
  "name": "Tyler",
  "homework": [0.0, 87.0, 75.0, 22.0],
  "quizzes": [0.0, 75.0, 78.0],
  "tests": [100.0, 100.0]
}

# Add your function below!
def average(numbers):
  total = sum(numbers)
  total = float(total)
  return total/len(numbers)

def get_average(student):
  homework = average(student["homework"])
  quizzes = average(student["quizzes"])
  tests = average(student["tests"])
  return 0.1 * homework + 0.3 * quizzes + 0.6 * tests

def get_letter_grade(score):
  if score >= 90:
    return "A"
  elif score >=80:
    return "B"
  elif score >=70:
    return "C"
  elif score >=60:
    return "D"
  else:
    return "F"

def get_class_average(class_list):
  results = []
  for student in class_list:
    student_avg = get_average(student)
    results.append(student_avg)
  return average(results)

students = [lloyd, alice, tyler]

avg = get_class_average(students)
print(avg)
print(get_letter_grade(avg))

==================

Lists and Functions:
=====================================================================================================

n = [1, 3, 5]

# Add your code below
print n[1]
===========

n = [1, 3, 5]
# Do your multiplication here
n2 = n[1] * 5
n[1] = n2
print n
===========
n = [1, 3, 5]
# Append the number 4 here
n.append(4)
print n
=========
n = [1, 3, 5]
# Remove the first item in the list here
n.pop(0)
print n
============
number = 5

def my_function(x):
    return x * 3

print my_function(number)
=========
m = 5
n = 13
# Add add_function here!
def add_function(x,y):
  return x + y


print add_function(m, n)
===========
n = "Hello"
# Your function here!
def string_function(s):
  return s+"world"


print string_function(n)
===========
def list_function(x):
    return x

n = [3, 5, 7]
print list_function(n)
==========
def list_function(x):
    return x[1]

n = [3, 5, 7]
print list_function(n)
===========
def list_function(x):
  x[1] = x[1] + 3
  return x

n = [3, 5, 7]
print list_function(n)
==========
n = [3, 5, 7]
# Add your function here

def list_extender(lst):
  lst.append(9)
  return lst

print list_extender(n)
==========

n = [3, 5, 7]



def print_list(x):
  for i in range(0, len(x)):
    print x[i]

print print_list(n)

============

n = [3, 5, 7]

def double_list(x):
  for i in range(0, len(x)):
    x[i] = x[i] * 2
  return x
# Don't forget to return your new list!

print double_list(n)
==============
def my_function(x):
  for i in range(0, len(x)):
    x[i] = x[i]
  return x

print my_function(range(3)) # Add your range between the parentheses!
==========
n = [3, 5, 7]

def total(numbers):
  result = 0
  for i in range(0,len(numbers)):
    result += numbers[i]
  return result

#print total(n)
==============
n = ["Michael", "Lieberman"]
# Add your function here

def join_strings(words):
  result = ""
  for word in words:
    result += word
  return result

print join_strings(n)
=======
m = [1, 2, 3]
n = [4, 5, 6]

# Add your code here!

def join_lists(a,b):
  return a + b



print join_lists(m, n)
# You want this to print [1, 2, 3, 4, 5, 6]

==========
n = [[1, 2, 3], [4, 5, 6, 7, 8, 9]]
# Add your function here
def flatten(lists):
  results = []
  for lst in lists:
    for i in lst:
      results.append(i)
  return results
print flatten(n)


=================
Battleship! :
===================================================================
board = []
====
board = []
for i in range(5):
  board.append(['O'] * 5)
  
=====
board = []
for i in range(5):
  board.append(['O'] * 5)

print board
=========
board = []

for i in range(5):
  board.append(["O"] * 5)

def print_board(board_in):
  for row in board:
    print row
    
print_board(board)
==========
board = []

for i in range(5):
  board.append(["O"] * 5)

def print_board(board_in):
  for row in board:
    print " ".join(row)
    #print row
    
print_board(board)
=======
from random import randint 

board = []

for x in range(0, 5):
  board.append(["O"] * 5)

def print_board(board_in):
  for row in board_in:
    print " ".join(row)

# Add your code below!

def random_row(board_in):
  return randint(0, len(board_in) - 1)
    
def random_col(board_in):
  return randint(0, len(board_in) - 1)

random_row(board)
random_col(board)

=======
from random import randint

board = []

for x in range(0, 5):
  board.append(["O"] * 5)

def print_board(board):
  for row in board:
    print " ".join(row)

def random_row(board):
  return randint(0, len(board) - 1)

def random_col(board):
  return randint(0, len(board[0]) - 1)

ship_row = random_row(board)
ship_col = random_col(board)

# Add your code below!
guess_row = int(raw_input("Guess Row: "))
guess_col = int(raw_input("Guess Col: ")) 
===========
from random import randint

board = []

for x in range(0, 5):
  board.append(["O"] * 5)

def print_board(board):
  for row in board:
    print " ".join(row)

def random_row(board):
  return randint(0, len(board) - 1)

def random_col(board):
  return randint(0, len(board[0]) - 1)

ship_row = random_row(board)
ship_col = random_col(board)
# Add your code below!


guess_row = int(raw_input("Guess Row: "))
guess_col = int(raw_input("Guess Col: "))

print ship_row
print ship_col
========
from random import randint

board = []

for x in range(0, 5):
  board.append(["O"] * 5)

def print_board(board):
  for row in board:
    print " ".join(row)

print_board(board)

def random_row(board):
  return randint(0, len(board) - 1)

def random_col(board):
  return randint(0, len(board[0]) - 1)

ship_row = random_row(board)
ship_col = random_col(board)


guess_row = int(raw_input("Guess Row: "))
guess_col = int(raw_input("Guess Col: "))

print ship_row
print ship_col

# Write your code below!

if guess_row==ship_row and guess_col==ship_col:
  print "Congratulations! You sank my battleship!"
================
from random import randint

board = []

for x in range(0, 5):
  board.append(["O"] * 5)

def print_board(board):
  for row in board:
    print " ".join(row)

print_board(board)

def random_row(board):
  return randint(0, len(board) - 1)

def random_col(board):
  return randint(0, len(board[0]) - 1)

ship_row = random_row(board)
ship_col = random_col(board)


guess_row = int(raw_input("Guess Row: "))
guess_col = int(raw_input("Guess Col: "))

print ship_row
print ship_col

# Write your code below!

if guess_row==ship_row and guess_col==ship_col:
  print "Congratulations! You sank my battleship!"
================
from random import randint

board = []

for x in range(0, 5):
  board.append(["O"] * 5)

def print_board(board):
  for row in board:
    print " ".join(row)

print_board(board)

def random_row(board):
  return randint(0, len(board) - 1)

def random_col(board):
  return randint(0, len(board[0]) - 1)

ship_row = random_row(board)
ship_col = random_col(board)
print ship_row
print ship_col
guess_row = int(raw_input("Guess Row: "))
guess_col = int(raw_input("Guess Col: "))

# Write your code below!
if guess_row == ship_row and guess_col == ship_col:
  print "Congratulations! You sank my battleship!"  
else:
  print "You missed my battleship!"
  board[guess_row][guess_col] = "X"
  print_board(board)
=============
from random import randint

board = []

for x in range(0, 5):
  board.append(["O"] * 5)

def print_board(board):
  for row in board:
    print " ".join(row)

print_board(board)

def random_row(board):
  return randint(0, len(board) - 1)

def random_col(board):
  return randint(0, len(board[0]) - 1)

ship_row = random_row(board)
ship_col = random_col(board)
print ship_row
print ship_col
guess_row = int(raw_input("Guess Row: "))
guess_col = int(raw_input("Guess Col: "))

# Write your code below!
if guess_row == ship_row and guess_col == ship_col:
  print "Congratulations! You sank my battleship!"   
else:
  if guess_row not in range(5) or \
    guess_col not in range(5):
    print "Oops, that's not even in the ocean."
  else:
    print "You missed my battleship!"
    board[guess_row][guess_col] = "X"
  print_board(board)

==============
from random import randint

board = []

for x in range(0, 5):
  board.append(["O"] * 5)

def print_board(board):
  for row in board:
    print " ".join(row)

print_board(board)

def random_row(board):
  return randint(0, len(board) - 1)

def random_col(board):
  return randint(0, len(board[0]) - 1)

ship_row = random_row(board)
ship_col = random_col(board)
print ship_row
print ship_col
guess_row = int(raw_input("Guess Row: "))
guess_col = int(raw_input("Guess Col: "))

# Write your code below!
if guess_row == ship_row and guess_col == ship_col:
  print "Congratulations! You sank my battleship!"   
else:
  if guess_row not in range(5) or \
    guess_col not in range(5):
    print "Oops, that's not even in the ocean."
  elif (board[guess_row][guess_col] == 'X'):
    print "You guessed that one already."
  else:
    print "You missed my battleship!"
    board[guess_row][guess_col] = "X"
  print_board(board)

=================
from random import randint

board = []

for x in range(0, 5):
  board.append(["O"] * 5)

def print_board(board):
  for row in board:
    print " ".join(row)

print_board(board)

def random_row(board):
  return randint(0, len(board) - 1)

def random_col(board):
  return randint(0, len(board[0]) - 1)

ship_row = random_row(board)
ship_col = random_col(board)
print ship_row
print ship_col

# Everything from here on should be in your for loop
# don't forget to properly indent!
for turn in range(4):
  print "Turn", turn + 1
  guess_row = int(raw_input("Guess Row: "))
  guess_col = int(raw_input("Guess Col: "))

  if guess_row == ship_row and guess_col == ship_col:
    print "Congratulations! You sank my battleship!"   
  else:
    if guess_row not in range(5) or \
      guess_col not in range(5):
      print "Oops, that's not even in the ocean."
    elif board[guess_row][guess_col] == "X":
      print( "You guessed that one already." )
    else:
      print "You missed my battleship!"
      board[guess_row][guess_col] = "X"
    print_board(board)
============

from random import randint

board = []

for x in range(0, 5):
  board.append(["O"] * 5)

def print_board(board):
  for row in board:
    print " ".join(row)

print_board(board)

def random_row(board):
  return randint(0, len(board) - 1)

def random_col(board):
  return randint(0, len(board[0]) - 1)

ship_row = random_row(board)
ship_col = random_col(board)
print ship_row
print ship_col

# Everything from here on should be in your for loop
# don't forget to properly indent!
for turn in range(4):
  print "Turn", turn + 1
  guess_row = int(raw_input("Guess Row: "))
  guess_col = int(raw_input("Guess Col: "))

  if guess_row == ship_row and guess_col == ship_col:
    print "Congratulations! You sank my battleship!"   
  else:
    if guess_row not in range(5) or \
      guess_col not in range(5):
      print "Oops, that's not even in the ocean."
    elif board[guess_row][guess_col] == "X":
      print( "You guessed that one already." )
    else:
      print "You missed my battleship!"
      board[guess_row][guess_col] = "X"
    if (turn == 3):
      print "Game Over"
    print_board(board)
	
===============
from random import randint

board = []

for x in range(0, 5):
  board.append(["O"] * 5)

def print_board(board):
  for row in board:
    print " ".join(row)

print_board(board)

def random_row(board):
  return randint(0, len(board) - 1)

def random_col(board):
  return randint(0, len(board[0]) - 1)

ship_row = random_row(board)
ship_col = random_col(board)
print ship_row
print ship_col

# Everything from here on should be in your for loop
# don't forget to properly indent!
for turn in range(4):
  print "Turn", turn + 1
  guess_row = int(raw_input("Guess Row: "))
  guess_col = int(raw_input("Guess Col: "))

  if guess_row == ship_row and guess_col == ship_col:
    print "Congratulations! You sank my battleship!"   
  else:
    if guess_row not in range(5) or \
      guess_col not in range(5):
      print "Oops, that's not even in the ocean."
    elif board[guess_row][guess_col] == "X":
      print( "You guessed that one already." )
    else:
      print "You missed my battleship!"
      board[guess_row][guess_col] = "X"
    if (turn == 3):
      print "Game Over"
    print_board(board)
	
==============
from random import randint

board = []

for x in range(0, 5):
  board.append(["O"] * 5)

def print_board(board):
  for row in board:
    print " ".join(row)

print_board(board)

def random_row(board):
  return randint(0, len(board) - 1)

def random_col(board):
  return randint(0, len(board[0]) - 1)

ship_row = random_row(board)
ship_col = random_col(board)
print ship_row
print ship_col

# Everything from here on should be in your for loop
# don't forget to properly indent!
for turn in range(4):
  print "Turn", turn + 1
  guess_row = int(raw_input("Guess Row: "))
  guess_col = int(raw_input("Guess Col: "))

  if guess_row == ship_row and guess_col == ship_col:
    print "Congratulations! You sank my battleship!" 
    break  
  else:
    if guess_row not in range(5) or \
      guess_col not in range(5):
      print "Oops, that's not even in the ocean."
    elif board[guess_row][guess_col] == "X":
      print( "You guessed that one already." )
    else:
      print "You missed my battleship!"
      board[guess_row][guess_col] = "X"
    if (turn == 3):
      print "Game Over"
    print_board(board)
	
============

Exam Statistics:
========================================
grades = [100, 100, 90, 40, 80, 100, 85, 70, 90, 65, 90, 85, 50.5]

def print_grades(grades_input):
  for i in range(0,len(grades_input)):
    print grades_input[i]

print print_grades(grades)
==========
grades = [100, 100, 90, 40, 80, 100, 85, 70, 90, 65, 90, 85, 50.5]

def grades_sum(grades):
  total = 0 
  for score in grades:
    total +=score
  return total

print grades_sum(grades) 
============
grades = [100, 100, 90, 40, 80, 100, 85, 70, 90, 65, 90, 85, 50.5]

def grades_sum(scores):
  total = 0
  for score in scores: 
    total += score
  return total

print grades_sum(grades)

def grades_average(grades_input):
  sum_of_grades = grades_sum(grades_input)
  average = sum_of_grades / float(len(grades_input))
  return average

print grades_average(grades)
===========
grades = [100, 100, 90, 40, 80, 100, 85, 70, 90, 65, 90, 85, 50.5]

def print_grades(grades_input):
  for grade in grades_input:
    print grade

def grades_sum(scores):
  total = 0
  for score in scores: 
    total += score
  return total
    
def grades_average(grades_input):
  sum_of_grades = grades_sum(grades_input)
  average = sum_of_grades / float(len(grades_input))
  return average

def grades_variance(scores):
    average = grades_average(scores)
    variance = 0
    for score in scores:
        variance += (average - score) ** 2
    return variance / len(scores)

print grades_variance(grades)
===========
grades = [100, 100, 90, 40, 80, 100, 85, 70, 90, 65, 90, 85, 50.5]

def print_grades(grades_input):
  for grade in grades_input:
    print grade

def grades_sum(scores):
  total = 0
  for score in scores: 
    total += score
  return total
    
def grades_average(grades_input):
  sum_of_grades = grades_sum(grades_input)
  average = sum_of_grades / float(len(grades_input))
  return average

def grades_variance(grades):
    variance = 0
    for number in grades:
        variance += (grades_average(grades) - number) ** 2
    return variance / len(grades)

def grades_std_deviation(variance):
  return variance ** 0.5

variance = grades_variance(grades)

print grades_std_deviation(variance)

=========
grades = [100, 100, 90, 40, 80, 100, 85, 70, 90, 65, 90, 85, 50.5]

def print_grades(grades_input):
  for grade in grades_input:
    print grade

def grades_sum(scores):
  total = 0
  for score in scores: 
    total += score
  return total
    
def grades_average(grades_input):
  sum_of_grades = grades_sum(grades_input)
  average = sum_of_grades / float(len(grades_input))
  return average

def grades_variance(grades):
    variance = 0
    for number in grades:
        variance += (grades_average(grades) - number) ** 2
    return variance / len(grades)

def grades_std_deviation(variance):
  return variance ** 0.5

variance = grades_variance(grades)
print print_grades(grades)
print grades_sum(grades)
print grades_average(grades)
print grades_average(grades)
print grades_variance(grades)
print grades_std_deviation(variance)



========================
Loops:
=================================================================================================================================================
count = 0

if count < 5:
  print "Hello, I am an if statement and count is", count

while count < 10:
  print "Hello, I am a while and count is", count
  count += 1
=================
loop_condition = True

while loop_condition:
  print "I am a loop"
  loop_condition = False
  
================
num = 1

while num <= 10:  # Fill in the condition
  # Print num squared
  # Increment num (make sure to do this!)
  print num **2
  num +=1
==============
choice = raw_input('Enjoying the course? (y/n)')

while choice != 'y' and choice != 'n':  # Fill in the condition (before the colon)
  choice = raw_input("Sorry, I didn't catch that. Enter again: ")
  
 ==============
 count = 0

while count < 10:
   # Add a colon
  print count
  # Increment count
  count +=1
 =========
 count = 0

while True:
  print count
  count += 1
  if count >= 10:
    break
============
import random

print "Lucky Numbers! 3 numbers will be generated."
print "If one of them is a '5', you lose!"

count = 0
while count < 3:
  num = random.randint(1, 6)
  print num
  if num == 5:
    print "Sorry, you lose!"
    break
  count += 1
else:
  print "You win!"
===========
from random import randint

# Generates a number from 1 through 10 inclusive
random_number = randint(1, 10)

guesses_left = 3
print random_number
# Start your game!
while guesses_left > 0 :
  guess = int(raw_input("Your guess: "))
  if guess == random_number:
    print "You win!"
    break
  guesses_left -=1

else:
  print "You lose."
  
===================
print "Counting..."

for i in range(20):
  print i

  
  ============
  hobbies = []

# Add your code below!

for num in range(3):
  hobby =  raw_input("Tell me one of your favorite hobbies: ")
  hobbies.append(hobby)

print hobbies
==================
thing = "spam!"

for c in thing:
  print c

word = "eggs!"

# Your code here!
for t in word:
  print t

============
phrase = "A bird in the hand..."

# Add your for loop
for char in phrase:
  if char=="A" or char=="a":
    print "X",
  else:
    print char, 




#Don't delete this print statement!
print
============
numbers  = [7, 9, 12, 54, 99]

print "This list contains: "

for num in numbers:
  print num

# Add your loop below!
for num in numbers:
  print num**2
=============
d = {'a': 'apple', 'b': 'berry', 'c': 'cherry'}

for key in d:
  # Your code here!
  print key, d[key]
  
=========
choices = ['pizza', 'pasta', 'salad', 'nachos']

print 'Your choices are:'
for index, item in enumerate(choices):
  print index+1, item
  
=========
list_a = [3, 9, 17, 15, 19]
list_b = [2, 4, 8, 10, 30, 40, 50, 60, 70, 80, 90]

for a, b in zip(list_a, list_b):
  # Add your code here!
    print max(a, b)

===========
fruits = ['banana', 'apple', 'orange', 'tomato', 'pear', 'grape']

print 'You have...'
for f in fruits:
  if f == 'tomato':
    print 'A tomato is not a fruit!' # (It actually is.)
    break
  print 'A', f
else:
  print 'A fine selection of fruits!'
  
 ============
 fruits = ['banana', 'apple', 'orange', 'zomato', 'pear', 'grape']

print 'You have...'
for f in fruits:
  if f == 'tomato':
    print 'A tomato is not a fruit!' # (It actually is.)
    break
  print 'A', f
else:
  print 'A fine selection of fruits!'
  =======
  Practice Makes Perfect:
  =====================================================================================================================
  def is_even(number):
  if number%2==0:
    return True
  else:
    return False

  number = raw_input("Enter A Number:" )
  print is_even(number)
 
 ================
 def is_int(x):
  absolute = abs(x)
  rounded = round(absolute)
  return absolute - rounded == 0

print is_int(10)
print is_int(10.5)

============
def digit_sum(n):
  total = 0
  string_n = str(n)
  for char in string_n:
    total += int(char)
  return total

#Alternate Solution:

#def digit_sum(n):
#  total = 0
#  while n > 0:
#    total += n % 10
#    n = n // 10
#  return total
  
print digit_sum(1234)
===============
def factorial(x):
    total = 1
    while x>0:
        total *= x
        x-=1
    return total
  
print factorial(5)

============
def is_prime(x):
    if x < 2:
        return False
    else:
        for n in range(2, x-1):
            if x % n == 0:
                return False
        return True

print is_prime(13)
print is_prime(10)
================
def reverse(text):
    word = ""
    l = len(text) - 1
    while l >= 0:
        word = word + text[l]
        l -= 1
    return word
  
print reverse("Hello World")

=============
def anti_vowel(text):
    result = ""
    vowels = "ieaouIEAOU"
    for char in text:
          if char not in vowels:
            result += char
    return result
print anti_vowel("hello book")

===============
score = {"a": 1, "c": 3, "b": 3, "e": 1, "d": 2, "g": 2, 
         "f": 4, "i": 1, "h": 4, "k": 5, "j": 8, "m": 3, 
         "l": 1, "o": 1, "n": 1, "q": 10, "p": 3, "s": 1, 
         "r": 1, "u": 1, "t": 1, "w": 4, "v": 4, "y": 4, 
         "x": 8, "z": 10}
         
def scrabble_score(word):
  word = word.lower()
  total = 0
  for letter in word:
    for leter in score:
      if letter == leter:
        total = total + score[leter]
  return total

print scrabble_score("pizza")

======================

def censor(text, word):
    words = text.split()
    result = ''
    stars = '*' * len(word)
    count = 0
    for i in words:
        if i == word:
            words[count] = stars
        count += 1
    result =' '.join(words)

    return result
  
print censor("this hack is wack hack", "hack")

===================
def count(sequence,item):
  sum = 0
  for i in sequence:
    if i==item:
      sum+=1
  return sum

print count([1,2,3,2,1,1],1)

=========

def purify(numbers):
  evennums = []
  for n in numbers:
    if n%2==0:
      evennums.append(n)
  
  return evennums

print purify([1,2,3,4,5])
====
def purify(lst):
    res = []
    for ele in lst:
        if ele % 2 == 0:
            res.append(ele)
    return res
  
print purify([1, 2, 3, 4])

=============
def product(list):
  total = 1
  for num in list:
    total = total * num
  return total

print product([4, 5, 5,6])

=========
def remove_duplicates(inputlist):
    if inputlist == []:
        return []
    
    # Sort the input list from low to high    
    inputlist = sorted(inputlist)
    # Initialize the output list, and give it the first value of the now-sorted input list
    outputlist = [inputlist[0]]

    # Go through the values of the sorted list and append to the output list
    # ...any values that are greater than the last value of the output list
    for i in inputlist:
        if i > outputlist[-1]:
            outputlist.append(i)
        
    return outputlist
  
print remove_duplicates([1, 1, 2, 2])

===========
def median(lst):
    sorted_list = sorted(lst)
    if len(sorted_list) % 2 != 0:
        #odd number of elements
        index = len(sorted_list)//2 
        return sorted_list[index]
    elif len(sorted_list) % 2 == 0:
        #even no. of elements
        index_1 = len(sorted_list)/2 - 1
        index_2 = len(sorted_list)/2
        mean = (sorted_list[index_1] + sorted_list[index_2])/2.0
        return mean
   
print median([2, 4, 5, 9])

=======

Advanced Topics in Python:
========================================================================================================================
my_dict = {
  "Name": "ramu",
  "Age": 56,
 "color":"red"
}

print my_dict.items()

===========
my_dict = {
  "Name": "ramu",
  "Age": 56,
 "color":"red"
}

print my_dict.keys()
print my_dict.values()
============
my_dict = {
  "Name": "ramu",
  "Age": 56,
 "color":"red"
}

for key in my_dict:
  print key,my_dict[key]

print my_dict.keys()
print my_dict.values()
================= 


evens_to_50 = [i for i in range(51) if i % 2 == 0]
print evens_to_50

========
doubles_by_3 = [x * 2 for x in range(1, 6) if (x * 2) % 3 == 0]

# Complete the following line. Use the line above for help.
even_squares = [x ** 2 for x in range(1, 12) if x % 2 == 0]

print even_squares

=============

cubes_by_four = [x ** 3 for x in range(1, 11) if ((x ** 3) % 4) == 0]
print cubes_by_four

============

l = [i ** 2 for i in range(1, 11)]
# Should be [1, 4, 9, 16, 25, 36, 49, 64, 81, 100]

print l[2:9:2]

=========
my_list = range(1, 11) # List of numbers 1 - 10

# Add your code below!
print my_list[::2]

===============
my_list = range(1, 11)

# Add your code below!
backwards = my_list[::-1]
print backwards
==========
to_one_hundred = range(101)
# Add your code below!

backwards_by_tens = to_one_hundred[::10]
print backwards_by_tens
=======
to_21 = range(1, 22)

odds = to_21[::2]

middle_third = to_21[7:14]

==============
my_list = range(16)
print filter(lambda x: x % 3 == 0, my_list)
========

languages = ["HTML", "JavaScript", "Python", "Ruby"]

# Add arguments to the filter()
print filter(lambda x:x=="Python", languages)

===========
squares = [x ** 2 for x in range(1, 11)]

print filter(lambda x: x >= 30 and x <= 70, squares)
===========
movies = {
  "Monty Python and the Holy Grail": "Great",
  "Monty Python's Life of Brian": "Good",
  "Monty Python's Meaning of Life": "Okay"
}
print movies.items()
========
threes_and_fives = [x for x in range(1, 16) if x % 3 == 0 or x % 5 == 0]
======
garbled = "!XeXgXaXsXsXeXmX XtXeXrXcXeXsX XeXhXtX XmXaX XI"
message = garbled[:-2]
print message
===========
garbled = "IXXX aXXmX aXXXnXoXXXXXtXhXeXXXXrX sXXXXeXcXXXrXeXt mXXeXsXXXsXaXXXXXXgXeX!XX"
message = filter(lambda x: x!="X",garbled)
print message
======

Introduction to Bitwise Operators:
======================================================================================================================================================
print 5 >> 4  # Right Shift
print 5 << 1  # Left Shift
print 8 & 5   # Bitwise AND
print 9 | 4   # Bitwise OR
print 12 ^ 42 # Bitwise XOR
print ~88     # Bitwise NOT

===========

print 0b1,    #1
print 0b10,   #2
print 0b11,   #3
print 0b100,  #4
print 0b101,  #5
print 0b110,  #6
print 0b111   #7
print "******"
print 0b1 + 0b11
print 0b11 * 0b11

==================
print 0b1,    #1
print 0b10,   #2
print 0b11,   #3
print 0b100,  #4
print 0b101,  #5
print 0b110,  #6
print 0b111   #7
print "******"
print 0b1 + 0b11
print 0b11 * 0b11

========
print bin(1)
print bin(2)
print bin(3)
print bin(4)
print bin(5)


=============
print int("1",2)
print int("10",2)
print int("111",2)
print int("0b100",2)
print int(bin(5),2)
# Print out the decimal equivalent of the binary 11001001.
print int("11001001", 2)

========
shift_right = 0b1100
shift_left = 0b1

# Your code here!
shift_right = shift_right >> 2
shift_left = shift_left << 2

print bin(shift_right)
print bin(shift_left)
=======
print bin(0b1110&0b101)
====
print bin(0b1110|0b101)
====
print bin(0b1110^0b101)
====
print ~1
print ~2
print ~3
print ~42
print ~123
====
def check_bit4(input):
  mask = 0b1000
  desired = input & mask
  if desired > 0:
    return "on"
  else:
    return "off"
	
=====
a = 0b10111011
mask = 0b100
desired =  a | mask
print bin(desired)
=========
a = 0b11101110

mask = 0b11111111
desired = a ^ mask

print bin(desired)
=======
def flip_bit(number, n):
  bit_to_flip = 0b1 << (n -1)
  result = number ^ bit_to_flip
  return bin(result)
  
==========
Introduction to Classes:
=========================================================================================================================
class Fruit(object):
  """A class that makes various tasty fruits."""
  def __init__(self, name, color, flavor, poisonous):
    self.name = name
    self.color = color
    self.flavor = flavor
    self.poisonous = poisonous

  def description(self):
    print "I'm a %s %s and I taste %s." % (self.color, self.name, self.flavor)

  def is_edible(self):
    if not self.poisonous:
      print "Yep! I'm edible."
    else:
      print "Don't eat me! I am super poisonous."

lemon = Fruit("lemon", "yellow", "sour", False)

lemon.description()
lemon.is_edible()

=====================
class Animal(object):
  pass

=====================
class Animal(object):
  def __init__(self):
    pass

====================
class Animal(object):
  def __init__(self,name):
    self.name = name
	
===================
class Animal(object):
  def __init__(self, name):
    self.name = name
    
zebra = Animal("Jeffrey")

print zebra.name
===================
# Class definition
class Animal(object):
  """Makes cute animals."""
  # For initializing our instance objects
  def __init__(self, name, age, is_hungry):
    self.name = name
    self.age = age
    self.is_hungry=is_hungry

# Note that self is only used in the __init__()
# function definition; we don't need to pass it
# to our instance objects.

zebra = Animal("Jeffrey", 2, True)
giraffe = Animal("Bruce", 1, False)
panda = Animal("Chad", 7, True)

print zebra.name, zebra.age, zebra.is_hungry
print giraffe.name, giraffe.age, giraffe.is_hungry
print panda.name, panda.age, panda.is_hungry

=================
class Animal(object):
  """Makes cute animals."""
  is_alive = True
  def __init__(self, name, age, is_alive):
    self.name = name
    self.age = age
    self.is_alive = is_alive

zebra = Animal("Jeffrey", 2)
giraffe = Animal("Bruce", 1)
panda = Animal("Chad", 7)

print zebra.name, zebra.age, zebra.is_alive
print giraffe.name, giraffe.age, giraffe.is_alive
print panda.name, panda.age, panda.is_alive

=================
class Animal(object):
  """Makes cute animals."""
  is_alive = True
  def __init__(self, name, age):
    self.name = name
    self.age = age
  # Add your method here!
  def description(self):
    print self.name
    print self.age
    
hippo = Animal("Anderson", 36)
hippo.description()
================
class Animal(object):
  """Makes cute animals."""
  is_alive = True
  health = "good"
  def __init__(self, name, age):
    self.name = name
    self.age = age
  # Add your method here!
  def description(self):
    print self.name
    print self.age
    
hippo = Animal('Anderson', 36)
sloth = Animal('Dale', 15)
ocelot = Animal('Fuzzy', 7)

print hippo.health
print sloth.health
print ocelot.health
==================
class ShoppingCart(object):
  """Creates shopping cart objects
  for users of our fine website."""
  items_in_cart = {}
  def __init__(self, customer_name):
    self.customer_name = customer_name

  def add_item(self, product, price):
    """Add product to the cart."""
    if not product in self.items_in_cart:
      self.items_in_cart[product] = price
      print product + " added."
    else:
      print product + " is already in the cart."

  def remove_item(self, product):
    """Remove product from the cart."""
    if product in self.items_in_cart:
      del self.items_in_cart[product]
      print product + " removed."
    else:
      print product + " is not in the cart."


my_cart = ShoppingCart("Eric")
my_cart.add_item("Ukelele", 10)

======================
class Customer(object):
  """Produces objects that represent customers."""
  def __init__(self, customer_id):
    self.customer_id = customer_id

  def display_cart(self):
    print "I'm a string that stands in for the contents of your shopping cart!"

class ReturningCustomer(Customer):
  """For customers of the repeat variety."""
  def display_order_history(self):
    print "I'm a string that stands in for your order history!"

monty_python = ReturningCustomer("ID: 12345")
monty_python.display_cart()
monty_python.display_order_history()

=====================
class Shape(object):
  """Makes shapes!"""
  def __init__(self, number_of_sides):
    self.number_of_sides = number_of_sides

# Add your Triangle class below!
class Triangle(Shape):
  def __init__(self, side1, side2, side3):
    self.side1 = side1
    self.side2 = side2
    self.side3 = side3


===================
class Employee(object):
  """Models real-life employees!"""
  def __init__(self, employee_name):
    self.employee_name = employee_name

  def calculate_wage(self, hours):
    self.hours = hours
    return hours * 20.00

# Add your code below!
class PartTimeEmployee(Employee):
  def calculate_wage(self, hours):
    self.hours = hours
    return hours * 12.00
	
===================
class Employee(object):
  """Models real-life employees!"""
  def __init__(self, employee_name):
    self.employee_name = employee_name

  def calculate_wage(self, hours):
    self.hours = hours
    return hours * 20.00

# Add your code below!
class PartTimeEmployee(Employee):
  def calculate_wage(self, hours):
    self.hours = hours
    return hours * 12.00
  
  def full_time_wage(self, hours):
    return super(PartTimeEmployee, self).calculate_wage(hours)

milton = PartTimeEmployee('Milton')
print milton.full_time_wage(10)

==================
class Triangle(object):
  def __init__(self, angle1, angle2,angle3):
    self.angle1 = angle1
    self.angle2 = angle2
    self.angle3 = angle3

==================
class Triangle(object):
  number_of_sides = 3
  def __init__(self, angle1, angle2, angle3):
    self.angle1 = angle1
    self.angle2 = angle2
    self.angle3 = angle3
    
  def check_angles(self):
    if (self.angle1 + self.angle2 + self.angle3) == 180:
      return True
    else:
      return False
	  
==================
class Triangle(object):
  number_of_sides = 3
  def __init__(self, angle1, angle2, angle3):
    self.angle1 = angle1
    self.angle2 = angle2
    self.angle3 = angle3
    
  def check_angles(self):
    if (self.angle1 + self.angle2 + self.angle3) == 180:
      return True
    else:
      return False
    
my_triangle = Triangle(30, 60, 90)

print my_triangle.number_of_sides
print my_triangle.check_angles()

==================
class Triangle(object):
  number_of_sides = 3
  def __init__(self, angle1, angle2, angle3):
    self.angle1 = angle1
    self.angle2 = angle2
    self.angle3 = angle3
    
  def check_angles(self):
    if (self.angle1 + self.angle2 + self.angle3) == 180:
      return True
    else:
      return False
    
class Equilateral(Triangle):
  angle = 60
  def __init__(self):
    self.angle1 = self.angle
    self.angle2 = self.angle
    self.angle3 = self.angle
	
===================

class Car(object):
  pass
  
 ==================
 class Car(object):
  pass

my_car = Car()

==================
class Car(object):
  condition = "new"

my_car = Car()

==================

class Car(object):
  condition = "new"

my_car = Car()
print my_car.condition
================
class Car(object):
  condition = "new"
  def __init__(self, model, color, mpg):
    self.model = model
    self.color = color
    self.mpg   = mpg

my_car = Car("DeLorean", "silver", 88)

=================
class Car(object):
  condition = "new"
  def __init__(self, model, color, mpg):
    self.model = model
    self.color = color
    self.mpg   = mpg

my_car = Car("DeLorean", "silver", 88)
print my_car.model
print my_car.color
print my_car.mpg
===============

class Car(object):
  condition = "new"
  def __init__(self, model, color, mpg):
    self.model = model
    self.color = color
    self.mpg   = mpg
   
  def display_car(self):
    print "This is a %s %s with %s MPG." % (self.color, self.model, str(self.mpg))

my_car = Car("DeLorean", "silver", 88)

my_car.display_car()
====================
class Car(object):
  condition = "new"
  def __init__(self, model, color, mpg):
    self.model = model
    self.color = color
    self.mpg   = mpg
   
  def display_car(self):
    print "This is a %s %s with %s MPG." % (self.color, self.model, str(self.mpg))
    
  def drive_car(self):
    self.condition = "used"

my_car = Car("DeLorean", "silver", 88)

print my_car.condition
my_car.drive_car()
print my_car.condition

============

class Car(object):
  condition = "new"
  def __init__(self, model, color, mpg):
    self.model = model
    self.color = color
    self.mpg   = mpg
   
  def display_car(self):
    print "This is a %s %s with %s MPG." % (self.color, self.model, str(self.mpg))
    
  def drive_car(self):
    self.condition = "used"
    
class ElectricCar(Car):
  def __init__(self, model, color, mpg, battery_type):
    self.model = model
    self.color = color
    self.mpg   = mpg
    self.battery_type = battery_type

my_car = ElectricCar("DeLorean", "silver", 88, "molten salt")
=============
class Car(object):
  condition = "new"
  def __init__(self, model, color, mpg):
    self.model = model
    self.color = color
    self.mpg   = mpg
   
  def display_car(self):
    print "This is a %s %s with %s MPG." % (self.color, self.model, str(self.mpg))
    
  def drive_car(self):
    self.condition = "used"
    
class ElectricCar(Car):
  def __init__(self, model, color, mpg, battery_type):
    self.model = model
    self.color = color
    self.mpg   = mpg
    self.battery_type = battery_type
    
  def drive_car(self):
    self.condition = "like new"

my_car = ElectricCar("DeLorean", "silver", 88, "molten salt")

print my_car.condition
my_car.drive_car()
print my_car.condition

=============
class Point3D(object):
  def __init__(self, x, y, z):
    self.x = x
    self.y = y
    self.z = z
    
  def __repr__(self):
    return "(%d, %d, %d)" % (self.x, self.y, self.z)
    
my_point = Point3D(1, 2, 3)
print my_point

==============
File Input/Output:
======================================================================================================================================
my_list = [i ** 2 for i in range(1, 11)]
# Generates a list of squares of the numbers 1 - 10

f = open("output.txt", "w")

for item in my_list:
  f.write(str(item) + "\n")

f.close()

========

my_list = [i ** 2 for i in range(1, 11)]

my_file = open("output.txt", "w")

# Add your code below!
for m in my_list:
  my_file.write(str(m) + "\n")

my_file.close()

==============
my_file = open("output.txt", "r")
print my_file.read()
my_file.close()

============
my_file = open("text.txt", "r")
print my_file.readline()
print my_file.readline()
print my_file.readline()
my_file.close()

================
# Use a file handler to open a file for writing
write_file = open("text.txt", "w")

# Open the file for reading
read_file = open("text.txt", "r")

# Write to the file
write_file.write("Not closing files is VERY BAD.")

write_file.close()

# Try to read from the file
print read_file.read()

read_file.close()

===============
with open("text.txt", "w") as textfile:
  textfile.write("Success!")

==============
with open("text.txt", "w") as my_file:
  my_file.write("My Data!")
  
==============
with open("text.txt", "w") as my_file:
  my_file.write("My Data!")
  
if not file.closed:
  file.close()

print my_file.closed
=================


