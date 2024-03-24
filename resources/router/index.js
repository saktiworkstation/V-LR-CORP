import { createRouter, createMemoryHistory } from "vue-router";
import profile from '../components/dashboard-components/profile.vue'
import dashboard from '../components/dashboard-components/dashboard.vue'
import users from '../components/dashboard-components/users.vue'
import skillsDashboard from '../components/dashboard-components/experienceDashboard.vue'
import settings from '../components/dashboard-components/settings.vue'

const routes = [
    { path: "/", component : dashboard },
    { path: "/dashboard/profile", component : profile},
    { path: "/dashboard/users", component : users},
    { path: "/dashboard/settings", component : settings},
    { path: "/dashboard/skills", component : skillsDashboard}
]

const router = createRouter ({
    history: createMemoryHistory(),
    routes
})

export default router