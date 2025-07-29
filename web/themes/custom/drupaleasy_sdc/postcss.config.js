const postcssPresetEnv = require('postcss-preset-env');
const postcssImport = require('postcss-import');
const postcssPxtorem = require('postcss-pxtorem');
const postcssUrl = require('postcss-url');
const postcssMixins = require('postcss-mixins');

const mixins = {
  'button-style': (mixin, ...args) => {
    const [bg = '#007BFF', text = 'white'] = args[0].split(' ');
    return {
      'padding': '10px 20px',
      'border': 'none',
      'background-color': bg,
      'color': text,
      'border-radius': '4px',
      'font-size': '20px',
      '&:active': {
        'transform': 'scale(0.95)',
      }
    };
  }
};

module.exports = {
  map: true,
  plugins: [
    postcssImport,
    postcssMixins({ mixins }),
    postcssPresetEnv,
    postcssPxtorem({
      // These are the same settings as Drupal core (11.2.2) uses.
      propList: [
        '*',
        '!background-position',
        '!border',
        '!border-width',
        '!box-shadow',
        '!border-top*',
        '!border-right*',
        '!border-bottom*',
        '!border-left*',
        '!border-start*',
        '!border-end*',
        '!outline*',
      ],
      mediaQuery: true,
      minPixelValue: 3
    }),
    postcssUrl({
      filter: '**/*.svg',
      url: 'inline',
      optimizeSvgEncode: true,
    }),
  ]
}
