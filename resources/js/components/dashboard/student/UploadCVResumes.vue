<template>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4>Hello Upload Your CV</h4>
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
                            <h2 class="card-title">Upload CV/Resume</h2>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <form action="">
                                <div class="row margin">
                                    <div class="col-lg-12">
                                        <p>
                                            Upload and save your CV to our system. You can use your uploaded CV to quickly apply for a job.
                                        </p>
                                    </div>

                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">Title</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Title">
                                        </div>
                                        <div class="form-group">
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1" placeholder="">
                                        </div>
                                        <small id="passwordHelpInline" class="text-muted">
                                            Upload a CV no larger than 10MB for file types .pdf .doc .docx .rtf
                                        </small>
                                    </div>

                                    <div class="col-lg-6 text-center mb-2 mt-2">
                                        <input name="" id="" class="btn btn-secondary" type="button" value="Cancel" style="width: 60%">
                                    </div>
                                    <div class="col-lg-6 text-center mb-2 mt-2">
                                        <input name="" id="" class="btn bg-orange" type="button" value="Upload CV" style="width: 60%; color:white">
                                    </div>

                                    <div class="col-lg-12">
                                        <p class="text-primary">
                                            Uploading a new CV will overwrite your current one.

                                        </p>
                                    </div>

                                </div>
                            </form>
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
