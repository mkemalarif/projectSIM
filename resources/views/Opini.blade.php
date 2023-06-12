{{-- @extends('partial.main')

@section('container') --}}
  @extends('partial.main')

@section('container')
    <div class="card">
        <div class="card-header">
            <h2>Judul Opini</h2>
        </div>
        <div class="card-body">
            <p>Isi dari opini...</p>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-md-6">
                    <small>Penulis: John Doe</small>
                </div>
                <div class="col-md-6 text-right">
                    <button class="btn btn-primary" id="visualizeButton">Visualisasi</button>
                </div>
            </div>
        </div>
        <div id="opinionChartContainer" style="display: none;">
            <canvas id="opinionChart" width="400" height="200"></canvas>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Data contoh
        var opinionData = {
            labels: ["Sangat Setuju", "Setuju", "Netral", "Tidak Setuju", "Sangat Tidak Setuju"],
            datasets: [{
                label: 'Opini',
                data: [12, 19, 8, 5, 2],
                backgroundColor: [
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(153, 102, 255, 0.2)'
                ],
                borderColor: [
                    'rgba(75, 192, 192, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 1
            }]
        };

        // Konfigurasi chart
        var chartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true,
                    max: 20,
                    stepSize: 5
                }
            }
        };

        // Tampilkan grafik ketika tombol "Visualisasi" diklik
        document.getElementById('visualizeButton').addEventListener('click', function() {
            document.getElementById('opinionChartContainer').style.display = 'block';

            // Inisialisasi chart
            var opinionChart = new Chart(document.getElementById('opinionChart'), {
                type: 'bar',
                data: opinionData,
                options: chartOptions
            });
        });
    </script>
@endsection
