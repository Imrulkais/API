<html>
    <head>

    </head>
    <body>
        <form action="<?php echo base_url();?>CSRFController/Csrfinsert" method="post" accept-charset="utf-8">
            <div style="display:none">
                <input type="hidden" name="token" value="<?php echo $token; ?>">
            </div>
            
            <?php echo $token;?><br>
            <?php echo $this->session->userdata('now');?>
            <input type="text" name="email" />
            <input type="password" name="password" />
            <input type="submit" name="submit" value="Submit" /> 
        </form>

    </body>

</html>

