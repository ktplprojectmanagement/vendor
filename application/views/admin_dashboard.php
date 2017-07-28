     
        <div class="main">
            <!-- NAVBAR -->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-btn">
                        <button type="button" class="btn-toggle-fullwidth"></button>
                    </div>
                    
                    <div id="navbar-menu" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="http://partners.vvfltd.com/customer/index.php/Adminlogin" class="dropdown-toggle" data-toggle="dropdown"><span>Logout</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <!-- <li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
                                    <li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
                                    <li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li> -->
                                    <li><a href="http://partners.vvfltd.com/customer/index.php/Adminlogin"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <script type="text/javascript" src="<?php echo base_url(); ?>tableExport.jquery.plugin-master/tableExport.js"></script>
                <script type="text/javascript" src="<?php echo base_url(); ?>tableExport.jquery.plugin-master/jquery.base64.js"></script>
                <script type="text/javascript" src="<?php echo base_url(); ?>tableExport.jquery.plugin-master/jspdf/libs/sprintf.js"></script>
                <script type="text/javascript" src="<?php echo base_url(); ?>tableExport.jquery.plugin-master/jspdf/jspdf.js"></script>
                <script type="text/javascript" src="<?php echo base_url(); ?>tableExport.jquery.plugin-master/jspdf/libs/base64.js"></script>
                     <div id="standard_modal" class="modal fade" tabindex="-1" data-backdrop="del_goal" data-keyboard="false">
                        <div class="modal-dialog" style="width: 45%;">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h4 class="modal-title" id="get_head">List</h4>
                                </div>
                                <div class="modal-body">
                                    <table class="table" id="tableID111">
                                      <thead>
                                        <th>vendor ID</th>
                                        <th>Vendor Name</th>
                                        <th>Purchaser Name</th><th>Sub-Purchaser Name</th>
                                      </thead>
                                      <tbody id="cancl_body_part">
                                        <?php                                        
                                            if (isset($mail_recive4) && count($mail_recive4)>0) {
                                                $cnt = 1;$cnt_state = 1;
                                                for ($i=0; $i < count($mail_recive4); $i++) {
//print_r($this->session->userdata('purchaser_detail'));die();
if(isset($mail_recive4[$i]['vendor_id']))
{
if($this->session->userdata('purchaser_detail') == '1')
{
$this->db->select('*');
$this->db->from('vendor_details');
$this->db->where('Vendor_id = "'.$mail_recive4[$i]['vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$mail_recive_data = $this->db->get()->result_array();
            
}
else if($this->session->userdata('purchaser_detail') == '2')
{
$this->db->select('*');
$this->db->from('vendor_details');
$this->db->where('Vendor_id = "'.$mail_recive4[$i]['vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$mail_recive_data = $this->db->get()->result_array();
            //$mail_recive_data = $this->common_model->fetch_data('vendor_details',$query,$data_check);
            
}
else
{
$this->db->select('*');
$this->db->from('vendor_details');
$this->db->where('Vendor_id = '.$mail_recive4[$i]['vendor_id']);
$mail_recive_data = $this->db->get()->result_array();
//print_r($mail_recive_data);die();
}
}
//print_r($mail_recive_data);die();
if(count($mail_recive_data)>0)
{
                                                    ?>
                                                    <tr>
                                                        <td><?php if(isset($mail_recive_data['0']['Vendor_id'])) { print_r($mail_recive_data['0']['Vendor_id']); }  ?></td>
                                                        <td><?php if(isset($mail_recive_data['0']['Name'])) { print_r($mail_recive_data['0']['Name']); }  ?></td>
                                                        <td><?php if(isset($mail_recive_data['0']['Purchaser_Name'])) { print_r($mail_recive_data['0']['Purchaser_Name']); }  ?></td>
                                                        <td><?php if(isset($mail_recive_data['0']['Sub_Purchaser_Name'])) { print_r($mail_recive_data['0']['Sub_Purchaser_Name']); }  ?></td>
                                                    </tr>
                                                    <?php
                                                    $cnt++;$cnt_state++;
}
                                                }
                                            }
                                            //print_r($cnt);die();
                                        ?>
<?php                                        
                                            if (isset($mail_recive3) && count($mail_recive3)>0) {
                                                $cnt = 1;
                                                for ($i=0; $i < count($mail_recive3); $i++) {
//print_r($mail_recive);die();
if(isset($mail_recive3[$i]['vendor_id']))
{
if($this->session->userdata('purchaser_detail') == '1')
{
    $query = 'where Vendor_id = ? and (Sub_Purchaser_Email_ID = ? or Purchaser_Email_ID)';
$data_check = array(
'Vendor_id' => $mail_recive3[$i]['vendor_id'],
'Sub_Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
'Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
);
            $mail_recive_data = $this->common_model->fetch_data('vendor_details',$query,$data_check);
}
else if($this->session->userdata('purchaser_detail') == '2')
{
     $query = 'where Vendor_id = ? and (Sub_Purchaser_Email_ID = ? or Purchaser_Email_ID)';
$data_check = array(
'Vendor_id' => $mail_recive3[$i]['vendor_id'],
'Sub_Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
'Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
);
            $mail_recive_data = $this->common_model->fetch_data('vendor_details',$query,$data_check);
}
else
{
$this->db->select('*');
$this->db->from('vendor_details');
$this->db->where('Vendor_id = '.$mail_recive3[$i]['vendor_id']);
$mail_recive_data = $this->db->get()->result_array();
//print_r($mail_recive_data);die();
}
}
//print_r($mail_recive_data);die();
if(isset($mail_recive_data['0']))
{
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $cnt; ?></td>
                                                        <td><?php if(isset($mail_recive_data['0']['Vendor_id'])) { print_r($mail_recive_data['0']['Vendor_id']); }  ?></td>
                                                        <td><?php if(isset($mail_recive_data['0']['Name'])) { print_r($mail_recive_data['0']['Name']); }  ?></td>
                                                        <td><?php if(isset($mail_recive_data['0']['Purchaser_Name'])) { print_r($mail_recive_data['0']['Purchaser_Name']); }  ?></td>
                                                        <td><?php if(isset($mail_recive_data['0']['Sub_Purchaser_Name'])) { print_r($mail_recive_data['0']['Sub_Purchaser_Name']); }  ?></td>
                                                    </tr>
                                                    <?php
                                                    $cnt++;
}
                                                }
                                            }
                                        ?>
<?php                                        
                                            if (isset($mail_recive2) && count($mail_recive2)>0) {
                                                $cnt = 1;
                                                for ($i=0; $i < count($mail_recive2); $i++) {
//print_r($mail_recive);die();
if(isset($mail_recive2[$i]['vendor_id']))
{
if($this->session->userdata('purchaser_detail') == '1')
{
    $query = 'where Vendor_id = ? and (Sub_Purchaser_Email_ID = ? or Purchaser_Email_ID)';
$data_check = array(
'Vendor_id' => $mail_recive2[$i]['vendor_id'],
'Sub_Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
'Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
);
            $mail_recive_data = $this->common_model->fetch_data('vendor_details',$query,$data_check);
}
else if($this->session->userdata('purchaser_detail') == '2')
{
    $query = 'where Vendor_id = ? and (Sub_Purchaser_Email_ID = ? or Purchaser_Email_ID)';
$data_check = array(
'Vendor_id' => $mail_recive2[$i]['vendor_id'],
'Sub_Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
'Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
);
            $mail_recive_data = $this->common_model->fetch_data('vendor_details',$query,$data_check);
}
else
{
$this->db->select('*');
$this->db->from('vendor_details');
$this->db->where('Vendor_id = '.$mail_recive2[$i]['vendor_id']);
$mail_recive_data = $this->db->get()->result_array();
//print_r($mail_recive_data);die();
}
}
//print_r($mail_recive_data);die();
if(isset($mail_recive_data['0']))
{
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $cnt; ?></td>
                                                        <td><?php if(isset($mail_recive_data['0']['Vendor_id'])) { print_r($mail_recive_data['0']['Vendor_id']); }  ?></td>
                                                        <td><?php if(isset($mail_recive_data['0']['Name'])) { print_r($mail_recive_data['0']['Name']); }  ?></td>
                                                        <td><?php if(isset($mail_recive_data['0']['Purchaser_Name'])) { print_r($mail_recive_data['0']['Purchaser_Name']); }  ?></td>
                                                        <td><?php if(isset($mail_recive_data['0']['Sub_Purchaser_Name'])) { print_r($mail_recive_data['0']['Sub_Purchaser_Name']); }  ?></td>
                                                    </tr>
                                                    <?php
                                                    $cnt++;
}
                                                }
                                            }
                                        ?>
<?php                                        
                                            if (isset($mail_recive1) && count($mail_recive1)>0) {
                                                $cnt = 1;
                                                for ($i=0; $i < count($mail_recive1); $i++) {
//print_r($mail_recive);die();
if(isset($mail_recive1[$i]['vendor_id']))
{
if($this->session->userdata('purchaser_detail') == '1')
{
    $query = 'where Vendor_id = ? and (Sub_Purchaser_Email_ID = ? or Purchaser_Email_ID)';
$data_check = array(
'Vendor_id' => $mail_recive1[$i]['vendor_id'],
'Sub_Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
'Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
);
            $mail_recive_data = $this->common_model->fetch_data('vendor_details',$query,$data_check);
}
else if($this->session->userdata('purchaser_detail') == '2')
{
    $query = 'where Vendor_id = ? and (Sub_Purchaser_Email_ID = ? or Purchaser_Email_ID)';
$data_check = array(
'Vendor_id' => $mail_recive1[$i]['vendor_id'],
'Sub_Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
'Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
);
            $mail_recive_data = $this->common_model->fetch_data('vendor_details',$query,$data_check);
}
else
{
$this->db->select('*');
$this->db->from('vendor_details');
$this->db->where('Vendor_id = '.$mail_recive1[$i]['vendor_id']);
$mail_recive_data = $this->db->get()->result_array();
//print_r($mail_recive_data);die();
}
}
//print_r($mail_recive_data);die();
if(isset($mail_recive_data['0']))
{
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $cnt; ?></td>
                                                        <td><?php if(isset($mail_recive_data['0']['Vendor_id'])) { print_r($mail_recive_data['0']['Vendor_id']); }  ?></td>
                                                        <td><?php if(isset($mail_recive_data['0']['Name'])) { print_r($mail_recive_data['0']['Name']); }  ?></td>
                                                        <td><?php if(isset($mail_recive_data['0']['Purchaser_Name'])) { print_r($mail_recive_data['0']['Purchaser_Name']); }  ?></td>
                                                        <td><?php if(isset($mail_recive_data['0']['Sub_Purchaser_Name'])) { print_r($mail_recive_data['0']['Sub_Purchaser_Name']); }  ?></td>
                                                    </tr>
                                                    <?php
                                                    $cnt++;
}
                                                }
                                            }
                                        ?>
                                      </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn dark btn-outline" style="border-color: rgb(2, 183, 195);float: left;">Cancel</button>
                                   <!--  <a onClick ="alert("dfgdf");">XLS</a> -->
                                  
                                </div>
                            </div>
                        </div>
                    </div>
 <div id="standard_modal_mail1" class="modal fade" tabindex="-1" data-backdrop="del_goal" data-keyboard="false">
                        <div class="modal-dialog" style="width: 45%;">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h4 class="modal-title" id="get_head">List</h4>
                                </div>
                                <div class="modal-body">
                                    <table class="table" id="tableID1">
                                      <thead>
                                        <th>Customer ID</th>
                                        <th>Customer Name</th>
                                        <th>Marketing Person Name</th><th>Sub Marketing Person Name</th>
                                      </thead>
                                      <tbody id="cancl_body_part">
                                        <?php                                        
                                            if (isset($custom_mail_receive) && count($custom_mail_receive)>0) {
                                                $cnt = 1;
                                                for ($i=0; $i < count($custom_mail_receive); $i++) {
if($this->session->userdata('purchaser_detail') == '1')
{
 $this->db->select('vendor_id');
$this->db->from('customer_details');
$this->db->where('Vendor_id = "'.$custom_mail_receive[$i]['vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$mail_recive_data1 = $this->db->get()->result_array();
           
}
else if($this->session->userdata('purchaser_detail') == '2')
{
 $this->db->select('vendor_id');
$this->db->from('customer_details');
$this->db->where('Vendor_id = "'.$custom_mail_receive[$i]['vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$mail_recive_data1 = $this->db->get()->result_array();
}
else
{
$this->db->select('*');
$this->db->from('customer_details');
$this->db->where('Vendor_id = "'.$custom_mail_receive[$i]['vendor_id'].'"');
$mail_recive_data1 = $this->db->get()->result_array();
//print_r($mail_recive_data);die();
}
if(isset($mail_recive_data1['0']))
{
                                                    ?>
                                                    <tr>
                                                        <td><?php if(isset($mail_recive_data1['0']['Vendor_id'])) { print_r($mail_recive_data1['0']['Vendor_id']); }  ?></td>
                                                        <td><?php if(isset($mail_recive_data1['0']['Name'])) { print_r($mail_recive_data1['0']['Name']); }  ?></td>
                                                        <td><?php if(isset($mail_recive_data1['0']['Purchaser_Name'])) { print_r($mail_recive_data1['0']['Purchaser_Name']); }  ?></td>
                                                        <td><?php if(isset($mail_recive_data1['0']['Sub_Purchaser_Name'])) { print_r($mail_recive_data1['0']['Sub_Purchaser_Name']); }  ?></td>
                                                    </tr>
                                                    <?php
                                                    $cnt++;
}
                                                }
                                            }
                                        ?>
                                      </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn dark btn-outline" style="border-color: rgb(2, 183, 195);float: left;">Cancel</button>
                                   <!--  <a onClick ="alert("dfgdf");">XLS</a> -->
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="vendor_modal1" class="modal fade" tabindex="-1" data-backdrop="del_goal" data-keyboard="false">
                        <div class="modal-dialog" style="width: 45%;">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h4 class="modal-title" id="get_head">Approved List</h4>
                                </div>
                                <div class="modal-body">
                                    <table class="table" id="tableID2">
                                      <thead>
                                        <th>vendor ID</th>
                                        <th>Vendor Name</th>
                                        <th>Purchaser Name</th><th>Sub Purchaser Name</th>
<?php
if($this->session->userdata('purchaser_detail') == '1' || $this->session->userdata('purchaser_detail') == '2')
{
?>
<?php
}
else
{
?>
<th>Check</th>
<?php
}
?>
                                      </thead>
                                      <tbody id="cancl_body_part">
                                        <?php                                        
                                            if (isset($vendor_updated_data_aprv) && count($vendor_updated_data_aprv)>0) {
                                                $cnt = 1;
                                                for ($i=0; $i < count($vendor_updated_data_aprv); $i++) {

if($this->session->userdata('purchaser_detail') == '1')
{
$this->db->select('*');
$this->db->from('vendor_details');
$this->db->where('Vendor_id = "'.$vendor_updated_data_aprv[$i]['Vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$vendor_updated_data_aprv_list = $this->db->get()->result_array();
}
else if($this->session->userdata('purchaser_detail') == '2')
{
$this->db->select('*');
$this->db->from('vendor_details');
$this->db->where('Vendor_id = "'.$vendor_updated_data_aprv[$i]['Vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$vendor_updated_data_aprv_list = $this->db->get()->result_array();
}
else
{
$query = 'where Vendor_id = ?';
            $vendor_updated_data_aprv_list = $this->common_model->fetch_data('vendor_details',$query,$vendor_updated_data_aprv[$i]['Vendor_id']);
}

if(isset($vendor_updated_data_aprv_list['0']) && count($vendor_updated_data_aprv_list['0'])>0)
{
                                                    ?>
                                                    <tr>
                                                        
                                                        <td><?php if(isset($vendor_updated_data_aprv_list['0']['Vendor_id'])) { print_r($vendor_updated_data_aprv_list['0']['Vendor_id']); }  ?></td>
                                                        <td><?php if(isset($vendor_updated_data_aprv_list['0']['Name'])) { print_r($vendor_updated_data_aprv_list['0']['Name']); }  ?></td>
                                                        <td><?php if(isset($vendor_updated_data_aprv_list['0']['Purchaser_Name'])) { print_r($vendor_updated_data_aprv_list['0']['Purchaser_Name']); }  ?></td>
                                                        <td><?php if(isset($vendor_updated_data_aprv_list['0']['Sub_Purchaser_Name'])) { print_r($vendor_updated_data_aprv_list['0']['Sub_Purchaser_Name']); }  ?></td>
<?php
if($this->session->userdata('purchaser_detail') == '1' || $this->session->userdata('purchaser_detail') == '2')
{
?>
<?php
}
else
{
?>
<td>
                                                                <form method="post" target="_new" action="http://52.172.210.251/vendor/index.php/Vendordata">
                                                                    <input type="text" name="vendor_id" style="display: none" value="<?php  if(isset($vendor_updated_data_aprv_list['0']['Vendor_id'])) { print_r($vendor_updated_data_aprv_list['0']['Vendor_id']); } ?>">
                                                                    <input type="submit" name="submit"  value="Check">
                                                                </form>
                                                            
                                                            </td>
<?php
}
?>
                                                    </tr>
                                                    <?php
}
                                                    $cnt++;
                                                }
                                            }
                                        ?>
                                      </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn dark btn-outline" style="border-color: rgb(2, 183, 195);float: left;">Cancel</button>
                                   <!--  <a onClick ="alert("dfgdf");">XLS</a> -->
                                   
                                </div>
                            </div>
                        </div>
                    </div> 
 <div id="customer_modal_pend1" class="modal fade" tabindex="-1" data-backdrop="del_goal" data-keyboard="false">
                        <div class="modal-dialog" style="width: 45%;">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h4 class="modal-title" id="get_head">Pending List</h4>
                                </div>
                                <div class="modal-body">
                                    <table class="table" id="tableID3">
                                      <thead>
                                        <th>Customer ID</th>
                                        <th>Customer Name</th>
                                        <th>Marketing Person Name</th>
                                        <th>Sub Marketing Person Name</th>
<?php
if($this->session->userdata('purchaser_detail') == '1' || $this->session->userdata('purchaser_detail') == '2')
{
?>
<?php
}
else
{
?>
<th>Check</th>
<?php
}
?>
                                      </thead>
                                      <tbody id="cancl_body_part">
                                        <?php  
                                     // $pending_customer1 = $customer_pending_data;
                                            if (isset($customer_pending_data) && count($customer_pending_data)>0) {
                                                $cnt = 1;

                                                for($i=0;$i<count($customer_pending_data);$i++)
{
if($this->session->userdata('purchaser_detail') == '1')
{
$this->db->select('vendor_id');
$this->db->from('customer_details');
$this->db->where('Vendor_id = "'.$customer_pending_data[$i]['Vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$customer_pending_data_get = $this->db->get()->result_array();
}
else if($this->session->userdata('purchaser_detail') == '2')
{
$this->db->select('vendor_id');
$this->db->from('customer_details');
$this->db->where('Vendor_id = "'.$customer_pending_data[$i]['Vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$customer_pending_data_get = $this->db->get()->result_array();
}
else
{
$query = 'where Vendor_id = ?';
            $customer_pending_data_get = $this->common_model->fetch_data('customer_details',$query,$customer_pending_data[$i]['Vendor_id']);
}
if(count($customer_pending_data_get)>0)
{

                                                    ?>
                                                    <tr>
                                                        
                                                        <td><?php if(isset($customer_pending_data_get['0']['Vendor_id'])) { print_r($customer_pending_data_get['0']['Vendor_id']); }  ?></td>
                                                        <td><?php if(isset($customer_pending_data_get['0']['Name'])) { print_r($customer_pending_data_get['0']['Name']); }  ?></td>
                                                        <td><?php if(isset($customer_pending_data_get['0']['Purchaser_Name'])) { print_r($customer_pending_data_get['0']['Purchaser_Name']);   ?></td>
                                                        <td><?php if(isset($customer_pending_data_get['0']['Sub_Purchaser_Name'])) { print_r($customer_pending_data_get['0']['Sub_Purchaser_Name']); }  ?></td>
<?php
if($this->session->userdata('purchaser_detail') == '1' || $this->session->userdata('purchaser_detail') == '2')
{?>
<?php
}
else
{
?>
<td>
                                                                <form method="post" target="_new" action="<?php echo base_url(); ?>index.php/Customerdetails">
                                                                    <input type="text" name="vendor_id" style="display: none" value="<?php  if(isset($customer_pending_data_get['0']['Vendor_id'])) { print_r($customer_pending_data_get['0']['Vendor_id']); } ?>">
                                                                    <input type="submit" name="submit"  value="Check">
                                                                </form>
                                                            
                                                            </td>
<?php } ?>
                                                    </tr>
                                                    <?php
}
}
                                                    $cnt++;
                                                }
                                            }
                                        ?>
                                      </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn dark btn-outline" style="border-color: rgb(2, 183, 195);float: left;">Cancel</button>
                                   <!--  <a onClick ="alert("dfgdf");">XLS</a> -->
                                  
                                </div>
                            </div>
                        </div>
                    </div> 
<div id="vendor_modal_pend1" class="modal fade" tabindex="-1" data-backdrop="del_goal" data-keyboard="false">
                        <div class="modal-dialog" style="width: 45%;">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h4 class="modal-title" id="get_head">Approved List</h4>
                                </div>
                                <div class="modal-body">
                                    <table class="table" id="tableID4">
                                      <thead>
                                        <th>vendor ID</th>
                                        <th>Vendor Name</th>
                                        <th>Purchaser Name</th>
                                        <th>Sub Purchaser Name</th>
<?php
if($this->session->userdata('purchaser_detail') == '1' || $this->session->userdata('purchaser_detail') == '2')
{
?>
<?php
}
else
{
?>
<th>Check</th>
<?php } ?>
                                      </thead>
                                      <tbody id="cancl_body_part">
                                        <?php  
                                      $pending_customer1 = $vendor_pending_data;
                                            if (isset($vendor_pending_data) && count($vendor_pending_data)>0) {
                                                $cnt = 1;
                                                for($i=0;$i<count($vendor_pending_data);$i++) {

if($this->session->userdata('purchaser_detail') == '1')
{
    $this->db->select('*');
$this->db->from('vendor_details');
$this->db->where('Vendor_id = "'.$vendor_pending_data[$i]['Vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$customer_pending_data_get = $this->db->get()->result_array();
}
else if($this->session->userdata('purchaser_detail') == '2')
{
    $this->db->select('*');
$this->db->from('vendor_details');
$this->db->where('Vendor_id = "'.$vendor_pending_data[$i]['Vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$customer_pending_data_get = $this->db->get()->result_array();
}
else
{
$query = 'where Vendor_id = ?';
            $customer_pending_data_get = $this->common_model->fetch_data('vendor_details',$query,$vendor_pending_data[$i]['Vendor_id']);
}
if(count($customer_pending_data_get)>0)
{
                                                    ?>
                                                    <tr>
                                                        
                                                        <td><?php if(isset($customer_pending_data_get['0']['Vendor_id'])) { print_r($customer_pending_data_get['0']['Vendor_id']); }  ?></td>
                                                        <td><?php if(isset($customer_pending_data_get['0']['Name'])) { print_r($customer_pending_data_get['0']['Name']); }  ?></td>
                                                        <td><?php if(isset($customer_pending_data_get['0']['Purchaser_Name'])) { print_r($customer_pending_data_get['0']['Purchaser_Name']);   ?></td>
                                                        <td><?php if(isset($customer_pending_data_get['0']['Sub_Purchaser_Name'])) { print_r($customer_pending_data_get['0']['Sub_Purchaser_Name']);  } ?></td>
<?php
if($this->session->userdata('purchaser_detail') == '1' || $this->session->userdata('purchaser_detail') == '2')
{
?>
<?php
}
else
{
?>
<td>
                                                                <form method="post" target="_new" action="http://52.172.210.251/vendor/index.php/Vendordata">
                                                                    <input type="text" name="vendor_id" style="display: none" value="<?php  if(isset($customer_pending_data_get['0']['Vendor_id'])) { print_r($customer_pending_data_get['0']['Vendor_id']); } ?>">
                                                                    <input type="submit" name="submit"  value="Check">
                                                                </form>
                                                            
                                                            </td>
<?php } ?>
                                                    </tr>
                                                    <?php
}
}
                                                    $cnt++;
                                                }
                                            }
                                        ?>
                                      </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn dark btn-outline" style="border-color: rgb(2, 183, 195);float: left;">Cancel</button>
                                   <!--  <a onClick ="alert("dfgdf");">XLS</a> -->
                                  
                                </div>
                            </div>
                        </div>
                    </div> 
    <div id="vendor_modal11" class="modal fade" tabindex="-1" data-backdrop="del_goal" data-keyboard="false">
                        <div class="modal-dialog" style="width: 45%;">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h4 class="modal-title" id="get_head">Approved List</h4>
                                </div>
                                <div class="modal-body">
                                    <table class="table" id="tableID5">
                                      <thead>
                                        <th>vendor ID</th>
                                        <th>Customer Name</th>
                                       <th>Marketing Person Name</th> <th>Sub Marketing Person Name</th>
<?php
if($this->session->userdata('purchaser_detail') == '1' || $this->session->userdata('purchaser_detail') == '2')
{
?>
<?php
}
else
{
?>
<th>Check</th>
<?php } ?>
                                      </thead>
                                      <tbody id="cancl_body_part">
                                        <?php                                        
                                            if (isset($vendor_updated_data_aprv1) && count($vendor_updated_data_aprv1)>0) {
                                                $cnt = 1;
                                                for ($i=0; $i < count($vendor_updated_data_aprv1); $i++) {
if($this->session->userdata('purchaser_detail') == '1')
{
 $this->db->select('vendor_id');
$this->db->from('customer_details');
$this->db->where('Vendor_id = "'.$vendor_updated_data_aprv1[$i]['Vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$vendor_updated_data_aprv_list1 = $this->db->get()->result_array();
}
else if($this->session->userdata('purchaser_detail') == '2')
{
 $this->db->select('vendor_id');
$this->db->from('customer_details');
$this->db->where('Vendor_id = "'.$vendor_updated_data_aprv1[$i]['Vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$vendor_updated_data_aprv_list1 = $this->db->get()->result_array();
}
else
{
$query = 'where Vendor_id = ?';
            $vendor_updated_data_aprv_list1 = $this->common_model->fetch_data('customer_details',$query,$vendor_updated_data_aprv1[$i]['Vendor_id']);
}

if(isset($vendor_updated_data_aprv_list1['0']))
{
                                                    ?>
                                                    <tr>
                                                        
                                                        <td><?php if(isset($vendor_updated_data_aprv_list1['0']['Vendor_id'])) { print_r($vendor_updated_data_aprv_list1['0']['Vendor_id']); }  ?></td>
                                                        <td><?php if(isset($vendor_updated_data_aprv_list1['0']['Name'])) { print_r($vendor_updated_data_aprv_list1['0']['Name']); }  ?></td>
                                                        <td><?php if(isset($vendor_updated_data_aprv_list1['0']['Purchaser_Name'])) { print_r($vendor_updated_data_aprv_list1['0']['Purchaser_Name']); }  ?></td>
                                                        <td><?php if(isset($vendor_updated_data_aprv_list1['0']['Sub_Purchaser_Name'])) { print_r($vendor_updated_data_aprv_list1['0']['Sub_Purchaser_Name']); }  ?></td>
<?php
if($this->session->userdata('purchaser_detail') == '1' || $this->session->userdata('purchaser_detail') == '2')
{
?>
<?php
}
else
{
?>
<td>
                                                                <form method="post" target="_new" action="<?php echo base_url(); ?>index.php/Customerdetails">
                                                                    <input type="text" name="vendor_id" style="display: none" value="<?php if(isset($vendor_updated_data_aprv_list1['0']['Vendor_id'])) { print_r($vendor_updated_data_aprv_list1['0']['Vendor_id']); }  ?>">
                                                                    <input type="submit" name="submit"  value="Check">
                                                                </form>
                                                            
                                                            </td>
<?php } ?>
                                                    </tr>
                                                    <?php
}
                                                    $cnt++;
                                                }
                                            }
                                        ?>
                                      </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn dark btn-outline" style="border-color: rgb(2, 183, 195);float: left;">Cancel</button>
                                   <!--  <a onClick ="alert("dfgdf");">XLS</a> -->
                                  
                                </div>
                            </div>
                        </div>
                    </div>  
                    <div id="vendor_modal2" class="modal fade" tabindex="-1" data-backdrop="del_goal" data-keyboard="false">
                        <div class="modal-dialog" style="width: 45%;">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h4 class="modal-title" id="get_head">List</h4>
                                </div>
                                <div class="modal-body">
                                    <table class="table" id="tableID6">
                                      <thead>
                                        <th>vendor ID</th>
                                        <th>Vendor Name</th>
                                        <th>Purchaser Name</th><th>Sub-Purchaser Name</th>
<?php
if($this->session->userdata('purchaser_detail') == '1' || $this->session->userdata('purchaser_detail') == '2')
{
?>
<?php
}
else
{
?>
<th>Check</th>
<?php } ?>
                                      </thead>
                                      <tbody id="cancl_body_part">
                                        <?php                                        
                                            if (isset($vendor_updated_data) && count($vendor_updated_data)>0) {
                                                $cnt = 1;
                                                //print_r($this->session->userdata('purchaser_detail'));die();
                                                for ($i=0; $i < count($vendor_updated_data); $i++) {
if($this->session->userdata('purchaser_detail') == '1')
{
$this->db->select('*');
$this->db->from('vendor_details');
$this->db->where('Vendor_id = "'.$vendor_updated_data[$i]['Vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$vendor_updated_data_list = $this->db->get()->result_array();
}
else if($this->session->userdata('purchaser_detail') == '2')
{
$this->db->select('*');
$this->db->from('vendor_details');
$this->db->where('Vendor_id = "'.$vendor_updated_data[$i]['Vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$vendor_updated_data_list = $this->db->get()->result_array();
}
else
{
$query = 'where Vendor_id = ?';
            $vendor_updated_data_list = $this->common_model->fetch_data('vendor_details',$query,$vendor_updated_data[$i]['Vendor_id']);
}
if(isset($vendor_updated_data_list['0']))
{
                                                    ?>
                                                    <tr>
                                                        <td><?php if(isset($vendor_updated_data_list['0']['Vendor_id'])) { print_r($vendor_updated_data_list['0']['Vendor_id']); }  ?></td>
                                                        <td><?php if(isset($vendor_updated_data_list['0']['Name'])) { print_r($vendor_updated_data_list['0']['Name']); }  ?></td>
                                                        <td><?php if(isset($vendor_updated_data_list['0']['Purchaser_Name'])) { print_r($vendor_updated_data_list['0']['Purchaser_Name']); }  ?></td>
                                                         <td><?php if(isset($vendor_updated_data_list['0']['Sub_Purchaser_Name'])) { print_r($vendor_updated_data_list['0']['Sub_Purchaser_Name']); }  ?></td>
<?php
if($this->session->userdata('purchaser_detail') == '1' || $this->session->userdata('purchaser_detail') == '2')
{
?>
<?php
}
else
{
?>
<td>
                                                                <form method="post" target="_new" action="http://52.172.210.251/vendor/index.php/Vendordata">
                                                                    <input type="text" name="vendor_id" style="display: none" value="<?php if(isset($vendor_updated_data_list['0']['Vendor_id'])) { print_r($vendor_updated_data_list['0']['Vendor_id']); }  ?>">
                                                                    <input type="submit" name="submit"  value="Check">
                                                                </form>
                                                            
                                                            </td>
<?php } ?>
                                                    </tr>
                                                    <?php
}
                                                    $cnt++;
                                                }
                                            }
                                        ?>
                                      </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn dark btn-outline" style="border-color: rgb(2, 183, 195);float: left;">Cancel</button>
                                   <!--  <a onClick ="alert("dfgdf");">XLS</a> -->
                                   
                                </div>
                            </div>
                        </div>
                    </div> 
         <div id="vendor_modal21" class="modal fade" tabindex="-1" data-backdrop="del_goal" data-keyboard="false">
                        <div class="modal-dialog" style="width: 45%;">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h4 class="modal-title" id="get_head">List</h4>
                                </div>
                                <div class="modal-body">
                                    <table class="table" id="tableID711">
                                      <thead>
                                        <th>Customer ID</th>
                                        <th>Customer Name</th>
                                        <th>Marketing Person Name</th><th>Sub Marketing Person Name</th>
<?php
if($this->session->userdata('purchaser_detail') == '1' || $this->session->userdata('purchaser_detail') == '2')
{?>
<?php
}
else
{
?>
<th>Check</th>
<?php } ?>
                                      </thead>
                                      <tbody id="cancl_body_part">
                                        <?php                                        
                                            if (isset($vendor_updated_data1) && count($vendor_updated_data1)>0) {
                                                $cnt = 1;
                                                for ($i=0; $i < count($vendor_updated_data1); $i++) {

if($this->session->userdata('purchaser_detail') == '1')
{
$this->db->select('vendor_id');
$this->db->from('customer_details');
$this->db->where('Vendor_id = "'.$vendor_updated_data1[$i]['Vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$vendor_updated_data_list1 = $this->db->get()->result_array();
}
else if($this->session->userdata('purchaser_detail') == '2')
{
$this->db->select('vendor_id');
$this->db->from('customer_details');
$this->db->where('Vendor_id = "'.$vendor_updated_data1[$i]['Vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$vendor_updated_data_list1 = $this->db->get()->result_array();
}
else
{
$query = 'where Vendor_id = ?';
            $vendor_updated_data_list1 = $this->common_model->fetch_data('customer_details',$query,$vendor_updated_data1[$i]['Vendor_id']);
}

if(isset($vendor_updated_data_list1['0']))
{
                                                    ?>
                                                    <tr>
                                                        <td><?php if(isset($vendor_updated_data_list1['0']['Vendor_id'])) { print_r($vendor_updated_data_list1['0']['Vendor_id']); }  ?></td>
                                                        <td><?php if(isset($vendor_updated_data_list1['0']['Name'])) { print_r($vendor_updated_data_list1['0']['Name']); }  ?></td>
                                                        <td><?php if(isset($vendor_updated_data_list1['0']['Purchaser_Name'])) { print_r($vendor_updated_data_list1['0']['Purchaser_Name']); }  ?></td>
                                                        <td><?php if(isset($vendor_updated_data_list1['0']['Sub_Purchaser_Name'])) { print_r($vendor_updated_data_list1['0']['Sub_Purchaser_Name']); }  ?></td>
<?php
if($this->session->userdata('purchaser_detail') == '1' || $this->session->userdata('purchaser_detail') == '2')
{
?>
<?php
}
else
{
?>
<td>
                                                                <form method="post" target="_new" action="<?php echo base_url(); ?>index.php/Customerdetails">
                                                                    <input type="text" name="vendor_id" style="display: none" value="<?php if(isset($vendor_updated_data_list1['0']['Vendor_id'])) { print_r($vendor_updated_data_list1['0']['Vendor_id']); }  ?>">
                                                                    <input type="submit" name="submit"  value="Check">
                                                                </form>
                                                            
                                                            </td>
<?php } ?>
                                                    </tr>
                                                    <?php
}
                                                    $cnt++;
                                                }
                                            }
                                        ?>
                                      </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn dark btn-outline" style="border-color: rgb(2, 183, 195);float: left;">Cancel</button>
                                   <!--  <a onClick ="alert("dfgdf");">XLS</a> -->
                                   
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div id="vendor_modal211" class="modal fade" tabindex="-1" data-backdrop="del_goal" data-keyboard="false">
                        <div class="modal-dialog" style="width: 45%;">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h4 class="modal-title" id="get_head">List</h4>
                                </div>
                                <div class="modal-body">
                                    <table class="table" id="tableID71">
                                      <thead>
                                        <th>vendor ID</th>
                                       <th>vendor Name</th>
                                        <th>Purchaser Name</th>
                                        <th>Sub Purchaser Name</th>
                                        <th>Reminder Date</th>
                                      </thead>
                                      <tbody id="cancl_body_part">
                                              <?php       
                                              $vendor_reject = 0;
                                            if (isset($mail_recive41) && count($mail_recive41)>0) {
                                                $cnt = 1;
                                                for ($i=0; $i < count($mail_recive41); $i++) {

if(isset($mail_recive41[$i]['vendor_id']))
{
if($this->session->userdata('purchaser_detail') == '1')
{
    $this->db->select('vendor_id');
$this->db->from('vendor_details');
$this->db->where('Vendor_id = "'.$mail_recive41[$i]['vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$mail_recive_data = $this->db->get()->result_array();
            if(count($mail_recive_data)>0)
            {
                $vendor_reject++;
            }
            $this->db->select('DISTINCT(reminder_date)');
$this->db->from('mail_record');
$this->db->where('vendor_id = '.$mail_recive41[$i]['vendor_id']);
$this->db->where('reminder_date !=""');
$mail_recive_data1 = $this->db->get()->result_array();
$this->db->select('DISTINCT(reminder_date)');
$this->db->from('mail_record');
$this->db->where('vendor_id = '.$mail_recive41[$i]['vendor_id']);
$this->db->where('reminder_date !=""');
$mail_recive_data1 = $this->db->get()->result_array();
}
else if($this->session->userdata('purchaser_detail') == '2')
{
       $this->db->select('vendor_id');
$this->db->from('vendor_details');
$this->db->where('Vendor_id = "'.$mail_recive41[$i]['vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$mail_recive_data = $this->db->get()->result_array();
            $this->db->select('DISTINCT(reminder_date)');
$this->db->from('mail_record');
$this->db->where('vendor_id = '.$mail_recive41[$i]['vendor_id']);
$this->db->where('reminder_date !=""');
$mail_recive_data1 = $this->db->get()->result_array();
            if(count($mail_recive_data)>0)
            {
                $vendor_reject++;
            }
            $this->db->select('DISTINCT(reminder_date)');
$this->db->from('mail_record');
$this->db->where('vendor_id = '.$mail_recive41[$i]['vendor_id']);
$this->db->where('reminder_date !=""');
$mail_recive_data1 = $this->db->get()->result_array();
}
else
{
$this->db->select('*');
$this->db->from('vendor_details');
$this->db->where('Vendor_id = '.$mail_recive41[$i]['vendor_id']);
$mail_recive_data = $this->db->get()->result_array();

$this->db->select('DISTINCT(reminder_date)');
$this->db->from('mail_record');
$this->db->where('vendor_id = '.$mail_recive41[$i]['vendor_id']);
$this->db->where('reminder_date !=""');
$mail_recive_data1 = $this->db->get()->result_array();

if(count($mail_recive_data)>0)
            {
                $vendor_reject++;
            }
//print_r($mail_recive_data);die();
}
}
//print_r($mail_recive_data1);die();
if(isset($mail_recive_data['0']) && (isset($mail_recive_data1)) && count($mail_recive_data1)>0)
{
    $list_date = '';
    for($l=0;$l<count($mail_recive_data1);$l++)
    {
        if($list_date == '')
        {
            $list_date = $mail_recive_data1[$l]['reminder_date'];
        }
        else
        {
            $list_date = $list_date.'<br>'.$mail_recive_data1[$l]['reminder_date'];
        }
    }
                                                    ?>
                                                    <tr>
                                                        
                                                        <td><?php if(isset($mail_recive_data['0']['Vendor_id'])) { print_r($mail_recive_data['0']['Vendor_id']); }  ?></td>
                                                        <td><?php if(isset($mail_recive_data['0']['Name'])) { print_r($mail_recive_data['0']['Name']); }  ?></td>
                                                        <td><?php if(isset($mail_recive_data['0']['Purchaser_Name'])) { print_r($mail_recive_data['0']['Purchaser_Name']); }  ?></td>
                                                        <td><?php if(isset($mail_recive_data['0']['Sub_Purchaser_Name'])) { print_r($mail_recive_data['0']['Sub_Purchaser_Name']); }  ?></td>
                                                        <td><?php if(isset($list_date)) { print_r($list_date); }  ?></td>
                                                    </tr>
                                                    <?php
                                                    $cnt++;
}
                                                }
                                            }
                                        ?>
<?php                                        
                                            if (isset($mail_recive31) && count($mail_recive31)>0) {
                                                $cnt = 1;
                                                for ($i=0; $i < count($mail_recive31); $i++) {
//print_r($mail_recive);die();
if(isset($mail_recive31[$i]['vendor_id']))
{
if($this->session->userdata('purchaser_detail') == '1')
{
    $query = 'where Vendor_id = ? and (Sub_Purchaser_Email_ID = ? or Purchaser_Email_ID)';
$data_check = array(
'Vendor_id' => $mail_recive31[$i]['vendor_id'],
'Sub_Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
'Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
);
            $mail_recive_data = $this->common_model->fetch_data('vendor_details',$query,$data_check);
            if(count($mail_recive_data)>0)
            {
                $vendor_reject++;
            }
}
else if($this->session->userdata('purchaser_detail') == '2')
{
    $query = 'where Vendor_id = ? and (Sub_Purchaser_Email_ID = ? or Purchaser_Email_ID)';
$data_check = array(
'Vendor_id' => $mail_recive31[$i]['vendor_id'],
'Sub_Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
'Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
);
            $mail_recive_data = $this->common_model->fetch_data('vendor_details',$query,$data_check);
            if(count($mail_recive_data)>0)
            {
                $vendor_reject++;
            }
}
else
{
$this->db->select('*');
$this->db->from('vendor_details');
$this->db->where('Vendor_id = '.$mail_recive31[$i]['vendor_id']);
$mail_recive_data = $this->db->get()->result_array();
if(count($mail_recive_data)>0)
            {
                $vendor_reject++;
            }
//print_r($mail_recive_data);die();
}
}
//print_r($mail_recive_data);die();
if(isset($mail_recive_data['0']))
{
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $cnt; ?></td>
                                                        <td><?php if(isset($mail_recive_data['0']['Vendor_id'])) { print_r($mail_recive_data['0']['Vendor_id']); }  ?></td>
                                                        <td><?php if(isset($mail_recive_data['0']['Name'])) { print_r($mail_recive_data['0']['Name']); }  ?></td>
                                                        <td><?php if(isset($mail_recive_data['0']['Purchaser_Name'])) { print_r($mail_recive_data['0']['Purchaser_Name']); }  ?></td>
                                                        <td><?php if(isset($mail_recive_data['0']['Sub_Purchaser_Name'])) { print_r($mail_recive_data['0']['Sub_Purchaser_Name']); }  ?></td>
                                                        <td><?php echo "2017-04-11";  ?></td>
                                                    </tr>
                                                    <?php
                                                    $cnt++;
}
                                                }
                                            }
                                        ?>
<?php                                        
                                            if (isset($mail_recive21) && count($mail_recive21)>0) {
                                                $cnt = 1;
                                                for ($i=0; $i < count($mail_recive21); $i++) {
//print_r($mail_recive);die();
if(isset($mail_recive21[$i]['vendor_id']))
{
if($this->session->userdata('purchaser_detail') == '1')
{
    $query = 'where Vendor_id = ? and (Sub_Purchaser_Email_ID = ? or Purchaser_Email_ID)';
$data_check = array(
'Vendor_id' => $mail_recive21[$i]['vendor_id'],
'Sub_Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
'Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
);
            $mail_recive_data = $this->common_model->fetch_data('vendor_details',$query,$data_check);
            if(count($mail_recive_data)>0)
            {
                $vendor_reject++;
            }
}
else if($this->session->userdata('purchaser_detail') == '2')
{
    $query = 'where Vendor_id = ? and (Sub_Purchaser_Email_ID = ? or Purchaser_Email_ID)';
$data_check = array(
'Vendor_id' => $mail_recive21[$i]['vendor_id'],
'Sub_Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
'Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
);
            $mail_recive_data = $this->common_model->fetch_data('vendor_details',$query,$data_check);
            if(count($mail_recive_data)>0)
            {
                $vendor_reject++;
            }
}
else
{
$this->db->select('*');
$this->db->from('vendor_details');
$this->db->where('Vendor_id = '.$mail_recive21[$i]['vendor_id']);
$mail_recive_data = $this->db->get()->result_array();
if(count($mail_recive_data)>0)
            {
                $vendor_reject++;
            }
//print_r($mail_recive_data);die();
}
}
//print_r($mail_recive_data);die();
if(isset($mail_recive_data['0']))
{
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $cnt; ?></td>
                                                        <td><?php if(isset($mail_recive_data['0']['Vendor_id'])) { print_r($mail_recive_data['0']['Vendor_id']); }  ?></td>
                                                        <td><?php if(isset($mail_recive_data['0']['Name'])) { print_r($mail_recive_data['0']['Name']); }  ?></td>
                                                        <td><?php if(isset($mail_recive_data['0']['Purchaser_Name'])) { print_r($mail_recive_data['0']['Purchaser_Name']); }  ?></td>
                                                        <td><?php if(isset($mail_recive_data['0']['Sub_Purchaser_Name'])) { print_r($mail_recive_data['0']['Sub_Purchaser_Name']); }  ?></td>
                                                        <td><?php echo "2017-04-11";  ?></td>
                                                    </tr>
                                                    <?php
                                                    $cnt++;
}
                                                }
                                            }
                                        ?>
<?php                                        
                                            if (isset($mail_recive11) && count($mail_recive11)>0) {
                                                $cnt = 1;
                                                for ($i=0; $i < count($mail_recive11); $i++) {
//print_r($mail_recive);die();
if(isset($mail_recive11[$i]['vendor_id']))
{
if($this->session->userdata('purchaser_detail') == '1')
{
    $query = 'where Vendor_id = ? and (Sub_Purchaser_Email_ID = ? or Purchaser_Email_ID)';
$data_check = array(
'Vendor_id' => $mail_recive11[$i]['vendor_id'],
'Sub_Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
'Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
);
            $mail_recive_data = $this->common_model->fetch_data('vendor_details',$query,$data_check);
            if(count($mail_recive_data)>0)
            {
                $vendor_reject++;
            }
}
else if($this->session->userdata('purchaser_detail') == '2')
{
    $query = 'where Vendor_id = ? and (Sub_Purchaser_Email_ID = ? or Purchaser_Email_ID)';
$data_check = array(
'Vendor_id' => $mail_recive11[$i]['vendor_id'],
'Sub_Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
'Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
);
            $mail_recive_data = $this->common_model->fetch_data('vendor_details',$query,$data_check);
            if(count($mail_recive_data)>0)
            {
                $vendor_reject++;
            }
}
else
{
$this->db->select('*');
$this->db->from('vendor_details');
$this->db->where('Vendor_id = '.$mail_recive11[$i]['vendor_id']);
$mail_recive_data = $this->db->get()->result_array();
if(count($mail_recive_data)>0)
            {
                $vendor_reject++;
            }
//print_r($mail_recive_data);die();
}
}
//print_r($mail_recive_data);die();
if(isset($mail_recive_data['0']))
{
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $cnt; ?></td>
                                                        <td><?php if(isset($mail_recive_data['0']['Vendor_id'])) { print_r($mail_recive_data['0']['Vendor_id']); }  ?></td>
                                                        <td><?php if(isset($mail_recive_data['0']['Name'])) { print_r($mail_recive_data['0']['Name']); }  ?></td>
                                                        <td><?php if(isset($mail_recive_data['0']['Purchaser_Name'])) { print_r($mail_recive_data['0']['Purchaser_Name']); }  ?></td>
                                                        <td><?php if(isset($mail_recive_data['0']['Sub_Purchaser_Name'])) { print_r($mail_recive_data['0']['Sub_Purchaser_Name']); }  ?></td>
                                                        <td><?php echo "2017-04-11";  ?></td>
                                                    </tr>
                                                    <?php
                                                    $cnt++;
}
                                                }
                                            }
                                        ?>
                                      </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn dark btn-outline" style="border-color: rgb(2, 183, 195);float: left;">Cancel</button>
                                   <!--  <a onClick ="alert("dfgdf");">XLS</a> -->
                                   
                                </div>
                            </div>
                        </div>
                    </div>
<div id="vendor_modal2111" class="modal fade" tabindex="-1" data-backdrop="del_goal" data-keyboard="false">
                        <div class="modal-dialog" style="width: 45%;">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h4 class="modal-title" id="get_head">List</h4>
                                </div>
                                <div class="modal-body">
                                    <table class="table" id="tableID7">
                                      <thead>
                                        <th>Customer ID</th>
                                        <th>Customer Name</th>
                                        <th>Marketing Person Name</th>
                                        <th>Sub Marketing Person Name</th>
                                        <th>Reminder Date</th>
                                      </thead>
                                      <tbody id="cancl_body_part">
                                        <?php                                        
                                            if (isset($custom_mail_receive1) && count($custom_mail_receive1)>0) {
                                                $cnt = 1;
                                                for ($i=0; $i < count($custom_mail_receive1); $i++) {

if($this->session->userdata('purchaser_detail1') == '1')
{
$this->db->select('*');
$this->db->from('customer_details');
$this->db->where('Vendor_id = "'.$custom_mail_receive1[$i]['vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$vendor_updated_data_list1 = $this->db->get()->result_array();
}
else if($this->session->userdata('purchaser_detail1') == '2')
{
$this->db->select('*');
$this->db->from('customer_details');
$this->db->where('Vendor_id = "'.$custom_mail_receive1[$i]['vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$vendor_updated_data_list1 = $this->db->get()->result_array();
//print_r($vendor_updated_data_list1);die();
}
else
{
$query = 'where Vendor_id = ?';
            $vendor_updated_data_list1 = $this->common_model->fetch_data('customer_details',$query,$custom_mail_receive1[$i]['vendor_id']);
}

$this->db->select('DISTINCT(reminder_date)');
$this->db->from('mail_record_customer');
$this->db->where('vendor_id = "'.$custom_mail_receive1[$i]['vendor_id'].'"');
$this->db->where('reminder_date !=""');
$mail_recive_data1 = $this->db->get()->result_array();

if(isset($vendor_updated_data_list1['0']) && (isset($mail_recive_data1) && count($mail_recive_data1)>0))
{
    $list_date = '';
    for($l=0;$l<count($mail_recive_data1);$l++)
    {
        if($list_date == '')
        {
            $list_date = $mail_recive_data1[$l]['reminder_date'];
        }
        else
        {
            $list_date = $list_date.'<br>'.$mail_recive_data1[$l]['reminder_date'];
        }
    }
   //print_r($list_date);die();
   ?>
                                                    <tr>
                                                        <td><?php if(isset($vendor_updated_data_list1['0']['Vendor_id'])) { print_r($vendor_updated_data_list1['0']['Vendor_id']); }  ?></td>
                                                        <td><?php if(isset($vendor_updated_data_list1['0']['Name'])) { print_r($vendor_updated_data_list1['0']['Name']); }  ?></td>
                                                        <td><?php if(isset($vendor_updated_data_list1['0']['Purchaser_Name'])) { print_r($vendor_updated_data_list1['0']['Purchaser_Name']); }  ?></td>
                                                        <td><?php if(isset($vendor_updated_data_list1['0']['Sub_Purchaser_Name'])) { print_r($vendor_updated_data_list1['0']['Sub_Purchaser_Name']); }  ?></td>
                                                         <td><?php if(isset($list_date)) { print_r($list_date); }  ?></td>

                                                    </tr>
                                                    <?php
}
                                                    $cnt++;
                                                }
                                            }
                                        ?>
                                      </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn dark btn-outline" style="border-color: rgb(2, 183, 195);float: left;">Cancel</button>
                                   <!--  <a onClick ="alert("dfgdf");">XLS</a> -->
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="vendor_modal3" class="modal fade" tabindex="-1" data-backdrop="del_goal" data-keyboard="false">
                        <div class="modal-dialog" style="width: 56%;">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h4 class="modal-title" id="get_head">Rejected List</h4>
                                </div>
                                <div class="modal-body">
                                    <table class="table" id="tableID8">
                                      <thead>
                                        <th>vendor ID</th>
                                        <th>Vendor Name</th>
                                        <th>Purchaser Name</th>
                                        <th>Sub Purchaser Name</th>
                                        <th>Rejection Reason</th>
<?php
if($this->session->userdata('purchaser_detail') == '1' || $this->session->userdata('purchaser_detail') == '2')
{
?>
<?php
}
else
{
?>
<th>Check</th>
<?php } ?>
                                      </thead>
                                      <tbody id="cancl_body_part">
                                        <?php                                        
                                            if (isset($vendor_updated_data_rej) && count($vendor_updated_data_rej)>0) {

                                                $cnt = 1;
                                                for ($i=0; $i < count($vendor_updated_data_rej); $i++) {
$query = 'where Vendor_id = ?';
$vendor_rej_reason = $this->common_model->fetch_data('rejection_data',$query,$vendor_updated_data_rej[$i]['Vendor_id']);
//print_r($vendor_rej_reason);die();
if($this->session->userdata('purchaser_detail') == '1')
{
$this->db->select('*');
$this->db->from('vendor_details');
$this->db->where('Vendor_id = "'.$vendor_updated_data_rej[$i]['Vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$vendor_updated_data_rej_list = $this->db->get()->result_array();
}
else if($this->session->userdata('purchaser_detail') == '2')
{
$this->db->select('*');
$this->db->from('vendor_details');
$this->db->where('Vendor_id = "'.$vendor_updated_data_rej[$i]['Vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$vendor_updated_data_rej_list = $this->db->get()->result_array();
}
else
{
$query = 'where Vendor_id = ?';
            $vendor_updated_data_rej_list = $this->common_model->fetch_data('vendor_details',$query,$vendor_updated_data_rej[$i]['Vendor_id']);
}

if(isset($vendor_updated_data_rej_list['0']) && count($vendor_updated_data_rej_list['0'])>0)
{
                                                    ?>
                                                    <tr>
                                                        <td><?php if(isset($vendor_updated_data_rej_list['0']['Vendor_id'])) { print_r($vendor_updated_data_rej_list['0']['Vendor_id']); }  ?></td>
                                                        <td><?php if(isset($vendor_updated_data_rej_list['0']['Name'])) { print_r($vendor_updated_data_rej_list['0']['Name']); }  ?></td>
                                                        <td><?php if(isset($vendor_updated_data_rej_list['0']['Purchaser_Name'])) { print_r($vendor_updated_data_rej_list['0']['Purchaser_Name']); }  ?></td>
                                                        <td><?php if(isset($vendor_updated_data_rej_list['0']['Sub_Purchaser_Name'])) { print_r($vendor_updated_data_rej_list['0']['Sub_Purchaser_Name']); }  ?></td>
                                                        <td>
                                                            <?php 
                                                            if(isset($vendor_rej_reason['0']['reason']))
                                                            {
                                                                $list = explode('!',$vendor_rej_reason['0']['reason']); 
                                                                $list1 = explode('!',$vendor_rej_reason['0']['rejected_field']); 
                                                                if(count($list)>0)
                                                                {
                                                                    $html="<table class='table'><tr><td>Field</td><td>Reason</td></tr>";
                                                                    for($r=0;$r<count($list);$r++)
                                                                    {
                                                                        $html .= "<tr><td>".$list1[$r]."</td><td>".$list[$r]."</td></tr>";
                                                                        //echo $list[$r];
                                                                    }
                                                                    $html .= "</table>";
                                                                    echo $html;
                                                                }
                                                                else
                                                                {
                                                                    echo $vendor_rej_reason['0']['reason'];
                                                                }
                                                            }
                                                            //print_r($list);die(); if(isset($vendor_rej_reason['0']['reason'])) { $list = exploade('!',$vendor_rej_reason['0']['reason']); print_r($list);die(); }  ?>
                                                        </td>
<?php
if($this->session->userdata('purchaser_detail') == '1' || $this->session->userdata('purchaser_detail') == '2')
{
?>
<?php
}
else
{
?>
<td>
                                                                <form method="post" target="_new" action="http://52.172.210.251/vendor/index.php/Vendordata">
                                                                    <input type="text" name="vendor_id" style="display: none" value="<?php if(isset($vendor_updated_data_rej_list['0']['Vendor_id'])) { print_r($vendor_updated_data_rej_list['0']['Vendor_id']); }  ?>">
                                                                    <input type="submit" name="submit"  value="Check">
                                                                </form>
                                                            
                                                            </td>
<?php } ?>
                                                    </tr>
                                                    <?php
}
                                                    $cnt++;
                                                }
                                            }
                                        ?>
                                      </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn dark btn-outline" style="border-color: rgb(2, 183, 195);float: left;">Cancel</button>
                                   <!--  <a onClick ="alert("dfgdf");">XLS</a> -->
                                   
                                </div>
                            </div>
                        </div>
                    </div> 
 <div id="vendor_modal31" class="modal fade" tabindex="-1" data-backdrop="del_goal" data-keyboard="false">
                        <div class="modal-dialog" style="width: 77%;">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h4 class="modal-title" id="get_head">Rejected List</h4>
                                </div>
                                <div class="modal-body">
                                    <table class="table" id="tableID9">
                                      <thead>
                                        <th>Customer ID</th>
                                        <th>Customer Name</th>
                                        <th>Marketing Person Name</th>
                                        <th>Sub Marketing Person Name</th>
                                        <th>Rejection Reason</th>
<?php
if($this->session->userdata('purchaser_detail') == '1' || $this->session->userdata('purchaser_detail') == '2')
{
?>
<?php
}
else
{
?>
<th>Check</th>
<?php } ?>
                                      </thead>
                                      <tbody id="cancl_body_part">
                                        <?php                                        
                                            if (isset($vendor_updated_data_rej1) && count($vendor_updated_data_rej1)>0) {
                                                $cnt = 1;
                                                for ($i=0; $i < count($vendor_updated_data_rej1); $i++) {
                                                    if(isset($vendor_updated_data_rej1[$i]['Vendor_id']))
                                                    {
                                                        
$query = 'where Vendor_id = ?';
$vendor_rej_reason = $this->common_model->fetch_data('rejection_data',$query,$vendor_updated_data_rej1[$i]['Vendor_id']);                                                

if($this->session->userdata('purchaser_detail') == '1')
{
    $this->db->select('vendor_id');
$this->db->from('customer_details');
$this->db->where('Vendor_id = "'.$vendor_updated_data_rej1[$i]['Vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$vendor_updated_data_rej_list1 = $this->db->get()->result_array();
}
else if($this->session->userdata('purchaser_detail') == '2')
{
    $this->db->select('vendor_id');
$this->db->from('customer_details');
$this->db->where('Vendor_id = "'.$vendor_updated_data_rej1[$i]['Vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$vendor_updated_data_rej_list1 = $this->db->get()->result_array();
}
else
{
$query = 'where Vendor_id = ?';
            $vendor_updated_data_rej_list1 = $this->common_model->fetch_data('customer_details',$query,$vendor_updated_data_rej1[$i]['Vendor_id']);
}

if(isset($vendor_updated_data_rej_list1['0']) && count($vendor_updated_data_rej_list1['0'])>0)
{
                                                    ?>
                                                    <tr>
                                                        <td><?php if(isset($vendor_updated_data_rej_list1['0']['Vendor_id'])) { print_r($vendor_updated_data_rej_list1['0']['Vendor_id']); }  ?></td>
                                                        <td><?php if(isset($vendor_updated_data_rej_list1['0']['Name'])) { print_r($vendor_updated_data_rej_list1['0']['Name']); }  ?></td>
                                                        <td><?php if(isset($vendor_updated_data_rej_list1['0']['Purchaser_Name'])) { print_r($vendor_updated_data_rej_list1['0']['Purchaser_Name']); }  ?></td>
                                                        <td><?php if(isset($vendor_updated_data_rej_list1['0']['Sub_Purchaser_Name'])) { print_r($vendor_updated_data_rej_list1['0']['Sub_Purchaser_Name']); }  ?></td>
                                                         <td>
                                                            <?php 
                                                            if(isset($vendor_rej_reason['0']['reason']))
                                                            {
                                                                $list = explode('!',$vendor_rej_reason['0']['reason']); 
                                                                $list1 = explode('!',$vendor_rej_reason['0']['rejected_field']); 
                                                                if(count($list)>0)
                                                                {
                                                                    $html="<table class='table'><tr><td>Field</td><td>Reason</td></tr>";
                                                                    for($r=0;$r<count($list);$r++)
                                                                    {
                                                                        $html .= "<tr><td>".$list1[$r]."</td><td>".$list[$r]."</td></tr>";
                                                                        //echo $list[$r];
                                                                    }
                                                                    $html .= "</table>";
                                                                    echo $html;
                                                                }
                                                                else
                                                                {
                                                                    echo $vendor_rej_reason['0']['reason'];
                                                                }
                                                            }
                                                            //print_r($list);die(); if(isset($vendor_rej_reason['0']['reason'])) { $list = exploade('!',$vendor_rej_reason['0']['reason']); print_r($list);die(); }  ?>
                                                        </td>
<?php
if($this->session->userdata('purchaser_detail') == '1' || $this->session->userdata('purchaser_detail') == '2')
{
?>
<?php
}
else
{
?>
<td>
                                                                <form method="post" target="_new" action="http://52.172.210.251/vendor/index.php/Vendordata">
                                                                    <input type="text" name="vendor_id" style="display: none" value="<?php if(isset($vendor_updated_data_rej_list1['0']['Vendor_id'])) { print_r($vendor_updated_data_rej_list1['0']['Vendor_id']); }  ?>">
                                                                    <input type="submit" name="submit"  value="Check">
                                                                </form>
                                                            
                                                            </td>
<?php } ?>
                                                    </tr>
                                                    <?php
}
}
                                                    $cnt++;
                                                }
                                            }
                                        ?>
                                      </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn dark btn-outline" style="border-color: rgb(2, 183, 195);float: left;">Cancel</button>
                                   <!--  <a onClick ="alert("dfgdf");">XLS</a> -->
                                   
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div id="standard_modal1" class="modal fade" tabindex="-1" data-backdrop="del_goal" data-keyboard="false">
                        <div class="modal-dialog" style="width: 45%;">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h4 class="modal-title" id="get_head">List</h4>
                                </div>
                                <div class="modal-body">
                                    <table class="table" id="tableID10">
                                      <thead>
                                        <th>vendor ID</th>
                                        <th>Vendor Name</th>
                                        <th>Purchaser Name</th>
                                        <th>Sub Purchaser Name</th>
                                      </thead>
                                      <tbody id="cancl_body_part">
                                        <?php                                        
                                            if (isset($mail_bounce_data) && count($mail_bounce_data)>0) {
                                                $cnt = 1;
                                                for ($i=0; $i < count($mail_bounce_data); $i++) {
if(count($mail_bounce_data[$i])>0)
{
                                                    ?>
                                                    <tr>
                                                        <td><?php if(isset($mail_bounce_data[$i]['0']['Vendor_id'])) { print_r($mail_bounce_data[$i]['0']['Vendor_id']); }  ?></td>
                                                        <td><?php if(isset($mail_bounce_data[$i]['0']['Name'])) { print_r($mail_bounce_data[$i]['0']['Name']); }  ?></td>
                                                        <td><?php if(isset($mail_bounce_data[$i]['0']['Purchaser_Name'])) { print_r($mail_bounce_data[$i]['0']['Purchaser_Name']); }  ?></td>
                                                        <td><?php if(isset($mail_bounce_data[$i]['0']['Sub_Purchaser_Name'])) { print_r($mail_bounce_data[$i]['0']['Sub_Purchaser_Name']); }  ?></td>
                                                    </tr>
                                                    <?php
}
                                                    $cnt++;
                                                }
                                            }
                                        ?>
                                      </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn dark btn-outline" style="border-color: rgb(2, 183, 195);float: left;">Cancel</button>
                                   <!--  <a onClick ="alert("dfgdf");">XLS</a> -->
                                   
                                </div>
                            </div>
                        </div>
                    </div> 
    <div id="standard_modal_mail2" class="modal fade" tabindex="-1" data-backdrop="del_goal" data-keyboard="false">
                        <div class="modal-dialog" style="width: 45%;">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h4 class="modal-title" id="get_head">List</h4>
                                </div>
                                <div class="modal-body">
                                    <table class="table" id="tableID11">
                                      <thead>
                                        <th>vendor ID</th>
                                        <th>Vendor Name</th>
                                        <th>Purchaser Name</th>
                                        <th>Sub Purchaser Name</th>
                                      </thead>
                                      <tbody id="cancl_body_part">
                                        <?php                                        
                                            if (isset($mail_bounce_data1) && count($mail_bounce_data1)>0) {
                                                $cnt = 1;
                                                for ($i=0; $i < count($mail_bounce_data1); $i++) {
if(count($mail_bounce_data1[$i])>0)
{
                                                    ?>
                                                    <tr>
                                                        <td><?php if(isset($mail_bounce_data1[$i]['0']['Vendor_id'])) { print_r($mail_bounce_data1[$i]['0']['Vendor_id']); }  ?></td>
                                                        <td><?php if(isset($mail_bounce_data1[$i]['0']['Name'])) { print_r($mail_bounce_data1[$i]['0']['Name']); }  ?></td>
                                                        <td><?php if(isset($mail_bounce_data1[$i]['0']['Purchaser_Name'])) { print_r($mail_bounce_data1[$i]['0']['Purchaser_Name']); }  ?></td>
                                                        <td><?php if(isset($mail_bounce_data1[$i]['0']['Sub_Purchaser_Name'])) { print_r($mail_bounce_data1[$i]['0']['Sub_Purchaser_Name']); }  ?></td>
                                                    </tr>
                                                    <?php
}
                                                    $cnt++;
                                                }
                                            }
                                        ?>
                                      </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn dark btn-outline" style="border-color: rgb(2, 183, 195);float: left;">Cancel</button>
                                   <!--  <a onClick ="alert("dfgdf");">XLS</a> -->
                                   
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div id="standard_modal2" class="modal fade" tabindex="-1" data-backdrop="del_goal" data-keyboard="false">
                        <div class="modal-dialog" style="width: 45%;">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h4 class="modal-title" id="get_head">List</h4>
                                </div>
                                <div class="modal-body">
                                    <table class="table" id="tableID12">
                                      <thead>
                                        <th>vendor ID</th>
                                        <th>Vendor Name</th>
                                        <th>Purchaser Name</th>
                                        <th>Sub Purchaser Name</th>
                                      </thead>
                                          <tbody id="cancl_body_part">
                                        <?php                                        
                                            if (isset($mail_recive) && count($mail_recive)>0) {
                                                $cnt = 1;
                                                for ($i=0; $i < count($mail_recive); $i++) {
//print_r($mail_recive);die();
if(isset($mail_recive[$i]['vendor_id']))
{
if($this->session->userdata('purchaser_detail') == '1')
{
    $query = 'where Vendor_id = ? and (Sub_Purchaser_Email_ID = ? or Purchaser_Email_ID)';
$data_check = array(
'Vendor_id' => $mail_recive[$i]['vendor_id'],
'Sub_Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
'Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
);
            $mail_recive_data = $this->common_model->fetch_data('vendor_details',$query,$data_check);
}
else if($this->session->userdata('purchaser_detail') == '2')
{
    $query = 'where Vendor_id = ? and (Sub_Purchaser_Email_ID = ? or Purchaser_Email_ID)';
$data_check = array(
'Vendor_id' => $mail_recive[$i]['vendor_id'],
'Sub_Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
'Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
);
            $mail_recive_data = $this->common_model->fetch_data('vendor_details',$query,$data_check);
}
else
{
$this->db->select('*');
$this->db->from('vendor_details');
$this->db->where('Vendor_id = '.$mail_recive[$i]['vendor_id']);
$mail_recive_data = $this->db->get()->result_array();
//print_r($mail_recive_data);die();
}
}
//print_r($mail_recive_data);die();
if(isset($mail_recive_data['0']))
{
                                                    ?>
                                                    <tr>
                                                        <td><?php if(isset($mail_recive_data['0']['Vendor_id'])) { print_r($mail_recive_data['0']['Vendor_id']); }  ?></td>
                                                        <td><?php if(isset($mail_recive_data['0']['Name'])) { print_r($mail_recive_data['0']['Name']); }  ?></td>
                                                        <td><?php if(isset($mail_recive_data['0']['Purchaser_Name'])) { print_r($mail_recive_data['0']['Purchaser_Name']); }  ?></td>
                                                        <td><?php if(isset($mail_recive_data['0']['Sub_Purchaser_Namee'])) { print_r($mail_recive_data['0']['Sub_Purchaser_Namee']); }  ?></td>
                                                    </tr>
                                                    <?php
                                                    $cnt++;
}
                                                }
                                            }
                                        ?>
                                      </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn dark btn-outline" style="border-color: rgb(2, 183, 195);float: left;">Cancel</button>
                                   <!--  <a onClick ="alert("dfgdf");">XLS</a> -->
                                   
                                </div>
                            </div>
                        </div>
                    </div> 
<div id="standard_modal_mail3" class="modal fade" tabindex="-1" data-backdrop="del_goal" data-keyboard="false">
                        <div class="modal-dialog" style="width: 45%;">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h4 class="modal-title" id="get_head">List</h4>
                                </div>
                                <div class="modal-body">
                                    <table class="table" id="tableID13">
                                      <thead>
                                        <th>vendor ID</th>
                                        <th>Vendor Name</th>
                                        <th>Purchaser Name</th>
                                        <th>Sub Purchaser Name</th>
                                      </thead>
                                      <tbody id="cancl_body_part">
                                        <?php                                        
                                            if (isset($total_recive_data1) && count($total_recive_data1)>0) {
                                                $cnt = 1;
                                                for ($i=0; $i < count($total_recive_data1); $i++) {
if(count($total_recive_data1[$i])>0)
{
                                                    ?>
                                                    <tr>
                                                        <td><?php if(isset($total_recive_data1[$i]['0']['Vendor_id'])) { print_r($total_recive_data1[$i]['0']['Vendor_id']); }  ?></td>
                                                        <td><?php if(isset($total_recive_data1[$i]['0']['Name'])) { print_r($total_recive_data1[$i]['0']['Name']); }  ?></td>
                                                        <td><?php if(isset($total_recive_data1[$i]['0']['Purchaser_Name'])) { print_r($total_recive_data1[$i]['0']['Purchaser_Name']); }  ?></td>
                                                        <td><?php if(isset($total_recive_data1[$i]['0']['Sub_Purchaser_Name'])) { print_r($total_recive_data1[$i]['0']['Sub_Purchaser_Name']); }  ?></td>
                                                    </tr>
                                                    <?php
}
                                                    $cnt++;
                                                }
                                            }
                                        ?>
                                      </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn dark btn-outline" style="border-color: rgb(2, 183, 195);float: left;">Cancel</button>
                                   <!--  <a onClick ="alert("dfgdf");">XLS</a> -->
                                   
                                </div>
                            </div>
                        </div>
                    </div> 
            <!-- END NAVBAR -->
            <!-- MAIN CONTENT -->
            <div class="main-content">
                <div class="container-fluid">
                    <!-- OVERVIEW -->
                    <div class="panel panel-headline" <?php if($this->session->userdata('purchaser_detail') == '4') { ?>style="display:none"<?php } ?>>
                        <div class="panel-heading">
                            <h3 class="panel-title">Mail Related Update for vendor</h3>
                            <p class="panel-subtitle"><?php echo date('d-M-Y'); ?></p>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="metric">
                                        <span class="icon"><i class="fa fa-download get_data" style="cursor: pointer;" title="Email Received" id="email_received"></i></span>
                                        <p>
                                            <span class="number">
<?php 
//print_r($this->session->userdata('purchaser_detail'));die();
$num_sent1 = 0;$num_sent2 = 0;$num_sent3 = 0;$num_sent4 = 0;$num_sent = 0;
if (isset($mail_recive4) && count($mail_recive4)>0) {
                                                for ($i=0; $i < count($mail_recive4); $i++) {

if($this->session->userdata('purchaser_detail') == '1')
{
    $this->db->select('vendor_id');
$this->db->from('vendor_details');
$this->db->where('Vendor_id = "'.$mail_recive4[$i]['vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$mail_recive_data = $this->db->get()->result_array();
if(isset($mail_recive_data) && count($mail_recive_data) > 0 && $mail_recive_data != '')
{
$num_sent1++;
}
//$num_sent1 = count($mail_recive_data);

}
else if($this->session->userdata('purchaser_detail') == '2')
{
    $this->db->select('vendor_id');
$this->db->from('vendor_details');
$this->db->where('Vendor_id = "'.$mail_recive4[$i]['vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$mail_recive_data = $this->db->get()->result_array();
if(isset($mail_recive_data) && count($mail_recive_data) > 0 && $mail_recive_data != '')
{
$num_sent1++;
//print_r($mail_recive_data);
}

}

}
if($this->session->userdata('purchaser_detail') != '2' && $this->session->userdata('purchaser_detail') != '1')
{
$num_sent1 = count($mail_recive4);
}
//die();

}
if (isset($mail_recive3) && count($mail_recive3)>0) {
                                                for ($i=0; $i < count($mail_recive3); $i++) {

if($this->session->userdata('purchaser_detail') == '1')
{
    $query = 'where Vendor_id = ?  and (Sub_Purchaser_Email_ID = ? or Purchaser_Email_ID)';
$data_check = array(
'Vendor_id' => $mail_recive3[$i]['vendor_id'],
'Sub_Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
'Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
);
            $mail_recive_data = $this->common_model->fetch_data('vendor_details',$query,$data_check);
if(isset($mail_recive_data) && count($mail_recive_data) > 0 && $mail_recive_data != '')
{
$num_sent2++;
}
}
else if($this->session->userdata('purchaser_detail') == '2')
{
    $query = 'where Vendor_id = ?  and (Sub_Purchaser_Email_ID = ? or Purchaser_Email_ID)';
$data_check = array(
'Vendor_id' => $mail_recive3[$i]['vendor_id'],
'Sub_Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
'Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
);
            $mail_recive_data = $this->common_model->fetch_data('vendor_details',$query,$data_check);
if(isset($mail_recive_data) && count($mail_recive_data) > 0 && $mail_recive_data != '')
{
$num_sent2++;
}
}
}
//echo $num_sent;
if($this->session->userdata('purchaser_detail') == '0')
{
$num_sent2 = count($mail_recive3);
}
}

if (isset($mail_recive2) && count($mail_recive2)>0) {
                                                for ($i=0; $i < count($mail_recive2); $i++) {

if($this->session->userdata('purchaser_detail') == '1')
{
    $query = 'where Vendor_id = ?  and (Sub_Purchaser_Email_ID = ? or Purchaser_Email_ID)';
$data_check = array(
'Vendor_id' => $mail_recive2[$i]['vendor_id'],
'Sub_Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
'Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
);
            $mail_recive_data = $this->common_model->fetch_data('vendor_details',$query,$data_check);
if(isset($mail_recive_data) && count($mail_recive_data) > 0 && $mail_recive_data != '')
{
$num_sent3++;
}
}
else if($this->session->userdata('purchaser_detail') == '2')
{
    $query = 'where Vendor_id = ?  and (Sub_Purchaser_Email_ID = ? or Purchaser_Email_ID)';
$data_check = array(
'Vendor_id' => $mail_recive2[$i]['vendor_id'],
'Sub_Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
'Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
);
            $mail_recive_data = $this->common_model->fetch_data('vendor_details',$query,$data_check);
if(isset($mail_recive_data) && count($mail_recive_data) > 0 && $mail_recive_data != '')
{
$num_sent3++;
}
}
}
//echo $num_sent;
if($this->session->userdata('purchaser_detail') == '0')
{
$num_sent3 = count($mail_recive2);
}
}

if (isset($mail_recive1) && count($mail_recive1)>0) {
                                                for ($i=0; $i < count($mail_recive1); $i++) {

if($this->session->userdata('purchaser_detail') == '1')
{
    $query = 'where Vendor_id = ? and (Sub_Purchaser_Email_ID = ? or Purchaser_Email_ID)';
$data_check = array(
'Vendor_id' => $mail_recive1[$i]['vendor_id'],
'Sub_Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
'Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
);
            $mail_recive_data = $this->common_model->fetch_data('vendor_details',$query,$data_check);
if(isset($mail_recive_data) && count($mail_recive_data) > 0 && $mail_recive_data != '')
{
$num_sent4++;
}
}
else if($this->session->userdata('purchaser_detail') == '2')
{
    $query = 'where Vendor_id = ? and (Sub_Purchaser_Email_ID = ? or Purchaser_Email_ID)';
$data_check = array(
'Vendor_id' => $mail_recive1[$i]['vendor_id'],
'Sub_Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
'Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
);
            $mail_recive_data = $this->common_model->fetch_data('vendor_details',$query,$data_check);
if(isset($mail_recive_data) && count($mail_recive_data) > 0 && $mail_recive_data != '')
{
$num_sent4++;
}
}
}
//echo $num_sent;
if($this->session->userdata('purchaser_detail') == '0')
{
$num_sent4 = count($mail_recive1);
}
}

echo $num_sent1+$num_sent2+$num_sent3+$num_sent4;

 ?></span>
                                            <span class="title">Email Received</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="metric">
                                        <span class="icon"><i class="fa fa-shopping-bag get_data1"></i></span>
                                        <p>
                                            <span class="number">
<?php 
$num_sent = 0;
//print_r($mail_bounce_data);die();
if (isset($mail_bounce_data) && count($mail_bounce_data)>0) {

for ($i=0; $i < count($mail_bounce_data); $i++) {
if(count($mail_bounce_data[$i])>0)
{
$num_sent++;
}
}
echo $num_sent;
}
else
{
echo '0';
} ?>
</span>
                                            <span class="title">Email Bounced</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="metric">
                                        <span class="icon"><i class="fa fa-eye get_data"></i></span>
                                        <p>
                                            <span class="number">
<?php 
//print_r($this->session->userdata('purchaser_detail'));die();
$num_sent1 = 0;$num_sent2 = 0;$num_sent3 = 0;$num_sent4 = 0;$num_sent = 0;
if (isset($mail_recive4) && count($mail_recive4)>0) {
                                                for ($i=0; $i < count($mail_recive4); $i++) {

if($this->session->userdata('purchaser_detail') == '1')
{
    $query = 'where Vendor_id = ?  and (Sub_Purchaser_Email_ID = ? or Purchaser_Email_ID)';
$data_check = array(
'Vendor_id' => $mail_recive4[$i]['vendor_id'],
'Sub_Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
'Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
);
            $mail_recive_data = $this->common_model->fetch_data('vendor_details',$query,$data_check);
if(isset($mail_recive_data) && count($mail_recive_data) > 0 && $mail_recive_data != '')
{
$num_sent1++;
}
//$num_sent1 = count($mail_recive_data);

}
else if($this->session->userdata('purchaser_detail') == '2')
{
       $this->db->select('vendor_id');
$this->db->from('vendor_details');
$this->db->where('Vendor_id = "'.$mail_recive4[$i]['vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$mail_recive_data = $this->db->get()->result_array();
if(isset($mail_recive_data) && count($mail_recive_data) > 0 && $mail_recive_data != '')
{
$num_sent1++;
//print_r($mail_recive_data);
}

}

}
if($this->session->userdata('purchaser_detail') != '2' && $this->session->userdata('purchaser_detail') != '1')
{
$num_sent1 = count($mail_recive4);
}
//die();

}
if (isset($mail_recive3) && count($mail_recive3)>0) {
                                                for ($i=0; $i < count($mail_recive3); $i++) {

if($this->session->userdata('purchaser_detail') == '1')
{
    $query = 'where Vendor_id = ?  and (Sub_Purchaser_Email_ID = ? or Purchaser_Email_ID)';
$data_check = array(
'Vendor_id' => $mail_recive3[$i]['vendor_id'],
'Sub_Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
'Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
);
            $mail_recive_data = $this->common_model->fetch_data('vendor_details',$query,$data_check);
if(isset($mail_recive_data) && count($mail_recive_data) > 0 && $mail_recive_data != '')
{
$num_sent2++;
}
}
else if($this->session->userdata('purchaser_detail') == '2')
{
    $query = 'where Vendor_id = ?  and (Sub_Purchaser_Email_ID = ? or Purchaser_Email_ID)';
$data_check = array(
'Vendor_id' => $mail_recive3[$i]['vendor_id'],
'Sub_Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
'Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
);
            $mail_recive_data = $this->common_model->fetch_data('vendor_details',$query,$data_check);
if(isset($mail_recive_data) && count($mail_recive_data) > 0 && $mail_recive_data != '')
{
$num_sent2++;
}
}
}
//echo $num_sent;
if($this->session->userdata('purchaser_detail') == '0')
{
$num_sent2 = count($mail_recive3);
}
}

if (isset($mail_recive2) && count($mail_recive2)>0) {
                                                for ($i=0; $i < count($mail_recive2); $i++) {

if($this->session->userdata('purchaser_detail') == '1')
{
    $query = 'where Vendor_id = ?  and (Sub_Purchaser_Email_ID = ? or Purchaser_Email_ID)';
$data_check = array(
'Vendor_id' => $mail_recive2[$i]['vendor_id'],
'Sub_Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
'Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
);
            $mail_recive_data = $this->common_model->fetch_data('vendor_details',$query,$data_check);
if(isset($mail_recive_data) && count($mail_recive_data) > 0 && $mail_recive_data != '')
{
$num_sent3++;
}
}
else if($this->session->userdata('purchaser_detail') == '2')
{
    $query = 'where Vendor_id = ?  and (Sub_Purchaser_Email_ID = ? or Purchaser_Email_ID)';
$data_check = array(
'Vendor_id' => $mail_recive2[$i]['vendor_id'],
'Sub_Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
'Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
);
            $mail_recive_data = $this->common_model->fetch_data('vendor_details',$query,$data_check);
if(isset($mail_recive_data) && count($mail_recive_data) > 0 && $mail_recive_data != '')
{
$num_sent3++;
}
}
}
//echo $num_sent;
if($this->session->userdata('purchaser_detail') == '0')
{
$num_sent3 = count($mail_recive2);
}
}

if (isset($mail_recive1) && count($mail_recive1)>0) {
                                                for ($i=0; $i < count($mail_recive1); $i++) {

if($this->session->userdata('purchaser_detail') == '1')
{
    $query = 'where Vendor_id = ? and (Sub_Purchaser_Email_ID = ? or Purchaser_Email_ID)';
$data_check = array(
'Vendor_id' => $mail_recive1[$i]['vendor_id'],
'Sub_Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
'Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
);
            $mail_recive_data = $this->common_model->fetch_data('vendor_details',$query,$data_check);
if(isset($mail_recive_data) && count($mail_recive_data) > 0 && $mail_recive_data != '')
{
$num_sent4++;
}
}
else if($this->session->userdata('purchaser_detail') == '2')
{
    $query = 'where Vendor_id = ? and (Sub_Purchaser_Email_ID = ? or Purchaser_Email_ID)';
$data_check = array(
'Vendor_id' => $mail_recive1[$i]['vendor_id'],
'Sub_Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
'Purchaser_Email_ID' => $this->session->userdata('vendor_email'),
);
            $mail_recive_data = $this->common_model->fetch_data('vendor_details',$query,$data_check);
if(isset($mail_recive_data) && count($mail_recive_data) > 0 && $mail_recive_data != '')
{
$num_sent4++;
}
}
}
//echo $num_sent;
if($this->session->userdata('purchaser_detail') == '0')
{
$num_sent4 = count($mail_recive1);
}
}

echo $num_sent1+$num_sent2+$num_sent3+$num_sent4;

 ?>
</span>
                                            <span class="title">Email Sent</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- END OVERVIEW -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- RECENT PURCHASES -->
                            <div class="panel"  <?php if($this->session->userdata('purchaser_detail1') == '4') { ?>style="display:none"<?php } ?>>
                                <div class="panel-heading">
                                    <h3 class="panel-title">Mail Related Update for customer</h3>
                                    <div class="right">
                                        <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                        <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                                    </div>
                                </div>
                                <div class="panel-body no-padding">
                                            <div class="row">
                                <div class="col-md-3">
                                    <div class="metric">
                                        <span class="icon"><i class="fa fa-download get_data_vendor_mail1" style="cursor: pointer;" title="Email Received" id="email_received"></i></span>
                                        <p>
                                            <span class="number"><?php 
                                           // print_r($this->session->userdata('purchaser_detail'));die();
if(isset($custom_mail_receive)) 
{ 
$val = 0;
for ($i=0; $i < count($custom_mail_receive); $i++) {
if($this->session->userdata('purchaser_detail1') == '1')
{
    $this->db->select('vendor_id');
$this->db->from('customer_details');
$this->db->where('Vendor_id = "'.$custom_mail_receive[$i]['vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$mail_recive_data1 = $this->db->get()->result_array();
if(count($mail_recive_data1)>0)
{
$val++;
}
}
else if($this->session->userdata('purchaser_detail1') == '2')
{
    $this->db->select('vendor_id');
$this->db->from('customer_details');
$this->db->where('Vendor_id = "'.$custom_mail_receive[$i]['vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$mail_recive_data1 = $this->db->get()->result_array();
if(count($mail_recive_data1)>0)
{
$val++;
}
}
else
{
$this->db->select('*');
$this->db->from('customer_details');
$this->db->where('Vendor_id = "'.$custom_mail_receive[$i]['vendor_id'].'"');
$mail_recive_data1 = $this->db->get()->result_array();
if(count($mail_recive_data1)>0)
{
$val++;
}
//print_r($mail_recive_data);die();
}
}
echo $val;
}
else
{
echo 0;
} ?></span>
                                            <span class="title">Email Received</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="metric">
                                        <span class="icon"><i class="fa fa-shopping-bag get_data_vendor_mail2"></i></span>
                                        <p>
                                            <span class="number"><?php 
if(isset($vendor_updated_data_rej_list1)) 
{ 
$num_sent = 0;
//print_r($mail_recive_data);die();
for($i=0;$i<count($vendor_updated_data_rej_list1);$i++)
{
if(count($vendor_updated_data_rej_list1[$i]) > 0)
{
$num_sent++;
//print_r(count($vendor_updated_data_rej_list));
}
}
echo '0'; 
}
else
{
echo 0;
} ?></span>
                                            <span class="title">Email Bounced</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="metric">
                                        <span class="icon"><i class="fa fa-eye get_data_vendor_mail1"></i></span>
                                        <p>
                                            <span class="number">
<?php 
if(isset($custom_mail_receive)) 
{ 
$val = 0;
for ($i=0; $i < count($custom_mail_receive); $i++) {
if($this->session->userdata('purchaser_detail1') == '1')
{
        $this->db->select('vendor_id');
$this->db->from('customer_details');
$this->db->where('Vendor_id = "'.$custom_mail_receive[$i]['vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$mail_recive_data1 = $this->db->get()->result_array();
if(count($mail_recive_data1)>0)
{
$val++;
}
}
else if($this->session->userdata('purchaser_detail1') == '2')
{
       $this->db->select('vendor_id');
$this->db->from('customer_details');
$this->db->where('Vendor_id = "'.$custom_mail_receive[$i]['vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$mail_recive_data1 = $this->db->get()->result_array();
if(count($mail_recive_data1)>0)
{
$val++;
}
}
else
{
$this->db->select('*');
$this->db->from('customer_details');
$this->db->where('Vendor_id = "'.$custom_mail_receive[$i]['vendor_id'].'"');
$mail_recive_data1 = $this->db->get()->result_array();
if(count($mail_recive_data1)>0)
{
$val++;
}
//print_r($mail_recive_data);die();
}
}
echo $val;
}
else
{
echo 0;
} ?>
</span>
                                            <span class="title">Email Sent
</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                                </div>
                                
                            </div>
                            <!-- END RECENT PURCHASES -->
        <div class="col-md-12">
                            <!-- RECENT PURCHASES -->
                            <div class="panel" <?php if($this->session->userdata('purchaser_detail') == '4') { ?>style="display:none"<?php } ?>>
                                <div class="panel-heading">
                                    <h3 class="panel-title">Vendor Updates</h3>
                                    <div class="right">
                                        <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                        <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                                    </div>
                                </div>
                                <div class="panel-body no-padding">
                                            <div class="row">
                                <div class="col-md-3">
                                    <div class="metric">
                                        <span class="icon"><i class="fa fa-download get_data_vendor" style="cursor: pointer;" title="Email Received" id="email_received"></i></span>
                                        <p>
                                            <span class="number"><?php 
if(isset($vendor_updated_data_aprv)) 
{ 
$val = 0;
                                                for ($i=0; $i < count($vendor_updated_data_aprv); $i++) {

if($this->session->userdata('purchaser_detail') == '1')
{
       $this->db->select('vendor_id');
$this->db->from('vendor_details');
$this->db->where('Vendor_id = "'.$vendor_updated_data_aprv[$i]['Vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$vendor_updated_data_aprv_list = $this->db->get()->result_array();
if(count($vendor_updated_data_aprv_list)>0)
{
$val++;
}
}
else if($this->session->userdata('purchaser_detail') == '2')
{
       $this->db->select('vendor_id');
$this->db->from('vendor_details');
$this->db->where('Vendor_id = "'.$vendor_updated_data_aprv[$i]['Vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$vendor_updated_data_aprv_list = $this->db->get()->result_array();
if(count($vendor_updated_data_aprv_list)>0)
{
$val++;
}
}
else
{
$query = 'where Vendor_id = ?';
            $vendor_updated_data_aprv_list = $this->common_model->fetch_data('vendor_details',$query,$vendor_updated_data_aprv[$i]['Vendor_id']);
if(count($vendor_updated_data_aprv_list)>0)
{
$val++;
}
}
}
echo $val;
}
else
{
echo 0;
} ?></span>
                                            <span class="title">Vendor Details Verified</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="metric">
                                        <span class="icon"><i class="fa fa-shopping-bag get_data_vendor3"></i></span>
                                        <p>
                                            <span class="number"><?php 
if(isset($vendor_updated_data_rej)) 
{ 
$val = 0;
for ($i=0; $i < count($vendor_updated_data_rej); $i++) {
if($this->session->userdata('purchaser_detail') == '1')
{
       $this->db->select('vendor_id');
$this->db->from('vendor_details');
$this->db->where('Vendor_id = "'.$vendor_updated_data_rej[$i]['Vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$vendor_updated_data_rej_list = $this->db->get()->result_array();
if(count($vendor_updated_data_rej_list)>0)
{
$val++;
}
}
else if($this->session->userdata('purchaser_detail') == '2')
{
       $this->db->select('vendor_id');
$this->db->from('vendor_details');
$this->db->where('Vendor_id = "'.$vendor_updated_data_rej[$i]['Vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$vendor_updated_data_rej_list = $this->db->get()->result_array();
if(count($vendor_updated_data_rej_list)>0)
{
$val++;
}
}
else
{
$query = 'where Vendor_id = ?';
            $vendor_updated_data_rej_list = $this->common_model->fetch_data('vendor_details',$query,$vendor_updated_data_rej[$i]['Vendor_id']);
if(count($vendor_updated_data_rej_list)>0)
{
$val++;
}
}
}
echo $val;
}
else
{
echo 0;
} ?></span>
                                            <span class="title">Vendor Details rejected</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="metric">
                                        <span class="icon"><i class="fa fa-eye get_data_vendor_pending11"></i></span>
                                        <p>
                                            <span class="number">                                 
                                        <?php  
                                      $pending_customer1 = $vendor_pending_data;
                                            if (isset($vendor_pending_data) && count($vendor_pending_data)>0) {
                                                $val = 0;
                                               
                                                for($i=0;$i<count($vendor_pending_data);$i++) {

if($this->session->userdata('purchaser_detail') == '1')
{
       $this->db->select('vendor_id');
$this->db->from('vendor_details');
$this->db->where('Vendor_id = "'.$vendor_pending_data[$i]['Vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$customer_pending_data_get = $this->db->get()->result_array();
}
else if($this->session->userdata('purchaser_detail') == '2')
{
       $this->db->select('vendor_id');
$this->db->from('vendor_details');
$this->db->where('Vendor_id = "'.$vendor_pending_data[$i]['Vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$customer_pending_data_get = $this->db->get()->result_array();
}
else
{
    if(isset($vendor_pending_data[$i]['Vendor_id']) && $vendor_pending_data[$i]['Vendor_id'] != '')
    {
     $query = 'where Vendor_id = ?';
            $customer_pending_data_get = $this->common_model->fetch_data('vendor_details',$query,$vendor_pending_data[$i]['Vendor_id']);
    }

}
if(count($customer_pending_data_get)>0)
{
                                                    $val++;
                                                    
}
}
echo $val;
                                                   
                                                }
                                                else
                                                {
                                                    echo 0;
                                                }
                                               

                                        ?>
</span>
                                            <span class="title">Pending</span>
                                        </p>
                                    </div>
                                </div>
<div class="col-md-3">
                                    <div class="metric">
                                        <span class="icon"><i class="fa fa-eye get_data_vendor1"></i></span>
                                        <p>
                                            <span class="number"><?php 
if(isset($vendor_updated_data)) 
{ 
$val = 0;
for ($i=0; $i < count($vendor_updated_data); $i++) {
if($this->session->userdata('purchaser_detail') == '1')
{
       $this->db->select('vendor_id');
$this->db->from('vendor_details');
$this->db->where('Vendor_id = "'.$vendor_updated_data[$i]['Vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$vendor_updated_data_list = $this->db->get()->result_array();
if(count($vendor_updated_data_list)>0)
{
$val++;
}
}
else if($this->session->userdata('purchaser_detail') == '2')
{
       $this->db->select('vendor_id');
$this->db->from('vendor_details');
$this->db->where('Vendor_id = "'.$vendor_updated_data[$i]['Vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$vendor_updated_data_list = $this->db->get()->result_array();
if(count($vendor_updated_data_list)>0)
{
$val++;
}
}
else
{
$query = 'where Vendor_id = ?';
            $vendor_updated_data_list = $this->common_model->fetch_data('vendor_details',$query,$vendor_updated_data[$i]['Vendor_id']);
if(count($vendor_updated_data_list)>0)
{
$val++;
}
}
}
echo $val;
}
else
{
echo 0;
} ?></span>
                                            <span class="title">Vendors Updated Details</span>
                                        </p>
                                    </div>
                                </div>
<div class="col-md-3">
                                    <div class="metric">
                                        <span class="icon"><i class="fa fa-eye get_data_vendor_11"></i></span>
                                        <p>
                                            <span class="number">
<?php 
//print_r($this->session->userdata('purchaser_detail'));die();
$num_sent1 = 0;$num_sent2 = 0;$num_sent3 = 0;$num_sent4 = 0;$num_sent = 0;
if (isset($mail_recive41) && count($mail_recive41)>0) {
                                                for ($i=0; $i < count($mail_recive41); $i++) {

if($this->session->userdata('purchaser_detail') == '1')
{
          $this->db->select('vendor_id');
$this->db->from('vendor_details');
$this->db->where('Vendor_id = "'.$mail_recive41[$i]['vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$mail_recive_data = $this->db->get()->result_array();
if(isset($mail_recive_data['0']) && $mail_recive_data['0'] != '')
{
  $num_sent1++;  
}
}
else if($this->session->userdata('purchaser_detail') == '2')
{
       $this->db->select('vendor_id');
$this->db->from('vendor_details');
$this->db->where('Vendor_id = "'.$mail_recive41[$i]['vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$mail_recive_data = $this->db->get()->result_array();
if(isset($mail_recive_data['0']) && $mail_recive_data['0'] != '')
{
  $num_sent1++;  
}
}
}

if($this->session->userdata('purchaser_detail') == '0')
{
$num_sent1 = count($mail_recive41);
}
}

echo  $num_sent1;

 ?>
</span>
                                            <span class="title">Vendors Reminder Details</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                                </div>
                                
                            </div>
                            <!-- END RECENT PURCHASES -->
    <!-- END OVERVIEW -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- RECENT PURCHASES -->
                            <div class="panel" <?php if($this->session->userdata('purchaser_detail1') == '4') { ?>style="display:none"<?php } ?>>
                                <div class="panel-heading">
                                    <h3 class="panel-title">Customer Updates</h3>
                                    <div class="right">
                                        <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                        <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                                    </div>
                                </div>
                                <div class="panel-body no-padding">
                                            <div class="row">
                                <div class="col-md-3">
                                    <div class="metric">
                                        <span class="icon"><i class="fa fa-download get_data_vendor_1" style="cursor: pointer;" title="Email Received" id="email_received"></i></span>
                                        <p>
                                            <span class="number"><?php 
if(isset($vendor_updated_data_aprv1)) 
{ 
$val = 0;
for ($i=0; $i < count($vendor_updated_data_aprv1); $i++) {
if($this->session->userdata('purchaser_detail1') == '1')
{
$this->db->select('vendor_id');
$this->db->from('customer_details');
$this->db->where('Vendor_id = "'.$vendor_updated_data_aprv1[$i]['Vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$vendor_updated_data_aprv_list1 = $this->db->get()->result_array();
if(count($vendor_updated_data_aprv_list1)>0)
{
$val++;
}
}
else if($this->session->userdata('purchaser_detail1') == '2')
{
$this->db->select('vendor_id');
$this->db->from('customer_details');
$this->db->where('Vendor_id = "'.$vendor_updated_data_aprv1[$i]['Vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$vendor_updated_data_aprv_list1 = $this->db->get()->result_array();
if(count($vendor_updated_data_aprv_list1)>0)
{
$val++;
}
}
else
{
$query = 'where Vendor_id = ?';
            $vendor_updated_data_aprv_list1 = $this->common_model->fetch_data('customer_details',$query,$vendor_updated_data_aprv1[$i]['Vendor_id']);
if(count($vendor_updated_data_aprv_list1)>0)
{
$val++;
}
}
}
echo $val;
}
else
{
echo 0;
} ?></span>
                                            <span class="title">Customer Details Verified</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="metric">
                                        <span class="icon"><i class="fa fa-shopping-bag get_data_vendor31"></i></span>
                                        <p>
                                            <span class="number"><?php 
if(isset($vendor_updated_data_rej1)) 
{
$val = 0;
for ($i=0; $i < count($vendor_updated_data_rej1); $i++) {
if($this->session->userdata('purchaser_detail1') == '1')
{
 $this->db->select('vendor_id');
$this->db->from('customer_details');
$this->db->where('Vendor_id = "'.$vendor_updated_data_rej1[$i]['Vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$vendor_updated_data_rej_list1 = $this->db->get()->result_array();
if(count($vendor_updated_data_rej_list1)>0)
{
$val++;
}
}
else if($this->session->userdata('purchaser_detail1') == '2')
{
 $this->db->select('vendor_id');
$this->db->from('customer_details');
$this->db->where('Vendor_id = "'.$vendor_updated_data_rej1[$i]['Vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$vendor_updated_data_rej_list1 = $this->db->get()->result_array();
if(count($vendor_updated_data_rej_list1)>0)
{
$val++;
}
}
else
{
$query = 'where Vendor_id = ?';
            $vendor_updated_data_rej_list1 = $this->common_model->fetch_data('customer_details',$query,$vendor_updated_data_rej1[$i]['Vendor_id']);
if(count($vendor_updated_data_rej_list1)>0)
{
$val++;
}

}
}
echo $val;
}
else
{
echo 0;
} ?></span>
                                            <span class="title">Customer Details rejected</span>
                                        </p>
                                    </div>
                                </div>
<div class="col-md-3">
                                    <div class="metric">
                                        <span class="icon"><i class="fa fa-eye get_data_vendor_pending1"></i></span>
                                        <p>
                                            <span class="number"><?php 
//print_r(count($customer_pending_data));die();
if(isset($customer_pending_data)) 
{ 
$val = 0;
for ($i=0; $i < count($customer_pending_data); $i++) {
if($this->session->userdata('purchaser_detail1') == '1')
{
$this->db->select('vendor_id');
$this->db->from('customer_details');
$this->db->where('Vendor_id = "'.$customer_pending_data[$i]['Vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$vendor_updated_data_list = $this->db->get()->result_array();
if(count($vendor_updated_data_list)>0)
{
$val++;
}
}
else if($this->session->userdata('purchaser_detail1') == '2')
{
$this->db->select('vendor_id');
$this->db->from('customer_details');
$this->db->where('Vendor_id = "'.$customer_pending_data[$i]['Vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$vendor_updated_data_list = $this->db->get()->result_array();
if(count($vendor_updated_data_list)>0)
{
$val++;
}
}
else
{
$query = 'where Vendor_id = ?';
            $vendor_updated_data_list = $this->common_model->fetch_data('vendor_details',$query,$vendor_updated_data[$i]['Vendor_id']);
if(count($vendor_updated_data_list)>0)
{
$val++;
}
}
}
echo $val;
}
else
{
echo 0;
} ?></span>
                                            <span class="title">Pending</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="metric">
                                        <span class="icon"><i class="fa fa-eye get_data_vendor11"></i></span>
                                        <p>
                                            <span class="number"><?php 
if(isset($vendor_updated_data1)) 
{ 
$val = 0;
for ($i=0; $i < count($vendor_updated_data1); $i++) {

if($this->session->userdata('purchaser_detail1') == '1')
{
    $this->db->select('vendor_id');
$this->db->from('customer_details');
$this->db->where('Vendor_id = "'.$vendor_updated_data1[$i]['Vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$vendor_updated_data_list1 = $this->db->get()->result_array();
if(count($vendor_updated_data_list1)>0)
{
$val++;
}

}
else if($this->session->userdata('purchaser_detail1') == '2')
{
    $this->db->select('vendor_id');
$this->db->from('customer_details');
$this->db->where('Vendor_id = "'.$vendor_updated_data1[$i]['Vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$vendor_updated_data_list1 = $this->db->get()->result_array();
if(count($vendor_updated_data_list1)>0)
{
$val++;
}

}
else
{
$query = 'where Vendor_id = ?';
            $vendor_updated_data_list1 = $this->common_model->fetch_data('customer_details',$query,$vendor_updated_data1[$i]['Vendor_id']);
if(count($vendor_updated_data_list1)>0)
{
$val++;
}
}
}
echo $val;
}
else
{
echo 0;
} ?></span>
                                            <span class="title">Customer Updated Details</span>
                                        </p>
                                    </div>
                                </div>
                                                                                    <div class="col-md-3">
                                    <div class="metric">
                                        <span class="icon"><i class="fa fa-eye get_data_vendor111"></i></span>
                                        <p>
                                            <span class="number">
<?php 
if(isset($custom_mail_receive1)) 
{ 
$val = 0;
for ($i=0; $i < count($custom_mail_receive1); $i++) {
if($this->session->userdata('purchaser_detail1') == '1')
{
$this->db->select('vendor_id');
$this->db->from('customer_details');
$this->db->where('Vendor_id = "'.$custom_mail_receive1[$i]['vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$mail_recive_data1 = $this->db->get()->result_array();
if(count($mail_recive_data1)>0)
{
$val++;
}
}
else if($this->session->userdata('purchaser_detail1') == '2')
{
$this->db->select('vendor_id');
$this->db->from('customer_details');
$this->db->where('Vendor_id = "'.$custom_mail_receive1[$i]['vendor_id'].'" and (Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'" or Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")');
$mail_recive_data1 = $this->db->get()->result_array();
if(count($mail_recive_data1)>0)
{
$val++;
}
}
else
{
$this->db->select('*');
$this->db->from('customer_details');
$this->db->where('Vendor_id = "'.$custom_mail_receive1[$i]['vendor_id'].'"');
$mail_recive_data1 = $this->db->get()->result_array();
if(count($mail_recive_data1)>0)
{
$val++;
}
//print_r($mail_recive_data);die();
}
}
echo $val;
}
else
{
echo 0;
} ?>
</span>
                                            <span class="title">Customer Reminder Details</span>
                                        </p>
                                    </div>
                                </div> 
                            </div>
                                </div>
                                
                            </div>
                            <!-- END RECENT PURCHASES -->
                        </div>
                
                    </div>
            </div>              
            </div>
            </div>
            <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
            <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
                
            <script type="text/javascript">
            var j = jQuery.noConflict();
                j(function(){
                    j("body").on('click','.get_data',function(){
                            j("#get_head").text(j(this).attr('title'));
                         j("#standard_modal").modal('show');
                    });
j("body").on('click','.get_data_vendor_mail1',function(){
                            j("#get_head").text(j(this).attr('title'));
                         j("#standard_modal_mail1").modal('show');
                    });
                    j("body").on('click','.get_data1',function(){
                            j("#get_head").text(j(this).attr('title'));
                         j("#standard_modal1").modal('show');
                    });
j("body").on('click','.get_data_vendor_mail2',function(){
                            j("#get_head").text(j(this).attr('title'));
                         j("#standard_modal_mail2").modal('show');
                    });
                    j("body").on('click','.get_data2',function(){
                            j("#get_head").text(j(this).attr('title'));
                         j("#standard_modal2").modal('show');
                    });
j("body").on('click','.get_data_vendor_mail3',function(){
                            j("#get_head").text(j(this).attr('title'));
                         j("#standard_modal_mail3").modal('show');
                    });
j("body").on('click','.get_data_vendor_pending1',function(){
                            j("#get_head").text(j(this).attr('title'));
                         j("#customer_modal_pend1").modal('show');
                    });
j("body").on('click','.get_data_vendor_pending11',function(){
                            j("#get_head").text(j(this).attr('title'));
                         j("#vendor_modal_pend1").modal('show');
                    });
                    j("body").on('click','.get_data_vendor',function(){
                            j("#get_head").text(j(this).attr('title'));
                         j("#vendor_modal1").modal('show');
                    });
j("body").on('click','.get_data_vendor_1',function(){
                            j("#get_head").text(j(this).attr('title'));
                         j("#vendor_modal11").modal('show');
                    });
                    j("body").on('click','.get_data_vendor1',function(){
                            j("#get_head").text(j(this).attr('title'));
                         j("#vendor_modal2").modal('show');
                    });
j("body").on('click','.get_data_vendor11',function(){
                            j("#get_head").text(j(this).attr('title'));
                         j("#vendor_modal21").modal('show');
                    });
j("body").on('click','.get_data_vendor_11',function(){
                            j("#get_head").text(j(this).attr('title'));
                         j("#vendor_modal211").modal('show');
});
j("body").on('click','.get_data_vendor111',function(){
                            j("#get_head").text(j(this).attr('title'));
                         j("#vendor_modal2111").modal('show');
                    });
                    j("body").on('click','.get_data_vendor3',function(){
                            j("#get_head").text(j(this).attr('title'));
                         j("#vendor_modal3").modal('show');
                    });
j("body").on('click','.get_data_vendor31',function(){
                            j("#get_head").text(j(this).attr('title'));
                         j("#vendor_modal31").modal('show');
                    });
                    j("#del_goal_set").click(function(){alert("hjhkj");
                        $('#tableID').tableExport({type:'pdf',escape:'false'});
                    });
                    var base_url = window.location.origin;
                    j("body").on('click','#logout',function(){
                        j.ajax({
                          'type' : 'post',                        
                          'url' : base_url+'/vendor/index.php/Admindashboard/logout',
                          success : function(data)
                          {
                            //alert("dfgdf");
                             window.location.href = base_url+'/vendor/index.php/Adminlogin';
                          }
                      });
                    });
                });
            </script>
            <script type="text/javascript">
                // $(function(){
                  
                // });
            </script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css">
<script type='text/javascript' src='https://code.jquery.com/jquery-1.12.4.js'></script>
<script type='text/javascript' src='https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js'></script>
<script type='text/javascript' src='https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js'></script>
<script type='text/javascript' src='https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js'></script>
<script type='text/javascript' src='https://cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js'></script>
<script type='text/javascript' src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/pdfmake.min.js'></script>
<script type='text/javascript' src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/vfs_fonts.js'></script>
<script type='text/javascript' src='https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js'></script>
<script type='text/javascript' src='https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js'></script>
<script>
$(document).ready(function() {
    $('#tableID').DataTable();
$('#tableID7').DataTable({
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                title: 'Customer Updated List'
            },
            {
                extend: 'pdfHtml5',
                title: 'Customer Updated List'
            }
        ]
    });
$('#tableID711').DataTable({
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                title: 'Customer Updated List'
            },
            {
                extend: 'pdfHtml5',
                title: 'Customer Updated List'
            }
        ]
    });
$('#tableID1').DataTable({
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                title: 'Email Received List'
            },
            {
                extend: 'pdfHtml5',
                title: 'Email Received List'
            }
        ]
    });
$('#tableID111').DataTable({
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                title: 'Email Received by vendor list'
            },
            {
                extend: 'pdfHtml5',
                title: 'Email Received by vendor list'
            }
        ]
    });
$('#tableID71').DataTable({
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                title: 'Reminder list for vendor'
            },
            {
                extend: 'pdfHtml5',
                title: 'Reminder list for vendor'
            }
        ]
    });
$('#tableID12').DataTable({
        dom: 'Bfrtip',
        buttons: [
             'excel', 'pdf', 'print'
        ]
    });
$('#tableID3').DataTable({
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                title: 'Admin pending List for customer'
            },
            {
                extend: 'pdfHtml5',
                title: 'Admin pending List for customer'
            }
        ]
    });
$('#tableID4').DataTable({
        dom: 'Bfrtip',
         buttons: [
            {
                extend: 'excelHtml5',
                title: 'Admin pending List for vendor'
            },
            {
                extend: 'pdfHtml5',
                title: 'Admin pending List for vendor'
            }
        ]
    });
$('#tableID5').DataTable({
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                title: 'Customer Approved List'
            },
            {
                extend: 'pdfHtml5',
                title: 'Customer Approved List'
            }
        ]
    });
$('#tableID2').DataTable({
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                title: 'Vendor Approved List'
            },
            {
                extend: 'pdfHtml5',
                title: 'Vendor Approved List'
            }
        ]
    });
$('#tableID6').DataTable({
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                title: 'vendor Updated List'
            },
            {
                extend: 'pdfHtml5',
                title: 'vendor Updated List'
            }
        ]
    });

$('#tableID8').DataTable({
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                title: 'Vendor Rejected List'
            },
            {
                extend: 'pdfHtml5',
                title: 'Vendor Rejected List'
            }
        ]
    });
$('#tableID9').DataTable({
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                title: 'Customer Rejected List'
            },
            {
                extend: 'pdfHtml5',
                title: 'Customer Rejected List'
            }
        ]
    });
$('#tableID10').DataTable({
        dom: 'Bfrtip',
        buttons: [
             'excel', 'pdf', 'print'
        ]
    });


} );
</script>

            <!-- END MAIN CONTENT