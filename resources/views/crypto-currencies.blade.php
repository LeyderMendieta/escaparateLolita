@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
					    <!-- page-header -->
						<div class="page-header">
							<h1 class="page-title">Crypto-Currencies</h1>
							<div class="ml-auto">
								<div class="input-group">
									<a  class="btn btn-primary btn-icon text-white mr-2"  id="daterange-btn" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Calendar">
										<span>
											<i class="fe fe-calendar"></i>
										</span>
									</a>
									<a href="#" class="btn btn-secondary btn-icon mr-2" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Rating">
										<span>
											<i class="fe fe-star"></i>
										</span>
									</a>
									<a href="#" class="btn btn-success btn-icon mr-2" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Email">
										<span>
											<i class="fe fe-mail"></i>
										</span>
									</a>
									<a href="#" class="btn btn-warning btn-icon mr-2" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Chat">
										<span>
											<i class="fe fe-message-square"></i>
										</span>
									</a>
									<a href="#" class="btn btn-info btn-icon mr-2" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Add New">
										<span>
											<i class="fe fe-plus"></i>
										</span>
									</a>
									<a href="#" class="btn btn-danger btn-icon" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Support">
										<span>
											<i class="fe fe-help-circle"></i>
										</span>
									</a>
								</div>
							</div>
						</div>
						<!-- End page-header -->
