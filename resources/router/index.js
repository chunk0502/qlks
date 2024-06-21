    import {createRouter,createWebHistory} from 'vue-router'
    import dashboard from "./dashboard.js";

    const routes = [...dashboard];
    const router= createRouter({
        history: createWebHistory(),
        routes
    });

    export default router;
