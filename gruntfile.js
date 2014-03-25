module.exports = function(grunt) {
  grunt.initConfig({
    phplint: {
      all: [
        '*.php',
        'ajax/*.php',
        'classes/*.php'
      ]
    },
    phpcs: {
      api: {
        dir: 'classes/Pommo_Api.php'
      },
      attachment: {
        dir: 'classes/Pommo_Attachment.php'
      },
      auth: {
        dir: 'classes/Pommo_Auth.php'
      },
      csvstream: {
        dir: 'classes/Pommo_Csv_Stream.php'
      },
      ajaxbounces: {
        dir: 'ajax/bounces.php'
      },
      setup: {
        dir: 'classes/Pommo_Setup.php'
      },
      options: {
        standard: 'ruleset.xml'
      }
    }
  });

  grunt.loadNpmTasks('grunt-phplint');
  grunt.loadNpmTasks('grunt-phpcs');

  grunt.registerTask(
    'default',
    [
      'phplint:all',
      'phpcs:api',
      'phpcs:auth',
      'phpcs:csvstream',
      'phpcs:attachment',
      'phpcs:ajaxbounces',
      'phpcs:setup'
    ]
  );
};
