<?php 
	$h = '<select name="hour" id="hour">';
	$m = '<select name="minute" id="minute">';
    $l = '<select name="idlabkom" id="idlabkom">';
	for($i = 0; $i< 60; $i++){
		if($i < 24){
			$h .= '<option value="'.(($i > 9)? $i : "0$i").'">'.(($i > 9)? $i : "0$i").'</option>';
		}
		$m .= '<option value="'.(($i > 9)? $i : "0$i").'">'.(($i > 9)? $i : "0$i").'</option>';
	}
    for($j = 1; $j< 5; $j++){
		if($j < 24){
			$l .= '<option value="'.(($j <5)? $j : "0$j").'">'.(($j <5)? $j : "0$j").'</option>';
		}
    }
	$h .= '</select>';
	$m .= '</select>';
    
	$h1 = '<select name="hour1" id="hour1">';
	$m1 = '<select name="minute1" id="minute1">';
	for($i = 0; $i< 60; $i++){
		if($i < 24){
			$h1 .= '<option value="'.(($i > 9)? $i : "0$i").'">'.(($i > 9)? $i : "0$i").'</option>';
		}
		$m1 .= '<option value="'.(($i > 9)? $i : "0$i").'">'.(($i > 9)? $i : "0$i").'</option>';
	}
	$h1 .= '</select>';
	$m1 .= '</select>';
?>
<div style="width:650px; height:220px; overflow:auto; color:#000000; margin-bottom:20px;" align="center">
	<h4><center><strong>Membuat kegiatan untuk tanggal <?php echo "$day $month $year"?></strong></center></h4>
	<div class="spacer"></div>
	<table>
        <tr><td>Labkom <span class="require">*</span></td><td>:</td><td><?php echo "$l&nbsp;";?>&nbsp;<select name="idlabkom" id="idlabkom"></select></td></tr>
		<tr><td>Mulai Pukul<span class="require">*</span></td><td>:</td><td><?php echo "$h&nbsp;:&nbsp;$m";?>&nbsp;:&nbsp;<select name="second" disabled><option value="00">00</option></select></td></tr>
        <tr><td>Sampai Pukul<span class="require">*</span></td><td>:</td><td><?php echo "$h1&nbsp;:&nbsp;$m1";?>&nbsp;:&nbsp;<select name="second" disabled><option value="00">00</option></select></td></tr>
		<tr><td>Event <span class="require">*</span></td><td>:</td><td><input type="text" name="event" id="event" maxlength="50" size="50" /></td></tr>
        <tr><td>PJMA <span class="require">*</span></td><td>:</td><td><input type="text" name="pjma" id="pjma" maxlength="50" size="50" /></td></tr>
		<tr><td colspan="2"></td><td><input type="button" name="cancel" value="Cancel" class="cancel">&nbsp;&nbsp;
									 <input type="button" name="save" value="Save" class="save"></td></tr>
	</table>
	<script>	
	$('.cancel').click(function(){
		var data = false;
		$.fn.colorbox.close(data);
	});
	
	$('.save').click(function(){
        if($('#hour1').val() < $('#hour').val()){
           alert ('Sampai Pukul tidak boleh lebih kecil dari Mulai Pukul');
           }else
		if($('#event').val().length > 0){
			$.ajax({
				type: 'POST',
				dataType: 'json',
				url: "<?php echo site_url("penjadwalan/do_add");?>",
				data:{<?php echo "year:$year,mon:$mon,day:$day";?>, hour:$('#hour').val(), minute: $('#minute').val(),hour1:$('#hour1').val(), minute1: $('#minute1').val(), event:$('#event').val(), pjma:$('#pjma').val(),idlabkom:$('#idlabkom').val()},
				success: function(data) {
					if(data.status){
						//$.fn.colorbox.close(data);
                        window.location.reload();
					//	window.location = '<?php echo base_url("penjadwalan")?>';
					}else{
						$('.spacer').html(data.message);
					}
				}
			});
		}else{
			$('.spacer').html('Please complete the field')
			$('#event').attr('class','error_require');
		}
	});
	</script>
</div>