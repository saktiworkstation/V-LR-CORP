<script>
    import Navbar from '../components/navbar.vue'
    import Header from '../components/header.vue'
    import About from '../components/about.vue'
    import Skills from '../components/skills.vue'
    import Project from '../components/project.vue'
    import Footer from '../components/footer.vue'

    export default{
        components:{
            Navbar,
            Header,
            About,
            Skills,
            Project,
            Footer
        }
    }
</script>

<template>
        <div>
            <Navbar />
        </div>
        
        <div>
            <Header />
        </div>
        <div>
            <About />
        </div>
        <div>
            <Skills />
        </div>
        <div>
            <Project />
        </div>
        <div>
            <Footer />
        </div>
</template>