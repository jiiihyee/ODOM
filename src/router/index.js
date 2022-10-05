import Vue from 'vue';
import Router from 'vue-router';

Vue.use(Router);

export default new Router({
	mode: 'history',
     routes: [
    //로그인 시 대체
    // { path: "/", redirect: "/login" },
    {path: '/', redirect: '/home'},

    {
      path: '/home',
      name: 'mainhome',
      
      component: () => import('@/view/MainHome.vue'),
    },
    {
      path: '/information',
      name: 'maininfo',
      
      component: () => import('@/view/MainInfo.vue'),
    },
]
});