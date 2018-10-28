<template>
  <div>
    <Header/>
    <Content/>
  </div>
</template>

<script>
import Header from './components/Header.vue'
import Content from './components/Content.vue'

export default {
  name: 'ComponentsExample',
  components: {
    Header,
    Content
  },
  data () {
    return {}
  }
}
</script>
