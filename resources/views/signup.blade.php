<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <title>Login</title>
</head>

<body>
    <section>
        <div class="p-5 bg-image" style="
        background-image: url('https://images.unsplash.com/photo-1438032005730-c779502df39b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80');
        height: 300px;
        "></div>
        <div class="card mx-4 mx-md-5 shadow-7-strong" style="
        margin-top: -90px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
            <div class="card-body py-5 px-md-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-5">
                        <h3 class="fw-bold mb-5 text-center"> <b>SIGN UP</b></h3>
                        <form action="/donesignup" method="POST">
                            @csrf
                            <div class="form-outline mb-4">
                                <!-- <label for="">Fullname</label> -->
                                <input name="fulname" type="name" id="form3Example3" class="form-control" placeholder="Masukkan Fullname" />
                            </div>
                            <div class="form-outline mb-4">
                                <!-- <label for="">Username</label> -->
                                <input name="email" type="email" id="form3Example3" class="form-control" placeholder="Masukkan Email" />
                            </div>
                            <div class="form-outline mb-4">
                                <!-- <label for="">Username</label> -->
                                <input name="nama" type="name" id="form3Example3" class="form-control" placeholder="Masukkan Username" />
                            </div>
                            <div class="form-outline mb-4">
                                <!-- <label for="">Username</label> -->
                                <input name="sandi" type="password" id="form3Example4" class="form-control" placeholder="Password" />
                            </div>
                            <div class="form-outline mb-4">
                                <!-- <label for="">Username</label> -->
                                <input name="" type="password" id="form3Example4" class="form-control" placeholder="Confirm Password" />
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mb-4">SIGN UP</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
       <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
       -->
</body>

</html>