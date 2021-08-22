<?php 


date_default_timezone_set('Europe/Istanbul');
echo date_default_timezone_get().'<br>';

$zamancek=date('d-m-Y');
setlocale(LC_TÝME, 'turkish'); setlocale(LC_ALL, 'turkish');
echo iconv ('latin5', 'utf-8', strftime(' %d %B %Y ', strtotime($zamancek))).'<br>';

$dogum=mktime(0,0,0,1,25,2000).'<br>';
echo "Dogum tarihim: ", $dogum;

echo date('d/m/Y').'<br>';
echo date('d F Y l' ,time()-3*24*60*60).'<br>';
echo date('d F Y l' ,time()+3*24*60*60).'<br>';
echo date ('d.m.y H:i:s').'<br>';





?>