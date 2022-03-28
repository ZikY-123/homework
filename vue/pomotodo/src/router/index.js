import Vue from 'vue'
import Router from 'vue-router'
import Pomotodo from '@/components/Pomotodo'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'Pomotodo',
      component: Pomotodo
    }
  ]
})