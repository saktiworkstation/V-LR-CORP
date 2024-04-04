<template>
    <div class="container-fluid py-5 px-5">

        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <button class="btn btn-primary me-3" @click="showProject()">View Project <fa class="ms-2"
                                :icon="['fas', 'eye']"></fa></button>
                        <button class="btn btn-success me-3">Add Experience <fa class="ms-2" :icon="['fas', 'plus']">
                            </fa></button>
                        <button class="btn btn-success me-3">Add Project <fa class="ms-2" :icon="['fas', 'plus']"></fa>
                        </button>
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
                                        <th class="border-top-0 th-custom">Company</th>
                                        <th class="border-top-0 th-custom">Durations</th>
                                        <th class="border-top-0 th-custom">Field</th>
                                        <th class="border-top-0 th-custom">Order</th>
                                        <th class="border-top-0">Acion</th>
                                        <!-- <th class="border-top-0">Project</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(experience, index) in experiences" :key="index">
                                        <td>{{ experience.company }}</td>
                                        <td>{{ experience.durations }}</td>
                                        <td>{{ experience.field }}</td>
                                        <td>{{ experience.order }}</td>
                                        <td><button class="btn btn-table btn-success me-3 mb-2">Edit <fa class="ms-2"
                                                    :icon="['fas', 'pen-to-square']"></fa></button>
                                            <button class="btn btn-table btn-danger">Delete <fa class="ms-2"
                                                    :icon="['fas', 'trash']"></fa></button>
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
                                        <th class="border-top-0 th-custom">Project Name</th>
                                        <th class="border-top-0 th-custom">Image Name</th>
                                        <th class="border-top-0 th-custom">Project Link</th>
                                        <th class="border-top-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(project, index) in projects" :key="index">
                                        <td>{{ project.name }}</td>
                                        <td>{{ project.img }}</td>
                                        <td>{{ project.link }}</td>
                                        <td><button class="btn btn-table btn-success me-3 mb-2">Edit <fa class="ms-2"
                                                    :icon="['fas', 'pen-to-square']"></fa></button>
                                            <button class="btn btn-table btn-danger">Delete <fa class="ms-2"
                                                    :icon="['fas', 'trash']"></fa></button>
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
    },
    props: {
        experiences: {
            type: Array,
            required: true
        },
        projects: {
            type: Array,
            required: true
        }
    }
}
</script>
