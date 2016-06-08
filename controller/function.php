<?php
 function get_port_data(){
  include 'connection.php';
  $sql="select * from t_portofolio";
  $query=mysqli_query($con,$sql);
  while($data=mysqli_fetch_array($query)){
    echo "
      <div class='portfolio-grid about-grid'>
        <a href='$data[foto]' title='name' rel='title2'>
            <div class='view view-first'>
                          <img src='$data[foto]' class='img-responsive' alt=''/>
                          <div class='mask'>
                            <div class='info'><img src='../view/images/hover-icon.png' alt=''/></div>
                            <h3>$data[main]</h3>
                            <p>'$data[desk]'</p>
                      </div>
                        </a> </div>
                </div>
    ";
  }


}

function get_time($data){
		$waktu = strtotime($data);
		$tanggal = date("j",$waktu);
		switch(date("n",$waktu)) {
			case 1: $bulan = "Januari"; break;
			case 2: $bulan = "Februari"; break;
			case 3: $bulan = "Maret"; break;
			case 4: $bulan = "April"; break;
			case 5: $bulan = "Mei"; break;
			case 6: $bulan = "Juni"; break;
			case 7: $bulan = "Juli"; break;
			case 8: $bulan = "Agustus"; break;
			case 9: $bulan = "September"; break;
			case 10: $bulan = "Oktober"; break;
			case 11: $bulan = "November"; break;
			case 12: $bulan = "Desember"; break;
		}
    $tahun = date("Y",$waktu);
  		return "$tanggal $bulan $tahun";}
    function get_blog_data(){
  include 'connection.php';
  $sql="select * from t_blog";
  $query=mysqli_query($con,$sql);
  while($data=mysqli_fetch_array($query)){
    echo "
    <div class='blog-artical'>
      <div class='blog-artical-pic'>
        <a href='../model/main.php?p=blog_page&id=$data[id_blog]'><img src='$data[foto]' title='name' /></a>
      </div>
      <div class='blog-artical-info'>
        <h3><a href='../model/main.php?p=blog_page&id=$data[id_blog]'>$data[main]</a></h3>
        <span>$data[author] | <a href='../model/main.php?p=blog_page&id=$data[id_blog]'>".get_time($data['waktu'])."</a></span>
        <p>$data[desk]</p>
        <a class='more-btn' href='../model/main.php?p=blog_page&id=$data[id_blog]'>See More</a>
        <div class='clearfix'> </div>
      </div>
    </div>
    ";
  }
}


?>
