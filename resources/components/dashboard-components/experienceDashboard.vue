<template>
    <div class="container-fluid py-5 px-5">

        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <button class="btn btn-primary me-3" @click="showProject()">Show Project</button>
                        <button class="btn btn-success me-3">Tambah Experience</button>
                        <button class="btn btn-success me-3">Tambah Project</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- column -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Experience Table</h4>
                        <div class="table-responsive">
                            <table class="table user-table no-wrap">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">#</th>
                                        <th class="border-top-0">Username</th>
                                        <th class="border-top-0">Name Company</th>
                                        <th class="border-top-0">Duration</th>
                                        <th class="border-top-0">Position</th>
                                        <th class="border-top-0">Acion</th>
                                        <!-- <th class="border-top-0">Project</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Deshmukh</td>
                                        <td>Prohaska</td>
                                        <td>@Genelia</td>
                                        <td>@Genelia</td>
                                        <td><button class="btn btn-success me-3">Edit</button>
                                            <button class="btn btn-danger">Delete</button>
                                        </td>
                                        <!-- <td><button class="btn btn-primary" @click="showProject()">Show</button></td> -->
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" v-show="projectState">
            <!-- column -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Project Table</h4>
                        <div class="table-responsive">
                            <table class="table user-table no-wrap">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">#</th>
                                        <th class="border-top-0">Username</th>
                                        <th class="border-top-0">Name project</th>
                                        <th class="border-top-0">Technology</th>
                                        <th class="border-top-0">Link</th>
                                        <th class="border-top-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Deshmukh</td>
                                        <td>Prohaska</td>
                                        <td>@Genelia</td>
                                        <td>@Genelia</td>
                                        <td><button class="btn btn-success me-3">Edit</button>
                                            <button class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</template>

<script>
export default {
    name: "skillsDashboard",
    data() {
        return {
            projectState: false

        }
    },
    methods: {
        showProject() {
            this.projectState = !this.projectState
        }
    }
}
</script>
