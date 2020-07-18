// import Vue from "vue";
import Router from "vue-router";

import Dashboard from "../components/dashboard/views/Dashboard";
import StudentDashboard from "../components/dashboard/views/StudentDashboard";
import CompanyDashboard from "../components/dashboard/views/CompanyDashboard";
import Home from "../components/views/Home";
import Login from "../components/views/Login";
import Register from "../components/views/Register";
// import Home from "../components/views/Home"


const routes = [
    {
        path: "/",
        name: "home",
        component: Home,
        
    },
    {
        path: "/login",
        name: "login",
        component: Login,
        meta: {
            guest: true,
        }
        
    },
    {
        path: "/register",
        name: "Register",
        component: Register,
        meta: {
            guest: true,
        }
       
    },
    {
        path: "/admin",
        name: "admin-dashboard",
        component: Dashboard,
        meta: {
            requiresAuth: true,
            isAdmin: true
        }
    },
    {
        path: "/admin/:page",
        name: "admin-pages",
        component: Dashboard,
        meta: {
            requiresAuth: true,
            isAdmin: true
        }
    },

    {
        path: "/student",
        name: "student-dashboard",
        component: StudentDashboard,
        meta: {
            requiresAuth: true,
            isStudent: true
        }
    },

    {
        path: "/student/:page",
        name: "student-pages",
        component: StudentDashboard,
        meta: {
            requiresAuth: true,
            isStudent: true
        }
        
    },

    {
        path: "/company",
        name: "company-dashboard",
        component: CompanyDashboard,
        meta: {
            requiresAuth: true,
            isCompany: true
        }
    },

    {
        path: "/company/:page",
        name: "company-pages",
        component: CompanyDashboard,
        meta: {
            requiresAuth: true,
             isCompany: true
        }
       
    }
];

const router = new Router({
    history: true,
    mode: "history",
    routes
});

router.beforeEach((to, from, next) => {
    if (to.matched.some(record => record.meta.requiresAuth)) {
        if (localStorage.getItem("token") == null) {
            next({
                path: "/login",
                params: { nextUrl: to.fullPath }
            });
        } else {
            let user = JSON.parse(localStorage.getItem("user"));
            if (to.matched.some(record => record.meta.isStudent)) {
                if (user.authority_id == 1) {
                    next();
                } else if (user.authority_id == 2) {
                    next({ name: "admin-dashboard" });
                } else {
                    next({ name: "company-dashboard" });
                }
            } else if (to.matched.some(record => record.meta.isAdmin)) {
                if (user.authority_id == 2) {
                    next();
                } else if (user.authority_id == 1) {
                    next({ name: "student-dashboard" });
                } else {
                    next({ name: "company-dashboard" });
                }
            } else if (to.matched.some(record => record.meta.isCompany)) {
                if (user.authority_id == 3) {
                    next();
                } else if (user.authority_id == 2) {
                    next({ name: "admin-dashboard" });
                } else {
                    next({ name: "student-dashboard" });
                }
            }
            next();
        }
    } else {
        next();
    }
});

export default router;
