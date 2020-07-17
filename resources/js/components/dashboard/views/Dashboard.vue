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
                    <li class="nav-item has-treeview menu-open" @click="setComponent('main')">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-header">ADMIN</li>
                    <li class="nav-item has-treeview">
                        <a class="nav-link" @click="setComponent('student')">
                            <i class="nav-icon far fa-user"></i>
                            <p>
                                Student
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item" @click="setComponent('approvedStudent')">
                                <a class="nav-link">
                                    <i class="fas fa-user-shield nav-icon"></i>
                                    <p>Approved Student</p>
                                </a>
                            </li>
                            <li class="nav-item" @click="setComponent('registerStudent')">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-user-check nav-icon"></i>
                                    <p>Registered Student</p>
                                </a>
                            </li>
                            <li class="nav-item" @click="setComponent('unregisterStudent')">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-user-slash nav-icon"></i>
                                    <p>Unregistered Student</p>
                                </a>
                            </li>
                            <li class="nav-item" @click="setComponent('employedStudent')">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-user-tie nav-icon"></i>
                                    <p>Employed Student</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a class="nav-link" @click="setComponent('company')">
                            <i class="nav-icon fas fa-synagogue"></i>
                            <p>
                                Company
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-check-double"></i>
                                    <p>Approved Company</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-times"></i>
                                    <p>Unapproved Company</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a class="nav-link" @click="setComponent('jobs')">
                            <i class="nav-icon fas fa-hands"></i>
                            <p>
                                Jobs
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon far fa-handshake"></i>
                                    <p>Active Jobs</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-handshake-slash"></i>
                                    <p>Inactive Jobs</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-header">
                        <router-link :to="{ name: 'student-dashboard' }">
                            STUDENT
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-search"></i>
                            <p>
                                Find A Job
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-smile-wink"></i>
                            <p>
                                Jobs For You
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-bell"></i>
                            <p>
                                Job Alert
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-thumbs-up"></i>
                            <p>
                                Jobs Applications
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-newspaper"></i>
                            <p>
                                Saved Jobs
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-sticky-note"></i>
                            <p>
                                Upload CV/Resumes
                            </p>
                        </a>
                    </li>

                    <li class="nav-header">COMPANY</li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-hands"></i>
                            <p>
                                Manage Jobs
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
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

import Main from "../admin/Main";
import Students from "../admin/Students";
import Jobs from "../admin/Jobs";
import Company from "../admin/Company";
export default {
    // name: "Dashboard",
    components: {
        Topbar,
        Footer,
        Students,
        Main,
        Jobs,
        Company
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
                case "student":
                    this.activeComponent = Students;
                    this.$router.push({
                        name: "admin-pages",
                        params: {
                            page: "students"
                        }
                    });
                    break;
                case "company":
                    this.activeComponent = Company;
                    this.$router.push({
                        name: "admin-pages",
                        params: {
                            page: "companies"
                        }
                    });
                    break;
                case "jobs":
                    this.activeComponent = Jobs;
                    this.$router.push({
                        name: "admin-pages",
                        params: {
                            page: "jobs"
                        }
                    });
                    break;
                default:
                    this.activeComponent = Main;
                    this.$router.push({
                        name: "admin-dashboard"
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

<style lang="stylus"></style>
