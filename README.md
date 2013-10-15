# Jyvioni-responsive-child-theme

Theme for jyvioni.org website. Based on responsive-theme by ThemeID http://themeid.com/responsive-theme/
This theme needs Responsive-theme as master theme to work.

## Plugins in use
* google-calendar-events
* wordpress (Facebook-plugin)
* wp-jquery-lightbox

### Facebook-plugin
There's Facebook-plugin in use (https://github.com/facebook/wordpress). With that you can post articles directly to Facebook-page.

## TODO

### Footer
* Maybe full sitemap (maybe not)

### Social share stuff
* Twitter (done)
* RSS (done)
* Google+ (?)
* Something...

### Design
* Site design is okay?

## Grunt
There's very basic grunt-file which have:

* watch for "src/"-files (.js and .styl)
* Stylus
* js-uglify

### Usage
While development (watch)
```
grunt
```

When you want production version of .js and .css -files
```
grunt build
```

## Updating theme on production server
Current web hosting provider doesn't support git, so we use GitHub's SVN access support to keep theme up-to-date on server.

### Checkout (needs to be done ONCE)
```
 $ cd wp-content/themes
 $ svn co --depth=empty https://github.com/0is1/jyvioni-responsive-child-theme _sources/jrct
 $ cd _sources/jrct
 $ svn up trunk
 $ cd ../..
 $ ln -s _sources/jrct/trunk jyvioni-responsive-child-theme
```

### Update files
Current webhost has script to ease update: (run in local terminal)
```
ssh -t jyvioni@jyvioni.org ./update-theme.sh
```

Longer way to achieve same results:
```
 $ cd wp-content/themes/_sources/jrct
 $ svn up
```


## Misc
* based on [Responsive](http://themeid.com/responsive-theme/) [WordPress theme](http://wordpress.org/extend/themes/responsive)
* likes [Google Calendar Events](http://wordpress.org/extend/plugins/google-calendar-events/) plugin [author](http://rhanney.co.uk/plugins/google-calendar-events/)
* uses some icons from [Iconic](http://somerandomdude.com/work/iconic/) [source](https://github.com/somerandomdude/Iconic)