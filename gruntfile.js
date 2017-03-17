module.exports = function (grunt) {
    grunt.initConfig({
        concat: {
            options: {
                sourceMap: true
            },
            dist: {
                src: [
                    'assets/js/smoothscroll.js',
                    'node_modules/jquery/dist/jquery.min.js',
                    'node_modules/jquery-color-animation/jquery.animate-colors-min.js',
                    'assets/js/googlemap.js',
                    'assets/js/campaign.js',
                    'assets/js/theme.js'
                ],
                dest: 'assets/js/theme.min.js'
            }
        },
        sass: {
          dist: {
            options: {
              style: 'compressed'
            },
            files: [{
              expand: true,
              cwd: 'assets/sass',
              src: ['*.scss'],
              dest: 'assets/css',
              ext: '.css'
            }]
          }
        },
        uglify: {
            dist: {
                files: {
                    'assets/js/theme.min.js': ['assets/js/theme.min.js']
                }
            }
        },
        watch: {
            css: {
                files: [
                    'assets/sass/**/*.scss'
                ],
                tasks: ['sass']
            },
            js: {
                files: [
                    'assets/js/theme.js'
                ],
                tasks: ['concat', 'uglify']
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.registerTask('default', ['sass', 'concat', 'uglify']);
};
