# Hi Coolblue

I will log my actions in this file. My approach will be that I will create a symfony project to support this app. 
This way I don't need to this so much about input validation, routing, database connections, maybe templating or other stuff. 
The current application won't start on my machine so that needs some attention too.

After the app runs a bit in symfony then I will start by creating a Behat application test. I like to use behat BDD testing 
approach because it's more flexible than a Unit test driven approach.   

When behat is in place I can start on upgrading the database / improve the code.

There is only 2 hours available so I have to focus on many issues 😉.

The time starts at this commit.

Steps taken:
# move Symfony projectfiles into the project
# composer update
# composer require --dev symfony/maker-bundle
# symfony console make:controller
# composer require --dev friends-of-behat/symfony-extension -W
# mkdir -p tools/php-cs-fixer && composer require --working-dir=tools/php-cs-fixer friendsofphp/php-cs-fixer
# run behat: `vendor/bin/behat`

And back again for some more work. I have to do it while making a production release 😆 (version 5.0.0 😀). 
Had a call, I will finish up later

I now will continue to finish up this task. Only one hour left and much to do 😉. I will start changing the database to MariaDb. 
I have chosen this one because it's close to Mysql so upgrading won't be hard. I have to fix the behat tests to to run it in the docker setup.
I will have a look at the PHP classes afterwards and improve the thing a bit. I saw a security issue over there which needs my attention.

# Coolblue interview assignment

Welcome to the Coolblue interview assignment. 
Before you appears a small codebase, whose simple purpose it is to retrieve shopping cart information from a database and display it to the browser. As you can undoubtedly see this codebase has various issues:

* Incorrect separation of concerns
* Various SOLID-principles are not (correctly) adhered to
* No test coverage
* Not using external dependencies like a DI container, template engine, etcetera
* Relies on an older version of PHP

It's generally just not a very nice codebase, and we'd like to see it improved.

## The assignment

Your job in this assignment is to take some time and improve this codebase. You can do this in any way you like, and you can take it as far as you'd like. Rewrite chunks, unit test it first, use composer components, change the MySQL schema completely, or even use a framework and migrate it to that.

There's only 1 sure thing that we'd like to see you change: Currently there's a hard dependency in MySQL in the repository. We would like the possibility in the future to swap out the data store easily. You don't have to write a new adapter yet, just make it possible for us to easily swap implementations.

What we're mostly looking for is to see is what you chose to tackle and how you went about it. We'd appreciate it if you can make regular git commits during you working on the project, and to zip the .git folder with your handed in assignment, so we get a feel for the way in which you've worked and how you went about changing the application.

The aim is to spend approximately 2 hours on this assignment. If you didn't get to something in that time you'd still like to have tackled, feel free to add a readme file like this to your project with the next steps you would have done, given more time.

## Running the application
To get you started easily the codebase comes with a docker-compose setup. Provided you have docker installed, start the app with `docker-compose up`, after which you can access the "application" via `http://localhost:8080`. Alternatively you can run your own basic PHP server. All dependencies like PHP version and required extensions are specified in the composer.json file.

## Good luck!
