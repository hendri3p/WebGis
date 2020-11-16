<html>
<head>
	
</head>
<body>
    <div style="padding: 5px 30px;">
        
        <hr />

		<?php echo form_open('Email/send', ['method'=>'post', 'enctype'=>'multipart/form-data']) ?>
            
            <div style="margin-bottom: 10px;">
                <label>Subjek</label><br />
                <input type="text" name="subjek" placeholder="Subjek" style="margin-top: 5px;width: 500px" />
            </div>
            <div style="margin-bottom: 10px;">
                <label>Pesan</label><br />
                <textarea name="pesan" placeholder="Pesan" rows="8" style="margin-top: 5px;width: 500px"></textarea>
            </div>
            <div style="margin-bottom: 20px;">
                <label>Attachment</label><br />
                <input type="file" name="attachment" style="margin-top: 5px;width: 400px" />
            </div>

            <hr />
            <button type="submit">KIRIM EMAIL</button>
        <?php echo form_close() ?>
    </div>
</body>
</html>
