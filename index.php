<?php require_once __DIR__."/view/V_head.php"; ?>

<div class="container">

		<div class="row">
    <div class="col md-4">
    </div>
    <div class="col md-4">
						<div class="card shadow p-5">
							<div class="mx-auto">
								<img src="assets/img/logosmk.png" class="card-img-top rounded mx-auto d-block w-50" alt="Logo SMK">
							</div>
					  		<div class="card-body">
									<form class="" action="back/login/handle_login.php" method="post">
										<div class="mb-3 mt-5">
										 <label for="Username" class="form-label">Username</label>
										 <input type="Username" class="form-control" id="Username" placeholder="Username">
										</div>
										<div class="mb-3" >
										 <label for="Password" class="form-label">Password</label>
										 <input type="password" class="form-control" id="Password" placeholder="Password">
										</div>
						    		<a href="#" class="btn d-grid gap-2 mt-4">Login</a>
									</form>
					  		</div>
						</div>
    </div>
    <div class="col md-4">
    </div>
  </div>

</form>
</div>
