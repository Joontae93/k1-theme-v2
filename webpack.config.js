const defaultConfig = require('@wordpress/scripts/config/webpack.config.js');
const THEME_NAME = 'k1-theme';
const THEME_DIR = `/wp-content/themes/${THEME_NAME}`;

function snakeToCamel(str) {
    return str.replace(/([-_][a-z])/g, (group) =>
        group.toUpperCase().replace('-', '').replace('_', ''),
    );
}

/**
 * For Typescript files (located `~/src/js/folder-name/index.ts)`)
 * Array of strings modeled after folder names (e.g. 'about-kingdom-one')
 *
 * NOTE: Make sure to import scss files in TS file and not below.
 */
const jsFiles = [
    'front-page',
    'hr-page',
    'communications',
    'pricing',
    'k1-about',
    'get-started',
    'finance',
    'archive',
];

/**
 * For SCSS files (no leading `_`)
 * Array of strings modeled after scss names (e.g. 'we-are-kingdom-one')
 *  */
const styleSheets = [
    'giving',
    'share-your-story',
    'employee-retention-credit',
    'above-reproach',
    'legal-update',
    'staffing',
    'business-admin',
    'give',
]; // for scss only

module.exports = {
    ...defaultConfig,
    ...{
        entry: function () {
            const entries = {
                'global': `.${THEME_DIR}/src/index.js`,
                'vendors/fontawesome': `.${THEME_DIR}/src/js/vendors/global/fontawesome.js`,
                'vendors/bootstrap': `.${THEME_DIR}/src/js/vendors/global/bootstrap.js`,
                'vendors/fonts': `.${THEME_DIR}/src/styles/vendors/_fonts.scss`,
                'vendors/lite-youtube': `.${THEME_DIR}/src/js/vendors/global/lite-youtube.js`,
                'layouts/single': `.${THEME_DIR}/src/styles/layouts/single.scss`,
            };

            if (jsFiles.length > 0) {
                jsFiles.forEach((jsFile) => {
                    const jsFileOutput = snakeToCamel(jsFile);
                    entries[
                        `pages/${jsFileOutput}`
                    ] = `.${THEME_DIR}/src/js/${jsFile}/index.ts`;
                });
            }

            if (styleSheets.length > 0) {
                styleSheets.forEach((styleSheet) => {
                    const styleSheetOutput = snakeToCamel(styleSheet);
                    entries[
                        `pages/${styleSheetOutput}`
                    ] = `.${THEME_DIR}/src/styles/pages/${styleSheet}.scss`;
                });
            }
            return entries;
        },
        output: {
            path: __dirname + `${THEME_DIR}/dist`,
            filename: `[name].js`,
        },
    },
};
