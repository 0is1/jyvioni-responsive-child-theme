/*!
 * Jyvioni-2013-WP-theme Gruntfile
 * http://jyvioni.org
 * @author Janne Saarela
 */

'use strict';

module.exports = function(grunt) {

  require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    /**
     * Set project info
     */
    project: {
      src: 'src',
      app: '',
      css: [
        '<%= project.src %>/master.styl'
      ],
      js: [
        'src/*.js'
      ],
      theme_name: "Jyvioni-2013",
      template: "responsive"
    },

    /**
     * Project banner
     * Dynamically appended to CSS/JS files
     * Inherits text from package.json
     */
    tag: {
      banner: '/*!\n' +
              ' * <%= pkg.name %>\n' +
              ' * <%= pkg.url %>\n' +
              ' * @author <%= pkg.author %>\n' +
              ' * @version <%= pkg.version %>\n' +
              ' * Copyright <%= pkg.copyright %>. <%= pkg.license %> licensed.\n' +
              ' */\n',
      css:    '/*\n' +
              ' * Theme Name: <%= project.theme_name %>\n' +
              ' * Description: Child theme for Travelify\n' +
              ' * Theme URI: <%= pkg.url %>\n' +
              ' * Author: <%= pkg.author %>\n' +
              ' * Template: <%= project.template %>\n' +
              ' * Version <%= pkg.version %>\n' +
              ' * Copyright <%= pkg.copyright %>. <%= pkg.license %>licensed.' +
              ' */\n\n'
    },
    /**
     * Concatenate JavaScript files
     * https://github.com/gruntjs/grunt-contrib-concat
     * Imports all .js files and appends project banner
     */
    concat: {
      dev: {
        files: {
          'js/main.min.js': '<%= project.js %>'
        }
      },
      options: {
        stripBanners: true,
        nonull: true,
        banner: '<%= tag.banner %>'
      }
    },
    /**
     * Uglify (minify) JavaScript files
     * https://github.com/gruntjs/grunt-contrib-uglify
     * Compresses and minifies all JavaScript files into one
     */
    uglify: {
      options: {
        banner: '<%= tag.banner %>'
      },
      build: {
        src: '<%= project.src %>/main.js',
        dest: 'js/main.min.js'
      }
    },
    stylus: {
      compile_dev: {
        options: {
          paths: ['.'],
          compress: false,
          // linenos: true,
          import: ['nib'],
          urlfunc: 'embedurl', // use embedurl('test.png') in our code to trigger Data URI embedding
          banner: '<%= tag.css %>',
          // use: [
          //   require('fluidity') // use stylus plugin at compile time
          // ]//,
          // import: [      //  @import 'foo', 'bar/moo', etc. into every .styl file
          //   'foo',       //  that is compiled. These might be findable based on values you gave
          //   'bar/moo'    //  to `paths`, or a plugin you added under `use`
          // ]
        },
        files: {
          'style.css': ['<%= project.src %>/master.styl'] // 1:1 compile
        }
      },
      compile: {
        options: {
          paths: ['.'],
          import: ['nib'],
          urlfunc: 'embedurl', // use embedurl('test.png') in our code to trigger Data URI embedding
          banner: '<%= tag.css %>',
          // use: [
          //   require('fluidity') // use stylus plugin at compile time
          // ]//,
          // import: [      //  @import 'foo', 'bar/moo', etc. into every .styl file
          //   'foo',       //  that is compiled. These might be findable based on values you gave
          //   'bar/moo'    //  to `paths`, or a plugin you added under `use`
          // ]
        },
        files: {
          'style.css': ['<%= project.src %>/master.styl'] //, // 1:1 compile
        }
      }
    },
    /**
     * Runs tasks against changed watched files
     * https://github.com/gruntjs/grunt-contrib-watch
     * Watching development files and run concat/compile tasks
     */
    watch: {
      concat: {
        files: '<%= project.src %>/{,*/}*.js',
        tasks: ['concat:dev']
      }
      ,
      stylus: {
        files: ['<%= project.src %>/master.styl', '<%= project.src %>/base_styles/*.styl'],
        tasks: ['stylus:compile_dev']
      }
    }
  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-uglify');
  // Load the plugin that provides the "stylus" task.
  grunt.loadNpmTasks('grunt-contrib-stylus');

  /**
   * Default task
   * Run `grunt` on the command line
   */
  grunt.registerTask('default', [
    'stylus:compile_dev',
    'concat:dev',
    'watch'
  ]);

  /**
   * Build task
   * Run `grunt build` on the command line
   * Then compress all JS/CSS files
   */
  grunt.registerTask('build', [
    'stylus:compile',
    'uglify'
  ]);

};