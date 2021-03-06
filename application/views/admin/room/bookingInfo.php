<?php $this->load->view('admin/header');?>
<link rel="stylesheet" href="<?php echo base_url('public/css/admin/custome.css');?>">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3 class="m-0 text-dark"><strong>Booking Info</strong></h3>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url().'admin/home/index';?>">Home</a></li>
              <li class="breadcrumb-item active">Room</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
             <?php if($this->session->flashdata('success')){?>
                <div class="alert alert-success"><?php echo $this->session->flashdata('success') ?></div>
             <?php } ?>

             <?php if($this->session->flashdata('error')){?>
                <div class="alert alert-danger"><?php echo $this->session->flashdata('error') ?></div>
             <?php } ?>

            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <form class="form-inline ml-3" method="get">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" name="q" id="q"  aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit" style="background-color: gainsboro;">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

               </div>
               <div class="card-body">
                    <div class="table-responsive">
                      <table class="table room">
                          <tr>
                              <th>id</th>
                              <th>BookingId</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Email</th>
                              <th>Room Id</th>
                              <th>Adult</th> 
                              <th>Child</th>
                              <th>Check In Time</th> 
                              <th>Check Out Time</th>
                              <th>Price</th>
                              <th>Total Price</th>
                              <th>Payment Type</th>
                              <th>Arrival Time</th>
                              <th>Days</th>
                              <!-- <th>Action</th> -->
                          </tr>

                            <?php if(!empty($room)){?>
                              <?php foreach($room as $room){ ?>
                                <tr>
                                    <td><?php echo $room['id']?></td>
                                    <td><?php echo $room['bookingid']?></td>
                                    <td><?php echo $room['first_name']?></td>
                                    <td><?php echo $room['last_name']?></td>
                                    <td><?php echo $room['email']?></td>
                                    <td><?php echo $room['fkroomid']?></td>

                                    <td><?php echo $room['adult']?></td>

                                    <td><?php echo $room['child']?></td>
                                    <td><?php echo $room['check_in_time']?></td>
                                    <td><?php echo $room['check_out_time']?></td>
                                    <td><?php echo $room['price'] ?></td>
                                    <td><?php echo $room['total_price']?></td>
                                    <td><?php echo $room['payment_type'] ?></td>

                                    <td><?php echo $room['arrivalTime']?></td>
                                    <td><?php echo $room['days'] ?></td>
                                    <td style="white-space: nowrap;">

                                         <!-- <a href="<?php echo base_url().'admin/room/edit/'.$room['id'];?>" title="edit"><i class="far fa-edit" style="color:black;" onclick=""></i></a>
                                         <a href="javascript:void(0);" class="btn btn-danger" style="font-size: 10px;" onclick="deleteRoom(<?php echo $room['id']; ?>)"><i class="fas fa-trash"></i>Delete</a> -->
                                        <!--<a href="javascript:void(0);" onclick="deleteRoom(<?php echo $room['id']; ?>)" title="delete"><i class="fas fa-trash-alt" style="color:black;"></i></a> -->
                                    </td>
                                </tr>
                              <?php } ?>
                            <?php } else { ?>
                                <tr>
                                    <td colspan="4">Record not found</td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
               </div>
               <div class="card-footer text-muted">                   
                    <?php echo $this->pagination->create_links(); ?>
                </div>
            </div>


          </div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->




<?php $this->load->view('admin/footer');?>

<script>
    function deleteRoom(id) {
        if(confirm("Are you sure want to delete room?")){
            window.location.href='<?php echo base_url().'admin/room/delete/';?>'+id;
        }
    }
</script>