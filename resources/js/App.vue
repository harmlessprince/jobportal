<template>
    <div>
       <!-- <Home/> -->
        <router-view/>
    </div>
</template>

<script>
import Home from "./components/views/Home"
import Dashboard from "./components/dashboard/views/Dashboard"


export default {
    name: "App",
    components:{
        Home,
        Dashboard
    },
    data() {
        return {};
    }
};
</script>

<style lang="stylus"></style>
