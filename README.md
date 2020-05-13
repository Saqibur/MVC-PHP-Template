# MVC-PHP-Template

### TODO
- Add admin functionality, with CRUD
- Add builder scripts
- DB Migrations (Not even sure if this is possible considering the tiny scope of the project.)
- Debuggin module

# What This Project Is
- A simple template for building MVC web applications.
- I use the term build loosely because outside of a classroom/learning environment everything about this project breaks down.
- By going through all the grunt work of building an MVC-app from the groundup, it's easy learn a lot about how better, bigger, and *actual* frameworks... well, work.
- Build and test CRUD apps quickly while learning MVC.
- Aimed at those who are just picking up PHP and want to work on a simple project.
- A simple admin panel
- DB migrations
- Debugging
- Easy deployment  (if dumb enough to do that.)

# What This Project Is Not
- A solid framework to build web applications.
- A proper introduction to MVC, PHP or Web Development Frameworks.
- Secure
- Reliable
- Pliable
- No ORM or authentication
- A solution to life's problems. PHP is horrible to code in so it's best to just keep away.


# An Improper Introduction to MVC
When dabbling with PHP for a few minutes and wanting to start working on a small application while also trying to learn a proper coding architecture, MVC is the only way to go. Not only is MVC incredibly simple to understand, it is also the foundation of several *actual* web development frameworks.

## What is MVC?
MVC stands for Model-View-Controller. Rather than dealing with a soupy mess of PHP, javascript, and HTML where the business logic muddles around with the UI designs, MVC chaperones everyone into their own playing fields and ensures that everyone does their job correctly, from their own designated positions.

So, in a normal MVC project, there are three key players:
1. The Models - The Cooks
2. The Controllers - The Waiters/Front-liners
3. The Views - The Meal

There's another important player, often ignored but is the most important in the team. The 
4. The Router - The bouncer


## Let's Start Making It
The first thing we're going to dive into is the Routes of the application.

# Project Directory
```
└───MVC-Template
    ├───Classes             # Holds core classes for the project.
    ├───Controllers         
    ├───Models              # Product views and urls
    ├───Resources           # Stuff all scripts, libraries, styles here.
    │   ├───Images
    │   ├───Scripts
    │   ├───css
    │   └───js
    ├───Router
    └───Views
```