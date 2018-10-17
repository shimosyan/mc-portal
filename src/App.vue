<template>
<div>
  <b-navbar toggleable="md" type="dark" variant="success">
    <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>
    <b-navbar-brand v-bind:to="{ name : 'Index'}" class="logo"><img :src="imageSrc_navLogo"> Minecraft#しもしゃん鯖</b-navbar-brand>
    <b-collapse is-nav id="nav_collapse">
      <b-navbar-nav>
        <b-nav-item v-bind:to="{ name : 'About'}">このサーバーについて</b-nav-item>
        <b-nav-item v-bind:to="{ name : 'Rule'}">ルール</b-nav-item>
        <b-nav-item v-bind:to="{ name : 'Mod'}">Modリスト</b-nav-item>
        <b-nav-item href="/minecraft/map/" target="_blank">Dynmap <img class="icon" :src="imageSrc_newWindow" /></b-nav-item>
      </b-navbar-nav>
    </b-collapse>
  </b-navbar>

  <main role="main">
    <div id="app">
      <router-view/>
    </div>
  </main>
</div>
</template>

<script>
export default {
  name: 'App',
  data () {
    return {
      imageSrc_navLogo: require('./assets/navLogo.png'),
      imageSrc_newWindow: require('./assets/new_window.svg')
    }
  }
}
</script>

<style>
@import url(https://fonts.googleapis.com/earlyaccess/notosansjp.css);
#app {
  font-family: 'Noto Sans JP';
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
}

.logo img {
  width: 24px;
  height: auto;
  vertical-align: middle;
}

.icon {
  width: 12px;
  height: auto;
  vertical-align: middle;
}

@media screen and (max-width: 350px) {
  .navbar-brand{
    margin-right: 0.2rem;
    font-size: 1rem;
  }
}
</style>
