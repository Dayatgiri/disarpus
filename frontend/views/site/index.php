<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\bootstrap\Carousel;
use inliscore\adminlte\widgets\InfoBox;

?>
<main>
<div id="carouselExampleDark" class=" carousel carousel-dark slide mt-4" data-bs-ride="carousel">
	<div class="carousel-indicators">
		<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
		<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
	</div>
	<div class="carousel-inner">
		<div class="carousel-item active" data-bs-interval="100">
		<img src="uploaded_files/foto_rujukan/panyaweuyan.jpg" class="d-block w-100" alt="..."/>
			<div class="carousel-caption d-none d-md-block">
				
				<h1 class="text-light " style="font-size:50px;">PESONA PANYAWEUYAN</h1>
				<p class="text-light" style="font-size:20px;" >Menikmati Keindahan alam Majalengka tak lengkap tanpa mampir ke Panyaweuyan</p>
			</div>
		</div>
		<div class="carousel-item" data-bs-interval="200">
			<img src="uploaded_files/foto_rujukan/210820013348cDFqTwnukj.jpg" class="d-block w-100" alt="...">
			<div class="carousel-caption d-none d-md-block">
				<h5></h5>
				<p></p>
			</div>
		</div>
		<div class="carousel-item">
			<img src="uploaded_files/foto_rujukan/201118085454plcKF9k23f.jpg" class="d-block w-100" alt="...">
			<div class="carousel-caption d-none d-md-block">
				<h5></h5>
				<p></p>
			</div>
		</div>
		
	</div>
	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
	</button>
</div>


	<!-- Marketing messaging and featurettes
	================================================== -->
	<!-- Wrap the rest of the page in another container to center all the content. -->

	<div class="container marketing">

		<!-- Three columns of text below the carousel -->
		<div class="row">
			<div class="col-lg-4">
				<!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
			</svg> -->

			<svg width="140" height="140">
				 <defs>
						<clipPath id="myCircle">
							 <circle cx="140" cy="140" r="150" fill="#FFFFFF" />
						</clipPath>
				 </defs>
				 <image width="140" height="140" xlink:href="uploaded_files/aplikasi/book.png" />
			</svg>
			
				<h2>Koleksi buku</h2>
				<p>Klik tombol di bawah ini untuk melihat koleksi buku yang terdapat di dinas Perpustakaan Daerah Kabupaten Majalengka</p>
				<p><a class="btn btn-secondary" href="opac/site">details&raquo;</a></p>
			</div><!-- /.col-lg-4 -->
			<div class="col-lg-4">
				<!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->

				<svg width="140" height="140">
				 <defs>
						<clipPath id="myCircle">
							 <circle cx="140" cy="140" r="150" fill="#FFFFFF" />
						</clipPath>
				 </defs>
				 <image width="140" height="140" xlink:href="uploaded_files/aplikasi/logoperpus.png" />
			</svg>
			
				<h2>Koleksi Digital</h2>
				<p>Disini pengunjung dapat membaca koleksi buku ataupun gambar yang telah di ubah menjadi bentuk digital atau PDF</p>
				<p><a class="btn btn-secondary" href="digitalcollection/site">View details &raquo;</a></p>
			</div><!-- /.col-lg-4 -->
			<div class="col-lg-4">
			<svg width="140" height="140">
				 <defs>
						<clipPath id="myCircle">
							 <circle cx="140" cy="140" r="150" fill="#FFFFFF" />
						</clipPath>
				 </defs>
				 <image width="140" height="140" xlink:href="uploaded_files/aplikasi/buku.png" />
			</svg>
				<h2>Survey</h2>
				<p>Saran dan kritik  anda sangat penting bagi kami untuk dapat terus meningkatkan kualitas dalam pengalaman membaca</p>
				<p><a class="btn btn-secondary" href="survey">Kirim saran dan kritik sekarang &raquo;</a></p>
			</div><!-- /.col-lg-4 -->
		</div><!-- /.row -->


</div>

		<hr class="featurette-divider">

		<div class="row featurette">
		<div class="col-md-3 col-sm-6 col-xs-12">
		<?php
