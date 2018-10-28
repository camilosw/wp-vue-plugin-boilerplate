import Vue from 'vue'
import ComponentsExample from './ComponentsExample.vue'

// Allow multiple Vue apps in the same page
const appElements = document.querySelectorAll('.vue-components-example')
Array.from(appElements).forEach(element => {
  /* eslint-disable no-new */
  new Vue({
    el: element,
    render: h => h(ComponentsExample)
  })
})
