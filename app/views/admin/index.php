<div class="container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-8 col-sm-6 pt-4 pr-4 pl-4 pb-5 login">
                <div class="well login-box">
                    <form action="<?= BASEURL; ?>/admin/prosesLogin" method="POST" class="needs-validation" novalidate>
                        <div class="row justify-content-center">
                            <img src="<?= BASEURL ?>/img/logo.jpeg" alt="" class="logo rounded-circle">
                        </div>
                        <h1 class="text-center pt-3">
                            Login
                        </h1>
                        <div class="flash">
                            <?php Flasher::flash() ?>
                        </div>
                        <div class="form-group">
                            <label for="userid">User ID</label>
                            <input value='' id="userid" placeholder="Input User ID" type="text" class="form-control"
                                autocomplete="off" name="username" required />
                            <div class="invalid-feedback">
                                The Form Is Required!!
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" value='' placeholder="Input Password" type="password"
                                class="form-control" name="password" autocomplete="off" required />
                            <div class="invalid-feedback">
                                The Form Is Required!!
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary" name="Submit" type="submit" value="Submit"
                                href="">Login</button>
                            <button class="btn btn-danger btn-cancel-action" type="reset">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div