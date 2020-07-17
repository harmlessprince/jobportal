import VueRouter from "vue-router";
// Pages
import Home from "../pages/Home";
import Register from "../pages/Register";
import Login from "../pages/Login";
import StudentDashboard from "../pages/StudentDashboard";
import AdminDashboard from "../pages/admin/AdminDashboard";
import SuperAdminDashboard from "../pages/admin/SuperAdminDashboard";
// Routes
const routes = [
    {
        path: "/",
        name: "home",
        component: Home
    },
    {
        path: "/register",
        name: "register",
        component: Register
    },
    {
        path: "/login",
        name: "login",
        component: Login
    },
    // ADMIN ROUTES
    {
        path: "/admin",
        name: "adminDashboard",
        component: AdminDashboard,
        meta: {
            requiresAuth: true,
            isAdmin: true
        }
    },
    // SUPERADMIN ROUTES
    {
        path: "/superadmin",
        name: "superadminDashboard",
        component: SuperAdminDashboard,
        meta: {
            requiresAuth: true,
            isSuperAdmin: true
        }
    },
    // STUDENT ROUTES
    {
        path: "/student",
        name: "studentDashboard",
        component: StudentDashboard,
        meta: {
            requiresAuth: true,
            isStudent: true
        }
    }
];


const router = new VueRouter({
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
            if (to.matched.some(record => record.meta.isAdmin)) {
                if (user.authority_id == 1) {
                    next();
                } else if (user.authority_id == 2) {
                    next({ name: "superadminDashboard" });
                }else{
                    next({ name: "studentDashboard" });
                }
            } else if (to.matched.some(record => record.meta.isSuperAdmin)) {
                if (user.authority_id == 2) {
                    next();
                } else if (user.authority_id == 1) {
                    next({ name: "adminDashboard" });
                }else{
                    next({ name: "studentDashboard" });
                }
            } else if (to.matched.some(record => record.meta.isStudent)) {
                if (user.authority_id == 3) {
                    next();
                } else if (user.authority_id == 2) {
                    next({ name: "superadminDashboard" });
                }else{
                    next({ name: "adminDashboard" });
                }
            }
            next();
        }
    } else {
        next();
    }
});

export default router;
