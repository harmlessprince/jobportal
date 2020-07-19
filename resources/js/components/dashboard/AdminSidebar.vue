<template>
<div>
    <nav class="mt-2" v-if="(user_authoriy == 2)">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open" @click="sendCompanent('main')">
                <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-header">ADMIN</li>
            <li class="nav-item has-treeview">
                <a class="nav-link" @click="sendCompanent('student')">
                    <i class="nav-icon far fa-user"></i>
                    <p>
                        Student
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item" @click="sendCompanent('approvedStudent')">
                        <a class="nav-link">
                            <i class="fas fa-user-shield nav-icon"></i>
                            <p>Approved Student</p>
                        </a>
                    </li>
                    <li class="nav-item" @click="sendCompanent('registerStudent')">
                        <a href="#" class="nav-link">
                            <i class="fas fa-user-check nav-icon"></i>
                            <p>Registered Student</p>
                        </a>
                    </li>
                    <li class="nav-item" @click="sendCompanent('unregisterStudent')">
                        <a href="#" class="nav-link">
                            <i class="fas fa-user-slash nav-icon"></i>
                            <p>Unregistered Student</p>
                        </a>
                    </li>
                    <li class="nav-item" @click="sendCompanent('employedStudent')">
                        <a href="#" class="nav-link">
                            <i class="fas fa-user-tie nav-icon"></i>
                            <p>Employed Student</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview">
                <a class="nav-link" @click="sendCompanent('company')">
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
                <a class="nav-link" @click="sendCompanent('jobs')">
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
</div>
</template>

<script>
export default {
    props: {
        user_authoriy: Number,
        AdminPages: Array
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
            // const adminComp = ['main', 'student', 'approvedStudent', 'registerStudent', 'employedStudent', 'company', 'jobs'];
            const adminComp = [...this.AdminPages]
             console.log(adminComp)
            if (this.user_authoriy == 2) {
                if (this.AdminPages.includes(alias)) {
                    this.$emit("sendComponent", alias);
                }
            }
        }
    }

}
</script>
