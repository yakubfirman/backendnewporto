<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pesan Baru dari Web Portofolio</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            line-height: 1.6;
            color: #1e293b;
            margin: 0;
            padding: 0;
            background-color: #f1f5f9;
        }
        .wrapper {
            padding: 40px 20px;
            width: 100%;
            box-sizing: border-box;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }
        .header {
            background-color: #0f172a; /* Warna gelap identik website */
            border-top: 6px solid #e11d48; /* Garis aksen merah utama */
            padding: 30px 40px;
            text-align: center;
        }
        .header h1 {
            color: #ffffff;
            margin: 0;
            font-size: 24px;
            font-weight: 600;
            letter-spacing: 0.5px;
        }
        .content {
            padding: 40px;
        }
        .greeting {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 25px;
            color: #0f172a;
        }
        .info-card {
            background-color: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 6px;
            padding: 20px;
            margin-bottom: 30px;
        }
        .info-row {
            margin-bottom: 15px;
        }
        .info-row:last-child {
            margin-bottom: 0;
        }
        .info-label {
            font-size: 12px;
            text-transform: uppercase;
            font-weight: 700;
            color: #64748b;
            letter-spacing: 0.5px;
            margin-bottom: 4px;
        }
        .info-value {
            font-size: 16px;
            color: #0f172a;
            font-weight: 500;
        }
        .info-value a {
            color: #e11d48;
            text-decoration: none;
        }
        .message-box {
            margin-top: 10px;
        }
        .message-label {
            font-size: 14px;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 15px;
            border-bottom: 2px solid #f1f5f9;
            padding-bottom: 10px;
        }
        .message-content {
            font-size: 15px;
            color: #334155;
            white-space: pre-wrap;
            line-height: 1.8;
            background-color: #ffffff;
            border-left: 4px solid #e11d48; /* Aksen kutipan */
            padding: 15px 20px;
            font-style: italic;
        }
        .footer {
            background-color: #f8fafc;
            padding: 20px 40px;
            text-align: center;
            border-top: 1px solid #e2e8f0;
        }
        .footer p {
            margin: 0;
            font-size: 13px;
            color: #64748b;
        }
        .btn-reply {
            display: inline-block;
            background-color: #e11d48;
            color: #ffffff !important;
            text-decoration: none;
            padding: 14px 32px;
            border-radius: 6px;
            font-weight: 600;
            font-size: 15px;
            margin-top: 35px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="header">
                <h1>yakubfirman.id</h1>
            </div>
            
            <div class="content">
                <div class="greeting">Halo! Anda mendapat pesan baru.</div>
                
                <div class="info-card">
                    <div class="info-row">
                        <div class="info-label">Nama Pengirim</div>
                        <div class="info-value">{{ $messageData->name }}</div>
                    </div>
                    <div class="info-row">
                        <div class="info-label">Email Kontak</div>
                        <div class="info-value">
                            <a href="mailto:{{ $messageData->email }}">{{ $messageData->email }}</a>
                        </div>
                    </div>
                    <div class="info-row">
                        <div class="info-label">Subjek</div>
                        <div class="info-value">{{ $messageData->subject ?? 'Tidak ada subjek' }}</div>
                    </div>
                </div>

                <div class="message-box">
                    <div class="message-label">Isi Pesan:</div>
                    <div class="message-content">{{ $messageData->content }}</div>
                </div>

                <div style="text-align: center;">
                    <a href="mailto:{{ $messageData->email }}?subject=Re: {{ $messageData->subject ?? 'Pesan dari Portofolio' }}" class="btn-reply">
                        Balas Email Ini
                    </a>
                </div>
            </div>
            
            <div class="footer">
                <p>Pesan ini dikirim secara otomatis melalui formulir kontak di <strong>yakubfirman.id</strong>.</p>
                <p style="margin-top: 8px;">Detail dan riwayat pesan juga tersimpan dengan aman di panel admin.</p>
            </div>
        </div>
    </div>
</body>
</html>
