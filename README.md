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

### Carpet Floor
$ php src/Index.php --action=clean --floor=Carpet --area=70

[Battery Charging] 3.33%

[Battery Charging] 6.67%

[Battery Charging] 10%

[Battery Charging] 13.33%

[Battery Charging] 16.67%

[Battery Charging] 20%

[Battery Charging] 23.33%

[Battery Charging] 26.67%

[Battery Charging] 30%

[Battery Charging] 33.33%

[Battery Charging] 36.67%

[Battery Charging] 40%

[Battery Charging] 43.33%

[Battery Charging] 46.67%

[Battery Charging] 50%

[Battery Charging] 53.33%

[Battery Charging] 56.67%

[Battery Charging] 60%

[Battery Charging] 63.33%

[Battery Charging] 66.67%

[Battery Charging] 70%

[Battery Charging] 73.33%

[Battery Charging] 76.67%

[Battery Charging] 80%

[Battery Charging] 83.33%

[Battery Charging] 86.67%

[Battery Charging] 90%

[Battery Charging] 93.33%

[Battery Charging] 96.67%

[Battery Charging] 100%

[Cleaning carpet floor] Cleaned Area: 1 mt sq, Charging Percentage:96.67%

[Cleaning carpet floor] Cleaned Area: 2 mt sq, Charging Percentage:93.33%

[Cleaning carpet floor] Cleaned Area: 3 mt sq, Charging Percentage:90%

[Cleaning carpet floor] Cleaned Area: 4 mt sq, Charging Percentage:86.67%

[Cleaning carpet floor] Cleaned Area: 5 mt sq, Charging Percentage:83.33%

[Cleaning carpet floor] Cleaned Area: 6 mt sq, Charging Percentage:80%

[Cleaning carpet floor] Cleaned Area: 7 mt sq, Charging Percentage:76.67%

[Cleaning carpet floor] Cleaned Area: 8 mt sq, Charging Percentage:73.33%

[Cleaning carpet floor] Cleaned Area: 9 mt sq, Charging Percentage:70%

[Cleaning carpet floor] Cleaned Area: 10 mt sq, Charging Percentage:66.67%

[Cleaning carpet floor] Cleaned Area: 11 mt sq, Charging Percentage:63.33%

[Cleaning carpet floor] Cleaned Area: 12 mt sq, Charging Percentage:60%

[Cleaning carpet floor] Cleaned Area: 13 mt sq, Charging Percentage:56.67%

[Cleaning carpet floor] Cleaned Area: 14 mt sq, Charging Percentage:53.33%

[Cleaning carpet floor] Cleaned Area: 15 mt sq, Charging Percentage:50%

[Cleaning carpet floor] Cleaned Area: 16 mt sq, Charging Percentage:46.67%

[Cleaning carpet floor] Cleaned Area: 17 mt sq, Charging Percentage:43.33%

[Cleaning carpet floor] Cleaned Area: 18 mt sq, Charging Percentage:40%

[Cleaning carpet floor] Cleaned Area: 19 mt sq, Charging Percentage:36.67%

[Cleaning carpet floor] Cleaned Area: 20 mt sq, Charging Percentage:33.33%

[Cleaning carpet floor] Cleaned Area: 21 mt sq, Charging Percentage:30%

[Cleaning carpet floor] Cleaned Area: 22 mt sq, Charging Percentage:26.67%

[Cleaning carpet floor] Cleaned Area: 23 mt sq, Charging Percentage:23.33%

[Cleaning carpet floor] Cleaned Area: 24 mt sq, Charging Percentage:20%

[Cleaning carpet floor] Cleaned Area: 25 mt sq, Charging Percentage:16.67%

[Cleaning carpet floor] Cleaned Area: 26 mt sq, Charging Percentage:13.33%

[Cleaning carpet floor] Cleaned Area: 27 mt sq, Charging Percentage:10%

[Cleaning carpet floor] Cleaned Area: 28 mt sq, Charging Percentage:6.67%

[Cleaning carpet floor] Cleaned Area: 29 mt sq, Charging Percentage:3.33%

[Cleaning carpet floor] Cleaned Area: 30 mt sq, Charging Percentage:0%

[Battery Charging] 3.33%

[Battery Charging] 6.67%

[Battery Charging] 10%

[Battery Charging] 13.33%

[Battery Charging] 16.67%

[Battery Charging] 20%

