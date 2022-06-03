import Vue from 'vue';
import VueRouter from 'vue-router';
import store from '../store';

Vue.use(VueRouter);

const App = () => import('../vue/App.vue');

const Routes = [
    {
        name: "app",
        path: "/",
        component: App,
        meta: {
            middleware: "guest",
            title: `App`
        }
    }
]

const router = new VueRouter({
    mode: 'history',
    routes: Routes
});

router.beforeEach((to, from, next) => {
    document.title = 'KamilEater Index';
    if (to.meta.middleware === "guest") {
        if (store.state.auth.authenticated) {
            next({name: "dashboard"})
        }
        next()
    } else {
        if (store.state.auth.authenticated) {
            next()
        } else {
            next({name: "login"})
        }
    }
})

export default router
