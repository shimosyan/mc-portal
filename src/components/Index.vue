<template>
  <div class='index'>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class='jumbotron'>
      <div class='container'>
        <h1 class='display-4'>Cube-Unit Minecraft</h1>
        <p>This is Minecraft Game Server. Let's make the world!</p>
      </div>
    </div>

    <div class='container'>
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
          <h2>注意</h2>
          <p>このサーバーは試験運用中です。</p>
          <p>予告なく仕様やルールの変更、サーバーの停止等がありますのでご了承ください。</p>
        </div>
      </div>
      <hr>
      <div class='row'>
        <div class='col-md-8 border-right'>
          <h2>現在のサーバーについて</h2>

          <table class="table">
            <tbody>
              <tr>
                <td>状態</td>
                <td v-if="server.server_status === null">取得中...</td>
                <td v-else-if="server.server_status === true"><span class="text-success">●</span> オンライン</td>
                <td v-else><span class="text-danger">●</span> オフライン</td>
              </tr>
              <tr>
                <td>サーバーバージョン</td>
                <td v-if="server.server_status === null">取得中...</td>
                <td v-else-if="server.server_version !== null">{{ server.server_version }}</td>
                <td v-else>取得できません。</td>
              </tr>
              <tr>
                <td>現在の参加人数 / 参加可能人数</td>
                <td v-if="server.server_status === null">取得中...</td>
                <td v-else-if="server.now_player !== null">{{ server.now_player }}人 / {{ server.max_player }}人</td>
                <td v-else>取得できません。</td>
              </tr>
            </tbody>
          </table>
          <transition name="fade">
            <div class="card" v-if="server.now_player > 0">
              <div class="card-body">
                <h5 class="card-title">ログイン中のメンバー</h5>
                <transition-group name="player" tag="div" class="list" appear>
                  <div v-for='player in server.players' :key='player.name' class="card card-body card-element text-center">
                    <img v-bind:src = "player.src" class="rounded"/>
                    <p class="card-text">{{ player.name }}</p>
                  </div>
                </transition-group>
              </div>
            </div>
          </transition>
        </div>
        <div class='col-md-4 border-right'>
          <h2>参加者リスト</h2>
          <ul>
            <li v-for='item in users' :key='item.uuid'>
              <img v-bind:src = "item.src" /> {{ item.name }}
            </li>
          </ul>
          <p><router-link class='btn btn-secondary' to='/about' role='button'>参加について &raquo;</router-link></p>
        </div>
      </div>

      <hr>

    </div> <!-- /container -->
  </div>
</template>

<script>
import axios from 'axios';
export default {
  name: 'Index',
  data() {
    return {
      users: null,
      server: {
        server_status: null,
        server_address: null,
        server_version: null,
        now_player: null,
      },
    };
  },
  mounted() {
    axios.get('/api/getWhitelist.php')
      .then(
        function(response) {
          this.users = response.data;
        }.bind(this),
      );

    const self = this;

    setInterval(() => {
      axios.get('/api/getServerinfo.php')
        .then(
          function(response) {
            this.server = response.data;
          }.bind(self),
        )
        .catch((error) => {
          this.server = {
            server_status: false,
            server_address: null,
            server_version: null,
            now_player: null,
          };
        });
    }, 5000);
  },
};
</script>

<!-- Add 'scoped' attribute to limit CSS to this component only -->
<style scoped>
.jumbotron {
  background-image: url('../assets/minecraft_top.png');
  background-size: cover;
  background-position: center 60%;
  color: #FFF;
  text-shadow:2px 2px 3px #000;
}

.card-element {
  display: inline-flex;
  margin: 0.5rem;
  width: 9.6rem;
}

.card-element > img {
  height: 64px;
  width: 64px;
  margin: 0 auto;
}

.fade-enter-active, .fade-leave-active {
  transition: opacity .5s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
  opacity: 0;
}

.player-enter-active, .player-leave-active {
  transition: transform .5s, opacity .5s;
}
.player-move:not(.player-leave-active) {
  transition: transform .5s;
}
/* 表示される時は上からスライド */
.player-enter {
  opacity: 0;
  transform: translateY(-20px);
}
/* 消える時は縮小される */
.player-leave-to {
  opacity: 0;
  transform: scale(0.8);
}
.player-leave-active {
  position: absolute;
}
</style>