[Battery Charging] 23.33%

[Battery Charging] 26.67%

[Battery Charging] 30%

[Battery Charging] 33.33%

[Battery Charging] 36.67%

[Battery Charging] 40%

[Battery Charging] 43.33%

[Battery Charging] 46.67%

[Battery Charging] 50%

[Battery Charging] 53.33%

[Battery Charging] 56.67%

[Battery Charging] 60%

[Battery Charging] 63.33%

[Battery Charging] 66.67%

[Battery Charging] 70%

[Battery Charging] 73.33%

[Battery Charging] 76.67%

[Battery Charging] 80%

[Battery Charging] 83.33%

[Battery Charging] 86.67%

[Battery Charging] 90%

[Battery Charging] 93.33%

[Battery Charging] 96.67%

[Battery Charging] 100%

[Cleaning carpet floor] Cleaned Area: 31 mt sq, Charging Percentage:96.67%

[Cleaning carpet floor] Cleaned Area: 32 mt sq, Charging Percentage:93.33%

[Cleaning carpet floor] Cleaned Area: 33 mt sq, Charging Percentage:90%

[Cleaning carpet floor] Cleaned Area: 34 mt sq, Charging Percentage:86.67%

[Cleaning carpet floor] Cleaned Area: 35 mt sq, Charging Percentage:83.33%

[Cleaning carpet floor] Cleaned Area: 36 mt sq, Charging Percentage:80%

[Cleaning carpet floor] Cleaned Area: 37 mt sq, Charging Percentage:76.67%

[Cleaning carpet floor] Cleaned Area: 38 mt sq, Charging Percentage:73.33%

[Cleaning carpet floor] Cleaned Area: 39 mt sq, Charging Percentage:70%

[Cleaning carpet floor] Cleaned Area: 40 mt sq, Charging Percentage:66.67%

[Cleaning carpet floor] Cleaned Area: 41 mt sq, Charging Percentage:63.33%

[Cleaning carpet floor] Cleaned Area: 42 mt sq, Charging Percentage:60%

[Cleaning carpet floor] Cleaned Area: 43 mt sq, Charging Percentage:56.67%

[Cleaning carpet floor] Cleaned Area: 44 mt sq, Charging Percentage:53.33%

[Cleaning carpet floor] Cleaned Area: 45 mt sq, Charging Percentage:50%

[Cleaning carpet floor] Cleaned Area: 46 mt sq, Charging Percentage:46.67%

[Cleaning carpet floor] Cleaned Area: 47 mt sq, Charging Percentage:43.33%

[Cleaning carpet floor] Cleaned Area: 48 mt sq, Charging Percentage:40%

[Cleaning carpet floor] Cleaned Area: 49 mt sq, Charging Percentage:36.67%

[Cleaning carpet floor] Cleaned Area: 50 mt sq, Charging Percentage:33.33%

[Cleaning carpet floor] Cleaned Area: 51 mt sq, Charging Percentage:30%

[Cleaning carpet floor] Cleaned Area: 52 mt sq, Charging Percentage:26.67%

[Cleaning carpet floor] Cleaned Area: 53 mt sq, Charging Percentage:23.33%

[Cleaning carpet floor] Cleaned Area: 54 mt sq, Charging Percentage:20%

[Cleaning carpet floor] Cleaned Area: 55 mt sq, Charging Percentage:16.67%

[Cleaning carpet floor] Cleaned Area: 56 mt sq, Charging Percentage:13.33%

[Cleaning carpet floor] Cleaned Area: 57 mt sq, Charging Percentage:10%

[Cleaning carpet floor] Cleaned Area: 58 mt sq, Charging Percentage:6.67%

[Cleaning carpet floor] Cleaned Area: 59 mt sq, Charging Percentage:3.33%

[Cleaning carpet floor] Cleaned Area: 60 mt sq, Charging Percentage:0%

[Battery Charging] 3.33%

[Battery Charging] 6.67%

[Battery Charging] 10%

[Battery Charging] 13.33%

[Battery Charging] 16.67%

[Battery Charging] 20%

[Battery Charging] 23.33%

[Battery Charging] 26.67%

[Battery Charging] 30%

[Battery Charging] 33.33%

[Battery Charging] 36.67%

[Battery Charging] 40%

[Battery Charging] 43.33%

[Battery Charging] 46.67%

[Battery Charging] 50%

[Battery Charging] 53.33%

