@extends('layout.app')

@section('title','Dashboard')
    
@section('content')
<h5 class="pb-1 mb-4">Pemeliharaan</h5>

            <div class="row mb-5">
              
              <div class="col-lg-8 mb-4">
                
                <div class="card h-100">
                  <img class="card-img-top" src="../assets/img/elements/terongg.jpg" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title text-primary">Minggu ke 2 🍀</h5>
                    <h5 class="card-title">Perempelan</h5>
                    <p class="card-text" style="text-align: justify;">
                      Perempelan merupakan sebuah Teknik pemangkasan tunas pada tanaman yang bertujuan untuk mempercepat proses pembuahan tanaman melalui proses fertilasi.
                      <br>a.	Pangkas bagian pucuk percabangan
                      <br>b.	Pangkas pucuk setelah tanaman memiliki 12 helai daun
                      <br>c.	Pemangkasan dilakukan bila tanaman tumbuh cukup subur

                    </p>
                  </div>
                </div>
                
                
              </div>

              <div class="col-md-6 col-lg-4">
                <div class="card mb-4">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Pemilihan_Tanaman.html">Penilihan Varietas</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Penyemaian.html">Penyemaian</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Persiapan_Lahan.html">Persiapan Lahan</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Penanaman.html">Penanaman</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Pemeliharaan.html">Pemeliharaan</a></b></li>                   
                  </ul>
                </div>
              </div>
              
            </div>
@endsection