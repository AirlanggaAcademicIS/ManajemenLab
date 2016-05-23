// JavaScript Document
$.ajax({
	    url: "http://localhost/manivlab/Managelab/getKomputer",
	    dataType: 'json',
	    type: 'POST'	        
	}).done(function(data){
		 console.log(data);
		$.each( data, function( index, value ){
			console.log(value.kode_barang);
			$("#kode_barang").append("<option>"+value.kode_barang+"</option>")
			
		});
		 /* $("#NamaBarang").attr("data-source","["+source+"]");		*/  
	});
	
	 $("#kode_barang").on("change",function(){
      // $("#NamaBarang").attr("data-source","");
      var kode_barang = $('select[name="kode_barang"]').attr('selected','selected').val();
      // console.log(source);
      $.ajax({
        url: "http://localhost/manivlab/Managelab/getKomputerByKodeBarang",
	    dataType: 'json',
	    type: 'POST',
        data:{"kode_barang":kode_barang}
      }).done(function(data){
        var source = [];
        $.each( data, function( index, value ){
          console.log(value.nama_barang);
		  $("#nama_barang").val(value.nama_barang);
		  $("#lokasibarang_awal").val(value.lokasi_komp);
        });      
      });
    });
