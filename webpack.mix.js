const mix = require('laravel-mix');
const electron = require('electron');
const url = require('url');
const path = require('path');

const {app, BrowserWindow} = electron;

let mainWindow;


app.on('ready', function(){
   mainWindow = new BrowserWindow({});

   mainWindow.loadURL('http://localhost:8000');
});
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

/*mix.react('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');*/


