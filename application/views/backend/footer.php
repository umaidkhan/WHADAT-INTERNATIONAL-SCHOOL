<!-- Footer -->
<footer class="main">
	&copy; 2018 <strong> <?php echo $this->db->get_where('settings' , array('type'=>'system_name'))->row()->description; ?> | Version 5.5</strong>
    Developed by
	<a href="MUK."
    	target="_blank">*MUHAMMAD UMAID KHAN*</a>
</footer>
