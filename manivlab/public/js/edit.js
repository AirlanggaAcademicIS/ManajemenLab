$(document).ready(function(){
    console.log("test");
  $(".edit").click(function(){
    console.log(this.value);
      $.ajax({
          url:"http://localhost/manivlab/inventaris/getdatanonkomp",
          dataType:"json",
          type:"post",
          data:{"id":this.value}
      }).done(function(data){
          console.log(data);
          $.each(data,function(index,value){
              $("#namabarang").val(value.nama_nonkomp);
         $("#tanggal_transaksi").val(value.tanggal_transaksi);
         $("#jenisbarang").val(value.Jenis_nonkomp);
         $("#merkbarang").val(value.merk_nonkomp);
         $("#jumlahbarang").val(value.jumlah_nonkomp);
         $("#lokasibarang").val(value.lokasi_nonkomp);
         $("#keterangan").val(value.keterangan_nonkomp);
         $("#updatedata").attr("data-id",value.id_nonkomp);
          });
         
      });
    });
    
    $("#updatedata").click(function(){
         var nama_barang = $("#namabarang").val();
         var tanggal_transaksi = $("#tanggal_transaksi").val();
         var jenis_barang = $("#jenisbarang").val();
         var merk_barang = $("#merkbarang").val();
         var jumlah_barang = $("#jumlahbarang").val();
         var lokasi_barang = $("#lokasibarang").val();
         var keterangan = $("#keterangan").val();
         var id = $("#updatedata").attr("data-id");
         console.log(id);
        if(nama_barang !="" && tanggal_transaksi!="",jenis_barang!="",merk_barang!="",jumlah_barang!="",lokasi_barang!="",keterangan!=""){
            $.ajax({
                url:"http://localhost/manivlab/inventaris/updatenonkomp",
                dataType:"json",
                type:"POST",
                data:{"id":id,"namabarang":nama_barang,"tanggal_transaksi":tanggal_transaksi,"jenisbarang":jenis_barang,"merkbarang":merk_barang,"jumlahbarang":jumlah_barang,"lokasibarang":lokasi_barang,"keteranganbarang":keterangan}
            }).done(function(data){
                if(data){
                    console.log("berhasil");
                    location.reload();
                }
                else{
                    console.log('gagal');
                    location.reload();
                }
            });
        }
        
    });
})