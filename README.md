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

### Hard Floor
$ php src/Index.php --clean --floor=hard --area=70

[Charging] Cleaned Area: 0 mt sq, Charging Percentage: 0%

[Charged] Cleaned Area: 0 mt sq, Charging Percentage: 100%

[Cleaning hard floor] Cleaned Area: 1 mt sq, Charging Percentage: 98%

[Cleaning hard floor] Cleaned Area: 2 mt sq, Charging Percentage: 96%

[Cleaning hard floor] Cleaned Area: 3 mt sq, Charging Percentage: 94%

[Cleaning hard floor] Cleaned Area: 4 mt sq, Charging Percentage: 92%

[Cleaning hard floor] Cleaned Area: 5 mt sq, Charging Percentage: 90%

[Cleaning hard floor] Cleaned Area: 6 mt sq, Charging Percentage: 88%

[Cleaning hard floor] Cleaned Area: 7 mt sq, Charging Percentage: 86%

[Cleaning hard floor] Cleaned Area: 8 mt sq, Charging Percentage: 84%

[Cleaning hard floor] Cleaned Area: 9 mt sq, Charging Percentage: 82%

[Cleaning hard floor] Cleaned Area: 10 mt sq, Charging Percentage: 80%

[Cleaning hard floor] Cleaned Area: 11 mt sq, Charging Percentage: 78%

[Cleaning hard floor] Cleaned Area: 12 mt sq, Charging Percentage: 76%

[Cleaning hard floor] Cleaned Area: 13 mt sq, Charging Percentage: 74%

[Cleaning hard floor] Cleaned Area: 14 mt sq, Charging Percentage: 72%

[Cleaning hard floor] Cleaned Area: 15 mt sq, Charging Percentage: 70%

[Cleaning hard floor] Cleaned Area: 16 mt sq, Charging Percentage: 68%

[Cleaning hard floor] Cleaned Area: 17 mt sq, Charging Percentage: 66%

[Cleaning hard floor] Cleaned Area: 18 mt sq, Charging Percentage: 64%

[Cleaning hard floor] Cleaned Area: 19 mt sq, Charging Percentage: 62%

[Cleaning hard floor] Cleaned Area: 20 mt sq, Charging Percentage: 60%

[Cleaning hard floor] Cleaned Area: 21 mt sq, Charging Percentage: 58%

[Cleaning hard floor] Cleaned Area: 22 mt sq, Charging Percentage: 56%

[Cleaning hard floor] Cleaned Area: 23 mt sq, Charging Percentage: 54%

[Cleaning hard floor] Cleaned Area: 24 mt sq, Charging Percentage: 52%

[Cleaning hard floor] Cleaned Area: 25 mt sq, Charging Percentage: 50%

[Cleaning hard floor] Cleaned Area: 26 mt sq, Charging Percentage: 48%

[Cleaning hard floor] Cleaned Area: 27 mt sq, Charging Percentage: 46%

[Cleaning hard floor] Cleaned Area: 28 mt sq, Charging Percentage: 44%

[Cleaning hard floor] Cleaned Area: 29 mt sq, Charging Percentage: 42%

[Cleaning hard floor] Cleaned Area: 30 mt sq, Charging Percentage: 40%

[Cleaning hard floor] Cleaned Area: 31 mt sq, Charging Percentage: 38%

[Cleaning hard floor] Cleaned Area: 32 mt sq, Charging Percentage: 36%

[Cleaning hard floor] Cleaned Area: 33 mt sq, Charging Percentage: 34%

[Cleaning hard floor] Cleaned Area: 34 mt sq, Charging Percentage: 32%

[Cleaning hard floor] Cleaned Area: 35 mt sq, Charging Percentage: 30%

[Cleaning hard floor] Cleaned Area: 36 mt sq, Charging Percentage: 28%

[Cleaning hard floor] Cleaned Area: 37 mt sq, Charging Percentage: 26%

[Cleaning hard floor] Cleaned Area: 38 mt sq, Charging Percentage: 24%

[Cleaning hard floor] Cleaned Area: 39 mt sq, Charging Percentage: 22%

[Cleaning hard floor] Cleaned Area: 40 mt sq, Charging Percentage: 20%

[Cleaning hard floor] Cleaned Area: 41 mt sq, Charging Percentage: 18%

[Cleaning hard floor] Cleaned Area: 42 mt sq, Charging Percentage: 16%

[Cleaning hard floor] Cleaned Area: 43 mt sq, Charging Percentage: 14%

[Cleaning hard floor] Cleaned Area: 44 mt sq, Charging Percentage: 12%

