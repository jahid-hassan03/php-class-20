<?php include 'pages/header.php'; ?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card bg-info">
                    <div class="card-header text-center text-white"> Add Product </div>
                    <div class="card-body">
                        <form action="action.php" method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-md-3"> product name</label>
                                <div class="col-md-9">
                                    <input type="text" name="name" class="form-control"/>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-3"> product price</label>
                                <div class="col-md-9">
                                    <input type="number" name="price" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3"> product image</label>
                                <div class="col-md-9">
                                    <input type="file" name="image" class="form-control-file"/>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-3"> Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="description" ></textarea>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="product_btn" class="btn btn-outline-success text-white" value="submit"/>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

