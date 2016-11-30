<?php
session_start();

			$event['paper']=$_POST['paper']==1?1:0;
			$event['poster']=$_POST['poster']==1?1:0;
			$event['kode']=$_POST['kode']==1?1:0;
			$event['testurwits']=$_POST['testurwits']==1?1:0;
			$event['app']=$_POST['app']==1?1:0;
			$event['project']=$_POST['project']==1?1:0;
			$event['quiz']=$_POST['quiz']==1?1:0;
			$event['startup']=$_POST['startup']==1?1:0;
			$event['ad']=$_POST['ad']==1?1:0;
			$event['movie']=$_POST['movie']==1?1:0;
			$event['treasure']=$_POST['treasure']==1?1:0;
			$event['picacam']=$_POST['picacam']==1?1:0;
			$event['workshop']=$_POST['workshop']==1?1:0;
			
			$sql = 'update entry set paper='.$event['paper'].',poster='.$event['poster'].',kode='.$event['kode'].',testurwits='.$event['testurwits'].',app='.$event['app'].',project='.$event['project'].',quiz='.$event['quiz'].',startup='.$event['startup'].',ad='.$event['ad'].',movie='.$event['movie'].',treasure='.$event['treasure'].',picacam='.$event['picacam'].',workshop='.$event['workshop'].' where pin="'.$_SESSION['pin'].'"';
			echo $sql;
			
			if($db->query($sql))
			{
				if($event['ad']==1)
				{
					$sql = 'INSERT INTO `ad` (`id`, `pin`) VALUES (NULL, "'.$_SESSION['pin'].'");';
					$db->query($sql);
				}
				if($event['paper']==1)
				{
					$sql = 'INSERT INTO `paper` (`id`, `pin`) VALUES (NULL, "'.$_SESSION['pin'].'");';
					$db->query($sql);
				}
				if($event['kode']==1)
				{
					$sql = 'INSERT INTO `kode` (`id`, `pin`) VALUES (NULL, "'.$_SESSION['pin'].'");';
					$db->query($sql);
				}
				if($event['testurwits']==1)
				{
					$sql = 'INSERT INTO `testurwits` (`id`, `pin`) VALUES (NULL, "'.$_SESSION['pin'].'");';
					$db->query($sql);
				}
				if($event['app']==1)
				{
					$sql = 'INSERT INTO `app` (`id`, `pin`) VALUES (NULL, "'.$_SESSION['pin'].'");';
					$db->query($sql);
				}
				if($event['quiz']==1)
				{
					$sql = 'INSERT INTO `quiz` (`id`, `pin`) VALUES (NULL, "'.$_SESSION['pin'].'");';
					$db->query($sql);
				}
				if($event['poster']==1)
				{
					$sql = 'INSERT INTO `poster` (`id`, `pin`) VALUES (NULL, "'.$_SESSION['pin'].'");';
					$db->query($sql);
				}
				if($event['startup']==1)
				{
					$sql = 'INSERT INTO `startup` (`id`, `pin`) VALUES (NULL, "'.$_SESSION['pin'].'");';
					$db->query($sql);
				}
				if($event['movie']==1)
				{
					$sql = 'INSERT INTO `movie` (`id`, `pin`) VALUES (NULL, "'.$_SESSION['pin'].'");';
					$db->query($sql);
				}
				if($event['treasure']==1)
				{
					$sql = 'INSERT INTO `treasure` (`id`, `pin`) VALUES (NULL, "'.$_SESSION['pin'].'");';
					$db->query($sql);
				}
				if($event['picacam']==1)
				{
					$sql = 'INSERT INTO `picacam` (`id`, `pin`) VALUES (NULL, "'.$_SESSION['pin'].'");';
					$db->query($sql);
				}
				if($event['workshop']==1)
				{
					$sql = 'INSERT INTO `workshop` (`id`, `pin`) VALUES (NULL, "'.$_SESSION['pin'].'");';
					$db->query($sql);
				}
				if($event['project']==1)
				{
					$sql = 'INSERT INTO `project` (`id`, `pin`) VALUES (NULL, "'.$_SESSION['pin'].'");';
					$db->query($sql);
				}
				echo "Success";
				echo '<script>window.location.href="mypage.php";</script>';
			}
			else{
				echo '<script>console.log("'.$db->error.'")</script>';
				echo $db->error;
			}

?>