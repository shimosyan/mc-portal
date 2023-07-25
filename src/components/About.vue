<template>
  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-12">
        <h2>このサーバーについて</h2>
        <p>このサーバーはMinecraftの身内向けサーバーです。</p>
        <p>Twitterでは「#しもしゃん鯖」のハッシュタグで運用します。</p>
        <hr>
        <h2>参加条件</h2>
        <p>身内向けサーバーですので、基本的に管理人が知っている方もしくは参加者からの紹介のみの参加とさせて頂きます。ご了承下さい。</p>
        <p>参加したい場合は、管理人や参加者にお問い合わせ下さい。</p>
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
