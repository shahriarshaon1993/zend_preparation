## Lesson 3.2 → PHPUnit Tutorial Part 2—Mocking

```text
    Covering in this lesson you will learn about Test Doubles, Stubs, and Mocking.
    as you know in unit tests we try not to resolve dependencies instead we try to
    replace the original classes with the test doubles or fake objects which can be
    done by mocking.
    
    Mocking: 
        Mocking simply allows us to fake dependencies of the method or a class that is
    being tested and swap the real class dependencies with the fake ones there are many
    examples where mocking can be really useful like mocking database related classes 
    models email and SMS sending services api calls and so on. 
    
    you wouldn't want to send out real SMS or email every time you run the test and because 
    apis can't be guaranteed to have hundred percent uptime tests would sometimes fails or
    sometimes pass depending when the api is reachable. because api can be unreachable or down
    for maintenance and so on.
```