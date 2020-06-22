## Description

As a user, I want a robot to clean my 2 apartments. The first apartment has a 70 m2 hard floor.
The second apartment has a 60 m2 carpeted floor. The robot should charge its battery itself
once it runs out of energy.
I want to run a command $ robot.php clean --floor=carpet --area=70 and I want
to see the state output while it's cleaning or charging the battery. The --floor parameter
should accept either hard or carpet to determine how the robot should behave based on the
following assumptions.

Assumptions

● The robot has a battery big enough to clean for 60 seconds in one charge.

● The robot can clean 1 m2 of hard floor in 1 second.

● The robot can clean 1 m2 of carpet in 2 seconds.

● The battery charge from 0 to 100% takes 30 seconds.

## Installation
- PHP: 7.2
- PHPUnit 7.5

## Steps to run

### Hard Floor
$ php src/Index.php --clean --floor=hard --area=70

### Carpet Floor
$ php src/Index.php --clean --floor=carpet --area=60

## Application Output

### Carpet Floor
$ php src/Index.php --clean --floor=Carpet --area=70

[Charging] Cleaned Area: 0 mt sq, Charging Percentage: 0%

[Charged] Cleaned Area: 0 mt sq, Charging Percentage: 100%

[Cleaning Carpet floor] Cleaned Area: 1 mt sq, Charging Percentage: 98%

[Cleaning Carpet floor] Cleaned Area: 2 mt sq, Charging Percentage: 96%

[Cleaning Carpet floor] Cleaned Area: 3 mt sq, Charging Percentage: 94%

[Cleaning Carpet floor] Cleaned Area: 4 mt sq, Charging Percentage: 92%

[Cleaning Carpet floor] Cleaned Area: 5 mt sq, Charging Percentage: 90%

[Cleaning Carpet floor] Cleaned Area: 6 mt sq, Charging Percentage: 88%

[Cleaning Carpet floor] Cleaned Area: 7 mt sq, Charging Percentage: 86%

[Cleaning Carpet floor] Cleaned Area: 8 mt sq, Charging Percentage: 84%

[Cleaning Carpet floor] Cleaned Area: 9 mt sq, Charging Percentage: 82%

[Cleaning Carpet floor] Cleaned Area: 10 mt sq, Charging Percentage: 80%

[Cleaning Carpet floor] Cleaned Area: 11 mt sq, Charging Percentage: 78%

[Cleaning Carpet floor] Cleaned Area: 12 mt sq, Charging Percentage: 76%

[Cleaning Carpet floor] Cleaned Area: 13 mt sq, Charging Percentage: 74%

[Cleaning Carpet floor] Cleaned Area: 14 mt sq, Charging Percentage: 72%

[Cleaning Carpet floor] Cleaned Area: 15 mt sq, Charging Percentage: 70%

[Cleaning Carpet floor] Cleaned Area: 16 mt sq, Charging Percentage: 68%

[Cleaning Carpet floor] Cleaned Area: 17 mt sq, Charging Percentage: 66%

[Cleaning Carpet floor] Cleaned Area: 18 mt sq, Charging Percentage: 64%

[Cleaning Carpet floor] Cleaned Area: 19 mt sq, Charging Percentage: 62%

[Cleaning Carpet floor] Cleaned Area: 20 mt sq, Charging Percentage: 60%

[Cleaning Carpet floor] Cleaned Area: 21 mt sq, Charging Percentage: 58%

[Cleaning Carpet floor] Cleaned Area: 22 mt sq, Charging Percentage: 56%

[Cleaning Carpet floor] Cleaned Area: 23 mt sq, Charging Percentage: 54%

[Cleaning Carpet floor] Cleaned Area: 24 mt sq, Charging Percentage: 52%

[Cleaning Carpet floor] Cleaned Area: 25 mt sq, Charging Percentage: 50%

[Cleaning Carpet floor] Cleaned Area: 26 mt sq, Charging Percentage: 48%

[Cleaning Carpet floor] Cleaned Area: 27 mt sq, Charging Percentage: 46%

[Cleaning Carpet floor] Cleaned Area: 28 mt sq, Charging Percentage: 44%

[Cleaning Carpet floor] Cleaned Area: 29 mt sq, Charging Percentage: 42%

[Cleaning Carpet floor] Cleaned Area: 30 mt sq, Charging Percentage: 40%

[Cleaning Carpet floor] Cleaned Area: 31 mt sq, Charging Percentage: 38%

[Cleaning Carpet floor] Cleaned Area: 32 mt sq, Charging Percentage: 36%

[Cleaning Carpet floor] Cleaned Area: 33 mt sq, Charging Percentage: 34%

[Cleaning Carpet floor] Cleaned Area: 34 mt sq, Charging Percentage: 32%

[Cleaning Carpet floor] Cleaned Area: 35 mt sq, Charging Percentage: 30%

[Cleaning Carpet floor] Cleaned Area: 36 mt sq, Charging Percentage: 28%

[Cleaning Carpet floor] Cleaned Area: 37 mt sq, Charging Percentage: 26%

