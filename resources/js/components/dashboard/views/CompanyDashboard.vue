<template>
<div>
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
import Jobs from "../company/Jobs";
import RecievedApplications from "../company/RecievedApplications";

export default {
    // name: "student-dashboard",
    components: {
        Topbar,
        Sidebar,
        Footer,
        Jobs,
        RecievedApplications,
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
