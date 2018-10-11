import Vue from 'vue'
import Router from 'vue-router'
import Index from '@/components/Index'
import About from '@/components/About'
import Rule from '@/components/Rule'
import HelloWorld from '@/components/HelloWorld'

Vue.use(Router)

export default new Router({
  base: '/minecraft',
  routes: [
    {
      path: '/',
      name: 'Index',
      component: Index
    },
    {
      path: '/about',
      name: 'About',
      component: About
    },
    {
      path: '/rule',
      name: 'Rule',
      component: Rule
    },
    {
      path: '/HelloWorld',
      name: 'HelloWorld',
      component: HelloWorld
    }
  ]
})
