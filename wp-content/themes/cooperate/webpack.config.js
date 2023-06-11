
const path = require('path');
const webpack = require('webpack');

const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const OptimizeCssAssetsPlugin = require('optimize-css-assets-webpack-plugin');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const UglifyJsPlugin = require('uglifyjs-webpack-plugin');
const cssnano = require('cssnano');
const postcssPresetEnv = require('postcss-preset-env');

const JS_DIR = path.resolve(__dirname, 'assets');
const BUILD_DIR = path.resolve(__dirname, 'build');


const entry = {
    // JavaScript Files
    homeJs: JS_DIR + '/splited-code/js/home.js',
    aboutJs: JS_DIR + '/splited-code/js/about.js',
    faqJs: JS_DIR + '/splited-code/js/faq.js',
    generalJs: JS_DIR + '/splited-code/js/general.js',
    pricingJs: JS_DIR + '/splited-code/js/pricing.js',
    singleProjectJs: JS_DIR + '/splited-code/js/single-project.js',
    singleServiceJs: JS_DIR + '/splited-code/js/single-service.js',

    // CSS Files
    aboutS: JS_DIR + '/splited-code/css/about.js',
    blogS: JS_DIR + '/splited-code/css/blog.js',
    breadcrumbS: JS_DIR + '/splited-code/css/breadcrumbs.js',
    contactS: JS_DIR + '/splited-code/css/contact.js',
    faqS: JS_DIR + '/splited-code/css/faq.js',
    generalS: JS_DIR + '/splited-code/css/general.js',
    headerS: JS_DIR + '/splited-code/css/header.js',
    homeS: JS_DIR + '/splited-code/css/home.js',
    partnersS: JS_DIR + '/splited-code/css/partners.js',
    pricingS: JS_DIR + '/splited-code/css/pricing.js',
    ProjectsS: JS_DIR + '/splited-code/css/projects.js',
    servicesS: JS_DIR + '/splited-code/css/services.js',
    singleBlogS: JS_DIR + '/splited-code/css/single-blog.js',
    singleProjectS: JS_DIR + '/splited-code/css/single-project.js',
    singleServiceS: JS_DIR + '/splited-code/css/single-service.js',
    responsive: JS_DIR + '/splited-code/css/responsive.js',
    spacing: JS_DIR + '/splited-code/css/rs-spacing.js',
    flaticon: JS_DIR + '/splited-code/fonts/flaticon.js'

}
const output = {
    path: BUILD_DIR,
    filename: '[name].js'
}
const rules = [
    {
        test: /\.js$/,
        include: JS_DIR,
        exclude: /node_modules/,
        use: 'babel-loader',

    },
    {
        test: /\.css$/,
        exclude: /node_modules/,
        use: [MiniCssExtractPlugin.loader,
            'css-loader',
        {
            loader: 'postcss-loader',
            options: {
                postcssOptions: {
                    plugins: [
                        postcssPresetEnv(),
                        cssnano({ preset: 'default', discardComments: { removeAll: true } })
                    ],
                },
            },
        }

        ],
    },
    {
        test: /\.eot(\?v=\d+.\d+.\d+)?$/,
        use: [
            {
                loader: 'url-loader',
                options: {
                    name: '[path][name].[ext]',
                },
            },
        ],
    },
    {
        test: /\.woff(2)?(\?v=[0-9]\.[0-9]\.[0-9])?$/,
        use: [
            {
                loader: 'url-loader',
                options: {
                    limit: 10000,
                    mimetype: 'application/font-woff',
                    name: '[path][name].[ext]',
                },
            },
        ],
    },
    {
        test: /\.[ot]tf(\?v=\d+.\d+.\d+)?$/,
        use: [
            {
                loader: 'url-loader',
                options: {
                    limit: 10000,
                    mimetype: 'application/octet-stream',
                    name: '[path][name].[ext]',
                },
            },
        ],
    },
    {
        test: /\.svg(\?v=\d+\.\d+\.\d+)?$/,
        use: [
            {
                loader: 'url-loader',
                options: {
                    limit: 10000,
                    mimetype: 'image/svg+xml',
                    name: '[path][name].[ext]',
                },
            },
        ],
    },
    {
        test: /\.ttf$/,
        type: 'asset/resource',
        dependency: { not: ['url'] },
    },
    {
        test: /\.(jpe?g|png|gif|ico)$/i,
        use: [
            {
                loader: 'file-loader',
                options: {
                    name: '[path][name].[ext]',
                },
            },
        ],
    },
    {
        test: /\.(jpe?g|svg|png|gif|ico|eot|woff2?)(\?v=\d+\.\d+\.\d+)?$/i,
        type: 'asset/resource',
    },

]
const plugins = (argv) => [
    new CleanWebpackPlugin({
        cleanStaleWebpackAssets: ('production' === argv.mode),
    }),
    new webpack.ProvidePlugin({
        $: "jquery",
        jQuery: "jquery",
        "window.jQuery": "jquery"
    }),
    new MiniCssExtractPlugin({
        filename: 'css/[name].css'
    }),
]
module.exports = (env, argv) => ({
    entry: entry,
    output: output,
    devtool: 'source-map',
    module: {
        rules: rules,
    },
    plugins: plugins(argv),
    optimization: {
        minimizer: [
            new UglifyJsPlugin({
                cache: false,
                parallel: true,
                sourceMap: false,
                extractComments: true,
            }),
            new OptimizeCssAssetsPlugin()
        ]
    },
    stats: {
        errorDetails: true
    },
    resolve: {
        extensions: ['.ts', '.js'],
        modules: ['src/javascript', 'node_modules'],
    },
    externals: {
        jquery: 'jQuery'
    }
});