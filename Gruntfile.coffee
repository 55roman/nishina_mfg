module.exports = (grunt)->
  require('load-grunt-tasks')(grunt)

  appConfig = {
    host: 'localhost'
  #host: '192.168.0.3'
  #host: 'http://192.168.0.3/'
    src: 'src'
    dist: 'htdocs/'
    port: '8510'
    type: ''

  }

  grunt.initConfig

    cfg: appConfig

    browserify:
      dist:
        files:
          '<%= cfg.dist %>/common/js/app.js': ['<%= cfg.src %>/scripts/App.coffee']
      options:
        transform: ['coffeeify', 'debowerify']
        browserifyOptions:
          extensions: ['.coffee']
          debug: true

    compass:
      options:
      #sassDir: '<%= cfg.src %>/sass/'
        sassDir: '<%= cfg.src %>/sass/'
      #imageDir: '<%= cfg.src %>/img/'
        imageDir: '<%= cfg.src %>/img/'
        cssDir: '<%= cfg.dist %>/common/css/'
      #cssDir: '<%= cfg.dist %>/common/css/'
      #generatedImagesDir: '<%= cfg.dist %>/common/css/img/'
        generatedImagesDir: '<%= cfg.dist %>/common/css/img/'
      #javascriptDir: '<%= cfg.dist %>/scripts/'
        javascriptDir: '<%= cfg.dist %>/scripts/'
        importPath: 'bower_components'
        relativeAssets: true
        debugInfo: false
        noLineComments: true

      dist:
        options:
          debugInfo: false

    coffee:
      compile:
        files: [
          expand: true
        #cwd: '<%= cfg.src %>/scripts/'
          cwd: '<%= cfg.src %>/scripts/'
          src: ['*.coffee']
        #dest: '<%= cfg.dist %>/common/js/'
          dest: '<%= cfg.dist %>/common/js/'
          ext: '.js'
        ]
      options:
        sourceMap: true
        bare: true

    rsync:
      dryRun:
        options:
          src: 'htdocs'
          dest: '/web/b/'
          host: 'ssh16.heteml.jp'
          recursive: true
          syncDest: true
          exclude: [".git*", "*.scss"]


    esteWatch:
      options:
        dirs: [
          '<%= cfg.dist %>/**/'
          '<%= cfg.src %>/sass/**/'
          '<%= cfg.src %>/scripts/**/'
        ]
        livereload:
          enabled: true
          port: 35729
          extensions: ['html', 'php', 'js', 'css']

      scss: (filepath) ->
        return ['compass', 'autoprefixer']

      coffee: (filepath) ->
        return ['browserify']


    autoprefixer:
      options:
        browsers: ['last 2 version', 'ie 9']
      file:
        expand: true
        flatten: true
        src: [
          '<%= cfg.dist %>/common/css/content.css'
        ]
        dest: '<%= cfg.dist %>/common/css/'


    uglify:
      build:
        src: '<%= cfg.dist %>/common/js/App.js'
        dest: '<%= cfg.dist %>/common/js/App.js'

    php:
      server:
        options:
          path: '<%= grunt.task.current.args[0] %>'
          port: 9001
          livereload: true
          base: '<%= cfg.dist %>'
        #keepalive: true
          hostname: '<%= cfg.host %>'
          open: true


  #grunt.registerTask('default',['connect','coffee','concat','uglify','compass','watch'])
  grunt.registerTask('default', ['php', 'compass', 'esteWatch'])