[Cleaning Carpet floor] Cleaned Area: 38 mt sq, Charging Percentage: 24%

[Cleaning Carpet floor] Cleaned Area: 39 mt sq, Charging Percentage: 22%

[Cleaning Carpet floor] Cleaned Area: 40 mt sq, Charging Percentage: 20%

[Cleaning Carpet floor] Cleaned Area: 41 mt sq, Charging Percentage: 18%

[Cleaning Carpet floor] Cleaned Area: 42 mt sq, Charging Percentage: 16%

[Cleaning Carpet floor] Cleaned Area: 43 mt sq, Charging Percentage: 14%

[Cleaning Carpet floor] Cleaned Area: 44 mt sq, Charging Percentage: 12%

[Cleaning Carpet floor] Cleaned Area: 45 mt sq, Charging Percentage: 10%

[Cleaning Carpet floor] Cleaned Area: 46 mt sq, Charging Percentage: 8%

[Cleaning Carpet floor] Cleaned Area: 47 mt sq, Charging Percentage: 6%

[Cleaning Carpet floor] Cleaned Area: 48 mt sq, Charging Percentage: 4%

[Cleaning Carpet floor] Cleaned Area: 49 mt sq, Charging Percentage: 2%

[Cleaning Carpet floor] Cleaned Area: 50 mt sq, Charging Percentage: 0%

[Charging] Cleaned Area: 50 mt sq, Charging Percentage: 0%

[Charged] Cleaned Area: 50 mt sq, Charging Percentage: 100%

[Cleaning Carpet floor] Cleaned Area: 51 mt sq, Charging Percentage: 98%

[Cleaning Carpet floor] Cleaned Area: 52 mt sq, Charging Percentage: 96%

[Cleaning Carpet floor] Cleaned Area: 53 mt sq, Charging Percentage: 94%

[Cleaning Carpet floor] Cleaned Area: 54 mt sq, Charging Percentage: 92%

[Cleaning Carpet floor] Cleaned Area: 55 mt sq, Charging Percentage: 90%

[Cleaning Carpet floor] Cleaned Area: 56 mt sq, Charging Percentage: 88%

[Cleaning Carpet floor] Cleaned Area: 57 mt sq, Charging Percentage: 86%

[Cleaning Carpet floor] Cleaned Area: 58 mt sq, Charging Percentage: 84%

[Cleaning Carpet floor] Cleaned Area: 59 mt sq, Charging Percentage: 82%

[Cleaning Carpet floor] Cleaned Area: 60 mt sq, Charging Percentage: 80%

[Cleaning Carpet floor] Cleaned Area: 61 mt sq, Charging Percentage: 78%

[Cleaning Carpet floor] Cleaned Area: 62 mt sq, Charging Percentage: 76%

[Cleaning Carpet floor] Cleaned Area: 63 mt sq, Charging Percentage: 74%

[Cleaning Carpet floor] Cleaned Area: 64 mt sq, Charging Percentage: 72%

[Cleaning Carpet floor] Cleaned Area: 65 mt sq, Charging Percentage: 70%

[Cleaning Carpet floor] Cleaned Area: 66 mt sq, Charging Percentage: 68%

[Cleaning Carpet floor] Cleaned Area: 67 mt sq, Charging Percentage: 66%

[Cleaning Carpet floor] Cleaned Area: 68 mt sq, Charging Percentage: 64%

[Cleaning Carpet floor] Cleaned Area: 69 mt sq, Charging Percentage: 62%

[Cleaning Carpet floor] Cleaned Area: 70 mt sq, Charging Percentage: 60%


### Hard Floor
$ php src/Index.php --clean --floor=Hard --area=60

[Charging] Cleaned Area: 0 mt sq, Charging Percentage: 0%

[Charged] Cleaned Area: 0 mt sq, Charging Percentage: 100%

[Cleaning Hard floor] Cleaned Area: 1 mt sq, Charging Percentage: 99%

[Cleaning Hard floor] Cleaned Area: 2 mt sq, Charging Percentage: 98%

[Cleaning Hard floor] Cleaned Area: 3 mt sq, Charging Percentage: 97%

[Cleaning Hard floor] Cleaned Area: 4 mt sq, Charging Percentage: 96%

[Cleaning Hard floor] Cleaned Area: 5 mt sq, Charging Percentage: 95%

[Cleaning Hard floor] Cleaned Area: 6 mt sq, Charging Percentage: 94%

[Cleaning Hard floor] Cleaned Area: 7 mt sq, Charging Percentage: 93%

[Cleaning Hard floor] Cleaned Area: 8 mt sq, Charging Percentage: 92%

[Cleaning Hard floor] Cleaned Area: 9 mt sq, Charging Percentage: 91%

[Cleaning Hard floor] Cleaned Area: 10 mt sq, Charging Percentage: 90%

[Cleaning Hard floor] Cleaned Area: 11 mt sq, Charging Percentage: 89%

[Cleaning Hard floor] Cleaned Area: 12 mt sq, Charging Percentage: 88%

