<template>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4>Hello Jobs Application</h4>
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
                            <h2 class="card-title">Jobs Applications</h2>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row margin">
                                <div class="col-lg-12">
                                    <p>
                                        Keep a record of all the jobs you
                                        have applied for
                                    </p>
                                </div>
                                <div class="col-lg-12 ">
                                    <div class="d-inline-block bg-gray rounded-circle text-center mr-2" style="postion:relative; width: 3.2em; height:3.2em">
                                        <span style="font-size:2em">
                                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <div class="d-inline-block" style="position:absolute;">
                                        <p class="text-gray">
                                            Company Name<br />
                                            Posted on 12th December 2020
                                        </p>
                                    </div>
                                </div>

                                <!-- <div class="col-sm-6 col-md-6 col-lg-6 mt-3" > Job Title </div>
                                <div class=" col-sm-6 col-md-6 col-lg-6 text-right mt-3">
                                    Status: &nbsp &nbsp Recieved
                                </div> -->

                                <div class="mt-3" style="width: 50%">
                                    Job Title
                                </div>
                                <div class=" mt-3 text-right text-monospace" style="width: 50%">
                                    Status: Recieved
                                </div>
                                <div class="divider "></div>
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
