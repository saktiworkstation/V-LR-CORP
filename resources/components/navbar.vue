<script>
    import '../css/navbar.css';

    export default{
        name: 'navbar',
        data(){
            return{
                //
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

.custom-navbar{
    width: 100%;
    height: 100px;
    background-color: #F4F4F6;
    border-bottom: 0.1px solid #d0d0d0;
}

.nav-link-custom{
    font-size: 20px;
    font-family: "Poppins", sans-serif;
    font-weight: 550;
    color: #171717;
    position: relative;
}

.nav-item-custom{
    width: 130px;
    text-align: left;
}

.navbar-toggler{
    border: none;
    font-size: 20px;
}

.navbar-toggler:focus, .btn-close:focus{
    box-shadow: none;
    outline: none;
}


.btn-custom{
    background-color: #242154;
    color: #fff;
    width: 140px;
    font-size: 20px;
    font-family: "Poppins", sans-serif;
    border-radius: 10px;
    margin-right: 20px;
}

.btn-custom:hover{
    color: #171717;
    background-color: #dcdcdc;

}

.nav-link-custom:hover, .active-custom{
    color: #281AEF;
}

.nav-link-custom::before{
    content: "";
    position: absolute;
    bottom: 0;
    transform: translateX(0);
    width: 0;
    height: 2px;
    background-color: #281AEF;
    visibility: hidden;
    transition: 0.3s ease-in-out;
}

.nav-link-custom:hover::before, .active-custom::before{
    width: 50px;
    visibility: visible ;
}

@media only screen and (max-width: 1200px) {
    .nav-link-custom{
        font-size: 18px;
        font-family: "Poppins", sans-serif;
        font-weight: 550;
        color: #171717;
        position: relative;
    }

    .nav-item-custom{
        width: 110px;
        text-align: left;
    }

    .active-custom{
        color: #281AEF;
    }
    
    .btn-custom{
        background-color: #07042F;
        color: #fff;
        width: 120px;
        font-weight: 500;
        font-size: 18px;
        font-family: "Poppins", sans-serif;
        border-radius: 10px;
        margin-right: 20px;
    }
    
}

@media only screen and (max-width: 991px) {
    .btn-custom{
        display: none;
    }    
}

.modal-custom{
    width: 800px;
}
</style>

<template>

    <nav class="navbar navbar-expand-lg custom-navbar" aria-label="Offcanvas navbar large">
        <div class="container">
        <a class="navbar-brand me-auto" href="#">
            <img src="/public/img/logo-vlr.png" alt="logo" style="width: 60px; height: auto;">
        </a>
        
        <div class="offcanvas offcanvas-start text-bg-light" tabindex="-2" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
            <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbar2Label">V-LR CORP</h5>
            <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-center flex-grow-1">
                <li class="nav-item nav-item-custom">
                    <a class="nav-link active-custom nav-link-custom" aria-current="page" href="#header">Home</a>
                </li>
                
                <li class="nav-item nav-item-custom">
                    <a class="nav-link nav-link-custom" href="#about">About</a>
                </li>

                <li class="nav-item nav-item-custom">
                    <a class="nav-link nav-link-custom" href="#skills">Skills</a>
                </li>

                <li class="nav-item nav-item-custom">
                    <a class="nav-link nav-link-custom" href="#project">Project</a>
                </li>

                <li class="nav-item nav-item-custom">
                    <a class="nav-link nav-link-custom" href="#contact">Contact</a>
                </li>
            </ul>
            </div>
        </div>

        <button type="button" class="btn btn-custom align-items-end"  data-toggle="modal" data-target="#exampleModalLong">Hire Me</button>

        <!-- Modal-Start -->
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg p-5" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hire Me</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-5">
                    <form>
                    <div class="form-group">
                        <label for="company-name" class="col-form-label">Company Name</label>
                        <input type="text" class="form-control" id="company-name">
                    </div>
                    <div class="form-group">
                        <label for="position" class="col-form-label">Position</label>
                        <input type="text" class="form-control" id="position">
                    </div>
                    <div class="form-group">
                        <label for="description-text" class="col-form-label">Descripton</label>
                        <textarea class="form-control" id="description-text"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="sender-name" class="col-form-label">Sender</label>
                        <input type="text" class="form-control" id="sendert-name">
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
                </div>
            </div>
        </div>
        <!-- Modal-Emd -->

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2">
            <i><fa :icon="['fas', 'bars']"></fa></i>
        </button>

        </div>
    </nav>

</template>