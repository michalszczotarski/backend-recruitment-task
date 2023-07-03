const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const { WebpackManifestPlugin } = require('webpack-manifest-plugin');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');

const jsPath = './assets/js';
const scssPath = './assets/scss';

const outputPath = 'dist';

const entryPointsDev = {
    //scripts
    'gravity-script': jsPath + '/script.js',

    //style
    'gravity-normalize-style': scssPath + '/normalize.scss',
    'gravity-style': scssPath + '/style.scss',
};

const entryPointsProd = {
    //scripts
    'gravity-script': jsPath + '/script.js',

    //style
    'gravity-normalize-style': scssPath + '/normalize.scss',
    'gravity-style': scssPath + '/style.scss',
};

let filename, devtool, entryPoints;

module.exports = (env, argv) => {
    if (argv.mode === 'production') {
        filename = '[name].[contenthash]';
        devtool = false;
        entryPoints = entryPointsProd;
    } else {
        filename = '[name]';
        devtool = 'source-map';
        entryPoints = entryPointsDev;
    }

    return {
        devtool: devtool,
        cache: false,
        entry: entryPoints,
        output: {
            path: path.resolve(__dirname, outputPath),
            filename: 'js/'+ filename +'.js',
        },
        plugins: [
            new CleanWebpackPlugin(),
            new MiniCssExtractPlugin({
                filename: 'css/'+ filename +'.css',
            }),
            new WebpackManifestPlugin({
                publicPath: '',
            }),
        ],
        module: {
            rules: [
                {
                    test: /\.js$/,
                    exclude: /node_modules/,
                    use: {
                        loader: 'babel-loader',
                        options: {
                            presets: ['@babel/preset-env']
                        }
                    }
                },
                {
                    test: /\.s?[c]ss$/i,
                    use: [
                        MiniCssExtractPlugin.loader,
                        "css-loader",
                        'sass-loader',
                    ]
                },
                {
                    test: /\.css$/i,
                    loader: "css-loader",
                    options: {
                        sourceMap: true,
                    },
                },
                {
                    test: /\.(png|svg|jpg|jpeg|gif|webp)$/i,
                    type: 'asset/resource'
                },
            ]
        }
    }
};