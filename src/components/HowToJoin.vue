<template>
  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-12">
        <h2>接続方法</h2>
        <p>本サーバーを直接インターネットに公開していません。専用の接続ソフトウェアが必要になります。</p>

        <h3>Cloudflared のダウンロード</h3>
        <p><a href="https://developers.cloudflare.com/cloudflare-one/connections/connect-networks/downloads/" target="_blank">https://developers.cloudflare.com/cloudflare-one/connections/connect-networks/downloads/</a></p>
        <p>上記のリンクを開いて、お手持ちの環境に合った Cloudflared をダウンロードしてください。</p>

        <h3>利用方法 (Windows の場合)</h3>

        <h4>Cloudflared のインストール・準備</h4>
        <p>ダウンロードした Cloudflared を任意の場所に保存してください。（これはインストーラではありません。このまま使用します。）</p>
        <p>Shift キーを押したまま、Cloudflared を右クリックしてください。「パスとしてコピー」という選択肢があるのでそれをクリックします。これでクリップボードに Cloudflared のファイルパスが保存されます。</p>
        <p>続いて、Windows のアプリケーション一覧から「ターミナル」または「コマンドプロンプト」を開いてください。</p>
        <p>黒、または紺色の画面が表示されるので、Cloudflared のファイルパスを貼り付けします。</p>
        <p>続いて、太字の「<span style="font-weight: bold;"> access tcp --hostname minecraft-game.cube-unit.net --url localhost:25565</span>」をコピーして Cloudflared のファイルパスの続きに貼り付けします。このときファイルパスと <span style="font-weight: bold;">access</span> の間に一つスペースがあるようにしてください。</p>
        <p>ここまで終わったらエンターキーを押します。</p>
        <p>黒、または紺色の画面で「(日付)  INF Start Websocket listener host=localhost:25565」と表示されたら準備完了です。この画面はゲーム終了まで閉じてはいけません。</p>

        <h4>ゲームを始める方法</h4>
        <p>黒、または紺色の画面が立ち上がったまま、Minecraft Java 版を起動します。</p>
        <p>起動できたらマルチプレイから新規サーバーを作成します。</p>
        <p>このとき、サーバーアドレスには「<span style="font-weight: bold;">localhost:25565</span>」と入力してください。</p>
        <p>ログインできたら成功です。</p>
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
