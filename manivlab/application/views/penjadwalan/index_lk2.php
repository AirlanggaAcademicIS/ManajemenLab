<body>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/css/calendarstyle.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/colorbox.css"/>
	<script type="text/javascript" src="<?php echo base_url();?>public/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>public/js/jquery.colorbox-min.js"></script>
    
    
 <nav class="navbar navbar-dark bg-inverse navbar-full" id="nav-main">
        <img class="navbar-brand" src="<?php echo base_url();?>public/images/logomanivlab.png">
        <ul class="nav navbar-nav">
        
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>/home">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>/inventaris">Inventaris</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>/managelab">Management Lab</a>
            </li>
            <li class="nav-item active dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Penjadwalan</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?php echo base_url();?>/penjadwalan">Labkom 1</a>
                    <a class="dropdown-item" href="<?php echo base_url();?>/penjadwalan_lk2">Labkom 2</a>
                    <a class="dropdown-item" href="<?php echo base_url();?>/penjadwalan_lk3">Labkom 3</a>
                    <a class="dropdown-item" href="<?php echo base_url();?>/penjadwalan_lk4">Labkom 4</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>/history">History</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>/eticketing">E-Ticketing</a>
            </li>
        </ul>
    </nav>
    <br><br>
        <h1><center><strong> Jadwal Penggunaan Laboratorium Komputer <?php echo "$idlabkom";?> </strong></center></h1>
        <br><br>
    <div class="index" id="evencal">
		<div class="calendar" id="calendar">
			<?php echo $notes?>
		</div>
		<div class="event_detail" id="event_detail">
			<h3 class="s_date">Kegiatan pada <?php echo "$day $month $year";?></h3>
			<div class="detail_event">
				<?php 
					if(isset($events)){
						$i = 1;
						foreach($events as $e){
						 if($i % 2 == 0){
								echo '<div class="info1">
                                <h4>'.$e['time'].'-'.$e['time1'].'<img src="'.base_url().'public/images/calendar/delete.png" class="delete" alt="" title="delete this event" day="'.$day.'" val="'.$e['id'].'" /></h4>
                                <p>Kegiatan: '.$e['event'].'</p>
                                <p>PJMA: '.$e['pjma'].'</p>
                                </div>';
							}else{
								echo '<div class="info2">
                                <h4>'.$e['time'].'-'.$e['time1'].'<img src="'.base_url().'public/images/calendar/delete.png" class="delete" alt="" title="delete this event" day="'.$day.'" val="'.$e['id'].'" /></h4>
                                <p>Kegiatan: '.$e['event'].'</p>
                                <p>PJMA: '.$e['pjma'].'</p>
                                </div>';
							} 
							$i++;
						}
					}else{
						echo '<div class="message"><h4>No Event</h4><p>There\'s no event in this date</p></div>';
					}
				?>
                
				<input type="button" name="add" value="Add Event" val="<?php echo $day;?>" class="add_event"/>
                
                
			</div>
		</div>
	</div>
	<script>
		$(".detail").live('click',function(){
			$(".s_date").html("Kegiatan pada "+$(this).attr('val')+" <?php echo "$month $year";?>");
			var day = $(this).attr('val');
			var add = '<input type="button" name="add" value="Add Event" val="'+day+'" class="add_event"/>';
			$.ajax({
				type: 'post',
				dataType: 'json',
				url: "<?php echo site_url("penjadwalan_lk2/detail_event");?>",
				data:{<?php echo "year: $year, mon: $mon";?>, day: day},
				success: function( data ) {
					var html = '';
					if(data.status){
						var i = 1;
						$.each(data.data, function(index, value) {
						    if(i % 2 == 0){
								html = html+'<div class="info1"><h4>'+value.time+'-'+value.time1+'<img src="<?php echo base_url();?>public/images/calendar/delete.png" class="delete" alt="" title="delete this event" day="'+day+'" val="'+value.id+'" /></h4><p>Kegiatan: '+value.event+'</p><p>PJMA: '+value.pjma+'</p></div>';
							}else{
								html = html+'<div class="info2"><h4>'+value.time+'-'+value.time1+'<img src="<?php echo base_url();?>public/images/calendar/delete.png" class="delete" alt="" title="delete this event" day="'+day+'" val="'+value.id+'" /></h4><p>Kegiatan: '+value.event+'</p><p>PJMA: '+value.pjma+'</p></div>';
							} 
							i++;
						});
					}else{
						html = '<div class="message"><h4>'+data.title_msg+'</h4><p>'+data.msg+'</p></div>';
					}
					html = html+add;
					$( ".detail_event" ).fadeOut("fast").fadeIn("fast").html(html);
				} 
			});
		});
		$(".delete").live("click", function() {
			if(confirm('Are you sure delete this event ?')){
				var deleted = $(this).parent().parent();
				var day =  $(this).attr('day');
				var add = '<input type="button" name="add" value="Add Event" val="'+day+'" class="add_event"/>';
				$.ajax({
					type: 'POST',
					dataType: 'json',
					url: "<?php echo site_url("penjadwalan/delete_event");?>",
					data:{<?php echo "year: $year, mon: $mon";?>, day: day,del: $(this).attr('val')},
					success: function(data) {
						if(data.status){
							if(data.row > 0){
								$('.d'+day).html(data.row);
							}else{
								$('.d'+day).html('');
								$( ".detail_event" ).fadeOut("fast").fadeIn("fast").html('<div class="message"><h4>'+data.title_msg+'</h4><p>'+data.msg+'</p></div>'+add);
							}
							deleted.remove();
                            window.location.reload();
						}else{
							alert('an error for deleting event');
						}
					}
				});
			}
		});
		$(".add_event").live('click', function(){
			$.colorbox({ 
					overlayClose: false,
					href: '<?php echo site_url('penjadwalan/add_event');?>',
					data:{year:<?php echo $year;?>,mon:<?php echo $mon;?>, day: $(this).attr('val')}
			});
		});
</script>
</body>
<br><br><br>
<footer id="footer-main">
    <div class="container">
            <div class="row">
                <div class="col-sm-3 col-lg-9">
                    <h5><b>Manajemen dan Invetaris Laboratorium</b></h5>
                    <h8><b> Coded by </b>
                  <br>Efrandi Arjadana - Aisyah Shofiyyah - Emilia Fitria - Reza Pramudhika - Ayu Rosalina - M. Reza Pahlevi - Alia Firdauzy</h8>
                </div>
                <div class="col-sm-3">
                    <ul class="list-unstyled">
                        <li><a href="<?php echo base_url();?>/home">Home</a></li>
                        <li><a href="<?php echo base_url();?>/inventaris">Inventaris</a></li>
                        <li><a href="<?php echo base_url();?>/managelab">Management Lab</a></li>
                        <li><a href="<?php echo base_url();?>/penjadwalan">Scheduling</a></li>
                        <li><a href="<?php echo base_url();?>/history">History</a></li>
                        <li><a href="<?php echo base_url();?>/eticketing">E-Ticketing</a></li>
                    </ul>
                </div>
</div>
        </div>
    </footer>

