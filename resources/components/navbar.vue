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
        <a class="navbar-brand me-auto" href="#">V-lr Corp</a>
        
        <div class="offcanvas offcanvas-start text-bg-light" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
            <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Offcanvas</h5>
            <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-center flex-grow-1">
                <li class="nav-item nav-item-custom">
                    <a class="nav-link active-custom nav-link-custom" aria-current="page" href="#">Home</a>
                </li>
                
                <li class="nav-item nav-item-custom">
                    <a class="nav-link nav-link-custom" href="#">About</a>
                </li>

                <li class="nav-item nav-item-custom">
                    <a class="nav-link nav-link-custom" href="#">Skills</a>
                </li>

                <li class="nav-item nav-item-custom">
                    <a class="nav-link nav-link-custom" href="#">Project</a>
                </li>

                <li class="nav-item nav-item-custom">
                    <a class="nav-link nav-link-custom" href="#">Contact</a>
                </li>
            </ul>
            </div>
        </div>

        <button class="btn btn-custom align-items-end">Hire Me</button>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2">
            <span class="navbar-toggler-icon"></span>
        </button>

        </div>
    </nav>

</template>