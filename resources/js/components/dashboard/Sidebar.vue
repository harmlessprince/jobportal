<template>
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
                <a href="#" class="d-block">{{user_name}}</a>
            </div>
        </div>

        <!-- ------------------------------Admin Menu Starts here------------------------------->
        <nav class="mt-2" v-if="(user_authoriy == 2)">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open" @click="changeComponent('main')">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-header">ADMIN</li>
                <li class="nav-item has-treeview">
                    <a class="nav-link" @click="changeComponent('student')">
                        <i class="nav-icon far fa-user"></i>
                        <p>
                            Student
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item" @click="changeComponent('approvedStudent')">
                            <a class="nav-link">
                                <i class="fas fa-user-shield nav-icon"></i>
                                <p>Approved Student</p>
                            </a>
                        </li>
                        <li class="nav-item" @click="changeComponent('registerStudent')">
                            <a href="#" class="nav-link">
                                <i class="fas fa-user-check nav-icon"></i>
                                <p>Registered Student</p>
                            </a>
                        </li>
                        <li class="nav-item" @click="changeComponent('unregisterStudent')">
                            <a href="#" class="nav-link">
                                <i class="fas fa-user-slash nav-icon"></i>
                                <p>Unregistered Student</p>
                            </a>
                        </li>
                        <li class="nav-item" @click="changeComponent('employedStudent')">
                            <a href="#" class="nav-link">
                                <i class="fas fa-user-tie nav-icon"></i>
                                <p>Employed Student</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a class="nav-link" @click="changeComponent('company')">
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
                    <a class="nav-link" @click="changeComponent('jobs')">
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

            </ul>
        </nav>
        <!-- ------------------------------Admin Menu Emns here---------------------------------->
        <!---------------------------------------------------------------------------------------->
        <!---------------------------------------------------------------------------------------->
        <!---------------------------------------------------------------------------------------->
        <!---------------------------------------------------------------------------------------->
        <!---------------------------------------------------------------------------------------->
        <!---------------------------------------------------------------------------------------->
        <!----------------------------------------------------------------------------------------->
        <!-- ------------------------------Company Menu Starts here-------------------------------->
        <nav class="mt-2" v-if="(user_authoriy == 3)">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open" @click="changeComponent('managed-jobs')">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-header">COMPANY</li>
                <li class="nav-item" @click="changeComponent('managed-jobs')">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-hands"></i>
                        <p>
                            Manage Jobs
                        </p>
                    </a>
                </li>
                <li class="nav-item" @click="changeComponent('recieved-applications')">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-mail-bulk"></i>
                        <p>
                            Recieved Applications
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- ------------------------------Comapny Menu ends here---------------------------------->
        <!------------------------------------------------------------------------------------------>
        <!------------------------------------------------------------------------------------------>
        <!------------------------------------------------------------------------------------------->
        <!------------------------------------------------------------------------------------------->
        <!------------------------------------------------------------------------------------------->
        <!------------------------------------------------------------------------------------------->
        <!------------------------------------------------------------------------------------------->
        <!-- ------------------------------Student Menu ends here---------------------------------->
        <nav class="mt-2" v-if="(user_authoriy == 1)">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open" @click="changeComponent('main')">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-header">
                    <router-link :to="{ name: 'student-dashboard' }">
                        STUDENT
                    </router-link>
                </li>
                <li class="nav-item" @click="changeComponent('find-a-job')">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-search"></i>
                        <p>
                            Find A Job
                        </p>
                    </a>
                </li>
                <li class="nav-item" @click="changeComponent('jobs-for-you')">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-smile-wink"></i>
                        <p>
                            Jobs For You
                        </p>
                    </a>
                </li>
                <li class="nav-item" @click="changeComponent('job-alert')">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-bell"></i>
                        <p>
                            Job Alert
                        </p>
                    </a>
                </li>
                <li class="nav-item" @click="changeComponent('job-applications')">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-thumbs-up"></i>
                        <p>
                            Jobs Applications
                        </p>
                    </a>
                </li>

                <li class="nav-item" @click="changeComponent('saved-jobs')">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-newspaper"></i>
                        <p>
                            Saved Jobs
                        </p>
                    </a>
                </li>

                <li class="nav-item" @click="changeComponent('upload')">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-sticky-note"></i>
                        <p>
                            Upload CV/Resumes
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- ------------------------------Student Menu ends here---------------------------------->

    </div>
    <!-- /.sidebar -->
</aside>
</template>

<script>
export default {
    data() {
        return {
            user: null,
            user_authoriy: "",
            user_name: null
        };
    },

    beforeMount() {
        let user = JSON.parse(localStorage.getItem("user"));
        console.log(user)
        this.user_authoriy = user.authority_id;
        this.user_name = user.user_name;
    },
    methods: {
        changeComponent(alias) {
            const pages = {
                admin: ['main', 'student', 'approvedStudent', 'registerStudent', 'employedStudent', 'company', 'jobs'],
                student: ['main', 'find-a-job', 'job-alert', 'job-applications', 'jobs-for-you', 'saved-jobs', 'upload'],
                company: ['managed-jobs', 'recieved-applications'],
            }
            let adminPages = (pages["admin"]);
            let studentPages = (pages["student"]);
            let companyPages = (pages["company"]);

            if (this.user_authoriy == 1) {
                if (studentPages.includes(alias)) {
                    this.$emit("changeComponent", alias);
                }
            }

            if (this.user_authoriy == 2) {
                if (adminPages.includes(alias)) {
                    this.$emit("changeComponent", alias);
                }
            }

            if (this.user_authoriy == 3) {
                if (companyPages.includes(alias)) {
                    this.$emit("changeComponent", alias);
                }
            }

        },
    }
};
</script>

<style lang="stylus"></style>
