<script>
    import '../css/navbar.css'; 

    export default{
        name: 'navbar',
        data(){
            return{
                
            }
        }
    }
</script>

<template>

    <nav class="navbar navbar-expand-lg custom-navbar" aria-label="Offcanvas navbar large">
        <div class="container">
        <a class="navbar-brand me-auto" href="#">V-LR CORP</a>
        
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