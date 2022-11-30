// Demo -> https://gist.github.com/julienbourdeau/a7e0c8be740d57c705b75b5dd6d53f2f

const portal_resources_folder = './app/Units/Portal/resources/';
const cms_resources_folder = './app/Units/Orion/resources/';
const MIX_ASSET_URL = process.env.MIX_ASSET_URL;

const mix = require('laravel-mix');
const del = require('del');

if (mix.inProduction()) {
    (async () => {
        const deletedFilePaths = await del([
            'public/static-files/portal/css/',
            'public/static-files/portal/js/',
            'public/static-files/orion/css/',
            'public/static-files/orion/js/',
        ]);

        console.log('Diretorios removidos:\n', deletedFilePaths.join('\n'));
    })();
}

mix
    .js(portal_resources_folder + 'js/app.js', 'public/static-files/portal/js')
    .sass(portal_resources_folder + 'scss/portal.scss',
        'public/static-files/portal/css',
        {},
        [
            require('tailwindcss')('./tailwind-portal.config.js')
        ])
    .sass(cms_resources_folder + 'scss/orion.scss',
        'public/static-files/orion/css',
        {},
        [
            require('tailwindcss')('./tailwind-orion.config.js'),
        ])
    .browserSync({
        proxy: 'https://alphafish-portal.local',
        port: 3000,
        snippetOptions: {
            rule: {
                match: /<\/head>/i,
                fn: function (snippet, match) {
                    return snippet + match;
                }
            }
        },
    })
    .options({
        hmrOptions: {
            host: 'localhost',
            port: 3333,
        },
    })
    .disableNotifications()
    .disableSuccessNotifications();

/**
 * In Production
 */
if (mix.inProduction()) {
    mix
        .version()
        .then(() => {
            const convertToFileHash = require("laravel-mix-make-file-hash");
            convertToFileHash({
                publicPath: "public",
                manifestFilePath: "public/mix-manifest.json"
            });
        });
}
