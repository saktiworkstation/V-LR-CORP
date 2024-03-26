<script>
import LandingPage from '../pages/landingPage.vue'

export default {
    components: {
        LandingPage
    },
    data() {
        return {
            skills: skills
        }
    }
}
</script>

<template>

    <LandingPage :skills="skills" />

</template>
