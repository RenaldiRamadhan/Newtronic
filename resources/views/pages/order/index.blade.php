@extends('layout.admin')

@section('main-content')
    <!-- Page Heading -->

    
    <div class="orders">
        <div class="row">
          <div class="col-10">
            <div class="card col-12">
              <div class="card-body col-12">
                <h4 class="box-title">Daftar Cetak Tiket Antrian</h4>
              </div>
              <div class="card-body--">
                <div class="table-stats order-table ov-h">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>ID Tiket</th>
                        <th>Nama</th>
                        <th>No HP</th>
                        <th>Service</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Print and View</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse ($orders as $order)
                        <tr>
                          <td>{{ $order->id }}</td>
                          <td>{{ $order->name }}</td>
                          <td>{{ $order->phone_no }}</td>
                          <td>{{ $order->service->name }}</td>
                          <td>{{ $order->created_at->format('d-m-Y') }}</td>
                          <td>{{ $order->waktu }}</td>
                          <td>
                            <a href="{{ route('/generateInvoice') }}" class="btn btn-info btn-sm">
                              Download
                            </a>
                            <a href="{{ route('viewInvoice') }}" target="_blank" class="btn btn-warning btn-sm">
                              view
                            </a>
                          </td>
                          

                          <td>
                          </td>
                        </tr>
                      @empty
                          <tr>
                            <td colspan="3" class="text-center p-5">
                              Data tidak tersedia
                            </td>
                          </tr>
                      @endforelse
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

@endsection



