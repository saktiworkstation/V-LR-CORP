<template>
    <aside class="main-sidebar sidebar-light-primary elevation-4">
        <a href="index3.html" class="brand-link">
            <img src="#" alt="" class="brand-image" style="opacity: 0.8" />
            <span class="brand-text font-weight-light">V-LR CORP</span>
        </a>

        <div class="sidebar">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="#" class="img-circle elevation-2" alt="#" />
                </div>
                <div class="info">
                    <a href="#" class="d-block">Alexander Pierce</a>
                </div>
            </div>

            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                        aria-label="Search" />
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <fa :icon="['fas', 'search']"></fa>
                        </button>
                    </div>
                </div>
            </div>

            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item menu-open">
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <div class="nav-link">
                                    <i class="right">
                                        <fa :icon="['fas', 'clock']"></fa>
                                    </i>
                                    <RouterLink to="/">Dashboard</RouterLink>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="nav-link">
                                    <i class="right">
                                        <fa :icon="['fas', 'circle-user']"></fa>
                                    </i>
                                    <RouterLink to="/dashboard/profile">profile</RouterLink>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="nav-link">
                                    <i class="right">
                                        <fa :icon="['fas', 'user']"></fa>
                                    </i>
                                    <RouterLink to="/dashboard/users">Table Users</RouterLink>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="nav-link">
                                    <i class="right">
                                        <fa :icon="['fas', 'clipboard']"></fa>
                                    </i>
                                    <RouterLink to="/dashboard/skills">Experience</RouterLink>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="nav-link">
                                    <i class="right">
                                        <fa :icon="['fas', 'gears']"></fa>
                                    </i>
                                    <RouterLink to="/dashboard/settings">User Setting</RouterLink>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>

        </div>
        <footer class="my-5">
            <div class="nav-item my-5">
                <button class="btn btn-sidebar" style="width: 100%;">Log Out
                    <span class=" ms-3">
                        <fa :icon="['fas', 'right-from-bracket']"></fa>
                    </span>
                </button>
            </div>
        </footer>
    </aside>
</template>

<script>
export default {
    name: "sidebar",
    data() { },
};
</script>
