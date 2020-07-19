<template>
<div>
    <nav class="mt-2" v-if="(user_authoriy == 3)">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open" @click="sendCompanent('managed-jobs')">
                <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>

            <li class="nav-header">COMPANY</li>
            <li class="nav-item" @click="sendCompanent('managed-jobs')">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-hands"></i>
                    <p>
                        Manage Jobs
                    </p>
                </a>
            </li>
            <li class="nav-item" @click="sendCompanent('recieved-applications')">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-mail-bulk"></i>
                    <p>
                        Recieved Applications
                    </p>
                </a>
            </li>
        </ul>
    </nav>
</div>
</template>

<script>
export default {
    props: {
        user_authoriy: Number,
        CompanyPages: Array
    },
    components: {

    },
    data() {
        return {

        }
    },
    beforeMount() {

    },
    methods: {
        sendCompanent(alias) {
            if (this.user_authoriy == 3) {
                if (this.CompanyPages.includes(alias)) {
                    this.$emit("sendComponent", alias);
                }
            }
        }
    }

}
</script>