[Cleaning Hard floor] Cleaned Area: 13 mt sq, Charging Percentage: 87%

[Cleaning Hard floor] Cleaned Area: 14 mt sq, Charging Percentage: 86%

[Cleaning Hard floor] Cleaned Area: 15 mt sq, Charging Percentage: 85%

[Cleaning Hard floor] Cleaned Area: 16 mt sq, Charging Percentage: 84%

[Cleaning Hard floor] Cleaned Area: 17 mt sq, Charging Percentage: 83%

[Cleaning Hard floor] Cleaned Area: 18 mt sq, Charging Percentage: 82%

[Cleaning Hard floor] Cleaned Area: 19 mt sq, Charging Percentage: 81%

[Cleaning Hard floor] Cleaned Area: 20 mt sq, Charging Percentage: 80%

[Cleaning Hard floor] Cleaned Area: 21 mt sq, Charging Percentage: 79%

[Cleaning Hard floor] Cleaned Area: 22 mt sq, Charging Percentage: 78%

[Cleaning Hard floor] Cleaned Area: 23 mt sq, Charging Percentage: 77%

[Cleaning Hard floor] Cleaned Area: 24 mt sq, Charging Percentage: 76%

[Cleaning Hard floor] Cleaned Area: 25 mt sq, Charging Percentage: 75%

[Cleaning Hard floor] Cleaned Area: 26 mt sq, Charging Percentage: 74%

[Cleaning Hard floor] Cleaned Area: 27 mt sq, Charging Percentage: 73%

[Cleaning Hard floor] Cleaned Area: 28 mt sq, Charging Percentage: 72%

[Cleaning Hard floor] Cleaned Area: 29 mt sq, Charging Percentage: 71%

[Cleaning Hard floor] Cleaned Area: 30 mt sq, Charging Percentage: 70%

[Cleaning Hard floor] Cleaned Area: 31 mt sq, Charging Percentage: 69%

[Cleaning Hard floor] Cleaned Area: 32 mt sq, Charging Percentage: 68%

[Cleaning Hard floor] Cleaned Area: 33 mt sq, Charging Percentage: 67%

[Cleaning Hard floor] Cleaned Area: 34 mt sq, Charging Percentage: 66%

[Cleaning Hard floor] Cleaned Area: 35 mt sq, Charging Percentage: 65%

[Cleaning Hard floor] Cleaned Area: 36 mt sq, Charging Percentage: 64%

[Cleaning Hard floor] Cleaned Area: 37 mt sq, Charging Percentage: 63%

[Cleaning Hard floor] Cleaned Area: 38 mt sq, Charging Percentage: 62%

[Cleaning Hard floor] Cleaned Area: 39 mt sq, Charging Percentage: 61%

[Cleaning Hard floor] Cleaned Area: 40 mt sq, Charging Percentage: 60%

[Cleaning Hard floor] Cleaned Area: 41 mt sq, Charging Percentage: 59%

[Cleaning Hard floor] Cleaned Area: 42 mt sq, Charging Percentage: 58%

[Cleaning Hard floor] Cleaned Area: 43 mt sq, Charging Percentage: 57%

[Cleaning Hard floor] Cleaned Area: 44 mt sq, Charging Percentage: 56%

[Cleaning Hard floor] Cleaned Area: 45 mt sq, Charging Percentage: 55%

[Cleaning Hard floor] Cleaned Area: 46 mt sq, Charging Percentage: 54%

[Cleaning Hard floor] Cleaned Area: 47 mt sq, Charging Percentage: 53%

[Cleaning Hard floor] Cleaned Area: 48 mt sq, Charging Percentage: 52%

[Cleaning Hard floor] Cleaned Area: 49 mt sq, Charging Percentage: 51%

[Cleaning Hard floor] Cleaned Area: 50 mt sq, Charging Percentage: 50%

[Cleaning Hard floor] Cleaned Area: 51 mt sq, Charging Percentage: 49%

[Cleaning Hard floor] Cleaned Area: 52 mt sq, Charging Percentage: 48%

[Cleaning Hard floor] Cleaned Area: 53 mt sq, Charging Percentage: 47%

[Cleaning Hard floor] Cleaned Area: 54 mt sq, Charging Percentage: 46%

[Cleaning Hard floor] Cleaned Area: 55 mt sq, Charging Percentage: 45%

[Cleaning Hard floor] Cleaned Area: 56 mt sq, Charging Percentage: 44%

[Cleaning Hard floor] Cleaned Area: 57 mt sq, Charging Percentage: 43%

[Cleaning Hard floor] Cleaned Area: 58 mt sq, Charging Percentage: 42%

[Cleaning Hard floor] Cleaned Area: 59 mt sq, Charging Percentage: 41%

[Cleaning Hard floor] Cleaned Area: 60 mt sq, Charging Percentage: 40%


## Test Cases output
$ ./vendor/bin/phpunit tests

PHPUnit 7.5.20 by Sebastian Bergmann and contributors.

..

Time: 24 ms, Memory: 4.00 MB

OK (2 tests, 2 assertions)
