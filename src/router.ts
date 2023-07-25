import Vue from 'vue';
import Router from 'vue-router';
import Index from '@/components/Index.vue';
import About from '@/components/About.vue';
import Rule from '@/components/Rule.vue';

Vue.use(Router);

export default new Router({
  mode: 'history',
  base: '/',
  routes: [
    {
      path: '/',
      name: 'Index',
      component: Index,
    },
    {
      path: '/about',
      name: 'about',
      component: About,
    },
    {
      path: '/rule',
      name: 'Rule',
      component: Rule,
    },
  ],
});
