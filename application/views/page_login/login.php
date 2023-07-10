<div class="contents order-2 order-md-1">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3>Login to <strong>Regime</strong></h3>
            <p class="mb-4">Voulez-vous faire des regimes?</p>
            <form action="<?php echo site_url('Controller/connexion'); ?>" method="post">

              <div class="form-group first">
                <label for="username" style="font-size: large; color: black;">E-mail</label>
                <input type="text" name="mail" class="form-control" placeholder="your-email@gmail.com" id="username" style="font-size: small;">
              </div>
              <div class="form-group last mb-3">
                <label for="password" style="font-size: large; color: black; ">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Your Password" id="password" style="font-size: small;">
              </div>

              <input type="submit" value="Log In" class="btn btn-block btn-primary">

            </form>
							<center><span class="ml-auto"><a href="<?php echo site_url('Welcome/inscription');?>" class="" style="color:red;">S'inscrire</a></span></center>
          </div>
        </div>
      </div>
    </div>
  </div>
