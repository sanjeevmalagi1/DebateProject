<section class="price-area overlay section-padding" id="price-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <form action="<?php echo base_url(); ?>index.php/Auth/login" method="post" class="price-table active">
                        <h3 class="text-uppercase price-title">Login</h3>
                        <p>Dont Have an account ? <a href="<?php echo base_url(); ?>index.php/Auth/signup" class="btn btn-info">Sign up</a> </p>
                        <hr>
                            <input name="username" class="form-control" placeholder="Username">
                            <input name="password" type="password" class="form-control" placeholder="Password">
                        <hr>
                        <button type="submit" class="button">Login</button>
                        <button type="reset" class="button white">Reset</button>
                    </form>
                </div>

            </div>
        </div>
    </section>
