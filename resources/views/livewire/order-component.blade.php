<div>
    <div class="container mx-auto px-4 py-2" x-data="{ open: false }">
        <div class="">
            <button @click="open = true" class="btn btn-primary d-flex position-fixed top-6 end-2 mt-4 mr-3">
                <span>Buka Keranjang Order</span>
                <span
                    class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">{{ count($tempOrders) }}</span>
            </button>
        </div>
        <div class="row py-2" x-show="open" @click.away="open=false"
            x-transition:enter-start="transition ease-in duration-3000">
            <div class="col-xl-6 col-6-12 col-md-12  mb-xl-0 mb-4 mt-4">
                <div class="card mb-2">
                    <h1 class="text-uppercase text-secondary font-weight-bolder opacity-7 p-4">
                        Deposit : Rp.
                        {{-- {{ number_format($deposit, 0, ',', '.') }} --}}
                        {{ number_format($deposit, 0, ',', '.') }}
                    </h1>
                </div>
            </div>
            <div class="card">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="w-25 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Item
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Price</th>
                                <th
                                    class="w-10 text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Qty</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Total</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">

                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $sumtotal = 0;
                            @endphp
                            @foreach ($tempOrders as $key => $order)
                                <tr>
                                    <td>
                                        <small>{{ $order['product']['name'] }}</small>
                                    </td>
                                    <td class="align-middle text-center">
                                        <small>{{ number_format($order['price'], 0, ',', '.') }}</small>
                                    </td>
                                    <td class="align-middle text-center">
                                        <input type="number" wire:model.defer="tempOrders.{{ $key }}.quantity"
                                            class="form-control">
                                    </td>
                                    <td class="align-middle text-right">
                                        <small>{{ number_format($order['total_price'], 0, ',', '.') }}</small>
                                        {{-- {{ number_format($product->price, 0, ',', '.') }} --}}
                                    </td>
                                    <td class="align-middle text-center">
                                        <button wire:click="updateOrder({{ $order['id'] }})"
                                            class="btn btn-success">Save</button>
                                    </td>
                                    <td class="align-middle text-center">
                                        <button wire:click="deleteOrder({{ $order['id'] }})"
                                            class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                                @php
                                    $sumtotal += $order['total_price'];
                                @endphp
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <td style="border-top:1px solid #8a40f1;">
                                </td>
                                <td style="text-align: left; border-top:1px solid #8a40f1 ;">
                                    Total Belanja
                                </td>
                                <td style="border-top:1px solid #8a40f1;">
                                </td>
                                <td style="text-align: right;border-top:1px solid #8a40f1; ">
                                    {{ number_format($sumtotal, 0, ',', '.') }}
                                </td>
                                <td style="border-top:1px solid #8a40f1 ;">
                                </td>
                            </tr>

                        </tfoot>
                    </table>
                    <div class="btn btn-icon btn-2 btn-primary" type="button" wire:click="paymentVerified"
                        style=" margin-top:1rem;background: linear-gradient(to right, #ff00f2, #8a40f1); margin-left:1rem">
                        CheckOut Payment
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-6-12 col-md-12  mb-xl-0 mb-4 mt-4">
                <div class="card">
                </div>
            </div>
        </div>



    </div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

</div>
