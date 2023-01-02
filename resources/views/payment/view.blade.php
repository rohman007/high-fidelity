@extends('layouts.app')
@section('content')    
        
	<div id="page-payment" class="mt-md-5">
		<div class="container d-flex justify-content-center">
			<div class="col-12 col-lg-10 px-0">
				<div id="">
					<div class="card border-0">
						<div class="card-header d-flex align-items-center">
							<a href="#" class="d-md-block d-none back-header mt-3 ms-4">
								<img class=" image-back" src="{{asset('images/back-icon.svg')}}">
							</a>
							<a href="#" class="d-md-none back-header"><img class="image-back" src="{{asset('images/back.svg')}}"></a>
							<h2 class="page-title py-0 ps-5 my-2">Pembayaran</h2>
						</div>
						<div class="card-body">
							<div class="row justify-content-center">
								<div class="col-12 col-lg-9">
									<div class="d-block d-md-flex justify-content-between pb-4 pt-3 pt-md-2 bb-dashed">
										<div class="fw-500">Total Pembayaran</div>
										<div class="fw-bold total-price">Rp. 13.320.000</div>
									</div>
									<label class="payment-input d-flex text-start mt-4 bb-dashed pb-4 w-100 align-items-start ">
                                        <div class="bank-image"><img src="{{asset('images/permata.jpg')}}"></div>
										<div class="w-100">
											<div class="bank-name my-3">Bank Permata</div>
											<div class="d-flex align-items-center justify-content-between">
												<div>
													<div class="label-norek">Kode Bayar</div>
													<div class="data-norek" id="data-norek">123 45678 9012</div>
												</div>
												<a href="#" onclick="CopyToClipboard('data-norek');return false;" class="btn btn-primary copy-norek">Salin</a>
											</div>
										</div>
                                    </label>
									<div class="d-flex align-items-center justify-content-between pb-4 pt-4 bb-dashed">
										<div>
											<div class="color-grey">Payment Status</div>
											<div class="color-red fw-500">UNPAID</div>
										</div>
										<a href="" class="btn btn-primary refres-status">Refresh <img class="ms-1" src="{{asset('images/refresh-icon.svg')}}"></a>
									</div>
									<div class="pb-5 pt-4">
										<div class="color-grey pb-4">Cara Melakukan Pembayaran</div>
										<div class="accordion" id="accordionExample">
											<div class="accordion-item">
											  <h2 class="accordion-header" id="headingOne">
												<button class="accordion-button fw-500" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
													ATM
												</button>
											  </h2>
											  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
												<div class="accordion-body">
													<ol>
														<li>Kunjungi ATM terdekat.</li>
														<li>Masukkan kartu ATM dari bank yang akan kamu gunakan.</li>
														<li>Masukkan 6 digit PIN ATM-mu.</li>
														<li>Pilih layanan yang akan kamu gunakan, yaitu "TRANSFER".</li>
														<li>Pilih menu transfer antar bank atau ke bank lain.</li>
														<li>Masukkan kode Permata Bank di yang sudah diberitahukan di atas, dilanjutkan dengan nomor rekening Permata tujuan.</li>
													</ol>
												</div>
											 </div>
											</div>
											<div class="accordion-item">
											  <h2 class="accordion-header" id="headingTwo">
												<button class="accordion-button collapsed fw-500" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
													Internet Banking
												</button>
											  </h2>
											  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
												<div class="accordion-body">
													<ol>
														<li>Kunjungi ATM terdekat.</li>
														<li>Masukkan kartu ATM dari bank yang akan kamu gunakan.</li>
														<li>Masukkan 6 digit PIN ATM-mu.</li>
														<li>Pilih layanan yang akan kamu gunakan, yaitu "TRANSFER".</li>
														<li>Pilih menu transfer antar bank atau ke bank lain.</li>
														<li>Masukkan kode Permata Bank di yang sudah diberitahukan di atas, dilanjutkan dengan nomor rekening Permata tujuan.</li>
													</ol>
												</div>
											 </div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection