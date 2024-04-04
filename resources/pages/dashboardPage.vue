<template>

    <div class="wrapper">
        <AdminNavbar />
        <Sidebar />

        <div class="content-wrapper">
            <RouterView :messages="messages" :experiences="experiences" />
        </div>
        <footer>
            <dashboardFooter />
        </footer>
    </div>
</template>

<script>
import Sidebar from '../components/dashboard-components/sidebar.vue'
import AdminNavbar from '../components/dashboard-components/dashboardNavbar.vue'
import profile from '../components/dashboard-components/profile.vue'
import dashboard from '../components/dashboard-components/dashboard.vue'
import dashboardFooter from '../components/dashboard-components/dashboardFooter.vue'
import skillsDashboard from '../components/dashboard-components/experienceDashboard.vue'

export default {
    components: {
        Sidebar,
        AdminNavbar,
        profile,
        dashboard,
        dashboardFooter,
        skillsDashboard
    },
    props: {
        messages: {
            type: Array,
            required: true
        },
        experiences: {
            type: Array,
            required: true
        }
    }
}
</script>