@endsection
@section('content')
						<!-- Row -->
						<div class="row">
							<div class="col-xl-12">
								<div class="card">
									<div class="table-responsive">
										<div class="table-responsive">
											<table class="table card-table text-nowrap">
												<thead>
													<tr class="border-bottom">
														<th class="border-top-0">Name</th>
														<th class="border-top-0">Icon</th>
														<th class="border-top-0">Price</th>
														<th class="border-top-0">% 24h</th>
														<th class="border-top-0">Market Cap</th>
														<th class="border-top-0">Circulating Supply</th>
														<th class="border-top-0">Volume 24H</th>
														<th class="border-top-0">CMGR/Month</th>
														<th class="border-top-0">Inflation</th>
													</tr>
												</thead>
												<tbody>
													<tr class="border-bottom">
														<td>Bitcoin</td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/bitcoin.svg')}}" alt="Bitcoin" class="w-4 h-4"></td>
														<td>$10513.00</td>
														<td class="text-red">-7%</td>
														<td class="">$179,470,305,923</td>
														<td>16,819,612 <span class="text-secondary ml-2">BTC</span></td>
														<td class="">$9,578,830,000</td>
														<td>8.11% / 57</td>
														<td class="">0.36%</td>
													</tr>
													<tr class="border-bottom">
														<td>Ethereum</td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/ethereum.svg')}}" alt="Ethereum" class="w-4 h-4"></td>
														<td>$966.61</td>
														<td class="text-red">-6%</td>
														<td class="">$95,270,125,036</td>
														<td>97,145,024 <span class="text-orange ml-2">ETH</span></td>
														<td class="">$3,466,060,000</td>
														<td>22.62% / 29</td>
														<td class="">0.64%</td>
													</tr>
													<tr class="border-bottom">
														<td>Ripple</td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/ripple.svg')}}" alt="Ripple" class="w-4 h-4"></td>
														<td>$1.2029</td>
														<td class="text-red">-11%</td>
														<td class="">$47,649,145,657</td>
														<td>38,739,144,704 <span class="text-info ml-2">XRP</span></td>
														<td class="">$2,081,450,000</td>
														<td>10.85% / 53</td>
														<td class="">0.06%</td>
													</tr>
													<tr class="border-bottom">
														<td>Bitcoin Cash</td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/bitcoincash.svg')}}" alt="Bitcoin" class="w-4 h-4"></td>
														<td>$1547.00</td>
														<td class="text-red">-11%</td>
														<td class="">$26,720,210,956</td>
														<td>16,925,988<span class="text-danger ml-2">BCH</span></td>
														<td class="">$598,337,000</td>
														<td>21.30% / 6</td>
														<td class="">0.32%</td>
													</tr>
													<tr class="border-bottom">
														<td>Cardano</td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/cardano.svg')}}" alt="Cardano" class="w-4 h-4"></td>
														<td>$0.550768</td>
														<td class="text-red">-9%</td>
														<td class="">$14,279,800,786</td>
														<td>25,927,069,696<span class="text-warning ml-2">ADA</span></td>
														<td class="">$466,381,000</td>
														<td>205.35% / 3</td>
														<td class="">0.00%</td>
													</tr>
													<tr class="border-bottom">
														<td>Litecoin</td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/litecoin.svg')}}" alt="Litecoin" class="w-4 h-4"></td>
														<td>$173.86</td>
														<td class="text-red">-7%</td>
														<td class="">$9,670,920,267</td>
														<td>54,873,584<span class="text-success ml-2">LTC</span></td>
														<td class="">$430,524,000</td>
														<td>6.87% / 57</td>
														<td class="">0.80%</td>
													</tr>
													<tr class="border-bottom">
														<td>EOS</td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/eos.svg')}}" alt="EOS" class="w-4 h-4"></td>
														<td>$13.394</td>
														<td class="text-green">5%</td>
														<td class="">$8,420,143,033</td>
														<td>621,412,800<span class="text-secondary ml-2">EOS</span></td>
														<td class="">$2,864,780,000</td>
														<td>53.25% / 6</td>
														<td class="">11.56%</td>
													</tr>
													<tr class="border-bottom">
														<td>NEM</td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/nem.svg')}}" alt="NEM" class="w-4 h-4"></td>
														<td>$0.935049</td>
														<td class="text-red">-11%</td>
														<td class="">$8,415,440,999</td>
														<td>8,999,999,488<span class="text-orange ml-2">XEM</span></td>
														<td class="">$66,061,000</td>
														<td>26.99% / 33</td>
														<td class="">0.24%</td>
													</tr>
													<tr class="border-bottom">
														<td>Stellar</td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/stellar.svg')}}" alt="Bitcoin" class="w-4 h-4"></td>
														<td>$0.467813</td>
														<td class="text-green">2%</td>
														<td class="">$8,358,735,080</td>
														<td>17,867,683,840<span class="text-info ml-2">XLM</span></td>
														<td class="">$370,297,000</td>
														<td>13.12% / 41</td>
														<td class="">0.19%</td>
													</tr>
													<tr class="border-bottom">
														<td>NEO</td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/neo.svg')}}" alt="Bitcoin" class="w-4 h-4"></td>
														<td>$118.61</td>
														<td class="text-red">-9%</td>
														<td class="">$7,693,400,000</td>
														<td>65,000,000<span class="text-pink ml-2">NEO</span></td>
														<td class="">$318,308,000</td>
														<td>62.68% / 15</td>
														<td class="">0.00%</td>
													</tr>
													<tr class="border-bottom">
														<td>IOTA</td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/iota.svg')}}" alt="Bitcoin" class="w-4 h-4"></td>
														<td>$2.34</td>
														<td class="text-red">-14%</td>
														<td class="">$6,504,100,862</td>
														<td>2,779,530,240<span class="text-warning ml-2">MIOTA</span></td>
														<td class="">$103,132,000</td>
														<td>23.27% / 7</td>
														<td class="">-0.02%</td>
													</tr>
													<tr class="border-bottom">
														<td>Dash</td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/dash.svg')}}" alt="Dash" class="w-4 h-4"></td>
														<td>$747.222</td>
														<td class="text-red">-8%</td>
														<td class="">$5,881,413,815</td>
														<td>7,833,738<span class="text-danger ml-2">DASH</span></td>
														<td class="">$96,147,900</td>
														<td>19.19% / 47</td>
														<td class="">0.81%</td>
													</tr>
													<tr class="border-bottom">
														<td>Monero</td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/monero.svg')}}" alt="" class="w-4 h-4"></td>
														<td>$305.16</td>
														<td class="text-red">-11%</td>
														<td class="">$4,778,157,533</td>
														<td>15,633,286<span class="text-success ml-2">XMR</span></td>
														<td class="">$100,788,000</td>
														<td>11.88% / 44</td>
														<td class="">0.78%</td>
													</tr>
													<tr class="border-bottom">
														<td>TRON</td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/tron.svg')}}" alt="" class="w-4 h-4"></td>
														<td>$0.067691</td>
														<td class="text-red">-5%</td>
														<td class="">$4,450,560,896</td>
														<td>65,748,193,280<span class="text-primary ml-2">TRX</span></td>
														<td class="">$581,651,000</td>
														<td>142.69% / 4</td>
														<td class="">0.00%</td>
													</tr>
													<tr>
														<td>Bitcoin Gold</td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/bitcoinglod.svg')}}" alt="" class="w-4 h-4"></td>
														<td>$181.39</td>
														<td class="text-red">-7%</td>
														<td class="">$3,084,108,676</td>
														<td>16,779,700<span class="text-secondary ml-2">BTG</span></td>
														<td class="">$199,652,000</td>
														<td>-25.44% / 3</td>
														<td class="">0.34%</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

					</div>
@endsection
@section('js')
@endsection