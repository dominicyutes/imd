<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>IMD DSS</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <div class="row">
            <form class="form-horizontal" action="<?php echo base_url('register'); ?>" method="post">
                <div class="col-lg-12">
                    <?php 
                    if (!empty($this->session->flashdata('message'))) {
                        echo $this->session->flashdata('message');
                    } elseif (!empty($this->session->flashdata('message1'))) {
                        echo $this->session->flashdata('message1');
                    }
                    ?>
                    <div class="form-group">
                        <h2>REGISTER PAGE</h2>
                        <div class="col-md-4">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name"
                                value="<?php set_value('name') ?>" />
                            <?php echo form_error('name') ?>
                        </div>
                        <div class="col-md-4">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email"
                                value="<?php set_value('email') ?>" />
                            <?php echo form_error('email') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password"
                                value="<?php set_value('password') ?>" />
                            <?php echo form_error('password') ?>
                        </div>
                        <div class="col-md-4">
                            <label for="cpassword">Confirm Password</label>
                            <input type="password" name="cpassword" class="form-control" id="cpassword"
                                value="<?php set_value('cpassword') ?>" />
                            <?php echo form_error('cpassword') ?>
                        </div>
                    </div>
                    <div>
                        <input type="submit" value="Register" class="btn btn-primary" />
                        <input type="reset" value="Cancel" class="btn btn-danger" />
                    </div>
                    <p>Already have a account<a href="<?php echo base_url();?>Login">Login In</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>

</html>