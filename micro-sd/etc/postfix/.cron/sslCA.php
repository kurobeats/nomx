<?php
$filename = '/etc/ssl/certs/cacert.pem';

if(file_exists($filename))
{
        exit();
}
else
{
        $createCA = "openssl req -x509 -nodes -days 3650 -sha256 -newkey rsa:2048 -keyout /etc/ssl/private/cakey.pem -out /etc/ssl/certs/cacert.pem -subj \"/C=US/ST=Conus and OConus/L=Somewhere USA/CN=test\" ";
        $hostname = gethostname();
        exec ($createCA);
	exec ("postfix reload");
}
?>