$count = (new \yii\db\Query())
		->from('catalogs')
		// ->join('INNER JOIN', 'members', 'members.ID = collectionloanitems.member_id')
		// ->where(['members.MemberNo'=>Yii::$app->user->identity->NoAnggota])
		->count();

echo \inliscore\adminlte\widgets\SmallBox::widget([
		'type'=>\inliscore\adminlte\widgets\SmallBox::TYPE_LIME,
		'head'=>number_format($count),
		'text'=> Yii::t('app', 'Total Koleksi Buku'),
		'icon'=>'fa fa-book',
		//'footer'=>'Lihat koleksi <i class="fa fa-hand-o-right"></i>',
	//'footer_link'=>'opac/site'
]);
?>
		</div>

		<div class="col-md-3 col-sm-6 col-xs-12">

<?php
$count = (new \yii\db\Query())
	->from('catalogfiles')
	->count();

echo \inliscore\adminlte\widgets\SmallBox::widget([
					'type'=>\inliscore\adminlte\widgets\SmallBox::TYPE_GREEN,
					'head'=>number_format($count),
					'text'=>Yii::t('app','Kontent Digital'),
					'icon'=>'fa fa-book',
					//'footer'=>'Detail <i class="fa fa-hand-o-right"></i>',
					//'footer_link'=>Url::to(['digitalcollection/site'])
				]);?>
</div>
			


			<div class="col-md-3 col-sm-6 col-xs-1">
				
				<!-- SIRKULASI -->
				
				<?php 
				// Peminjaman Judul
				//SELECT COUNT(*) FROM collectionloanitems 
				//INNER JOIN Collections ON 
				//collectionloanitems.Collection_id=collections.id 
				//WHERE collectionloanitems.LoanStatus = 'Loan' 
				//AND collectionloanitems.Member_id IS NOT NULL 
				//GROUP BY Catalog_id

				$query = (new \yii\db\Query())
					->from('collectionloanitems')
					->select('collectionloanitems.ID')
					->where(['collectionloanitems.LoanStatus'=>'Loan',])
					->andWhere(['not', ['collectionloanitems.Member_id' => null]])
					->join('INNER JOIN', \common\models\Collections::tableName(), 'collectionloanitems.Collection_id=collections.ID')
					->groupBy('Catalog_id');



				/*$query = \common\models\Collectionloanitems::find()
						   //->select(['COUNT(*) as jumlah'])
						   ->where(['collectionloanitems.LoanStatus'=>'Loan',])
						   ->andWhere(['not', ['collectionloanitems.Member_id' => null]])
						   ->join('INNER JOIN', \common\models\Collections::tableName(), 'collectionloanitems.Collection_id=collections.ID')
						   ->groupBy('Catalog_id');*/
				$countPeminjamanLoanJudul = $query->count();

				echo \inliscore\adminlte\widgets\SmallBox::widget([
								  'type'=>\inliscore\adminlte\widgets\SmallBox::TYPE_ORANGE,
								  'head'=>number_format($countPeminjamanLoanJudul),
								  'text'=>yii::t('app','Daftar buku dipinjam'),
								  'icon'=>'fa fa-book',
								  // 'footer'=>'Detail <i class="fa fa-hand-o-right"></i>',
								  // 'footer_link'=>'#'
							  ]);
				?>

			</div>
			<div class="col-md-3 col-sm-6 col-xs-1">
						   <!-- Kunjungan Anggota -->
						   <?php echo \inliscore\adminlte\widgets\SmallBox::widget([
								  'type'=>\inliscore\adminlte\widgets\SmallBox::TYPE_GRAY,
								  'head'=>\common\models\Memberguesses::find()->count(),
								  'text'=>'Kunjungan Anggota',
								  'icon'=>'fa fa-users',
								  //'footer'=>'Detail <i class="fa fa-hand-o-right"></i>',
								  //'footer_link'=>'#'
							  ]);?>
					</div>


		</div>

		<hr class="featurette-divider">

		<div class="row featurette">
			<div class="col-md-7">
				<h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
				<p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
			</div>
			<div class="col-md-5">
				<svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

			</div>
		</div>

		<hr class="featurette-divider">

		<!-- /END THE FEATURETTES -->

	</div><!-- /.container -->

</main>




