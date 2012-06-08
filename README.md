SIGCOMM2012
===========

Code for the ACM SIGCOMM 2012 website.

* `css`			CSS code, only edit style.css, the rest is from vendors
* `css/images`	jquerymobile CSS images
* `images`		our images
* `include`		PHP partials and code
* `js`			Javascript, only edit supporters2.js, the rest is from vendors
* `workshops`	workshop CFPs in various formats stuff


sigcomm.appcache
----------------

Here is how you generate content for `sigcomm.appcache`:

	find . -type f | sed -Ee 's/^\.\///g' | grep -Ev '^\.' | grep -Ev "^include" | grep -Ev "\.(docx?|pdf|txt|cls|md|DS_Store)|publish$"

You *must* also change the date inside `sigcomm.appcache`!


Checking for broken links
-------------------------

Run a local test server with `php -S 127.0.0.1:8000` and then run `linklint`:

    linklint -doc report -http -host 127.0.0.1:8000 /@
    
Checker results are in `report/index.html` afterwards.


Creating a minified version of the site
---------------------------------------

Will be generated in `output`. Better to publish this than the source files. Bash script in `publish`.