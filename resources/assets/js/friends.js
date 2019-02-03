require('./bootstrap');
window.Vue = require('vue');
window.VueAxios = require('vue-axios').default;
window.VueRouter = require('vue-router').default;
window.Axios = require('axios').default;
let AppLayout = require('./components/App.vue');
const requestFriends = Vue.component('requestFriends', require('./components/requestFriends.vue'));

//Vue.forceUpdate();
Vue.use(VueRouter, VueAxios, Axios);
const routes = [
    {
        name: 'requestFriends',
        path: '/friendRequests',
        component: requestFriends
    },
    
    
    
];

const router = new VueRouter({ mode: 'history', routes: routes});

new Vue(
    Vue.util.extend(
        { router },
        AppLayout
    )
).$mount('#app');

Vue.component('add-friend',  require('./components/addFriend.vue'));

new Vue({
    el : '#addfriends',
    
});