[Battery Charging] 56.67%

[Battery Charging] 60%

[Battery Charging] 63.33%

[Battery Charging] 66.67%

[Battery Charging] 70%

[Battery Charging] 73.33%

[Battery Charging] 76.67%

[Battery Charging] 80%

[Battery Charging] 83.33%

[Battery Charging] 86.67%

[Battery Charging] 90%

[Battery Charging] 93.33%

[Battery Charging] 96.67%

[Battery Charging] 100%

[Cleaning carpet floor] Cleaned Area: 61 mt sq, Charging Percentage:96.67%

[Cleaning carpet floor] Cleaned Area: 62 mt sq, Charging Percentage:93.33%

[Cleaning carpet floor] Cleaned Area: 63 mt sq, Charging Percentage:90%

[Cleaning carpet floor] Cleaned Area: 64 mt sq, Charging Percentage:86.67%

[Cleaning carpet floor] Cleaned Area: 65 mt sq, Charging Percentage:83.33%

[Cleaning carpet floor] Cleaned Area: 66 mt sq, Charging Percentage:80%

[Cleaning carpet floor] Cleaned Area: 67 mt sq, Charging Percentage:76.67%

[Cleaning carpet floor] Cleaned Area: 68 mt sq, Charging Percentage:73.33%

[Cleaning carpet floor] Cleaned Area: 69 mt sq, Charging Percentage:70%

[Cleaning carpet floor] Cleaned Area: 70 mt sq, Charging Percentage:66.67%


### Hard Floor
$ php src/Index.php --action=clean --floor=Hard --area=60

[Battery Charging] 3.33%

[Battery Charging] 6.67%

[Battery Charging] 10%

[Battery Charging] 13.33%

[Battery Charging] 16.67%

[Battery Charging] 20%

[Battery Charging] 23.33%

[Battery Charging] 26.67%

[Battery Charging] 30%

[Battery Charging] 33.33%

[Battery Charging] 36.67%

[Battery Charging] 40%

[Battery Charging] 43.33%

[Battery Charging] 46.67%

[Battery Charging] 50%

[Battery Charging] 53.33%

[Battery Charging] 56.67%

[Battery Charging] 60%

[Battery Charging] 63.33%

[Battery Charging] 66.67%

[Battery Charging] 70%

[Battery Charging] 73.33%

[Battery Charging] 76.67%

[Battery Charging] 80%

[Battery Charging] 83.33%

[Battery Charging] 86.67%

[Battery Charging] 90%

[Battery Charging] 93.33%

[Battery Charging] 96.67%

[Battery Charging] 100%

[Cleaning hard floor] Cleaned Area: 1 mt sq, Charging Percentage:98.33%

[Cleaning hard floor] Cleaned Area: 2 mt sq, Charging Percentage:96.67%

[Cleaning hard floor] Cleaned Area: 3 mt sq, Charging Percentage:95%

[Cleaning hard floor] Cleaned Area: 4 mt sq, Charging Percentage:93.33%

[Cleaning hard floor] Cleaned Area: 5 mt sq, Charging Percentage:91.67%

[Cleaning hard floor] Cleaned Area: 6 mt sq, Charging Percentage:90%

[Cleaning hard floor] Cleaned Area: 7 mt sq, Charging Percentage:88.33%

[Cleaning hard floor] Cleaned Area: 8 mt sq, Charging Percentage:86.67%

[Cleaning hard floor] Cleaned Area: 9 mt sq, Charging Percentage:85%

[Cleaning hard floor] Cleaned Area: 10 mt sq, Charging Percentage:83.33%

[Cleaning hard floor] Cleaned Area: 11 mt sq, Charging Percentage:81.67%

[Cleaning hard floor] Cleaned Area: 12 mt sq, Charging Percentage:80%

[Cleaning hard floor] Cleaned Area: 13 mt sq, Charging Percentage:78.33%

[Cleaning hard floor] Cleaned Area: 14 mt sq, Charging Percentage:76.67%

[Cleaning hard floor] Cleaned Area: 15 mt sq, Charging Percentage:75%

[Cleaning hard floor] Cleaned Area: 16 mt sq, Charging Percentage:73.33%

[Cleaning hard floor] Cleaned Area: 17 mt sq, Charging Percentage:71.67%

[Cleaning hard floor] Cleaned Area: 18 mt sq, Charging Percentage:70%

