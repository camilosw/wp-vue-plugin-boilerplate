import Vue from 'vue'

import SimpleExample from './SimpleExample.vue'

// Allow multiple Vue apps in the same page
const appElements = document.querySelectorAll('.vue-simple-example')
Array.from(appElements).forEach(element => {
  /* eslint-disable no-new */
  new Vue({
    el: element,
    render: h => h(SimpleExample)
  })
})
