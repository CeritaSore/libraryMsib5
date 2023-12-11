@extends('backend.index')
@section('content')
<div class="content-wrapper ">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome @if (empty(Auth::user()->name))
                            @else
                                {{ Auth::user()->name }}
                            @endif
                  </h3>
                </div>
              </div>
            </div>
          </div>
          {{-- Total Buku --}}
          <div class="row">
            <div class="col-md-10 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                      <div class="card-body">
                      <p class="mb-4">Total Buku</p>
                      <p class="fs-30 mb-2">{{ $ar_buku }} <span class="text-warning small pt-1 fw-bold">Buku</span></p>
                      
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Total Kategori</p>
                      <p class="fs-30 mb-2">{{ $ar_kategori }} <span class="text-warning small pt-1 fw-bold">Kategori</span></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">Total Pengarang</p>
                      <p class="fs-30 mb-2">{{ $ar_pengarang }} <span class="text-warning small pt-1 fw-bold">Pengarang</span></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">Total Penerbit</p>
                      <p class="fs-30 mb-2">{{ $ar_penerbit }} <span class="text-warning small pt-1 fw-bold">Penerbit</span></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Grafik Jumlah Kategori Buku</h5>
                    <!-- Bar Chart -->
                    <canvas id="barChart" style="max-height: 400px;"></canvas>
                    <script>
                        //ambil data nama kategori dan jumlah asset per asset dari DashboardController di fungsi index
                        var lbl = [@foreach($grafik_bar as $gb) '{{ $gb->listkategori }}', @endforeach];
                        var jml = [@foreach($grafik_bar as $gb) {{ $gb->jml }}, @endforeach];
                        document.addEventListener("DOMContentLoaded", () => {
                            new Chart(document.querySelector('#barChart'), {
                                type: 'bar',
                                data: {
                                    
                                    labels: lbl,
                                    datasets: [{
                                        label: 'Perbandingan Jumlah Asset',
                                    
                                        data: jml,
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(255, 159, 64, 0.2)',
                                            'rgba(255, 205, 86, 0.2)',
                                            'rgba(75, 192, 192, 0.2)',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(153, 102, 255, 0.2)',
                                            'rgba(201, 203, 207, 0.2)'
                                        ],
                                        borderColor: [
                                            'rgb(255, 99, 132)',
                                            'rgb(255, 159, 64)',
                                            'rgb(255, 205, 86)',
                                            'rgb(75, 192, 192)',
                                            'rgb(54, 162, 235)',
                                            'rgb(153, 102, 255)',
                                            'rgb(201, 203, 207)'
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            });
                        });
                    </script>
                </div>
              </div>
            </div>
          </div>
        </div>
          
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Advanced Table</p>
                  <div class="row">
                    <div class="col-12">
                      <div class="table-responsive">
                        <table id="example" class="display expandable-table" style="width:100%">
                          <thead>
                            <tr>
                                <td>#</td>
                                <td>Judul Buku</td>
                                <td>Nama Pengarang</td>
                                <td>Nama Penerbit</td>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($data_buku as $buku)
                            <tr>
                                <td>{{ $buku->id_buku }}</td>
                                <td>{{ $buku->judul_buku }}</td>
                                <td>{{ $buku->nama_pengarang }}</td>
                                <td>{{ $buku->nama_penerbit }}</td>
                            </tr>
                          @endforeach
                          </tbody>
                      </table>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
@endsection