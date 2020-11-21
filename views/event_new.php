<div class="container" style="margin-top: 40px">
  <div class="row">
    <div class="col-sm-6 col-md-6 col-md-offset-3">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>Formulaire de renseignement nouvel événement</strong>
        </div>
        <div class="panel-body">
          <?php if (isset($error)) { ?>
          <div class="alert alert-warning" role="alert"><?= $error ?></div>
          <?php } ?>
          <form role="form" action="/index.php/organisateurs/c_event_create" method="post">
            <fieldset>
              <div class="row">
                <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"> <i
                        class="glyphicon glyphicon-user"></i>
                      </span> <input class="form-control" name="nameEvent" type="text" value="<?=$nameEvent?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"> <i
                        class="glyphicon glyphicon-calendar"></i>
                      </span> <input class="form-control" placeholder="date de l'événement"
                        name="dateEvent" type="date" autofocus value="Date de l'événement">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"> <i
                        class="glyphicon glyphicon-calendar"></i>
                      </span> <input class="form-control" placeholder="date limite de candidatures"
                        name="deadline" type="date" value="Date limite de candidature" autofocus >
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"> <i
                        class="glyphicon glyphicon-question-sign"></i>
                      </span> <input class="form-control" placeholder="type de l'événement"
                        name="typeEvent" type="text" autofocus>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"> <i
                        class="glyphicon glyphicon-comment"></i>
                      </span> <input class="form-control" placeholder="description"
                        name="descriptionEvent" type="text" autofocus>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"> <i
                        class="glyphicon glyphicon-screenshot"></i>
                      </span> <input class="form-control" placeholder="lieu"
                        name="road" type="text" autofocus>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"> <i
                        class="glyphicon glyphicon-envelope"></i>
                      </span> <input class="form-control" placeholder="mail organisateur"
                        name="mailEvent" type="text" autofocus>
                    </div>
                  </div>
                   <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"> <i
                        class="glyphicon glyphicon-globe"></i>
                      </span> <input class="form-control" placeholder="site Web"
                        name="website" type="text" value="">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"> <i
                        class="glyphicon glyphicon-camera"></i>
                      </span> <input class="form-control" placeholder="image"
                        name="picture" type="text" value="">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"> <i
                        class="glyphicon glyphicon-flag"></i>
                      </span> <input class="form-control" placeholder="code postal"
                        name="CP" type="numbers" value="">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"> <i
                        class="glyphicon glyphicon-user"></i>
                      </span> <input class="form-control" name="loginUser" type="text" value="<?=$loginUser?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-lg btn-primary btn-block"
                      value="Suivant">
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