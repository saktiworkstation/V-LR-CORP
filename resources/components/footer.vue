<script>
import '../css/footer.css';

export default {

    name: "footer",
    data() {
        return {

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

.h1-footer, .p-footer, .btn-footer{
    text-align: center;
    font-family: "Poppins", sans-serif;
    width: 100%;
    padding: 0;
    margin: auto;
}

.h1-footer{
    font-size: 50px;
    font-weight: 900;
    margin-bottom: 10px;
}

.p-footer{
    margin: 10px auto;
    margin-bottom: 20px;

}

.footer-custom{
    margin: 50px 0 0 0;
}

.row-text{
    margin: auto;
    width: 80%;
    margin-bottom: 50px;
}

.btn-footer{
    width: 200px;
    height: 30px;
}



</style>

<template>
<div class="container id=Footer">
  <div class="footer-custom" >
    <footer class="py-5  ">
    <div class="row mb-5">
        <div class="col-12">
            <h1 class="h1-footer">Ready to <span> Build <br> Awesome </span> project? </h1>
            <p class="p-footer">Memulai sebuah projek dengan riset <br> dan memvalidasi  
                ideas dengan usability-testing agar maksimal.</p>
        </div>
        <button class="btn btn-primary mt-3">Hire Me Now</button>
    </div>
    <div class="container">
      <div class="row">
      <div class="col-6 col-md-2 mb-3">
        <img src="#" alt="logo">
      </div>

                        <div class="col-6 col-md-2 mb-3">
                            <h5>Section</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a>
                                </li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-body-secondary">Features</a></li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-body-secondary">Pricing</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a>
                                </li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-6 col-md-2 mb-3">
                            <h5>Section</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a>
                                </li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-body-secondary">Features</a></li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-body-secondary">Pricing</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a>
                                </li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-5 offset-md-1 mb-3">
                            <form>
                                <h5>Subscribe to our newsletter</h5>
                                <p>Monthly digest of what's new and exciting from us.</p>
                                <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                                    <label for="newsletter1" class="visually-hidden">Email address</label>
                                    <input id="newsletter1" type="text" class="form-control"
                                        placeholder="Email address">
                                    <button class="btn btn-primary" type="button">Submit</button>
                                </div>
                            </form>
                            <ul class="list-unstyled d-flex mt-4 justify-content-center gap-5">
                                <li class="ms-3"><a class="link-body-emphasis" href="#"><i
                                            class="fa fa-2xl fa-facebook"></i></a></li>
                                <li class="ms-3"><a class="link-body-emphasis" href="#"><i
                                            class="fa fa-2xl fa-twitter"></i></a></li>
                                <li class="ms-3"><a class="link-body-emphasis" href="#"><i
                                            class="fa fa-2xl fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="d-flex flex-column flex-sm-row justify-content-center py-4 my-4 border-top">
                    <p>© 2024 Company, Inc. All rights reserved.</p>
                </div>
            </footer>
        </div>
    </div>
</template>
