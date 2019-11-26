<template>
  <div class="rexer_events">
    <filter-component :filters="filters" />
    <content-component :events="events" />
  </div>
</template>

<script>
import { env } from './helpers/config'
import FilterComponent from './components/Filter.vue'
import ContentComponent from './components/Content.vue'

export default {
  name: 'ComponentsExample',
  components: {
    FilterComponent,
    ContentComponent
  },
  data () {
    return {
      filters: null,
      events: null
    }
  },
  mounted () {
    this.initData()
  },
  methods: {
    initData () {
      Promise.all([
        fetch(env.EVENTS_CAT_URL).then(value => value.json()),
        fetch(env.EVENTS_URL).then(value => value.json())
      ]).then(([filters, events]) => {
        this.filters = filters
        this.events = events
      }).catch((err) => {
        console.log(err)
      })
    }
  }
}
</script>
