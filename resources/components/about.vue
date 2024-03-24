<script>
    import '../css/about.css'; 

    export default{
        name: 'about',
        data(){
            return{
                
            }
        }
    }
</script>

<template>
    <div class="container about-container" id="about">
        <p class="p" >who i'am?</p>
        <h1>About Me</h1>
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5 about-content">
            <div class="col-10 col-sm-8 col-lg-6 image-content">

            </div>
            <div class="col-lg-6 text-content">
                <p class="lead">Hello I'm John, a frontend developer located in Indonesia. have created many websites in various companies with various technologies such as MERN, SaaS and many more.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-custom" style="width: 180px;"  data-toggle="modal" data-target="#exampleModalLong">Hire Me</button>
                    <button class="btn btn-custom-sekunder">Download CV</button>

                </div>
            </div>
        </div>
    </div>
</template>