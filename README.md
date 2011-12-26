# Welcome to Mercury!

## Table of Contents

1. Installation
2. Configuration
3. Usage

### Installation

To install Mercury, simply unzip it into your folder.

To uninstall Mercury, simply delete the folder you unzipped and remove
all references to it in your source files.

### Configuration

Now before you can get it working, you'll have to change some configuration
options.  You'll need to:

* Specify your directory separator
* Name your site

#### Specifying your directory separator

Your directory separator will be different depending on the OS of the
server you're going to be running Mercury on.

##### If your server runs Windows:

Go into **config.php** and change:

```define('DS', 'DIRECTORY_SEPARATOR');```

to

```define('DS', '\\');```

##### If your server runs *nix, including OSX:

Go into **config/config.php** and change:

```define('DS', 'DIRECTORY_SEPARATOR');```

to

```define('DS', '/');```

#### Naming your site

Now it's time to name your site - a very important occasion indeed!

Let's say you want to name your blog something like, "CLVF".  To do so,
go into **config/config.php** and change:

```define('SITE_TITLE', '[YOUR SITE TITLE]');```

to

```define('SITE_TITLE', 'CLVF');```

Congratulations!  You've just named your site "CLVF"!  Now you'll be able
to access your site's title from Mercury.

### Usage

Now that you've hopefully configured Mercury correctly, it's time to implement it.

To use Mercury, you must do two (2) things:

1. Include **Mercury.php** at the top of your source file.
2. Load whatever classes you need and instantiate them.

#### Including *Mercury.php*

To include **Mercury.php** in your file, add the following line inside of
your opening PHP tags:

```require 'Mercury.php';```

#### Loading a class

To load a class, simply insert the following line after you've included
**Mercury.php** in your file:

```load('[Filename of class to load]');```

## Volia!  You're now ready to use Mercury in your project!  Happy coding!
