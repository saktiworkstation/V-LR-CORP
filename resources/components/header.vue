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

<style>
@import url('https://fonts.googleapis.com/css2?family=Fira+Code&family=Poppins:ital,wght@0,100;0,300;0,600;1,100&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;

}

.text-name{
    font-size: 28px;
    margin: 0;
    font-family: "Poppins", sans-serif;
    font-weight: 500;
}

span.name{
    font-weight: bold;
}

.main-text{
    font-size: 180px;
    font-family: "Poppins", sans-serif;
    font-weight: bold;
}

.experience{
    margin-top: 50px;
}

img{
    width: 250px;
    height: 75px;
    margin: 0 20px;
}

@keyframes slide {
    from{
        transform: translateX(0);
    }
    to{
        transform: translateX(-100%);
    }
}

.brands{
    margin-top: 30px;
    white-space: nowrap;
    overflow: hidden;
    position: relative;
}

.brands:hover .brands-slide{
    animation-play-state: paused;
}

.brands-slide{
    width: inherit;
    display: inline-block;
    animation: 10s slide infinite linear;
}



</style>

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
                <h5 class="">Company Experience</h5>
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
