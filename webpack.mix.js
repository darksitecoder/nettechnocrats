const mix = require('laravel-mix')
const glob = require('glob')

mix.js('resources/js/app.js', 'public/js');

mix.styles([
    'vendor/core/plugins/language/css/language-public.css',
    'vendor/core/plugins/member/css/app.css',
    'vendor/core/plugins/social-login/css/social-login.css',
    'vendor/core/plugins/translation/css/theme-translations.css'
], 'public/css/vendor.css');

  

mix.options({
    processCssUrls: false,
    clearConsole: true,
    terser: {
        extractComments: false,
    },
    manifest: false,
});

mix.webpackConfig({
    stats: {
        children: false,
    },
    externals: {
        vue: 'Vue',
    },
});

mix.disableSuccessNotifications();

mix.vue();

// Run all webpack.mix.js in app
glob.sync('./platform/*/*/webpack.mix.js').forEach(item => require(__dirname + '/' + item));

// Run only for a package, replace [package] by the name of package you want to compile assets
// require('./platform/packages/[package]/webpack.mix.js');

// Run only for a plugin, replace [plugin] by the name of plugin you want to compile assets
// require('./platform/plugins/[plugin]/webpack.mix.js');

// Run only for themes, you shouldn't modify below config, just uncomment if you want to compile only theme's assets
// glob.sync('./platform/themes/*/webpack.mix.js').forEach(item => require(__dirname + '/' + item));

// Run only for a theme, replace [theme] by the name of theme you want to compile assets

// npx mix --mix-config=platform/themes/[theme]/webpack.mix.js
