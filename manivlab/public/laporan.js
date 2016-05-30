
  var baseUrl = $("#baseurl").text();
/* $('#example').DataTable();
$('#tabel_identifikasi_keluhan').DataTable();
$('#tabel_item_masuk').DataTable();
$('#tabel_item_keluar').DataTable();  
*/
$("#CariRekap").click(function(){

		
        var kategori = $('select[name="selectKategori"]').attr('selected','selected').val();
        
        
        var start_date = $("#tanggal").val();
        var end_date = $("#end_date").val();
        console.log("masuk switch");
        $.ajax({
            url:baseUrl+"getLaporanItemByTgl",
            dataType:"json",
            type:"POST",
            data:{"start_date":start_date,"end_date":end_date,"kategori":kategori}
        }).done(function(data){
        //     console.log(data.item_masuk);
            var count = 1;
            var count1 = 1;
			
		$("#example1").empty();
		$("#tabel_identifikasi_keluhan1").empty();
		$("#tbody_item_masuk1").empty();
		$("#tbody_item_keluar2").empty();
		$("#tabel_item_masuk_nonkomputer2").empty();
		
		 $.each(data.item_pppk, function( index, value ){

            $("#example1").append(""+
                "<tr>"+
                    "<td class='center' value="+value.id+">"+count+"</td>"+
					"<td class='center'>"+value.no+"</td>"+
                    "<td class='center'>"+value.dari+"</td>"+
                    "<td class='center'>"+value.tanggal+"</td>"+
                    "<td class='center'>"+value.labkom+"</td>"+
                    "<td class='center'>"+value.kepada+"</td>"+
					"<td class='center'>"+value.alasan+"</td>"+
                  "</tr>)"
            );
			
			
            count++; 
			
		 });
		 
		 $.each(data.iden, function( index, value ){

            $("#tabel_identifikasi_keluhan1").append(""+
                "<tr>"+
                    "<td class='center' value="+value.id+">"+count+"</td>"+
					"<td class='center'>"+value.no+"</td>"+
                    "<td class='center'>"+value.dari+"</td>"+
                    "<td class='center'>"+value.tanggal_iden+"</td>"+
                    "<td class='center'>"+value.identifikasi+"</td>"+
                   
                  "</tr>)"
            );
			
			
            count++;
		 
		   });
		 
		 $.each(data.komputer, function( index, value ){

            $("#tbody_item_masuk1").append(""+
                "<tr>"+
                    "<td class='center' value="+value.id+">"+count+"</td>"+
                    "<td class='center'>"+value.nama_barangkomp+"</td>"+
                    "<td class='center'>"+value.merk_processor+"</td>"+
                    "<td class='center'>"+value.tanggal_transaksikomp+"</td>"+
                   
                  "</tr>)"
            );
			 count++; 
			 
		 });
		 
		 $.each(data.manajemen, function( index, value ){

            $("#tbody_item_keluar2").append(""+
                "<tr>"+
                    "<td class='center' value="+value.id+">"+count+"</td>"+
					"<td class='center'>"+value.kode_barang+"</td>"+ //direname jadi kode_barang pindah. tapi di db nya masih kode_barang
					"<td class='center'>"+value.nama_barang+"</td>"+
                    "<td class='center'>"+value.lokasibarang_awal+"</td>"+
                    "<td class='center'>"+value.lokasibarang_akhir+"</td>"+
                    "<td class='center'>"+value.tanggal_transaksi+"</td>"+
                   
                  "</tr>)"
            );
			 count++; 
			 
		 });
		 
		 $.each(data.nonkomp, function( index, value ){

            $("#tabel_item_masuk_nonkomputer2").append(""+
                "<tr>"+
                    "<td class='center' value="+value.id+">"+count+"</td>"+
                    "<td class='center'>"+value.id_nonkomp+"</td>"+
                    "<td class='center'>"+value.merk_nonkomp+"</td>"+
					"<td class='center'>"+value.Jenis_nonkomp+"</td>"+
					"<td class='center'>"+value.jumlah_nonkomp+"</td>"+
                    "<td class='center'>"+value.tanggal_transaksi+"</td>"+
                   
                  "</tr>)"
            );
			 count++; 
			 
		 });
			if(kategori=="keluhan") {
			$(".table-laporan1").show();
			$(".table-laporan2").hide();
			$(".table-laporan3").hide();
			$(".table-laporan4").hide();
			$(".table-laporan5").hide();
			}
			
			else if(kategori=="identifikasi_keluhan"){
			$(".table-laporan2").show();
			$(".table-laporan1").hide();
			$(".table-laporan3").hide();
			$(".table-laporan4").hide();
			$(".table-laporan5").hide();
			}
			
			else if (kategori=="item_masuk"){
			$(".table-laporan3").show();
			$(".table-laporan1").hide();
			$(".table-laporan2").hide();
			$(".table-laporan4").hide();
			$(".table-laporan5").hide();
			
			}
			else if(kategori=="item_keluar"){
			$(".table-laporan2").hide();
			$(".table-laporan1").hide();
			$(".table-laporan3").hide();
			$(".table-laporan4").show();
			$(".table-laporan5").hide();
			}
			
			else if(kategori=="item_masuk_nonkomputer"){
			$(".table-laporan2").hide();
			$(".table-laporan1").hide();
			$(".table-laporan3").hide();
			$(".table-laporan4").hide();
			$(".table-laporan5").show();
			};
		
		});

		});
		
 
/*});*/
  // End of Delete Surat
