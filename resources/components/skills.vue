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
                <!-- Educations -->
                <swiper-slide v-for="(education, index) in educations" :key="index">
                    <div class="img-box">
                        <span class="fa-solid fa-school"></span>
                        <h3>{{ education.degree }}</h3>
                    </div>
                    <div class="text-box pt-4">
                        <p>School name = {{ education.school_name }}</p>
                        <p>Field Of Study = {{ education.field_of_study }}</p>
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
        },
        educations: {
            type: Array,
            required: true
        }
    }
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

h1{
  font-size: 36px;
  color: #07042F;
  font-weight: bold;
}

.p{
  font-size: 14px;
  color: #281AEF;
  font-weight: bold;
  margin-bottom: -5px;
}

.swiper {
  width: 100%;
  height: 500px;
}

.swiper-slide {
  text-align: center;
  font-size: 18px;
  background: linear-gradient(to right top, #dcdcdc, #e1e1e1, #e5e5e5, #eaeaea, #efefef, #efefef, #efefef, #efefef, #eaeaea, #e5e5e5, #e1e1e1, #dcdcdc);
  display: block;
  justify-content: center;
  align-items: center;
  border-radius: 5px;
  padding: 40px;
  width: 350px !important;
  height: 400px;
  margin-top: 25px;
  transition: box-shadow .3s;

  &:hover {
    box-shadow: 0 12px 15px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
    transform: scale(1.05);

  }

  &:hover span {
    color: #281aefb1;
  }
  &:hover p {
    color: #555;
  }
  &:hover h3 {
    color: #555;
  }
  &:hover h3:after{
    width: 25px;
  }
  span {
    font-size: 2.6em;
    display: block;
    transition: color .3s;
    color: #000;
    &:before, &:after {
      position: static;
    }
  }
}

.swiper-slide img {
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.swiper-slide {
  width: 320px;
}

.skills{
  margin: 50px 0;
}

.skills h1{
  margin-bottom: 50px;
}

h3 {
    color: darken(#000, 20%);
    display: inline-block;
    font-size: 24px;
    font-weight: 500;
    transition: color .3s;
    margin-top: 10px;
    &:after {
      content: '';
      position: relative;
      left: 50%;
      top: 20px;
      transform: translateX(-50%);
      display: block;
      width: 40px;
      height: 1px;
      background: darken(#000, 20%);
      transition: width .3s;
    }
}
p {
    color: #000;
    text-align: justify;
    font-size: 18px;
    line-height: 26px;
    transition: color .3s;
}

.img-box{
  width: auto;
  height: 100px;
}

.text-box{
  padding: 0 15px;
}

</style>