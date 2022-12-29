<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

        <!-- Bootstrap core CSS -->
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Custome CSS -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        
    <form>
        <div id="page-order-confirm">
            <div id="header-block">
                <div class="container">
                    <div class="row">
                        <div class="col-12 position-relative">
                            <a href="#" class="d-md-none back-header"><img class="image-product" src="{{asset('images/back.PNG')}}"></a>
                            <h2 class="page-title">Checkout</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div id="customer-data">
                    <div class="card">
                        <div class="card-header"><h2>Alamat Pengiriman</h2></div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-4 d-md-flex align-items-start">
                                    <div class="me-3">
                                        <div class="fw-bold mb-1 customer-name">Cristiano Ronaldo</div>
                                        <div class="fw-bold customer-phone">081XXXXXXXXX</div>
                                    </div>
                                    <div class="d-flex ">
                                        <div class="me-2">(Rumah)</div>
                                        <label class="label-address">Utama</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="customer-address">Jl. Bambu Runcing No.66, Kec. Bambu Runcing III, Jakarta Pusat, 66661</div>
                                </div>
                                <div class="col-12 col-md-2 d-flex justify-content-end align-items-start">
                                    <a class="btn btn-primary" href="#">Ubah Alamat</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="order-desc-block">
                    <div class="card">
                        <div class="card-header d-md-flex d-none row">
                            <div class="col-12 col-md-7"><h2>Produk Dipesan</h2></div>
                            <div class="col-12 col-md-2 text-center">Harga Satuan</div>
                            <div class="col-12 col-md-1 text-center">Jumlah</div>
                            <div class="col-12 col-md-2 text-center">Subtotal Produk</div>
                        </div>
                        <div class="card-body">
                            <div id="order-item">
                                <div class="menu-thumbnail row">
                                    <div class="d-flex col-12 col-md-7">
                                        <img class="image-product" src="{{asset('images/menu1.png')}}">
                                        <div class="desc-menu">
                                            <div class="menu-title">Iphone 14 Pro Max</div>
                                            <div class="additional-selected">Warna Ungu</div>
                                            <div class="price-block">
                                                <div>
                                                    <span class="discountprice">Rp. 14.000.000</span>
                                                    <span class="pricenow">Rp. 13.000.000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-2">Rp. 13.000.000</div>
                                    <div class="col-12 col-md-1 text-center">1</div>
                                    <div class="col-12 col-md-2 text-end">Rp. 13.000.000</div>
                                </div>
                                <div class="menu-thumbnail row">
                                    <div class="d-flex col-12 col-md-7">
                                        <img class="image-product" src="{{asset('images/menu2.png')}}">
                                        <div class="desc-menu">
                                            <div class="menu-title">Earphone TWS Anker Soundcore</div>
                                            <div class="additional-selected">Warna Hitam</div>
                                            <div class="price-block">
                                                <div>
                                                    <span class="pricenow">Rp. 260.000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-2">Rp. 130.000</div>
                                    <div class="col-12 col-md-1 text-center">2</div>
                                    <div class="col-12 col-md-2 text-end">Rp. 260.000</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-12 col-md-7">Opsi Pengiriman : </div>
                                <div class="col-12 col-md-3">
                                    Reguler (2Kg) <a class="ms-3 ubah-pengiriman btn btn-primary">Ubah</a>
                                    <label class="info-ongkir">Akan diterima pada tanggal 1 Jan - 5 Jan</label>
                                </div>
                                <div class="col-12 col-md-2 text-end nominal-ongkir d-flex align-items-center justify-content-end">Rp. 10.000</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="payment-data" class="">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-3">
                                    <h2>Metode Pembayaran</h2>
                                </div>
                                <div class="col-12 col-md-9">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="transfer-tab" data-bs-toggle="tab" data-bs-target="#transfer" type="button" role="tab" aria-controls="transfer" aria-selected="true">Transfer Bank</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="ewallet-tab" data-bs-toggle="tab" data-bs-target="#ewallet" type="button" role="tab" aria-controls="ewallet" aria-selected="false">E-Wallet</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="qris-tab" data-bs-toggle="tab" data-bs-target="#qris" type="button" role="tab" aria-controls="qris" aria-selected="false">Qris</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="paylatter-tab" data-bs-toggle="tab" data-bs-target="#paylatter" type="button" role="tab" aria-controls="paylatter" aria-selected="false">Paylatter</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="transfer" role="tabpanel" aria-labelledby="transfer-tab">
                                <div class="row">
                                    <div class="col-12 col-md-3">
                                        <h2 class="mt-1">Pilih Bank</h2>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="row">
                                            <div class="col-12 col-sm-4">
                                                <label class="custome-bank-radio">
                                                    <input type="radio" name="bank">
                                                    <div class="bank-image"><img src="{{asset('images/permata.jpg')}}"></div>
                                                    <div class="bank-name">Bank Permata</div>
                                                    <div class="fee-name">Fee Rp. 10.000</div>
                                                </label>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label class="custome-bank-radio">
                                                    <input type="radio" name="bank">
                                                    <div class="bank-image"><img src="{{asset('images/bsi.jpg')}}"></div>
                                                    <div class="bank-name">Bank Syariah Indonesia (BSI)</div>
                                                    <div class="fee-name">Fee Rp. 10.000</div>
                                                </label>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label class="custome-bank-radio">
                                                    <input type="radio" name="bank">
                                                    <div class="bank-image"><img src="{{asset('images/bni.jpg')}}"></div>
                                                    <div class="bank-name">Bank BNI</div>
                                                    <div class="fee-name">Fee Rp. 10.000</div>
                                                </label>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label class="custome-bank-radio">
                                                    <input type="radio" name="bank">
                                                    <div class="bank-image"><img src="{{asset('images/mandiri.jpg')}}"></div>
                                                    <div class="bank-name">Bank Mandiri</div>
                                                    <div class="fee-name">Fee Rp. 10.000</div>
                                                </label>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label class="custome-bank-radio">
                                                    <input type="radio" name="bank">
                                                    <div class="bank-image"><img src="{{asset('images/bri.jpg')}}"></div>
                                                    <div class="bank-name">Bank BRI</div>
                                                    <div class="fee-name">Fee Rp. 10.000</div>
                                                </label>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label class="custome-bank-radio">
                                                    <input type="radio" name="bank">
                                                    <div class="bank-image"><img src="{{asset('images/bca.jpg')}}"></div>
                                                    <div class="bank-name">Bank BCA</div>
                                                    <div class="fee-name">Fee Rp. 10.000</div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="ewallet" role="tabpanel" aria-labelledby="ewallet-tab">E-Wallet</div>
                            <div class="tab-pane fade" id="qris" role="tabpanel" aria-labelledby="qris-tab">Qris</div>
                            <div class="tab-pane fade" id="paylatter" role="tabpanel" aria-labelledby="paylatter-tab">Paylatter</div>
                        </div>
                    </div>
                </div>
                <div id="price-detail-order">
                    <div class="card">
                        <div class="card-body">
                            <div class="row justify-content-end">
                                <div class="col-12 col-md-5">
                                    <div id="voucher-order">
                                        <div class="d-flex form-voucher">
                                            <input type="text" placeholder="Ada Kupon? Isi kupon kamu disini" class="form-control">
                                            <input type="submit" class="btn btn-primary" value="Apply">
                                        </div>
                                    </div>
                                    <div class="detail-payment">
                                        <table>
                                            <tr>
                                                <td>Subtotal Produk</td>
                                                <td>Rp. 13.310.000</td>
                                            </tr>
                                            <tr>
                                                <td>Pajak</td>
                                                <td>Rp. 50.000</td>
                                            </tr>
                                            <tr>
                                                <td>Total Ongkos Kirim</td>
                                                <td>Rp. 10.000</td>
                                            </tr>
                                            <tr>
                                                <td>Biaya Metode Pembayaran</td>
                                                <td>Rp. 10.000</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div id="total-payment">
                                        <label>Total Pembayaran</label>
                                        <div>Rp. 13.170.000</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer-block">
            <div class="container">
                <div class="d-flex align-items-center justify-content-end">
                    <input type="submit" class="btn btn-submit" value="Buat Pesanan">
                </div>
            </div>
        </div>
    </form>
		


    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
	<script>
		$('#booklist').click(function(){
			$('body').addClass("active");
			$('#bg-layer').addClass("active");
			$('#list-categories').addClass("active");
		});
		$('#chart-icon').click(function(){
			$('body').toggleClass("active");
			$('#bg-layer').toggleClass("active");
			$('#mybasket').toggleClass("active");
		});
		$('#mybasket .close-button').click(function(){
			$('body').addClass("active");
			$('#bg-layer').addClass("active");
			$('#mybasket').removeClass("active");
		});
		$('#menu-block .add-item').click(function(){
			$('body').addClass("active");
			$('#bg-layer').addClass("active");
			$('#add-new-item').addClass("active");
			$('#footer-additional').addClass("active");
		});
		$('#bg-layer').click(function(){
			$('body').removeClass("active");
			$('#bg-layer').removeClass("active");
			$('#list-categories').removeClass("active");
			$('#add-new-item').removeClass("active");
			$('#footer-additional').removeClass("active");
			$('#mybasket').removeClass("active");
		});
		$('.close-button').click(function(){
			$('body').removeClass("active");
			$('#bg-layer').removeClass("active");
			$('#list-categories').removeClass("active");
			$('#add-new-item').removeClass("active");
			$('#footer-additional').removeClass("active");
		});
		$('#list-categories a').click(function(){
			$('body').removeClass("active");
			$('#bg-layer').removeClass("active");
			$('#list-categories').removeClass("active");
		});
	</script>
    </body>
</html>