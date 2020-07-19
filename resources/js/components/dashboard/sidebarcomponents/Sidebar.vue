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
        <AdminSidebar @sendComponent="changeComponent" :AdminPages="admin" :user_authoriy="user_authoriy" />
        <!-- ------------------------------Admin Menu Emns here---------------------------------->
        <!----------------------------------------------------------------------------------------->
        <!-- ------------------------------Company Menu Starts here-------------------------------->
        <CompanySidebar @sendComponent="changeComponent" :CompanyPages="company" :user_authoriy="user_authoriy" />
        <!-- ------------------------------Comapny Menu ends here---------------------------------->

        <!-- ------------------------------Student Menu ends here---------------------------------->
        <StudentSidebar @sendComponent="changeComponent" :StudentPages="student" :user_authoriy="user_authoriy" />
        <!-- ------------------------------Student Menu ends here---------------------------------->

    </div>
    <!-- /.sidebar -->
</aside>
</template>

<script>
import AdminSidebar from './AdminSidebar'
import StudentSidebar from './StudentSidebar'
import CompanySidebar from './CompanySidebar'
export default {
    components: {
        AdminSidebar,
        StudentSidebar,
        CompanySidebar
    },
    data() {
        return {
            user: null,
            user_authoriy: "",
            user_name: null,
            admin: Array('main', 'student', 'approvedStudent', 'registerStudent', 'employedStudent', 'company', 'jobs'),
            student: ['main', 'find-a-job', 'job-alert', 'job-applications', 'jobs-for-you', 'saved-jobs', 'upload'],
            company: ['managed-jobs', 'recieved-applications'],

        };
    },

    beforeMount() {
        let user = JSON.parse(localStorage.getItem("user"));
        this.user_authoriy = user.authority_id;
        this.user_name = user.username;
    },
    methods: {
        changeComponent(alias) {

            let adminPages = this.admin;
            let studentPages = this.student;
            let companyPages = this.company;

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
