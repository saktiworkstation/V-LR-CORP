<template>
    <div class="container" id="Skills">
        <div class="skills">
            <p class="p">what can i do?</p>
            <h1>My Skills And Educations</h1>
            <swiper :navigation="true" :slidesPerView="'auto'" :centeredSlides="true" :loop="true" :spaceBetween="40"
                :pagination="{
                clickable: true,
            }" :modules="modules" class="mySwiper">
                <!-- Skills -->
                <swiper-slide v-for="(skill, index) in skills" :key="index">
                    <div class="img-box">
                        <span class="fa-solid fa-brain"></span>
                        <h3>{{ skill.skill_name }}</h3>
                    </div>
                    <div class="text-box pt-4">
                        <p>{{ skill.proficiency_level }}</p>
                    </div>
                </swiper-slide>
            </swiper>
        </div>
    </div>
</template>
<script>
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from "swiper/vue";

// Import Swiper styles
import "swiper/css";

import "swiper/css/pagination";

import "../css/skills.css";

// import required modules
import { Autoplay, Pagination } from "swiper/modules";
import { Navigation } from "swiper/modules";

export default {
    components: {
        Swiper,
        SwiperSlide,
    },
    setup() {
        return {
            modules: [Pagination, Navigation],
        };
    },
    props: {
        skills: {
            type: Array,
            required: true
        }
    }
};
</script>
