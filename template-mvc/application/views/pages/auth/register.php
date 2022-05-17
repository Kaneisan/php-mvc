
<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Register</h1>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                             <label for="">Email</label>
                                            <br>
                                            <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Adress">
                                        </div>
                                        <div class="form-group">
                                             <label for="">Name</label>
                                            <br>
                                            <input type="text" class="form-control form-control-user" id="exampleInputNama" aria-describedby="emailHelp" placeholder="Enter Name">
                                        </div>
                                        <div class="form-group">
                                             <label for="">Born Date</label>
                                            <br>
                                            <input type="date" class="form-control form-control-user" id="exampleInputLahir" aria-describedby="emailHelp" placeholder="Enter Your Born Date">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Gender</label>
                                            <br>
                                            <input type="radio" name="">Male
                                            <input type="radio" name="">Female
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <a href="index.html" class="btn btn-primary btn-user btn-block">
                                            Register
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?php echo base_url();?>login">Have an Account?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
