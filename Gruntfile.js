module.exports = function(grunt) {

	// Project configuration.
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		/*autoprefixer: {
			options: {
				browsers: ['last 2 versions']
			},
			styles_dev: {
				src: '_inc/styles-dev.css',
				dest: '_inc/styles-dev.css'
			},
			styles_min: {
				src: '_inc/styles.css',
				dest: '_inc/styles.css'
			},
		},*/
		
		postcss: {
			options: {
				//map: true,
				processors: [
					require('autoprefixer')(
						{
							browsers: ['last 2 versions']
						}
					)
				]
			},
			styles_dev: {
				src: '_inc/build/styles-dev.css',
				dest: '_inc/build/styles-dev.css'
			},
			styles_min: {
				src: '_inc/dist/styles.css',
				dest: '_inc/dist/styles.css'
			},
		},

		sass: {
			styles_dev: {
				options: {
					style: 'expanded'
				},
				files: [
					{'_inc/build/styles-dev.css': '_inc/src/styles.scss'},
				]
			},
			styles_build: {  // process specific files
				options: {
					style: 'compressed'
				},
				files: [
					{'_inc/dist/styles.css': '_inc/src/styles.scss'},  // 'destination': 'source'
				]
			},
			/*custom_css:{  // process a whole folder
				options: {
					style: 'compressed'
				},
				files: [
					{
		        expand: true,
		        cwd: 'custom-css/',
		        src: ['*.scss'],
		        dest: 'custom-css/',
		        ext: '.css'
		      }
				]
			}*/
		},
		
		sasslint: {
			options: {
				//cache-config: false,
				configFile: 'config/.sass-lint.yml',
			},
			target: '_inc/src/**/*.scss',
		},
    
		//uglify: {
			//options: {
				//banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
			//},
			/*scripts: {
				src: 'scripts.js',
				dest: 'js/build/scripts.min.js'
			}
		}*/
	
		watch: {
			processSass: {
				files: ['_inc/src/**/*.scss'],
				tasks: ['sasslint', 'sass', 'postcss'],
			}
		}
    
	});

	// Load the plugins.
	//grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.loadNpmTasks('grunt-contrib-sass');
	//grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-postcss');
	grunt.loadNpmTasks('grunt-sass-lint');

	// Default task(s).
	//grunt.registerTask('default', ['sass', 'autoprefixer', 'uglify']);
	grunt.registerTask('default', ['sasslint', 'sass', 'postcss']);

};