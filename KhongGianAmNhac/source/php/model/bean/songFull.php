<?php 

	class SongFull{
		private $idSong;
		private $nameSong;
		private $emailSinger;
		private $emailComposer;
		private $releaseTime;
		private $srcSong;
		private $nameSinger;
		private $nameComposer;

		public function __construct($idSong, $nameSong, $emailSinger, $emailComposer, $releaseTime, $srcSong,  $nameSinger, $nameComposer){
			$this->idSong = $idSong;
			$this->nameSong = $nameSong;
			$this->emailSinger = $emailSinger;
			$this->emailComposer = $emailComposer;
			$this->releaseTime = $releaseTime;
			$this->srcSong = $srcSong;
			$this->nameSinger = $nameSinger;
			$this->nameComposer = $nameComposer;
		}

		public function getIdSong(){
			return $this->idSong;
		}

		public function getNameSong(){
			return $this->nameSong;
		}

		public function getEmailSinger(){
			return $this->emailSinger;
		}

		public function getEmailComposer(){
			return $this->emailComposer;
		}

		public function gerReleaseTime(){
			return $this->releaseTime;
		}

		public function getSrcSong(){
			return $this->srcSong;
		}

		public function getNameSinger(){
			return $this->nameSinger;
		}

		public function getNameComposer(){
			return $this->nameComposer;
		}
	}
 ?>