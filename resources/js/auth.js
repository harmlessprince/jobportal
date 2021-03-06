// import { reject } from "lodash";

// Exported in a shared file
export const LoginRoute = payload =>
    new Promise((resolve, reject) => {
        axios({ url: "auth/login", data: payload, method: "POST" })
            .then(resp => {
                const token = resp.data.token;
                const user = resp.data.user;

                localStorage.setItem("token", token); // store the token in localstorage
                localStorage.setItem("user", JSON.stringify(user)); // store the user in localstorage
                resolve(resp);
            })
            .catch(errors => {
                console.log("ERROR::", errors.response.data);
                reject(errors);
            });
    });

// Exported in a shared file
export const RegisterUser = payload =>
    new Promise((resolve, reject) => {
        axios({ url: "auth/register", data: payload, method: "POST" })
            .then(resp => {
                console.log(resp.data);
                // const token = resp.data.token;
                // const user = resp.data.user;
                // localStorage.setItem("token", token); // store the token in localstorage
                // localStorage.setItem("user", JSON.stringify(user)); // store the token in localstorage
                resolve(resp);
            })
            .catch(errors => {
                console.log("ERROR::", errors.response.data.message);
                localStorage.removeItem("token"); // if the request fails, remove any possible user token if possible
                reject(errors);
            });
    });
export const LogOut = payload =>
    new Promise((resolve, reject) => {
        let token = localStorage.getItem("token");
        axios({
            url: "auth/logout",
            data: payload,
            headers: {
                Authorization: `Bearer ${token}`
            },
            method: "POST"
        })
            .then(resp => {
                console.log(resp.data);
                // const token = resp.data.token;
                // const user = resp.data.user;
                localStorage.removeItem("token"); // store the token in localstorage
                // localStorage.removeItem("Token");
                localStorage.removeItem("user"); // store the token in localstorage
                resolve(resp);
            })
            .catch(errors => {
                console.log("ERROR::", errors.response.data);
                // localStorage.removeItem("user-token"); // if the request fails, remove any possible user token if possible
                reject(errors);
            });
    });
