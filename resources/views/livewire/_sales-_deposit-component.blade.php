{{-- template Bagian tombol kanan yang show page  --}}
<div class="container mx-auto px-4 py-4" x-data="{ open: false }">
    <button @click="open = true" class="btn btn-primary d-flex position-fixed top-6 end-2 mt-4 mr-3">
        <span>Keranjang Belanja</span>
        <span
            class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">12</span>
    </button>

    <div class="row py-6" x-show="open" @click.away="open=false"
        x-transition:enter-start="transition ease-in duration-3000">

        <div>Haloooooo</div>

    </div>
</div>

{{-- template untuk Halaman default main hanya berfungsi responsif saja --}}
<div class="container-fluid py-4">
    <div class="row">
        {{-- didalamnya ditentukan ada berapa kolom Kolom ini adalah berbentuk ada shadow --}}
        {{-- col-12 col-xl-4     artinya pada tampilan biasa akan menggunakan 1 kolom sedangkan lebar xl menggunakan 12/4 = 3kolom --}}
        <div class="col-lg-8">
            {{-- buat card didalamnya yang memiliki tinggi sama induknya --}}
            <div class="card h-100">
                {{-- buat card header template --}}
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-0">Judul Dari card</h6>
                </div>
                <div>
                    @if (empty($salesDeposits))
                        <p>Tidak ada data Sales Deposit.</p>
                    @else
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>User ID</th>
                                    <th>Deposit At</th>
                                    <th>Status</th>
                                    <th>Deposit Amount</th>
                                    <th>Remark</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($salesDeposits as $index => $salesDeposit)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $salesDeposit->user_id }}</td>
                                        <td>{{ $salesDeposit->deposit_at }}</td>
                                        <td>{{ $salesDeposit->status }}</td>
                                        <td>{{ $salesDeposit->deposit_amount }}</td>
                                        <td>{{ $salesDeposit->remark }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{ $salesDeposits->links() }}
                        <!-- Menampilkan pagination links -->
                    @endif
                </div>
                {{-- buat bodynya card dengan contoh list group dengan radio button  --}}
                <div class="card-body p-3">
                    <h6 class="text-uppercase text-body text-xs font-weight-bolder">Judul Dari Konten Dalam Body</h6>
                    <ul class="list-group">
                        <li class="list-group-item border-0 px-0">
                            <div class="form-check form-switch ps-0">
                                <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault"
                                    checked>
                                <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                    for="flexSwitchCheckDefault">Email me when someone follows me</label>
                            </div>
                        </li>
                        <li class="list-group-item border-0 px-0">
                            <div class="form-check form-switch ps-0">
                                <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault1">
                                <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                    for="flexSwitchCheckDefault1">Email me when someone answers on my post</label>
                            </div>
                        </li>
                </div>
            </div>
        </div>
    </div>
</div>
