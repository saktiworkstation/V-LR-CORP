<script>
import dashboardPage from '../pages/dashboardPage.vue';
export default {
    components: {
        dashboardPage
    },
    data() {
        return {
            messages: messages,
            experiences: experiences,
        }
    }
}
</script>
<template>
    <dashboardPage :messages="messages" :experiences="experiences" />
</template>
