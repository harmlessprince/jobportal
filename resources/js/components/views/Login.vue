<template>
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b>Admin</b>LTE</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="alert alert-danger" v-if="has_error">
                    <p>
                        {{ error }}
                    </p>
                </div>
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form autocomplete="off"  @submit.prevent="login">
                    <div class="input-group mb-3">
                        <input
                            type="email"
                            class="form-control"
                            placeholder="Email"
                            v-model="email"
                            name="email"
                            id="email"
                        />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input
                            type="password"
                            class="form-control"
                            placeholder="Password"
                            v-model="password"
                            name="password"
                            id="password"
                        />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember" />
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button
                                type="submit"
                                class="btn btn-primary btn-block"
                            >
                                Sign In
                            </button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center mb-3">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i> Sign in using
                        Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i> Sign in using
                        Google+
                    </a>
                    <a href="#" class="btn btn-block btn-info text-white">
                        <i class="fab fa-twitter mr-2"></i> Sign in using
                        Twitter
                    </a>
                </div>
                <!-- /.social-auth-links -->

                <p class="mb-1">
                    <a href="#">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <router-link :to="{ name: 'Register' }">
                        <a href="#" class="text-center"
                            >Register a new membership</a
                        >
                    </router-link>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
</template>

<script>
import { LoginRoute } from "../../auth";

export default {
    data() {
        return {
            email: "ncollins@example.com",
            password: "password",
            has_error: false,
            error: "null",
            copyear: null
        };
    },
    mounted() {
        this.copyrightYear();
    },
    beforeCreate() {
        $("body")
            .removeClass()
            .addClass("hold-transition login-page");
    },
    methods: {
        login() {
            if (this.password.length > 0) {
                const email = this.email;
                const password = this.password;
                // const { email, password } = this;
                LoginRoute({
                    email,
                    password
                })
                    .then(resp => {
                        const token = resp.data.token;
                        const user = resp.data.user;
                        const authority = user.authority_id;
                        localStorage.setItem("token", token); // store the token in localstorage
                        localStorage.setItem("user", JSON.stringify(user)); // store the user in localstorage

                        if (localStorage.getItem("token") != null) {
                            this.$emit("userIsLoggedIn");
                            if (this.$route.params.nextUrl != null) {
                                this.$router.push(this.$route.params.nextUrl);
                            } else {
                                this.$router.push(
                                    // authority == 1 ? "admin" : "dashboard"
                                    this.SetNextURL(authority)
                                );
                            }
                        }
                    })
                    .catch(errors => {
                        localStorage.removeItem("token"); // if the request fails, remove any possible user token if possible
                        console.log("ERROR::", errors.response.data);
                        this.has_error = true;
                        this.error = errors.response.data.message;
                        // this.error = null;
                    });
            } else {
                console.log("error");

                function example() {}
            }
        },
        SetNextURL(authority) {
            return 1 ? "student" : 2 ? "admin" : "company";
        },
        copyrightYear() {
            var d = new Date();
            this.copyear = d.getFullYear();
        }
    }
};
</script>

<style scoped></style>
