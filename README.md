Mark Bain Design Boilerplate for HTML Projects 2015
===

By Mark Bain Design
---

Setup
---
* Open project directory in terminal and run `npm install` to install all grunt plugins
* Run `bower install` to download Bower components (and their dependencies) as listed in bower.js.
* Run `grunt copybower`to copy assets from bower_components to the assets folder.

Usage
---
* Run `grunt` to execute default tasks

Optimisation/Versioning
----
To create a fully-optimised, versioned copy of your project:

* Run `grunt rc-fix` to create a patch version
* Run `grunt rc-min` to create a minor version
* Run `grunt rc-maj` to create a major versionç

Distribution
----
* Run `grunt dist` to zip the latest RC archive for upload to you server. 
