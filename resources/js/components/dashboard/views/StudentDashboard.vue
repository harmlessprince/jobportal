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

                    <li class="nav-header">
                        <router-link :to="{ name: 'student-dashboard' }">
                            STUDENT
                        </router-link>
                    </li>
                    <li class="nav-item" @click="setComponent('find-a-job')">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-search"></i>
                            <p>
                                Find A Job
                            </p>
                        </a>
                    </li>
                    <li class="nav-item" @click="setComponent('jobs-for-you')">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-smile-wink"></i>
                            <p>
                                Jobs For You
                            </p>
                        </a>
                    </li>
                    <li class="nav-item" @click="setComponent('job-alert')">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-bell"></i>
                            <p>
                                Job Alert
                            </p>
                        </a>
                    </li>
                    <li class="nav-item" @click="setComponent('job-applications')">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-thumbs-up"></i>
                            <p>
                                Jobs Applications
                            </p>
                        </a>
                    </li>

                    <li class="nav-item" @click="setComponent('saved-jobs')">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-newspaper"></i>
                            <p>
                                Saved Jobs
                            </p>
                        </a>
                    </li>

                    <li class="nav-item" @click="setComponent('upload')">
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

import Main from "../student/Main";
import FindJob from "../student/FindJob";
import JobAlert from "../student/JobAlert";
import JobsApplication from "../student/JobsApplication";
import JobsForYou from "../student/JobsForYou";
import SavedJobs from "../student/SavedJobs";
import UploadCVResumes from "../student/UploadCVResumes";
export default {
    // name: "student-dashboard",
    components: {
        Topbar,
        Footer,
        Main,
        FindJob,
        JobAlert,
        JobsApplication,
        JobsForYou,
        SavedJobs,
        UploadCVResumes
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
                case "find-a-job":
                    this.activeComponent = FindJob;
                    this.$router.push({
                        name: "student-pages",
                        params: {
                            page: "find-job"
                        }
                    });
                    break;
                case "job-alert":
                    this.activeComponent = JobAlert;
                    this.$router.push({
                        name: "student-pages",
                        params: {
                            page: "job-alert"
                        }
                    });
                    break;
                case "job-applications":
                    this.activeComponent = JobsApplication;
                    this.$router.push({
                        name: "student-pages",
                        params: {
                            page: "job-application"
                        }
                    });
                    break;

                case "jobs-for-you":
                    this.activeComponent = JobsForYou;
                    this.$router.push({
                        name: "student-pages",
                        params: {
                            page: "job-for-you"
                        }
                    });
                    break;
                case "saved-jobs":
                    this.activeComponent = SavedJobs;
                    this.$router.push({
                        name: "student-pages",
                        params: {
                            page: "saved-job"
                        }
                    });
                    break;
                case "upload":
                    this.activeComponent = UploadCVResumes;
                    this.$router.push({
                        name: "student-pages",
                        params: {
                            page: "cv-upload"
                        }
                    });
                    break;
                default:
                    this.activeComponent = Main;
                    this.$router.push({
                        name: "student-dashboard"
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
