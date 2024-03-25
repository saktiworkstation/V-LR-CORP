<script>
import LandingPage from '../pages/landingPage.vue'

export default {
    components: {
        LandingPage
    },
    data() {
        return {
            skills: skills // Menggunakan data skills yang telah didefinisikan sebelumnya
        }
    }
}
</script>

<template>

    <LandingPage :skills="skills" />

</template>
