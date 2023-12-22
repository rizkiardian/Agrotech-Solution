@extends('layout.app')

@section('title','Dashboard')
    
@section('content')
<h5 class="pb-1 mb-4">Pemeliharaan</h5>

            <div class="row mb-5">
              
              <div class="col-lg-8 mb-4">
                
                <div class="card h-100">
                  <img class="card-img-top" src="../assets/img/elements/siang_hijau.jpg" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title text-primary">Penyiangan🍀</h5>
                    <h5 class="card-title"></h5>
                    <p class="card-text" style="text-align: justify;">
                      Penyiangan adalah kegiatan yang perlu dilakukan untuk membersihkan gulma dan rumput liar disekitar tanaman kacang yang dapat mengganggu dan menghambat pertumbuhan. Penyiangan perlu dilakukan sedini mungkin karena tanaman kacang hijau merupakan tanaman yang tidak tahan terhadap gulma. Penyiangan dianjurkan dilakukan setelah 14 hari setelah tanam dan 30-40 hari (±4 minggu) setelah masa tanam secara rutin. Disamping itu, untuk menekan pertumbuhan serangan hama lalat bibit, pertumbuhan gulma, dan penguapan air dapat menggunakan jerami padi sebagai mulsa.
                    </p>
                  </div>
                </div>
                
                
              </div>

              <div class="col-md-6 col-lg-4">
                <div class="card mb-4">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Pemilihan_Tanaman.html">Pemilihan Tanaman</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Persiapan_lahan.html">Persiapan Lahan</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Pembibitan.html">Pembibitan</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Penanaman.html">Penanaman</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Pemeliharaan.html">Pemeliharaan</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Pengendalian_hama_penyakit.html">Pengendalian hama & penyakit</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="panen.html">Panen</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="pasca_panen.html">Pasca panen</a></b></li>
                  </ul>
                </div>
              </div>
              
            </div>
@endsection