import Vue from 'vue'
import View from './view/View.vue'

// Allow multiple Vue apps in the same page
const appElements = document.querySelectorAll('.shortcode-example')

Array.from(appElements).forEach(element => {
  const atts = element.getAttribute('data-atts')
  /* eslint-disable no-new */
  let vm = new Vue({
    el: element,
    data: {
      atts: null
    },
    render: h => h(View)
  })
  vm.atts = atts
})
