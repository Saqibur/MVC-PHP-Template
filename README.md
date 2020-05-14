# MVC-PHP-Template

### Usage
- Clone the project
- Rename the folder
- Start building the web app by extending the controllers, implementing the models and designing the views.

### TODO
- Add admin functionality, with CRUD
- Add builder scripts
- DB Migrations (Not even sure if this is possible considering the tiny scope of the project.)
- Debuggin module
- Need to make docs


### Defining the Project Scope
- I need to implement a basic CLI, without any dependencies, this CLI should allow easy configuration.
- Need a test/error delivery area. [Should implement a comamnd for this.]
- Need to define the admin panel and stuff. [Should implement a command for this.]
- Serve for testing [I need to raise exceptions from the CLI.]
- Clean command to get rid of all non-essentials.
- Help
- File watching ??? no thx


# What This Project Is
- A simple template for building MVC web applications.
- I use the term build loosely because outside of a classroom/learning environment everything about this project breaks down.
- By going through all the grunt work of building an MVC-app from the groundup, it's easy learn a lot about how better, bigger, and *actual* frameworks... well, work.
- Build and test CRUD apps quickly while learning MVC.
- Aimed at those who are just picking up PHP and want to work on a simple project.
- A simple admin panel
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