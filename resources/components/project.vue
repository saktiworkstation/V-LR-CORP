<script>
import "../css/project.css";
export default {
    name: "project",
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

.card-body img{
    width: 100%;
    height: auto;
}

.projects{
    margin: 50px 0;
  }
  
.projects h1{
    margin-bottom: 50px;
}

.projects-content{
    margin: 30px 0;
}
</style>

<template>
    <div class="container" id="project">
        <div class="projects">

            <p class="p">what dad i make?</p>
            <h1>My Latest Projects</h1>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-3 projects-content">
                <div class="col">
                    <div class="">
                        <div class="card-body p-0">
                            <img src="../../public/img/img-pjct/v20_338.png" alt="" />
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="">
                        <div class="card-body p-0">
                            <img src="../../public/img/img-pjct/v20_339.png" alt="" />
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="">
                        <div class="card-body p-0">
                            <img src="../../public/img/img-pjct/v20_340.png" alt="" />
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="">
                        <div class="card-body p-0">
                            <img src="../../public/img/img-pjct/v20_344.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
