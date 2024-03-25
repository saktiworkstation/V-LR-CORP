<template>
    <div class="container p-5">
        <form>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Username">
            </div>
            <div class="form-group col-md-6">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" placeholder="email">
            </div>
            <div class="form-group col-md-6">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" placeholder="email">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="instagram">Instagram</label>
                <input type="text" class="form-control" id="instagram" placeholder="instagram">
            </div>
            <div class="form-group col-md-6">
                <label for="website">Website</label>
                <input type="text" class="form-control" id="website" placeholder="website">
            </div>
        </div>
         <div class="form-row">
            <div class="form-group col-md-6">
                <label for="Facebook">Facebook</label>
                <input type="text" class="form-control" id="Facebook" placeholder="Facebook">
            </div>
            <div class="form-group col-md-6">
                <label for="X">X</label>
                <input type="text" class="form-control" id="X" placeholder="X">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="linkidn">LinkIdn</label>
                <input type="text" class="form-control" id="linkidn" placeholder="linkidn">
            </div>
            <div class="form-group col-md-6">
                <label for="github">Github</label>
                <input type="text" class="form-control" id="github" placeholder="github">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress2">Address</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-6">
            <label for="inputState">State</label>
            <select id="inputState" class="form-control">
                <option selected>Choose</option>
                <option>Yogyakarta</option>
                <option>Jakarta</option>
                <option>Surabaya</option>
            </select>
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Check me out
            </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>
</template>

<script>

    export default{
        name: "setings",
        data(){
            return{

            }
        }
    }

</script>