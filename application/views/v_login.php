 <div id="heading-breadcrumbs">
        <div class="container"> 
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Login User</h1>
            </div>
          </div>
        </div>
      </div>


<section class="forms">


 <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
              <div class="box">
                <form action="<?php echo site_url('c_validasi/getLogin') ?>" method="POST">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="username" placeholder="Username" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                     <input type="password" name="password" placeholder="password" class="form-control">
                  </div>
                  <div class="text-center">
                    <input type="submit" value="Signin" class="btn btn-primary">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

</section>
</body>