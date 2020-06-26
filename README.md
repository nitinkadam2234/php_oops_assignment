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

## Dependencies
- PHP: 7.2
- PHPUnit 7.5

## Installation Steps
- Clone the repository
- Run `$ composer install` command
- Run the application

## Steps to run the application

### Hard Floor
$ php index.php --action=clean --floor=Hard --area=70

[Battery Charging] 3.33%

.....

[Battery Charging] 100%

[Cleaning hard floor] Cleaned Area: 1 mt sq, Charging Percentage: 98.33%

.....

[Cleaning hard floor] Cleaned Area: 60 mt sq, Charging Percentage: 0%

[Battery Charging] 3.33%

.....

[Battery Charging] 100%

[Cleaning hard floor] Cleaned Area: 61 mt sq, Charging Percentage: 98.33%

.....

[Cleaning hard floor] Cleaned Area: 70 mt sq, Charging Percentage: 83.33%


### Carpet Floor
$ php index.php --action=clean --floor=Carpet --area=60

[Battery Charging] 3.33%

.....

[Battery Charging] 100%

[Cleaning carpet floor] Cleaned Area: 1 mt sq, Charging Percentage: 96.67%

......

[Cleaning carpet floor] Cleaned Area: 30 mt sq, Charging Percentage: 0%

[Battery Charging] 3.33%

.....

[Battery Charging] 100%

[Cleaning carpet floor] Cleaned Area: 31 mt sq, Charging Percentage: 96.67%

.....

[Cleaning carpet floor] Cleaned Area: 60 mt sq, Charging Percentage: 0%


## Test Cases output
$ ./vendor/bin/phpunit tests

PHPUnit 7.5.20 by Sebastian Bergmann and contributors.

..........

Time: 24 ms, Memory: 4.00 MB

OK (10 tests, 10 assertions)
