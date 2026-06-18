<!DOCTYPE html>
<html>
<head>
    <title>Pesan Baru dari Web Portfolio</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; margin: 0; padding: 0; background-color: #f4f4f5; }
        .container { padding: 20px; max-width: 600px; margin: 30px auto; border: 1px solid #ddd; border-radius: 8px; background: white; box-shadow: 0 4px 6px rgba(0,0,0,0.05); }
        .header { background: #e11d48; color: white; padding: 20px; text-align: center; font-size: 22px; font-weight: bold; border-radius: 8px 8px 0 0; margin: -20px -20px 20px -20px; }
        .content { padding: 10px; }
        .field { margin-bottom: 20px; }
        .label { font-weight: bold; color: #555; text-transform: uppercase; font-size: 12px; letter-spacing: 1px; margin-bottom: 5px; }
        .value { padding: 12px; background: #f8fafc; border-radius: 6px; border: 1px solid #e2e8f0; font-size: 15px; }
        .footer { margin-top: 30px; text-align: center; font-size: 12px; color: #94a3b8; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            🚀 Pesan Baru dari Web Portfolio
        </div>
        <div class="content">
            <div class="field">
                <div class="label">Nama Pengirim</div>
                <div class="value">{{ $messageData->name }}</div>
            </div>
            <div class="field">
                <div class="label">Alamat Email</div>
                <div class="value"><a href="mailto:{{ $messageData->email }}" style="color: #e11d48; text-decoration: none; font-weight: bold;">{{ $messageData->email }}</a></div>
            </div>
            <div class="field">
                <div class="label">Subjek</div>
                <div class="value">{{ $messageData->subject ?? '-' }}</div>
            </div>
            <div class="field">
                <div class="label">Isi Pesan</div>
                <div class="value" style="white-space: pre-wrap;">{{ $messageData->content }}</div>
            </div>
        </div>
        <div class="footer">
            Pesan ini dikirim secara otomatis dari form kontak di website yakubfirman.id.
            <br>
            Untuk membalas, cukup tekan "Reply" pada email ini (email akan langsung tertuju ke pengirim).
        </div>
    </div>
</body>
</html>
