<script>
import LandingPage from '../pages/landingPage.vue'

export default {
    components: {
        LandingPage
    },
    data() {
        return {
            skills: skills,
            educations: educations,
        }
    }
}
</script>

<template>

    <LandingPage :skills="skills" :educations="educations" />

</template>
