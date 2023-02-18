# Quick guide to start with this example

We have used to configure this environment:
* IntelliJ
* JDK 18

From the terminal you can use the following commands to start:
1. Execute the unit tests
``` bash
    .\gradlew test    
```
2. Execute cucumber tests
```
    .\gradlew cucumber
```
If everything has gone well you can open your IDE.

## Using IntelliJ IDEA
* Open IntelliJ and close the projects (if you have an open project)
* Open the folder "bdd_kotlin_base"
* Configure the JDK in the IDE. You will need JDK 18 (File->Project structure->SDK)
* Open Run-> Edit configurations-> + -> gradle
    * write as parameters "clean test"
    * Select the folder bdd_kotlin_base
    * Use the name for example: Unit tests
* Run the Unit test configuration. Everything should be ok
* Open Run-> Edit configurations-> + -> gradle
  * write as parameters "cucumber"
  * Select the folder bdd_kotlin_base
  * Use the name for example: Cucumber Tests
* Run the Cucumber tests configuration. Everything should be ok
* Install the plugin "Cucumber for Kotlin"
* 


