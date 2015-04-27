Shapes
===========

Drupal module to get fun with shapes.

The modules tries to decouple the Drupal API from the logic regarding of the shapes. To achieve
that the logic was isolated into classes to make easier the testing and to make a more reusable
solution.

The philosophy of the solution is to provide an API to work with the shapes, using some of the most
common design patterns (Factory and Template), always trying to follow the IOC principle by injecting
the dependencies to the classes when possible.

##Features##

* Circle, Triangle and Donut provided.
* Support for custom shapes.

##Todo##
* Create an storage to give persistence to the data provided by the users.
    * Creating an entity to store the unique ID, shape, coordinates and weight.
    * A view to show the data
    * A view admin the data (DraggableViews?)
    * A panel using page manager existing pages to add the view with the results. 
* Create a drush make file to make the install easier. 
* Create tests for the AreaCalculators and the Formatters.
* Create negative functional tests.
* Replace functional tests for Behat.

You can run the unit tests with the following command:

    $ cd path/to/shapes/
    $ composer install
    $ phpunit
    
The Drupal test must be ran using simpletest (usually using the UI provided).

[![Build Status](https://travis-ci.org/lordoffreaks/shapes.svg)](https://travis-ci.org/lordoffreaks/shapes)