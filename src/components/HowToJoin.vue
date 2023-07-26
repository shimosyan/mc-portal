<template>
  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-12">
        <h2>工事中</h2>
      </div>
    </div>

    <hr>

  </div> <!-- /container -->
</template>

<script lang="ts">
import { Component, Vue } from 'vue-property-decorator';

@Component
export default class About extends Vue {
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.container{
  margin-top: 60px;
}
</style>
