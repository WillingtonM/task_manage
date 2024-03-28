<div class="row p-3 mb-5">
    
    <nav aria-label="breadcrumb mb-0">
        <ol class="breadcrumb bg-white px-0 shadow-none bg-none" style="border-radius: 15px">
            <li class="breadcrumb-item font-weight-bolder"><a class="def_text/" href="#">Users </a></li>
            <li class="breadcrumb-item font-weight-bolder" aria-current="page">Manage</li>
        </ol>
    </nav>
    <div class="col-12">
        <button type="button" class="btn btn-dark me-1" name="button" onclick="requestModal(post_modal[16], post_modal[16],  {'user_id': ''})" <?= ((!$is_admin) ? 'disabled' : '') ?>> <span> <i class="fa-solid fa-bars-progress me-2"></i> View user performances </span> </button>
    </div>
    <div class="col-12 p-0 mb-3">
        <div class="row">

            <?php if (is_array($usr_qry) || is_object($usr_qry)) : ?>
                <?php $count = 0 ?>
                <?php foreach ($usr_qry as $key => $usr) : ?>
                    <?php $image = (($usr != null) ? img_path(ABS_USER_PROFILE, $usr['user_image'], 1) : '') ?>
                    <?php $ful_name = $usr['name'] . ' ' . $usr['last_name'] ?>
                    <?php $usr_name = $usr['username'] ?>
                    <?php $usr_pstn = $usr['user_position'] ?>

                    <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                        <div class="card">
                            <a class=""  type="button" >
                                <img src="<?= $image ?>" class="card-img-top col-12" alt="..." onclick="requestModal(post_modal[10], post_modal[10], {'user':<?= $usr['user_id'] ?>})">
                                <div class="card-body p-2 bg-light" style="border-radius: 0 0 15px 15px">
                                    <p class="card-text/ text-center" >
                                        <a type="button" class="p-0" onclick="requestModal(post_modal[10], post_modal[10], {'user':<?= $usr['user_id'] ?>})">
                                            <b class="text-dark"></b><?= $ful_name ?></b> 
                                            <br>
                                            <span class="alt_dflt text-sm"> <?= $usr_pstn ?> <small>(<?= $usr['user_type'] ?>)</small> </span>
                                        </a>
                                    </p>
                                    <p class="nav-justify">
                                        <button type="button" class="btn btn-dark me-1" name="button" onclick="requestModal(post_modal[10], post_modal[10],  {'user_id': <?= $usr['user_id'] ?>})" style="padding: 5px 15px;" <?= ((!$is_admin) ? 'disabled' : '') ?>> <span><i class="fas fa-user-edit me-2"></i> Edit user</span> </button>
                                        <a href="tasks?uid=<?= $usr['user_id'] ?>" class="btn btn-success me-1" style="padding: 5px 15px;" <?= ((!$is_admin) ? 'disabled' : '') ?>> <span> <i class="fa-solid fa-list-check me-2"></i> Tasks </span> </a>
                                    </p>

                                </div>
                            </a>
                        </div>
                    </div>

                    <?php $count++ ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        


    </div>


</div>