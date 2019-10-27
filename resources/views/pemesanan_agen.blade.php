@extends('master_layout')

@section('isi')
    <!-- END nav -->
    <div class="hero-wrap hero-bread" style="background-image: url('{{asset('images/frens_bg_5.jpg')}}');">
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<h1 class="mb-0 bread">Pemesanan</h1>
				</div>
			</div>
		</div>
	</div>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-3 pb-3">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">Keranjang Pemesanan</span>
					<h2 class="mb-4">Keranjang Pemesanan</h2>
					<p>Keranjang Anda Saat Ini</p>
				</div>
			</div>   		
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 ftco-animate">
					<div class="cart-list">
						<table class="table">
							<thead class="thead-primary">
								<tr class="text-center">
									<th>Pemesanan</th>
									<th>&nbsp;</th>
									<th>Alamat Pengiriman</th>
									<th>Harga</th>
									<th>Kuantitas</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
								@foreach($keranjangs as $keranjang)
								<tr class="text-center">
									
									<td class="image-prod"><div class="img" style="background-image:url('{{asset($keranjang['path_foto'])}}')"></div></td>
									
									<td class="product-name">
										<h3>{{$keranjang['nama_pembeli']}}</h3>
										<p>{{$keranjang['nama_produk']}}</p>
									</td>
									<td>
										<textarea class="form-control">{{$keranjang['alamat']}}</textarea>
									</td>
									
									<td class="price">{{$keranjang['harga']}}</td>
									
									<td class="quantity">
										<input type="number" onChange="updateKuantitas(this)" data-harga="{{$keranjang['harga']}}" value="1" class="form-control">
									</td>
									
									<td class="total" id="totalKeranjang">{{$keranjang['harga']}}</td>
								</tr><!-- END TR-->
								@endforeach
							</tbody>
						</table>
					</div>
					<div class="row mt-3">
						<div class="col text-center">
							<button class="btn btn-primary w-25">BELI</button>
						</div>
					</div>
				</div>
			</div>
		</section>
	
	
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-3 pb-3">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">Pemesanan</span>
					<h2 class="mb-4">Riwayat Pemesanan</h2>
					<p>Daftar Pemesanan yang diminta Anda Minta</p>
				</div>
			</div>   		
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 ftco-animate">
					<div class="cart-list">
						<table class="table">
							<thead class="thead-primary">
								<tr class="text-center">
									<th>Pemesanan</th>
									<th>&nbsp;</th>
									<th>Alamat Pengiriman</th>
									<th>Harga</th>
									<th>Kuantitas</th>
									<th>Total</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
								@foreach($riwayats as $riwayat)
								<tr class="text-center">
									
									<td class="image-prod"><div class="img" style="background-image:url('{{asset($riwayat['path_foto'])}}');"></div></td>
									
									<td class="product-name">
										<h3>{{$riwayat['nama_pembeli']}}</h3>
										<p>{{$riwayat['nama_produk']}}</p>
									</td>
									<td>
										<p>{{$riwayat['alamat']}}</p>
									</td>
									
									<td class="price">{{$riwayat['harga']}}</td>
									
									<td class="quantity">
										{{$riwayat['kuantitas']}}
									</td>
									
									<td class="total">{{$riwayat['total']}}</td>
									<td class="Aksi">
										{{$riwayat['status']}}
									</td>
								</tr><!-- END TR-->

								@endforeach
							</tbody>
						</table>
					</div>
					<div class="row mt-2">
						<div class="col text-center">
							<div class="block-27">
								<ul>
									<li><a href="#">&lt;</a></li>
									<li class="active"><span>1</span></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#">&gt;</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	
@endsection	

@section('add_javascript')
<script>
	function updateKuantitas(e) {
		var harga = e.dataset.harga;
		var kuantitas = e.value;
		console.log(harga);
		console.log(kuantitas);
		document.getElementById("totalKeranjang").innerHTML = harga*kuantitas;

	}
</script>
@endsection