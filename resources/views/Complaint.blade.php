@extends('header')
@section('content')

<div class="breadcrumb-section breadcrumb-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 text-center">
        <div class="breadcrumb-text">
          <p></p>
          <h1>Pengaduan</h1>
        </div>
      </div>
    </div>
  </div>
</div>

	<!-- latest news -->
	<div class="latest-news mt-150 mb-150">
		<div class="container">
      <div id="form_status"></div>
      <div class="contact-form">
        <form type="POST" id="fruitkha-contact" onsubmit="return valid_datas( this );">
          <p>
            <input type="text" onkeypress="return hanyaAngka(event)" placeholder="Jumlah Barang" name="name">
            <input type="text" placeholder="Nama Barang" name="nama_barang">
            
          </p>
          <p>
          </p>
          <p><textarea cols="30" rows="10" placeholder="Deskripsi" name="deskripsi"></textarea></p>
          <div class="form-group">
            <input type="file" class="form-control-file" name="img_path">
          </div>
          <p><input type="submit" value="Submit"></p>
        </form>
      </div>

    </div>
  </div>

  <script>
    function hanyaAngka(event) {
        var angka = (event.which) ? event.which : event.keyCode
        if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
            return false;
        return true;
    }
</script>


@endsection