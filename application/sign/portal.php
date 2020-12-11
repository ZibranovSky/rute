<?php 

// ----------------------------------------------LOGIC APP----------------------------------------------------

class app
{
	public $koneksi;
	public function login($data1, $data2)
	{
		if (isset($_POST['login'])) {

			$username = $_POST[$data1];
			$password = md5($_POST[$data2]);

			// proses login
			$select = mysqli_query($this->koneksi, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
			$row = mysqli_num_rows($select);
			$r = mysqli_fetch_array($select);

			if ($row>0) {
				session_start();
				$_SESSION['userspp'] = $r['username'];
				header("location: ?m=page1&s=page1");
			}else{
				echo '<script>alert("gagal login")</script>';
			}
		}
	}

}

$process = new app();





// Connection
$process->koneksi = mysqli_connect('localhost', 'root', '', 'spp_zibran');
 ?>