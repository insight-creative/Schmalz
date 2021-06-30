# How to use the assets folder

The resources folder expects you to be running npm start so it can compile all changes.
NPM will compile the changes and run sass, js concatenation and much more.

## css

Here you will find your compiled main.css file. This will hold all our primary site styles that are compiled from the scss folder.

## images

Add images to the raw folder to have them optimized when you run WPGulp. Optimized images will then automatically be generated into the root images folder.

## js

You can add scripts a few ways.

### custom Folder

You can write scripts inside js/custom and it will automatically be compiled and built into the custom.js file which has been enqueued for you in functions.php.

### vendor Folder

Typically this will be where you want to add any third party plugins or scripts. Add them here to keep them separate from your custom JS. And files added here will automatically be concatenated into vendor.js which is already enqueued in our functions.php file

## scss

In the scss folder, most if not all of your styling should take place here. All scss files get compiled into main.css which is already set up in our functions.php. If you need to make quick edits to a site after it is live feel free to use the style.css

### core Folder

The primary file you will need in here is variables.scss.

### elements Folder

Here is where you can add all your elements. Any styles for items you might add to the site. Items that are not specific to a post type nor a block will go in here.

### global Folder

Here is where you will add and change anything that appears globally across the site. Typography, default look for headers, footers and the sidebars. The GUI of the main site parts should be in here.

### libs Folder

you can add css libraries here so that when you add some plugin and it comes with css you can put it in here and bundle it with the theme css.

### wordpress Folder

This folder holds all the wordpress specific styles for default blocks and stuff. Here you can edit how comments look or how default blocks are styled.