[Cleaning hard floor] Cleaned Area: 45 mt sq, Charging Percentage: 10%

[Cleaning hard floor] Cleaned Area: 46 mt sq, Charging Percentage: 8%

[Cleaning hard floor] Cleaned Area: 47 mt sq, Charging Percentage: 6%

[Cleaning hard floor] Cleaned Area: 48 mt sq, Charging Percentage: 4%

[Cleaning hard floor] Cleaned Area: 49 mt sq, Charging Percentage: 2%

[Cleaning hard floor] Cleaned Area: 50 mt sq, Charging Percentage: 0%

[Charging] Cleaned Area: 50 mt sq, Charging Percentage: 0%

[Charged] Cleaned Area: 50 mt sq, Charging Percentage: 100%

[Cleaning hard floor] Cleaned Area: 51 mt sq, Charging Percentage: 98%

[Cleaning hard floor] Cleaned Area: 52 mt sq, Charging Percentage: 96%

[Cleaning hard floor] Cleaned Area: 53 mt sq, Charging Percentage: 94%

[Cleaning hard floor] Cleaned Area: 54 mt sq, Charging Percentage: 92%

[Cleaning hard floor] Cleaned Area: 55 mt sq, Charging Percentage: 90%

[Cleaning hard floor] Cleaned Area: 56 mt sq, Charging Percentage: 88%

[Cleaning hard floor] Cleaned Area: 57 mt sq, Charging Percentage: 86%

[Cleaning hard floor] Cleaned Area: 58 mt sq, Charging Percentage: 84%

[Cleaning hard floor] Cleaned Area: 59 mt sq, Charging Percentage: 82%

[Cleaning hard floor] Cleaned Area: 60 mt sq, Charging Percentage: 80%

[Cleaning hard floor] Cleaned Area: 61 mt sq, Charging Percentage: 78%

[Cleaning hard floor] Cleaned Area: 62 mt sq, Charging Percentage: 76%

[Cleaning hard floor] Cleaned Area: 63 mt sq, Charging Percentage: 74%

[Cleaning hard floor] Cleaned Area: 64 mt sq, Charging Percentage: 72%

[Cleaning hard floor] Cleaned Area: 65 mt sq, Charging Percentage: 70%

[Cleaning hard floor] Cleaned Area: 66 mt sq, Charging Percentage: 68%

[Cleaning hard floor] Cleaned Area: 67 mt sq, Charging Percentage: 66%

[Cleaning hard floor] Cleaned Area: 68 mt sq, Charging Percentage: 64%

[Cleaning hard floor] Cleaned Area: 69 mt sq, Charging Percentage: 62%

[Cleaning hard floor] Cleaned Area: 70 mt sq, Charging Percentage: 60%


### Carpet Floor
$ php src/Index.php --clean --floor=carpet --area=60

[Charging] Cleaned Area: 0 mt sq, Charging Percentage: 0%

[Charged] Cleaned Area: 0 mt sq, Charging Percentage: 100%

[Cleaning carpet floor] Cleaned Area: 1 mt sq, Charging Percentage: 99%

[Cleaning carpet floor] Cleaned Area: 2 mt sq, Charging Percentage: 98%

[Cleaning carpet floor] Cleaned Area: 3 mt sq, Charging Percentage: 97%

[Cleaning carpet floor] Cleaned Area: 4 mt sq, Charging Percentage: 96%

[Cleaning carpet floor] Cleaned Area: 5 mt sq, Charging Percentage: 95%

[Cleaning carpet floor] Cleaned Area: 6 mt sq, Charging Percentage: 94%

[Cleaning carpet floor] Cleaned Area: 7 mt sq, Charging Percentage: 93%

[Cleaning carpet floor] Cleaned Area: 8 mt sq, Charging Percentage: 92%

[Cleaning carpet floor] Cleaned Area: 9 mt sq, Charging Percentage: 91%

[Cleaning carpet floor] Cleaned Area: 10 mt sq, Charging Percentage: 90%

[Cleaning carpet floor] Cleaned Area: 11 mt sq, Charging Percentage: 89%

[Cleaning carpet floor] Cleaned Area: 12 mt sq, Charging Percentage: 88%

[Cleaning carpet floor] Cleaned Area: 13 mt sq, Charging Percentage: 87%

[Cleaning carpet floor] Cleaned Area: 14 mt sq, Charging Percentage: 86%

[Cleaning carpet floor] Cleaned Area: 15 mt sq, Charging Percentage: 85%

[Cleaning carpet floor] Cleaned Area: 16 mt sq, Charging Percentage: 84%

[Cleaning carpet floor] Cleaned Area: 17 mt sq, Charging Percentage: 83%

