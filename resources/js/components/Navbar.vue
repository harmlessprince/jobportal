<template>
<div>
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
        <div class="container">
            <a href="" class="navbar-brand">
                <span class="brand-text font-weight-bold">
                    JOb Port
                    <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8" />
                    L</span>
            </a>

            <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Right navbar links -->
            <!-- <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto"> -->

            <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                <!-- Left navbar links -->
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item">
                        <router-link :to="{name: 'login'}">
                            <a class="nav-link">Login</a>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Logout</a>
                    </li>
                    <li class="nav-item">
                        <router-link :to="{ name: 'admin-dashboard' }">
                            <a class="nav-link">Dashboard</a>
                        </router-link>
                    </li>
                </ul>
            </div>

            <!-- </ul> -->
        </div>
    </nav>
    <!-- /.navbar -->
</div>
</template>

<script>
export default {
    data() {
        return {};
    }
};
</script>

<style lang="stylus"></style>
