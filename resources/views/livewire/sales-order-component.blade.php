<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12 col-xl-12">
            <!-- Tampilkan pesan alert jika showAlert bernilai true -->
            @if ($showAlert)
                <div class="alert alert-{{ $alertType }}">
                    {{ $alertMessage }}
                </div>
            @endif
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <h3 class="mb-2 Text-lg fw-bold">Verifikasi Penyelesaian Order</h3>
                </div>
                <div class="card-body p-3">
                    <h5 class="text-uppercase text-body text-xs font-weight-bolder mb-3 fw-bold">Data Order :</h5>
                    @foreach ($salesOrders as $salesOrder)
                        <p class="text-gradient text-dark mb-1 text-sm">Nomor Order : </p>

                        <p class="text-gradient text-dark mb-1 text-base fw-bold">
                            {{ $salesOrder->order_number }}</p>
                        <p class="text-gradient text-dark mb-1 text-sm">Tanggal : </p>
                        <p class="text-gradient text-dark mb-1 text-base fw-bold"> {{ $salesOrder->order_at }}</p>
                        <p class="text-gradient text-dark mb-1 text-sm">Status : </p>
                        <p class="text-gradient text-dark mb-1 text-base fw-bold"> {{ $salesOrder->status }}</p>
                        {{-- <p>Remark : {{ $salesOrder->remark }}</p> --}}
                        {{-- <p>Catatan : {{ $salesOrder->notes }}</p> --}}
                        <p class="text-gradient text-dark mb-1 text-sm">Total Transaksi
                            :</p>
                        <p class="text-gradient text-dark mb-1 text-base fw-bold">
                            {{ number_format($salesOrder->total_transaction, 0, ',', '.') }}</p>

                        <p class="text-gradient text-dark mb-1 text-sm">Saldo Deposit
                            : </p>

                        <p class="text-gradient text-dark mb-2 text-base fw-bold">
                            {{ number_format($salesOrder->user->agent->deposit, 0, ',', '.') }}</p>
                        <div class="input-group mb-4" class="width:50%">
                            <span class="input-group-text">Buat Catatan :</span>
                            <input type="text" aria-label="" aria-describedby="" wire:model.defer="notes"
                                {{ $disableInputNotes ? 'disabled' : '' }}>
                        </div>

                        <table>
                            <thead>
                                <tr class="table-info">
                                    <th scope="col" class="col-4 text-gradient text-dark text-left">Produk</th>
                                    <th scope="col" class="col-2 text-gradient text-dark text-right">Harga</th>
                                    <th scope="col" class="col-2 text-gradient text-dark text-right">Biaya Handling
                                    </th>
                                    <th scope="col" class="col-2 text-gradient text-dark text-right">Quantity</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($salesOrder->itemOrder as $itemOrder)
                                    <tr>
                                        <td class="text-left">

                                            <p>{{ $itemOrder->product->name }}</p>

                                        </td>
                                        <td class="text-right">
                                            <p>{{ number_format($itemOrder->price, 0, ',', '.') }}</p>

                                        </td>
                                        <td class="text-right">
                                            <p>{{ number_format($itemOrder->cost, 0, ',', '.') }}</p>

                                        </td>
                                        <td class="text-right">
                                            <p>{{ number_format($itemOrder->quantity, 0, ',', '.') }}</p>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="p-3 mb-5 mt-4">
                            <button wire:click="process" wire:loading.attr="disabled"
                                {{ $disableProcessButton ? 'disabled' : '' }} class="btn btn-primary">
                                Setuju Dilanjutkan
                            </button>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
