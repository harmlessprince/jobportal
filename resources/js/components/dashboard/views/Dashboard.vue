<template>
<div>
    <!-- <Sidebar @nextComp="setComponent" /> -->
    <!-- Main Sidebar Container -->
    <Sidebar @changeComponent="setComponent" />
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
import Sidebar from "../sidebarcomponents/Sidebar";
import Footer from "../../Footer";

import Main from "../admin/Main";
import Students from "../admin/Students";
import Jobs from "../admin/Jobs";
import Company from "../admin/Company";
export default {
    // name: "Dashboard",
    components: {
        Topbar,
        Sidebar,
        Footer,
        Students,
        Main,
        Jobs,
        Company
    },
    data() {
        return {
            activeComponent: null,
             authenticated: localStorage.getItem("user") != null,
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
