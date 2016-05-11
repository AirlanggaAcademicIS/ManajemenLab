<body>
            <nav class="navbar navbar-dark bg-inverse navbar-full" id="nav-main">
        <img class="navbar-brand" src="<?php echo base_url();?>assets/template/images/logomanivlab.png">
        <ul class="nav navbar-nav">
        
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>gb">Home </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url();?>inventaris">Inventaris <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>managelab">Management Lab</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>penjadwalan">Scheduling</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>history">History</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>admin">E-Ticketing</a>
            </li>
        </ul>

    </nav>

  <div class="content">
    <div id="wrapper">
  <div class="left"> </div>
    <div class="right">
      <blockquote>
        <p class="pad"><br />
          </p>
      </blockquote>
      <form id="form1" name="form1" method="post" action="">
        <blockquote>
          <blockquote>
            <blockquote>
<div id="content"></div>
              <p class="style2"> <strong> SELAMAT DATANG, SELAMAT BEKERJA</strong></p>
              <blockquote>
                <p class="pad">Sistem ini memberikan kemudahan bagi petugas laboratorium komputer untuk memasukkan data barang. Dengan bahasa yang mudah dipahami, sistem ini sangat efektif dan efisien bagi petugas laboratorium komputer tanpa terbatas oleh tempat dan waktu. </p>
              </blockquote>
<blockquote>&nbsp;</blockquote>
            </blockquote>
          </blockquote>
        </blockquote>
        <table width="707" height="89" border="0">
            <tr>
              <th colspan="3" scope="row"><p>&nbsp;</p>
              <p>INPUT DATA BARANG NON-KOMPUTER </p></th>
            </tr>
            <tr>
              <th scope="row">&nbsp;</th>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <th width="142" scope="row">&nbsp;</th>
              <td width="287">&nbsp;</td>
              <td width="264"><input name="nama" type="text" id="nama" value="">                <input type="submit" name="search" id="search" value="Search" /></td>
            </tr>
            <tr>
              <th scope="row">&nbsp;</th>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <th align="left" scope="row">ID Barang</th>
              <td><input name="idBarang" type="text" disabled id="idBarang" value="IDI001"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <th align="left" scope="row">Jenis Barang</th>
              <td><select name="jenisBarang" id="jenisBarang">
                <option value="Bulpoin">Bulpoin</option>
                <option value="Spidol">Spidol</option>
                <option value="Tinta">Tinta</option>
                <option value="Stipo">Stipo</option>
                  </select></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <th align="left" scope="row">Merk</th>
              <td><input name="merk" type="text" id="merk" value=""></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <th align="left" scope="row">Jumlah</th>
              <td><input name="jumlah" type="text" id="jumlah" value=""></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <th align="left" scope="row">Deskripsi</th>
              <td colspan="2"><textarea name="deskripsi" id="deskripsi" cols="45" rows="5"></textarea></td>
            </tr>
            <tr>
              <th scope="row">&nbsp;</th>
              <td>  <input type="submit" name="insert" id="insert" value="Insert" /></td>
              <td>&nbsp;</td>
            </tr>
          </table>
        <p>&nbsp;</p>
        <table width="704" height="40" border="1" id="tampilan">
          <tr>
            <th align="center" bgcolor="#999999" scope="row"><strong>ID Barang</strong></th>
            <td align="center" bgcolor="#999999"><strong>Jenis Barang</strong></td>
            <td align="center" bgcolor="#999999"><strong>Merk</strong></td>
            <td align="center" bgcolor="#999999"><strong>Jumlah</strong></td>
            <td align="center" bgcolor="#999999"><strong>Deskripsi</strong></td>
            </tr>
          <tr>
            <th align="center" scope="row">&nbsp;</th>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            </tr>
          <tr>
            <th align="center" scope="row">&nbsp;</th>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            </tr>
          <tr>
            <th align="center" scope="row">&nbsp;</th>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            </tr>
          <tr>
            <th align="center" scope="row">&nbsp;</th>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            </tr>
          <tr>
            <th align="center" scope="row">&nbsp;</th>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            </tr>
          </table>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
          
          
        </form>
      <p class="pad"><br />
      </p>
  </div>
  </div>
  </div>
</body>