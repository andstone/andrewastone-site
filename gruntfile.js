module.exports = function(grunt) {

  grunt.initConfig({

    // Watches for changes and runs tasks
    // Livereload is setup for the 35729 port by default
    watch: {
      scss: {
      files: ['library/scss/*.scss'],
      tasks: ['compass:dist'],
      options: {
        // Start a live reload server on the default port 35729
        livereload: true,
      },
    },
      js: {
        files: ['library/js/*.js'],
        options: { livereload: 35729 }
      },
      php: {
        files: ['**/*.php'],
        options: {
          livereload: 35729
        }
      },
       css: {
        files: ['library/css/*.css'],
        options: {
          livereload: 35729
        }
      }

    },
    compass: {
      dist: {
        options: {
          sassDir: 'library/scss',
          cssDir: 'library/css',
        }
      }
    }


  });

  // Default task
  grunt.registerTask('default', ['watch', 'compass']);

  // Load up tasks
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-compass');

};