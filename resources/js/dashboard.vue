<script>
import dashboardPage from '../pages/dashboardPage.vue';
export default {
    components: {
        dashboardPage
    },
    props: {
        messages: {
            type: Array,
            required: true
        }
    }
}
</script>
<template>
    <dashboardPage :messages="messages" />
</template>
