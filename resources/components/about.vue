<script>
import "../css/about.css";

export default {
    name: "about",
    data() {
        return {};
    },
};
</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Fira+Code&family=Poppins:ital,wght@0,100;0,300;0,600;1,100&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;

}

.about-container{
    margin-top: 70px;
}

.about-content{
    width: 100%;
    height: 700px;
    overflow: hidden;
}


.image-content{
    height: 100%;
    background-image: url('../img/image-example.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    margin: 0;
    padding: 0;
}

.text-content{
    height: 100%;
    margin: 0;
    font-size: 20px;
    font-family: "Poppins", sans-serif;
    padding: 150px 100px 0 20px;
    text-align: justify;
}

.text-content p{
    padding-bottom: 20px;
}

.btn-custom-sekunder{
    padding: 0 10px;
    background-color: #dcdcdc;
    color: #171717;
    width: 180px;
    height: auto;
    font-size: 20px;
    font-family: "Poppins", sans-serif;
    border-radius: 10px;
    margin-right: 20px;
}

.btn-custom-sekunder:hover{
    color: #dcdcdc;
    background-color: #242154;

}


</style>

<template>
    <div class="container about-container" id="About">
        <p class="p">who i'am?</p>
        <h1>About Me</h1>
        <div
            class="row flex-lg-row-reverse align-items-center g-5 py-5 about-content"
        >
            <div class="col-10 col-sm-8 col-lg-6 image-content"></div>
            <div class="col-lg-6 text-content">
                <p class="lead">
                    Hello I'm John, a front-end developer based in Indonesia.
                    Have created many websites in various companies with various
                    technologies such as MERN, SaaS and many more.. have created
                    many websites in various companies with various technologies
                    such as MERN, SaaS and many more. I've had the pleasure of
                    collaborating with various companies, bringing their visions
                    to life across a diverse range of technologies. I take pride
                    in delivering high-quality, performant, and responsive
                    websites that not only look great but also provide a
                    seamless user experience.
                </p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button class="btn btn-custom" style="width: 180px">
                        Hire Me
                    </button>
                    <button class="btn btn-custom-sekunder">Download CV</button>
                </div>
            </div>
        </div>
    </div>
</template>
