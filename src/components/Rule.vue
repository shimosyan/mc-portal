<template>
  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-12">
        <h2>ルール</h2>
        <p>・建物を建てる場合はできるだけ看板を立て所有者の名前を書いて下さい。また周辺に他の人が建設した建物がある場合は邪魔にならないように建設して下さい。<br>
        ・トラップタワーおよびスポーンブロックを用いたあらゆるトラップは必ず自動停止機能などの安全措置を施して下さい。<br>
        ・アイテムや施設を他人とシェアする場合は、その旨(所有権の放棄)を明記してください。<br>
        ・クライアント依存で動くMOD(ミニマップやレシピビュワーなど)は各自導入してください。</p>

        <p>以下の例を始めとする悪質と思われる行為を発見した場合、該当の者に対してBANを行うことがあります。<br>
        また、該当の者が参加者からの招待による場合、招待した者も連帯責任としてBANを行うことがあります。<br>
        ・所有権が放棄されていない他人のアイテムを盗む・破壊する行為。<br>
        ・セクハラやパワハラなど、各ハラスメント行為。<br>
        ・その他、公序良俗に反する行為。</p>
      </div>
    </div>
    <hr>

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
