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
    },
    data() {
        return {
            messages: this.messages,
        }
    }
}
</script>
<template>
    <dashboardPage :messages="messages" />
</template>
