$(document).ready(function(){
	$("#tbl_komputer").dataTable();
  $(".detail_barang").click(function(){
    var id = $(this).attr('data-id');
      $.ajax({
          url:"http://localhost/manivlab/komputer/getDataKompById",
          dataType:"json",
          type:"post",
          data:{"id":id}
      }).done(function(data){
          $.each(data,function(index,value){
              $("#iddetile").html(value.id);
         $("#kodedetile").html(value.kode_barangkomp);
         $("#namadetile").html(value.nama_barangkomp);
         $("#lokasidetile").html(value.lokasi_komp);
         $("#merkdetile").html(value.merk_processor);
         $("#kecepatandetile").html(value.kecepatan_processor);
         $("#socketdetile").html(value.socket_processor);
		 $("#modelmotherboarddetile").html(value.modelmotherboard_komp);
		 $("#northbridgedetile").html(value.northbridge_komp);
		 $("#southbridgedetile").html(value.southbridge_komp);
		 $("#tiperamdetile").html(value.tiperam_komp);
		 $("#kapasitasramdetile").html(value.kapasitas_komp);
		 $("#pcramdetile").html(value.pc_komp);
		 $("#macaddressdetile").html(value.macaddress_komp);
		 $("#tahundetile").html(value.tahunbeli_komp);
		 $("#transaksidetile").html(value.tanggal_transaksikomp);
         
		  });
         
      });
    });
    
   
});