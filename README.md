# Simple-MVC-PHP-Template

## What This Project Is
- A light-weight template for building basic MVC web applications. A skeleton I use often.
- Can be used to make classroom projects/prototypes.
- Helps solidify MVC concepts without hand-holding all the way through.
- Build and test CRUD apps quickly while maintaining an MVC structure.
- Comes with pre-built error pages for easy debugging. **TODO**

## What This Project Is Not
- A solid framework to build web applications. This is just a template and is not pretending to be a framework.
- A proper introduction to MVC, PHP or Web development frameworks like Laravel/Code Igniter.
- Secure
- Reliable
- A solution to life's problems.

## Project Directory
```
└───MVC-Template            # Rename this folder to fit your needs.
    ├───Classes             # Holds core classes for the project.
    ├───Controllers         
    ├───Models              # Product views and urls
    ├───Resources           # Stuff all scripts, libraries, styles here.
    │   ├───img
    │   ├───scripts
    │   ├───css
    │   └───js
    ├───Router              # Require in any php routes you create.
    └───Views
```

### Usage
1. Clone this repository into your xampp/htdocs
2. Rename the folder to your own project
3. Delete all the files you don't need, like
- License
- .git
- README.md
4. Start building the web app by extending the controllers, implementing the models and designing the views.
5. You can configure the name of your DataBase and all related behavior from DataAccess.php.

Sample Project: [Gakkou-Online-Learning](https://github.com/Saqibur/Gakkou-Online-Learning)


### Features
- Light-weight MVC skeleton.
- Multi-level routing.
- Easy modularization.
- Bootstrapping.
- Basic session management.
- Configurable DataAccess, designed to work with SQLite3, but can be extended to MySql, PostGreSQL, etc. Lookup how to configure each DB provider online.
- No dependencies - everything *should* work right away.
- Remember to enable sqlite3 in your php.ino file if you do use SQLite3.



### TODO
- Debugging/Error Pages.
- Basic CLI for basic functions.
- Need a test/error delivery area.
- Need to define the admin panel and stuff.
- Serve for testing.
- Clean command to get rid of all non-essentials.
- Help
- File watching / Auto-reload ???
- Error 404 / Catch-all for invalid routes.
- Basic/Example/Starter code with explanations.
