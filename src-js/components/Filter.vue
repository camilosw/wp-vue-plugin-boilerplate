<template>
  <div class="rexer_events__filters">
    <ul class="rexer_events__filters-wrap">
      <li class="rexer_events__filter filter_all">
        <a
          href="#"
          title=""
          @click.prevent="filterHandle('all')"
        >
          All
        </a>
      </li>
      <li
        v-for="(item, index) in filters"
        :key="index"
        :class="item.custom_class"
        class="rexer_events__filter"
      >
        <a
          href="#"
          @click.prevent="filterHandle(item.slug)"
        >
          {{ item.name }}
        </a>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  name: 'FilterEvents',
  props: {
    filters: {
      type: Array,
      default: function () {
        return []
      }
    }
  },
  methods: {
    filterHandle (val) {
      console.log(val)
    }
  }
}
</script>

<style lang="scss" scoped>
$black: #000;
$purple: #b004ff;
$blue: #0248ff;
$green: #00ff00;

.rexer_events{
  &__filters{
    display: flex;
    margin: 2rem 0;
    &-wrap{
      list-style: none;
      padding: 0;
      margin:0;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }
  }
  &__filter {
    margin: 0.5rem;
    width: 100%;
    a {
      padding: 0.5rem 3rem;
      display: block;
      text-align: center;
      font-weight: bold;
      font-size: 1rem;
      border: 4px solid $black;
    }
    &.filter_all{
      a {
        background: $black;
        color: #fff;
      }
    }
    &.is-green{
      a {
        border-color: $green;
        color: $green;
      }
    }
    &.is-purple{
      a {
        border-color: $purple;
        color: $purple;
      }
    }
    &.is-blue{
      a {
        border-color: $blue;
        color: $blue;
      }
    }
  }
}
</style>
