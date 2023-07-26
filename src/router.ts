import Vue from 'vue';
import Router from 'vue-router';
import Index from '@/components/Index.vue';
import About from '@/components/About.vue';
import HowToJoin from '@/components/HowToJoin.vue';
import Rule from '@/components/Rule.vue';

Vue.use(Router);

export default new Router({
  mode: 'history',
  base: '/',
  routes: [
    {
      path: '/',
      name: 'index',
      component: Index,
    },
    {
      path: '/about',
      name: 'about',
      component: About,
    },
    {
      path: '/how-to-join',
      name: 'how-to-join',
      component: HowToJoin,
    },
    {
      path: '/rule',
      name: 'Rule',
      component: Rule,
    },
  ],
});
