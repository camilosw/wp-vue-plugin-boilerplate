# WordPress and Vue.js plugin boilerplate

Boilerplate to create a plugin that integrate Vue.js in selected pages. It's not intended for a headless WordPress.

## Features

- Shortcode examples that illustrate how to integrate Vue.js in your pages
- Auto reload browser with Browsersync
- SCSS ready
- Code spliting
- Linter included

## Usage

### Develop

```bash
$ npm install
$ npm start
```

### Build

```bash
$ npm build
```

### Browsersync

Edit `webpack.dev.js` with your develop path:

```javascript
new BrowserSyncPlugin({
  proxy: 'http://mysite.localhost:8080', // Edit this line
  files: [
    './**/*.php',
    './src-js/*'
  ],
  port: 3000
})
```

### Code spliting

All your Vue.js code will be in `src-js` folder. You can create multiple entry points in `webpack.common.js` to split the code:

```javascript
entry: {
  'simple-example': './src-js/simple-example.js',
  'components-example': './src-js/components-example.js'
},
```

### Shortcode examples

Include the `[simple_example]` or `[components_example]` shortcodes in any page to see the examples working. You can add them multiple times in the same page.
