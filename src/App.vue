<template>
<div>
  <header>
    <b-navbar toggleable="md" type="dark" variant="success">
      <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>
      <b-navbar-brand to="/" class="logo"><img :src="imageSrc_navLogo"> Minecraft #しもしゃん鯖</b-navbar-brand>
      <b-collapse is-nav id="nav_collapse">
        <b-navbar-nav>
          <b-nav-item to="/about">このサーバーについて</b-nav-item>
          <b-nav-item to="/how-to-join">サーバーへの参加方法</b-nav-item>
          <b-nav-item to="/rule">ルール</b-nav-item>
          <b-nav-item href="/map/" target="_blank">Dynmap <img class="icon" :src="imageSrc_newWindow" /></b-nav-item>
        </b-navbar-nav>
      </b-collapse>
    </b-navbar>
  </header>

  <main role="main">
    <div id="app">
      <router-view/>
    </div>
  </main>

  <footer class="footer">
    <div class="container">
      <p class="text-muted">Copyright © 2011-{{ year }} <a href="https://cube-unit.net/">Cube-Unit</a> All Rights Reserved.</p>
    </div>
  </footer>
</div>
</template>

<script>
export default {
  name: 'App',
  data() {
    return {
      imageSrc_navLogo: require('./assets/navLogo.png'),
      imageSrc_newWindow: require('./assets/new_window.svg'),
      year: new Date().getFullYear(),
    };
  },
};
</script>

<style>
@import url(https://fonts.googleapis.com/earlyaccess/notosansjp.css);
#app {
  font-family: 'Noto Sans JP';
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
}

p {
  margin-top: 1rem !important;
  margin-bottom: 1rem !important;
}

h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6{
  margin-top: 2rem;
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

