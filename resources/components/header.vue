<script>

    import '../css/header.css';

    export default{
        name: 'header',
        data(){
            return{

                brandImages: [
                    {url: '../img/google.png', brandName:'google'},
                    {url: "../img/mandiri.png", brandName:'mandiri'},
                    {url: "../img/netflix.png", brandName:'netflix'},
                    {url: "../img/paypal.png", brandName:'paypal'},
                    {url: "../img/travleoka.png", brandName:'travleoka'}
                ]

            }
        }
    }

</script>

<template>
    <div class="container" id="header">
        <div class="px-4 py-5 my-3 text-center">
            <div class="text">
                <h3 class="text-name">Hola! <span class="name">I'm John</span> </h3>
                <h1 class="display-5 fw-bold main-text">Front-end
                        <br>
                    <span class="developer" >Developer</span>
                </h1>
            </div>
            <div class="experience">
                <h5 class="">Compnay Experience</h5>
                <div class="brands">
                    <div class="brands-slide">
                        <img v-for="brandImage in brandImages" :key="brandImage.brandName" :src="brandImage.url" :alt="brandImage.brandName" srcset="">
                    </div>
                    <div class="brands-slide">
                        <img v-for="brandImage in brandImages" :src="brandImage.url" :alt="brandImage.brandName" srcset="">
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>
