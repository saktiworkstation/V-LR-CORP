<template>
      <div class="container-fluid p-5">
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Daily Order</h4>
                                <div class="text-end">
                                    <h2 class="font-light mb-0"><i class="ti-arrow-up text-success"></i>5</h2>
                                    <span class="text-muted">Todays Order</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Weekly Order</h4>
                                <div class="text-end">
                                    <h2 class="font-light mb-0"><i class="ti-arrow-up text-info"></i>60</h2>
                                    <span class="text-muted">This Week Ordere</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex">
                                    <h4 class="card-title col-md-10 mb-md-0 mb-3 align-self-center">Projects of the Month</h4>
                                    <div class="col-md-2 ms-auto">
                                        <select class="form-select shadow-none col-md-6 ml-auto">
                                            <option selected>January</option>
                                            <option value="1">February</option>
                                            <option value="2">March</option>
                                            <option value="3">April</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="table-responsive mt-5">
                                    <table class="table stylish-table no-wrap">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Position</th>
                                                <th class="border-top-0">Name</th>
                                                <th class="border-top-0">Country</th>
                                                <th class="border-top-0">Register Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="align-middle">
                                                    <h6 class="text-dark">Web Designer</h6>
                                                </td>
                                                <td class="align-middle">Elite Admin</td>
                                                <td class="align-middle">Indonesia</td>
                                                <td class="align-middle">20-10-2018</td>
                                            </tr>
                                            <tr class="active">
                                                <td class="align-middle">
                                                    <h6 class="text-dark">Project Manager</h6>
                                                </td>
                                                <td class="align-middle">Real Homes</td>
                                                <td class="align-middle">Indonesia</td>
                                                <td class="align-middle">20-10-2018</td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">
                                                    <h6 class="text-dark">Developer</h6>
                                                </td>
                                                <td class="align-middle">MedicalPro Theme</td>
                                                <td class="align-middle">Indonesia</td>
                                                <td class="align-middle">20-10-2018</td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">
                                                    <h6 class="text-dark">Frontend Eng</h6>
                                                </td>
                                                <td class="align-middle">Elite Admin</td>
                                                <td class="align-middle">Indonesia</td>
                                                <td class="align-middle">20-10-2018</td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">
                                                    <h6 class="text-dark">Content Writer</h6>
                                                </td>
                                                <td class="align-middle">Helping Hands</td>
                                                <td class="align-middle">Indonesia</td>
                                                <td class="align-middle">20-10-2018</td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">
                                                    <h6 class="tex-darkd">Graphic</h6>
                                                </td>
                                                <td class="align-middle">Digital Agency</td>
                                                <td class="align-middle">Indonesia</td>
                                                <td class="align-middle">20-10-2018</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
            </div>
</template>

<script>

export default{
    name: 'dashboard',
    data(){
        return{
            
        }
    }
}

</script>