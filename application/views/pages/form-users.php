<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"></h1>
      </div>

			<div class="col-md-12">
					<?php if(isset($user)) :?>
						<form action="<?= base_url()?>users/update/<?=$user['id']?>" method="post">
					<?php else: ?>
						<form action="<?= base_url()?>users/store" method="post">
					<?php endif;?>
					
					
					<div class="col-md-6">
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" class="form-control" name="name" id="name" placeholder="Name" required value="<?= isset($user) ? $user["name"]: ''?>">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="name">Email</label>
							<input type="email" class="form-control" name="email" id="email" placeholder="Email" required value="<?= isset($user) ? $user["email"]: ''?>">
						</div>
					</div>

                    <div class="col-md-6">
						<div class="form-group">
							<label for="name">Pais</label>
							<input type="text" class="form-control" name="country" id="country" placeholder="Pais" required value="<?= isset($user) ? $user["country"]: ''?>">
						</div>
					</div>

					<div class="col-md-6">
							<button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i> Save</button>
							<a href="<?= base_url()?>users" class="btn btn-danger btn-xs"><i class="fas fa-times"></i> Cancel</a>
						</div>
					</div>
				</form>
			</div>
    </main>
  </div>
</div>