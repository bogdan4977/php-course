module.exports = function (grunt) {

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        //js hint
        jshint: {
            all: ['!Gruntfile.js', 'src/js/*.js', 'src/js/*.js']
        },
        //less task
        less: {
            all: {
                options: {},
                files: {
                    'pub/css/main.css': 'src/css/main.less'
                }
            }
        },
        //min css
        cssmin: {
            target: {
                files: [{
                    expand: true,
                    cwd: 'pub/css/',
                    src: ['*.css', '!*.min.css'],
                    dest: 'pub/css/',
                    ext: '.min.css'
                }]
            }
        },
        //minify js
        uglify: {
            my_target: {
                files: {
                    'pub/js/main.min.js': ['src/js/main.js']
                }
            }
        },

        //autoprefixer
        autoprefixer: {
            options: {
                map: true,
                browsers: ['last 10 versions', 'ie 9', 'ie 8']
            },
            dist: {
                src: 'pub/css/main.css'
            }
        },
        includereplace: {
            dist: {
                options: {
                    globals: {
                        //vars
                    },
                    includesDir: 'src/layout'
                },
                src: '*.html',
                dest: 'pub/'
            }
        },
        //watch task
        watch: {
            options: {
                livereload: true
            },
            css: {
                files: ['src/css/**/*.less', 'src/js/main.js'],
                tasks: ['less', 'autoprefixer', 'cssmin', 'uglify']
            }
        }
    });

    // Default task(s).
    grunt.registerTask('default', ['less', 'includereplace']);

    // Load the plugin that provides the "jshint" task
    grunt.loadNpmTasks('grunt-contrib-jshint');

    // Load less compilation
    grunt.loadNpmTasks('grunt-contrib-less');

    // Load watch task
    grunt.loadNpmTasks('grunt-contrib-watch');

    //minify js
    grunt.loadNpmTasks('grunt-contrib-uglify');

    //min css
    grunt.loadNpmTasks('grunt-contrib-cssmin');

    //autoprefixer /*!!  npm update caniuse-db - update prefixes db!!*/
    grunt.loadNpmTasks('grunt-autoprefixer');

    //include-replace
    grunt.loadNpmTasks('grunt-include-replace');

};