[Cleaning hard floor] Cleaned Area: 19 mt sq, Charging Percentage:68.33%

[Cleaning hard floor] Cleaned Area: 20 mt sq, Charging Percentage:66.67%

[Cleaning hard floor] Cleaned Area: 21 mt sq, Charging Percentage:65%

[Cleaning hard floor] Cleaned Area: 22 mt sq, Charging Percentage:63.33%

[Cleaning hard floor] Cleaned Area: 23 mt sq, Charging Percentage:61.67%

[Cleaning hard floor] Cleaned Area: 24 mt sq, Charging Percentage:60%

[Cleaning hard floor] Cleaned Area: 25 mt sq, Charging Percentage:58.33%

[Cleaning hard floor] Cleaned Area: 26 mt sq, Charging Percentage:56.67%

[Cleaning hard floor] Cleaned Area: 27 mt sq, Charging Percentage:55%

[Cleaning hard floor] Cleaned Area: 28 mt sq, Charging Percentage:53.33%

[Cleaning hard floor] Cleaned Area: 29 mt sq, Charging Percentage:51.67%

[Cleaning hard floor] Cleaned Area: 30 mt sq, Charging Percentage:50%

[Cleaning hard floor] Cleaned Area: 31 mt sq, Charging Percentage:48.33%

[Cleaning hard floor] Cleaned Area: 32 mt sq, Charging Percentage:46.67%

[Cleaning hard floor] Cleaned Area: 33 mt sq, Charging Percentage:45%

[Cleaning hard floor] Cleaned Area: 34 mt sq, Charging Percentage:43.33%

[Cleaning hard floor] Cleaned Area: 35 mt sq, Charging Percentage:41.67%

[Cleaning hard floor] Cleaned Area: 36 mt sq, Charging Percentage:40%

[Cleaning hard floor] Cleaned Area: 37 mt sq, Charging Percentage:38.33%

[Cleaning hard floor] Cleaned Area: 38 mt sq, Charging Percentage:36.67%

[Cleaning hard floor] Cleaned Area: 39 mt sq, Charging Percentage:35%

[Cleaning hard floor] Cleaned Area: 40 mt sq, Charging Percentage:33.33%

[Cleaning hard floor] Cleaned Area: 41 mt sq, Charging Percentage:31.67%

[Cleaning hard floor] Cleaned Area: 42 mt sq, Charging Percentage:30%

[Cleaning hard floor] Cleaned Area: 43 mt sq, Charging Percentage:28.33%

[Cleaning hard floor] Cleaned Area: 44 mt sq, Charging Percentage:26.67%

[Cleaning hard floor] Cleaned Area: 45 mt sq, Charging Percentage:25%

[Cleaning hard floor] Cleaned Area: 46 mt sq, Charging Percentage:23.33%

[Cleaning hard floor] Cleaned Area: 47 mt sq, Charging Percentage:21.67%

[Cleaning hard floor] Cleaned Area: 48 mt sq, Charging Percentage:20%

[Cleaning hard floor] Cleaned Area: 49 mt sq, Charging Percentage:18.33%

[Cleaning hard floor] Cleaned Area: 50 mt sq, Charging Percentage:16.67%

[Cleaning hard floor] Cleaned Area: 51 mt sq, Charging Percentage:15%

[Cleaning hard floor] Cleaned Area: 52 mt sq, Charging Percentage:13.33%

[Cleaning hard floor] Cleaned Area: 53 mt sq, Charging Percentage:11.67%

[Cleaning hard floor] Cleaned Area: 54 mt sq, Charging Percentage:10%

[Cleaning hard floor] Cleaned Area: 55 mt sq, Charging Percentage:8.33%

[Cleaning hard floor] Cleaned Area: 56 mt sq, Charging Percentage:6.67%

[Cleaning hard floor] Cleaned Area: 57 mt sq, Charging Percentage:5%

[Cleaning hard floor] Cleaned Area: 58 mt sq, Charging Percentage:3.33%

[Cleaning hard floor] Cleaned Area: 59 mt sq, Charging Percentage:1.67%

[Cleaning hard floor] Cleaned Area: 60 mt sq, Charging Percentage:0%


## Test Cases output
$ ./vendor/bin/phpunit tests

PHPUnit 7.5.20 by Sebastian Bergmann and contributors.

..........

Time: 24 ms, Memory: 4.00 MB

OK (10 tests, 10 assertions)
