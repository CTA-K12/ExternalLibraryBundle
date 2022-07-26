ExternalLibraryBundle
=====================

Asset management bundle for libraries not maintained by MESD.

Version: `0.0.1`

Author: Curtis Hanson <chanson@mesd.k12.or.us>

> Three assets for the Elven-kings under the sky,
> Seven for the Dwarf-lords in their halls of stone,
> Nine for Mortal Men doomed to die,
> One for the Dark Lord on his dark throne
> In the Land of Mordor where the Shadows lie.
> One Bundle to rule them all, One Bundle to find them,
> One Bundle to bring them all and in the darkness bind them
> In the Land of Mordor where the Shadows lie.

What Is It?
-----------

The External Library Bundle is an asset manager helper.
Storing all the libraries of code not maintained by MESD developers in one
bundle separates proprietary and open-source code. It also mitigates the impact
of duplicate assets being compiled when multiple bundles use the same library.

How Does It Work?
-----------------

Simple. Using preexisting features of Assetic and a few libraries from NodeJs,
we have a single bundle to hold all the files for external libraries.

Prerequisites
-------------

If you are participating and actively maintaining the bundle, you will need:

* node js
* node package manager
* bower
* grunt

If you are not actively maintaining the bundle but just using its features,
you will not need any additional libraries.

TODO: This will change because I do not want to have the actual libraries in
our code base. The should be a script that builds the libraries when the bundle
is installed into a local project.

Installation
------------

Configuration
-------------

Modify your `app/config.yml` file:

```php
imports:
    ...
    - { resource: assetic.yml }
```

Create a new file in your `app/config` folder called `assetic.yml` and move your
existing assetic code into it. In addition add the following lines:

```php
# Assetic Configuration
assetic:
    ...
    assets:
        jquery:
            inputs:
                - '@MesdExternalLibraryBundle/Resources/public/bower_components/jquery/dist/jquery.js'
            options:
                version:    2.1.1
                updated_at: 2014-08-22
                updated_by: chanson@mesd.k12.or.us
        jqueryui:
            inputs:
               - '@MesdExternalLibraryBundle/Resources/public/bower_components/jquery.ui/dist/jquery-ui.js'
            options:
                version:    1.11.1
                updated_at: 2014-08-25
                updated_by: chanson@mesd.k12.or.us
```

Usage
-----

Make sure you have npm, bower, and grunt installed
```bash
    sudo dnf install npm -y
    sudo npm install -g bower
    sudo npm install -g grunt
```

```bash
    cd src/Mesd/ExternalLibraryBundle/Resources/public
    bower install
    cd bower_components/jquery.ui
    npm install
    grunt concat
```

Troubleshooting
---------------

Contributing
------------

See the [CONTRIBUTING.md](CONTRIBUTING.md) file for more information.

Changelog
---------

 * `0.0.1` (29-08-2014) Initial commit

See the [CHANGELOG.md](CHANGELOG.md) file for more information.

License
-------

See the [LICENSE.md](LICENSE.md) file for more information.
