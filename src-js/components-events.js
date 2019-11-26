import Vue from 'vue'
import ComponentRexer from './ComponentsEvents.vue'

// Allow multiple Vue apps in the same page
const appElements = document.querySelectorAll('.rexer-events')
Array.from(appElements).forEach(element => {
  /* eslint-disable no-new */
  new Vue({
    el: element,
    render: h => h(ComponentRexer)
  })
})
