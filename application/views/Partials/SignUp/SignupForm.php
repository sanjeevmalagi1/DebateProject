<section class="price-area overlay section-padding" id="price-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <form action="<?php echo base_url(); ?>index.php/Auth/signUp" method="post" class="price-table active">
                        <h3 class="text-uppercase price-title">Sign Up</h3>
                        <p>Already Have an account ? <a href="<?php echo base_url() ?>index.php/Auth/login" class="btn btn-info">Log in</a> </p>
                        <hr>
                            <input name="username" class="form-control" placeholder="Username">
                            <input name="password" type="password" class="form-control" placeholder="Password">
                            <input type="password" class="form-control" placeholder="Confirm Password">
                            <select name="usertype" class="form-control">
                                <option value="Student">Student</option>
                                <option value="Teacher">Teacher</option>
                                <option value="Other">Other</option>
                            </select>
                        <hr>
                        <button type="submit" class="button">Sign Up</button>
                        <button type="reset" class="button white">Reset</button>
                    </form>
                </div>

            </div>
        </div>
    </section>
