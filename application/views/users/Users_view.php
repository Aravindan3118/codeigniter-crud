<div class="table-responsive">
    <?php if($this->uri->segment(2) == "updated")
              {
                  echo '<p class="text-success">Data Updated</p>';
                } ?>
           <table class="table table-bordered">
                <tr>
                     <th>ID</th>
                     <th>Username</th>
                     <th>Email</th>
                     <th>phone number</th>
                     <th>Edit</th>
                </tr>
           <?php
           if($fetch_data->num_rows() > 0)
           {
                foreach($fetch_data->result() as $row)
                {
           ?>
                <tr>
                     <td><?php echo $row->user_id; ?></td>
                     <td><?php echo $row->username; ?></td>
                     <td><?php echo $row->user_email; ?></td>
                     <td><?php echo $row->user_mobile; ?></td>
                     <td><a class="btn btn-danger" href="#" class="delete_data" id="<?php echo $row->user_id; ?>">Delete</a>
                     <a class="btn btn-info" href="<?php echo base_url(); ?>users/update_data/<?php echo $row->user_id; ?>">Edit</a></td>
                </tr>
           <?php
                }
           }
           else
           {
           ?>
                <tr>
                     <td colspan="5">No Users Found</td>
                </tr>
           <?php
           }
           ?>
           </table>
      </div>