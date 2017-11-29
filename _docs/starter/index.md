# Starter

Starter is a collection of modules, demos, build-tools, and (hopefully) best practices created and used by [The Outfit](https://theout.fit/) for some of the projects we build.

* [Contributing](https://github.com/fromtheoutfit/starter/blob/master/_docs/starter/contributing.md)
* [License](https://github.com/fromtheoutfit/starter/blob/master/_docs/starter/license.txt)

## Prerequisites

* [**Node.js**](https://nodejs.org/), though you _may_ already have it installed. To check, open your  terminal application and run `node --v`. If it returns a version number, you’re all set; if it doesn’t, go to [nodejs.org](https://nodejs.org/) to download and install it.
* **A local server.** We currently use and recommend [Laravel Homestead](https://laravel.com/docs/5.5/homestead), but something as simple as [MAMP/WAMP](https://www.mamp.info/) will work.

## Installation

1. **Get the code by doing *one* of the following:**
    * Clone the repository: `git clone https://github.com/fromtheoutfit/starter.git`
    * or, [download it as a .zip file](https://github.com/fromtheoutfit/starter/archive/master.zip).
2. **Install dependencies:** Navigate to the directory containing the code and run `npm install` to install [the packages that Starter relies on](https://github.com/fromtheoutfit/starter/blob/master/package.json).

## Adjustments

After completing the [installation](#installation), make the following adjustments:

### Set the local URL

Your local server, while running, will make a particular URL available on your computer. Whatever that URL is – _check your local server’s documentation to figure it out_ – you need to tell Starter about it:

* In /webpack.mix.js, go to [line #6](https://github.com/fromtheoutfit/starter/blob/master/webpack.mix.js#L6) and change the `localUrl` value from _starter.dev_ to the URL your local server makes available.

> Note: if you are using Laravel Homestead, refer to these two resources:
> 
> * Configuring Homestead: https://laravel.com/docs/5.5/homestead#configuring-homestead
> * …and our own internal version of the above information: https://gist.github.com/marcamos/415df7891d98eef0e5bc18120e3d80bb

### Specify files to watch

While you’re [developing](#start-developing-watch-script), Starter’s build-tools will watch specific files and, when any of them are changed and saved, auto-refresh your open web browser(s). To specify which files get watched, update [lines 12 - 14](https://github.com/fromtheoutfit/starter/blob/master/webpack.mix.js#L12-L14) in /webpack.mix.js.

## Usage

The build-tools that come with Starter have [various scripts you can run](https://github.com/fromtheoutfit/starter/blob/master/package.json#L17), two of which are typically used most often:

### Start developing (`watch` script)

When it’s time to write some code, follow these steps:

1. Start up your local server
2. Navigate to the directory containing this project
3. Run `npm run watch`

This will launch a web browser that will auto-update every time you save a [watched file](#specify-files-to-watch), thanks to the included [Browsersync](https://www.browsersync.io/) package.

### Stop developing

When you’re done writing code:

1. In the terminal application where the watcher is running, type `control + c` to stop the watcher
2. Shut down your local server

_Note: at this point, the code **is not** ready for [production](#prepare-for-production-production-script)…_

### Prepare for production (`production` script)

1. If you’re not already there, navigate to the directory containing this project
2. Run `npm run production`

This will recompile and minify the JavaScript and CSS, making the codebase ready for production use.

## Demos

With your local server running, visit [your local url]/_demos/ to see a handful of demos:

* modules
* layout/grid examples
* form controls
* etc.

Our goal is to add more demos as time allows.

## Thanks

Starter is built on the work of many other projects, and we’re incredibly grateful to all of the people who pour hours into them:

* [Node](https://github.com/nodejs/node)
* [Laravel Mix](https://github.com/JeffreyWay/laravel-mix)
* [Browsersync](https://github.com/BrowserSync/browser-sync)
* [Ally.js](https://github.com/medialize/ally.js)
* [ESLint](https://github.com/eslint/eslint)
