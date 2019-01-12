<template>
  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-12">
        <h2>このサーバーについて</h2>
        <p>このサーバーはMinecraftの身内向けサーバーです。1.7.10ベースの各MODが遊べるサーバーを用意しております。</p>
        <p>Twitterでは「#しもしゃん鯖」のハッシュタグで運用します。</p>
        <h3>定期処理について</h3>
        <p>このサーバーでは下記の通り定期的に特定の処理を実行します。</p>
        <table class="table">
          <thead class="thead-light">
            <tr>
              <th>実行時間</th>
              <th>処理内容</th>
              <th>備考</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>毎日 0時、6時、12時、18時</td>
              <td>時報</td>
              <td></td>
            </tr>
            <tr>
              <td>毎日 4時</td>
              <td>定期バックアップ</td>
              <td></td>
            </tr>
            <tr>
              <td>毎週水曜日 5時</td>
              <td>定期再起動</td>
              <td>再起動の30分前と10分前に告知アナウンスが流れます。<br>再起動中はゲームに参加できません。</td>
            </tr>
          </tbody>
        </table>
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
