<template>
    <div class="container-fluid p-5">
      <div class="row">
            <!-- column -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">User Table</h4>
                        <div class="table-responsive">
                            <table class="table user-table no-wrap">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">#</th>
                                        <th class="border-top-0">Image</th>
                                        <th class="border-top-0">Username</th>
                                        <th class="border-top-0">Email</th>
                                        <th class="border-top-0">Password</th>
                                        <th class="border-top-0">Update</th>
                                        <th class="border-top-0">Delete</th>
                                        <th class="border-top-0">Skills & Education</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="" alt=""></td>
                                        <td>Deshmukh</td>
                                        <td>Prohaska</td>
                                        <td>@Genelia</td>
                                        <td><button class="btn btn-success">Edit</button></td>
                                        <td><button class="btn btn-danger">Delete</button></td>
                                        <td><button class="btn btn-primary ms-auto" @click="showSkills()" >Show</button></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><img src="" alt=""></td>
                                        <td>Deshmukh</td>
                                        <td>Gaylord</td>
                                        <td>@Ritesh</td>
                                        <td><button class="btn btn-success">Edit</button></td>
                                        <td><button class="btn btn-danger">Delete</button></td>
                                        <td><button class="btn btn-primary ms-auto" @click="showSkills()" >Show</button></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><img src="" alt=""></td>
                                        <td>Sanghani</td>
                                        <td>Gusikowski</td>
                                        <td>@Govinda</td>
                                        <td><button class="btn btn-success">Edit</button></td>
                                        <td><button class="btn btn-danger">Delete</button></td>
                                        <td><button class="btn btn-primary ms-auto" @click="showSkills()" >Show</button></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><img src="" alt=""></td>
                                        <td>Roshan</td>
                                        <td>Rogahn</td>
                                        <td>@Hritik</td>
                                        <td><button class="btn btn-success">Edit</button></td>
                                        <td><button class="btn btn-danger">Delete</button></td>
                                        <td><button class="btn btn-primary ms-auto" @click="showSkills()" >Show</button></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td><img src="" alt=""></td>
                                        <td>Joshi</td>
                                        <td>Hickle</td>
                                        <td>@Maruti</td>
                                        <td><button class="btn btn-success">Edit</button></td>
                                        <td><button class="btn btn-danger">Delete</button></td>
                                        <td><button class="btn btn-primary ms-auto" @click="showSkills()" >Show</button></td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td><img src="" alt=""></td>
                                        <td>Nigam</td>
                                        <td>Eichmann</td>
                                        <td>@Sonu</td>
                                        <td><button class="btn btn-success">Edit</button></td>
                                        <td><button class="btn btn-danger">Delete</button></td>
                                        <td><button class="btn btn-primary ms-auto" @click="showSkills()" >Show</button></td>
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
                <p class="mb-4">My Skills</p>
                <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">UI/UX Design</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">HTML</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">CSS</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Javascript</p>
                <div class="progress rounded mb-2" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 mb-lg-0">
              <div class="card-body p-0">
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <p class="mb-2 mt-2 ms-4">My Education</p>
                </li>
              <ul class="list-group list-group-flush rounded-3">
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fas fa-globe fa-lg text-warning"></i>
                  <p class="mb-0">S1 Bachelor Informatica</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                  <p class="mb-0">S2 Desing Analyst</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                  <p class="mb-0">Bootcamp</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                  <p class="mb-0">Study Independent</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                  <p class="mb-0">-</p>
                </li>
              </ul>
            </div>
        </div>
          </div>
        </div>
    </div>
</template>

<script>

    export default{
        name:'userPage',
        data(){
            return{
                skillsState : false

            }
        },
        methods: {
            showSkills(){
                this.skillsState = !this.skillsState 
            }
        }
    }

</script>