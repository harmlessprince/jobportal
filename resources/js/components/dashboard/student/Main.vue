<template>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4>Hello UserName</h4>
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

    <section class="content-header">
        <div class="container-fluid">
            <form class="bg-primary p-2">
                <div class="row mb-2">
                    <div class="col-auto select-option float-center">
                        Find A JOB
                    </div>
                    <div class="col-md-3 select-option">

                        <select class="form-control" name="" id="">
                            <option></option>
                            <option></option>
                            <option></option>
                        </select>

                    </div>
                    <div class="col-md-3 select-option">
                        <select class="form-control" name="" id="">
                            <option></option>
                            <option></option>
                            <option></option>
                        </select>
                    </div>
                    <div class="col-md-3 select-option">
                        <select class="form-control" name="" id="">
                            <option></option>
                            <option></option>
                            <option></option>
                        </select>
                    </div>
                    <div class="col-auto select-option">
                        <button type="submit" class="btn bg-orange text-white pr-5 pl-5">Search</button>
                    </div>
                </div>
            </form>
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
                            <h2 class="card-title">Jobs For You</h2>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row margin">
                                <div class="col-12">
                                    <div class="job_title">
                                        <h4>
                                            Technical Architect
                                            <span class="float-right"><i class="fa fa-heart text-gray" aria-hidden="true"></i></span>
                                        </h4>
                                    </div>
                                    <div class="company_name text-primary">
                                        Comapny Name
                                    </div>
                                    <div class="job_detail">
                                        <div class="d-lg-inline-block">
                                            Lagos
                                        </div>
                                        <span class="d-none d-lg-inline d-xl-inline">
                                            |
                                        </span>
                                        <div class="d-lg-inline-block">
                                            Full Time
                                        </div>
                                        <span class="d-none d-lg-inline d-xl-inline">
                                            |
                                        </span>
                                        <div class="salary d-lg-inline-block">
                                            <span class="currency">
                                                USD</span>
                                            Below 75,000
                                        </div>
                                    </div>
                                    <div class="job_function text-primary">
                                        IT & Software
                                        <span class="text-gray float-right" style="font-size: 1.4em">2w</span>
                                    </div>
                                </div>
                                <div class="divider"></div>
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
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h2 class="card-title">Saved Jobs</h2>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row margin">
                                <div class="col-lg-12">
                                    <p>
                                        You are able to save the jobs that
                                        interest you and come back later to
                                        apply.
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
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h2 class="card-title">Jobs For You</h2>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row margin"></div>
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

.select-option{
    margin-bottom: .5em;
}
.divider {
    height: 1px;
    width: 100%;
    background-color: cadetblue;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
}

.job_detail {
    white-space: nowrap;
    overflow-x: auto;
}

.job_detail_content {
    display: inline-block;
}
</style>