[Cleaning carpet floor] Cleaned Area: 18 mt sq, Charging Percentage: 82%

[Cleaning carpet floor] Cleaned Area: 19 mt sq, Charging Percentage: 81%

[Cleaning carpet floor] Cleaned Area: 20 mt sq, Charging Percentage: 80%

[Cleaning carpet floor] Cleaned Area: 21 mt sq, Charging Percentage: 79%

[Cleaning carpet floor] Cleaned Area: 22 mt sq, Charging Percentage: 78%

[Cleaning carpet floor] Cleaned Area: 23 mt sq, Charging Percentage: 77%

[Cleaning carpet floor] Cleaned Area: 24 mt sq, Charging Percentage: 76%

[Cleaning carpet floor] Cleaned Area: 25 mt sq, Charging Percentage: 75%

[Cleaning carpet floor] Cleaned Area: 26 mt sq, Charging Percentage: 74%

[Cleaning carpet floor] Cleaned Area: 27 mt sq, Charging Percentage: 73%

[Cleaning carpet floor] Cleaned Area: 28 mt sq, Charging Percentage: 72%

[Cleaning carpet floor] Cleaned Area: 29 mt sq, Charging Percentage: 71%

[Cleaning carpet floor] Cleaned Area: 30 mt sq, Charging Percentage: 70%

[Cleaning carpet floor] Cleaned Area: 31 mt sq, Charging Percentage: 69%

[Cleaning carpet floor] Cleaned Area: 32 mt sq, Charging Percentage: 68%

[Cleaning carpet floor] Cleaned Area: 33 mt sq, Charging Percentage: 67%

[Cleaning carpet floor] Cleaned Area: 34 mt sq, Charging Percentage: 66%

[Cleaning carpet floor] Cleaned Area: 35 mt sq, Charging Percentage: 65%

[Cleaning carpet floor] Cleaned Area: 36 mt sq, Charging Percentage: 64%

[Cleaning carpet floor] Cleaned Area: 37 mt sq, Charging Percentage: 63%

[Cleaning carpet floor] Cleaned Area: 38 mt sq, Charging Percentage: 62%

[Cleaning carpet floor] Cleaned Area: 39 mt sq, Charging Percentage: 61%

[Cleaning carpet floor] Cleaned Area: 40 mt sq, Charging Percentage: 60%

[Cleaning carpet floor] Cleaned Area: 41 mt sq, Charging Percentage: 59%

[Cleaning carpet floor] Cleaned Area: 42 mt sq, Charging Percentage: 58%

[Cleaning carpet floor] Cleaned Area: 43 mt sq, Charging Percentage: 57%

[Cleaning carpet floor] Cleaned Area: 44 mt sq, Charging Percentage: 56%

[Cleaning carpet floor] Cleaned Area: 45 mt sq, Charging Percentage: 55%

[Cleaning carpet floor] Cleaned Area: 46 mt sq, Charging Percentage: 54%

[Cleaning carpet floor] Cleaned Area: 47 mt sq, Charging Percentage: 53%

[Cleaning carpet floor] Cleaned Area: 48 mt sq, Charging Percentage: 52%

[Cleaning carpet floor] Cleaned Area: 49 mt sq, Charging Percentage: 51%

[Cleaning carpet floor] Cleaned Area: 50 mt sq, Charging Percentage: 50%

[Cleaning carpet floor] Cleaned Area: 51 mt sq, Charging Percentage: 49%

[Cleaning carpet floor] Cleaned Area: 52 mt sq, Charging Percentage: 48%

[Cleaning carpet floor] Cleaned Area: 53 mt sq, Charging Percentage: 47%

[Cleaning carpet floor] Cleaned Area: 54 mt sq, Charging Percentage: 46%

[Cleaning carpet floor] Cleaned Area: 55 mt sq, Charging Percentage: 45%

[Cleaning carpet floor] Cleaned Area: 56 mt sq, Charging Percentage: 44%

[Cleaning carpet floor] Cleaned Area: 57 mt sq, Charging Percentage: 43%

[Cleaning carpet floor] Cleaned Area: 58 mt sq, Charging Percentage: 42%

[Cleaning carpet floor] Cleaned Area: 59 mt sq, Charging Percentage: 41%

[Cleaning carpet floor] Cleaned Area: 60 mt sq, Charging Percentage: 40%


## Test Cases output
$ ./vendor/bin/phpunit tests

PHPUnit 7.5.20 by Sebastian Bergmann and contributors.

..

Time: 24 ms, Memory: 4.00 MB

OK (2 tests, 2 assertions)
