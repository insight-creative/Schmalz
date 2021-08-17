# Schmalz Landscaping

WordPress website for Schmalz Landscaping

## Getting Started

This theme uses [WPGulp](https://github.com/ahmadawais/WPGulp) as a workflow processing tool. This boilerplate gets you set up very quickly with live reloading, hotloading styles, sass conversions, auto-prefixing and more.

Setup your local environment using [Local by Flywheel](https://localwp.com/) or whatever your preferred local development setup is. If accessible, download a backup of the site to migrate the current state of the site with your local development project.

Clone this repo into your new projects theme folder and simply npm install to install all the dev dependencies.

The current wpgulp.config is set to use the local dev url of http://schmalz-landscaping.local/. Update this here depending on on your project and your development URL. When ready to start working simply run npm start.

## File Structure

```
│   │
|   └──── /app              - A collection of files that all add functionality to our app
|   | acf                   - A few things to work with Advanced Custom Fields
|   | customizer            - Various configurations for content that is editable through the default WordPress customizer
|   | svg-icons             - svg icon files 
|   | acf-gutenblocks.php   - register our custom ACF gutenblocks
|   | hide-admin .php       - a test to obscure the default admin page
|   | limit-login.php       - limits the amount of login attempts that can be attempted 
|   | login-by-email.php    - disables the ability to login by username so login is by email only
|   | register-menus.php    - registers our themes menus 
│
|
└──── /assets               - js and scss files for our site
|   | css                   - this is where our minimized and compiled scss gets stored
|   | images                - very few images, any images stored here can get passed through Gulp's image processing
|
|
└──── /template-parts       - all our template parts that are used throughout various pages and page template files
|   | gutenblocks           - here is where all our custom ACF gutenblocks are defined
```

The above File Structure should give you a pretty good understanding of where everything is if/when changes are needed.

There are only a few custom page templates, otherwise page content mostly uses the default blocks editor. 

Note: If you are having trouble figuring out how to log in, navigate to the [custom login URL](https://schmalzlandscaping.com/wp-login.php?admin-login=true)