
<template>
<div>
    <!-- <Sidebar @nextComp="setComponent" /> -->
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
            <img src="/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8" />
            <span class="brand-text font-weight-light">Job Portal</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" />
                </div>
                <div class="info">
                    <a href="#" class="d-block">User Name</a>
                </div>
            </div>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview menu-open" @click="setComponent('managed-jobs')">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>

                    <li class="nav-header">COMPANY</li>
                    <li class="nav-item" @click="setComponent('managed-jobs')">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-hands"></i>
                            <p>
                                Manage Jobs
                            </p>
                        </a>
                    </li>
                    <li class="nav-item" @click="setComponent('recieved-applications')">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-mail-bulk"></i>
                            <p>
                                Recieved Applications
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    <Topbar />
    <component :is="activeComponent"></component>

    <Footer />
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
</template>

<script>
import Topbar from "../Topbar";
// import Sidebar from "../Sidebar";
import Footer from "../../Footer";

import Jobs from "../company/Jobs";
import RecievedApplications from "../company/RecievedApplications";

export default {
    // name: "student-dashboard",
    components: {
        Topbar,
        Footer,
        Jobs,
        RecievedApplications,
    },
    data() {
        return {
            activeComponent: null
        };
    },
    beforeUpdate() {
        this.constructDatatable();
    },
    beforeMount() {
        $("body")
            .removeClass()
            .addClass("hold-transition sidebar-mini");
        this.setComponent(this.$route.params.page);
        this.constructDatatable();
    },
    methods: {
        setComponent(value) {
            switch (value) {
                case "managed-jobs":
                    this.activeComponent = Jobs;
                    this.$router.push({
                        name: "company-pages",
                        params: {
                            page: "managed-jobs"
                        }
                    });
                    break;
                case "recieved-applications":
                    this.activeComponent = RecievedApplications;
                    this.$router.push({
                        name: "company-pages",
                        params: {
                            page: "recieved-applications"
                        }
                    });
                    break;
                default:
                    this.activeComponent = Jobs;
                    this.$router.push({
                        name: "company-dashboard"
                    });
                    break;
            }
        },
        constructDatatable() {
            $(function () {
                $("#example1").DataTable({
                    responsive: true,
                    autoWidth: false
                });
            });
        }
    }
};
</script>

<style lang="stylus">

</style>
