// our wrapper function (required by grunt and its plugins)
// all configuration goes inside this function
module.exports = function(grunt) {
	// CONFIGURE GRUNT
	grunt.initConfig({
		// get the configuration info from package.json
		// this way we can use things like name and version (pkg.name)
		pkg: grunt.file.readJSON('package.json'),
		// all of our configuration will go here

		// configure jshint to validate js files
		jshint: {
			options: {
				reporter: require('jshint-stylish')
			},
		// when this task is run, lint the Gruntfile and all js files in public_html
			build: ['Gruntfile.js', '/home/dwayne/GitUnitCircle/_/public_html/js/myScript.js']
		}

		// configure uglify to minify js files
	//grunt.initConfig({
		//pkg: grunt.file.readJSON('package.json'),
		//uglify: {
			//options: {
				//banner: '/*\n <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> \n*/\n'
			//},
			//build: {
				//files: {
					//'/home/dwayne/GitUnitCircle/_/public_html/js/myScript.min.js': '/home/dwayne/GitUnitCircle/_/public_html/js/myScript.js'
				//}
			//}
		//}

		//sass: {
      		//build: {
        		//files: {
        			//'/home/dwayne/GitUnitCircle/_/public_html/css/theme.css': '/home/dwayne/GitUnitCircle/_/public_html/css/sass/theme.scss'
       			//}
      		//}
    	//}

	});

	// LOAD GRUNT PLUGINS
	// we can only load these if they are in our package.json
	// make sure you have run npm install so our app can find these
	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-watch');

};
