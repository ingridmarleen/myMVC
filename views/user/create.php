<?php include('/views/header.php'); ?>

<div class="container" >
          
    <form class="form-horizontal" method="post" action="index.php">

        <div class="panel panel-primary">

            <h2 class="panel-heading">Register</h2>
            
            <div class="panel-body">
                <!--Name-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="name">Name</label>  
                  <div class="col-md-4">
                  <input id="name" name="name" placeholder="Naam" class="form-control input-md" type="text">

                  </div>
                </div>

                <!--Email adress-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="email">Email</label>  
                  <div class="col-md-4">
                  <input id="email" name="email" placeholder="Email adres" class="form-control input-md" type="text">

                  </div>
                </div>

                <!--Username-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="username">Username</label>  
                  <div class="col-md-4">
                  <input id="username" name="username" placeholder="Gebruikersnaam" class="form-control input-md" type="text">

                  </div>
                </div>

                <!--Password-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="password">Password</label>
                  <div class="col-md-4">
                    <input id="password" name="password" placeholder="Wachtwoord" class="form-control input-md" type="password">

                  </div>
                </div>

                <!--Sign up or login-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="register"></label>
                  <div class="col-md-8">
                    <button type="submit" value="register" name="submit" class="btn btn-primary">Register</button>
                  </div>
                </div>
            </div>
        </div>
    </form>
</div>
<?php include('/views/footer.php'); ?>