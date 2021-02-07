<?php include_once 'header.php' ?>

<div id="register-form" class="mx-auto my-5" style="max-width: 800px">
    <div class="container">
	    <div class="card">
		    <div class="card-body">
			    <form action="./controllers/register-controller.php" method="post" id="login">
				    
				    <div class="form-group row">
					    <label for="firstname" class="col-sm-3 col-form-label">firstname</label>
					    <div class="col-sm-9">
						    <input type="text" name="firstname" value="" class="form-control" id="firstname">
						    <?php if (isset($errors['firstname'])){ ?>
						    <span class="text-danger small">
							    <?php echo $errors['firstname'] ?>
						    </span>
						    <?php } ?>
					    </div>
				    </div>
				    <div class="form-group row">
					    <label for="lastname" class="col-sm-3 col-form-label">lastname</label>
					    <div class="col-sm-9">
						    <input type="text" name="lastname" value="" class="form-control" id="lastname">
                            <?php if (isset($errors['lastname'])){ ?>
						    <span class="text-danger small">
							    <?php echo $errors['lastname'] ?>
						    </span>
                            <?php } ?>
					    </div>
				    </div>
				    <div class="form-group row">
					    <label class="col-sm-3 col-form-label">gender</label>
					    <div class="col-sm-9 mt-2">
						    <div class="form-check form-check-inline">
							    <input class="form-check-input" checked type="radio" name="gender" id="male" value="male">
							    <label class="form-check-label" for="male">male</label>
						    </div>
						    <div class="form-check form-check-inline">
							    <input class="form-check-input" type="radio" name="gender" id="female" value="female">
							    <label class="form-check-label" for="female">female</label>
						    </div>
                            <?php if (isset($errors['gender'])){ ?>
						    <span class="text-danger small d-block">
							    <?php echo $errors['gender'] ?>
						    </span>
                            <?php } ?>
					    </div>
				    </div>
				    <div class="form-group row">
					    <label class="col-sm-3 col-form-label" for="address">address</label>
					    <div class="col-sm-9 mt-2">
						    <textarea class="form-control" id="address" rows="3" placeholder="address"> Some address text placed here</textarea>

                            <?php if (isset($errors['address'])){ ?>
							    <span class="text-danger small d-block">
							    <?php echo $errors['address'] ?>
						    </span>
                            <?php } ?>

					    </div>
				    </div>
				    <div class="form-group row">
					    <label for="email" class="col-sm-3 col-form-label">email</label>
					    <div class="col-sm-9">
						    <input type="email" name="email" value="aaa@email.com" class="form-control" id="email">

                            <?php if (isset($errors['email'])){ ?>
							    <span class="text-danger small d-block">
							    <?php echo $errors['email'] ?>
						    </span>
                            <?php } ?>

					    </div>
				    </div>
				    <div class="form-group row">
					    <label for="mobile" class="col-sm-3 col-form-label">mobile</label>
					    <div class="col-sm-9">
						    <input type="tel" name="phone" value="0123456789" class="form-control" id="mobile">

                            <?php if (isset($errors['phone'])){ ?>
							    <span class="text-danger small d-block">
							    <?php echo $errors['phone'] ?>
						    </span>
                            <?php } ?>

					    </div>
				    </div>
				    <div class="form-group row">
					    <label for="password" class="col-sm-3 col-form-label">password</label>
					    <div class="col-sm-9">
						    <input type="password" name="password" value="password" class="form-control" id="password">

                            <?php if (isset($errors['password'])){ ?>
							    <span class="text-danger small d-block">
							    <?php echo $errors['password'] ?>
						    </span>
                            <?php } ?>

					    </div>
				    </div>
				    <div class="form-group row">
					    <label for="country" class="col-sm-3 col-form-label">Country</label>
					    <div class="col-sm-9">
						    <select class="form-control" id="country">
							    <option  disabled value="">Select country</option>
							    <option value="EG" selected>EG</option>
							    <option value="KSA">KSA</option>
							    <option value="UAE">UAE</option>
						    </select>

                            <?php if (isset($errors['country'])){ ?>
							    <span class="text-danger small d-block">
							    <?php echo $errors['country'] ?>
						    </span>
                            <?php } ?>

					    </div>
				    </div>
				    <div class="form-group row">
					    <label for="department" class="col-sm-3 col-form-label">department</label>
					    <div class="col-sm-9">
						    <input type="text" name="department" value="dep" class="form-control" id="department">

                            <?php if (isset($errors['department'])){ ?>
							    <span class="text-danger small d-block">
							    <?php echo $errors['department'] ?>
						    </span>
                            <?php } ?>

					    </div>
				    </div>
				    <div class="form-group row">
					    <label for="skills" class="col-sm-3 col-form-label">skills</label>
					    <div class="col-sm-9">
						    <div class="row">
							    <div class="col-6">
								    <div class="form-check form-check-inline">
									    <input class="form-check-input" checked type="checkbox" id="php" name="skills[]" value="php">
									    <label class="form-check-label" for="php">PHP</label>
								    </div>
							    </div>
							    <div class="col-6">
								    <div class="form-check form-check-inline">
									    <input class="form-check-input" type="checkbox" id="ruby" name="skills[]" value="ruby">
									    <label class="form-check-label" for="ruby">ruby</label>
								    </div>
							    </div>
							    <div class="col-6">
								    <div class="form-check form-check-inline">
									    <input class="form-check-input" type="checkbox" id="python" name="skills[]" value="python">
									    <label class="form-check-label" for="python">python</label>
								    </div>
							    </div>
							    <div class="col-6">
								    <div class="form-check form-check-inline">
									    <input class="form-check-input" checked type="checkbox" id="mysql" name="skills[]" value="mysql">
									    <label class="form-check-label" for="mysql">mysql</label>
								    </div>
							    </div>
						    </div>

                            <?php if (isset($errors['skills'])){ ?>
							    <span class="text-danger small d-block">
							    <?php echo $errors['skills'] ?>
						    </span>
                            <?php } ?>

					    </div>
				    </div>
				    <div id="captcha-image" class="">
					    <input type="hidden" value="<?= $c ?>" name="captcha_verify">
					    <h4 class="text-center"><?= $c ?></h4>
				    </div>
				    <div class="form-group row">
					    <label for="captcha" class="col-sm-3 col-form-label">captcha</label>
					    <div class="col-sm-9">
						    <input type="text" name="captcha" value="captcha" class="form-control" id="captcha">


                            <?php if (isset($errors['captcha_verify'])){ ?>
							    <span class="text-danger small d-block">
							    <?php echo $errors['captcha_verify'] ?>
						    </span>
                            <?php } ?>
					    </div>



				    </div>
				    <div class="form-group row">
					    <div class="col-sm-3"></div>
					    <div class="col-sm-9">
						    <input type="submit" name="isSubmitted" class="form-control btn btn-primary" value="Submit">
					    </div>
				    </div>
			    </form>
		    </div>
	    </div>
    </div>
</div>

<?php include_once 'footer.php' ?>
