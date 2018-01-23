import Vue from 'vue'
import Router from 'vue-router'
import HelloWorld from '@/components/HelloWorld'
import Npcs from '@/components/Npcs'
import Index from '@/components/Index'
import NewNpc from '@/components/NewNpc'

Vue.use(Router)

export default new Router({
	mode: 'history',
	routes: [
	  {
	    path: '/',
	    name: 'Index',
	    component: Index
	  },
	  {
	    path: '/npcs',
	    name: 'Npcs',
	    component: Npcs
	  },
	  {
	    path: '/new-npc',
	    name: 'NewNpc',
	    component: NewNpc
	  }
	 
	]
})
