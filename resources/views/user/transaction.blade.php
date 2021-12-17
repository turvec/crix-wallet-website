@extends('layouts.app')
@section('content')
<main>
    <div class="container-fluid site-width">
        <!-- START: Breadcrumbs-->
        <div class="row">
            <div class="col-12  align-self-center">
                <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                    <div class="w-sm-100 mr-auto">
                        <h4 class="mb-0">Hello, {{ Auth::user()->name }}</h4>
                        <p>Welcome to crix mobile wallet</p>
                    </div>

                    <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                        <li class="breadcrumb-item"><a href="#">Transactions</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- END: Breadcrumbs-->

        <!-- START: Card Data-->
        <div class="row">

            <div class="col-12 col-lg-12 mt-3">
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
                                        <td><strong>Reference Number</strong></td>
                                        <td><strong>Transaction Type</strong></td>
                                        <td><strong>Amount</strong></td>
                                    </tr>
                                    @foreach ($transactions as $transaction)
                                    <tr class="gray zoom">
                                    <td>{{$transaction->created_at->format('m/d/y ')}}</td>
                                    <td>{{$transaction->reference}}</td>
                                    <td>{{$transaction->type->name}}</td>
                                    <td>{{$transaction->amount}}(CRX)</td>
                                    </tr>

                                    @endforeach
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

</div>

@endsection
