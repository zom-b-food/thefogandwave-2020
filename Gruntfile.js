module.exports = function (grunt) {

    "use strict";
    require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);

    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),

        cssc: {
            build: {
                options: {
                    sortSelectors: true,
                    lineBreaks: true,
                    sortDeclarations: true,
                    consolidateViaDeclarations: false,
                    consolidateViaSelectors: false,
                    consolidateMediaQueries: false
                },
                files: {
                    'resources/css/fogwave.min.css': 'resources/css/fogwave.css',
                    'resources/css/fogwave-components.min.css': 'resources/css/fogwave-components.css'
                }
            }
        },

        cssmin: {
            build: {
                src: 'resources/css/fogwave.css',
                dest: 'resources/css/<%= pkg.name %>.min.css'
            }
        },

        sass: {
            build: {
                files: {
                    'resources/css/fogwave.css': 'resources/sass/fogwave.scss',
                    'resources/css/fogwave-components.css': 'resources/sass/fogwave-components.scss'
                    /*  not included in pgk.name.min.css  (not global enough) build these separately--not included in globals.jsp */
                   /* 'resources/css/components/highlight.css': 'resources/sass/components/highlight.scss',
                    'resources/css/components/amslides.css': 'resources/sass/components/amslides.scss'*/

                }
            }
        },

        watch: {

            js: {
                files: ['resources/js/<%= pkg.name %>.js'],
                tasks: ['uglify']
            },
            css: {
                files: ['resources/sass/**/*.scss'],
                tasks: ['buildcss']
            },
            livereload: {
                files: ['*.html', 'resources/css/*.css', 'resources/js/*.js'],
                options: {
                    livereload: true
                }
            }
        },

        uglify: {
            build: {
                files: {
                    'resources/js/<%= pkg.name %>.min.js': [
                        'resources/js/fogwave.js'


                    ]
                }
            }
        }

    });


    // These plugins provide necessary tasks.
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-cssc');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['sass', 'uglify', 'cssc', 'cssmin', 'watch']);
    grunt.registerTask('buildcss', ['sass', 'cssc', 'cssmin']);

};
