function konfirmasi_reset()
{
	var konfirmasi = confirm("apakah anda yakin ingin mereset data ?")
	
	if (konfirmasi == true)
	{
		return true;
	}	
	else
	{
		return false;
	}
}

function konfirmasi_hapus()
{
	var konfirmasi = confirm("apakah anda yakin ingin menghapus data ini?")
	
	if (konfirmasi == true)
	{
		return true;
	}

	else
	{
		return false;
	}
}

function konfirmasi_kirim()
{
	var konfirmasi = confirm("apakah anda yakin ingin mengirim data ini?")

	if (konfirmasi == true)
	{
		return true;
	}

	else
	{
		return false;
	}
}

function konfirmasi_judul()
{
	document.getElementById('subject').innerHTML = 'isi judul dengan benar';
}

function konfirmasi_artikel()
{
	document.getElementById('category').innerHTML = 'pilih saqlah satu kategori';
}

function konfrimasi_konten()
{
	document.getElementById('content').innerHTML = 'silahkan isi konten';
}

function daftar_artikel()
{
	form = document.form_artikel;
	var sukses = true;

	if (form.judul.value == '')
	{	
		alert('judul wajib diisi !!!');
		sukses = false;
		return false;
	}

	if (form.kategori.value == '')
	{
		alert('pilih salah satu kategori !!!');
		sukses = false;
		return false;
	}

	if (form.konten.value == '')
	{
		alert('konten harus diisi !!!');
		sukses = false;
		return false;
	}

	if (sukses == true)
	{
		document.getElementById('judul').innerHTML = 'judul artikel : ' + form.judul.value;
		document.getElementById('kategori').innerHTML = 'kategori artikel : ' + form.kategori.value;
		document.getElementById('konten').innerHTML = 'isi artikel : ' + form.konten.value;

		return false;
	}
}