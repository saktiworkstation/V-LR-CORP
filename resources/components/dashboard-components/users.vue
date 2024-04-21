<template>
    <div class="container-fluid p-5">
        <div class="row">
            <!-- column -->
            <div class="row">
                <div class="col-sm-5">
                    <div class="card">
                        <div class="card-body">
                            <button
                                class="btn btn-primary me-3"
                                @click="showSkills()"
                            >
                                View Skills
                                <fa class="ms-2" :icon="['fas', 'eye']"></fa>
                            </button>
                            <button @click="isModalAddOpen = true" class="btn btn-success me-3" >
                                Add user
                                <fa class="ms-2" :icon="['fas', 'plus']"></fa>
                            </button>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">User Table</h4>
                        <div class="table-responsive">
                            <table class="table user-table no-wrap">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">#</th>
                                        <th
                                            class="border-top-0 th-img"
                                            colspan="2"
                                        >
                                            Image
                                        </th>
                                        <th class="border-top-0 th-custom">
                                            Username
                                        </th>
                                        <th class="border-top-0 th-custom">
                                            Email
                                        </th>
                                        <th class="border-top-0 th-custom">
                                            Password
                                        </th>
                                        <th class="border-top-0" colspan="2">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td colspan="2">
                                            <img
                                                class="img-table"
                                                src=""
                                                alt=""
                                            />
                                        </td>
                                        <td>Deshmukh</td>
                                        <td>Prohaska</td>
                                        <td>@Genelia</td>
                                        <td>
                                            <button @click="isModalEditOpen = true" class="btn btn-table btn-success me-3">
                                                Edit
                                                <fa class="ms-2" :icon="['fas','pen-to-square',]"></fa>
                                            </button>
                                            <button class="btn btn-table btn-danger">
                                                Delete
                                                <fa
                                                    class="ms-2"
                                                    :icon="['fas', 'trash']"
                                                ></fa>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td colspan="2">
                                            <img
                                                class="img-table"
                                                src=""
                                                alt=""
                                            />
                                        </td>
                                        <td>Deshmukh</td>
                                        <td>Gaylord</td>
                                        <td>@Ritesh</td>
                                        <td>
                                            <button @click="isModalEditOpen = true" class="btn btn-table btn-success me-3">
                                                Edit
                                                <fa class="ms-2" :icon="['fas','pen-to-square',]"></fa>
                                            </button>
                                            <button
                                                class="btn btn-table btn-danger"
                                            >
                                                Delete
                                                <fa
                                                    class="ms-2"
                                                    :icon="['fas', 'trash']"
                                                ></fa>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td colspan="2">
                                            <img
                                                class="img-table"
                                                src=""
                                                alt=""
                                            />
                                        </td>
                                        <td>Sanghani</td>
                                        <td>Gusikowski</td>
                                        <td>@Govinda</td>
                                        <td>
                                            <button @click="isModalEditOpen = true" class="btn btn-table btn-success me-3">
                                                Edit
                                                <fa class="ms-2" :icon="['fas','pen-to-square',]"></fa>
                                            </button>
                                            <button
                                                class="btn btn-table btn-danger"
                                            >
                                                Delete
                                                <fa
                                                    class="ms-2"
                                                    :icon="['fas', 'trash']"
                                                ></fa>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td colspan="2">
                                            <img
                                                class="img-table"
                                                src=""
                                                alt=""
                                            />
                                        </td>
                                        <td>Roshan</td>
                                        <td>Rogahn</td>
                                        <td>@Hritik</td>
                                        <td>
                                            <button @click="isModalEditOpen = true" class="btn btn-table btn-success me-3">
                                                Edit
                                                <fa class="ms-2" :icon="['fas','pen-to-square',]"></fa>
                                            </button>
                                            <button
                                                class="btn btn-table btn-danger"
                                            >
                                                Delete
                                                <fa
                                                    class="ms-2"
                                                    :icon="['fas', 'trash']"
                                                ></fa>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td colspan="2">
                                            <img
                                                class="img-table"
                                                src=""
                                                alt=""
                                            />
                                        </td>
                                        <td>Joshi</td>
                                        <td>Hickle</td>
                                        <td>@Maruti</td>
                                        <td>
                                            <button @click="isModalEditOpen = true" class="btn btn-table btn-success me-3">
                                                Edit
                                                <fa class="ms-2" :icon="['fas','pen-to-square',]"></fa>
                                            </button>
                                            <button
                                                class="btn btn-table btn-danger"
                                            >
                                                Delete
                                                <fa
                                                    class="ms-2"
                                                    :icon="['fas', 'trash']"
                                                ></fa>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td colspan="2">
                                            <img
                                                class="img-table"
                                                src=""
                                                alt=""
                                            />
                                        </td>
                                        <td>Nigam</td>
                                        <td>Eichmann</td>
                                        <td>@Sonu</td>
                                        <td>
                                            <button @click="isModalEditOpen = true" class="btn btn-table btn-success me-3">
                                                Edit
                                                <fa class="ms-2" :icon="['fas','pen-to-square',]"></fa>
                                            </button>
                                            <button
                                                class="btn btn-table btn-danger"
                                            >
                                                Delete
                                                <fa
                                                    class="ms-2"
                                                    :icon="['fas', 'trash']"
                                                ></fa>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" v-show="skillsState">
            <div class="col-md-8">
                <div class="card mb-4 mb-md-0">
                    <div class="card-body">
                        <p class="mb-4">User Skills</p>
                        <p class="mb-1" style="font-size: 0.77rem">
                            Web Design
                        </p>
                        <div class="progress rounded" style="height: 5px">
                            <div
                                class="progress-bar"
                                role="progressbar"
                                style="width: 80%"
                                aria-valuenow="80"
                                aria-valuemin="0"
                                aria-valuemax="100"
                            ></div>
                        </div>
                        <p class="mt-4 mb-1" style="font-size: 0.77rem">
                            UI/UX Design
                        </p>
                        <div class="progress rounded" style="height: 5px">
                            <div
                                class="progress-bar"
                                role="progressbar"
                                style="width: 72%"
                                aria-valuenow="72"
                                aria-valuemin="0"
                                aria-valuemax="100"
                            ></div>
                        </div>
                        <p class="mt-4 mb-1" style="font-size: 0.77rem">HTML</p>
                        <div class="progress rounded" style="height: 5px">
                            <div
                                class="progress-bar"
                                role="progressbar"
                                style="width: 89%"
                                aria-valuenow="89"
                                aria-valuemin="0"
                                aria-valuemax="100"
                            ></div>
                        </div>
                        <p class="mt-4 mb-1" style="font-size: 0.77rem">CSS</p>
                        <div class="progress rounded" style="height: 5px">
                            <div
                                class="progress-bar"
                                role="progressbar"
                                style="width: 55%"
                                aria-valuenow="55"
                                aria-valuemin="0"
                                aria-valuemax="100"
                            ></div>
                        </div>
                        <p class="mt-4 mb-1" style="font-size: 0.77rem">
                            Javascript
                        </p>
                        <div class="progress rounded mb-2" style="height: 5px">
                            <div
                                class="progress-bar"
                                role="progressbar"
                                style="width: 66%"
                                aria-valuenow="66"
                                aria-valuemin="0"
                                aria-valuemax="100"
                            ></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 mb-lg-0">
                    <div class="card-body p-0">
                        <li
                            class="list-group-item d-flex justify-content-between align-items-center p-3"
                        >
                            <p class="mb-2 mt-2 ms-4">Base Education</p>
                        </li>
                        <ul class="list-group list-group-flush rounded-3">
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center p-3"
                            >
                                <i class="fas fa-globe fa-lg text-warning"></i>
                                <p class="mb-0">S1 Bachelor Informatica</p>
                            </li>
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center p-3"
                            >
                                <i
                                    class="fab fa-github fa-lg"
                                    style="color: #333333"
                                ></i>
                                <p class="mb-0">S2 Desing Analyst</p>
                            </li>
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center p-3"
                            >
                                <i
                                    class="fab fa-twitter fa-lg"
                                    style="color: #55acee"
                                ></i>
                                <p class="mb-0">Bootcamp</p>
                            </li>
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center p-3"
                            >
                                <i
                                    class="fab fa-instagram fa-lg"
                                    style="color: #ac2bac"
                                ></i>
                                <p class="mb-0">Study Independent</p>
                            </li>
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center p-3"
                            >
                                <i
                                    class="fab fa-facebook-f fa-lg"
                                    style="color: #3b5998"
                                ></i>
                                <p class="mb-0">-</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Add User-->
    <div v-if="isModalAddOpen" class="modal container-fluid" style="display:block; background-color: rgba(0,0,0,0.5);">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New User</h5>
                    <button type="button" class="close" @click="isModalAddOpen = false">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                    <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">General</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="formFile" class="form-label">Choose Image</label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Userame</label>
                                    <input type="text" id="inputName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail">Email</label>                                    
                                    <input type="text" id="inputEmail" class="form-control">
                                </div>
                                <div class="form-group">
                                <label for="inputStatus">Last Education</label>
                                    <select id="inputStatus" class="form-control custom-select">
                                        <option selected="" disabled="">Select</option>
                                        <option>High School</option>
                                        <option>Bachelor</option>
                                        <option>Master</option>
                                    </select>  
                                </div>
                                <div class="form-group">
                                <label for="inputDepartment">Department</label>
                                    <select id="inputDepartment" class="form-control custom-select">
                                        <option selected="" disabled="">Select</option>
                                        <option>Informatics</option>
                                        <option>Computer Science</option>
                                        <option>Information Technology</option>
                                    </select>  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">Skills</h3>
                                <span class="text-light text-sm float-end">In Percent</span>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="desain">UI/UX</label>                                    
                                    <input type="text" id="desain" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="html">Html</label>                                    
                                    <input type="text" id="html" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="css">Css</label>                                    
                                    <input type="text" id="css" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="js">Javascript</label>                                    
                                    <input type="text" id="js" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" @click="isModalAddOpen = false">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            
        </div>
    </div>

     <!-- Modal Edit User-->
     <div v-if="isModalEditOpen" class="modal container-fluid" style="display:block; background-color: rgba(0,0,0,0.5);">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit User</h5>
                    <button type="button" class="close" @click="isModalEditOpen = false">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                    <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">General</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="formFile" class="form-label">Choose Image</label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Userame</label>
                                    <input type="text" id="inputName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail">Email</label>                                    
                                    <input type="text" id="inputEmail" class="form-control">
                                </div>
                                <div class="form-group">
                                <label for="inputStatus">Last Education</label>
                                    <select id="inputStatus" class="form-control custom-select">
                                        <option selected="" disabled="">Select</option>
                                        <option>High School</option>
                                        <option>Bachelor</option>
                                        <option>Master</option>
                                    </select>  
                                </div>
                                <div class="form-group">
                                <label for="inputDepartment">Department</label>
                                    <select id="inputDepartment" class="form-control custom-select">
                                        <option selected="" disabled="">Select</option>
                                        <option>Informatics</option>
                                        <option>Computer Science</option>
                                        <option>Information Technology</option>
                                    </select>  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">Skills</h3>
                                <span class="text-light text-sm float-end">In Percent</span>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="desain">UI/UX</label>                                    
                                    <input type="text" id="desain" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="html">Html</label>                                    
                                    <input type="text" id="html" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="css">Css</label>                                    
                                    <input type="text" id="css" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="js">Javascript</label>                                    
                                    <input type="text" id="js" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" @click="isModalEditOpen = false">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            
        </div>
    </div>
</template>

<script>
import "../../css/table.css";
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import '../../css/modal.css'
import {ref} from 'vue'

const isModalAddOpen = ref(false)
const isModalEditOpen = ref(false)

export default {
    name: "userPage",
    data() {
        return {
            skillsState: false,
            isModalAddOpen: false,
            isModalEditOpen: false,
        };
    },
    methods: {
        showSkills() {
            this.skillsState = !this.skillsState;
        },
    },
};
</script>

