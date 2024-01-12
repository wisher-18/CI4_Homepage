<?= $this->extend("layouts/adminDefault") ?>

<?= $this->section('title') ?>Dashboard
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">All Users</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">


                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0"
                            role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                            <thead>
                                <tr role="row">
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Name: activate to sort column descending" style="width: 86.2px;">
                                        First Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                        aria-label="Position: activate to sort column ascending"
                                        style="width: 120.2px;">
                                        Last Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                        aria-label="Office: activate to sort column ascending" style="width: 64.2px;">
                                        User Role</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                        aria-label="Age: activate to sort column ascending" style="width: 30.2px;">
                                        Email
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                        aria-label="Start date: activate to sort column ascending"
                                        style="width: 72.2px;">
                                        Status</th>
 
                                </tr>
                            </thead>

                            <tbody>
                            
                            <?php foreach($users as $user): ?>
                                <tr class="odd">
                                    <td class="sorting_1"><?= esc($user->first_name)?></td>
                                    <td><a href="<?= base_url("admin/users/".$user->id) ?>"><?= esc($user->last_name)?></a></td>
                                    <td><?= esc($user->user_role)?></td>

                                    <td><?= esc($user->email)?></td>
                                    <td><?php if($user->active){
                                        echo "Active";
                                    }
                                    else{ echo "Not Active";}?></td>
                                    
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    
                    <?= $pager->links() ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>