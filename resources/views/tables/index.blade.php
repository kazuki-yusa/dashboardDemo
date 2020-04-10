@extends('layouts.app')
@section('content')
<div class="container">
<h2 class="header">Analytics</h2>
<div class="card">
    <canvas id="analyticsChart"></canvas>
</div>
<div class="row">
    <div class="col s12 m6">
        <div class="card">
            <div class="card-content">
                <p class="number">50</p>
                <p class="unit">pv</p>
            </div>
        </div>
    </div>
    <div class="col s12 m6">
        <div class="card">
            <div class="card-content">
                <p class="number">50</p>
                <p class="unit">uu</p>
            </div>
        </div>
    </div>
    <div class="col s12 m6">
        <div class="card">
            <div class="card-content">
                <p class="number">50</p>
                <p class="unit">session</p>
            </div>
        </div>
    </div>
    <div class="col s12 m6">
        <div class="card">
            <div class="card-content">
                <p class="number">50</p>
                <p class="unit">cv</p>
            </div>
        </div>
    </div>
</div>
    
<h2 class="header">Searchconsole</h2>
<div class="card">
    <canvas id="searchconsoleChart"></canvas>
</div>
<div class="row">
    <div class="col s12 m6">
        <div class="card">
            <div class="card-content">
                <p class="number">50</p>
                <p class="unit">clicks</p>
            </div>
        </div>
    </div>
    <div class="col s12 m6">
        <div class="card">
            <div class="card-content">
                <p class="number">50</p>
                <p class="unit">impressions</p>
            </div>
        </div>
    </div>
    <div class="col s12 m6">
        <div class="card">
            <div class="card-content">
                <p class="number">50</p>
                <p class="unit">ctr(%)</p>
            </div>
        </div>
    </div>
    <div class="col s12 m6">
        <div class="card">
            <div class="card-content">
                <p class="number">50</p>
                <p class="unit">position(位)</p>
            </div>
        </div>
    </div>
</div>
</div>
<script>
  var ctx = document.getElementById("analyticsChart");
  var myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['8月1日', '8月2日', '8月3日', '8月4日', '8月5日', '8月6日', '8月7日'],
      datasets: [
        {
          label: 'pv',
          data: [35, 34, 37, 35, 34, 35, 34, 100],
          borderColor: "rgba(255,0,0,1)",
          backgroundColor: "rgba(0,0,0,0)"
        },
        {
          label: 'uu',
          data: [25, 27, 27, 25, 26, 27, 25, 21],
          borderColor: "rgba(0,0,255,1)",
          backgroundColor: "rgba(0,0,0,0)"
        },
        {
          label: 'session',
          data: [25, 27, 27, 25, 26, 27, 25, 30],
          borderColor: "rgba(255, 206, 86, 1)",
          backgroundColor: "rgba(0,0,0,0)"
        },
        {
          label: 'cv',
          data: [25, 27, 27, 25, 26, 27, 25, 120],
          borderColor: "rgba(75, 192, 192, 1)",
          backgroundColor: "rgba(0,0,0,0)"
        }
      ],
    },
  });
  </script>
  <script>
  var ctx = document.getElementById("searchconsoleChart");
  var myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['8月1日', '8月2日', '8月3日', '8月4日', '8月5日', '8月6日', '8月7日'],
      datasets: [
        {
          label: 'clicks',
          data: [35, 34, 37, 35, 34, 35, 34, 100],
          borderColor: "rgba(255,0,0,1)",
          backgroundColor: "rgba(0,0,0,0)"
        },
        {
          label: 'impressions',
          data: [25, 27, 27, 25, 26, 27, 25, 21],
          borderColor: "rgba(0,0,255,1)",
          backgroundColor: "rgba(0,0,0,0)"
        },
        {
          label: 'ctr',
          data: [25, 27, 27, 25, 26, 27, 25, 30],
          borderColor: "rgba(255, 206, 86, 1)",
          backgroundColor: "rgba(0,0,0,0)"
        },
        {
          label: 'position',
          data: [25, 27, 27, 25, 26, 27, 25, 120],
          borderColor: "rgba(75, 192, 192, 1)",
          backgroundColor: "rgba(0,0,0,0)"
        }
      ],
    },
  });
  </script>
@endsection
