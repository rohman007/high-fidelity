@extends('layouts.app')
@section('content')    
        
    <form>
        <div id="page-order-confirm">
            <div id="header-block" class="mt-md-4">
                <div class="container">
                    <div class="row">
                        <div class="col-12 position-relative">
                            <a href="#" class="d-md-none back-header"><img class="image-back" src="{{asset('images/back.svg')}}"></a>
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
                                <div class="col-12 col-lg-4 d-md-flex align-items-start mb-md-3 mb-lg-0">
                                    <div class="d-flex d-md-block">
                                        <div class="fw-bold mb-1 customer-name me-3">Cristiano Ronaldo</div>
                                        <div class="fw-bold customer-phone">081XXXXXXXXX</div>
                                    </div>
                                    <div class="d-none d-md-flex ">
                                        <div class="">(Rumah)</div>
                                        <label class="label-address">Utama</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-8 col-lg-6">
                                    <div class="customer-address">Jl. Bambu Runcing No.66, Kec. Bambu Runcing III, Jakarta Pusat, 66661</div>
                                </div>
                                <div class="col-12 col-md-4 col-lg-2 d-flex justify-content-end align-items-start">
									<!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addressModal">
                                    Ubah Alamat
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="order-desc-block">
                    <div class="card">
                        <div class="card-header d-md-flex d-none row">
                            <div class="col-12 col-md-7"><h2>Produk Dipesan</h2></div>
                            <div class="col-12 col-md-2 text-center d-none d-lg-block">Harga Satuan</div>
                            <div class="col-12 col-md-2 col-lg-1 text-center">Jumlah</div>
                            <div class="col-12 col-md-3 col-lg-2 text-center">Subtotal Produk</div>
                        </div>
                        <div class="card-body">
                            <div id="order-item">
                                <div class="menu-thumbnail row">
                                    <div class="d-flex col-12 col-md-7">
                                        <img class="image-product" src="{{asset('images/menu1.png')}}">
                                        <div class="desc-menu">
                                            <div class="menu-title">Iphone 14 Pro Max</div>
                                            <div class="additional-selected">Warna Ungu</div>
                                            <div class="price-block d-none d-md-block">
                                                <div>
                                                    <span class="discountprice">Rp. 14.000.000</span>
                                                    <span class="pricenow">Rp. 13.000.000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-2 d-none d-lg-block">Rp. 13.000.000</div>
                                    <div class="col-12 col-md-2 col-lg-1 text-center qty-product">1 <span class="d-inline d-md-none">Unit</span></div>
                                    <div class="col-12 col-md-3 col-lg-2 text-end subtotal-product">Rp. 13.000.000</div>
                                </div>
                                <div class="menu-thumbnail row">
                                    <div class="d-flex col-12 col-md-7">
                                        <img class="image-product" src="{{asset('images/menu2.png')}}">
                                        <div class="desc-menu">
                                            <div class="menu-title">Earphone TWS Anker Soundcore</div>
                                            <div class="additional-selected">Warna Hitam</div>
                                            <div class="price-block d-none d-md-block">
                                                <div>
                                                    <span class="pricenow">Rp. 260.000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-2 d-none d-lg-block">Rp. 130.000</div>
                                    <div class="col-12 col-md-2 col-lg-1 text-center qty-product">2 <span class="d-inline d-md-none">Unit</span></div>
                                    <div class="col-12 col-md-3 col-lg-2 text-end subtotal-product">Rp. 260.000</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-12 col-lg-7 label-ongkir mb-md-3 mb-lg-0">Opsi Pengiriman : </div>
                                <div class="col-12 col-md-12 col-lg-5 d-flex shipping-input">
                                    <div class="col-8">
                                        Reguler (2Kg) 
                                        <!-- Button trigger modal -->
                                        <button type="button" class="ms-3 ubah-pengiriman btn btn-primary" data-bs-toggle="modal" data-bs-target="#shippingModal">
                                        Ubah
                                        </button>
                                        <label class="info-ongkir">Akan diterima pada tanggal 1 Jan - 5 Jan</label>
                                    </div>
                                    <div class="col-4 text-end nominal-ongkir d-flex align-items-center justify-content-end">Rp. 10.000</div>
                                </div>
                                <div class="d-flex d-md-none total-order">
                                    <div>Total Pesanan (3 Produk)</div>
                                    <div class="order-total">Rp. 13.320.000</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="payment-data" class="">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-7 col-md-12 col-lg-3 mb-md-3 mb-lg-0">
                                    <h2>Metode Pembayaran</h2>
                                </div>
                                <div class="col-5 d-flex d-md-none justify-content-end">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="d-flex d-md-none payment-button align-items-center" data-bs-toggle="modal" data-bs-target="#paymentModal">
                                        Pilih Pembayaran <img class="ms-1" src="{{asset('images/arrow-right.svg')}}">
                                    </button>
                                </div>

                                <div class="col-12 col-lg-9 d-none d-md-block">
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
                        <div class="tab-content d-none d-md-block" id="myTabContent">
                            <div class="tab-pane fade show active" id="transfer" role="tabpanel" aria-labelledby="transfer-tab">
                                <div class="row">
                                    <div class="col-12 col-md-3">
                                        <h2 class="mt-1">Pilih Bank</h2>
                                    </div>
                                    <div class="col-12 col-md-9 col-lg-6">
                                        <div class="row">
                                            <div class="col-12 col-sm-4">
                                                <label class="custome-bank-radio">
                                                    <input type="radio" name="payment">
                                                    <div class="bank-image"><img src="{{asset('images/permata.jpg')}}"></div>
                                                    <div class="bank-name">Bank Permata</div>
                                                    <div class="fee-name">Fee Rp. 10.000</div>
                                                </label>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label class="custome-bank-radio">
                                                    <input type="radio" name="payment">
                                                    <div class="bank-image"><img src="{{asset('images/bsi.jpg')}}"></div>
                                                    <div class="bank-name">Bank Syariah Indonesia (BSI)</div>
                                                    <div class="fee-name">Fee Rp. 10.000</div>
                                                </label>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label class="custome-bank-radio">
                                                    <input type="radio" name="payment">
                                                    <div class="bank-image"><img src="{{asset('images/bni.jpg')}}"></div>
                                                    <div class="bank-name">Bank BNI</div>
                                                    <div class="fee-name">Fee Rp. 10.000</div>
                                                </label>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label class="custome-bank-radio">
                                                    <input type="radio" name="payment">
                                                    <div class="bank-image"><img src="{{asset('images/mandiri.jpg')}}"></div>
                                                    <div class="bank-name">Bank Mandiri</div>
                                                    <div class="fee-name">Fee Rp. 10.000</div>
                                                </label>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label class="custome-bank-radio">
                                                    <input type="radio" name="payment">
                                                    <div class="bank-image"><img src="{{asset('images/bri.jpg')}}"></div>
                                                    <div class="bank-name">Bank BRI</div>
                                                    <div class="fee-name">Fee Rp. 10.000</div>
                                                </label>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label class="custome-bank-radio">
                                                    <input type="radio" name="payment">
                                                    <div class="bank-image"><img src="{{asset('images/bca.jpg')}}"></div>
                                                    <div class="bank-name">Bank BCA</div>
                                                    <div class="fee-name">Fee Rp. 10.000</div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="ewallet" role="tabpanel" aria-labelledby="ewallet-tab">
                                <div class="row">
                                    <div class="col-12 col-md-3">
                                        <h2 class="mt-1">Pilih E-Wallet</h2>
                                    </div>
                                    <div class="col-12 col-md-9 col-lg-6">
                                        <div class="row">
                                            <div class="col-12 col-sm-4">
                                                <label class="custome-bank-radio">
                                                    <input type="radio" name="payment">
                                                    <div class="bank-image"><img src="{{asset('images/ovo.png')}}"></div>
                                                    <div class="bank-name">OVO</div>
                                                    <div class="fee-name">Fee Rp. 10.000</div>
                                                </label>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label class="custome-bank-radio">
                                                    <input type="radio" name="payment">
                                                    <div class="bank-image"><img src="{{asset('images/dana.png')}}"></div>
                                                    <div class="bank-name">Dana</div>
                                                    <div class="fee-name">Fee Rp. 10.000</div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="qris" role="tabpanel" aria-labelledby="qris-tab">
                                <div class="row">
                                    <div class="col-12 col-md-3">
                                        <h2 class="mt-1">Pilih Qris</h2>
                                    </div>
                                    <div class="col-12 col-md-9 col-lg-6">
                                        <div class="row">
                                            <div class="col-12 col-sm-4">
                                                <label class="custome-bank-radio">
                                                    <input type="radio" name="payment">
                                                    <div class="bank-image"><img src="{{asset('images/qris.png')}}"></div>
                                                    <div class="bank-name">QRIS</div>
                                                    <div class="fee-name">Fee Rp. 10.000</div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="paylatter" role="tabpanel" aria-labelledby="paylatter-tab">
                                <div class="row">
                                    <div class="col-12 col-md-3">
                                        <h2 class="mt-1">Pilih Paylatter</h2>
                                    </div>
                                    <div class="col-12 col-md-9 col-lg-6">
                                        <div class="row">
                                            <div class="col-12 col-sm-4">
                                                <label class="custome-bank-radio">
                                                    <input type="radio" name="payment">
                                                    <div class="bank-image"><img src="{{asset('images/kredivo.png')}}"></div>
                                                    <div class="bank-name">Kredivo</div>
                                                    <div class="fee-name">Fee Rp. 10.000</div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="price-detail-order">
                    <div class="card">
                        <div class="card-body">
                            <div class="row justify-content-end">
                                <div class="col-12 col-md-12 col-lg-5">
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
				
				<div id="buton-order">
					<div class="d-flex align-items-center justify-content-end">
						<div id="total-amount" class="d-block d-md-none">
							<span class="label-total">Total Pembayaran</span>
							<span class="pricenow">Rp. 13.170.000</span>
						</div>
						<input type="submit" class="btn btn-submit d-none d-md-block" value="Buat Pesanan">
						<input type="submit" class="btn btn-submit d-block d-md-none" value="Checkout">
					</div>
				</div>
            </div>
        </div>
    </form>

	<!-- addressModal -->
	<div class="modal fade" id="addressModal" tabindex="-1" aria-labelledby="addressModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="d-md-none back-header" data-bs-dismiss="modal"><img class="image-back" src="{{asset('images/back.svg')}}"></button>
			<h5 class="modal-title" id="addressModalLabel">Semua Alamat</h5>
		  </div>
		  <div class="modal-body">
			<div class="add-address"><a href="#">+ Tambah Alamat</a></div>
			<div class="address-block">
				<label class="address-list d-flex">
					<input type="radio" name="address">
					<div class="action-radio"></div>
					<div class="me-3">
						<div class="d-flex align-items-start">
							<div class="fw-bold mb-1 customer-name">Cristiano Ronaldo</div>
							<label class="label-address tag-label">Rumah</label>
							<label class="label-address">Utama</label>
						</div>
						<div class="customer-phone mb-1">081XXXXXXXXX</div>
						<div class="customer-address">Jl. Bambu Runcing No.66, Kec. Bambu Runcing III, Jakarta Pusat, 66661</div>
					</div>
					<a href="#" class="address-edit">Ubah Alamat</a>
				</label>
				<label class="address-list d-flex">
					<input type="radio" name="address">
					<div class="action-radio"></div>
					<div class="me-3">
						<div class="fw-bold mb-1 customer-name">Ryomen Sukuna</div>
						<div class="customer-phone mb-1">081XXXXXXXXX</div>
						<div class="customer-address">Jl. Bambu Runcing No.66, Kec. Bambu Runcing III, Jakarta Pusat, 66661</div>
					</div>
					<a href="#" class="address-edit">Ubah Alamat</a>
				</label>
			</div>

		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
			<button type="button" class="btn btn-primary">Konfirmasi</button>
		  </div>
		</div>
	  </div>
	</div>

    
	<!-- shippingModal -->
	<div class="modal fade" id="shippingModal" tabindex="-1" aria-labelledby="shippingModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="d-md-none back-header" data-bs-dismiss="modal"><img class="image-back" src="{{asset('images/back.svg')}}"></button>
			<h5 class="modal-title" id="shippingModalLabel">Opsi Pengiriman</h5>
		  </div>
		  <div class="modal-body">
			<div class="shipping-block">
				<div class="fw-500">Pilih Jasa Pengiriman</div>
                <div class="text-shipping mb-3">Estimasi tanggal diterima tergantung pada waktu pengemasan Penjual dan waktu pengiriman ke lokasi Anda</div>
                <select class="form-control">
                    <option>Reguler</option>
                    <option>Express</option>
                </select>
            </div>
            <div class="shipping-option">
                <label class="shipping-list d-flex">
					<input type="radio" name="address" checked>
					<div class="shipping-action-radio"></div>
                    <div>
                        <div class="d-flex">
                            <div class="fw-bold shipping-name me-3">SAP Regular</div>
                            <div class="shipping-price">Rp. 10.000</div>
                        </div>
                        <div class="shipping-desc">Akan diterima pada tanggal 13 - 19 Des</div>
                    </div>
				</label>
                <label class="shipping-list d-flex">
					<input type="radio" name="address">
					<div class="shipping-action-radio"></div>
                    <div>
                        <div class="d-flex">
                            <div class="fw-bold shipping-name me-3">Ninja Express Regular </div>
                            <div class="shipping-price">Rp. 10.000</div>
                        </div>
                        <div class="shipping-desc">Akan diterima pada tanggal 13 - 22 Des</div>
                    </div>
				</label>
            </div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Nanti Saja</button>
			<button type="button" class="btn btn-primary">Simpan</button>
		  </div>
		</div>
	  </div>
	</div>
		
	<!-- paymentModal -->
	<div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="d-md-none back-header" data-bs-dismiss="modal"><img class="image-back" src="{{asset('images/back.svg')}}"></button>
              <h5 class="modal-title" id="paymentModalLabel">Metode Pembayaran</h5>
            </div>
            <div class="modal-body">
              <div class="payment-block-popup">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Transfer Bank
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-12 col-sm-4">
                                    <label class="custome-bank-radio payment-input">
                                        <input type="radio" name="payment">
                                        <div class="bank-image"><img src="{{asset('images/permata.jpg')}}"></div>
                                        <div>
                                            <div class="bank-name">Bank Permata</div>
                                            <div class="fee-name">Fee Rp. 10.000</div>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <label class="custome-bank-radio payment-input">
                                        <input type="radio" name="payment">
                                        <div class="bank-image"><img src="{{asset('images/bsi.jpg')}}"></div>
                                        <div>
                                            <div class="bank-name">Bank Syariah Indonesia (BSI)</div>
                                            <div class="fee-name">Fee Rp. 10.000</div>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <label class="custome-bank-radio payment-input">
                                        <input type="radio" name="payment">
                                        <div class="bank-image"><img src="{{asset('images/bni.jpg')}}"></div>
                                        <div>
                                            <div class="bank-name">Bank BNI</div>
                                            <div class="fee-name">Fee Rp. 10.000</div>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <label class="custome-bank-radio payment-input">
                                        <input type="radio" name="payment">
                                        <div class="bank-image"><img src="{{asset('images/mandiri.jpg')}}"></div>
                                        <div>
                                            <div class="bank-name">Bank Mandiri</div>
                                            <div class="fee-name">Fee Rp. 10.000</div>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <label class="custome-bank-radio payment-input">
                                        <input type="radio" name="payment">
                                        <div class="bank-image"><img src="{{asset('images/bri.jpg')}}"></div>
                                        <div>
                                            <div class="bank-name">Bank BRI</div>
                                            <div class="fee-name">Fee Rp. 10.000</div>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <label class="custome-bank-radio payment-input">
                                        <input type="radio" name="payment">
                                        <div class="bank-image"><img src="{{asset('images/bca.jpg')}}"></div>
                                        <div>
                                            <div class="bank-name">Bank BCA</div>
                                            <div class="fee-name">Fee Rp. 10.000</div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            E-Wallet
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <div class="row">
                                <div class="col-12 col-sm-4">
                                    <label class="custome-bank-radio payment-input">
                                        <input type="radio" name="payment">
                                        <div class="bank-image"><img src="{{asset('images/ovo.png')}}"></div>
                                        <div>
                                            <div class="bank-name">OVO</div>
                                            <div class="fee-name">Fee Rp. 10.000</div>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <label class="custome-bank-radio payment-input">
                                        <input type="radio" name="payment">
                                        <div class="bank-image"><img src="{{asset('images/dana.png')}}"></div>
                                        <div>
                                            <div class="bank-name">Dana</div>
                                            <div class="fee-name">Fee Rp. 10.000</div>
                                        </div>
                                    </label>
                                </div>
							</div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Qris
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <div class="row">
                                <div class="col-12 col-sm-4">
                                    <label class="custome-bank-radio payment-input">
                                        <input type="radio" name="payment">
                                        <div class="bank-image"><img src="{{asset('images/qris.png')}}"></div>
                                        <div>
                                            <div class="bank-name">QRIS</div>
                                            <div class="fee-name">Fee Rp. 10.000</div>
                                        </div>
                                    </label>
                                </div>
							</div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Paylatter
                        </button>
                      </h2>
                      <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
							<div class="row">
                                <div class="col-12 col-sm-4">
                                    <label class="custome-bank-radio payment-input">
                                        <input type="radio" name="payment">
                                        <div class="bank-image"><img src="{{asset('images/kredivo.png')}}"></div>
                                        <div>
                                            <div class="bank-name">Kredivo</div>
                                            <div class="fee-name">Fee Rp. 10.000</div>
                                        </div>
                                    </label>
                                </div>
							</div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
  
            </div>
            <div class="modal-footer">
				<div class="mb-2">Total Pembayaran : <span class="color-red fw-bold">Rp. 13.170.000</span></div>
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
				<button type="button" class="btn btn-primary">Konfirmasi</button>
            </div>
          </div>
        </div>
      </div>
	<script>
		function CopyToClipboard(id)
		{
		var r = document.createRange();
		r.selectNode(document.getElementById(id));
		window.getSelection().removeAllRanges();
		window.getSelection().addRange(r);
		document.execCommand('copy');
		window.getSelection().removeAllRanges();
		}
	</script>

@endsection