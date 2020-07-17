<template>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4>Hello JOb Alert</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h2 class="card-title">Jobs Alerts</h2>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row margin">
                                <div class="col-lg-9 ">
                                    <p>
                                        Get notified when new jobs match
                                        your needs and quickly view jobs for
                                        each alert.
                                    </p>
                                </div>
                                <div class="col-lg-3 text-center  mb-2 ">
                                    <button type="button" class="btn bg-orange text-uppercase">
                                        <span class="text-white">Create Job Alert</span>
                                    </button>
                                </div>

                                <div class="divider"></div>

                                <div class="col-lg-12 ">
                                    <div class="d-inline-block bg-gray rounded-circle text-center mr-2" style="postion:relative; width: 3.2em; height:3.2em">
                                        <span style="font-size:2em">
                                            <i class="fa fa-bell" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <div class="d-inline-block" style="position:absolute;">
                                        <small class="text-gray">Expires on 27/03/1779</small><br />
                                        <small class="text-gray">Subscribed</small>
                                    </div>
                                    <div>
                                        <h5 class="gray">Job Alert</h5>
                                    </div>
                                    <div>
                                        <div class="d-lg-inline-block mr-3">
                                            <i class="fa fa-briefcase text-gray" aria-hidden="true"></i>
                                            Lagos
                                        </div>

                                        <div class="d-lg-inline-block mr-3">
                                            <i class="fa fa-industry text-gray" aria-hidden="true"></i>
                                            IT & Software
                                        </div>
                                        <div class="salary d-lg-inline-block mr-3">
                                            <i class="fas fa-map-marked-alt text-gray   "></i>
                                            Lagos
                                        </div>
                                        <div class=" d-lg-inline-block mr-3">
                                            <i class="fas fa-clock  text-gray  "></i>
                                            Full Time
                                        </div>
                                    </div>
                                </div>
                                <div class="divider "></div>
                                <div class="col-lg-12 text-right mt-2">
                                    <div class="">
                                        <a href="#" class="card-link text-uppercase text-primary">Unsubscribe
                                        </a>
                                        <a href="#" class="card-link text-uppercase text-orange">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
</template>

<script>
export default {
    data() {
        return {};
    }
};
</script>

<style>

</style>
