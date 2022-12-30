@extends('layouts.app')
@section('content')    
        
	<div id="page-invoice" class="pt-md-5">
		<div class="container d-flex justify-content-center">
			<div class="col-12 col-md-11 px-0">
				<div id="">
					<div class="card border-0">
						<div class="card-header d-flex align-items-center justify-content-center border-0">
							<a href="#" class="d-md-none back-header"><img class="image-back" src="{{asset('images/back.svg')}}"></a>
							<h2 class="page-title py-0 my-2">Invoice Pembayaran</h2>
						</div>
						<div class="card-body">
							<div class="row justify-content-center">
								<div class="col-12 col-md-9">
									<div class="head-label mt-4 mt-md-2">Terima kasih atas pesanan anda</div>
									<div class="d-block d-md-flex align-items-center justify-content-between pb-4 pt-3 pt-md-3 mb-4 bb-solid">
										<div>
											<div class="color-grey fw-bold mb-1">Hi Chirstiano Ronaldo,</div>
											<div class="color-grey mb-3 mb-md-2">salinan atau ringkasan pesanan Anda telah dikirim ke <br/>Email cristianoronaldo07@gmail.com</div>
										</div>
										<a href="" class="btn btn-primary copy-norek">Print</a>

									</div>
									<div class="pt-1 pt-md-3 pb-0 pb-md-2 head-label color-red fw-bold text-center">Order ID 12345678910</div>
									<div class="mb-2 pb-md-4 pt-4 pb-2 bb-solid">
										<div class="row mb-3 mb-md-4" id="detail-order-status">
											<div class="col-12 col-md-3 d-flex justify-content-between d-md-block mb-2 mb-md-0">
												<div class="fw-bold head-label">Order Date</div>
												<div class="color-grey">
												16 December, 2022 <br/> 14:49 PM
												</div>
											</div>
											<div class="col-12 col-md-3 d-flex justify-content-between d-md-block mb-2 mb-md-0">
												<div class="fw-bold head-label">Order Status</div>
												<div class="color-grey">
												PAID
												</div>
											</div>
											<div class="col-12 col-md-2 d-flex justify-content-between d-md-block mb-2 mb-md-0">
												<div class="fw-bold head-label">Payment</div>
												<div class="color-grey">
												Permata VA
												</div>
											</div>
											<div class="col-12 col-md-4 d-flex justify-content-between d-md-block">
												<div class="fw-bold head-label me-2">Address</div>
												<div class="color-grey address-detail">
												Christiano (0822xxxxxxxx) <br/>Jl. Bambu Runcing No.66, Kec. Bambu Runcing III, Jakarta Pusat, 66661
												</div>
											</div>
										</div>
									</div>
									<div id="order-item" class="bb-solid pt-2 pt-md-4 pb-2">
										<div class="menu-thumbnail row">
											<div class="d-flex col-12 col-md-7">
												<img class="image-product" src="{{asset('images/menu1.png')}}">
												<div class="desc-menu">
													<div class="menu-title">Iphone 14 Pro Max</div>
													<div class="additional-selected">Warna Ungu</div>
													<div class="col-12 col-md-2 d-md-none color-grey fw-normal">Jumlah: 1</div>
												</div>
											</div>
											<div class="col-12 col-md-2 d-none d-md-block color-grey fw-normal">Jumlah: 1</div>
											<div class="col-12 col-md-3 text-end subtotal-product color-grey fw-normal">Rp. 13.000.000</div>
										</div>
										<div class="menu-thumbnail row">
											<div class="d-flex col-12 col-md-7">
												<img class="image-product" src="{{asset('images/menu2.png')}}">
												<div class="desc-menu">
													<div class="menu-title">Earphone TWS Anker Soundcore</div>
													<div class="additional-selected">Warna Hitam</div>
													<div class="col-12 col-md-2 d-md-none color-grey fw-normal">Jumlah: 2</div>
												</div>
											</div>
											<div class="col-12 col-md-2 d-none d-md-block color-grey fw-normal">Jumlah: 2</div>
											<div class="col-12 col-md-3 text-end subtotal-product color-grey fw-normal">Rp. 260.000</div>
										</div>
									</div>
									<div class="detail-payment bb-solid pt-4 pb-4 mb-4">
                                        <table>
                                            <tr>
                                                <td>Subtotal</td>
                                                <td>Rp. 13.320.000</td>
                                            </tr>
                                            <tr>
                                                <td>Shipping</td>
                                                <td>Rp. 20.000</td>
                                            </tr>
                                            <tr>
                                                <td>TAX</td>
                                                <td>Rp. 50.000</td>
                                            </tr>
                                            <tr>
                                                <td class="color-green">Coupon Discount</td>
                                                <td>-Rp. 50.000</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div id="total-payment" class="mb-5 pt-2">
                                        <label class="fw-bold">Total Pembayaran</label>
                                        <div>Rp. 13.320.000</div>
                                    </div>
                                    <a href="#" class="btn btn-primary w-100 back-button">Kembali</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection