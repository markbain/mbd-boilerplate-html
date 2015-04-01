'use strict';
module.exports = function(grunt) {

    // auto-load all grunt tasks matching the `grunt-*` pattern in package.json
    require('load-grunt-tasks')(grunt); // no need for grunt.loadNpmTasks!

    grunt.initConfig({
			pkg:    grunt.file.readJSON( 'package.json' ),
        
		 // watch for changes and trigger sass, jshint, uglify and livereload
        watch: {
            sass: {
					options: { 
						sourcemap: true 
					},
                files: ['sass/**/*.{scss,sass}'],
                tasks: [
					 	'sass', 
						'autoprefixer'
					]
            },
            js: {
                files: '<%= jshint.all %>',
                tasks: ['jshint']
            },
            livereload: {
                options: { livereload: true },
                files: [ 
					'Gruntfile.js',
					'httpdocs/*.php',
				 	'httpdocs/*.html',  
					'httpdocs/includes/**/*.php', 
					'httpdocs/assets/css/source/style.css', 
					'httpdocs/assets/js/source/**/*.js', 
					'httpdocs/assets/images/**/*.{png,jpg,jpeg,gif,webp,svg}'
				]
            }
        
        },
		
		concat: {
			main: {
		      	src: [
			      	'rc/assets/js/source/custom/**/*.js'
      			],
		      	dest: '.tmp/js/main.js',
		    },
		    plugins: {
		      	src: [
			      	'rc/assets/js/source/vendor/**/*.js'
      			],
		      	dest: '.tmp/js/plugins.js',
		    },
		},

		cssmin: {
			main: {
		      	src: 'rc/assets/css/source/**/*.css',
		      	dest: 'rc/assets/css/build/style.min.css',
		    },
		},
		uglify: {
			main: {
		      	src: [
			      	'.tmp/js/main.js'
      			],
		      	dest: 'rc/assets/js/build/main.min.js',
		    },
		    plugins: {
		      	src: [
			      	'.tmp/js/plugins.js'
      			],
		      	dest: 'rc/assets/js/build/plugins.min.js',
		    },
		},
			// Modernizr
			modernizr: {
    			dist: {
        			// [REQUIRED] Path to the build you're using for development.
        			"devFile" : "bower_components/modernizr/modernizr.js",

        			// Path to save out the built file.
        			"outputFile" : "httpdocs/assets/js/vendor/modernizr-custom.js",
		    	}

			},

        // sass
        sass: {
            dist: {
                options: {
                    sourcemap: true,
                    style: 'expanded',
                },
                files: {
                    'httpdocs/assets/css/source/style.css': 'sass/styles.scss',
                }
            }
        },

        // autoprefixer
        autoprefixer: {
            options: {
                browsers: ['last 2 versions', 'ie 9', 'ios 6', 'android 4', 'android 3'],
                map: true,
					 silent: false,
            },
				dist: { // Target
					files: {
                	'rc/assets/css/source/style.css': 'rc/assets/css/source/style.css'
				}
            },
        },

		  	bump: {
    			options: {
      			updateConfigs: ['pkg'], // make sure to check updated pkg variables
      			createTag: false,
      			push: false,
    			}
  			},

	

		// Usemin
		useminPrepare: {
			html: {
				html: 'index.php'
			},
	     	options: {
      			dest: 'rc',
      			root: 'httpdocs'
    		},
	  	},
		usemin:{
			html: 'rc/**/*.php',
			options: {
	    		assetsDirs: [
	    			'assets/css', 
	    			'assets/js'
    			]
		  	}
		},

		 // Version
		 version: {		 	
		 	css: {
        		options: {
            	prefix: 'Version\\:\\s'
        		},
        		src: [ 'sass/styles.scss' ],
   		}
		},


        // javascript linting with jshint
        jshint: {
            options: {
                jshintrc: '.jshintrc',
                "force": true
            },
            all: [
                'Gruntfile.js',
                'httpdocs/assets/js/source/**/*.js'
            ]
        },
			
	

	

        // image optimization
        imagemin: {
            dist: {
                options: {
                    optimizationLevel: 7,
                    progressive: true,
                    interlaced: true
                },
                files: [{
                    expand: true,
                    cwd: 'httpdocs/rc/assets/images/',
                    src: ['**/*.{png,jpg,gif}'],
                    dest: 'httpdocs/rc/assets/images/'
                }]
            }
        },

		  // Copy the plugin to a versioned release directory
		  copy: {
			dist: {
				files:  [
      			{expand: true, 
					cwd: 'rc/',
					src: [
						'**',						
					], 
					dest: 'dist/<%= pkg.name %>.<%= pkg.version %>/'},
				],
			},
			rc: {
				files:  [
      			{expand: true, 
					cwd: 'httpdocs/',
					src: [
						'**',
						//'!assets/css/**',
						//'!assets/js/**',					
						
					], 
					dest: 'rc/'},
				],
			},
			fontAwesome: {
				 expand: true,
				 flatten: true,
				 src: ['bower_components/fontawesome/fonts/*'],
				 dest: 'httpdocs/assets/fonts'
			},
			modernizr: {
				 expand: true,
				 flatten: true,
				 src: ['bower_components/modernizr/modernizr.js'],
				 dest: 'httpdocs/assets/js/source/vendor'
			},
		},

		clean: {
			dist: [
				'dist/<%= pkg.name %>.<%= pkg.version %>'
			],
			rc: [
				'rc'
			],					
		},

		compress: {
			main: {
				options: {
					mode: 'zip',
					archive: 'dist/<%= pkg.name %>.<%= pkg.version %>.zip'
				},
				expand: true,
				cwd: 'dist/<%= pkg.name %>.<%= pkg.version %>',
				src: ['**/*'],
				dest: '<%= pkg.name %>/'
			}		
		}

    });

    // register tasks

    grunt.registerTask('default', [
	 	'sass', 
		'watch'
	]);

	// Create a release candidate for testing locally
	grunt.registerTask('create-rc', [
		// Increase the project version
		'version',
		'sass', // Compile CSS with new version
		// Create new RC
		'clean:rc', // delete previous rc
		'copy:rc', 
		// Optimise RC
		'autoprefixer',		
		'useminPrepare',
		'concat',
		'cssmin',
		'uglify',
		'usemin',
	]);
	
	// Create a release candidate for testing locally
	grunt.registerTask('rc-fix', [
		// Increase the project version
		'bump:patch',
		'create-rc',
	]);
	grunt.registerTask('rc-min', [
		// Increase the project version
		'bump:minor',
		'create-rc',
	]);	
	grunt.registerTask('rc-maj', [
		// Increase the project version
		'bump:major',
		'create-rc',
	]);		
	// Copy assets from bower_components to theme dir
	grunt.registerTask('copybower', [
		'copy:fontAwesome',
		'copy:modernizr'
	]);	

	// Compress current rc for upload to server
	grunt.registerTask('dist', [
		'copy:dist', 				
		'compress',
		'clean:dist',
	]);	

};
