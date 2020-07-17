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

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h2 class="card-title">Posted Jobs</h2>
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
                                <div class="col-lg-12 text-right mt-2">
                                    <div class="">
                                        <a href="#" class="card-link text-uppercase text-primary">View
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
.select-option {
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
