<template>
    <div class="container" id="Skills">
        <div class="skills">
            <p class="p">what can i do?</p>
            <h1>My Skills</h1>

            <swiper :navigation="true" :slidesPerView="'auto'" :centeredSlides="true" :loop="true" :spaceBetween="40"
                :pagination="{
                clickable: true,
            }" :modules="modules" class="mySwiper">
                <swiper-slide>
                    <div class="img-box">
                        <span class="fa-solid fa-user-graduate"></span>
                        <h3>Base Education</h3>
                    </div>
                    <div class="text-box">
                        <p>
                            Music is an art form whose medium is sound and
                            silence. Generally, a song is considered the
                            smallest standalone work of music, especially when
                            involving singing.
                        </p>
                    </div>
                </swiper-slide>

                <!-- <swiper-slide>
                    <div class="img-box">
                        <span class="fa-brands fa-html5"></span>
                        <h3>Html</h3>
                    </div>
                    <div class="text-box">
                        <p>
                            Music is an art form whose medium is sound and
                            silence. Generally, a song is considered the
                            smallest standalone work of music, especially when
                            involving singing.
                        </p>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="img-box">
                        <span class="fa-brands fa-css3-alt"></span>
                        <h3>Css</h3>
                    </div>
                    <div class="text-box">
                        <p>
                            Music is an art form whose medium is sound and
                            silence. Generally, a song is considered the
                            smallest standalone work of music, especially when
                            involving singing.
                        </p>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="img-box">
                        <span class="fa-brands fa-react"></span>
                        <h3>React</h3>
                    </div>
                    <div class="text-box">
                        <p>
                            Music is an art form whose medium is sound and
                            silence. Generally, a song is considered the
                            smallest standalone work of music, especially when
                            involving singing.
                        </p>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="img-box">
                        <span class="fa-brands fa-vuejs"></span>
                        <h3>Vue</h3>
                    </div>
                    <div class="text-box">
                        <p>
                            Music is an art form whose medium is sound and
                            silence. Generally, a song is considered the
                            smallest standalone work of music, especially when
                            involving singing.
                        </p>
                    </div>
                </swiper-slide> -->
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
};
</script>
