<?php     if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
	-------------------------------------------
	 Classe permettant d'afficher le nombre de
	 connectés d'un site sans base de données.
	------------------------------------------
<!--Compteur visite de Luc@s http://www.phpcs.com/  -->
<img src='visites.png' alt='<? echo "page vue $vu fois"; ?>'/>

------------ -*/

if (!class_exists('Counter')) {

	class Counter   extends MY_Controller
	{
		public $dir_counter;
		public $file;
		public $idle;
		public $userIp;
		public $cache_file;
		public $cache_time;
		public $cache_filename;
		public $visites;
		/*	$count : Gardera en mémoire le nombre de connectés.	*/
		public $count = false;
		/*   $visited permettra de compter une seule fois un visiteur */
		public $visited ;
		// Constructeur
		public function __construct($dir_counter = FCPATH.'assets/counter/' , $idle = 300, $cache_time = 60, $cache_filename = 'cache.txt')
		{
			$this->dir_counter = $this->_CreateDir($dir_counter);
			
			$this->dir_visites = $this->_CreateDir($dir_counter .'visites/');
					
			$this->idle = $idle;
			
			$this->userIp = $this->getIp();

			$this->file = $this->dir_counter . md5($this->userIp);
			
			$this->cache_filename = $cache_filename;
			
			$this->cache_file = $this->dir_counter . $cache_filename;
			
			$this->cache_time = $cache_time;
		}
		
		/*
		
		CreateDir : créer un répertoire s il n existe pas
		
		*/
		
		function _CreateDir($dir)
		{	
		
		$dir = substr($dir, -1) == '/' ? $dir : $dir . '/';
			
			if (!is_dir($dir))
			{
				mkdir($dir);
			}
			return $dir;
		}
		
		/*
		
		update : Met à jour le fichier de l'utilisateur courant
		
		*/
		
		function update()
		{

			if (!@file_exists($this->file) || !@touch($this->file))
			{
				$ip=fopen($this->file, 'w');
							fputs($ip,"1");
							
							
			}
				   
		}


		/*
		
		visites : Met à jour le fichier du nombre de visites de l'utilisateur courant
		
		*/
		
		function visites()
		{
			
			$visites = $this->dir_visites . 'visites.txt';
			if (file_exists($visites))
			{
				$vu = file_get_contents($visites);
			}

			else
			{
				$vu = 0;
			}

			//ecriture du nombre de visites dans un fichier txt

					//nbre de fois que l'user charge une page
					$visited = file_exists($this->file) ? file_get_contents($this->file) : 0;

					if($visited<=1){ //si ce nomre est inferieur a 1 alors on n'a pas encore compté cet user comme visiteur,sinon on l'a deja fait

						$vu = intval($vu) + 1;

					 }
					 $visited++;
					 file_put_contents($this->file, $visited, LOCK_EX);

					$testvisit=$this->read($this->file);

					if(($testvisit==1)){
						 $vu = $vu + 1;
					}	 
					$this->write($this->file,$vu, "w");
		  
					//fseek($visites, 0);
					file_put_contents($visites, $vu, LOCK_EX);

			$image = imagecreate(200,25);
			//changer le couleur du fond (R,V,B)
			$couleur= imagecolorallocate($image, 255, 0, 50);
			//changer la couleur du texte (R,V,B)
			$couleurtexte= imagecolorallocate($image, 255, 255, 255);
			imagestring($image, 4, 35, 4, ($vu ? ' visitor' . ($vu > 1 ?'s ':'') : ''). $vu, $couleurtexte);
			imagepng($image, $this->dir_visites . "visites.png"); 
			return  $vu;
		}
		
		/*
		
		garbage : Nettoie le dossier - Suppréssion des fichiers obsolètes
		
		*/
		
		function garbage()
		{
			$timeCacheVerif = time() - $this->cache_time;
			
			if ($h = opendir($this->dir_counter))
			{
				while (false !== ($f = readdir($h)))
				{
					if ($f != '.' && $f != '..' && $f != $this->cache_filename)
					{
						$cfp = $this->dir_counter . '/' . $f;
						
						if (@filemtime($cfp) < $timeVerif)
						{
							@unlink($cfp);
						}
					}
				}
			}
		}
		
		/*
		
		view : Affiche le nombre de connectés au site
		
		*/
		
		function view($text = true)
		{
			if ($this->count !== false)
			{		
				$nb = $this->count;
			}
			else
			{			
				$nb = $this->count();
			}
			
			return $nb ;
		}

		/*
		
		getIp : Renvoie l'adresse IP de l'utilisateur
		
		*/
		
		function getIp()
		{
			if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
			{ 
				$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			} 
			elseif (isset($_SERVER['HTTP_CLIENT_IP']))
			{
				$ip = $_SERVER['HTTP_CLIENT_IP'];
			} 
			else
			{
				$ip = $_SERVER['REMOTE_ADDR'];
			}
			
			return $ip;
		}

		/*
		
		count : Retourne le nombre de connectés
		
		*/
		
		function count()
		{
			//clearstatcache();
			
			$ok = false;
			
			$timeCacheVerif = time() - $this->cache_time;
			
			if (file_exists($this->cache_file) && @filemtime($this->cache_file) > $timeCacheVerif)
			{
				$content = $this->read($this->cache_file);
		
				$key = substr($content, 0, 32);
				
				$i = substr($content, 32);

				if ($key == md5($i))
				{				
					$ok = true;
				}
			}
			
			if (!$ok)
			{
				if (!is_dir($this->dir_counter)) return false;
		
				$timeVerif = time() - $this->idle;
							$timeVisit = time() + 1800;
				$i = 0;
		
				if ($h = opendir($this->dir_counter))
				{
								
					while (false !== ($f = readdir($h)))
					{
						if ($f != '.' && $f != '..' && $f != $this->cache_filename)
						{
							$cfp = $this->dir_counter.$f;
													
							$time=@filemtime($cfp);
							if ($time > $timeVerif)
							{
								$i++;
														   // $this->visites();
															
														  
							}
							else
							{
								@unlink($cfp);
							}
						}
											
					}
				}
				
				$this->write($this->cache_file, md5($i) . $i, 'w');
			}
							
			$this->count = $i;

			return $this->count;
		}
		
		/*
		
		write : Ecrit dans un fichier
		
		*/
		
		function write($file, $content, $mode = 'a')
		{
			$fp = fopen($file, $mode);
					
			if ($fp)
			{
				@flock($fp, LOCK_EX);
				
				@fwrite($fp, $content, strlen($content));
							
				@flock($fp, LOCK_UN);
				
				@fclose($fp);
				
				return true;
			}
			
			return false;
		}
		
		/*
		
		read : Lit dans un fichier
		
		*/
		
		function read($file)
		{		
			if (!@file_exists($file)) return false;
			
			$fp = @fopen($file, 'r');

			if ($fp)
			{
				@flock($fp, LOCK_SH);
				
				$content = @fread($fp, @filesize($file));
				
				@flock($fp, LOCK_UN);
				
				@fclose($fp);

				return $content;
			}
			
			return false;
		}

	}
}
