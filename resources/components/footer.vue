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

<template>
    <div class="container-fluid p-0" id="Footer">
        <div class="footer-custom">
            <footer class="py-5  ">
                <div class="row row-text">
                    <h1 class="h1-footer">Ready to <span> Build <br> Awesome </span> project? </h1>
                    <p class="p-footer">Memulai sebuah projek dengan riset <br> dan memvalidasi
                        ideas dengan usability-testing agar maksimal.</p>
                    <button class="btn btn-footer">Hire Me Now</button>
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
                                    <button class="btn btn-primary" type="button">Subscribe</button>
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
        <svg xmlns="http://www.w3.org/2000/svg" class="wave" viewBox="0 0 1440 320">
            <path fill="#281aef" fill-opacity="1"
                d="M0,128L48,128C96,128,192,128,288,154.7C384,181,480,235,576,213.3C672,192,768,96,864,80C960,64,1056,128,1152,133.3C1248,139,1344,85,1392,58.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </div>
</template>
