    <!-- [ Main Content ] start -->
    <section class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->
                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <div class="page-header-title">
                                        <h3 class="m-b-10">Donor</h3>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>"><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="<?= base_url('donor') ?>">Donor</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">

                                <!-- [ Hover-table ] start -->
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Donor List</h5>
                                        </div>
                                        <div class="card-block table-border-style">
                                            <?php 
                                                if($this->session->flashdata('msg')){
                                                    echo $this->session->flashdata('msg');
                                                }
                                            ?>
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th style=" color: black;">Full Name</th>
                                                            <th style=" color: black;">Contact</th>
                                                            <th style=" color: black;">Address</th>
                                                            <th style=" color: black;">Area</th>
                                                            <th style=" color: black;">Blood Group</th>
                                                            <th style=" color: black;">Last Date</th>
                                                            <th style=" color: black;">Next Date</th>
                                                            <th style=" color: black;">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            if($donor){
                                                                foreach($donor as $d){
                                                        ?>
                                                        <tr>
                                                            <td><?= $d->name ?></td>
                                                            <td><?= $d->contact ?></td>
                                                            <td><?= $d->address ?></td>
                                                            <td><?= $d->area ?></td>
                                                            <td><?= $d->blood_group ?></td>
                                                            <td><?= $d->last_date ?></td>
                                                            <td><?= $d->next_date ?></td>
                                                            <td>
                                                                <a href="<?= base_url() ?>donor/edit/<?= $d->id ?>" class="btn btn-info">Edit</a>
                                                                <a href="<?= base_url() ?>donor/delete/<?= $d->id ?>" class="btn btn-danger">Delete</a>
                                                            </td>
                                                        </tr>
                                                        <?php }} ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ Hover-table ] end -->
                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- [ Main Content ] end -->