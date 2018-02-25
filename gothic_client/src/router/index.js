import Vue from 'vue'
import Router from 'vue-router'
import Index from '@/components/Index'
import Npcs from '@/components/npc/Npcs'
import NewNpc from '@/components/npc/NewNpc'
import NpcProfile from '@/components/npc/NpcProfile'
import AdminPanel from '@/components/admin/AdminPanel'


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
	    path: '/npc-new',
	    name: 'NewNpc',
	    component: NewNpc
	  },
	  {
	    path: '/npc-profile/:id',
	    name: 'NpcProfile',
	    component: NpcProfile,
	    props: true
	  },
	  {
	    path: '/admin-panel',
	    name: 'AdminPanel',
	    component: AdminPanel
	  },
	  
	]
})
