@extends('layouts.master')

@section('title')
    Tag
@endsection

@section('header') Tag @endsection
@section('button-add')
    <div class="section-header-button">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create-tag">Tambah Data</button>
    </div>
@endsection
@section('desc') Kumpulan data tag @endsection
@section('header-2') Tag @endsection

@section('content')

    <div class="card">
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>

            @elseif (session('gagal'))
                <div class="alert alert-danger" role="alert">
                    {{ session('gagal') }}
                </div>
            @endif
          <div class="table-responsive">
            <table class="table table-striped" id="datatag">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Slug</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                    
              </tbody>
            </table>
          </div>
        </div>
      </div>
@endsection

@push('scripts')
    <script>
    $(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Get Data Siswa
    $('#datatag').dataTable({
        dataType: "json",
        ajax: "{{ route('json_tag') }}",
        responsive:true,
        columns: [                
                { data: 'nama_tag', name: 'nama_tag' },
                { data: 'slug', name: 'slug' },
                { data: 'id', render : function (id) {
                    return `
                            <a class="btn btn-danger btn-sm hapus-data" data-id="${id}" style="color:white">Hapus</a>`;
                    }
                }
            ]
    });

    // Simpan Data
    $(".tombol-simpan").click(function (simpan) {
        simpan.preventDefault();
        var nama_tag = $("input[name=nama_tag]").val()
        // console.log(nama)
        $.ajax({
            url: "{{ route('tag.store') }}",
            method: "POST",
            dataType: "json",
            data: {
                nama_tag : nama_tag,
            },
            success: function (berhasil) {
                alert(berhasil.message)
                location.reload();
            },
            error: function (gagal) {
                console.log(gagal)
            }
        })
    })

    // Hapus Data
    $("#datatag").on('click', '.hapus-data', function () {
        var id = $(this).data("id");
        // alert(id)
        $.ajax({
            url: '/admin/tag/'+id,
            method: "DELETE",
            dataType: "json",
            data: {
                id: id
            },
            success: function (berhasil) {
                alert(berhasil.message)
                location.reload();
            },
            error: function (gagal) {
                console.log(gagal)
            }
        })
    })
})

    </script>
@endpush
@section('script')
    <script src="{{ asset('admin/assets/modules/jquery.min.js')}}"></script>
    <script src="{{ asset('admin/assets/modules/popper.js')}}"></script>
    <script src="{{ asset('admin/assets/modules/tooltip.js')}}"></script>
    <script src="{{ asset('admin/assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('admin/assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
    <script src="{{ asset('admin/assets/modules/moment.min.js')}}"></script>
    <script src="{{ asset('admin/assets/js/stisla.js')}}"></script>

    <!-- JS Libraies -->
    <script src="{{ asset('admin/assets/modules/datatables/datatables.min.js')}}"></script>
    <script src="{{ asset('admin/assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('admin/assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js')}}"></script>
    <script src="{{ asset('admin/assets/modules/jquery-ui/jquery-ui.min.js')}}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('admin/assets/js/page/modules-toastr.js') }}"></script>
    <script src="{{ asset('admin/assets/modules/izitoast/js/iziToast.min.js')}}"></script>
    <script src="{{ asset('admin/assets/js/page/modules-datatables.js')}}"></script>

    <!-- Template JS File -->
    <script src="{{ asset('admin/assets/js/scripts.js')}}"></script>
    <script src="{{ asset('admin/assets/js/custom.js')}}"></script>
@endsection

@section('css')
    <!-- General CSS Files -->
        <link rel="stylesheet" href="{{ asset('admin/assets/modules/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('admin/assets/modules/fontawesome/css/all.min.css')}}">

    <!-- CSS Libraries -->
        <link rel="stylesheet" href="{{ asset('admin/assets/modules/izitoast/css/iziToast.min.css')}}">
        <link rel="stylesheet" href="{{ asset('admin/assets/modules/datatables/datatables.min.css')}}">
        <link rel="stylesheet" href="{{ asset('admin/assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{ asset('admin/assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css')}}">

    <!-- Template CSS -->
        <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css')}}">
        <link rel="stylesheet" href="{{ asset('admin/assets/css/components.css')}}">
@endsection