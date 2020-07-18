<template>
<div>

    <!-- Main Sidebar Container -->
    <Sidebar @changeComponent="setComponent"  />
    <Topbar :authenticated='authenticated' />
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
import Sidebar from "../Sidebar";
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
        Sidebar,
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
            activeComponent: null,
            authenticated: localStorage.getItem("user") != null,

        };
    },
    beforeUpdate() {
        // this.constructDatatable();
    },
    beforeMount() {
        $("body")
            .removeClass()
            .addClass("hold-transition sidebar-mini");
        this.setComponent(this.$route.params.page);
        // this.constructDatatable();
    },
    methods: {
        setComponent(value) {
            const pages = ['find-a-job', 'job-alert', 'job-applications', 'jobs-for-you', 'saved-jobs','upload'];
           
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
        }
    },
    // constructDatatable() {
    //     $(function () {
    //         $("#example1").DataTable({
    //             responsive: true,
    //             autoWidth: false
    //         });
    //     });
    // }
}

</script>

<style lang="stylus">

</style>
