<template>
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav ml-5">
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Dashboard</a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                    aria-label="Search" />
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <fa :icon="['fas', 'search']"></fa>
                    </button>
                </div>
            </div>
        </form>

        <!-- Right navbar links -->
        
    </nav>
    <!-- /.navbar -->
</template>

<script>


export default {
    name: "adminNavbar",
    data() {

    }
}

</script>
