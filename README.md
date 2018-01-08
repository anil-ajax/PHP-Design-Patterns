# PHP-Design-Patterns

## Factory
There are two benefits of factory pattern:
1)	First is that if you need to change, rename, or replace the Car class later on you can do so and you will only have to modify the code in the factory, instead of every place in your project that uses the Car class. 
2)	Second benefit is that while creating the object is a complicated job you can do all of the work in the factory, instead of repeating it every time you want to create a new instance.

Refer to Factory.php to understand basic working.

## Strategy
Using Strategy pattern we encapsulate specific families of algorithms allowing the client class responsible for instantiating a particular algorithm without any knowledge of actual implementation. Refer to Strategy.php to understand basic working.
