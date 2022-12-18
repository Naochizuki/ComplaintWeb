Halo Admin ComplaintWeb
<br><br>
Anda mendapatkan pengaduan hak asasi manusia dari {{ $details['nama'] }}@if ($details['gender'] == 'laki-laki' or $details['gender'] == 'perempuan')
    seorang {{ $details['gender'] }}
@endif yang berumur {{ $details['umur'] }} tahun dan bertempat tinggal di {{ $details['alamat'] }}.
<br><br>
Berikut keluhan yang ia sampaikan:
<br>
"<pre>
{{ $details['deskripsi'] }}
</pre>"
<br><br>
Harap segera berikan tanggapan atau saran ke {{ $details['email'] }}, terima kasih.