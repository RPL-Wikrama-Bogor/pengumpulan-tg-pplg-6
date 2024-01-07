<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bukti Pembelian</title>
    <style>
  #back-wrap {
    margin: 30px auto 0 auto;
    width: 500px;
    text-align: right;
}

.btn-back {
    width: fit-content;
    padding: 8px 15px;
    color: #666;
    border-radius: 5px;
    text-decoration: none;
}

.container {
    border: 1px solid rgba(128, 128, 128, 0.466);
    padding: 20px;
    margin: 20px auto 100px auto;
    background: #fff;
}

#content {
    display: table;
    width: 100%;
}

.cont-info {
    margin-top: 13px;
    margin-left: 17px;
    width: 400px;
}

.cont-contact {
    margin-left: auto; /* Menggeser ke kanan dengan margin-left: auto */
    text-align: right;
}

.tanggal {
    display: table;
    width: 100%;
}

.head-let {
    margin: 21px 25px;
    text-align: right;
}

.hrmt-kami {
    margin-top: 40px;
    text-align: right;
}

/* Penyesuaian tambahan */
#content > div {
    display: table-cell;
    vertical-align: top;
}

.main-content {
    margin: 40px 25px;
}

.peserta {
    margin-top: 32px;
}

.peserta ol {
    margin: 0;
    padding: 0;
    list-style: none;
}

.hrmt-kami p {
    margin: 0;
}

.hr-1 {
    height: 1px;
    border: none;
    background-color: black;
    margin: 10px 0;
    font-weight: bold;
}
    </style>
</head>
<body>

    <div id="receipt">
        <center id="top">
            <div class="info">
                <h2>Apotek Jaya Abadi</h2>
            </div>
        </center>
        <div id="mid">
            <div class="info">
                <p>
                    Alamat : ------ <br>
                    Email : apotekjayaabadi@gmail.com<br>
                    Phone : 000-111-2222<br>
                </p>
            </div>
        </div>
        <div id="bot">
            <div id="table">
                <table>
                    <tr class="tabletitle">
                        <td class="item">
                            <h2>Obat</h2>
                        </td>
                        <td class="item">
                            <h2>Total</h2>
                        </td>
                        <td class="Rate">
                            <h2>Harga</h2>
                        </td>

                    </tr>
                    @foreach ($order['medicines'] as $medicine)
                        <tr class="service">
                            <td class="tableitem">
                                <p class="itemtext">{{ $medicine['name_medicine'] }}</p>
                            </td>
                            <td class="tableitem">
                                <p class="itemtext">{{ $medicine['qty'] }}</p>
                            </td>
                            <td class="tableitem">
                                <p class="itemtext">Rp. {{ number_format($medicine['price'],0,',','.') }}</p>
                            </td>
                        </tr>
                    @endforeach
                    <tr class="tabletitle">
                        <td></td>
                        <td class="Rate">
                            <h2>PPN (10%)</h2>
                        </td>
                        @php
                            $ppn = $order['total_price'] * 0.01;
                        @endphp
                        <td class="payment">
                            <h2>Rp. {{ number_format($ppn, 0,',','.') }}</h2>
                        </td>
                    </tr>
                    <tr class="tabletitle">
                        <td></td>
                        <td class="Rate">
                            <h2>Total Harga</h2>
                        </td>
                        <td class="payment">
                            <h2>Rp.{{ number_format($order['total_price'], 0,',','.') }}</h2>
                        </td>
                    </tr>
                </table>
            </div>
            <div id="legalcopy">
                <p class="legal">
                    <strong>Terima kasih atas pembelian Anda</strong>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem dolores dolorem exercitationem iure quibusdam sequi asperiores ipsam odit neque dolorum.
                </p>
            </div>
        </div>
    </div>
</body>
</html>