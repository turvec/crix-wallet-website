@extends('layouts.app')
@section('content')
<main>
    <div class="container-fluid site-width">
        <!-- START: Breadcrumbs-->
        <div class="row">
            <div class="col-12  align-self-center">
                <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                <div class="w-sm-100 mr-auto"><h4 class="mb-0">Hello, {{ Auth::user()->name }}</h4> <p>Welcome to crix mobile wallet</p></div>

                    <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- END: Breadcrumbs-->

        <!-- START: Card Data-->
        <div class="row">
            
            <div class="col-md-6 col-lg-4 mt-3">
                <div class="card overflow-hidden">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="card-title">Transactions</h6>
                    </div>
                    <div class="card-content">
                        <div class="card-body p-0">
                            <ul class="list-group list-unstyled">
                                <li class="p-2 border-bottom zoom">
                                    <div class="media d-flex w-100">
                                        <div class="transaction-date text-center rounded bg-primary text-white p-2">
                                            <small class="d-block">MAR</small><span class="h6">28</span>
                                        </div>

                                        <div class="media-body align-self-center pl-4">
                                            <span class="mb-0 font-w-600">Jonathan</span><br>
                                            <p class="mb-0 font-w-500 tx-s-12">SIP Purchase</p>
                                        </div>
                                        <div class="ml-auto my-auto font-weight-bold text-right text-success">
                                            +500<br/>
                                            <small class="d-block">USD</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="p-2 border-bottom zoom">
                                    <div class="transaction-date d-flex w-100">
                                        <div class="date text-center rounded bg-primary text-white p-2">
                                            <small class="d-block">APR</small><span class="h6">12</span>
                                        </div>
                                        <div class="media-body align-self-center pl-4">
                                            <span class="mb-0 font-w-600">kelvin</span><br>
                                            <p class="mb-0 font-w-500 tx-s-12">Mutual Funds</p>
                                        </div>
                                        <div class="ml-auto my-auto font-weight-bold text-right text-danger">
                                            -500<br/>
                                            <small class="d-block">USD</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="p-2 border-bottom zoom">
                                    <div class="media d-flex w-100">
                                        <div class="transaction-date text-center rounded bg-primary text-white p-2">
                                            <small class="d-block">MAY</small><span class="h6">13</span>
                                        </div>
                                        <div class="media-body align-self-center pl-4">
                                            <span class="mb-0 font-w-600">Peter</span><br>
                                            <p class="mb-0 font-w-500 tx-s-12">Equity</p>
                                        </div>
                                        <div class="ml-auto my-auto font-weight-bold text-right text-danger">
                                            +500<br/>
                                            <small class="d-block">USD</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="p-2 border-bottom zoom">
                                    <div class="media d-flex w-100">
                                        <div class="transaction-date text-center rounded bg-primary text-white p-2">
                                            <small class="d-block">JUN</small><span class="h6">23</span>
                                        </div>
                                        <div class="media-body align-self-center pl-4">
                                            <span class="mb-0 font-w-600">Ray Sin</span><br>
                                            <p class="mb-0 font-w-500 tx-s-12">Commodity</p>
                                        </div>
                                        <div class="ml-auto my-auto font-weight-bold text-right text-danger">
                                            +500<br/>
                                            <small class="d-block">USD</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="p-2 border-bottom zoom">
                                    <div class="media d-flex w-100">
                                        <div class="transaction-date text-center rounded bg-primary text-white p-2">
                                            <small class="d-block">JUL</small><span class="h6">16</span>
                                        </div>
                                        <div class="media-body align-self-center pl-4">
                                            <span class="mb-0 font-w-600">Abexon Dixon</span><br/>
                                            <p class="mb-0 font-w-500 tx-s-12">Real Estate</p>
                                        </div>
                                        <div class="ml-auto my-auto font-weight-bold text-right text-success">
                                            +500<br/>
                                            <small class="d-block">USD</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="p-2 zoom">
                                    <div class="media d-flex w-100">
                                        <div class="transaction-date text-center rounded bg-primary text-white p-2">
                                            <small class="d-block">AUG</small><span class="h6">28</span>
                                        </div>
                                        <div class="media-body align-self-center pl-4">
                                            <span class="mb-0 font-w-600">Nathan S. Johnson</span><br/>
                                            <p class="mb-0 font-w-500 tx-s-12">Switch Out</p>
                                        </div>
                                        <div class="ml-auto my-auto font-weight-bold text-right text-success">
                                            +500<br/>
                                            <small class="d-block">USD</small>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4  mt-3">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body p-4 text-center">

                            <div class="my-auto">
                                <img src="/dist/images/wallet.png" alt="author" width="48" class="my-auto">
                            </div>
                            <div class="content my-3">
                                <span class="mb-0 font-w-600 h5">CRIX WALLET</span><br>
                                <p class="mb-0 font-w-500 tx-s-12">Your best and trusted wallet</p>
                            </div>
                            <div class="card bg-primary my-3 text-left">
                                <div class="card-body">
                                    <div class="d-flex px-0 px-lg-2 py-2 align-self-center">
                                        <i class="fas fa-dollar-sign card-liner-icon mt-2 text-white"></i>
                                        <div class="card-liner-content">
                                        <h2 class="card-liner-title text-white">CRX {{ Auth::user()->wallet->balance }}</h2>
                                            <h6 class="card-liner-subtitle text-white">Crix Balance</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="my-auto">
                                <a href="#" class="btn btn-outline-primary font-w-600 my-auto text-nowrap">Get More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-3">
                <div class="card overflow-hidden">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="card-title">Accounts & Cards</h6>
                    </div>
                    <div class="card-content">
                        <div class="card-body p-0">
                            <ul class="list-group list-unstyled">
                                <li class="p-2 border-bottom zoom">
                                    <div class="media d-flex w-100">
                                        <i class="fab fa-cc-mastercard h1 color-primary"></i>
                                        <div class="media-body align-self-center pl-4">
                                            <span class="mb-0 font-w-600">Master Card</span><br>
                                            <p class="mb-0 font-w-500 tx-s-12">1234 1234 1234 1234</p>
                                        </div>
                                        <div class="ml-auto my-auto font-weight-bold text-right text-success">
                                            Active
                                        </div>
                                    </div>
                                </li>
                                <li class="p-2 border-bottom zoom">
                                    <div class="transaction-date d-flex w-100">
                                        <i class="fab fa-cc-visa h1 color-primary"></i>
                                        <div class="media-body align-self-center pl-4">
                                            <span class="mb-0 font-w-600">Visa Card</span><br>
                                            <p class="mb-0 font-w-500 tx-s-12">1234 1234 1234 1234</p>
                                        </div>
                                        <div class="ml-auto my-auto font-weight-bold text-right text-danger">
                                            Disable
                                        </div>
                                    </div>
                                </li>
                                <li class="p-2 border-bottom zoom">
                                    <div class="media d-flex w-100">
                                        <i class="fab fa-cc-paypal h1 color-primary"></i>
                                        <div class="media-body align-self-center pl-4">
                                            <span class="mb-0 font-w-600">Paypal</span><br>
                                            <p class="mb-0 font-w-500 tx-s-12">test@example.com</p>
                                        </div>
                                        <div class="ml-auto my-auto font-weight-bold text-right text-success">
                                            Active
                                        </div>
                                    </div>
                                </li>
                                <li class="p-2 border-bottom">
                                    <div class="media d-flex w-100">
                                        <i class="fab fa-cc-amazon-pay h1 color-primary"></i>
                                        <div class="media-body align-self-center pl-4">
                                            <span class="mb-0 font-w-600">Amazon Pay</span><br>
                                            <p class="mb-0 font-w-500 tx-s-12">amazon-pay@abc</p>
                                        </div>
                                        <div class="ml-auto my-auto font-weight-bold text-right text-success">
                                            Active
                                        </div>
                                    </div>
                                </li>
                                <li class="p-2 border-bottom zoom">
                                    <div class="media d-flex w-100">
                                        <i class="fab fa-cc-stripe h1 color-primary"></i>
                                        <div class="media-body align-self-center pl-4">
                                            <span class="mb-0 font-w-600">Stripe Payment</span><br/>
                                            <p class="mb-0 font-w-500 tx-s-12">1234 1234 1234 1234</p>
                                        </div>
                                        <div class="ml-auto my-auto font-weight-bold text-right text-success">
                                            Active
                                        </div>
                                    </div>
                                </li>
                                <li class="p-2 zoom">
                                    <div class="media d-flex w-100">
                                        <i class="fab fa-cc-discover h1 color-primary"></i>
                                        <div class="media-body align-self-center pl-4">
                                            <span class="mb-0 font-w-600">Discover Card</span><br/>
                                            <p class="mb-0 font-w-500 tx-s-12">1234 1234 1234 1234</p>
                                        </div>
                                        <div class="ml-auto my-auto font-weight-bold text-right text-danger">
                                            Disable
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-3">
                <div class="card overflow-hidden">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="card-title">Recent Invoices</h6>
                    </div>
                    <div class="card-content">
                        <div class="card-body p-0">
                            <ul class="list-group list-unstyled">
                                <li class="p-2 border-bottom zoom">
                                    <div class="media d-flex w-100">
                                        <span class="badge outline-badge-info my-auto">Paid</span>
                                        <div class="media-body align-self-center  text-right">
                                            <span class="mb-0 font-w-600">Payment</span><br>
                                            <p class="mb-0 font-w-500 tx-s-12">SIP Purchase</p>
                                        </div>
                                        <div class="ml-auto my-auto pl-4 font-weight-bold  text-right text-success">
                                            +500<br>
                                            <small class="d-block">USD</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="p-2 border-bottom zoom">
                                    <div class="transaction-date d-flex w-100">
                                        <span class="badge outline-badge-danger my-auto">Canceled</span>
                                        <div class="media-body align-self-center  text-right">
                                            <span class="mb-0 font-w-600">Service Payment</span><br>
                                            <p class="mb-0 font-w-500 tx-s-12">Mutual Funds</p>
                                        </div>
                                        <div class="ml-auto my-auto pl-4 font-weight-bold text-right text-danger">
                                            -500<br>
                                            <small class="d-block">USD</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="p-2 border-bottom zoom">
                                    <div class="media d-flex w-100">
                                        <span class="badge outline-badge-warning my-auto">Standby</span>
                                        <div class="media-body align-self-center  text-right">
                                            <span class="mb-0 font-w-600">Membership</span><br>
                                            <p class="mb-0 font-w-500 tx-s-12">Equity</p>
                                        </div>
                                        <div class="ml-auto my-auto pl-4 font-weight-bold text-right text-danger">
                                            +500<br>
                                            <small class="d-block">USD</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="p-2 border-bottom zoom">
                                    <div class="media d-flex w-100">
                                        <span class="badge outline-badge-success my-auto">Paid</span>
                                        <div class="media-body align-self-center  text-right">
                                            <span class="mb-0 font-w-600">Renewal</span><br>
                                            <p class="mb-0 font-w-500 tx-s-12">Commodity</p>
                                        </div>
                                        <div class="ml-auto my-auto pl-4 font-weight-bold text-right text-danger">
                                            +500<br>
                                            <small class="d-block">USD</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="p-2 border-bottom zoom">
                                    <div class="media d-flex w-100">
                                        <span class="badge outline-badge-danger my-auto">Hold</span>
                                        <div class="media-body align-self-center  text-right">
                                            <span class="mb-0 font-w-600">New Purchase</span><br>
                                            <p class="mb-0 font-w-500 tx-s-12">Real Estate</p>
                                        </div>
                                        <div class="ml-auto my-auto pl-4 font-weight-bold text-right text-success">
                                            +500<br>
                                            <small class="d-block">USD</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="p-2 zoom">
                                    <div class="media d-flex w-100">
                                        <span class="badge outline-badge-info my-auto">Process</span>
                                        <div class="media-body align-self-center  text-right">
                                            <span class="mb-0 font-w-600">Widrawal</span><br>
                                            <p class="mb-0 font-w-500 tx-s-12">Switch Out</p>
                                        </div>
                                        <div class="ml-auto my-auto pl-4 font-weight-bold text-right text-success">
                                            +500<br>
                                            <small class="d-block">USD</small>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8 mt-3">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="card-title">Transaction History</h6>
                    </div>
                    <div class="card-content">
                        <div class="card-body p-0 table-responsive">
                            <table class="table">

                                <tbody id="transactionHistoryTrns">
                                    <tr>
                                        <td><strong>Date</strong></td>
                                        <td><strong>Transaction Number</strong></td>
                                        <td><strong>Details</strong></td>
                                        <td><strong>Amount</strong></td>
                                    </tr>
                                    <tr class="gray zoom">
                                        <td>09/04/2020</td>
                                        <td>19999999980409299887130</td>
                                        <td>EMI FOR BT EMI  INT 18  FOR 6  005 006 </td>
                                        <td>4,600.14 (Dr)</td>
                                    </tr>
                                    <tr class="zoom">
                                        <td>09/04/2020</td>
                                        <td>19999999980409299887140</td>
                                        <td>GST</td>
                                        <td>25.03 (Dr)</td>
                                    </tr>
                                    <tr class="zoom">
                                        <td>09/04/2020</td>
                                        <td>19999999980409299887140</td>
                                        <td>EMI INT BT EMI  INT 18  FOR 6  005 006 </td>
                                        <td>139.03 (Dr)</td>
                                    </tr>
                                    <tr class="zoom">
                                        <td>08/04/2020</td>
                                        <td>09999999980408001102363</td>
                                        <td>PAYMENT RECEIVED NEFT</td>
                                        <td>35,225.00 (Cr)</td>
                                    </tr>
                                    <tr class="zoom">
                                        <td>04/04/2020</td>
                                        <td>VT200960059001300000269</td>
                                        <td>PAYTM                  NOIDA         IN</td>
                                        <td>379.00 (Dr)</td>
                                    </tr>
                                    <tr class="zoom">
                                        <td>31/03/2020</td>
                                        <td>VT200920064000540000206</td>
                                        <td>RAZ PHONEPE RECHARGE   Bangalore     IN</td>
                                        <td>98.00 (Dr)</td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- END: Card DATA-->
    </div>
</main>
@endsection