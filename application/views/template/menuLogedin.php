<div class="header">
<a href='<?php echo base_url()."main/logout"  ?>'  style=" float:right; text-decoration:none; margin-right:40px; margin-top: 15px; color:#FFFFFF; font-weight:bold;">Logout</a>
<a href="http://localhost/code/index.php/user/registration" style=" float:right; text-decoration:none; margin-right:40px; margin-top: 15px; color:#FFFFFF; font-weight:bold;">Project toevoegen </a>
<p  style=" float:left; text-decoration:none; margin-left:40px; margin-top: 15px; color:#FFFFFF; font-weight:bold;";>U bent ingelogd als  <?php echo $this->session->userdata('username'); ?> </p>
</div>

<style>
    body{
        width:100%;
        background-color: red;
    }
    
    .header{
        width:100%;
        height: 50px;
        margin-left:0px;
        background: #990000;
        text-decoration:none;
    }
</style>