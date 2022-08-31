const path = require("path");

const isDev = process.env.npm_lifecycle_event !== "build";

const { WebpackManifestPlugin } = require("webpack-manifest-plugin");

const MiniCssExtractPlugin = require("mini-css-extract-plugin");

module.exports = {
  mode: isDev ? "development" : "production",
  entry: [
    path.resolve(__dirname, "src/index.js"),
    path.resolve(__dirname, "css/index.css"),
  ],
  output: {
    path: path.resolve(__dirname, "build"),
    filename: `main.js`,
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: [
          {
            loader: "babel-loader",
            options: {
              presets: ["@babel/preset-env"],
            },
          },
        ],
      },
      {
        test: /\.css$/,
        use: [
          MiniCssExtractPlugin.loader,
          "css-loader",

          {
            loader: "postcss-loader",
            options: {
              postcssOptions: {
                plugins: [
                  require("postcss-import"),
                  require("postcss-mixins"),
                  require("postcss-simple-vars"),
                  require("postcss-hexrgba"),
                  require("postcss-nested"),
                  require("autoprefixer"),
                ],
              },
            },
          },
        ],
      },
    ],
  },
  plugins: [
    new MiniCssExtractPlugin({ filename: `main.css` }),
    new WebpackManifestPlugin({ publicPath: "/build/" }),
  ],
};
