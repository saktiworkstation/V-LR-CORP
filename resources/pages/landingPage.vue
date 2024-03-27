<script>
import Navbar from '../components/navbar.vue'
import Header from '../components/header.vue'
import About from '../components/about.vue'
import Skills from '../components/skills.vue'
import Project from '../components/project.vue'
import Footer from '../components/footer.vue'

export default {
    components: {
        Navbar,
        Header,
        About,
        Skills,
        Project,
        Footer
    },
    props: {
        skills: {
            type: Array,
            required: true
        },
        educations: {
            type: Array,
            required: true
        }
    }
}
</script>

<template>
    <Navbar />

    <Header />

    <About />

    <Skills :skills="skills" :educations="educations" />

    <Project />

    <Footer />

</template>
