## Notes

1. First challenge is scope. I quickly realised that there are alot of features that Instagram provides. I'm just trying to implement everything I see in the UI. We probably want to be more restrictive with our spec.
2. We should provide a UI mock-up of each page. It should probably not be fully styled to give people the opportunity to do things their way.
   1. Consider providing a set of icons so users don't need to use font-awesome etc. 
3. The choice of API between front and back-end may be too complex for new developers. We should suggest using Blade + Vue enhancements as the baseline. People can go SPA if they wish.
4. Layout can be quite complex. Is tailwind acceptable or does it need to be pure CSS?

## Course Structure

1. Introduction to Onramp
    1. How Onramp works.
    1. What you'll need (IDE/Editor)...
1. Build a basic web site
   1. Understand and write HTML
   1. Understand and write CSS
   1. Understand and use tailwind.

1. Set-up a local PHP development environment
    1. Learn to use the terminal.
    1. Install PHP
        - move basic HTML/CSS into php templates.
        - serve site with built in php server.
    1. Understand and use core Git concepts.
        - make some changes an commit them.
        - setup a Github account.
1. Make Famligram dynamic with PHP.
    1. Learn PHP Basics (variables, arrays, control structures etc.)
        - add some dynamic aspects to Famligram in the php templates.
    1. Persist data in the database.
    1. Learn Object-Oriented Programming in PHP
        - refactor arrays to Classes.
        - refactor database stuff to Classes.
        - **note:** think of appropriate classes/methods for the Famligram app.
1. Laravel Basics
    1. Install: Compoposer, Laravel installer and Valet.
        - Migrate work so far into Laravel.

    1.  Database migrations and Eloquent
        - create models and migrations.
    1. Laravel Mix
1. Basic JavaScript
1. Basic session-backed internal APIs
1. Deployments
1. Monitoring (e.g. Bugsnag)
1. Basic Testing
