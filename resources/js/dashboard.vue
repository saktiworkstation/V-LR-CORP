<script>
import dashboardPage from '../pages/dashboardPage.vue';
export default {
    components: {
        dashboardPage
    },
    data() {
        return {
            messages: messages,
        }
    }
}
</script>
<template>
    <dashboardPage :messages="messages" />
</template>
