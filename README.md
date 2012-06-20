SIGCOMM2012
===========

Code for the ACM SIGCOMM 2012 website. You are welcome to reuse and adapt this code for your conference. We ask that you acknowledge "ACM SIGCOMM 2012" as the source. We also ask that you share any improvements to this code openly. The best way to do so is to fork our github repository at https://github.com/ryanrhymes/SIGCOMM2012

What's in the various subdirectories:

* `css`			CSS code, only edit style.css, the rest is from vendors
* `css/images`	jquerymobile CSS images
* `images`		our images
* `include`		PHP partials and code
* `js`			Javascript, only edit supporters2.js, the rest is from vendors
* `workshops`	workshop CFPs in various formats stuff

This site uses a bunch of open javascript libraries. You will want to use their latest versions:

* http://jquery.com/ - the javascript goes into `js`
* http://jquerymobile.com/ - the javascript goes into `js` and the CSS and images go into `css`
* http://jquerymobile.com/demos/1.1.0/docs/_assets/css/jqm-docs.css - the CSS for the jquerymobile documentation page, goes into CSS
* http://code.google.com/p/css3-mediaqueries-js/ - the javascript goes into `js`


Cache manifest for offline usage
--------------------------------

Here is how you generate content for `sigcomm.appcache`, which is the cache manifest that makes the page usable when offline:

	find . -type f | sed -Ee 's/^\.\///g' | grep -Ev '^\.' | grep -Ev "^include" | grep -Ev "(\.(docx?|pdf|txt|cls|md|DS_Store))|publish"

Run this whenever you add resources to the page. You *must* also change the date inside `sigcomm.appcache` whenever you change the content on *any* page!

(The `publish` script does this automatically. It should also create the whole thing on the fly, but it doesn't yet.)


Creating a minified version of the site
---------------------------------------

Better to publish this minimized version than the source files. Bash script in `publish`.

In order to save time, this script does *not* run the images through `optipng`, `jpegtran` and the like. You should do this when you add the images to the repository.


Checking for broken links
-------------------------

Run a local test server with `php -S 127.0.0.1:8000` and then run `linklint`:

    linklint -doc report -http -host 127.0.0.1:8000 /@
    
Checker results are in `report/index.html` afterwards.
