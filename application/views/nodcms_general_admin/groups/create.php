

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo lang('Manage'); ?>
        <small><?php echo lang('Groups'); ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i><?php echo lang('Home'); ?></a></li>
        <li class="active"><?php echo lang('Groups'); ?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12 col-xs-12">
          
          <?php if($this->session->flashdata('success')): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <?php echo $this->session->flashdata('success'); ?>
            </div>
          <?php elseif($this->session->flashdata('error')): ?>
            <div class="alert alert-error alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <?php echo $this->session->flashdata('error'); ?>
            </div>
          <?php endif; ?>

          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><?php echo lang('Add Group'); ?></h3>
            </div>
            <form role="form" action="<?php base_url('admin/create_group/') ?>" method="post">
              <div class="box-body">

                <?php echo validation_errors(); ?>

                <div class="form-group">
                  <label for="group_name"><?php echo lang('Group Name'); ?></label>
                  <input type="text" class="form-control" id="group_name" name="group_name" placeholder="Enter group name">
                </div>
                <div class="form-group">
                  <label for="permission"><?php echo lang('Permission'); ?></label>

                  <table class="table table-responsive">
                    <thead>
                      <tr>
                        <th></th>
                        <th><?php echo lang('Create'); ?></th>
                        <th><?php echo lang('Update'); ?></th>
                        <th><?php echo lang('View'); ?></th>
                        <th><?php echo lang('Delete'); ?></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><?php echo lang('Users'); ?></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createUser" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateUser" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewUser" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteUser" class="minimal"></td>
                      </tr>
                      <tr>
                        <td><?php echo lang('Groups'); ?></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createGroup" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateGroup" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewGroup" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteGroup" class="minimal"></td>
                      </tr>
                      <tr>
                        <td><?php echo lang('Brands'); ?></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createBrand" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateBrand" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewBrand" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteBrand" class="minimal"></td>
                      </tr>
                      <tr>
                        <td><?php echo lang('Category'); ?></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createCategory" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateCategory" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewCategory" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteCategory" class="minimal"></td>
                      </tr>
                      <tr>
                        <td><?php echo lang('Stores'); ?></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createStore" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateStore" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewStore" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteStore" class="minimal"></td>
                      </tr>
                      <tr>
                        <td><?php echo lang('Attributes'); ?></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createAttribute" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateAttribute" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewAttribute" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteAttribute" class="minimal"></td>
                      </tr>
                      <tr>
                        <td><?php echo lang('Products'); ?></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createProduct" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateProduct" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewProduct" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteProduct" class="minimal"></td>
                      </tr>
                      <tr>
                        <td><?php echo lang('Orders'); ?></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createOrder" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateOrder" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewOrder" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteOrder" class="minimal"></td>
                      </tr>
                      <tr>
                        <td><?php echo lang('Forum'); ?></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createForum" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateForum" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewForum" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteForum" class="minimal"></td>
                      </tr>
                      <tr>
                        <td><?php echo lang('Reports'); ?></td>
                        <td> - </td>
                        <td> - </td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewReports" class="minimal"></td>
                        <td> - </td>
                      </tr>
                      <tr>
                        <td><?php echo lang('Company'); ?></td>
                        <td> - </td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateCompany" class="minimal"></td>
                        <td> - </td>
                        <td> - </td>
                      </tr>
                      <tr>
                        <td><?php echo lang('Profile'); ?></td>
                        <td> - </td>
                        <td> - </td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewProfile" class="minimal"></td>
                        <td> - </td>
                      </tr>
                      <tr>
                        <td><?php echo lang('Setting'); ?></td>
                        <td>-</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateSetting" class="minimal"></td>
                        <td> - </td>
                        <td> - </td>
                      </tr>
                    </tbody>
                  </table>
                  
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary"><?php echo lang('Save Changes'); ?></button>
                <a href="<?php echo base_url('admin/group/') ?>" class="btn btn-warning"><?php echo lang('Back'); ?></a>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!-- col-md-12 -->
      </div>
      <!-- /.row -->
      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<script type="text/javascript">
  $(document).ready(function() {
    $("#mainGroupNav").addClass('active');
    $("#addGroupNav").addClass('active');

    $('input[type="checkbox"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    });
  });
</script>

