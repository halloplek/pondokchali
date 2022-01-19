<?php require ('template/header.php') ?>
<?php include 'lib.php'; ?>
<!--  ************************* Page Title Starts Here ************************** -->


<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="alert alert-primary" role="alert">
                Selamat datang di portal donasi, donasi aman dan mudah
            </div>
        </div>
    </div>
</div>





<!-- ################# Our Blog Starts Here#######################--->

<div class="container mb-5">
    <div class="row">

        <div class="col-6">

            <div class="card">
                <h5 class="card-header">Nominal Donasi</h5>
                <div class="card-body">
                    <form action="" method="post">
                            <div class="form-group">

                        <div class="form-group">

                            <input type="hidden" id="rupiah1" name="rupiah1" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Dengan Rupiah</label>
                            <input type="text" id="rupiah2" name="rupiah2" class="form-control">
                        </div>

                        <span id="span" class="badge badge-danger d-none">Nominal donasi minimal 10.0000</span>
                    </div>
                </div> 
                        <button id="submit"   type="submit" class="btn btn-primary ">Lanjut Pembayaran  </button>
</form>
            </div>
        </div>
    </div>
</div>





<!--  ************************* Footer Starts Here ************************** -->
<?php require ('template/footer.php') ?>