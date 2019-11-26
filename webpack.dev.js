const merge = require('webpack-merge')
const common = require('./webpack.common.js')
const BrowserSyncPlugin = require('browser-sync-webpack-plugin')

module.exports = merge(common, {
  mode: 'development',
  devtool: 'eval-source-map',
  plugins: [
    new BrowserSyncPlugin({
      proxy: 'http://localhost:8888/wordpress/rexer/',
      files: [
        './**/*.php',
        './src-js/*'
      ],
      port: 3000
    })
  ]
})
