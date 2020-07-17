<template>
    <div>
        <Navbar />
        <Job />
        <Footer />
    </div>
</template>

<script>
import Navbar from "../Navbar";
import Footer from "../Footer";
import Job from "../Job";
export default {
    components: {
        Navbar,
        Footer,
        Job
        // Dashboard
    },
    data() {
        return {};
    },
    beforeCreate() {
      
    }
};
</script>

<style lang="stylus"></style>
