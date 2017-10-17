# Starter

Starter is a collection of modules, demos, build-tools, and (hopefully) best practices created and used by [The Outfit](https://theout.fit/) for some of the projects we build.

* [Contributing](https://github.com/fromtheoutfit/starter/blob/master/_docs/starter/contributing.md)
* [License](https://github.com/fromtheoutfit/starter/blob/master/_docs/starter/license.txt)

## Prerequisites

* [**Node.js**](https://nodejs.org/), though you _may_ already have it installed. To check, open your  terminal application and run `node --v`. If it returns a version number, you’re all set.
* **A local server.** We currently use and recommend [Laravel Homestead](https://laravel.com/docs/5.5/homestead), but something as simple as [MAMP/WAMP](https://www.mamp.info/) will work.

## Installation

1. **Get the code:**
    * Clone the repository: `git clone https://github.com/fromtheoutfit/starter.git`
    * or, [download it as a .zip file](https://github.com/fromtheoutfit/starter/archive/master.zip).
2. **Install dependencies:** Navigate to the directory containing the code and run `npm install`

When the above is complete, you’ll need to make some project-specific adjustments…

## Adjustments

### Set the URL

Your local server, while running, will make a particular URL available on your computer. Whatever that URL is – _check your local server’s documentation to figure it out_ – you need to tell Starter’s build-tools what it is:

* In /webpack.mix.js, go to [line #26](https://github.com/fromtheoutfit/starter/blob/master/webpack.mix.js#L26) and change the `proxy` value _from_ starter.dev to the URL your local server makes available.

_Note: if you are using Laravel Homestead, refer to these two resources:_

* Configuring Homestead: https://laravel.com/docs/5.5/homestead#configuring-homestead
* …and our own internal version of the above information: https://gist.github.com/marcamos/415df7891d98eef0e5bc18120e3d80bb

### Specify files to watch

While [developing](#start-developing), Starter’s build-tools will auto-refresh your open web browser(s) when any files you specify are changed and saved. To specify which files get this attention – _"watched"_ – update [lines 34 - 36 in /webpack.mix.js](https://github.com/fromtheoutfit/starter/blob/master/webpack.mix.js#L34-L36).

## Usage

The build-tools that come with Starter have various scripts you can run, two of which are typically used most often:

### Start developing

When it’s time to write some code, follow these steps:

1. Start up your local server
2. Navigate to the directory containing this project
3. Run `npm run watch`

This will launch a web browser that will auto-update every time you save a [watched file](#specify-files-to-watch), thanks to the included [Browsersync](https://www.browsersync.io/) package.

### Stop developing

When you’re done writing code:

1. In the terminal application where the watcher is running, type `control + c` to stop the watcher
2. Shut down your local server

_Note: at this point, the code **is not** ready for [production](#prepare-for-production)…_

### Prepare for production

1. If you’re not already there, navigate to the directory containing this project
2. Run `npm run production`

This will recompile and minify the JavaScript and CSS, making the codebase ready for production use.
