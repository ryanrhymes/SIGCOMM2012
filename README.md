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

	find . -type f | sed -Ee 's/^\.\///g' | grep -Ev '^\.' | grep -Ev "^include" | grep -Ev "\.(docx?|pdf|txt|cls)$"

You *must* also change the date inside `sigcomm.appcache`!


Checking for broken links
-------------------------

Run a local test server with `php -S 127.0.0.1:8000` and then run `linklint`:

    linklint -doc report -http -host 127.0.0.1:8000 /@
    
Checker results are in `report/index.html` afterwards.


Creating a minified version of the site
---------------------------------------

Will be generated in `output`. Better to publish this than the source files.

    #! /usr/bin/env bash

    out=output
    rm -rf $out
    
    find . -print0 | while read -d $'\0' item
    do
      if [[ $item == ./.* ]]; then
    	# nothing to do
      	continue
      	
      elif [ -d $item ]; then
        # make the directory
        echo mkdir $item
      	mkdir -p $out/$item
      	
      elif [[ $item == *.php || $item == *.htm || $item == *.html ]]; then
    	# compress
    	echo htmlcompressor $item
      	htmlcompressor --preserve-php --remove-intertag-spaces --remove-quotes --simple-doctype --remove-style-attr --remove-link-attr --remove-script-attr --remove-form-attr --remove-input-attr --simple-bool-attr --remove-js-protocol  --remove-http-protocol --remove-surrounding-spaces max --compress-js --compress-css --js-compressor closure -t html -o $out/$(dirname $item)/ $item
      	
      elif [[ $item == *.js ]]; then
    	# compress
    	echo closure $item
    	closure --warning_level QUIET --js_output_file $out/$item $item
    	
      elif [[ $item == *.css ]]; then
    	# compress
    	echo yuicompressor $item
    	yuicompressor -o $out/$item $item
    
      # images are run through optipng and jpegtran when under git, no need to re-optimize here
    
      else
      	# simply copy
      	echo cp $item
        cp $item $out/$item
      fi
    done
