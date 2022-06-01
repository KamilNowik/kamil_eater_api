import Vue from 'vue'
import VueRouter from 'vue-router'
import store from '../store'

Vue.use(VueRouter)

/* Guest Component */
const Login = () => import('../components/Login.vue' /* webpackChunkName: "resource/js/components/login" */)
const Register = () => import('../components/Register.vue' /* webpackChunkName: "resource/js/components/register" */)
/* Guest Component */

const App = () => import('../components/App.vue')


const Routes = [
    {
        name:"login",
        path:"/login",
        component:Login,
        meta:{
            middleware:"guest",
            title:`Login`
        }
    },
    {
        name:"register",
        path:"/register",
        component:Register,
        meta:{
            middleware:"guest",
            title:`Register`
        }
    },
    {
        name:"app",
        path:"/",
        component:App,
        meta:{
            middleware:"guest",
            title:`App`
        }
    }
]

var router  = new VueRouter({
    mode: 'history',
    routes: Routes
})

router.beforeEach((to, from, next) => {
    document.title = `${to.meta.title} - ${process.env.MIX_APP_NAME}`
    if(to.meta.middleware=="guest"){
        if(store.state.auth.authenticated){
            next({name:"dashboard"})
        }
        next()
    }else{
        if(store.state.auth.authenticated){
            next()
        }else{
            next({name:"login"})
        }
    }
})

export default router
