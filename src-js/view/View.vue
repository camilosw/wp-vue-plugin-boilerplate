<template>
  <div class="">
    <!-- <content-component :events="events" /> -->
  </div>
</template>

<script>

// import ContentComponent from './components/Content.vue'

export default {
  name: 'ComponentsExample',
  components: {
    // ContentComponent
  },
  data () {
    return {
      events: null
    }
  },
  mounted () {
    this.initData()
  },
  methods: {
    initData () {}
  }
}
</script>
