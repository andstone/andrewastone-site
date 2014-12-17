module.exports = function(grunt) {

  grunt.initConfig({

    // Watches for changes and runs tasks
    // Livereload is setup for the 35729 port by default
    watch: {
      sass: {
        files: ['library/scss/*.scss'],
        tasks: ['compass:dist'],
      },
      css: {
        files: ['*.css']
      },
      livereload: {
        files: ['library/css/*.css'],
        options: { livereload: 35729 }
      },
      php: {
        files: ['**/*.php'],
        options: {
          livereload: 35729
        }
      }

    },

    // Sass object
    sass: {
      dev: {
        files: [
          {
            src: ['**/*.sass', '!**/_*.sass'],
            cwd: 'sass',
            dest: 'css',
            ext: '.css',
            expand: true
          }
        ],
        options: {
          style: 'expanded',
          compass: true
        }
      }
    },

    compass: {
      dist: {
        options: {
          sassDir: 'library/scss',
          cssDir: 'library/css',
          config: 'library/scss/config.rb'
        }
      }
    }


  });

  // Default task
  grunt.registerTask('default', ['watch']);

  // Load up tasks
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-compass');

};