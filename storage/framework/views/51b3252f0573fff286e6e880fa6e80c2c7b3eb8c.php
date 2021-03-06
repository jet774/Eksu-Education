<div class="modal fade" id="CreateBook" tabindex="-1" role="dialog" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="col-md-12">
                <div class="card card-box-shadow">
                    <div class="card-header" data-background-color="custom-addbook">
                        <h4 class="title">Add New Book</h4>
                    </div>
                    <div class="card-content">
                        <form id="autoload">
                            <?php echo csrf_field(); ?>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Book Name</label>
                                        <input name="book_name" id="book_name" type="text" class="form-control" required>
                                    </div>
                                </div>

                                  <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Author Name</label>
                                        <input type="text" id="book_author" name="book_author" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
																<div class="form-group label-floating">
																	<label class="control-label">Select Category</label>
																	<select name="book_category" id="book_category" class="form-control" required>
																		<option selected class="d-none"></option>
																		<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
																			<option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
																		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
																	</select>                                   
																</div>
                                </div>                        
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Call Mark</label>
                                        <input name="call_mark" id="call_mark" type="text" class="form-control" required>
                                    </div>
                                </div>
                            </div>
														<div class="row">
															<div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Quantity (pcs)</label>
                                        <input name="stock_qty" id="stock_qty" type="number" min='0' max='500' class="form-control" required>
                                    </div>
                                </div>
														</div>
                        </form>
 
                        <div class="clearfix"></div>


                        <?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                        <p class="error text-center alert alert-danger">
                            
                            <ul>
                                
                            </ul>
                        </p>
                        <div class="modal-footer">
                            <button type="submit" id="add" class="btn btn-primary">Add Book </button>
                            <button type="button" class="btn btn-dark add_book_cancel">Close</button>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


