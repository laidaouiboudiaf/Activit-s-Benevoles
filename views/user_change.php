<div class="container" style="margin-top: 40px">
  <div class="row">
    <div class="col-sm-6 col-md-6 col-md-offset-3">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>Modification de mes informations personnelles</strong>
        </div>
        <div class="panel-body">
          <?php if (isset($error)) { ?>
          <div class="alert alert-warning" role="alert"><?= $error ?></div>
          <?php } ?>
          <form role="form" action="/index.php/users/c_users_change" method="post">
            <fieldset>
              <div class="row">
                <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                    <div class="form-group">
                        <div class="input-group">
                        <span class="input-group-addon"> <i
                            class="glyphicon glyphicon-user"></i>
                        </span> 
                        <input type="hidden" class="form-control" placeholder="Pseudo"
                            name="loginUser" type="text" value="<?php echo $logged_user->loginUser;?>">
                        </div>
                    </div>
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"> <i
                        class="glyphicon glyphicon-user"></i>
                      </span> <input class="form-control" placeholder="Prenom d'utilisateur"
                        name="firstname" type="text" autofocus>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"> <i
                        class="glyphicon glyphicon-user"></i>
                      </span> <input class="form-control" placeholder="Nom d'utilisateur"
                        name="lastname" type="text" autofocus>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"> <i
                        class="glyphicon glyphicon-calendar"></i>
                      </span> <input class="form-control" placeholder="Date de naissance"
                        name="birth" type="text" autofocus>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"> <i
                        class="glyphicon glyphicon-envelope"></i>
                      </span> <input class="form-control" placeholder="Adresse mail"
                        name="mailUser" type="text" autofocus>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"> <i
                        class="glyphicon glyphicon-earphone"></i>
                      </span> <input class="form-control" placeholder="+33 numero de telephone"
                        name="phoneUser" type="text" autofocus>
                    </div>
                  </div>
                   <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"> <i
                        class="glyphicon glyphicon-lock"></i>
                      </span> <input class="form-control" placeholder="Mot de passe"
                        name="password" type="password" value="">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"> <i
                        class="glyphicon glyphicon-lock"></i>
                      </span> <input class="form-control" placeholder="Confirmation du mot de passe"
                        name="passwordCong" type="password" value="">
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-lg btn-primary btn-block"
                      value="Modifier mes informations">
                  </div>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>