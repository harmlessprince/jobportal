<template>
    <div>
       <!-- <Home/> -->

       <router-view @authenticated = "setAuthenticated"> </router-view>
    </div>
</template>

<script>
import Home from "./components/views/Home"
import Dashboard from "./components/dashboard/views/Dashboard"


export default {
    name: "App",
    components:{
        Home,
        // Dashboard
    },
    data() {
            return {
                authenticated:false,
                name: null,
                user_type: 0,
            }
        },
        mounted() {
            this.setDefaults()
        },
        methods : {
            setDefaults() {
                if (this.authenticated) {
                    let user = JSON.parse(localStorage.getItem('user'))
                    this.name = user.name
                    this.user_type = user.is_admin
                }
            },
            setAuthenticated() {
                if (localStorage.getItem('token') != null) {
                     this.authenticated = true
                }
                this.setDefaults()
            },
            logout(){
                localStorage.removeItem('token')
                localStorage.removeItem('user')
                this.change()
                this.$router.push('/login')
            }
        }
};
</script>

<style lang="stylus"></style>
