<template>
<div>
    <nav class="mt-2" v-if="(user_authoriy == 1)">
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

            <li class="nav-header">
                <router-link :to="{ name: 'student-dashboard' }">
                    STUDENT
                </router-link>
            </li>
            <li class="nav-item" @click="sendCompanent('find-a-job')">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-search"></i>
                    <p>
                        Find A Job
                    </p>
                </a>
            </li>
            <li class="nav-item" @click="sendCompanent('jobs-for-you')">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-smile-wink"></i>
                    <p>
                        Jobs For You
                    </p>
                </a>
            </li>
            <li class="nav-item" @click="sendCompanent('job-alert')">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-bell"></i>
                    <p>
                        Job Alert
                    </p>
                </a>
            </li>
            <li class="nav-item" @click="sendCompanent('job-applications')">
                <a href="#" class="nav-link">
                    <i class="nav-icon far fa-thumbs-up"></i>
                    <p>
                        Jobs Applications
                    </p>
                </a>
            </li>

            <li class="nav-item" @click="sendCompanent('saved-jobs')">
                <a href="#" class="nav-link">
                    <i class="nav-icon far fa-newspaper"></i>
                    <p>
                        Saved Jobs
                    </p>
                </a>
            </li>

            <li class="nav-item" @click="sendCompanent('upload')">
                <a href="#" class="nav-link">
                    <i class="nav-icon far fa-sticky-note"></i>
                    <p>
                        Upload CV/Resumes
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
        StudentPages: Array
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
            if (this.user_authoriy == 1) {
                if (this.StudentPages.includes(alias)) {
                    this.$emit("sendComponent", alias);
                }
            }
        }
    }

}
</script>
