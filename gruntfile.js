module.exports = function(grunt) {

  // files to be minified and combined
  var cssFiles = [
    'Programs/bootstrap-3.1.1/css/bootstrap2.css'
  ];

  // this is where all the grunt configs will go
  grunt.initConfig({
    // read the package.json
    // pkg will contain a reference to out pakage.json file use of which we will see later
    pkg: grunt.file.readJSON('package.json'),

    // configuration for the cssmin task
    // note that this syntax and options can found on npm page of any grunt plugin/task
    cssmin: {
      // options for css min task
      options:{
        // banner to be put on the top of the minified file using package name and todays date
        // note that we are reading our project name using pkg.name i.e name of our project
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      combine: {
        // options for combining files
        // we have defined cssFiles variable to hold our file names at the top
        files: {
          // here key part is output file which will our <package name>.min.css
          // value part is set of input files which will be combined/minified
          'Programs/bootstrap-3.1.1/css/<%= pkg.name %>.min.css': cssFiles
        }
      }
    },
    less: {
      development: {
        options: {
          compress: false,
          yuicompress: false,
          optimization: 2
        },
        files: {
          "Programs/bootstrap-3.1.1/css/bootstrap2.css": "Programs/bootstrap-3.1.1/css/bootstrap.less" // destination file and source file
        }
      }
    },
    watch: {
      styles: {
        files: ['Programs/**/*.less'], // which files to watch
        tasks: ['less'],
        options: {
          nospawn: true
        }
      }
    }
  }); // end of configuring the grunt task

  // Load the plugin that provides the "cssmin" task.
  grunt.loadNpmTasks('grunt-contrib-cssmin');

  // Load the plugin that provides the "less" task.
  grunt.loadNpmTasks('grunt-contrib-less');

  // Load the plugin that provides the "watch" task.
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task(s).
  grunt.registerTask('default', ['cssmin']);
  // cssmin task
  grunt.registerTask('buildcss', ['cssmin']);

  grunt.registerTask('lessWatch', ['less','watch']);

};