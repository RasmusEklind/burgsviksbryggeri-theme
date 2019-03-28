module.exports = function(grunt) {
    grunt.initConfig({
        concat: {
            options: {
                sourceMap: true
            },
            dist: {
                src: [
                    'assets/js/*.js'
                ],
                dest: 'assets/dist/js/theme.min.js'
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
                    'assets/dist/js/theme.min.js': ['assets/dist/js/theme.min.js']
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
                    'assets/js/*.js'
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