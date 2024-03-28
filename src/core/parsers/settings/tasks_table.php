<?php if (!empty($user)) : ?>
<div class="col-12 p-4">
    <h5 class="">
        <span class="text-dark"><?= $user['name'] . ' ' . $user['last_name'] ?> &nbsp; | &nbsp; <i class="text-danger">Tasks</i> </span>
        <br>
        <small class="text-warning">@<?= $user['username'] ?></small>
    </h5>
    <hr class="horizontal dark my-1">

</div>
<?php endif; ?>
<div class="col-12 p-0">
    <table class="table table-striped">
        <thead class="thead-light">
            <tr class="">
                <th class="text-center" style="width:1px" scope="col">#</th>
                <th scope="col" class="px-2">Task</th>
                <th scope="col" class="px-3 text-center/">Status</th>
                <th scope="col" class="px-2 text-center/">Due date</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php if (is_array($nwsf_qry) || is_object($nwsf_qry)) : ?>
                <?php $count = 0 ?>
                <?php $now = date("Y-m-d H:i:s"); ?>
                <?php foreach ($nwsf_qry as $key => $task) : ?>
                    <?php $count++ ?>
                    <?php $task_id  = $task['task_id'] ?>
                    <?php $deadline = date("Y-m-d H:i:s", strtotime($task['task_deadline'])) ?>
                    <?php $state    = ((isset($task['task_completed']) && $task['task_completed'] == 1) ? true : false) ?>
                    <?php $due      = ($deadline < $now) ? true : false ?>

                    <tr>
                        <th class="text-center" scope="row"> <?= $count ?> </th>
                        <td> <span> <?= ((!empty($task['task_name'])) ? $task['task_name'] : '') ?> </span> </td>
                        <td>
                            <span class="badge rounded-pill bg-<?= (!$state) ? 'success' : 'warning' ?>"><?= (!$state) ? 'Active' : 'Completed' ?></span>
                        </td>
                        <td> <span class="text-<?= (($due) ? 'danger': 'success') ?>"> <?= date("d M Y", strtotime($deadline)) ?> </span> </td>
                        <td>
                            <?php if ($is_admin): ?>
                                <a href="task?task_id=<?= $task_id ?>" class="float-end me-3 cursor-pointer text-danger font-weight-bolder" <?= ((!$is_admin) ? 'disabled' : '') ?>> <i class="fa-solid fa-pen-to-square me-1"></i> edit </a>
                            <?php endif ?>
                            <a class="float-end font-weight-bolder text-warning me-3" href="view?task=<?= $task['task_id'] ?>&type=active&tab=active" <?= ((!$is_admin) ? 'disabled' : '') ?>> <i class="fa-solid fa-clock-rotate-left me-1"></i> log </a>
                            <a class="float-end font-weight-bolder me-3 btn btn-dark px-3 py-2 border-radius-lg" type="button" onclick="requestModal(post_modal[21], post_modal[21], {'task_id':<?= $task['task_id'] ?>})" <?= ((!$is_admin) ? 'disabled' : '') ?>> view </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>