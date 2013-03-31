# Jyvioni-responsive-child-theme

Theme for jyvioni.org website. Based on responsive-theme by ThemeID http://themeid.com/responsive-theme/
This theme needs Responsive-theme as master theme to work.

## Plugins in use
* flexible-posts-widget-jyvioni (https://github.com/0is1/flexible-posts-widget-jyvioni)
  * Little "ad hoc" mod of flexible-posts-widget
* google-calendar-events
* wordpress (Facebook-plugin)
* wp-jquery-lightbox

### Facebook-plugin
There's Facebook-plugin in use (https://github.com/facebook/wordpress). With that you can post articles directly to Facebook-page.

## TODO

### Google Calendar
* Show event details as tooltip on :hover

### "Liity jäseneksi" -image
* Redesign
* Reposition

### Footer
* ViNO- and KSV-logos
* Short description about Jyvioni
* Maybe full sitemap

### Social share stuff
* Twitter
* Google+ (?)
* Something...

### Design
* Site design is still work in progress


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
```
 $ cd wp-content/themes/_sources/jrct
 $ svn up
```

### Switch source (use another GitHub repo as source)
```
 $ cd wp-content/themes/_sources/jrct
 $ svn switch --relocate `svn info |grep ^URL: |cut -d" " -f2` https://github.com/new/repo_url
 $ svn up
```

## Misc
* based on [Responsive](http://themeid.com/responsive-theme/) [WordPress theme](http://wordpress.org/extend/themes/responsive)
* likes [Google Calendar Events](http://wordpress.org/extend/plugins/google-calendar-events/) plugin [author](http://rhanney.co.uk/plugins/google-calendar-events/)
* uses some icons from [Iconic](http://somerandomdude.com/work/iconic/) [source](https://github.com/somerandomdude/Iconic)