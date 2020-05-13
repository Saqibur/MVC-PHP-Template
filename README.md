# IDK What to Call This Yet.
### Note to self: Make sure you change the 'RewriteBase /MVC-PHP-Template/public' for your project in .htaccess

## If you are reading this part of the README, you shouldn't be looking so far behind in the commit history, it's embarassing.

# What This Project Is
- A simple 'nano'-framework for building MVC web applications.
- I use the term build loosely because outside of a classroom/learning environment everything about this project breaks down.
- By going through all the grunt work of building your own MVC-app from the groundup, you will be able to learn a lot about how better, bigger, and *actual* frameworks... well, work.
- Build and test your CRUD apps quickly while learning MVC.
- Aimed at those who are just picking up PHP and want to work on a simple project.
- A simple admin panel should suffice for you versus the default MySQL panel or whatever DB you are using.
- DB miagrations for everyone because who does not love that.
- Finally some inhouse basic php debugging which is just a bunch of print statements. Bravo.

# What This Project Is Not
- A solid framework to build web applications.
- A proper introduction to MVC, PHP or Web Development Frameworks.
- Secure
- Reliable
- Pliable
- You will not find ORMs, Authentication or other shenanigans here.
- A solution to your problems. PHP is horrible to code in so it's best to just keep away.


# An Improper Introduction to MVC
If you've been dabbling with PHP for a few minutes and want to start wokring on a small application while also trying to learn a proper coding architecture, MVC is the only way to go. Not only is MVC incredibly simple to understand, it is also the foundation of several *actual* web development frameworks. So **in essence**  if you learn MVC once, you're good to go. The reality of it is a bit different but let's not dive into it right now.

## What is MVC?
MVC stands for Model-View-Controller. Rather than dealing with a soupy mess of PHP, javascript, and HTML where you have your business logic muddling around with your UI designs, MVC chaperones everyone into their own playing fields and ensures that everyone does their job correctly, from their own designated positions.

So, in a normal MVC project, you'll have three key players:
1. The Models - Your Cooks
2. The Controllers - Your Cooks
3. The Views - The Meal

There's another important player, often ignored but is the most important in the team. The 
4. Route


## Let's Start Making It
The first thing we're going to dive into is the Routes of your application.


# Project Directory
```
└───botsuite
    ├───faqbotsuite         # Has all the core components of the application. settings.py
    ├───homepage            # Homepage views and urls, that is, all products.
    ├───product             # Product views and urls
    ├───statics
    │   ├───css
    │   ├───fonts
    │   ├───images
    │   ├───js
    │   ├───mdbootstrap
    │   └───scripts
    └───templates           # All the templates
```