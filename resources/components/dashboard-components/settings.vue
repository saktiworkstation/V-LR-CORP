<template>
    <div class="container-fluid p-5">
        <div class="row">
            <div class="col-md-7">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">General</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">Name</label>
                            <input
                                type="text"
                                id="inputName"
                                class="form-control"
                            />
                        </div>
                        <div class="form-group">
                            <label for="inputName">Password</label>
                            <input
                                type="password"
                                id="inputPass"
                                class="form-control"
                            />
                        </div>
                        <div class="form-group">
                            <label for="inputName">Confirm Password</label>
                            <input
                                type="password"
                                id="inputPassConfirm"
                                class="form-control"
                            />
                        </div>
                        <div class="form-group">
                            <label for="inputName">Email</label>
                            <input
                                type="email"
                                id="inputEmail"
                                class="form-control"
                            />
                        </div>
                        <div class="form-group">
                            <label for="inputName">Phone</label>
                            <input
                                type="text"
                                id="inputPhone"
                                class="form-control"
                            />
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <select
                                id="inputStatus"
                                class="form-control custom-select"
                            >
                                <option selected="" disabled="">
                                    Select Address
                                </option>
                                <option>Yogyakarta</option>
                                <option>Jakarta</option>
                                <option>Surabaya</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Social Media</h3>
                    </div>
                    <div class="card-body" style="display: block">
                        <div class="form-group">
                            <label for="facebook"
                                >Facebook</label
                            >
                            <input
                                type="text"
                                id="facebook"
                                class="form-control"
                            />
                        </div>
                        <div class="form-group">
                            <label for="x"
                                >twitter</label
                            >
                            <input
                                type="text"
                                id="x"
                                class="form-control"
                            />
                        </div>
                        <div class="form-group">
                            <label for="instagram"
                                >instagram</label
                            >
                            <input
                                type="text"
                                id="instagram"
                                class="form-control"
                            />
                        </div>
                        <div class="form-group">
                            <label for="website"
                                >Website</label
                            >
                            <input
                                type="text"
                                id="website"
                                class="form-control"
                            />
                        </div>
                        <div class="form-group">
                            <label for="linkidn"
                                >linkidn</label
                            >
                            <input
                                type="text"
                                id="linkidn"
                                class="form-control"
                            />
                        </div>
                        <div class="form-group">
                            <label for="gihub"
                                >Github</label
                            >
                            <input
                                type="text"
                                id="github"
                                class="form-control"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-2 ">
                <button class="btn btn-secondary">Cancel</button>
                <button class="btn btn-success ms-3">Save Change</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "setings",
    data() {
        return {};
    },
};
</script>
