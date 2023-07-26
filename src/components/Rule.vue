<template>
  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-12">
        <h2>ルール</h2>
        <p>本サーバーで遊んでいただく際には、本ページに記載されているルールに同意してください。サーバーへのアクセスをもって同意したとみなします。</p>
        <ul>
          <li>建物を建てる場合はできるだけ看板を立て所有者の名前を書いて下さい。また周辺に他の人が建設した建物がある場合は邪魔にならないように建設して下さい。</li>
          <li>トラップタワーおよびスポーンブロックを用いたあらゆるトラップは必ず自動停止機能などの安全措置を施して下さい。</li>
          <li>アイテムや施設を他人とシェアする場合は、その旨(所有権の放棄)を明記してください。</li>
          <li>クライアント依存で動く MOD (ミニマップやレシピビュワーなど)は各自導入してください。</li>
        </ul>

        <p>以下の例を始めとする悪質と思われる行為を発見した場合、該当の者に対してBANを行うことがあります。</p>
        <p>また、該当の者が参加者からの招待による場合、招待した者も連帯責任としてBANを行うことがあります。</p>
        <ul>
          <li>所有権が放棄されていない他人のアイテムを盗む・破壊する行為。</li>
          <li>セクハラやパワハラなど、各ハラスメント行為。</li>
          <li>その他、公序良俗に反する行為。</li>
        </ul>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-12">
        <h2>制限について</h2>
        <p>現在、以下の制限を実施しています。</p>
        <ul>
          <li>ワールドの境界は X, Y それぞれ -7500 ～ +7500 までの範囲に制限しています。</li>
        </ul>
      </div>
    </div>
  </div> <!-- /container -->
</template>

<script lang="ts">
import { Component, Vue } from 'vue-property-decorator';

@Component
export default class Rule extends Vue {
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.container{
  margin-top: 60px;
}
</style>
