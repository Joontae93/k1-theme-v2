const { BundleAnalyzerPlugin } = require('webpack-bundle-analyzer');
const path = require('path');
const defaultConfig = require('@wordpress/scripts/config/webpack.config.js');
const TerserPlugin = require('terser-webpack-plugin');

const THEME_NAME = 'k1-theme';
const THEME_DIR = `/wp-content/themes/${THEME_NAME}`;

function snakeToCamel(str) {
	return str.replace(/([-_][a-z])/g, (group) =>
		group.toUpperCase().replace('-', '').replace('_', ''),
	);
}

/**
 * For JSX folders (located `~/src/js/folder-name/App.jsx)`)
 * Array of strings modeled after folder names (e.g. 'about-choctaw')
 *
 * NOTE: MAKE SURE TO IMPORT SCSS IN APP.JSX AND !!NOT!! BELOW
 */
const appNames = ['front-page'];

/**
 * For SCSS files (no leading `_`)
 * Array of strings modeled after scss names (e.g. 'we-are-choctaw')
 *  */
const styleSheets = []; // for scss only

module.exports = {
	...defaultConfig,
	...{
		entry: function () {
			const entries = {
				global: `.${THEME_DIR}/src/index.js`,
				'vendors/fontawesome': `.${THEME_DIR}/src/js/vendors/global/fontawesome.js`,
				'vendors/bootstrap': `.${THEME_DIR}/src/js/vendors/global/bootstrap.js`,
				'vendors/vendors': `.${THEME_DIR}/src/styles/vendors/vendors.scss`,
			};

			if (appNames.length > 0) {
				appNames.forEach((appName) => {
					const appNameOutput = snakeToCamel(appName);
					entries[appNameOutput] = `.${THEME_DIR}/src/js/${appName}/App.jsx`;
				});
			}
			if (styleSheets.length > 0) {
				styleSheets.forEach((styleSheet) => {
					const styleSheetOutput = snakeToCamel(styleSheet);
					entries[
						styleSheetOutput
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
	plugins: [
		...defaultConfig.plugins,
		new BundleAnalyzerPlugin({
			analyzerMode: 'static',
			reportFilename: path.join(__dirname, 'bundle-analyzer', 'report.html'),
			openAnalyzer: false,
		}),
	],
	optimization: {
		...defaultConfig.optimization,
		minimize: true, // Enable code minification
		minimizer: [
			new TerserPlugin({
				parallel: true,
				extractComments: true,
				terserOptions: {
					...defaultConfig.optimization.minimizer[0].options.terserOptions,
					keep_fnames: false, // Remove unused function names
					keep_classnames: false, // Remove unused class names
				},
			}),
		],
	},
};
