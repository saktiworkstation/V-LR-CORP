<template>
    <div class="container-fluid py-5 px-5">

        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <button class="btn btn-primary me-3" @click="showProject()">View Project <fa class="ms-2"
                                :icon="['fas', 'eye']"></fa></button>
                        <button @click="isAddExperienceModalOpen = true" class="btn btn-success me-3">Add Experience <fa class="ms-2" :icon="['fas', 'plus']">
                            </fa></button>
                        <button @click="isAddProjectModalOpen = true" class="btn btn-success me-3">Add Project <fa class="ms-2" :icon="['fas', 'plus']"></fa>
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
                                        <td><button @click="isEditExperienceModalOpen = true" class="btn btn-table btn-success me-3 mb-2">Edit <fa class="ms-2"
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
                                        <td><button @click="isEditProjectModalOpen = true" class="btn btn-table btn-success me-3 mb-2">Edit <fa class="ms-2"
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

    <!-- Modal Add Project -->
    <div v-if="isAddProjectModalOpen" class="modal" style="display:block; background-color: rgba(0,0,0,0.5);">
        <div class="modal-dialog  modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Project</h5>
                    <button type="button" class="close" @click="isAddProjectModalOpen = false">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">General</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputProjectName">Project Name</label>
                                    <input type="text" id="inputProjectName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="formFile" class="form-label">Project Image</label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                                <div class="form-group">
                                    <label for="inputLink">Project Link</label>
                                    <input type="text" id="inputLink" class="form-control">
                                </div>
                                </div>

                        </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" @click="isAddProjectModalOpen = false">Tutup</button>
                    <button type="button" class="btn btn-primary">Simpan Proyek</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Add Experience -->
    <div v-if="isAddExperienceModalOpen" class="modal" style="display:block; background-color: rgba(0,0,0,0.5);">
        <div class="modal-dialog  modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Experience</h5>
                    <button type="button" class="close" @click="isAddExperienceModalOpen = false">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="" method="post">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">General</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputName">Name</label>
                                        <input type="text" id="inputName" class="form-control" name="company" placeholder="Reilly Inc" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputDuration">Duration</label>
                                        <input type="text" id="inputDuration" class="form-control" name="duration" placeholder="30-05-1992 - 12-09-1982" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputField">Field</label>
                                        <input type="text" id="inputField" class="form-control" name="field" placeholder="Programmer" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputOrder">Order</label>
                                        <input type="number" id="inputOrder" class="form-control" name="order" required>
                                    </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" @click="isAddExperienceModalOpen = false">Tutup</button>
                    <button type="button" class="btn btn-primary">Simpan Pengalaman</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Experience -->
    <div v-if="isEditExperienceModalOpen" class="modal" style="display:block; background-color: rgba(0,0,0,0.5);">
        <div class="modal-dialog  modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Experience</h5>
                    <button type="button" class="close" @click="isEditExperienceModalOpen = false">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">General</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputName">Name</label>
                                    <input type="text" id="inputName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputDuration">Duration</label>
                                    <input type="text" id="inputDuration" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputField">Field</label>
                                    <input type="text" id="inputField" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputOrder">Order</label>
                                    <input type="text" id="inputOrder" class="form-control">
                                </div>
                                </div>

                        </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" @click="isEditExperienceModalOpen = false">Tutup</button>
                    <button type="button" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Project -->
    <div v-if="isEditProjectModalOpen" class="modal" style="display:block; background-color: rgba(0,0,0,0.5);">
        <div class="modal-dialog  modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Project</h5>
                    <button type="button" class="close" @click="isEditProjectModalOpen = false">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">General</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputProjectName">Project Name</label>
                                    <input type="text" id="inputProjectName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="formFile" class="form-label">Project Image</label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                                <div class="form-group">
                                    <label for="inputLink">Project Link</label>
                                    <input type="text" id="inputLink" class="form-control">
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" @click="isEditProjectModalOpen = false">Tutup</button>
                    <button type="button" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import '../../css/modal.css'
import {ref} from 'vue'

const isAddExperienceModalOpen = ref(false)
const isAddProjectModalOpen = ref(false)
const isEditExperienceModalOpen = ref(false)
const isEditProjectModalOpen = ref(false)

export default {
    name: "skillsDashboard",
    data() {
        return {
            projectState: false,
            isAddProjectModalOpen: false,
            isAddExperienceModalOpen: false,
            isEditExperienceModalOpen: false,
            isEditProjectModalOpen: false,
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
