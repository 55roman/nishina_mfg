module.exports = (grunt)->

  require('load-grunt-tasks')(grunt)
  #grunt.loadNpmTasks('grunt-concat-sourcemap')

  appConfig = {
    host: 'localhost'
    #host: '192.168.0.3'
    #host: 'http://192.168.0.3/'
    src: 'src'
    dist: 'htdocs'
    port: '8510'
    type: 'kojin'
    #port: '10004'
  }

  grunt.initConfig

    cfg: appConfig

    ###browserify:
      '<%= cfg.dist %>/common/js/kakugo_top.js': ['<%= cfg.src %>/scripts/KakugoTop.coffee']
      options:
        transform: ['coffeeify']
        debug: true###

    compass:
      options:
        sassDir: '<%= cfg.src %>/sass/<%= cfg.type %>/'
        imageDir: '<%= cfg.src %>/img/<%= cfg.type %>/'
        cssDir: '<%= cfg.dist %>/<%= cfg.type %>/common/css/'
        generatedImagesDir: '<%= cfg.dist %>/<%= cfg.type %>/common/css/img/'
        javascriptDir: '<%= cfg.dist %>/<%= cfg.type %>/scripts/'
        importPath: 'bower_components'
        relativeAssets: true
        debugInfo: false
        noLineComments: true

      dist:
        options:
          debugInfo: false

    coffee:
      compile:
        files:[
          expand:true
          cwd: '<%= cfg.src %>/scripts/<%= cfg.type %>/'
          src: ['*.coffee']
          dest: '<%= cfg.dist %>/<%= cfg.type %>/common/js/'
          ext: '.js'
        ]
      options:
        sourceMap: true
        bare: true

    ###concat:
      dist:
        src: [
          '<%= cfg.src %>/bower_components/jquery/jquery.min.js'
          '<%= cfg.src %>/bower_components/jquery.easing/js/jquery.easing.min.js'
          #'<%= cfg.src %>/bower_components/requirejs/require.js'
        ],
        dest: '<%= cfg.dist %>/common/js/vendor.js'###
    ###concat:
      dist:
        src: [
          '<%= cfg.dist %>/common/js/PhotoData.js'
          '<%= cfg.dist %>/common/js/Gmap.js'
          '<%= cfg.dist %>/common/js/LoadPage.js'
        ],
        dest: '<%= cfg.dist %>/common/js/Gmap.min.js'

    concat_sourcemap:
      options: {},
      target:
        files:
          '<%= cfg.dist %>/common/js/index.js':
            [
              '<%= cfg.dist %>/common/js/PhotoData.js'
              '<%= cfg.dist %>/common/js/Gmap.js'
              '<%= cfg.dist %>/common/js/LoadPage.js'
            ]
    ###
    uglify:
      build:
        src: '<%= cfg.dist %>/common/js/index.js'
        dest: '<%= cfg.dist %>/common/js/index.js'

    watch:
      options:
        livereload: true
        spawn: false
      html:
        files: ['<%= cfg.dist %>/**/*.html','<%= cfg.dist %>/**/*.php', '<%= cfg.dist %>/js/*.js']
        tasks: []
      coffee:
        files: ['<%= cfg.src %>/scripts/**/*.coffee']
        tasks: ['coffee']
      compass:
        files: ['<%= cfg.src %>/sass/**/*.scss']
        tasks: ['compass']

    php:
      server:
        options:
          port: 9001
          livereload: true
          base: '<%= cfg.dist %>'
          #keepalive: true
          hostname: '<%= cfg.host %>'
          open: true

  #grunt.registerTask('default',['connect','coffee','concat','uglify','compass','watch'])
  grunt.registerTask('default',['php','coffee','watch'])