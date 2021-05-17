<?php 
include('ajaxconfig.php');
$bc=1;
$mbc=1;
$sc=1;
$st=1;
$obc=1;
$dnc=1;
$others=1;

if(isset($_POST['Bc']))		
{	
$bc=$_POST['Bc'];
}
if(isset($_POST['Mbc']))		
{
$mbc=$_POST['Mbc'];
}
if(isset($_POST['Sc']))		
{
$sc=$_POST['Sc'];
}
if(isset($_POST['St']))		
{
$st=$_POST['St'];
}
if(isset($_POST['Obc']))		
{
$obc=$_POST['Obc'];
}
if(isset($_POST['Dnc']))		
{
$dnc=$_POST['Dnc'];
}
if(isset($_POST['Others']))		
{
$others=$_POST['Others'];
}


$query = "SELECT distinct (SELECT count(studentid) from student where standard='LKG') AS 'totallkg', 
(SELECT count(studentid) as totalukg from student where standard='UKG') AS 'totalukg',
(SELECT count(studentid) as totalI from student where standard='I') AS 'totalI',
(SELECT count(studentid) as totalII from student where standard='II') AS 'totalII',
(SELECT count(studentid) as totalIII from student where standard='III') AS 'totalIII',
(SELECT count(studentid) as totalIV from student where standard='IV') AS 'totalIV',
(SELECT count(studentid) as totalV from student where standard='V') AS 'totalV',
(SELECT count(studentid) as totalVI from student where standard='VI') AS 'totalVI',
(SELECT count(studentid) as totalVII from student where standard='VII') AS 'totalVII',
(SELECT count(studentid) as totalVIII from student where standard='VIII') AS 'totalVIII',
(SELECT count(studentid) as totalIX from student where standard='IX') AS 'totalIX',
(SELECT count(studentid) as totalX from student where standard='X') AS 'totalX',
(SELECT count(studentid) as totalXI from student where standard='XI') AS 'totalXI',
(SELECT count(studentid) as totalXII from student where standard='XII') AS 'totalXII',

(SELECT count(studentid) as hindubcboyslkg from student where standard='LKG' AND gender='Male' AND religion='Hindu' AND category='BC' ) AS 'hindubcboyslkg',
(SELECT count(studentid) as hindubcboysukg from student where standard='UKG' AND gender='Male' AND religion='Hindu' AND category='BC' ) AS 'hindubcboysukg',
(SELECT count(studentid) as hindubcboysI from student where standard='I' AND gender='Male' AND religion='Hindu' AND category='BC' )     AS 'hindubcboysI',
(SELECT count(studentid) as hindubcboysII from student where standard='II' AND gender='Male' AND religion='Hindu' AND category='BC' )   AS 'hindubcboysII',
(SELECT count(studentid) as hindubcboysIII from student where standard='III' AND gender='Male' AND religion='Hindu' AND category='BC')  AS 'hindubcboysIII',
(SELECT count(studentid) as hindubcboysIV from student where standard='IV' AND gender='Male' AND religion='Hindu' AND category='BC')    AS 'hindubcboysIV',
(SELECT count(studentid) as hindubcboysV from student where standard='V' AND gender='Male' AND religion='Hindu' AND category='BC' )     AS 'hindubcboysV',
(SELECT count(studentid) as hindubcboysVI from student where standard='VI' AND gender='Male' AND religion='Hindu' AND category='BC' )   AS 'hindubcboysVI',
(SELECT count(studentid) as hindubcboysVII from student where standard='VII' AND gender='Male' AND religion='Hindu' AND category='BC' ) AS 'hindubcboysVII',
(SELECT count(studentid) as hindubcboysVIII from student where standard='VIII' AND gender='Male' AND religion='Hindu' AND category='BC')AS 'hindubcboysVIII',
(SELECT count(studentid) as hindubcboysIX from student where standard='IX' AND gender='Male' AND religion='Hindu' AND category='BC' )   AS 'hindubcboysIX',
(SELECT count(studentid) as hindubcboysX from student where standard='X' AND gender='Male' AND religion='Hindu' AND category='BC' )     AS 'hindubcboysX',
(SELECT count(studentid) as hindubcboysXI from student where standard='XI' AND gender='Male' AND religion='Hindu' AND category='BC')    AS 'hindubcboysXI',
(SELECT count(studentid) as hindubcboysXII from student where standard='XII' AND gender='Male' AND religion='Hindu' AND category='BC' ) AS 'hindubcboysXII',

(SELECT count(studentid) as hindubcgirlslkg from student where standard='LKG' AND gender='FeMale' AND religion='Hindu' AND category='BC' ) AS 'hindubcgirlslkg',
(SELECT count(studentid) as hindubcgirlsukg from student where standard='UKG' AND gender='FeMale' AND religion='Hindu' AND category='BC' ) AS 'hindubcgirlsukg',
(SELECT count(studentid) as hindubcgirlsI from student where standard='I' AND gender='FeMale' AND religion='Hindu' AND category='BC' )     AS 'hindubcgirlsI',
(SELECT count(studentid) as hindubcgirlsII from student where standard='II' AND gender='FeMale' AND religion='Hindu' AND category='BC' )   AS 'hindubcgirlsII',
(SELECT count(studentid) as hindubcgirlsIII from student where standard='III' AND gender='FeMale' AND religion='Hindu' AND category='BC')  AS 'hindubcgirlsIII',
(SELECT count(studentid) as hindubcgirlsIV from student where standard='IV' AND gender='FeMale' AND religion='Hindu' AND category='BC')    AS 'hindubcgirlsIV',
(SELECT count(studentid) as hindubcgirlsV from student where standard='V' AND gender='FeMale' AND religion='Hindu' AND category='BC' )     AS 'hindubcgirlsV',
(SELECT count(studentid) as hindubcgirlsVI from student where standard='VI' AND gender='FeMale' AND religion='Hindu' AND category='BC' )   AS 'hindubcgirlsVI',
(SELECT count(studentid) as hindubcgirlsVII from student where standard='VII' AND gender='FeMale' AND religion='Hindu' AND category='BC' ) AS 'hindubcgirlsVII',
(SELECT count(studentid) as hindubcgirlsVIII from student where standard='VIII' AND gender='FeMale' AND religion='Hindu' AND category='BC')AS 'hindubcgirlsVIII',
(SELECT count(studentid) as hindubcgirlsIX from student where standard='IX' AND gender='FeMale' AND religion='Hindu' AND category='BC' )   AS 'hindubcgirlsIX',
(SELECT count(studentid) as hindubcgirlsX from student where standard='X' AND gender='FeMale' AND religion='Hindu' AND category='BC' )     AS 'hindubcgirlsX',
(SELECT count(studentid) as hindubcgirlsXI from student where standard='XI' AND gender='FeMale' AND religion='Hindu' AND category='BC')    AS 'hindubcgirlsXI',
(SELECT count(studentid) as hindubcgirlsXII from student where standard='XII' AND gender='FeMale' AND religion='Hindu' AND category='BC' ) AS 'hindubcgirlsXII',

(SELECT count(studentid) as Muslimbcboyslkg from student where standard='LKG' AND gender='Male' AND religion='Muslim' AND category='BC' ) AS 'Muslimbcboyslkg',
(SELECT count(studentid) as Muslimbcboysukg from student where standard='UKG' AND gender='Male' AND religion='Muslim' AND category='BC' ) AS 'Muslimbcboysukg',
(SELECT count(studentid) as MuslimbcboysI from student where standard='I' AND gender='Male' AND religion='Muslim' AND category='BC' )     AS 'MuslimbcboysI',
(SELECT count(studentid) as MuslimbcboysII from student where standard='II' AND gender='Male' AND religion='Muslim' AND category='BC' )   AS 'MuslimbcboysII',
(SELECT count(studentid) as MuslimbcboysIII from student where standard='III' AND gender='Male' AND religion='Muslim' AND category='BC')  AS 'MuslimbcboysIII',
(SELECT count(studentid) as MuslimbcboysIV from student where standard='IV' AND gender='Male' AND religion='Muslim' AND category='BC')    AS 'MuslimbcboysIV',
(SELECT count(studentid) as MuslimbcboysV from student where standard='V' AND gender='Male' AND religion='Muslim' AND category='BC' )     AS 'MuslimbcboysV',
(SELECT count(studentid) as MuslimbcboysVI from student where standard='VI' AND gender='Male' AND religion='Muslim' AND category='BC' )   AS 'MuslimbcboysVI',
(SELECT count(studentid) as MuslimbcboysVII from student where standard='VII' AND gender='Male' AND religion='Muslim' AND category='BC' ) AS 'MuslimbcboysVII',
(SELECT count(studentid) as MuslimbcboysVIII from student where standard='VIII' AND gender='Male' AND religion='Muslim' AND category='BC')AS 'MuslimbcboysVIII',
(SELECT count(studentid) as MuslimbcboysIX from student where standard='IX' AND gender='Male' AND religion='Muslim' AND category='BC' )   AS 'MuslimbcboysIX',
(SELECT count(studentid) as MuslimbcboysX from student where standard='X' AND gender='Male' AND religion='Muslim' AND category='BC' )     AS 'MuslimbcboysX',
(SELECT count(studentid) as MuslimbcboysXI from student where standard='XI' AND gender='Male' AND religion='Muslim' AND category='BC')    AS 'MuslimbcboysXI',
(SELECT count(studentid) as MuslimbcboysXII from student where standard='XII' AND gender='Male' AND religion='Muslim' AND category='BC' ) AS 'MuslimbcboysXII',

(SELECT count(studentid) as Muslimbcgirlslkg from student where standard='LKG' AND gender='FeMale' AND religion='Muslim' AND category='BC' ) AS 'Muslimbcgirlslkg',
(SELECT count(studentid) as Muslimbcgirlsukg from student where standard='UKG' AND gender='FeMale' AND religion='Muslim' AND category='BC' ) AS 'Muslimbcgirlsukg',
(SELECT count(studentid) as MuslimbcgirlsI from student where standard='I' AND gender='FeMale' AND religion='Muslim' AND category='BC' )     AS 'MuslimbcgirlsI',
(SELECT count(studentid) as MuslimbcgirlsII from student where standard='II' AND gender='FeMale' AND religion='Muslim' AND category='BC' )   AS 'MuslimbcgirlsII',
(SELECT count(studentid) as MuslimbcgirlsIII from student where standard='III' AND gender='FeMale' AND religion='Muslim' AND category='BC')  AS 'MuslimbcgirlsIII',
(SELECT count(studentid) as MuslimbcgirlsIV from student where standard='IV' AND gender='FeMale' AND religion='Muslim' AND category='BC')    AS 'MuslimbcgirlsIV',
(SELECT count(studentid) as MuslimbcgirlsV from student where standard='V' AND gender='FeMale' AND religion='Muslim' AND category='BC' )     AS 'MuslimbcgirlsV',
(SELECT count(studentid) as MuslimbcgirlsVI from student where standard='VI' AND gender='FeMale' AND religion='Muslim' AND category='BC' )   AS 'MuslimbcgirlsVI',
(SELECT count(studentid) as MuslimbcgirlsVII from student where standard='VII' AND gender='FeMale' AND religion='Muslim' AND category='BC' ) AS 'MuslimbcgirlsVII',
(SELECT count(studentid) as MuslimbcgirlsVIII from student where standard='VIII' AND gender='FeMale' AND religion='Muslim' AND category='BC')AS 'MuslimbcgirlsVIII',
(SELECT count(studentid) as MuslimbcgirlsIX from student where standard='IX' AND gender='FeMale' AND religion='Muslim' AND category='BC' )   AS 'MuslimbcgirlsIX',
(SELECT count(studentid) as MuslimbcgirlsX from student where standard='X' AND gender='FeMale' AND religion='Muslim' AND category='BC' )     AS 'MuslimbcgirlsX',
(SELECT count(studentid) as MuslimbcgirlsXI from student where standard='XI' AND gender='FeMale' AND religion='Muslim' AND category='BC')    AS 'MuslimbcgirlsXI',
(SELECT count(studentid) as MuslimbcgirlsXII from student where standard='XII' AND gender='FeMale' AND religion='Muslim' AND category='BC' ) AS 'MuslimbcgirlsXII',

(SELECT count(studentid) as Christianbcboyslkg from student where standard='LKG' AND gender='Male' AND religion='Christian' AND category='BC' ) AS 'Christianbcboyslkg',
(SELECT count(studentid) as Christianbcboysukg from student where standard='UKG' AND gender='Male' AND religion='Christian' AND category='BC' ) AS 'Christianbcboysukg',
(SELECT count(studentid) as ChristianbcboysI from student where standard='I' AND gender='Male' AND religion='Christian' AND category='BC' )     AS 'ChristianbcboysI',
(SELECT count(studentid) as ChristianbcboysII from student where standard='II' AND gender='Male' AND religion='Christian' AND category='BC' )   AS 'ChristianbcboysII',
(SELECT count(studentid) as ChristianbcboysIII from student where standard='III' AND gender='Male' AND religion='Christian' AND category='BC')  AS 'ChristianbcboysIII',
(SELECT count(studentid) as ChristianbcboysIV from student where standard='IV' AND gender='Male' AND religion='Christian' AND category='BC')    AS 'ChristianbcboysIV',
(SELECT count(studentid) as ChristianbcboysV from student where standard='V' AND gender='Male' AND religion='Christian' AND category='BC' )     AS 'ChristianbcboysV',
(SELECT count(studentid) as ChristianbcboysVI from student where standard='VI' AND gender='Male' AND religion='Christian' AND category='BC' )   AS 'ChristianbcboysVI',
(SELECT count(studentid) as ChristianbcboysVII from student where standard='VII' AND gender='Male' AND religion='Christian' AND category='BC' ) AS 'ChristianbcboysVII',
(SELECT count(studentid) as ChristianbcboysVIII from student where standard='VIII' AND gender='Male' AND religion='Christian' AND category='BC')AS 'ChristianbcboysVIII',
(SELECT count(studentid) as ChristianbcboysIX from student where standard='IX' AND gender='Male' AND religion='Christian' AND category='BC' )   AS 'ChristianbcboysIX',
(SELECT count(studentid) as ChristianbcboysX from student where standard='X' AND gender='Male' AND religion='Christian' AND category='BC' )     AS 'ChristianbcboysX',
(SELECT count(studentid) as ChristianbcboysXI from student where standard='XI' AND gender='Male' AND religion='Christian' AND category='BC')    AS 'ChristianbcboysXI',
(SELECT count(studentid) as ChristianbcboysXII from student where standard='XII' AND gender='Male' AND religion='Christian' AND category='BC' ) AS 'ChristianbcboysXII',

(SELECT count(studentid) as Christianbcgirlslkg from student where standard='LKG' AND gender='FeMale' AND religion='Christian' AND category='BC' ) AS 'Christianbcgirlslkg',
(SELECT count(studentid) as Christianbcgirlsukg from student where standard='UKG' AND gender='FeMale' AND religion='Christian' AND category='BC' ) AS 'Christianbcgirlsukg',
(SELECT count(studentid) as ChristianbcgirlsI from student where standard='I' AND gender='FeMale' AND religion='Christian' AND category='BC' )     AS 'ChristianbcgirlsI',
(SELECT count(studentid) as ChristianbcgirlsII from student where standard='II' AND gender='FeMale' AND religion='Christian' AND category='BC' )   AS 'ChristianbcgirlsII',
(SELECT count(studentid) as ChristianbcgirlsIII from student where standard='III' AND gender='FeMale' AND religion='Christian' AND category='BC')  AS 'ChristianbcgirlsIII',
(SELECT count(studentid) as ChristianbcgirlsIV from student where standard='IV' AND gender='FeMale' AND religion='Christian' AND category='BC')    AS 'ChristianbcgirlsIV',
(SELECT count(studentid) as ChristianbcgirlsV from student where standard='V' AND gender='FeMale' AND religion='Christian' AND category='BC' )     AS 'ChristianbcgirlsV',
(SELECT count(studentid) as ChristianbcgirlsVI from student where standard='VI' AND gender='FeMale' AND religion='Christian' AND category='BC' )   AS 'ChristianbcgirlsVI',
(SELECT count(studentid) as ChristianbcgirlsVII from student where standard='VII' AND gender='FeMale' AND religion='Christian' AND category='BC' ) AS 'ChristianbcgirlsVII',
(SELECT count(studentid) as ChristianbcgirlsVIII from student where standard='VIII' AND gender='FeMale' AND religion='Christian' AND category='BC')AS 'ChristianbcgirlsVIII',
(SELECT count(studentid) as ChristianbcgirlsIX from student where standard='IX' AND gender='FeMale' AND religion='Christian' AND category='BC' )   AS 'ChristianbcgirlsIX',
(SELECT count(studentid) as ChristianbcgirlsX from student where standard='X' AND gender='FeMale' AND religion='Christian' AND category='BC' )     AS 'ChristianbcgirlsX',
(SELECT count(studentid) as ChristianbcgirlsXI from student where standard='XI' AND gender='FeMale' AND religion='Christian' AND category='BC')    AS 'ChristianbcgirlsXI',
(SELECT count(studentid) as ChristianbcgirlsXII from student where standard='XII' AND gender='FeMale' AND religion='Christian' AND category='BC' ) AS 'ChristianbcgirlsXII',

(SELECT count(studentid) as hinduMBCboyslkg from student where standard='LKG' AND gender='Male' AND religion='Hindu' AND category='MBC' ) AS 'hinduMBCboyslkg',
(SELECT count(studentid) as hinduMBCboysukg from student where standard='UKG' AND gender='Male' AND religion='Hindu' AND category='MBC' ) AS 'hinduMBCboysukg',
(SELECT count(studentid) as hinduMBCboysI from student where standard='I' AND gender='Male' AND religion='Hindu' AND category='MBC' )     AS 'hinduMBCboysI',
(SELECT count(studentid) as hinduMBCboysII from student where standard='II' AND gender='Male' AND religion='Hindu' AND category='MBC' )   AS 'hinduMBCboysII',
(SELECT count(studentid) as hinduMBCboysIII from student where standard='III' AND gender='Male' AND religion='Hindu' AND category='MBC')  AS 'hinduMBCboysIII',
(SELECT count(studentid) as hinduMBCboysIV from student where standard='IV' AND gender='Male' AND religion='Hindu' AND category='MBC')    AS 'hinduMBCboysIV',
(SELECT count(studentid) as hinduMBCboysV from student where standard='V' AND gender='Male' AND religion='Hindu' AND category='MBC' )     AS 'hinduMBCboysV',
(SELECT count(studentid) as hinduMBCboysVI from student where standard='VI' AND gender='Male' AND religion='Hindu' AND category='MBC' )   AS 'hinduMBCboysVI',
(SELECT count(studentid) as hinduMBCboysVII from student where standard='VII' AND gender='Male' AND religion='Hindu' AND category='MBC' ) AS 'hinduMBCboysVII',
(SELECT count(studentid) as hinduMBCboysVIII from student where standard='VIII' AND gender='Male' AND religion='Hindu' AND category='MBC')AS 'hinduMBCboysVIII',
(SELECT count(studentid) as hinduMBCboysIX from student where standard='IX' AND gender='Male' AND religion='Hindu' AND category='MBC' )   AS 'hinduMBCboysIX',
(SELECT count(studentid) as hinduMBCboysX from student where standard='X' AND gender='Male' AND religion='Hindu' AND category='MBC' )     AS 'hinduMBCboysX',
(SELECT count(studentid) as hinduMBCboysXI from student where standard='XI' AND gender='Male' AND religion='Hindu' AND category='MBC')    AS 'hinduMBCboysXI',
(SELECT count(studentid) as hinduMBCboysXII from student where standard='XII' AND gender='Male' AND religion='Hindu' AND category='MBC' ) AS 'hinduMBCboysXII',

(SELECT count(studentid) as hinduMBCgirlslkg from student where standard='LKG' AND gender='FeMale' AND religion='Hindu' AND category='MBC' ) AS 'hinduMBCgirlslkg',
(SELECT count(studentid) as hinduMBCgirlsukg from student where standard='UKG' AND gender='FeMale' AND religion='Hindu' AND category='MBC' ) AS 'hinduMBCgirlsukg',
(SELECT count(studentid) as hinduMBCgirlsI from student where standard='I' AND gender='FeMale' AND religion='Hindu' AND category='MBC' )     AS 'hinduMBCgirlsI',
(SELECT count(studentid) as hinduMBCgirlsII from student where standard='II' AND gender='FeMale' AND religion='Hindu' AND category='MBC' )   AS 'hinduMBCgirlsII',
(SELECT count(studentid) as hinduMBCgirlsIII from student where standard='III' AND gender='FeMale' AND religion='Hindu' AND category='MBC')  AS 'hinduMBCgirlsIII',
(SELECT count(studentid) as hinduMBCgirlsIV from student where standard='IV' AND gender='FeMale' AND religion='Hindu' AND category='MBC')    AS 'hinduMBCgirlsIV',
(SELECT count(studentid) as hinduMBCgirlsV from student where standard='V' AND gender='FeMale' AND religion='Hindu' AND category='MBC' )     AS 'hinduMBCgirlsV',
(SELECT count(studentid) as hinduMBCgirlsVI from student where standard='VI' AND gender='FeMale' AND religion='Hindu' AND category='MBC' )   AS 'hinduMBCgirlsVI',
(SELECT count(studentid) as hinduMBCgirlsVII from student where standard='VII' AND gender='FeMale' AND religion='Hindu' AND category='MBC' ) AS 'hinduMBCgirlsVII',
(SELECT count(studentid) as hinduMBCgirlsVIII from student where standard='VIII' AND gender='FeMale' AND religion='Hindu' AND category='MBC')AS 'hinduMBCgirlsVIII',
(SELECT count(studentid) as hinduMBCgirlsIX from student where standard='IX' AND gender='FeMale' AND religion='Hindu' AND category='MBC' )   AS 'hinduMBCgirlsIX',
(SELECT count(studentid) as hinduMBCgirlsX from student where standard='X' AND gender='FeMale' AND religion='Hindu' AND category='MBC' )     AS 'hinduMBCgirlsX',
(SELECT count(studentid) as hinduMBCgirlsXI from student where standard='XI' AND gender='FeMale' AND religion='Hindu' AND category='MBC')    AS 'hinduMBCgirlsXI',
(SELECT count(studentid) as hinduMBCgirlsXII from student where standard='XII' AND gender='FeMale' AND religion='Hindu' AND category='MBC' ) AS 'hinduMBCgirlsXII',

(SELECT count(studentid) as MuslimMBCboyslkg from student where standard='LKG' AND gender='Male' AND religion='Muslim' AND category='MBC' ) AS 'MuslimMBCboyslkg',
(SELECT count(studentid) as MuslimMBCboysukg from student where standard='UKG' AND gender='Male' AND religion='Muslim' AND category='MBC' ) AS 'MuslimMBCboysukg',
(SELECT count(studentid) as MuslimMBCboysI from student where standard='I' AND gender='Male' AND religion='Muslim' AND category='MBC' )     AS 'MuslimMBCboysI',
(SELECT count(studentid) as MuslimMBCboysII from student where standard='II' AND gender='Male' AND religion='Muslim' AND category='MBC' )   AS 'MuslimMBCboysII',
(SELECT count(studentid) as MuslimMBCboysIII from student where standard='III' AND gender='Male' AND religion='Muslim' AND category='MBC')  AS 'MuslimMBCboysIII',
(SELECT count(studentid) as MuslimMBCboysIV from student where standard='IV' AND gender='Male' AND religion='Muslim' AND category='MBC')    AS 'MuslimMBCboysIV',
(SELECT count(studentid) as MuslimMBCboysV from student where standard='V' AND gender='Male' AND religion='Muslim' AND category='MBC' )     AS 'MuslimMBCboysV',
(SELECT count(studentid) as MuslimMBCboysVI from student where standard='VI' AND gender='Male' AND religion='Muslim' AND category='MBC' )   AS 'MuslimMBCboysVI',
(SELECT count(studentid) as MuslimMBCboysVII from student where standard='VII' AND gender='Male' AND religion='Muslim' AND category='MBC' ) AS 'MuslimMBCboysVII',
(SELECT count(studentid) as MuslimMBCboysVIII from student where standard='VIII' AND gender='Male' AND religion='Muslim' AND category='MBC')AS 'MuslimMBCboysVIII',
(SELECT count(studentid) as MuslimMBCboysIX from student where standard='IX' AND gender='Male' AND religion='Muslim' AND category='MBC' )   AS 'MuslimMBCboysIX',
(SELECT count(studentid) as MuslimMBCboysX from student where standard='X' AND gender='Male' AND religion='Muslim' AND category='MBC' )     AS 'MuslimMBCboysX',
(SELECT count(studentid) as MuslimMBCboysXI from student where standard='XI' AND gender='Male' AND religion='Muslim' AND category='MBC')    AS 'MuslimMBCboysXI',
(SELECT count(studentid) as MuslimMBCboysXII from student where standard='XII' AND gender='Male' AND religion='Muslim' AND category='MBC' ) AS 'MuslimMBCboysXII',

(SELECT count(studentid) as MuslimMBCgirlslkg from student where standard='LKG' AND gender='FeMale' AND religion='Muslim' AND category='MBC' ) AS 'MuslimMBCgirlslkg',
(SELECT count(studentid) as MuslimMBCgirlsukg from student where standard='UKG' AND gender='FeMale' AND religion='Muslim' AND category='MBC' ) AS 'MuslimMBCgirlsukg',
(SELECT count(studentid) as MuslimMBCgirlsI from student where standard='I' AND gender='FeMale' AND religion='Muslim' AND category='MBC' )     AS 'MuslimMBCgirlsI',
(SELECT count(studentid) as MuslimMBCgirlsII from student where standard='II' AND gender='FeMale' AND religion='Muslim' AND category='MBC' )   AS 'MuslimMBCgirlsII',
(SELECT count(studentid) as MuslimMBCgirlsIII from student where standard='III' AND gender='FeMale' AND religion='Muslim' AND category='MBC')  AS 'MuslimMBCgirlsIII',
(SELECT count(studentid) as MuslimMBCgirlsIV from student where standard='IV' AND gender='FeMale' AND religion='Muslim' AND category='MBC')    AS 'MuslimMBCgirlsIV',
(SELECT count(studentid) as MuslimMBCgirlsV from student where standard='V' AND gender='FeMale' AND religion='Muslim' AND category='MBC' )     AS 'MuslimMBCgirlsV',
(SELECT count(studentid) as MuslimMBCgirlsVI from student where standard='VI' AND gender='FeMale' AND religion='Muslim' AND category='MBC' )   AS 'MuslimMBCgirlsVI',
(SELECT count(studentid) as MuslimMBCgirlsVII from student where standard='VII' AND gender='FeMale' AND religion='Muslim' AND category='MBC' ) AS 'MuslimMBCgirlsVII',
(SELECT count(studentid) as MuslimMBCgirlsVIII from student where standard='VIII' AND gender='FeMale' AND religion='Muslim' AND category='MBC')AS 'MuslimMBCgirlsVIII',
(SELECT count(studentid) as MuslimMBCgirlsIX from student where standard='IX' AND gender='FeMale' AND religion='Muslim' AND category='MBC' )   AS 'MuslimMBCgirlsIX',
(SELECT count(studentid) as MuslimMBCgirlsX from student where standard='X' AND gender='FeMale' AND religion='Muslim' AND category='MBC' )     AS 'MuslimMBCgirlsX',
(SELECT count(studentid) as MuslimMBCgirlsXI from student where standard='XI' AND gender='FeMale' AND religion='Muslim' AND category='MBC')    AS 'MuslimMBCgirlsXI',
(SELECT count(studentid) as MuslimMBCgirlsXII from student where standard='XII' AND gender='FeMale' AND religion='Muslim' AND category='MBC' ) AS 'MuslimMBCgirlsXII',

(SELECT count(studentid) as ChristianMBCboyslkg from student where standard='LKG' AND gender='Male' AND religion='Christian' AND category='MBC' ) AS 'ChristianMBCboyslkg',
(SELECT count(studentid) as ChristianMBCboysukg from student where standard='UKG' AND gender='Male' AND religion='Christian' AND category='MBC' ) AS 'ChristianMBCboysukg',
(SELECT count(studentid) as ChristianMBCboysI from student where standard='I' AND gender='Male' AND religion='Christian' AND category='MBC' )     AS 'ChristianMBCboysI',
(SELECT count(studentid) as ChristianMBCboysII from student where standard='II' AND gender='Male' AND religion='Christian' AND category='MBC' )   AS 'ChristianMBCboysII',
(SELECT count(studentid) as ChristianMBCboysIII from student where standard='III' AND gender='Male' AND religion='Christian' AND category='MBC')  AS 'ChristianMBCboysIII',
(SELECT count(studentid) as ChristianMBCboysIV from student where standard='IV' AND gender='Male' AND religion='Christian' AND category='MBC')    AS 'ChristianMBCboysIV',
(SELECT count(studentid) as ChristianMBCboysV from student where standard='V' AND gender='Male' AND religion='Christian' AND category='MBC' )     AS 'ChristianMBCboysV',
(SELECT count(studentid) as ChristianMBCboysVI from student where standard='VI' AND gender='Male' AND religion='Christian' AND category='MBC' )   AS 'ChristianMBCboysVI',
(SELECT count(studentid) as ChristianMBCboysVII from student where standard='VII' AND gender='Male' AND religion='Christian' AND category='MBC' ) AS 'ChristianMBCboysVII',
(SELECT count(studentid) as ChristianMBCboysVIII from student where standard='VIII' AND gender='Male' AND religion='Christian' AND category='MBC')AS 'ChristianMBCboysVIII',
(SELECT count(studentid) as ChristianMBCboysIX from student where standard='IX' AND gender='Male' AND religion='Christian' AND category='MBC' )   AS 'ChristianMBCboysIX',
(SELECT count(studentid) as ChristianMBCboysX from student where standard='X' AND gender='Male' AND religion='Christian' AND category='MBC' )     AS 'ChristianMBCboysX',
(SELECT count(studentid) as ChristianMBCboysXI from student where standard='XI' AND gender='Male' AND religion='Christian' AND category='MBC')    AS 'ChristianMBCboysXI',
(SELECT count(studentid) as ChristianMBCboysXII from student where standard='XII' AND gender='Male' AND religion='Christian' AND category='MBC' ) AS 'ChristianMBCboysXII',

(SELECT count(studentid) as ChristianMBCgirlslkg from student where standard='LKG' AND gender='FeMale' AND religion='Christian' AND category='MBC' ) AS 'ChristianMBCgirlslkg',
(SELECT count(studentid) as ChristianMBCgirlsukg from student where standard='UKG' AND gender='FeMale' AND religion='Christian' AND category='MBC' ) AS 'ChristianMBCgirlsukg',
(SELECT count(studentid) as ChristianMBCgirlsI from student where standard='I' AND gender='FeMale' AND religion='Christian' AND category='MBC' )     AS 'ChristianMBCgirlsI',
(SELECT count(studentid) as ChristianMBCgirlsII from student where standard='II' AND gender='FeMale' AND religion='Christian' AND category='MBC' )   AS 'ChristianMBCgirlsII',
(SELECT count(studentid) as ChristianMBCgirlsIII from student where standard='III' AND gender='FeMale' AND religion='Christian' AND category='MBC')  AS 'ChristianMBCgirlsIII',
(SELECT count(studentid) as ChristianMBCgirlsIV from student where standard='IV' AND gender='FeMale' AND religion='Christian' AND category='MBC')    AS 'ChristianMBCgirlsIV',
(SELECT count(studentid) as ChristianMBCgirlsV from student where standard='V' AND gender='FeMale' AND religion='Christian' AND category='MBC' )     AS 'ChristianMBCgirlsV',
(SELECT count(studentid) as ChristianMBCgirlsVI from student where standard='VI' AND gender='FeMale' AND religion='Christian' AND category='MBC' )   AS 'ChristianMBCgirlsVI',
(SELECT count(studentid) as ChristianMBCgirlsVII from student where standard='VII' AND gender='FeMale' AND religion='Christian' AND category='MBC' ) AS 'ChristianMBCgirlsVII',
(SELECT count(studentid) as ChristianMBCgirlsVIII from student where standard='VIII' AND gender='FeMale' AND religion='Christian' AND category='MBC')AS 'ChristianMBCgirlsVIII',
(SELECT count(studentid) as ChristianMBCgirlsIX from student where standard='IX' AND gender='FeMale' AND religion='Christian' AND category='MBC' )   AS 'ChristianMBCgirlsIX',
(SELECT count(studentid) as ChristianMBCgirlsX from student where standard='X' AND gender='FeMale' AND religion='Christian' AND category='MBC' )     AS 'ChristianMBCgirlsX',
(SELECT count(studentid) as ChristianMBCgirlsXI from student where standard='XI' AND gender='FeMale' AND religion='Christian' AND category='MBC')    AS 'ChristianMBCgirlsXI',
(SELECT count(studentid) as ChristianMBCgirlsXII from student where standard='XII' AND gender='FeMale' AND religion='Christian' AND category='MBC' ) AS 'ChristianMBCgirlsXII',

(SELECT count(studentid) as hinduSCboyslkg from student where standard='LKG' AND gender='Male' AND religion='Hindu' AND category='SC' ) AS 'hinduSCboyslkg',
(SELECT count(studentid) as hinduSCboysukg from student where standard='UKG' AND gender='Male' AND religion='Hindu' AND category='SC' ) AS 'hinduSCboysukg',
(SELECT count(studentid) as hinduSCboysI from student where standard='I' AND gender='Male' AND religion='Hindu' AND category='SC' )     AS 'hinduSCboysI',
(SELECT count(studentid) as hinduSCboysII from student where standard='II' AND gender='Male' AND religion='Hindu' AND category='SC' )   AS 'hinduSCboysII',
(SELECT count(studentid) as hinduSCboysIII from student where standard='III' AND gender='Male' AND religion='Hindu' AND category='SC')  AS 'hinduSCboysIII',
(SELECT count(studentid) as hinduSCboysIV from student where standard='IV' AND gender='Male' AND religion='Hindu' AND category='SC')    AS 'hinduSCboysIV',
(SELECT count(studentid) as hinduSCboysV from student where standard='V' AND gender='Male' AND religion='Hindu' AND category='SC' )     AS 'hinduSCboysV',
(SELECT count(studentid) as hinduSCboysVI from student where standard='VI' AND gender='Male' AND religion='Hindu' AND category='SC' )   AS 'hinduSCboysVI',
(SELECT count(studentid) as hinduSCboysVII from student where standard='VII' AND gender='Male' AND religion='Hindu' AND category='SC' ) AS 'hinduSCboysVII',
(SELECT count(studentid) as hinduSCboysVIII from student where standard='VIII' AND gender='Male' AND religion='Hindu' AND category='SC')AS 'hinduSCboysVIII',
(SELECT count(studentid) as hinduSCboysIX from student where standard='IX' AND gender='Male' AND religion='Hindu' AND category='SC' )   AS 'hinduSCboysIX',
(SELECT count(studentid) as hinduSCboysX from student where standard='X' AND gender='Male' AND religion='Hindu' AND category='SC' )     AS 'hinduSCboysX',
(SELECT count(studentid) as hinduSCboysXI from student where standard='XI' AND gender='Male' AND religion='Hindu' AND category='SC')    AS 'hinduSCboysXI',
(SELECT count(studentid) as hinduSCboysXII from student where standard='XII' AND gender='Male' AND religion='Hindu' AND category='SC' ) AS 'hinduSCboysXII',

(SELECT count(studentid) as hinduSCgirlslkg from student where standard='LKG' AND gender='FeMale' AND religion='Hindu' AND category='SC' ) AS 'hinduSCgirlslkg',
(SELECT count(studentid) as hinduSCgirlsukg from student where standard='UKG' AND gender='FeMale' AND religion='Hindu' AND category='SC' ) AS 'hinduSCgirlsukg',
(SELECT count(studentid) as hinduSCgirlsI from student where standard='I' AND gender='FeMale' AND religion='Hindu' AND category='SC' )     AS 'hinduSCgirlsI',
(SELECT count(studentid) as hinduSCgirlsII from student where standard='II' AND gender='FeMale' AND religion='Hindu' AND category='SC' )   AS 'hinduSCgirlsII',
(SELECT count(studentid) as hinduSCgirlsIII from student where standard='III' AND gender='FeMale' AND religion='Hindu' AND category='SC')  AS 'hinduSCgirlsIII',
(SELECT count(studentid) as hinduSCgirlsIV from student where standard='IV' AND gender='FeMale' AND religion='Hindu' AND category='SC')    AS 'hinduSCgirlsIV',
(SELECT count(studentid) as hinduSCgirlsV from student where standard='V' AND gender='FeMale' AND religion='Hindu' AND category='SC' )     AS 'hinduSCgirlsV',
(SELECT count(studentid) as hinduSCgirlsVI from student where standard='VI' AND gender='FeMale' AND religion='Hindu' AND category='SC' )   AS 'hinduSCgirlsVI',
(SELECT count(studentid) as hinduSCgirlsVII from student where standard='VII' AND gender='FeMale' AND religion='Hindu' AND category='SC' ) AS 'hinduSCgirlsVII',
(SELECT count(studentid) as hinduSCgirlsVIII from student where standard='VIII' AND gender='FeMale' AND religion='Hindu' AND category='SC')AS 'hinduSCgirlsVIII',
(SELECT count(studentid) as hinduSCgirlsIX from student where standard='IX' AND gender='FeMale' AND religion='Hindu' AND category='SC' )   AS 'hinduSCgirlsIX',
(SELECT count(studentid) as hinduSCgirlsX from student where standard='X' AND gender='FeMale' AND religion='Hindu' AND category='SC' )     AS 'hinduSCgirlsX',
(SELECT count(studentid) as hinduSCgirlsXI from student where standard='XI' AND gender='FeMale' AND religion='Hindu' AND category='SC')    AS 'hinduSCgirlsXI',
(SELECT count(studentid) as hinduSCgirlsXII from student where standard='XII' AND gender='FeMale' AND religion='Hindu' AND category='SC' ) AS 'hinduSCgirlsXII',

(SELECT count(studentid) as MuslimSCboyslkg from student where standard='LKG' AND gender='Male' AND religion='Muslim' AND category='SC' ) AS 'MuslimSCboyslkg',
(SELECT count(studentid) as MuslimSCboysukg from student where standard='UKG' AND gender='Male' AND religion='Muslim' AND category='SC' ) AS 'MuslimSCboysukg',
(SELECT count(studentid) as MuslimSCboysI from student where standard='I' AND gender='Male' AND religion='Muslim' AND category='SC' )     AS 'MuslimSCboysI',
(SELECT count(studentid) as MuslimSCboysII from student where standard='II' AND gender='Male' AND religion='Muslim' AND category='SC' )   AS 'MuslimSCboysII',
(SELECT count(studentid) as MuslimSCboysIII from student where standard='III' AND gender='Male' AND religion='Muslim' AND category='SC')  AS 'MuslimSCboysIII',
(SELECT count(studentid) as MuslimSCboysIV from student where standard='IV' AND gender='Male' AND religion='Muslim' AND category='SC')    AS 'MuslimSCboysIV',
(SELECT count(studentid) as MuslimSCboysV from student where standard='V' AND gender='Male' AND religion='Muslim' AND category='SC' )     AS 'MuslimSCboysV',
(SELECT count(studentid) as MuslimSCboysVI from student where standard='VI' AND gender='Male' AND religion='Muslim' AND category='SC' )   AS 'MuslimSCboysVI',
(SELECT count(studentid) as MuslimSCboysVII from student where standard='VII' AND gender='Male' AND religion='Muslim' AND category='SC' ) AS 'MuslimSCboysVII',
(SELECT count(studentid) as MuslimSCboysVIII from student where standard='VIII' AND gender='Male' AND religion='Muslim' AND category='SC')AS 'MuslimSCboysVIII',
(SELECT count(studentid) as MuslimSCboysIX from student where standard='IX' AND gender='Male' AND religion='Muslim' AND category='SC' )   AS 'MuslimSCboysIX',
(SELECT count(studentid) as MuslimSCboysX from student where standard='X' AND gender='Male' AND religion='Muslim' AND category='SC' )     AS 'MuslimSCboysX',
(SELECT count(studentid) as MuslimSCboysXI from student where standard='XI' AND gender='Male' AND religion='Muslim' AND category='SC')    AS 'MuslimSCboysXI',
(SELECT count(studentid) as MuslimSCboysXII from student where standard='XII' AND gender='Male' AND religion='Muslim' AND category='SC' ) AS 'MuslimSCboysXII',

(SELECT count(studentid) as MuslimSCgirlslkg from student where standard='LKG' AND gender='FeMale' AND religion='Muslim' AND category='SC' ) AS 'MuslimSCgirlslkg',
(SELECT count(studentid) as MuslimSCgirlsukg from student where standard='UKG' AND gender='FeMale' AND religion='Muslim' AND category='SC' ) AS 'MuslimSCgirlsukg',
(SELECT count(studentid) as MuslimSCgirlsI from student where standard='I' AND gender='FeMale' AND religion='Muslim' AND category='SC' )     AS 'MuslimSCgirlsI',
(SELECT count(studentid) as MuslimSCgirlsII from student where standard='II' AND gender='FeMale' AND religion='Muslim' AND category='SC' )   AS 'MuslimSCgirlsII',
(SELECT count(studentid) as MuslimSCgirlsIII from student where standard='III' AND gender='FeMale' AND religion='Muslim' AND category='SC')  AS 'MuslimSCgirlsIII',
(SELECT count(studentid) as MuslimSCgirlsIV from student where standard='IV' AND gender='FeMale' AND religion='Muslim' AND category='SC')    AS 'MuslimSCgirlsIV',
(SELECT count(studentid) as MuslimSCgirlsV from student where standard='V' AND gender='FeMale' AND religion='Muslim' AND category='SC' )     AS 'MuslimSCgirlsV',
(SELECT count(studentid) as MuslimSCgirlsVI from student where standard='VI' AND gender='FeMale' AND religion='Muslim' AND category='SC' )   AS 'MuslimSCgirlsVI',
(SELECT count(studentid) as MuslimSCgirlsVII from student where standard='VII' AND gender='FeMale' AND religion='Muslim' AND category='SC' ) AS 'MuslimSCgirlsVII',
(SELECT count(studentid) as MuslimSCgirlsVIII from student where standard='VIII' AND gender='FeMale' AND religion='Muslim' AND category='SC')AS 'MuslimSCgirlsVIII',
(SELECT count(studentid) as MuslimSCgirlsIX from student where standard='IX' AND gender='FeMale' AND religion='Muslim' AND category='SC' )   AS 'MuslimSCgirlsIX',
(SELECT count(studentid) as MuslimSCgirlsX from student where standard='X' AND gender='FeMale' AND religion='Muslim' AND category='SC' )     AS 'MuslimSCgirlsX',
(SELECT count(studentid) as MuslimSCgirlsXI from student where standard='XI' AND gender='FeMale' AND religion='Muslim' AND category='SC')    AS 'MuslimSCgirlsXI',
(SELECT count(studentid) as MuslimSCgirlsXII from student where standard='XII' AND gender='FeMale' AND religion='Muslim' AND category='SC' ) AS 'MuslimSCgirlsXII',

(SELECT count(studentid) as ChristianSCboyslkg from student where standard='LKG' AND gender='Male' AND religion='Christian' AND category='SC' ) AS 'ChristianSCboyslkg',
(SELECT count(studentid) as ChristianSCboysukg from student where standard='UKG' AND gender='Male' AND religion='Christian' AND category='SC' ) AS 'ChristianSCboysukg',
(SELECT count(studentid) as ChristianSCboysI from student where standard='I' AND gender='Male' AND religion='Christian' AND category='SC' )     AS 'ChristianSCboysI',
(SELECT count(studentid) as ChristianSCboysII from student where standard='II' AND gender='Male' AND religion='Christian' AND category='SC' )   AS 'ChristianSCboysII',
(SELECT count(studentid) as ChristianSCboysIII from student where standard='III' AND gender='Male' AND religion='Christian' AND category='SC')  AS 'ChristianSCboysIII',
(SELECT count(studentid) as ChristianSCboysIV from student where standard='IV' AND gender='Male' AND religion='Christian' AND category='SC')    AS 'ChristianSCboysIV',
(SELECT count(studentid) as ChristianSCboysV from student where standard='V' AND gender='Male' AND religion='Christian' AND category='SC' )     AS 'ChristianSCboysV',
(SELECT count(studentid) as ChristianSCboysVI from student where standard='VI' AND gender='Male' AND religion='Christian' AND category='SC' )   AS 'ChristianSCboysVI',
(SELECT count(studentid) as ChristianSCboysVII from student where standard='VII' AND gender='Male' AND religion='Christian' AND category='SC' ) AS 'ChristianSCboysVII',
(SELECT count(studentid) as ChristianSCboysVIII from student where standard='VIII' AND gender='Male' AND religion='Christian' AND category='SC')AS 'ChristianSCboysVIII',
(SELECT count(studentid) as ChristianSCboysIX from student where standard='IX' AND gender='Male' AND religion='Christian' AND category='SC' )   AS 'ChristianSCboysIX',
(SELECT count(studentid) as ChristianSCboysX from student where standard='X' AND gender='Male' AND religion='Christian' AND category='SC' )     AS 'ChristianSCboysX',
(SELECT count(studentid) as ChristianSCboysXI from student where standard='XI' AND gender='Male' AND religion='Christian' AND category='SC')    AS 'ChristianSCboysXI',
(SELECT count(studentid) as ChristianSCboysXII from student where standard='XII' AND gender='Male' AND religion='Christian' AND category='SC' ) AS 'ChristianSCboysXII',

(SELECT count(studentid) as ChristianSCgirlslkg from student where standard='LKG' AND gender='FeMale' AND religion='Christian' AND category='SC' ) AS 'ChristianSCgirlslkg',
(SELECT count(studentid) as ChristianSCgirlsukg from student where standard='UKG' AND gender='FeMale' AND religion='Christian' AND category='SC' ) AS 'ChristianSCgirlsukg',
(SELECT count(studentid) as ChristianSCgirlsI from student where standard='I' AND gender='FeMale' AND religion='Christian' AND category='SC' )     AS 'ChristianSCgirlsI',
(SELECT count(studentid) as ChristianSCgirlsII from student where standard='II' AND gender='FeMale' AND religion='Christian' AND category='SC' )   AS 'ChristianSCgirlsII',
(SELECT count(studentid) as ChristianSCgirlsIII from student where standard='III' AND gender='FeMale' AND religion='Christian' AND category='SC')  AS 'ChristianSCgirlsIII',
(SELECT count(studentid) as ChristianSCgirlsIV from student where standard='IV' AND gender='FeMale' AND religion='Christian' AND category='SC')    AS 'ChristianSCgirlsIV',
(SELECT count(studentid) as ChristianSCgirlsV from student where standard='V' AND gender='FeMale' AND religion='Christian' AND category='SC' )     AS 'ChristianSCgirlsV',
(SELECT count(studentid) as ChristianSCgirlsVI from student where standard='VI' AND gender='FeMale' AND religion='Christian' AND category='SC' )   AS 'ChristianSCgirlsVI',
(SELECT count(studentid) as ChristianSCgirlsVII from student where standard='VII' AND gender='FeMale' AND religion='Christian' AND category='SC' ) AS 'ChristianSCgirlsVII',
(SELECT count(studentid) as ChristianSCgirlsVIII from student where standard='VIII' AND gender='FeMale' AND religion='Christian' AND category='SC')AS 'ChristianSCgirlsVIII',
(SELECT count(studentid) as ChristianSCgirlsIX from student where standard='IX' AND gender='FeMale' AND religion='Christian' AND category='SC' )   AS 'ChristianSCgirlsIX',
(SELECT count(studentid) as ChristianSCgirlsX from student where standard='X' AND gender='FeMale' AND religion='Christian' AND category='SC' )     AS 'ChristianSCgirlsX',
(SELECT count(studentid) as ChristianSCgirlsXI from student where standard='XI' AND gender='FeMale' AND religion='Christian' AND category='SC')    AS 'ChristianSCgirlsXI',
(SELECT count(studentid) as ChristianSCgirlsXII from student where standard='XII' AND gender='FeMale' AND religion='Christian' AND category='SC' ) AS 'ChristianSCgirlsXII',

(SELECT count(studentid) as hinduSTboyslkg from student where standard='LKG' AND gender='Male' AND religion='Hindu' AND category='ST' ) AS 'hinduSTboyslkg',
(SELECT count(studentid) as hinduSTboysukg from student where standard='UKG' AND gender='Male' AND religion='Hindu' AND category='ST' ) AS 'hinduSTboysukg',
(SELECT count(studentid) as hinduSTboysI from student where standard='I' AND gender='Male' AND religion='Hindu' AND category='ST' )     AS 'hinduSTboysI',
(SELECT count(studentid) as hinduSTboysII from student where standard='II' AND gender='Male' AND religion='Hindu' AND category='ST' )   AS 'hinduSTboysII',
(SELECT count(studentid) as hinduSTboysIII from student where standard='III' AND gender='Male' AND religion='Hindu' AND category='ST')  AS 'hinduSTboysIII',
(SELECT count(studentid) as hinduSTboysIV from student where standard='IV' AND gender='Male' AND religion='Hindu' AND category='ST')    AS 'hinduSTboysIV',
(SELECT count(studentid) as hinduSTboysV from student where standard='V' AND gender='Male' AND religion='Hindu' AND category='ST' )     AS 'hinduSTboysV',
(SELECT count(studentid) as hinduSTboysVI from student where standard='VI' AND gender='Male' AND religion='Hindu' AND category='ST' )   AS 'hinduSTboysVI',
(SELECT count(studentid) as hinduSTboysVII from student where standard='VII' AND gender='Male' AND religion='Hindu' AND category='ST' ) AS 'hinduSTboysVII',
(SELECT count(studentid) as hinduSTboysVIII from student where standard='VIII' AND gender='Male' AND religion='Hindu' AND category='ST')AS 'hinduSTboysVIII',
(SELECT count(studentid) as hinduSTboysIX from student where standard='IX' AND gender='Male' AND religion='Hindu' AND category='ST' )   AS 'hinduSTboysIX',
(SELECT count(studentid) as hinduSTboysX from student where standard='X' AND gender='Male' AND religion='Hindu' AND category='ST' )     AS 'hinduSTboysX',
(SELECT count(studentid) as hinduSTboysXI from student where standard='XI' AND gender='Male' AND religion='Hindu' AND category='ST')    AS 'hinduSTboysXI',
(SELECT count(studentid) as hinduSTboysXII from student where standard='XII' AND gender='Male' AND religion='Hindu' AND category='ST' ) AS 'hinduSTboysXII',

(SELECT count(studentid) as hinduSTgirlslkg from student where standard='LKG' AND gender='FeMale' AND religion='Hindu' AND category='ST' ) AS 'hinduSTgirlslkg',
(SELECT count(studentid) as hinduSTgirlsukg from student where standard='UKG' AND gender='FeMale' AND religion='Hindu' AND category='ST' ) AS 'hinduSTgirlsukg',
(SELECT count(studentid) as hinduSTgirlsI from student where standard='I' AND gender='FeMale' AND religion='Hindu' AND category='ST' )     AS 'hinduSTgirlsI',
(SELECT count(studentid) as hinduSTgirlsII from student where standard='II' AND gender='FeMale' AND religion='Hindu' AND category='ST' )   AS 'hinduSTgirlsII',
(SELECT count(studentid) as hinduSTgirlsIII from student where standard='III' AND gender='FeMale' AND religion='Hindu' AND category='ST')  AS 'hinduSTgirlsIII',
(SELECT count(studentid) as hinduSTgirlsIV from student where standard='IV' AND gender='FeMale' AND religion='Hindu' AND category='ST')    AS 'hinduSTgirlsIV',
(SELECT count(studentid) as hinduSTgirlsV from student where standard='V' AND gender='FeMale' AND religion='Hindu' AND category='ST' )     AS 'hinduSTgirlsV',
(SELECT count(studentid) as hinduSTgirlsVI from student where standard='VI' AND gender='FeMale' AND religion='Hindu' AND category='ST' )   AS 'hinduSTgirlsVI',
(SELECT count(studentid) as hinduSTgirlsVII from student where standard='VII' AND gender='FeMale' AND religion='Hindu' AND category='ST' ) AS 'hinduSTgirlsVII',
(SELECT count(studentid) as hinduSTgirlsVIII from student where standard='VIII' AND gender='FeMale' AND religion='Hindu' AND category='ST')AS 'hinduSTgirlsVIII',
(SELECT count(studentid) as hinduSTgirlsIX from student where standard='IX' AND gender='FeMale' AND religion='Hindu' AND category='ST' )   AS 'hinduSTgirlsIX',
(SELECT count(studentid) as hinduSTgirlsX from student where standard='X' AND gender='FeMale' AND religion='Hindu' AND category='ST' )     AS 'hinduSTgirlsX',
(SELECT count(studentid) as hinduSTgirlsXI from student where standard='XI' AND gender='FeMale' AND religion='Hindu' AND category='ST')    AS 'hinduSTgirlsXI',
(SELECT count(studentid) as hinduSTgirlsXII from student where standard='XII' AND gender='FeMale' AND religion='Hindu' AND category='ST' ) AS 'hinduSTgirlsXII',

(SELECT count(studentid) as MuslimSTboyslkg from student where standard='LKG' AND gender='Male' AND religion='Muslim' AND category='ST' ) AS 'MuslimSTboyslkg',
(SELECT count(studentid) as MuslimSTboysukg from student where standard='UKG' AND gender='Male' AND religion='Muslim' AND category='ST' ) AS 'MuslimSTboysukg',
(SELECT count(studentid) as MuslimSTboysI from student where standard='I' AND gender='Male' AND religion='Muslim' AND category='ST' )     AS 'MuslimSTboysI',
(SELECT count(studentid) as MuslimSTboysII from student where standard='II' AND gender='Male' AND religion='Muslim' AND category='ST' )   AS 'MuslimSTboysII',
(SELECT count(studentid) as MuslimSTboysIII from student where standard='III' AND gender='Male' AND religion='Muslim' AND category='ST')  AS 'MuslimSTboysIII',
(SELECT count(studentid) as MuslimSTboysIV from student where standard='IV' AND gender='Male' AND religion='Muslim' AND category='ST')    AS 'MuslimSTboysIV',
(SELECT count(studentid) as MuslimSTboysV from student where standard='V' AND gender='Male' AND religion='Muslim' AND category='ST' )     AS 'MuslimSTboysV',
(SELECT count(studentid) as MuslimSTboysVI from student where standard='VI' AND gender='Male' AND religion='Muslim' AND category='ST' )   AS 'MuslimSTboysVI',
(SELECT count(studentid) as MuslimSTboysVII from student where standard='VII' AND gender='Male' AND religion='Muslim' AND category='ST' ) AS 'MuslimSTboysVII',
(SELECT count(studentid) as MuslimSTboysVIII from student where standard='VIII' AND gender='Male' AND religion='Muslim' AND category='ST')AS 'MuslimSTboysVIII',
(SELECT count(studentid) as MuslimSTboysIX from student where standard='IX' AND gender='Male' AND religion='Muslim' AND category='ST' )   AS 'MuslimSTboysIX',
(SELECT count(studentid) as MuslimSTboysX from student where standard='X' AND gender='Male' AND religion='Muslim' AND category='ST' )     AS 'MuslimSTboysX',
(SELECT count(studentid) as MuslimSTboysXI from student where standard='XI' AND gender='Male' AND religion='Muslim' AND category='ST')    AS 'MuslimSTboysXI',
(SELECT count(studentid) as MuslimSTboysXII from student where standard='XII' AND gender='Male' AND religion='Muslim' AND category='ST' ) AS 'MuslimSTboysXII',

(SELECT count(studentid) as MuslimSTgirlslkg from student where standard='LKG' AND gender='FeMale' AND religion='Muslim' AND category='ST' ) AS 'MuslimSTgirlslkg',
(SELECT count(studentid) as MuslimSTgirlsukg from student where standard='UKG' AND gender='FeMale' AND religion='Muslim' AND category='ST' ) AS 'MuslimSTgirlsukg',
(SELECT count(studentid) as MuslimSTgirlsI from student where standard='I' AND gender='FeMale' AND religion='Muslim' AND category='ST' )     AS 'MuslimSTgirlsI',
(SELECT count(studentid) as MuslimSTgirlsII from student where standard='II' AND gender='FeMale' AND religion='Muslim' AND category='ST' )   AS 'MuslimSTgirlsII',
(SELECT count(studentid) as MuslimSTgirlsIII from student where standard='III' AND gender='FeMale' AND religion='Muslim' AND category='ST')  AS 'MuslimSTgirlsIII',
(SELECT count(studentid) as MuslimSTgirlsIV from student where standard='IV' AND gender='FeMale' AND religion='Muslim' AND category='ST')    AS 'MuslimSTgirlsIV',
(SELECT count(studentid) as MuslimSTgirlsV from student where standard='V' AND gender='FeMale' AND religion='Muslim' AND category='ST' )     AS 'MuslimSTgirlsV',
(SELECT count(studentid) as MuslimSTgirlsVI from student where standard='VI' AND gender='FeMale' AND religion='Muslim' AND category='ST' )   AS 'MuslimSTgirlsVI',
(SELECT count(studentid) as MuslimSTgirlsVII from student where standard='VII' AND gender='FeMale' AND religion='Muslim' AND category='ST' ) AS 'MuslimSTgirlsVII',
(SELECT count(studentid) as MuslimSTgirlsVIII from student where standard='VIII' AND gender='FeMale' AND religion='Muslim' AND category='ST')AS 'MuslimSTgirlsVIII',
(SELECT count(studentid) as MuslimSTgirlsIX from student where standard='IX' AND gender='FeMale' AND religion='Muslim' AND category='ST' )   AS 'MuslimSTgirlsIX',
(SELECT count(studentid) as MuslimSTgirlsX from student where standard='X' AND gender='FeMale' AND religion='Muslim' AND category='ST' )     AS 'MuslimSTgirlsX',
(SELECT count(studentid) as MuslimSTgirlsXI from student where standard='XI' AND gender='FeMale' AND religion='Muslim' AND category='ST')    AS 'MuslimSTgirlsXI',
(SELECT count(studentid) as MuslimSTgirlsXII from student where standard='XII' AND gender='FeMale' AND religion='Muslim' AND category='ST' ) AS 'MuslimSTgirlsXII',

(SELECT count(studentid) as ChristianSTboyslkg from student where standard='LKG' AND gender='Male' AND religion='Christian' AND category='ST' ) AS 'ChristianSTboyslkg',
(SELECT count(studentid) as ChristianSTboysukg from student where standard='UKG' AND gender='Male' AND religion='Christian' AND category='ST' ) AS 'ChristianSTboysukg',
(SELECT count(studentid) as ChristianSTboysI from student where standard='I' AND gender='Male' AND religion='Christian' AND category='ST' )     AS 'ChristianSTboysI',
(SELECT count(studentid) as ChristianSTboysII from student where standard='II' AND gender='Male' AND religion='Christian' AND category='ST' )   AS 'ChristianSTboysII',
(SELECT count(studentid) as ChristianSTboysIII from student where standard='III' AND gender='Male' AND religion='Christian' AND category='ST')  AS 'ChristianSTboysIII',
(SELECT count(studentid) as ChristianSTboysIV from student where standard='IV' AND gender='Male' AND religion='Christian' AND category='ST')    AS 'ChristianSTboysIV',
(SELECT count(studentid) as ChristianSTboysV from student where standard='V' AND gender='Male' AND religion='Christian' AND category='ST' )     AS 'ChristianSTboysV',
(SELECT count(studentid) as ChristianSTboysVI from student where standard='VI' AND gender='Male' AND religion='Christian' AND category='ST' )   AS 'ChristianSTboysVI',
(SELECT count(studentid) as ChristianSTboysVII from student where standard='VII' AND gender='Male' AND religion='Christian' AND category='ST' ) AS 'ChristianSTboysVII',
(SELECT count(studentid) as ChristianSTboysVIII from student where standard='VIII' AND gender='Male' AND religion='Christian' AND category='ST')AS 'ChristianSTboysVIII',
(SELECT count(studentid) as ChristianSTboysIX from student where standard='IX' AND gender='Male' AND religion='Christian' AND category='ST' )   AS 'ChristianSTboysIX',
(SELECT count(studentid) as ChristianSTboysX from student where standard='X' AND gender='Male' AND religion='Christian' AND category='ST' )     AS 'ChristianSTboysX',
(SELECT count(studentid) as ChristianSTboysXI from student where standard='XI' AND gender='Male' AND religion='Christian' AND category='ST')    AS 'ChristianSTboysXI',
(SELECT count(studentid) as ChristianSTboysXII from student where standard='XII' AND gender='Male' AND religion='Christian' AND category='ST' ) AS 'ChristianSTboysXII',

(SELECT count(studentid) as ChristianSTgirlslkg from student where standard='LKG' AND gender='FeMale' AND religion='Christian' AND category='ST' ) AS 'ChristianSTgirlslkg',
(SELECT count(studentid) as ChristianSTgirlsukg from student where standard='UKG' AND gender='FeMale' AND religion='Christian' AND category='ST' ) AS 'ChristianSTgirlsukg',
(SELECT count(studentid) as ChristianSTgirlsI from student where standard='I' AND gender='FeMale' AND religion='Christian' AND category='ST' )     AS 'ChristianSTgirlsI',
(SELECT count(studentid) as ChristianSTgirlsII from student where standard='II' AND gender='FeMale' AND religion='Christian' AND category='ST' )   AS 'ChristianSTgirlsII',
(SELECT count(studentid) as ChristianSTgirlsIII from student where standard='III' AND gender='FeMale' AND religion='Christian' AND category='ST')  AS 'ChristianSTgirlsIII',
(SELECT count(studentid) as ChristianSTgirlsIV from student where standard='IV' AND gender='FeMale' AND religion='Christian' AND category='ST')    AS 'ChristianSTgirlsIV',
(SELECT count(studentid) as ChristianSTgirlsV from student where standard='V' AND gender='FeMale' AND religion='Christian' AND category='ST' )     AS 'ChristianSTgirlsV',
(SELECT count(studentid) as ChristianSTgirlsVI from student where standard='VI' AND gender='FeMale' AND religion='Christian' AND category='ST' )   AS 'ChristianSTgirlsVI',
(SELECT count(studentid) as ChristianSTgirlsVII from student where standard='VII' AND gender='FeMale' AND religion='Christian' AND category='ST' ) AS 'ChristianSTgirlsVII',
(SELECT count(studentid) as ChristianSTgirlsVIII from student where standard='VIII' AND gender='FeMale' AND religion='Christian' AND category='ST')AS 'ChristianSTgirlsVIII',
(SELECT count(studentid) as ChristianSTgirlsIX from student where standard='IX' AND gender='FeMale' AND religion='Christian' AND category='ST' )   AS 'ChristianSTgirlsIX',
(SELECT count(studentid) as ChristianSTgirlsX from student where standard='X' AND gender='FeMale' AND religion='Christian' AND category='ST' )     AS 'ChristianSTgirlsX',
(SELECT count(studentid) as ChristianSTgirlsXI from student where standard='XI' AND gender='FeMale' AND religion='Christian' AND category='ST')    AS 'ChristianSTgirlsXI',
(SELECT count(studentid) as ChristianSTgirlsXII from student where standard='XII' AND gender='FeMale' AND religion='Christian' AND category='ST' ) AS 'ChristianSTgirlsXII',


(SELECT count(studentid) as hinduOBCboyslkg from student where standard='LKG' AND gender='Male' AND religion='Hindu' AND category='OBC' ) AS 'hinduOBCboyslkg',
(SELECT count(studentid) as hinduOBCboysukg from student where standard='UKG' AND gender='Male' AND religion='Hindu' AND category='OBC' ) AS 'hinduOBCboysukg',
(SELECT count(studentid) as hinduOBCboysI from student where standard='I' AND gender='Male' AND religion='Hindu' AND category='OBC' )     AS 'hinduOBCboysI',
(SELECT count(studentid) as hinduOBCboysII from student where standard='II' AND gender='Male' AND religion='Hindu' AND category='OBC' )   AS 'hinduOBCboysII',
(SELECT count(studentid) as hinduOBCboysIII from student where standard='III' AND gender='Male' AND religion='Hindu' AND category='OBC')  AS 'hinduOBCboysIII',
(SELECT count(studentid) as hinduOBCboysIV from student where standard='IV' AND gender='Male' AND religion='Hindu' AND category='OBC')    AS 'hinduOBCboysIV',
(SELECT count(studentid) as hinduOBCboysV from student where standard='V' AND gender='Male' AND religion='Hindu' AND category='OBC' )     AS 'hinduOBCboysV',
(SELECT count(studentid) as hinduOBCboysVI from student where standard='VI' AND gender='Male' AND religion='Hindu' AND category='OBC' )   AS 'hinduOBCboysVI',
(SELECT count(studentid) as hinduOBCboysVII from student where standard='VII' AND gender='Male' AND religion='Hindu' AND category='OBC' ) AS 'hinduOBCboysVII',
(SELECT count(studentid) as hinduOBCboysVIII from student where standard='VIII' AND gender='Male' AND religion='Hindu' AND category='OBC')AS 'hinduOBCboysVIII',
(SELECT count(studentid) as hinduOBCboysIX from student where standard='IX' AND gender='Male' AND religion='Hindu' AND category='OBC' )   AS 'hinduOBCboysIX',
(SELECT count(studentid) as hinduOBCboysX from student where standard='X' AND gender='Male' AND religion='Hindu' AND category='OBC' )     AS 'hinduOBCboysX',
(SELECT count(studentid) as hinduOBCboysXI from student where standard='XI' AND gender='Male' AND religion='Hindu' AND category='OBC')    AS 'hinduOBCboysXI',
(SELECT count(studentid) as hinduOBCboysXII from student where standard='XII' AND gender='Male' AND religion='Hindu' AND category='OBC' ) AS 'hinduOBCboysXII',

(SELECT count(studentid) as hinduOBCgirlslkg from student where standard='LKG' AND gender='FeMale' AND religion='Hindu' AND category='OBC' ) AS 'hinduOBCgirlslkg',
(SELECT count(studentid) as hinduOBCgirlsukg from student where standard='UKG' AND gender='FeMale' AND religion='Hindu' AND category='OBC' ) AS 'hinduOBCgirlsukg',
(SELECT count(studentid) as hinduOBCgirlsI from student where standard='I' AND gender='FeMale' AND religion='Hindu' AND category='OBC' )     AS 'hinduOBCgirlsI',
(SELECT count(studentid) as hinduOBCgirlsII from student where standard='II' AND gender='FeMale' AND religion='Hindu' AND category='OBC' )   AS 'hinduOBCgirlsII',
(SELECT count(studentid) as hinduOBCgirlsIII from student where standard='III' AND gender='FeMale' AND religion='Hindu' AND category='OBC')  AS 'hinduOBCgirlsIII',
(SELECT count(studentid) as hinduOBCgirlsIV from student where standard='IV' AND gender='FeMale' AND religion='Hindu' AND category='OBC')    AS 'hinduOBCgirlsIV',
(SELECT count(studentid) as hinduOBCgirlsV from student where standard='V' AND gender='FeMale' AND religion='Hindu' AND category='OBC' )     AS 'hinduOBCgirlsV',
(SELECT count(studentid) as hinduOBCgirlsVI from student where standard='VI' AND gender='FeMale' AND religion='Hindu' AND category='OBC' )   AS 'hinduOBCgirlsVI',
(SELECT count(studentid) as hinduOBCgirlsVII from student where standard='VII' AND gender='FeMale' AND religion='Hindu' AND category='OBC' ) AS 'hinduOBCgirlsVII',
(SELECT count(studentid) as hinduOBCgirlsVIII from student where standard='VIII' AND gender='FeMale' AND religion='Hindu' AND category='OBC')AS 'hinduOBCgirlsVIII',
(SELECT count(studentid) as hinduOBCgirlsIX from student where standard='IX' AND gender='FeMale' AND religion='Hindu' AND category='OBC' )   AS 'hinduOBCgirlsIX',
(SELECT count(studentid) as hinduOBCgirlsX from student where standard='X' AND gender='FeMale' AND religion='Hindu' AND category='OBC' )     AS 'hinduOBCgirlsX',
(SELECT count(studentid) as hinduOBCgirlsXI from student where standard='XI' AND gender='FeMale' AND religion='Hindu' AND category='OBC')    AS 'hinduOBCgirlsXI',
(SELECT count(studentid) as hinduOBCgirlsXII from student where standard='XII' AND gender='FeMale' AND religion='Hindu' AND category='OBC' ) AS 'hinduOBCgirlsXII',

(SELECT count(studentid) as MuslimOBCboyslkg from student where standard='LKG' AND gender='Male' AND religion='Muslim' AND category='OBC' ) AS 'MuslimOBCboyslkg',
(SELECT count(studentid) as MuslimOBCboysukg from student where standard='UKG' AND gender='Male' AND religion='Muslim' AND category='OBC' ) AS 'MuslimOBCboysukg',
(SELECT count(studentid) as MuslimOBCboysI from student where standard='I' AND gender='Male' AND religion='Muslim' AND category='OBC' )     AS 'MuslimOBCboysI',
(SELECT count(studentid) as MuslimOBCboysII from student where standard='II' AND gender='Male' AND religion='Muslim' AND category='OBC' )   AS 'MuslimOBCboysII',
(SELECT count(studentid) as MuslimOBCboysIII from student where standard='III' AND gender='Male' AND religion='Muslim' AND category='OBC')  AS 'MuslimOBCboysIII',
(SELECT count(studentid) as MuslimOBCboysIV from student where standard='IV' AND gender='Male' AND religion='Muslim' AND category='OBC')    AS 'MuslimOBCboysIV',
(SELECT count(studentid) as MuslimOBCboysV from student where standard='V' AND gender='Male' AND religion='Muslim' AND category='OBC' )     AS 'MuslimOBCboysV',
(SELECT count(studentid) as MuslimOBCboysVI from student where standard='VI' AND gender='Male' AND religion='Muslim' AND category='OBC' )   AS 'MuslimOBCboysVI',
(SELECT count(studentid) as MuslimOBCboysVII from student where standard='VII' AND gender='Male' AND religion='Muslim' AND category='OBC' ) AS 'MuslimOBCboysVII',
(SELECT count(studentid) as MuslimOBCboysVIII from student where standard='VIII' AND gender='Male' AND religion='Muslim' AND category='OBC')AS 'MuslimOBCboysVIII',
(SELECT count(studentid) as MuslimOBCboysIX from student where standard='IX' AND gender='Male' AND religion='Muslim' AND category='OBC' )   AS 'MuslimOBCboysIX',
(SELECT count(studentid) as MuslimOBCboysX from student where standard='X' AND gender='Male' AND religion='Muslim' AND category='OBC' )     AS 'MuslimOBCboysX',
(SELECT count(studentid) as MuslimOBCboysXI from student where standard='XI' AND gender='Male' AND religion='Muslim' AND category='OBC')    AS 'MuslimOBCboysXI',
(SELECT count(studentid) as MuslimOBCboysXII from student where standard='XII' AND gender='Male' AND religion='Muslim' AND category='OBC' ) AS 'MuslimOBCboysXII',

(SELECT count(studentid) as MuslimOBCgirlslkg from student where standard='LKG' AND gender='FeMale' AND religion='Muslim' AND category='OBC' ) AS 'MuslimOBCgirlslkg',
(SELECT count(studentid) as MuslimOBCgirlsukg from student where standard='UKG' AND gender='FeMale' AND religion='Muslim' AND category='OBC' ) AS 'MuslimOBCgirlsukg',
(SELECT count(studentid) as MuslimOBCgirlsI from student where standard='I' AND gender='FeMale' AND religion='Muslim' AND category='OBC' )     AS 'MuslimOBCgirlsI',
(SELECT count(studentid) as MuslimOBCgirlsII from student where standard='II' AND gender='FeMale' AND religion='Muslim' AND category='OBC' )   AS 'MuslimOBCgirlsII',
(SELECT count(studentid) as MuslimOBCgirlsIII from student where standard='III' AND gender='FeMale' AND religion='Muslim' AND category='OBC')  AS 'MuslimOBCgirlsIII',
(SELECT count(studentid) as MuslimOBCgirlsIV from student where standard='IV' AND gender='FeMale' AND religion='Muslim' AND category='OBC')    AS 'MuslimOBCgirlsIV',
(SELECT count(studentid) as MuslimOBCgirlsV from student where standard='V' AND gender='FeMale' AND religion='Muslim' AND category='OBC' )     AS 'MuslimOBCgirlsV',
(SELECT count(studentid) as MuslimOBCgirlsVI from student where standard='VI' AND gender='FeMale' AND religion='Muslim' AND category='OBC' )   AS 'MuslimOBCgirlsVI',
(SELECT count(studentid) as MuslimOBCgirlsVII from student where standard='VII' AND gender='FeMale' AND religion='Muslim' AND category='OBC' ) AS 'MuslimOBCgirlsVII',
(SELECT count(studentid) as MuslimOBCgirlsVIII from student where standard='VIII' AND gender='FeMale' AND religion='Muslim' AND category='OBC')AS 'MuslimOBCgirlsVIII',
(SELECT count(studentid) as MuslimOBCgirlsIX from student where standard='IX' AND gender='FeMale' AND religion='Muslim' AND category='OBC' )   AS 'MuslimOBCgirlsIX',
(SELECT count(studentid) as MuslimOBCgirlsX from student where standard='X' AND gender='FeMale' AND religion='Muslim' AND category='OBC' )     AS 'MuslimOBCgirlsX',
(SELECT count(studentid) as MuslimOBCgirlsXI from student where standard='XI' AND gender='FeMale' AND religion='Muslim' AND category='OBC')    AS 'MuslimOBCgirlsXI',
(SELECT count(studentid) as MuslimOBCgirlsXII from student where standard='XII' AND gender='FeMale' AND religion='Muslim' AND category='OBC' ) AS 'MuslimOBCgirlsXII',

(SELECT count(studentid) as ChristianOBCboyslkg from student where standard='LKG' AND gender='Male' AND religion='Christian' AND category='OBC' ) AS 'ChristianOBCboyslkg',
(SELECT count(studentid) as ChristianOBCboysukg from student where standard='UKG' AND gender='Male' AND religion='Christian' AND category='OBC' ) AS 'ChristianOBCboysukg',
(SELECT count(studentid) as ChristianOBCboysI from student where standard='I' AND gender='Male' AND religion='Christian' AND category='OBC' )     AS 'ChristianOBCboysI',
(SELECT count(studentid) as ChristianOBCboysII from student where standard='II' AND gender='Male' AND religion='Christian' AND category='OBC' )   AS 'ChristianOBCboysII',
(SELECT count(studentid) as ChristianOBCboysIII from student where standard='III' AND gender='Male' AND religion='Christian' AND category='OBC')  AS 'ChristianOBCboysIII',
(SELECT count(studentid) as ChristianOBCboysIV from student where standard='IV' AND gender='Male' AND religion='Christian' AND category='OBC')    AS 'ChristianOBCboysIV',
(SELECT count(studentid) as ChristianOBCboysV from student where standard='V' AND gender='Male' AND religion='Christian' AND category='OBC' )     AS 'ChristianOBCboysV',
(SELECT count(studentid) as ChristianOBCboysVI from student where standard='VI' AND gender='Male' AND religion='Christian' AND category='OBC' )   AS 'ChristianOBCboysVI',
(SELECT count(studentid) as ChristianOBCboysVII from student where standard='VII' AND gender='Male' AND religion='Christian' AND category='OBC' ) AS 'ChristianOBCboysVII',
(SELECT count(studentid) as ChristianOBCboysVIII from student where standard='VIII' AND gender='Male' AND religion='Christian' AND category='OBC')AS 'ChristianOBCboysVIII',
(SELECT count(studentid) as ChristianOBCboysIX from student where standard='IX' AND gender='Male' AND religion='Christian' AND category='OBC' )   AS 'ChristianOBCboysIX',
(SELECT count(studentid) as ChristianOBCboysX from student where standard='X' AND gender='Male' AND religion='Christian' AND category='OBC' )     AS 'ChristianOBCboysX',
(SELECT count(studentid) as ChristianOBCboysXI from student where standard='XI' AND gender='Male' AND religion='Christian' AND category='OBC')    AS 'ChristianOBCboysXI',
(SELECT count(studentid) as ChristianOBCboysXII from student where standard='XII' AND gender='Male' AND religion='Christian' AND category='OBC' ) AS 'ChristianOBCboysXII',

(SELECT count(studentid) as ChristianOBCgirlslkg from student where standard='LKG' AND gender='FeMale' AND religion='Christian' AND category='OBC' ) AS 'ChristianOBCgirlslkg',
(SELECT count(studentid) as ChristianOBCgirlsukg from student where standard='UKG' AND gender='FeMale' AND religion='Christian' AND category='OBC' ) AS 'ChristianOBCgirlsukg',
(SELECT count(studentid) as ChristianOBCgirlsI from student where standard='I' AND gender='FeMale' AND religion='Christian' AND category='OBC' )     AS 'ChristianOBCgirlsI',
(SELECT count(studentid) as ChristianOBCgirlsII from student where standard='II' AND gender='FeMale' AND religion='Christian' AND category='OBC' )   AS 'ChristianOBCgirlsII',
(SELECT count(studentid) as ChristianOBCgirlsIII from student where standard='III' AND gender='FeMale' AND religion='Christian' AND category='OBC')  AS 'ChristianOBCgirlsIII',
(SELECT count(studentid) as ChristianOBCgirlsIV from student where standard='IV' AND gender='FeMale' AND religion='Christian' AND category='OBC')    AS 'ChristianOBCgirlsIV',
(SELECT count(studentid) as ChristianOBCgirlsV from student where standard='V' AND gender='FeMale' AND religion='Christian' AND category='OBC' )     AS 'ChristianOBCgirlsV',
(SELECT count(studentid) as ChristianOBCgirlsVI from student where standard='VI' AND gender='FeMale' AND religion='Christian' AND category='OBC' )   AS 'ChristianOBCgirlsVI',
(SELECT count(studentid) as ChristianOBCgirlsVII from student where standard='VII' AND gender='FeMale' AND religion='Christian' AND category='OBC' ) AS 'ChristianOBCgirlsVII',
(SELECT count(studentid) as ChristianOBCgirlsVIII from student where standard='VIII' AND gender='FeMale' AND religion='Christian' AND category='OBC')AS 'ChristianOBCgirlsVIII',
(SELECT count(studentid) as ChristianOBCgirlsIX from student where standard='IX' AND gender='FeMale' AND religion='Christian' AND category='OBC' )   AS 'ChristianOBCgirlsIX',
(SELECT count(studentid) as ChristianOBCgirlsX from student where standard='X' AND gender='FeMale' AND religion='Christian' AND category='OBC' )     AS 'ChristianOBCgirlsX',
(SELECT count(studentid) as ChristianOBCgirlsXI from student where standard='XI' AND gender='FeMale' AND religion='Christian' AND category='OBC')    AS 'ChristianOBCgirlsXI',
(SELECT count(studentid) as ChristianOBCgirlsXII from student where standard='XII' AND gender='FeMale' AND religion='Christian' AND category='OBC' ) AS 'ChristianOBCgirlsXII',

(SELECT count(studentid) as hinduDNCboyslkg from student where standard='LKG' AND gender='Male' AND religion='Hindu' AND category='DNC' ) AS 'hinduDNCboyslkg',
(SELECT count(studentid) as hinduDNCboysukg from student where standard='UKG' AND gender='Male' AND religion='Hindu' AND category='DNC' ) AS 'hinduDNCboysukg',
(SELECT count(studentid) as hinduDNCboysI from student where standard='I' AND gender='Male' AND religion='Hindu' AND category='DNC' )     AS 'hinduDNCboysI',
(SELECT count(studentid) as hinduDNCboysII from student where standard='II' AND gender='Male' AND religion='Hindu' AND category='DNC' )   AS 'hinduDNCboysII',
(SELECT count(studentid) as hinduDNCboysIII from student where standard='III' AND gender='Male' AND religion='Hindu' AND category='DNC')  AS 'hinduDNCboysIII',
(SELECT count(studentid) as hinduDNCboysIV from student where standard='IV' AND gender='Male' AND religion='Hindu' AND category='DNC')    AS 'hinduDNCboysIV',
(SELECT count(studentid) as hinduDNCboysV from student where standard='V' AND gender='Male' AND religion='Hindu' AND category='DNC' )     AS 'hinduDNCboysV',
(SELECT count(studentid) as hinduDNCboysVI from student where standard='VI' AND gender='Male' AND religion='Hindu' AND category='DNC' )   AS 'hinduDNCboysVI',
(SELECT count(studentid) as hinduDNCboysVII from student where standard='VII' AND gender='Male' AND religion='Hindu' AND category='DNC' ) AS 'hinduDNCboysVII',
(SELECT count(studentid) as hinduDNCboysVIII from student where standard='VIII' AND gender='Male' AND religion='Hindu' AND category='DNC')AS 'hinduDNCboysVIII',
(SELECT count(studentid) as hinduDNCboysIX from student where standard='IX' AND gender='Male' AND religion='Hindu' AND category='DNC' )   AS 'hinduDNCboysIX',
(SELECT count(studentid) as hinduDNCboysX from student where standard='X' AND gender='Male' AND religion='Hindu' AND category='DNC' )     AS 'hinduDNCboysX',
(SELECT count(studentid) as hinduDNCboysXI from student where standard='XI' AND gender='Male' AND religion='Hindu' AND category='DNC')    AS 'hinduDNCboysXI',
(SELECT count(studentid) as hinduDNCboysXII from student where standard='XII' AND gender='Male' AND religion='Hindu' AND category='DNC' ) AS 'hinduDNCboysXII',

(SELECT count(studentid) as hinduDNCgirlslkg from student where standard='LKG' AND gender='FeMale' AND religion='Hindu' AND category='DNC' ) AS 'hinduDNCgirlslkg',
(SELECT count(studentid) as hinduDNCgirlsukg from student where standard='UKG' AND gender='FeMale' AND religion='Hindu' AND category='DNC' ) AS 'hinduDNCgirlsukg',
(SELECT count(studentid) as hinduDNCgirlsI from student where standard='I' AND gender='FeMale' AND religion='Hindu' AND category='DNC' )     AS 'hinduDNCgirlsI',
(SELECT count(studentid) as hinduDNCgirlsII from student where standard='II' AND gender='FeMale' AND religion='Hindu' AND category='DNC' )   AS 'hinduDNCgirlsII',
(SELECT count(studentid) as hinduDNCgirlsIII from student where standard='III' AND gender='FeMale' AND religion='Hindu' AND category='DNC')  AS 'hinduDNCgirlsIII',
(SELECT count(studentid) as hinduDNCgirlsIV from student where standard='IV' AND gender='FeMale' AND religion='Hindu' AND category='DNC')    AS 'hinduDNCgirlsIV',
(SELECT count(studentid) as hinduDNCgirlsV from student where standard='V' AND gender='FeMale' AND religion='Hindu' AND category='DNC' )     AS 'hinduDNCgirlsV',
(SELECT count(studentid) as hinduDNCgirlsVI from student where standard='VI' AND gender='FeMale' AND religion='Hindu' AND category='DNC' )   AS 'hinduDNCgirlsVI',
(SELECT count(studentid) as hinduDNCgirlsVII from student where standard='VII' AND gender='FeMale' AND religion='Hindu' AND category='DNC' ) AS 'hinduDNCgirlsVII',
(SELECT count(studentid) as hinduDNCgirlsVIII from student where standard='VIII' AND gender='FeMale' AND religion='Hindu' AND category='DNC')AS 'hinduDNCgirlsVIII',
(SELECT count(studentid) as hinduDNCgirlsIX from student where standard='IX' AND gender='FeMale' AND religion='Hindu' AND category='DNC' )   AS 'hinduDNCgirlsIX',
(SELECT count(studentid) as hinduDNCgirlsX from student where standard='X' AND gender='FeMale' AND religion='Hindu' AND category='DNC' )     AS 'hinduDNCgirlsX',
(SELECT count(studentid) as hinduDNCgirlsXI from student where standard='XI' AND gender='FeMale' AND religion='Hindu' AND category='DNC')    AS 'hinduDNCgirlsXI',
(SELECT count(studentid) as hinduDNCgirlsXII from student where standard='XII' AND gender='FeMale' AND religion='Hindu' AND category='DNC' ) AS 'hinduDNCgirlsXII',

(SELECT count(studentid) as MuslimDNCboyslkg from student where standard='LKG' AND gender='Male' AND religion='Muslim' AND category='DNC' ) AS 'MuslimDNCboyslkg',
(SELECT count(studentid) as MuslimDNCboysukg from student where standard='UKG' AND gender='Male' AND religion='Muslim' AND category='DNC' ) AS 'MuslimDNCboysukg',
(SELECT count(studentid) as MuslimDNCboysI from student where standard='I' AND gender='Male' AND religion='Muslim' AND category='DNC' )     AS 'MuslimDNCboysI',
(SELECT count(studentid) as MuslimDNCboysII from student where standard='II' AND gender='Male' AND religion='Muslim' AND category='DNC' )   AS 'MuslimDNCboysII',
(SELECT count(studentid) as MuslimDNCboysIII from student where standard='III' AND gender='Male' AND religion='Muslim' AND category='DNC')  AS 'MuslimDNCboysIII',
(SELECT count(studentid) as MuslimDNCboysIV from student where standard='IV' AND gender='Male' AND religion='Muslim' AND category='DNC')    AS 'MuslimDNCboysIV',
(SELECT count(studentid) as MuslimDNCboysV from student where standard='V' AND gender='Male' AND religion='Muslim' AND category='DNC' )     AS 'MuslimDNCboysV',
(SELECT count(studentid) as MuslimDNCboysVI from student where standard='VI' AND gender='Male' AND religion='Muslim' AND category='DNC' )   AS 'MuslimDNCboysVI',
(SELECT count(studentid) as MuslimDNCboysVII from student where standard='VII' AND gender='Male' AND religion='Muslim' AND category='DNC' ) AS 'MuslimDNCboysVII',
(SELECT count(studentid) as MuslimDNCboysVIII from student where standard='VIII' AND gender='Male' AND religion='Muslim' AND category='DNC')AS 'MuslimDNCboysVIII',
(SELECT count(studentid) as MuslimDNCboysIX from student where standard='IX' AND gender='Male' AND religion='Muslim' AND category='DNC' )   AS 'MuslimDNCboysIX',
(SELECT count(studentid) as MuslimDNCboysX from student where standard='X' AND gender='Male' AND religion='Muslim' AND category='DNC' )     AS 'MuslimDNCboysX',
(SELECT count(studentid) as MuslimDNCboysXI from student where standard='XI' AND gender='Male' AND religion='Muslim' AND category='DNC')    AS 'MuslimDNCboysXI',
(SELECT count(studentid) as MuslimDNCboysXII from student where standard='XII' AND gender='Male' AND religion='Muslim' AND category='DNC' ) AS 'MuslimDNCboysXII',

(SELECT count(studentid) as MuslimDNCgirlslkg from student where standard='LKG' AND gender='FeMale' AND religion='Muslim' AND category='DNC' ) AS 'MuslimDNCgirlslkg',
(SELECT count(studentid) as MuslimDNCgirlsukg from student where standard='UKG' AND gender='FeMale' AND religion='Muslim' AND category='DNC' ) AS 'MuslimDNCgirlsukg',
(SELECT count(studentid) as MuslimDNCgirlsI from student where standard='I' AND gender='FeMale' AND religion='Muslim' AND category='DNC' )     AS 'MuslimDNCgirlsI',
(SELECT count(studentid) as MuslimDNCgirlsII from student where standard='II' AND gender='FeMale' AND religion='Muslim' AND category='DNC' )   AS 'MuslimDNCgirlsII',
(SELECT count(studentid) as MuslimDNCgirlsIII from student where standard='III' AND gender='FeMale' AND religion='Muslim' AND category='DNC')  AS 'MuslimDNCgirlsIII',
(SELECT count(studentid) as MuslimDNCgirlsIV from student where standard='IV' AND gender='FeMale' AND religion='Muslim' AND category='DNC')    AS 'MuslimDNCgirlsIV',
(SELECT count(studentid) as MuslimDNCgirlsV from student where standard='V' AND gender='FeMale' AND religion='Muslim' AND category='DNC' )     AS 'MuslimDNCgirlsV',
(SELECT count(studentid) as MuslimDNCgirlsVI from student where standard='VI' AND gender='FeMale' AND religion='Muslim' AND category='DNC' )   AS 'MuslimDNCgirlsVI',
(SELECT count(studentid) as MuslimDNCgirlsVII from student where standard='VII' AND gender='FeMale' AND religion='Muslim' AND category='DNC' ) AS 'MuslimDNCgirlsVII',
(SELECT count(studentid) as MuslimDNCgirlsVIII from student where standard='VIII' AND gender='FeMale' AND religion='Muslim' AND category='DNC')AS 'MuslimDNCgirlsVIII',
(SELECT count(studentid) as MuslimDNCgirlsIX from student where standard='IX' AND gender='FeMale' AND religion='Muslim' AND category='DNC' )   AS 'MuslimDNCgirlsIX',
(SELECT count(studentid) as MuslimDNCgirlsX from student where standard='X' AND gender='FeMale' AND religion='Muslim' AND category='DNC' )     AS 'MuslimDNCgirlsX',
(SELECT count(studentid) as MuslimDNCgirlsXI from student where standard='XI' AND gender='FeMale' AND religion='Muslim' AND category='DNC')    AS 'MuslimDNCgirlsXI',
(SELECT count(studentid) as MuslimDNCgirlsXII from student where standard='XII' AND gender='FeMale' AND religion='Muslim' AND category='DNC' ) AS 'MuslimDNCgirlsXII',

(SELECT count(studentid) as ChristianDNCboyslkg from student where standard='LKG' AND gender='Male' AND religion='Christian' AND category='DNC' ) AS 'ChristianDNCboyslkg',
(SELECT count(studentid) as ChristianDNCboysukg from student where standard='UKG' AND gender='Male' AND religion='Christian' AND category='DNC' ) AS 'ChristianDNCboysukg',
(SELECT count(studentid) as ChristianDNCboysI from student where standard='I' AND gender='Male' AND religion='Christian' AND category='DNC' )     AS 'ChristianDNCboysI',
(SELECT count(studentid) as ChristianDNCboysII from student where standard='II' AND gender='Male' AND religion='Christian' AND category='DNC' )   AS 'ChristianDNCboysII',
(SELECT count(studentid) as ChristianDNCboysIII from student where standard='III' AND gender='Male' AND religion='Christian' AND category='DNC')  AS 'ChristianDNCboysIII',
(SELECT count(studentid) as ChristianDNCboysIV from student where standard='IV' AND gender='Male' AND religion='Christian' AND category='DNC')    AS 'ChristianDNCboysIV',
(SELECT count(studentid) as ChristianDNCboysV from student where standard='V' AND gender='Male' AND religion='Christian' AND category='DNC' )     AS 'ChristianDNCboysV',
(SELECT count(studentid) as ChristianDNCboysVI from student where standard='VI' AND gender='Male' AND religion='Christian' AND category='DNC' )   AS 'ChristianDNCboysVI',
(SELECT count(studentid) as ChristianDNCboysVII from student where standard='VII' AND gender='Male' AND religion='Christian' AND category='DNC' ) AS 'ChristianDNCboysVII',
(SELECT count(studentid) as ChristianDNCboysVIII from student where standard='VIII' AND gender='Male' AND religion='Christian' AND category='DNC')AS 'ChristianDNCboysVIII',
(SELECT count(studentid) as ChristianDNCboysIX from student where standard='IX' AND gender='Male' AND religion='Christian' AND category='DNC' )   AS 'ChristianDNCboysIX',
(SELECT count(studentid) as ChristianDNCboysX from student where standard='X' AND gender='Male' AND religion='Christian' AND category='DNC' )     AS 'ChristianDNCboysX',
(SELECT count(studentid) as ChristianDNCboysXI from student where standard='XI' AND gender='Male' AND religion='Christian' AND category='DNC')    AS 'ChristianDNCboysXI',
(SELECT count(studentid) as ChristianDNCboysXII from student where standard='XII' AND gender='Male' AND religion='Christian' AND category='DNC' ) AS 'ChristianDNCboysXII',

(SELECT count(studentid) as ChristianDNCgirlslkg from student where standard='LKG' AND gender='FeMale' AND religion='Christian' AND category='DNC' ) AS 'ChristianDNCgirlslkg',
(SELECT count(studentid) as ChristianDNCgirlsukg from student where standard='UKG' AND gender='FeMale' AND religion='Christian' AND category='DNC' ) AS 'ChristianDNCgirlsukg',
(SELECT count(studentid) as ChristianDNCgirlsI from student where standard='I' AND gender='FeMale' AND religion='Christian' AND category='DNC' )     AS 'ChristianDNCgirlsI',
(SELECT count(studentid) as ChristianDNCgirlsII from student where standard='II' AND gender='FeMale' AND religion='Christian' AND category='DNC' )   AS 'ChristianDNCgirlsII',
(SELECT count(studentid) as ChristianDNCgirlsIII from student where standard='III' AND gender='FeMale' AND religion='Christian' AND category='DNC')  AS 'ChristianDNCgirlsIII',
(SELECT count(studentid) as ChristianDNCgirlsIV from student where standard='IV' AND gender='FeMale' AND religion='Christian' AND category='DNC')    AS 'ChristianDNCgirlsIV',
(SELECT count(studentid) as ChristianDNCgirlsV from student where standard='V' AND gender='FeMale' AND religion='Christian' AND category='DNC' )     AS 'ChristianDNCgirlsV',
(SELECT count(studentid) as ChristianDNCgirlsVI from student where standard='VI' AND gender='FeMale' AND religion='Christian' AND category='DNC' )   AS 'ChristianDNCgirlsVI',
(SELECT count(studentid) as ChristianDNCgirlsVII from student where standard='VII' AND gender='FeMale' AND religion='Christian' AND category='DNC' ) AS 'ChristianDNCgirlsVII',
(SELECT count(studentid) as ChristianDNCgirlsVIII from student where standard='VIII' AND gender='FeMale' AND religion='Christian' AND category='DNC')AS 'ChristianDNCgirlsVIII',
(SELECT count(studentid) as ChristianDNCgirlsIX from student where standard='IX' AND gender='FeMale' AND religion='Christian' AND category='DNC' )   AS 'ChristianDNCgirlsIX',
(SELECT count(studentid) as ChristianDNCgirlsX from student where standard='X' AND gender='FeMale' AND religion='Christian' AND category='DNC' )     AS 'ChristianDNCgirlsX',
(SELECT count(studentid) as ChristianDNCgirlsXI from student where standard='XI' AND gender='FeMale' AND religion='Christian' AND category='DNC')    AS 'ChristianDNCgirlsXI',
(SELECT count(studentid) as ChristianDNCgirlsXII from student where standard='XII' AND gender='FeMale' AND religion='Christian' AND category='DNC' ) AS 'ChristianDNCgirlsXII',

(SELECT count(studentid) as hinduOthersboyslkg from student where standard='LKG' AND gender='Male' AND religion='Hindu' AND category='Others' ) AS 'hinduOthersboyslkg',
(SELECT count(studentid) as hinduOthersboysukg from student where standard='UKG' AND gender='Male' AND religion='Hindu' AND category='Others' ) AS 'hinduOthersboysukg',
(SELECT count(studentid) as hinduOthersboysI from student where standard='I' AND gender='Male' AND religion='Hindu' AND category='Others' )     AS 'hinduOthersboysI',
(SELECT count(studentid) as hinduOthersboysII from student where standard='II' AND gender='Male' AND religion='Hindu' AND category='Others' )   AS 'hinduOthersboysII',
(SELECT count(studentid) as hinduOthersboysIII from student where standard='III' AND gender='Male' AND religion='Hindu' AND category='Others')  AS 'hinduOthersboysIII',
(SELECT count(studentid) as hinduOthersboysIV from student where standard='IV' AND gender='Male' AND religion='Hindu' AND category='Others')    AS 'hinduOthersboysIV',
(SELECT count(studentid) as hinduOthersboysV from student where standard='V' AND gender='Male' AND religion='Hindu' AND category='Others' )     AS 'hinduOthersboysV',
(SELECT count(studentid) as hinduOthersboysVI from student where standard='VI' AND gender='Male' AND religion='Hindu' AND category='Others' )   AS 'hinduOthersboysVI',
(SELECT count(studentid) as hinduOthersboysVII from student where standard='VII' AND gender='Male' AND religion='Hindu' AND category='Others' ) AS 'hinduOthersboysVII',
(SELECT count(studentid) as hinduOthersboysVIII from student where standard='VIII' AND gender='Male' AND religion='Hindu' AND category='Others')AS 'hinduOthersboysVIII',
(SELECT count(studentid) as hinduOthersboysIX from student where standard='IX' AND gender='Male' AND religion='Hindu' AND category='Others' )   AS 'hinduOthersboysIX',
(SELECT count(studentid) as hinduOthersboysX from student where standard='X' AND gender='Male' AND religion='Hindu' AND category='Others' )     AS 'hinduOthersboysX',
(SELECT count(studentid) as hinduOthersboysXI from student where standard='XI' AND gender='Male' AND religion='Hindu' AND category='Others')    AS 'hinduOthersboysXI',
(SELECT count(studentid) as hinduOthersboysXII from student where standard='XII' AND gender='Male' AND religion='Hindu' AND category='Others' ) AS 'hinduOthersboysXII',

(SELECT count(studentid) as hinduOthersgirlslkg from student where standard='LKG' AND gender='FeMale' AND religion='Hindu' AND category='Others' ) AS 'hinduOthersgirlslkg',
(SELECT count(studentid) as hinduOthersgirlsukg from student where standard='UKG' AND gender='FeMale' AND religion='Hindu' AND category='Others' ) AS 'hinduOthersgirlsukg',
(SELECT count(studentid) as hinduOthersgirlsI from student where standard='I' AND gender='FeMale' AND religion='Hindu' AND category='Others' )     AS 'hinduOthersgirlsI',
(SELECT count(studentid) as hinduOthersgirlsII from student where standard='II' AND gender='FeMale' AND religion='Hindu' AND category='Others' )   AS 'hinduOthersgirlsII',
(SELECT count(studentid) as hinduOthersgirlsIII from student where standard='III' AND gender='FeMale' AND religion='Hindu' AND category='Others')  AS 'hinduOthersgirlsIII',
(SELECT count(studentid) as hinduOthersgirlsIV from student where standard='IV' AND gender='FeMale' AND religion='Hindu' AND category='Others')    AS 'hinduOthersgirlsIV',
(SELECT count(studentid) as hinduOthersgirlsV from student where standard='V' AND gender='FeMale' AND religion='Hindu' AND category='Others' )     AS 'hinduOthersgirlsV',
(SELECT count(studentid) as hinduOthersgirlsVI from student where standard='VI' AND gender='FeMale' AND religion='Hindu' AND category='Others' )   AS 'hinduOthersgirlsVI',
(SELECT count(studentid) as hinduOthersgirlsVII from student where standard='VII' AND gender='FeMale' AND religion='Hindu' AND category='Others' ) AS 'hinduOthersgirlsVII',
(SELECT count(studentid) as hinduOthersgirlsVIII from student where standard='VIII' AND gender='FeMale' AND religion='Hindu' AND category='Others')AS 'hinduOthersgirlsVIII',
(SELECT count(studentid) as hinduOthersgirlsIX from student where standard='IX' AND gender='FeMale' AND religion='Hindu' AND category='Others' )   AS 'hinduOthersgirlsIX',
(SELECT count(studentid) as hinduOthersgirlsX from student where standard='X' AND gender='FeMale' AND religion='Hindu' AND category='Others' )     AS 'hinduOthersgirlsX',
(SELECT count(studentid) as hinduOthersgirlsXI from student where standard='XI' AND gender='FeMale' AND religion='Hindu' AND category='Others')    AS 'hinduOthersgirlsXI',
(SELECT count(studentid) as hinduOthersgirlsXII from student where standard='XII' AND gender='FeMale' AND religion='Hindu' AND category='Others' ) AS 'hinduOthersgirlsXII',

(SELECT count(studentid) as MuslimOthersboyslkg from student where standard='LKG' AND gender='Male' AND religion='Muslim' AND category='Others' ) AS 'MuslimOthersboyslkg',
(SELECT count(studentid) as MuslimOthersboysukg from student where standard='UKG' AND gender='Male' AND religion='Muslim' AND category='Others' ) AS 'MuslimOthersboysukg',
(SELECT count(studentid) as MuslimOthersboysI from student where standard='I' AND gender='Male' AND religion='Muslim' AND category='Others' )     AS 'MuslimOthersboysI',
(SELECT count(studentid) as MuslimOthersboysII from student where standard='II' AND gender='Male' AND religion='Muslim' AND category='Others' )   AS 'MuslimOthersboysII',
(SELECT count(studentid) as MuslimOthersboysIII from student where standard='III' AND gender='Male' AND religion='Muslim' AND category='Others')  AS 'MuslimOthersboysIII',
(SELECT count(studentid) as MuslimOthersboysIV from student where standard='IV' AND gender='Male' AND religion='Muslim' AND category='Others')    AS 'MuslimOthersboysIV',
(SELECT count(studentid) as MuslimOthersboysV from student where standard='V' AND gender='Male' AND religion='Muslim' AND category='Others' )     AS 'MuslimOthersboysV',
(SELECT count(studentid) as MuslimOthersboysVI from student where standard='VI' AND gender='Male' AND religion='Muslim' AND category='Others' )   AS 'MuslimOthersboysVI',
(SELECT count(studentid) as MuslimOthersboysVII from student where standard='VII' AND gender='Male' AND religion='Muslim' AND category='Others' ) AS 'MuslimOthersboysVII',
(SELECT count(studentid) as MuslimOthersboysVIII from student where standard='VIII' AND gender='Male' AND religion='Muslim' AND category='Others')AS 'MuslimOthersboysVIII',
(SELECT count(studentid) as MuslimOthersboysIX from student where standard='IX' AND gender='Male' AND religion='Muslim' AND category='Others' )   AS 'MuslimOthersboysIX',
(SELECT count(studentid) as MuslimOthersboysX from student where standard='X' AND gender='Male' AND religion='Muslim' AND category='Others' )     AS 'MuslimOthersboysX',
(SELECT count(studentid) as MuslimOthersboysXI from student where standard='XI' AND gender='Male' AND religion='Muslim' AND category='Others')    AS 'MuslimOthersboysXI',
(SELECT count(studentid) as MuslimOthersboysXII from student where standard='XII' AND gender='Male' AND religion='Muslim' AND category='Others' ) AS 'MuslimOthersboysXII',

(SELECT count(studentid) as MuslimOthersgirlslkg from student where standard='LKG' AND gender='FeMale' AND religion='Muslim' AND category='Others' ) AS 'MuslimOthersgirlslkg',
(SELECT count(studentid) as MuslimOthersgirlsukg from student where standard='UKG' AND gender='FeMale' AND religion='Muslim' AND category='Others' ) AS 'MuslimOthersgirlsukg',
(SELECT count(studentid) as MuslimOthersgirlsI from student where standard='I' AND gender='FeMale' AND religion='Muslim' AND category='Others' )     AS 'MuslimOthersgirlsI',
(SELECT count(studentid) as MuslimOthersgirlsII from student where standard='II' AND gender='FeMale' AND religion='Muslim' AND category='Others' )   AS 'MuslimOthersgirlsII',
(SELECT count(studentid) as MuslimOthersgirlsIII from student where standard='III' AND gender='FeMale' AND religion='Muslim' AND category='Others')  AS 'MuslimOthersgirlsIII',
(SELECT count(studentid) as MuslimOthersgirlsIV from student where standard='IV' AND gender='FeMale' AND religion='Muslim' AND category='Others')    AS 'MuslimOthersgirlsIV',
(SELECT count(studentid) as MuslimOthersgirlsV from student where standard='V' AND gender='FeMale' AND religion='Muslim' AND category='Others' )     AS 'MuslimOthersgirlsV',
(SELECT count(studentid) as MuslimOthersgirlsVI from student where standard='VI' AND gender='FeMale' AND religion='Muslim' AND category='Others' )   AS 'MuslimOthersgirlsVI',
(SELECT count(studentid) as MuslimOthersgirlsVII from student where standard='VII' AND gender='FeMale' AND religion='Muslim' AND category='Others' ) AS 'MuslimOthersgirlsVII',
(SELECT count(studentid) as MuslimOthersgirlsVIII from student where standard='VIII' AND gender='FeMale' AND religion='Muslim' AND category='Others')AS 'MuslimOthersgirlsVIII',
(SELECT count(studentid) as MuslimOthersgirlsIX from student where standard='IX' AND gender='FeMale' AND religion='Muslim' AND category='Others' )   AS 'MuslimOthersgirlsIX',
(SELECT count(studentid) as MuslimOthersgirlsX from student where standard='X' AND gender='FeMale' AND religion='Muslim' AND category='Others' )     AS 'MuslimOthersgirlsX',
(SELECT count(studentid) as MuslimOthersgirlsXI from student where standard='XI' AND gender='FeMale' AND religion='Muslim' AND category='Others')    AS 'MuslimOthersgirlsXI',
(SELECT count(studentid) as MuslimOthersgirlsXII from student where standard='XII' AND gender='FeMale' AND religion='Muslim' AND category='Others' ) AS 'MuslimOthersgirlsXII',

(SELECT count(studentid) as ChristianOthersboyslkg from student where standard='LKG' AND gender='Male' AND religion='Christian' AND category='Others' ) AS 'ChristianOthersboyslkg',
(SELECT count(studentid) as ChristianOthersboysukg from student where standard='UKG' AND gender='Male' AND religion='Christian' AND category='Others' ) AS 'ChristianOthersboysukg',
(SELECT count(studentid) as ChristianOthersboysI from student where standard='I' AND gender='Male' AND religion='Christian' AND category='Others' )     AS 'ChristianOthersboysI',
(SELECT count(studentid) as ChristianOthersboysII from student where standard='II' AND gender='Male' AND religion='Christian' AND category='Others' )   AS 'ChristianOthersboysII',
(SELECT count(studentid) as ChristianOthersboysIII from student where standard='III' AND gender='Male' AND religion='Christian' AND category='Others')  AS 'ChristianOthersboysIII',
(SELECT count(studentid) as ChristianOthersboysIV from student where standard='IV' AND gender='Male' AND religion='Christian' AND category='Others')    AS 'ChristianOthersboysIV',
(SELECT count(studentid) as ChristianOthersboysV from student where standard='V' AND gender='Male' AND religion='Christian' AND category='Others' )     AS 'ChristianOthersboysV',
(SELECT count(studentid) as ChristianOthersboysVI from student where standard='VI' AND gender='Male' AND religion='Christian' AND category='Others' )   AS 'ChristianOthersboysVI',
(SELECT count(studentid) as ChristianOthersboysVII from student where standard='VII' AND gender='Male' AND religion='Christian' AND category='Others' ) AS 'ChristianOthersboysVII',
(SELECT count(studentid) as ChristianOthersboysVIII from student where standard='VIII' AND gender='Male' AND religion='Christian' AND category='Others')AS 'ChristianOthersboysVIII',
(SELECT count(studentid) as ChristianOthersboysIX from student where standard='IX' AND gender='Male' AND religion='Christian' AND category='Others' )   AS 'ChristianOthersboysIX',
(SELECT count(studentid) as ChristianOthersboysX from student where standard='X' AND gender='Male' AND religion='Christian' AND category='Others' )     AS 'ChristianOthersboysX',
(SELECT count(studentid) as ChristianOthersboysXI from student where standard='XI' AND gender='Male' AND religion='Christian' AND category='Others')    AS 'ChristianOthersboysXI',
(SELECT count(studentid) as ChristianOthersboysXII from student where standard='XII' AND gender='Male' AND religion='Christian' AND category='Others' ) AS 'ChristianOthersboysXII',

(SELECT count(studentid) as ChristianOthersgirlslkg from student where standard='LKG' AND gender='FeMale' AND religion='Christian' AND category='Others' ) AS 'ChristianOthersgirlslkg',
(SELECT count(studentid) as ChristianOthersgirlsukg from student where standard='UKG' AND gender='FeMale' AND religion='Christian' AND category='Others' ) AS 'ChristianOthersgirlsukg',
(SELECT count(studentid) as ChristianOthersgirlsI from student where standard='I' AND gender='FeMale' AND religion='Christian' AND category='Others' )     AS 'ChristianOthersgirlsI',
(SELECT count(studentid) as ChristianOthersgirlsII from student where standard='II' AND gender='FeMale' AND religion='Christian' AND category='Others' )   AS 'ChristianOthersgirlsII',
(SELECT count(studentid) as ChristianOthersgirlsIII from student where standard='III' AND gender='FeMale' AND religion='Christian' AND category='Others')  AS 'ChristianOthersgirlsIII',
(SELECT count(studentid) as ChristianOthersgirlsIV from student where standard='IV' AND gender='FeMale' AND religion='Christian' AND category='Others')    AS 'ChristianOthersgirlsIV',
(SELECT count(studentid) as ChristianOthersgirlsV from student where standard='V' AND gender='FeMale' AND religion='Christian' AND category='Others' )     AS 'ChristianOthersgirlsV',
(SELECT count(studentid) as ChristianOthersgirlsVI from student where standard='VI' AND gender='FeMale' AND religion='Christian' AND category='Others' )   AS 'ChristianOthersgirlsVI',
(SELECT count(studentid) as ChristianOthersgirlsVII from student where standard='VII' AND gender='FeMale' AND religion='Christian' AND category='Others' ) AS 'ChristianOthersgirlsVII',
(SELECT count(studentid) as ChristianOthersgirlsVIII from student where standard='VIII' AND gender='FeMale' AND religion='Christian' AND category='Others')AS 'ChristianOthersgirlsVIII',
(SELECT count(studentid) as ChristianOthersgirlsIX from student where standard='IX' AND gender='FeMale' AND religion='Christian' AND category='Others' )   AS 'ChristianOthersgirlsIX',
(SELECT count(studentid) as ChristianOthersgirlsX from student where standard='X' AND gender='FeMale' AND religion='Christian' AND category='Others' )     AS 'ChristianOthersgirlsX',
(SELECT count(studentid) as ChristianOthersgirlsXI from student where standard='XI' AND gender='FeMale' AND religion='Christian' AND category='Others')    AS 'ChristianOthersgirlsXI',
(SELECT count(studentid) as ChristianOthersgirlsXII from student where standard='XII' AND gender='FeMale' AND religion='Christian' AND category='Others' ) AS 'ChristianOthersgirlsXII'
From Student where 1  ";


if (isset($_POST['order'])) {
    $query .= 'ORDER BY ' . $column[$_POST['order']['0']['column']] . ' ' . $_POST['order']['0']['dir'] . ' ';
} else {
    $query .= ' ';
}

$query1 = '';



$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $connect->prepare($query . $query1);

$statement->execute();

$result = $statement->fetchAll();

$data = array();

foreach ($result as $row) {    
    $totallkg = $row['totallkg'];
    $totalukg = $row['totalukg'];
    $totalI   = $row['totalI'];
    $totalII  = $row['totalII'];
    $totalIII = $row['totalIII'];
    $totalIV  = $row['totalIV'];
    $totalV   = $row['totalV'];
    $totalVI  = $row['totalVI'];
    $totalVII = $row['totalVII'];
    $totalVIII  = $row['totalVIII'];
    $totalIX  = $row['totalIX'];
    $totalX   = $row['totalX'];
    $totalXI  = $row['totalXI'];
    $totalXII = $row['totalXII'];

    
    $hindubcboyslkg = $row['hindubcboyslkg'];
    $hindubcboysukg = $row['hindubcboysukg'];
    $hindubcboysI   = $row['hindubcboysI'];
    $hindubcboysII  = $row['hindubcboysII'];
    $hindubcboysIII = $row['hindubcboysIII'];
    $hindubcboysIV  = $row['hindubcboysIV'];
    $hindubcboysV   = $row['hindubcboysV'];
    $hindubcboysVI  = $row['hindubcboysVI'];
    $hindubcboysVII = $row['hindubcboysVII'];
    $hindubcboysVIII= $row['hindubcboysVIII'];
    $hindubcboysIX  = $row['hindubcboysIX'];
    $hindubcboysX   = $row['hindubcboysX'];
    $hindubcboysXI  = $row['hindubcboysXI'];
    $hindubcboysXII = $row['hindubcboysXII'];
	
	$hindubcgirlslkg = $row['hindubcgirlslkg'];
    $hindubcgirlsukg = $row['hindubcgirlsukg'];
    $hindubcgirlsI   = $row['hindubcgirlsI'];
    $hindubcgirlsII  = $row['hindubcgirlsII'];
    $hindubcgirlsIII = $row['hindubcgirlsIII'];
    $hindubcgirlsIV  = $row['hindubcgirlsIV'];
    $hindubcgirlsV   = $row['hindubcgirlsV'];
    $hindubcgirlsVI  = $row['hindubcgirlsVI'];
    $hindubcgirlsVII = $row['hindubcgirlsVII'];
    $hindubcgirlsVIII= $row['hindubcgirlsVIII'];
    $hindubcgirlsIX  = $row['hindubcgirlsIX'];
    $hindubcgirlsX   = $row['hindubcgirlsX'];
    $hindubcgirlsXI  = $row['hindubcgirlsXI'];
    $hindubcgirlsXII = $row['hindubcgirlsXII'];
	
	$Muslimbcboyslkg = $row['Muslimbcboyslkg'];
    $Muslimbcboysukg = $row['Muslimbcboysukg'];
    $MuslimbcboysI   = $row['MuslimbcboysI'];
    $MuslimbcboysII  = $row['MuslimbcboysII'];
    $MuslimbcboysIII = $row['MuslimbcboysIII'];
    $MuslimbcboysIV  = $row['MuslimbcboysIV'];
    $MuslimbcboysV   = $row['MuslimbcboysV'];
    $MuslimbcboysVI  = $row['MuslimbcboysVI'];
    $MuslimbcboysVII = $row['MuslimbcboysVII'];
    $MuslimbcboysVIII= $row['MuslimbcboysVIII'];
    $MuslimbcboysIX  = $row['MuslimbcboysIX'];
    $MuslimbcboysX   = $row['MuslimbcboysX'];
    $MuslimbcboysXI  = $row['MuslimbcboysXI'];
    $MuslimbcboysXII = $row['MuslimbcboysXII'];
	
	$Muslimbcgirlslkg = $row['Muslimbcgirlslkg'];
    $Muslimbcgirlsukg = $row['Muslimbcgirlsukg'];
    $MuslimbcgirlsI   = $row['MuslimbcgirlsI'];
    $MuslimbcgirlsII  = $row['MuslimbcgirlsII'];
    $MuslimbcgirlsIII = $row['MuslimbcgirlsIII'];
    $MuslimbcgirlsIV  = $row['MuslimbcgirlsIV'];
    $MuslimbcgirlsV   = $row['MuslimbcgirlsV'];
    $MuslimbcgirlsVI  = $row['MuslimbcgirlsVI'];
    $MuslimbcgirlsVII = $row['MuslimbcgirlsVII'];
    $MuslimbcgirlsVIII= $row['MuslimbcgirlsVIII'];
    $MuslimbcgirlsIX  = $row['MuslimbcgirlsIX'];
    $MuslimbcgirlsX   = $row['MuslimbcgirlsX'];
    $MuslimbcgirlsXI  = $row['MuslimbcgirlsXI'];
    $MuslimbcgirlsXII = $row['MuslimbcgirlsXII'];
	
	$Christianbcboyslkg = $row['Christianbcboyslkg'];
    $Christianbcboysukg = $row['Christianbcboysukg'];
    $ChristianbcboysI   = $row['ChristianbcboysI'];
    $ChristianbcboysII  = $row['ChristianbcboysII'];
    $ChristianbcboysIII = $row['ChristianbcboysIII'];
    $ChristianbcboysIV  = $row['ChristianbcboysIV'];
    $ChristianbcboysV   = $row['ChristianbcboysV'];
    $ChristianbcboysVI  = $row['ChristianbcboysVI'];
    $ChristianbcboysVII = $row['ChristianbcboysVII'];
    $ChristianbcboysVIII= $row['ChristianbcboysVIII'];
    $ChristianbcboysIX  = $row['ChristianbcboysIX'];
    $ChristianbcboysX   = $row['ChristianbcboysX'];
    $ChristianbcboysXI  = $row['ChristianbcboysXI'];
    $ChristianbcboysXII = $row['ChristianbcboysXII'];
	
	$Christianbcgirlslkg = $row['Christianbcgirlslkg'];
    $Christianbcgirlsukg = $row['Christianbcgirlsukg'];
    $ChristianbcgirlsI   = $row['ChristianbcgirlsI'];
    $ChristianbcgirlsII  = $row['ChristianbcgirlsII'];
    $ChristianbcgirlsIII = $row['ChristianbcgirlsIII'];
    $ChristianbcgirlsIV  = $row['ChristianbcgirlsIV'];
    $ChristianbcgirlsV   = $row['ChristianbcgirlsV'];
    $ChristianbcgirlsVI  = $row['ChristianbcgirlsVI'];
    $ChristianbcgirlsVII = $row['ChristianbcgirlsVII'];
    $ChristianbcgirlsVIII= $row['ChristianbcgirlsVIII'];
    $ChristianbcgirlsIX  = $row['ChristianbcgirlsIX'];
    $ChristianbcgirlsX   = $row['ChristianbcgirlsX'];
    $ChristianbcgirlsXI  = $row['ChristianbcgirlsXI'];
    $ChristianbcgirlsXII = $row['ChristianbcgirlsXII'];
	

    $hinduMBCboyslkg = $row['hinduMBCboyslkg'];
    $hinduMBCboysukg = $row['hinduMBCboysukg'];
    $hinduMBCboysI   = $row['hinduMBCboysI'];
    $hinduMBCboysII  = $row['hinduMBCboysII'];
    $hinduMBCboysIII = $row['hinduMBCboysIII'];
    $hinduMBCboysIV  = $row['hinduMBCboysIV'];
    $hinduMBCboysV   = $row['hinduMBCboysV'];
    $hinduMBCboysVI  = $row['hinduMBCboysVI'];
    $hinduMBCboysVII = $row['hinduMBCboysVII'];
    $hinduMBCboysVIII= $row['hinduMBCboysVIII'];
    $hinduMBCboysIX  = $row['hinduMBCboysIX'];
    $hinduMBCboysX   = $row['hinduMBCboysX'];
    $hinduMBCboysXI  = $row['hinduMBCboysXI'];
    $hinduMBCboysXII = $row['hinduMBCboysXII'];
	
	$hinduMBCgirlslkg = $row['hinduMBCgirlslkg'];
    $hinduMBCgirlsukg = $row['hinduMBCgirlsukg'];
    $hinduMBCgirlsI   = $row['hinduMBCgirlsI'];
    $hinduMBCgirlsII  = $row['hinduMBCgirlsII'];
    $hinduMBCgirlsIII = $row['hinduMBCgirlsIII'];
    $hinduMBCgirlsIV  = $row['hinduMBCgirlsIV'];
    $hinduMBCgirlsV   = $row['hinduMBCgirlsV'];
    $hinduMBCgirlsVI  = $row['hinduMBCgirlsVI'];
    $hinduMBCgirlsVII = $row['hinduMBCgirlsVII'];
    $hinduMBCgirlsVIII= $row['hinduMBCgirlsVIII'];
    $hinduMBCgirlsIX  = $row['hinduMBCgirlsIX'];
    $hinduMBCgirlsX   = $row['hinduMBCgirlsX'];
    $hinduMBCgirlsXI  = $row['hinduMBCgirlsXI'];
    $hinduMBCgirlsXII = $row['hinduMBCgirlsXII'];
	
	$MuslimMBCboyslkg = $row['MuslimMBCboyslkg'];
    $MuslimMBCboysukg = $row['MuslimMBCboysukg'];
    $MuslimMBCboysI   = $row['MuslimMBCboysI'];
    $MuslimMBCboysII  = $row['MuslimMBCboysII'];
    $MuslimMBCboysIII = $row['MuslimMBCboysIII'];
    $MuslimMBCboysIV  = $row['MuslimMBCboysIV'];
    $MuslimMBCboysV   = $row['MuslimMBCboysV'];
    $MuslimMBCboysVI  = $row['MuslimMBCboysVI'];
    $MuslimMBCboysVII = $row['MuslimMBCboysVII'];
    $MuslimMBCboysVIII= $row['MuslimMBCboysVIII'];
    $MuslimMBCboysIX  = $row['MuslimMBCboysIX'];
    $MuslimMBCboysX   = $row['MuslimMBCboysX'];
    $MuslimMBCboysXI  = $row['MuslimMBCboysXI'];
    $MuslimMBCboysXII = $row['MuslimMBCboysXII'];
	
	$MuslimMBCgirlslkg = $row['MuslimMBCgirlslkg'];
    $MuslimMBCgirlsukg = $row['MuslimMBCgirlsukg'];
    $MuslimMBCgirlsI   = $row['MuslimMBCgirlsI'];
    $MuslimMBCgirlsII  = $row['MuslimMBCgirlsII'];
    $MuslimMBCgirlsIII = $row['MuslimMBCgirlsIII'];
    $MuslimMBCgirlsIV  = $row['MuslimMBCgirlsIV'];
    $MuslimMBCgirlsV   = $row['MuslimMBCgirlsV'];
    $MuslimMBCgirlsVI  = $row['MuslimMBCgirlsVI'];
    $MuslimMBCgirlsVII = $row['MuslimMBCgirlsVII'];
    $MuslimMBCgirlsVIII= $row['MuslimMBCgirlsVIII'];
    $MuslimMBCgirlsIX  = $row['MuslimMBCgirlsIX'];
    $MuslimMBCgirlsX   = $row['MuslimMBCgirlsX'];
    $MuslimMBCgirlsXI  = $row['MuslimMBCgirlsXI'];
    $MuslimMBCgirlsXII = $row['MuslimMBCgirlsXII'];
	
	$ChristianMBCboyslkg = $row['ChristianMBCboyslkg'];
    $ChristianMBCboysukg = $row['ChristianMBCboysukg'];
    $ChristianMBCboysI   = $row['ChristianMBCboysI'];
    $ChristianMBCboysII  = $row['ChristianMBCboysII'];
    $ChristianMBCboysIII = $row['ChristianMBCboysIII'];
    $ChristianMBCboysIV  = $row['ChristianMBCboysIV'];
    $ChristianMBCboysV   = $row['ChristianMBCboysV'];
    $ChristianMBCboysVI  = $row['ChristianMBCboysVI'];
    $ChristianMBCboysVII = $row['ChristianMBCboysVII'];
    $ChristianMBCboysVIII= $row['ChristianMBCboysVIII'];
    $ChristianMBCboysIX  = $row['ChristianMBCboysIX'];
    $ChristianMBCboysX   = $row['ChristianMBCboysX'];
    $ChristianMBCboysXI  = $row['ChristianMBCboysXI'];
    $ChristianMBCboysXII = $row['ChristianMBCboysXII'];
	
	$ChristianMBCgirlslkg = $row['ChristianMBCgirlslkg'];
    $ChristianMBCgirlsukg = $row['ChristianMBCgirlsukg'];
    $ChristianMBCgirlsI   = $row['ChristianMBCgirlsI'];
    $ChristianMBCgirlsII  = $row['ChristianMBCgirlsII'];
    $ChristianMBCgirlsIII = $row['ChristianMBCgirlsIII'];
    $ChristianMBCgirlsIV  = $row['ChristianMBCgirlsIV'];
    $ChristianMBCgirlsV   = $row['ChristianMBCgirlsV'];
    $ChristianMBCgirlsVI  = $row['ChristianMBCgirlsVI'];
    $ChristianMBCgirlsVII = $row['ChristianMBCgirlsVII'];
    $ChristianMBCgirlsVIII= $row['ChristianMBCgirlsVIII'];
    $ChristianMBCgirlsIX  = $row['ChristianMBCgirlsIX'];
    $ChristianMBCgirlsX   = $row['ChristianMBCgirlsX'];
    $ChristianMBCgirlsXI  = $row['ChristianMBCgirlsXI'];
    $ChristianMBCgirlsXII = $row['ChristianMBCgirlsXII'];


    $hinduSCboyslkg = $row['hinduSCboyslkg'];
    $hinduSCboysukg = $row['hinduSCboysukg'];
    $hinduSCboysI   = $row['hinduSCboysI'];
    $hinduSCboysII  = $row['hinduSCboysII'];
    $hinduSCboysIII = $row['hinduSCboysIII'];
    $hinduSCboysIV  = $row['hinduSCboysIV'];
    $hinduSCboysV   = $row['hinduSCboysV'];
    $hinduSCboysVI  = $row['hinduSCboysVI'];
    $hinduSCboysVII = $row['hinduSCboysVII'];
    $hinduSCboysVIII= $row['hinduSCboysVIII'];
    $hinduSCboysIX  = $row['hinduSCboysIX'];
    $hinduSCboysX   = $row['hinduSCboysX'];
    $hinduSCboysXI  = $row['hinduSCboysXI'];
    $hinduSCboysXII = $row['hinduSCboysXII'];
	
	$hinduSCgirlslkg = $row['hinduSCgirlslkg'];
    $hinduSCgirlsukg = $row['hinduSCgirlsukg'];
    $hinduSCgirlsI   = $row['hinduSCgirlsI'];
    $hinduSCgirlsII  = $row['hinduSCgirlsII'];
    $hinduSCgirlsIII = $row['hinduSCgirlsIII'];
    $hinduSCgirlsIV  = $row['hinduSCgirlsIV'];
    $hinduSCgirlsV   = $row['hinduSCgirlsV'];
    $hinduSCgirlsVI  = $row['hinduSCgirlsVI'];
    $hinduSCgirlsVII = $row['hinduSCgirlsVII'];
    $hinduSCgirlsVIII= $row['hinduSCgirlsVIII'];
    $hinduSCgirlsIX  = $row['hinduSCgirlsIX'];
    $hinduSCgirlsX   = $row['hinduSCgirlsX'];
    $hinduSCgirlsXI  = $row['hinduSCgirlsXI'];
    $hinduSCgirlsXII = $row['hinduSCgirlsXII'];
	
	$MuslimSCboyslkg = $row['MuslimSCboyslkg'];
    $MuslimSCboysukg = $row['MuslimSCboysukg'];
    $MuslimSCboysI   = $row['MuslimSCboysI'];
    $MuslimSCboysII  = $row['MuslimSCboysII'];
    $MuslimSCboysIII = $row['MuslimSCboysIII'];
    $MuslimSCboysIV  = $row['MuslimSCboysIV'];
    $MuslimSCboysV   = $row['MuslimSCboysV'];
    $MuslimSCboysVI  = $row['MuslimSCboysVI'];
    $MuslimSCboysVII = $row['MuslimSCboysVII'];
    $MuslimSCboysVIII= $row['MuslimSCboysVIII'];
    $MuslimSCboysIX  = $row['MuslimSCboysIX'];
    $MuslimSCboysX   = $row['MuslimSCboysX'];
    $MuslimSCboysXI  = $row['MuslimSCboysXI'];
    $MuslimSCboysXII = $row['MuslimSCboysXII'];
	
	$MuslimSCgirlslkg = $row['MuslimSCgirlslkg'];
    $MuslimSCgirlsukg = $row['MuslimSCgirlsukg'];
    $MuslimSCgirlsI   = $row['MuslimSCgirlsI'];
    $MuslimSCgirlsII  = $row['MuslimSCgirlsII'];
    $MuslimSCgirlsIII = $row['MuslimSCgirlsIII'];
    $MuslimSCgirlsIV  = $row['MuslimSCgirlsIV'];
    $MuslimSCgirlsV   = $row['MuslimSCgirlsV'];
    $MuslimSCgirlsVI  = $row['MuslimSCgirlsVI'];
    $MuslimSCgirlsVII = $row['MuslimSCgirlsVII'];
    $MuslimSCgirlsVIII= $row['MuslimSCgirlsVIII'];
    $MuslimSCgirlsIX  = $row['MuslimSCgirlsIX'];
    $MuslimSCgirlsX   = $row['MuslimSCgirlsX'];
    $MuslimSCgirlsXI  = $row['MuslimSCgirlsXI'];
    $MuslimSCgirlsXII = $row['MuslimSCgirlsXII'];
	
	$ChristianSCboyslkg = $row['ChristianSCboyslkg'];
    $ChristianSCboysukg = $row['ChristianSCboysukg'];
    $ChristianSCboysI   = $row['ChristianSCboysI'];
    $ChristianSCboysII  = $row['ChristianSCboysII'];
    $ChristianSCboysIII = $row['ChristianSCboysIII'];
    $ChristianSCboysIV  = $row['ChristianSCboysIV'];
    $ChristianSCboysV   = $row['ChristianSCboysV'];
    $ChristianSCboysVI  = $row['ChristianSCboysVI'];
    $ChristianSCboysVII = $row['ChristianSCboysVII'];
    $ChristianSCboysVIII= $row['ChristianSCboysVIII'];
    $ChristianSCboysIX  = $row['ChristianSCboysIX'];
    $ChristianSCboysX   = $row['ChristianSCboysX'];
    $ChristianSCboysXI  = $row['ChristianSCboysXI'];
    $ChristianSCboysXII = $row['ChristianSCboysXII'];
	
	$ChristianSCgirlslkg = $row['ChristianSCgirlslkg'];
    $ChristianSCgirlsukg = $row['ChristianSCgirlsukg'];
    $ChristianSCgirlsI   = $row['ChristianSCgirlsI'];
    $ChristianSCgirlsII  = $row['ChristianSCgirlsII'];
    $ChristianSCgirlsIII = $row['ChristianSCgirlsIII'];
    $ChristianSCgirlsIV  = $row['ChristianSCgirlsIV'];
    $ChristianSCgirlsV   = $row['ChristianSCgirlsV'];
    $ChristianSCgirlsVI  = $row['ChristianSCgirlsVI'];
    $ChristianSCgirlsVII = $row['ChristianSCgirlsVII'];
    $ChristianSCgirlsVIII= $row['ChristianSCgirlsVIII'];
    $ChristianSCgirlsIX  = $row['ChristianSCgirlsIX'];
    $ChristianSCgirlsX   = $row['ChristianSCgirlsX'];
    $ChristianSCgirlsXI  = $row['ChristianSCgirlsXI'];
    $ChristianSCgirlsXII = $row['ChristianSCgirlsXII'];


    $hinduSTboyslkg = $row['hinduSTboyslkg'];
    $hinduSTboysukg = $row['hinduSTboysukg'];
    $hinduSTboysI   = $row['hinduSTboysI'];
    $hinduSTboysII  = $row['hinduSTboysII'];
    $hinduSTboysIII = $row['hinduSTboysIII'];
    $hinduSTboysIV  = $row['hinduSTboysIV'];
    $hinduSTboysV   = $row['hinduSTboysV'];
    $hinduSTboysVI  = $row['hinduSTboysVI'];
    $hinduSTboysVII = $row['hinduSTboysVII'];
    $hinduSTboysVIII= $row['hinduSTboysVIII'];
    $hinduSTboysIX  = $row['hinduSTboysIX'];
    $hinduSTboysX   = $row['hinduSTboysX'];
    $hinduSTboysXI  = $row['hinduSTboysXI'];
    $hinduSTboysXII = $row['hinduSTboysXII'];
	
	$hinduSTgirlslkg = $row['hinduSTgirlslkg'];
    $hinduSTgirlsukg = $row['hinduSTgirlsukg'];
    $hinduSTgirlsI   = $row['hinduSTgirlsI'];
    $hinduSTgirlsII  = $row['hinduSTgirlsII'];
    $hinduSTgirlsIII = $row['hinduSTgirlsIII'];
    $hinduSTgirlsIV  = $row['hinduSTgirlsIV'];
    $hinduSTgirlsV   = $row['hinduSTgirlsV'];
    $hinduSTgirlsVI  = $row['hinduSTgirlsVI'];
    $hinduSTgirlsVII = $row['hinduSTgirlsVII'];
    $hinduSTgirlsVIII= $row['hinduSTgirlsVIII'];
    $hinduSTgirlsIX  = $row['hinduSTgirlsIX'];
    $hinduSTgirlsX   = $row['hinduSTgirlsX'];
    $hinduSTgirlsXI  = $row['hinduSTgirlsXI'];
    $hinduSTgirlsXII = $row['hinduSTgirlsXII'];
	
	$MuslimSTboyslkg = $row['MuslimSTboyslkg'];
    $MuslimSTboysukg = $row['MuslimSTboysukg'];
    $MuslimSTboysI   = $row['MuslimSTboysI'];
    $MuslimSTboysII  = $row['MuslimSTboysII'];
    $MuslimSTboysIII = $row['MuslimSTboysIII'];
    $MuslimSTboysIV  = $row['MuslimSTboysIV'];
    $MuslimSTboysV   = $row['MuslimSTboysV'];
    $MuslimSTboysVI  = $row['MuslimSTboysVI'];
    $MuslimSTboysVII = $row['MuslimSTboysVII'];
    $MuslimSTboysVIII= $row['MuslimSTboysVIII'];
    $MuslimSTboysIX  = $row['MuslimSTboysIX'];
    $MuslimSTboysX   = $row['MuslimSTboysX'];
    $MuslimSTboysXI  = $row['MuslimSTboysXI'];
    $MuslimSTboysXII = $row['MuslimSTboysXII'];
	
	$MuslimSTgirlslkg = $row['MuslimSTgirlslkg'];
    $MuslimSTgirlsukg = $row['MuslimSTgirlsukg'];
    $MuslimSTgirlsI   = $row['MuslimSTgirlsI'];
    $MuslimSTgirlsII  = $row['MuslimSTgirlsII'];
    $MuslimSTgirlsIII = $row['MuslimSTgirlsIII'];
    $MuslimSTgirlsIV  = $row['MuslimSTgirlsIV'];
    $MuslimSTgirlsV   = $row['MuslimSTgirlsV'];
    $MuslimSTgirlsVI  = $row['MuslimSTgirlsVI'];
    $MuslimSTgirlsVII = $row['MuslimSTgirlsVII'];
    $MuslimSTgirlsVIII= $row['MuslimSTgirlsVIII'];
    $MuslimSTgirlsIX  = $row['MuslimSTgirlsIX'];
    $MuslimSTgirlsX   = $row['MuslimSTgirlsX'];
    $MuslimSTgirlsXI  = $row['MuslimSTgirlsXI'];
    $MuslimSTgirlsXII = $row['MuslimSTgirlsXII'];
	
	$ChristianSTboyslkg = $row['ChristianSTboyslkg'];
    $ChristianSTboysukg = $row['ChristianSTboysukg'];
    $ChristianSTboysI   = $row['ChristianSTboysI'];
    $ChristianSTboysII  = $row['ChristianSTboysII'];
    $ChristianSTboysIII = $row['ChristianSTboysIII'];
    $ChristianSTboysIV  = $row['ChristianSTboysIV'];
    $ChristianSTboysV   = $row['ChristianSTboysV'];
    $ChristianSTboysVI  = $row['ChristianSTboysVI'];
    $ChristianSTboysVII = $row['ChristianSTboysVII'];
    $ChristianSTboysVIII= $row['ChristianSTboysVIII'];
    $ChristianSTboysIX  = $row['ChristianSTboysIX'];
    $ChristianSTboysX   = $row['ChristianSTboysX'];
    $ChristianSTboysXI  = $row['ChristianSTboysXI'];
    $ChristianSTboysXII = $row['ChristianSTboysXII'];
	
	$ChristianSTgirlslkg = $row['ChristianSTgirlslkg'];
    $ChristianSTgirlsukg = $row['ChristianSTgirlsukg'];
    $ChristianSTgirlsI   = $row['ChristianSTgirlsI'];
    $ChristianSTgirlsII  = $row['ChristianSTgirlsII'];
    $ChristianSTgirlsIII = $row['ChristianSTgirlsIII'];
    $ChristianSTgirlsIV  = $row['ChristianSTgirlsIV'];
    $ChristianSTgirlsV   = $row['ChristianSTgirlsV'];
    $ChristianSTgirlsVI  = $row['ChristianSTgirlsVI'];
    $ChristianSTgirlsVII = $row['ChristianSTgirlsVII'];
    $ChristianSTgirlsVIII= $row['ChristianSTgirlsVIII'];
    $ChristianSTgirlsIX  = $row['ChristianSTgirlsIX'];
    $ChristianSTgirlsX   = $row['ChristianSTgirlsX'];
    $ChristianSTgirlsXI  = $row['ChristianSTgirlsXI'];
    $ChristianSTgirlsXII = $row['ChristianSTgirlsXII'];


    $hinduOBCboyslkg = $row['hinduOBCboyslkg'];
    $hinduOBCboysukg = $row['hinduOBCboysukg'];
    $hinduOBCboysI   = $row['hinduOBCboysI'];
    $hinduOBCboysII  = $row['hinduOBCboysII'];
    $hinduOBCboysIII = $row['hinduOBCboysIII'];
    $hinduOBCboysIV  = $row['hinduOBCboysIV'];
    $hinduOBCboysV   = $row['hinduOBCboysV'];
    $hinduOBCboysVI  = $row['hinduOBCboysVI'];
    $hinduOBCboysVII = $row['hinduOBCboysVII'];
    $hinduOBCboysVIII= $row['hinduOBCboysVIII'];
    $hinduOBCboysIX  = $row['hinduOBCboysIX'];
    $hinduOBCboysX   = $row['hinduOBCboysX'];
    $hinduOBCboysXI  = $row['hinduOBCboysXI'];
    $hinduOBCboysXII = $row['hinduOBCboysXII'];
	
	$hinduOBCgirlslkg = $row['hinduOBCgirlslkg'];
    $hinduOBCgirlsukg = $row['hinduOBCgirlsukg'];
    $hinduOBCgirlsI   = $row['hinduOBCgirlsI'];
    $hinduOBCgirlsII  = $row['hinduOBCgirlsII'];
    $hinduOBCgirlsIII = $row['hinduOBCgirlsIII'];
    $hinduOBCgirlsIV  = $row['hinduOBCgirlsIV'];
    $hinduOBCgirlsV   = $row['hinduOBCgirlsV'];
    $hinduOBCgirlsVI  = $row['hinduOBCgirlsVI'];
    $hinduOBCgirlsVII = $row['hinduOBCgirlsVII'];
    $hinduOBCgirlsVIII= $row['hinduOBCgirlsVIII'];
    $hinduOBCgirlsIX  = $row['hinduOBCgirlsIX'];
    $hinduOBCgirlsX   = $row['hinduOBCgirlsX'];
    $hinduOBCgirlsXI  = $row['hinduOBCgirlsXI'];
    $hinduOBCgirlsXII = $row['hinduOBCgirlsXII'];
	
	$MuslimOBCboyslkg = $row['MuslimOBCboyslkg'];
    $MuslimOBCboysukg = $row['MuslimOBCboysukg'];
    $MuslimOBCboysI   = $row['MuslimOBCboysI'];
    $MuslimOBCboysII  = $row['MuslimOBCboysII'];
    $MuslimOBCboysIII = $row['MuslimOBCboysIII'];
    $MuslimOBCboysIV  = $row['MuslimOBCboysIV'];
    $MuslimOBCboysV   = $row['MuslimOBCboysV'];
    $MuslimOBCboysVI  = $row['MuslimOBCboysVI'];
    $MuslimOBCboysVII = $row['MuslimOBCboysVII'];
    $MuslimOBCboysVIII= $row['MuslimOBCboysVIII'];
    $MuslimOBCboysIX  = $row['MuslimOBCboysIX'];
    $MuslimOBCboysX   = $row['MuslimOBCboysX'];
    $MuslimOBCboysXI  = $row['MuslimOBCboysXI'];
    $MuslimOBCboysXII = $row['MuslimOBCboysXII'];
	
	$MuslimOBCgirlslkg = $row['MuslimOBCgirlslkg'];
    $MuslimOBCgirlsukg = $row['MuslimOBCgirlsukg'];
    $MuslimOBCgirlsI   = $row['MuslimOBCgirlsI'];
    $MuslimOBCgirlsII  = $row['MuslimOBCgirlsII'];
    $MuslimOBCgirlsIII = $row['MuslimOBCgirlsIII'];
    $MuslimOBCgirlsIV  = $row['MuslimOBCgirlsIV'];
    $MuslimOBCgirlsV   = $row['MuslimOBCgirlsV'];
    $MuslimOBCgirlsVI  = $row['MuslimOBCgirlsVI'];
    $MuslimOBCgirlsVII = $row['MuslimOBCgirlsVII'];
    $MuslimOBCgirlsVIII= $row['MuslimOBCgirlsVIII'];
    $MuslimOBCgirlsIX  = $row['MuslimOBCgirlsIX'];
    $MuslimOBCgirlsX   = $row['MuslimOBCgirlsX'];
    $MuslimOBCgirlsXI  = $row['MuslimOBCgirlsXI'];
    $MuslimOBCgirlsXII = $row['MuslimOBCgirlsXII'];
	
	$ChristianOBCboyslkg = $row['ChristianOBCboyslkg'];
    $ChristianOBCboysukg = $row['ChristianOBCboysukg'];
    $ChristianOBCboysI   = $row['ChristianOBCboysI'];
    $ChristianOBCboysII  = $row['ChristianOBCboysII'];
    $ChristianOBCboysIII = $row['ChristianOBCboysIII'];
    $ChristianOBCboysIV  = $row['ChristianOBCboysIV'];
    $ChristianOBCboysV   = $row['ChristianOBCboysV'];
    $ChristianOBCboysVI  = $row['ChristianOBCboysVI'];
    $ChristianOBCboysVII = $row['ChristianOBCboysVII'];
    $ChristianOBCboysVIII= $row['ChristianOBCboysVIII'];
    $ChristianOBCboysIX  = $row['ChristianOBCboysIX'];
    $ChristianOBCboysX   = $row['ChristianOBCboysX'];
    $ChristianOBCboysXI  = $row['ChristianOBCboysXI'];
    $ChristianOBCboysXII = $row['ChristianOBCboysXII'];
	
	$ChristianOBCgirlslkg = $row['ChristianOBCgirlslkg'];
    $ChristianOBCgirlsukg = $row['ChristianOBCgirlsukg'];
    $ChristianOBCgirlsI   = $row['ChristianOBCgirlsI'];
    $ChristianOBCgirlsII  = $row['ChristianOBCgirlsII'];
    $ChristianOBCgirlsIII = $row['ChristianOBCgirlsIII'];
    $ChristianOBCgirlsIV  = $row['ChristianOBCgirlsIV'];
    $ChristianOBCgirlsV   = $row['ChristianOBCgirlsV'];
    $ChristianOBCgirlsVI  = $row['ChristianOBCgirlsVI'];
    $ChristianOBCgirlsVII = $row['ChristianOBCgirlsVII'];
    $ChristianOBCgirlsVIII= $row['ChristianOBCgirlsVIII'];
    $ChristianOBCgirlsIX  = $row['ChristianOBCgirlsIX'];
    $ChristianOBCgirlsX   = $row['ChristianOBCgirlsX'];
    $ChristianOBCgirlsXI  = $row['ChristianOBCgirlsXI'];
    $ChristianOBCgirlsXII = $row['ChristianOBCgirlsXII'];

    $hinduDNCboyslkg = $row['hinduDNCboyslkg'];
    $hinduDNCboysukg = $row['hinduDNCboysukg'];
    $hinduDNCboysI   = $row['hinduDNCboysI'];
    $hinduDNCboysII  = $row['hinduDNCboysII'];
    $hinduDNCboysIII = $row['hinduDNCboysIII'];
    $hinduDNCboysIV  = $row['hinduDNCboysIV'];
    $hinduDNCboysV   = $row['hinduDNCboysV'];
    $hinduDNCboysVI  = $row['hinduDNCboysVI'];
    $hinduDNCboysVII = $row['hinduDNCboysVII'];
    $hinduDNCboysVIII= $row['hinduDNCboysVIII'];
    $hinduDNCboysIX  = $row['hinduDNCboysIX'];
    $hinduDNCboysX   = $row['hinduDNCboysX'];
    $hinduDNCboysXI  = $row['hinduDNCboysXI'];
    $hinduDNCboysXII = $row['hinduDNCboysXII'];
	
	$hinduDNCgirlslkg = $row['hinduDNCgirlslkg'];
    $hinduDNCgirlsukg = $row['hinduDNCgirlsukg'];
    $hinduDNCgirlsI   = $row['hinduDNCgirlsI'];
    $hinduDNCgirlsII  = $row['hinduDNCgirlsII'];
    $hinduDNCgirlsIII = $row['hinduDNCgirlsIII'];
    $hinduDNCgirlsIV  = $row['hinduDNCgirlsIV'];
    $hinduDNCgirlsV   = $row['hinduDNCgirlsV'];
    $hinduDNCgirlsVI  = $row['hinduDNCgirlsVI'];
    $hinduDNCgirlsVII = $row['hinduDNCgirlsVII'];
    $hinduDNCgirlsVIII= $row['hinduDNCgirlsVIII'];
    $hinduDNCgirlsIX  = $row['hinduDNCgirlsIX'];
    $hinduDNCgirlsX   = $row['hinduDNCgirlsX'];
    $hinduDNCgirlsXI  = $row['hinduDNCgirlsXI'];
    $hinduDNCgirlsXII = $row['hinduDNCgirlsXII'];
	
	$MuslimDNCboyslkg = $row['MuslimDNCboyslkg'];
    $MuslimDNCboysukg = $row['MuslimDNCboysukg'];
    $MuslimDNCboysI   = $row['MuslimDNCboysI'];
    $MuslimDNCboysII  = $row['MuslimDNCboysII'];
    $MuslimDNCboysIII = $row['MuslimDNCboysIII'];
    $MuslimDNCboysIV  = $row['MuslimDNCboysIV'];
    $MuslimDNCboysV   = $row['MuslimDNCboysV'];
    $MuslimDNCboysVI  = $row['MuslimDNCboysVI'];
    $MuslimDNCboysVII = $row['MuslimDNCboysVII'];
    $MuslimDNCboysVIII= $row['MuslimDNCboysVIII'];
    $MuslimDNCboysIX  = $row['MuslimDNCboysIX'];
    $MuslimDNCboysX   = $row['MuslimDNCboysX'];
    $MuslimDNCboysXI  = $row['MuslimDNCboysXI'];
    $MuslimDNCboysXII = $row['MuslimDNCboysXII'];
	
	$MuslimDNCgirlslkg = $row['MuslimDNCgirlslkg'];
    $MuslimDNCgirlsukg = $row['MuslimDNCgirlsukg'];
    $MuslimDNCgirlsI   = $row['MuslimDNCgirlsI'];
    $MuslimDNCgirlsII  = $row['MuslimDNCgirlsII'];
    $MuslimDNCgirlsIII = $row['MuslimDNCgirlsIII'];
    $MuslimDNCgirlsIV  = $row['MuslimDNCgirlsIV'];
    $MuslimDNCgirlsV   = $row['MuslimDNCgirlsV'];
    $MuslimDNCgirlsVI  = $row['MuslimDNCgirlsVI'];
    $MuslimDNCgirlsVII = $row['MuslimDNCgirlsVII'];
    $MuslimDNCgirlsVIII= $row['MuslimDNCgirlsVIII'];
    $MuslimDNCgirlsIX  = $row['MuslimDNCgirlsIX'];
    $MuslimDNCgirlsX   = $row['MuslimDNCgirlsX'];
    $MuslimDNCgirlsXI  = $row['MuslimDNCgirlsXI'];
    $MuslimDNCgirlsXII = $row['MuslimDNCgirlsXII'];
	
	$ChristianDNCboyslkg = $row['ChristianDNCboyslkg'];
    $ChristianDNCboysukg = $row['ChristianDNCboysukg'];
    $ChristianDNCboysI   = $row['ChristianDNCboysI'];
    $ChristianDNCboysII  = $row['ChristianDNCboysII'];
    $ChristianDNCboysIII = $row['ChristianDNCboysIII'];
    $ChristianDNCboysIV  = $row['ChristianDNCboysIV'];
    $ChristianDNCboysV   = $row['ChristianDNCboysV'];
    $ChristianDNCboysVI  = $row['ChristianDNCboysVI'];
    $ChristianDNCboysVII = $row['ChristianDNCboysVII'];
    $ChristianDNCboysVIII= $row['ChristianDNCboysVIII'];
    $ChristianDNCboysIX  = $row['ChristianDNCboysIX'];
    $ChristianDNCboysX   = $row['ChristianDNCboysX'];
    $ChristianDNCboysXI  = $row['ChristianDNCboysXI'];
    $ChristianDNCboysXII = $row['ChristianDNCboysXII'];
	
	$ChristianDNCgirlslkg = $row['ChristianDNCgirlslkg'];
    $ChristianDNCgirlsukg = $row['ChristianDNCgirlsukg'];
    $ChristianDNCgirlsI   = $row['ChristianDNCgirlsI'];
    $ChristianDNCgirlsII  = $row['ChristianDNCgirlsII'];
    $ChristianDNCgirlsIII = $row['ChristianDNCgirlsIII'];
    $ChristianDNCgirlsIV  = $row['ChristianDNCgirlsIV'];
    $ChristianDNCgirlsV   = $row['ChristianDNCgirlsV'];
    $ChristianDNCgirlsVI  = $row['ChristianDNCgirlsVI'];
    $ChristianDNCgirlsVII = $row['ChristianDNCgirlsVII'];
    $ChristianDNCgirlsVIII= $row['ChristianDNCgirlsVIII'];
    $ChristianDNCgirlsIX  = $row['ChristianDNCgirlsIX'];
    $ChristianDNCgirlsX   = $row['ChristianDNCgirlsX'];
    $ChristianDNCgirlsXI  = $row['ChristianDNCgirlsXI'];
    $ChristianDNCgirlsXII = $row['ChristianDNCgirlsXII'];


    $hinduOthersboyslkg = $row['hinduOthersboyslkg'];
    $hinduOthersboysukg = $row['hinduOthersboysukg'];
    $hinduOthersboysI   = $row['hinduOthersboysI'];
    $hinduOthersboysII  = $row['hinduOthersboysII'];
    $hinduOthersboysIII = $row['hinduOthersboysIII'];
    $hinduOthersboysIV  = $row['hinduOthersboysIV'];
    $hinduOthersboysV   = $row['hinduOthersboysV'];
    $hinduOthersboysVI  = $row['hinduOthersboysVI'];
    $hinduOthersboysVII = $row['hinduOthersboysVII'];
    $hinduOthersboysVIII= $row['hinduOthersboysVIII'];
    $hinduOthersboysIX  = $row['hinduOthersboysIX'];
    $hinduOthersboysX   = $row['hinduOthersboysX'];
    $hinduOthersboysXI  = $row['hinduOthersboysXI'];
    $hinduOthersboysXII = $row['hinduOthersboysXII'];
	
	$hinduOthersgirlslkg = $row['hinduOthersgirlslkg'];
    $hinduOthersgirlsukg = $row['hinduOthersgirlsukg'];
    $hinduOthersgirlsI   = $row['hinduOthersgirlsI'];
    $hinduOthersgirlsII  = $row['hinduOthersgirlsII'];
    $hinduOthersgirlsIII = $row['hinduOthersgirlsIII'];
    $hinduOthersgirlsIV  = $row['hinduOthersgirlsIV'];
    $hinduOthersgirlsV   = $row['hinduOthersgirlsV'];
    $hinduOthersgirlsVI  = $row['hinduOthersgirlsVI'];
    $hinduOthersgirlsVII = $row['hinduOthersgirlsVII'];
    $hinduOthersgirlsVIII= $row['hinduOthersgirlsVIII'];
    $hinduOthersgirlsIX  = $row['hinduOthersgirlsIX'];
    $hinduOthersgirlsX   = $row['hinduOthersgirlsX'];
    $hinduOthersgirlsXI  = $row['hinduOthersgirlsXI'];
    $hinduOthersgirlsXII = $row['hinduOthersgirlsXII'];
	
	$MuslimOthersboyslkg = $row['MuslimOthersboyslkg'];
    $MuslimOthersboysukg = $row['MuslimOthersboysukg'];
    $MuslimOthersboysI   = $row['MuslimOthersboysI'];
    $MuslimOthersboysII  = $row['MuslimOthersboysII'];
    $MuslimOthersboysIII = $row['MuslimOthersboysIII'];
    $MuslimOthersboysIV  = $row['MuslimOthersboysIV'];
    $MuslimOthersboysV   = $row['MuslimOthersboysV'];
    $MuslimOthersboysVI  = $row['MuslimOthersboysVI'];
    $MuslimOthersboysVII = $row['MuslimOthersboysVII'];
    $MuslimOthersboysVIII= $row['MuslimOthersboysVIII'];
    $MuslimOthersboysIX  = $row['MuslimOthersboysIX'];
    $MuslimOthersboysX   = $row['MuslimOthersboysX'];
    $MuslimOthersboysXI  = $row['MuslimOthersboysXI'];
    $MuslimOthersboysXII = $row['MuslimOthersboysXII'];
	
	$MuslimOthersgirlslkg = $row['MuslimOthersgirlslkg'];
    $MuslimOthersgirlsukg = $row['MuslimOthersgirlsukg'];
    $MuslimOthersgirlsI   = $row['MuslimOthersgirlsI'];
    $MuslimOthersgirlsII  = $row['MuslimOthersgirlsII'];
    $MuslimOthersgirlsIII = $row['MuslimOthersgirlsIII'];
    $MuslimOthersgirlsIV  = $row['MuslimOthersgirlsIV'];
    $MuslimOthersgirlsV   = $row['MuslimOthersgirlsV'];
    $MuslimOthersgirlsVI  = $row['MuslimOthersgirlsVI'];
    $MuslimOthersgirlsVII = $row['MuslimOthersgirlsVII'];
    $MuslimOthersgirlsVIII= $row['MuslimOthersgirlsVIII'];
    $MuslimOthersgirlsIX  = $row['MuslimOthersgirlsIX'];
    $MuslimOthersgirlsX   = $row['MuslimOthersgirlsX'];
    $MuslimOthersgirlsXI  = $row['MuslimOthersgirlsXI'];
    $MuslimOthersgirlsXII = $row['MuslimOthersgirlsXII'];
	
	$ChristianOthersboyslkg = $row['ChristianOthersboyslkg'];
    $ChristianOthersboysukg = $row['ChristianOthersboysukg'];
    $ChristianOthersboysI   = $row['ChristianOthersboysI'];
    $ChristianOthersboysII  = $row['ChristianOthersboysII'];
    $ChristianOthersboysIII = $row['ChristianOthersboysIII'];
    $ChristianOthersboysIV  = $row['ChristianOthersboysIV'];
    $ChristianOthersboysV   = $row['ChristianOthersboysV'];
    $ChristianOthersboysVI  = $row['ChristianOthersboysVI'];
    $ChristianOthersboysVII = $row['ChristianOthersboysVII'];
    $ChristianOthersboysVIII= $row['ChristianOthersboysVIII'];
    $ChristianOthersboysIX  = $row['ChristianOthersboysIX'];
    $ChristianOthersboysX   = $row['ChristianOthersboysX'];
    $ChristianOthersboysXI  = $row['ChristianOthersboysXI'];
    $ChristianOthersboysXII = $row['ChristianOthersboysXII'];
	
	$ChristianOthersgirlslkg = $row['ChristianOthersgirlslkg'];
    $ChristianOthersgirlsukg = $row['ChristianOthersgirlsukg'];
    $ChristianOthersgirlsI   = $row['ChristianOthersgirlsI'];
    $ChristianOthersgirlsII  = $row['ChristianOthersgirlsII'];
    $ChristianOthersgirlsIII = $row['ChristianOthersgirlsIII'];
    $ChristianOthersgirlsIV  = $row['ChristianOthersgirlsIV'];
    $ChristianOthersgirlsV   = $row['ChristianOthersgirlsV'];
    $ChristianOthersgirlsVI  = $row['ChristianOthersgirlsVI'];
    $ChristianOthersgirlsVII = $row['ChristianOthersgirlsVII'];
    $ChristianOthersgirlsVIII= $row['ChristianOthersgirlsVIII'];
    $ChristianOthersgirlsIX  = $row['ChristianOthersgirlsIX'];
    $ChristianOthersgirlsX   = $row['ChristianOthersgirlsX'];
    $ChristianOthersgirlsXI  = $row['ChristianOthersgirlsXI'];
    $ChristianOthersgirlsXII = $row['ChristianOthersgirlsXII'];

}

//For Report Chart

$chartqry="SELECT 

(SELECT COUNT(studentid) FROM student WHERE standard='LKG'  AND category='BC') AS chtotalbclkg,
(SELECT COUNT(studentid) FROM student WHERE standard='UKG'  AND category='BC') AS chtotalbcukg,
(SELECT COUNT(studentid) FROM student WHERE standard='I'    AND category='BC') AS chtotalbcI,
(SELECT COUNT(studentid) FROM student WHERE standard='II'   AND category='BC') AS chtotalbcII,
(SELECT COUNT(studentid) FROM student WHERE standard='III'  AND category='BC') AS chtotalbcIII,
(SELECT COUNT(studentid) FROM student WHERE standard='IV'   AND category='BC') AS chtotalbcIV,
(SELECT COUNT(studentid) FROM student WHERE standard='V'    AND category='BC') AS chtotalbcV,
(SELECT COUNT(studentid) FROM student WHERE standard='VI'   AND category='BC') AS chtotalbcVI,
(SELECT COUNT(studentid) FROM student WHERE standard='VII'  AND category='BC') AS chtotalbcVII,
(SELECT COUNT(studentid) FROM student WHERE standard='VIII' AND category='BC') AS chtotalbcVIII,
(SELECT COUNT(studentid) FROM student WHERE standard='IX'   AND category='BC') AS chtotalbcIX,
(SELECT COUNT(studentid) FROM student WHERE standard='X'    AND category='BC') AS chtotalbcX,
(SELECT COUNT(studentid) FROM student WHERE standard='XI'   AND category='BC') AS chtotalbcXI,
(SELECT COUNT(studentid) FROM student WHERE standard='XII'  AND category='BC') AS chtotalbcXII,

(SELECT COUNT(studentid) FROM student WHERE standard='LKG'  AND category='MBC') AS chtotalmbclkg,
(SELECT COUNT(studentid) FROM student WHERE standard='UKG'  AND category='MBC') AS chtotalmbcukg,
(SELECT COUNT(studentid) FROM student WHERE standard='I'    AND category='MBC') AS chtotalmbcI,
(SELECT COUNT(studentid) FROM student WHERE standard='II'   AND category='MBC') AS chtotalmbcII,
(SELECT COUNT(studentid) FROM student WHERE standard='III'  AND category='MBC') AS chtotalmbcIII,
(SELECT COUNT(studentid) FROM student WHERE standard='IV'   AND category='MBC') AS chtotalmbcIV,
(SELECT COUNT(studentid) FROM student WHERE standard='V'    AND category='MBC') AS chtotalmbcV,
(SELECT COUNT(studentid) FROM student WHERE standard='VI'   AND category='MBC') AS chtotalmbcVI,
(SELECT COUNT(studentid) FROM student WHERE standard='VII'  AND category='MBC') AS chtotalmbcVII,
(SELECT COUNT(studentid) FROM student WHERE standard='VIII' AND category='MBC') AS chtotalmbcVIII,
(SELECT COUNT(studentid) FROM student WHERE standard='IX'   AND category='MBC') AS chtotalmbcIX,
(SELECT COUNT(studentid) FROM student WHERE standard='X'    AND category='MBC') AS chtotalmbcX,
(SELECT COUNT(studentid) FROM student WHERE standard='XI'   AND category='MBC') AS chtotalmbcXI,
(SELECT COUNT(studentid) FROM student WHERE standard='XII'  AND category='MBC') AS chtotalmbcXII,

(SELECT COUNT(studentid) FROM student WHERE standard='LKG'  AND category='SC') AS chtotalsclkg,
(SELECT COUNT(studentid) FROM student WHERE standard='UKG'  AND category='SC') AS chtotalscukg,
(SELECT COUNT(studentid) FROM student WHERE standard='I'    AND category='SC') AS chtotalscI,
(SELECT COUNT(studentid) FROM student WHERE standard='II'   AND category='SC') AS chtotalscII,
(SELECT COUNT(studentid) FROM student WHERE standard='III'  AND category='SC') AS chtotalscIII,
(SELECT COUNT(studentid) FROM student WHERE standard='IV'   AND category='SC') AS chtotalscIV,
(SELECT COUNT(studentid) FROM student WHERE standard='V'    AND category='SC') AS chtotalscV,
(SELECT COUNT(studentid) FROM student WHERE standard='VI'   AND category='SC') AS chtotalscVI,
(SELECT COUNT(studentid) FROM student WHERE standard='VII'  AND category='SC') AS chtotalscVII,
(SELECT COUNT(studentid) FROM student WHERE standard='VIII' AND category='SC') AS chtotalscVIII,
(SELECT COUNT(studentid) FROM student WHERE standard='IX'   AND category='SC') AS chtotalscIX,
(SELECT COUNT(studentid) FROM student WHERE standard='X'    AND category='SC') AS chtotalscX,
(SELECT COUNT(studentid) FROM student WHERE standard='XI'   AND category='SC') AS chtotalscXI,
(SELECT COUNT(studentid) FROM student WHERE standard='XII'  AND category='SC') AS chtotalscXII,

(SELECT COUNT(studentid) FROM student WHERE standard='LKG'  AND category='ST') AS chtotalstlkg,
(SELECT COUNT(studentid) FROM student WHERE standard='UKG'  AND category='ST') AS chtotalstukg,
(SELECT COUNT(studentid) FROM student WHERE standard='I'    AND category='ST') AS chtotalstI,
(SELECT COUNT(studentid) FROM student WHERE standard='II'   AND category='ST') AS chtotalstII,
(SELECT COUNT(studentid) FROM student WHERE standard='III'  AND category='ST') AS chtotalstIII,
(SELECT COUNT(studentid) FROM student WHERE standard='IV'   AND category='ST') AS chtotalstIV,
(SELECT COUNT(studentid) FROM student WHERE standard='V'    AND category='ST') AS chtotalstV,
(SELECT COUNT(studentid) FROM student WHERE standard='VI'   AND category='ST') AS chtotalstVI,
(SELECT COUNT(studentid) FROM student WHERE standard='VII'  AND category='ST') AS chtotalstVII,
(SELECT COUNT(studentid) FROM student WHERE standard='VIII' AND category='ST') AS chtotalstVIII,
(SELECT COUNT(studentid) FROM student WHERE standard='IX'   AND category='ST') AS chtotalstIX,
(SELECT COUNT(studentid) FROM student WHERE standard='X'    AND category='ST') AS chtotalstX,
(SELECT COUNT(studentid) FROM student WHERE standard='XI'   AND category='ST') AS chtotalstXI,
(SELECT COUNT(studentid) FROM student WHERE standard='XII'  AND category='ST') AS chtotalstXII,

(SELECT COUNT(studentid) FROM student WHERE standard='LKG'  AND category='OBC') AS chtotalobclkg,
(SELECT COUNT(studentid) FROM student WHERE standard='UKG'  AND category='OBC') AS chtotalobcukg,
(SELECT COUNT(studentid) FROM student WHERE standard='I'    AND category='OBC') AS chtotalobcI,
(SELECT COUNT(studentid) FROM student WHERE standard='II'   AND category='OBC') AS chtotalobcII,
(SELECT COUNT(studentid) FROM student WHERE standard='III'  AND category='OBC') AS chtotalobcIII,
(SELECT COUNT(studentid) FROM student WHERE standard='IV'   AND category='OBC') AS chtotalobcIV,
(SELECT COUNT(studentid) FROM student WHERE standard='V'    AND category='OBC') AS chtotalobcV,
(SELECT COUNT(studentid) FROM student WHERE standard='VI'   AND category='OBC') AS chtotalobcVI,
(SELECT COUNT(studentid) FROM student WHERE standard='VII'  AND category='OBC') AS chtotalobcVII,
(SELECT COUNT(studentid) FROM student WHERE standard='VIII' AND category='OBC') AS chtotalobcVIII,
(SELECT COUNT(studentid) FROM student WHERE standard='IX'   AND category='OBC') AS chtotalobcIX,
(SELECT COUNT(studentid) FROM student WHERE standard='X'    AND category='OBC') AS chtotalobcX,
(SELECT COUNT(studentid) FROM student WHERE standard='XI'   AND category='OBC') AS chtotalobcXI,
(SELECT COUNT(studentid) FROM student WHERE standard='XII'  AND category='OBC') AS chtotalobcXII,

(SELECT COUNT(studentid) FROM student WHERE standard='LKG'  AND category='DNC') AS chtotaldnclkg,
(SELECT COUNT(studentid) FROM student WHERE standard='UKG'  AND category='DNC') AS chtotaldncukg,
(SELECT COUNT(studentid) FROM student WHERE standard='I'    AND category='DNC') AS chtotaldncI,
(SELECT COUNT(studentid) FROM student WHERE standard='II'   AND category='DNC') AS chtotaldncII,
(SELECT COUNT(studentid) FROM student WHERE standard='III'  AND category='DNC') AS chtotaldncIII,
(SELECT COUNT(studentid) FROM student WHERE standard='IV'   AND category='DNC') AS chtotaldncIV,
(SELECT COUNT(studentid) FROM student WHERE standard='V'    AND category='DNC') AS chtotaldncV,
(SELECT COUNT(studentid) FROM student WHERE standard='VI'   AND category='DNC') AS chtotaldncVI,
(SELECT COUNT(studentid) FROM student WHERE standard='VII'  AND category='DNC') AS chtotaldncVII,
(SELECT COUNT(studentid) FROM student WHERE standard='VIII' AND category='DNC') AS chtotaldncVIII,
(SELECT COUNT(studentid) FROM student WHERE standard='IX'   AND category='DNC') AS chtotaldncIX,
(SELECT COUNT(studentid) FROM student WHERE standard='X'    AND category='DNC') AS chtotaldncX,
(SELECT COUNT(studentid) FROM student WHERE standard='XI'   AND category='DNC') AS chtotaldncXI,
(SELECT COUNT(studentid) FROM student WHERE standard='XII'  AND category='DNC') AS chtotaldncXII,

(SELECT COUNT(studentid) FROM student WHERE standard='LKG'  AND category='Others') AS chtotalothlkg,
(SELECT COUNT(studentid) FROM student WHERE standard='UKG'  AND category='Others') AS chtotalothukg,
(SELECT COUNT(studentid) FROM student WHERE standard='I'    AND category='Others') AS chtotalothI,
(SELECT COUNT(studentid) FROM student WHERE standard='II'   AND category='Others') AS chtotalothII,
(SELECT COUNT(studentid) FROM student WHERE standard='III'  AND category='Others') AS chtotalothIII,
(SELECT COUNT(studentid) FROM student WHERE standard='IV'   AND category='Others') AS chtotalothIV,
(SELECT COUNT(studentid) FROM student WHERE standard='V'    AND category='Others') AS chtotalothV,
(SELECT COUNT(studentid) FROM student WHERE standard='VI'   AND category='Others') AS chtotalothVI,
(SELECT COUNT(studentid) FROM student WHERE standard='VII'  AND category='Others') AS chtotalothVII,
(SELECT COUNT(studentid) FROM student WHERE standard='VIII' AND category='Others') AS chtotalothVIII,
(SELECT COUNT(studentid) FROM student WHERE standard='IX'   AND category='Others') AS chtotalothIX,
(SELECT COUNT(studentid) FROM student WHERE standard='X'    AND category='Others') AS chtotalothX,
(SELECT COUNT(studentid) FROM student WHERE standard='XI'   AND category='Others') AS chtotalothXI,
(SELECT COUNT(studentid) FROM student WHERE standard='XII'  AND category='Others') AS chtotalothXII

FROM student WHERE 1";

$chartres =$connect->query($chartqry)or die("Error in Get All Records".$connect->error);

if (isset($_POST['order'])) {
    $chartqry .= 'ORDER BY ' . $column[$_POST['order']['0']['column']] . ' ' . $_POST['order']['0']['dir'] . ' ';
} else {
    $chartqry .= ' ';
}
$chartqry1 = '';


$statementch = $connect->prepare($chartqry);
$statementch->execute();
$number_filter_row = $statementch->rowCount();
$statementch = $connect->prepare($chartqry . $chartqry1);
$statementch->execute();
$chartresult = $statementch->fetchAll();
$row = array();


foreach ($chartresult as $chartrow) { 
$chtotalbclkg   =$chartrow["chtotalbclkg"];
$chtotalbcukg   =$chartrow["chtotalbcukg"];
$chtotalbcI     =$chartrow["chtotalbcI"];
$chtotalbcII    =$chartrow["chtotalbcII"];
$chtotalbcIII   =$chartrow["chtotalbcIII"];
$chtotalbcIV    =$chartrow["chtotalbcIV"];
$chtotalbcV     =$chartrow["chtotalbcV"];
$chtotalbcVI    =$chartrow["chtotalbcVI"];
$chtotalbcVII   =$chartrow["chtotalbcVII"];
$chtotalbcVIII  =$chartrow["chtotalbcVIII"];
$chtotalbcIX    =$chartrow["chtotalbcIX"];
$chtotalbcX     =$chartrow["chtotalbcX"];
$chtotalbcXI    =$chartrow["chtotalbcXI"];
$chtotalbcXII   =$chartrow["chtotalbcXII"];

$chtotalmbclkg   =$chartrow["chtotalmbclkg"];
$chtotalmbcukg   =$chartrow["chtotalmbcukg"];
$chtotalmbcI     =$chartrow["chtotalmbcI"];
$chtotalmbcII    =$chartrow["chtotalmbcII"];
$chtotalmbcIII   =$chartrow["chtotalmbcIII"];
$chtotalmbcIV    =$chartrow["chtotalmbcIV"];
$chtotalmbcV     =$chartrow["chtotalmbcV"];
$chtotalmbcVI    =$chartrow["chtotalmbcVI"];
$chtotalmbcVII   =$chartrow["chtotalmbcVII"];
$chtotalmbcVIII  =$chartrow["chtotalmbcVIII"];
$chtotalmbcIX    =$chartrow["chtotalmbcIX"];
$chtotalmbcX     =$chartrow["chtotalmbcX"];
$chtotalmbcXI    =$chartrow["chtotalmbcXI"];
$chtotalmbcXII   =$chartrow["chtotalmbcXII"];

$chtotalsclkg   =$chartrow["chtotalsclkg"];
$chtotalscukg   =$chartrow["chtotalscukg"];
$chtotalscI     =$chartrow["chtotalscI"];
$chtotalscII    =$chartrow["chtotalscII"];
$chtotalscIII   =$chartrow["chtotalscIII"];
$chtotalscIV    =$chartrow["chtotalscIV"];
$chtotalscV     =$chartrow["chtotalscV"];
$chtotalscVI    =$chartrow["chtotalscVI"];
$chtotalscVII   =$chartrow["chtotalscVII"];
$chtotalscVIII  =$chartrow["chtotalscVIII"];
$chtotalscIX    =$chartrow["chtotalscIX"];
$chtotalscX     =$chartrow["chtotalscX"];
$chtotalscXI    =$chartrow["chtotalscXI"];
$chtotalscXII   =$chartrow["chtotalscXII"];

$chtotalstlkg   =$chartrow["chtotalstlkg"];
$chtotalstukg   =$chartrow["chtotalstukg"];
$chtotalstI     =$chartrow["chtotalstI"];
$chtotalstII    =$chartrow["chtotalstII"];
$chtotalstIII   =$chartrow["chtotalstIII"];
$chtotalstIV    =$chartrow["chtotalstIV"];
$chtotalstV     =$chartrow["chtotalstV"];
$chtotalstVI    =$chartrow["chtotalstVI"];
$chtotalstVII   =$chartrow["chtotalstVII"];
$chtotalstVIII  =$chartrow["chtotalstVIII"];
$chtotalstIX    =$chartrow["chtotalstIX"];
$chtotalstX     =$chartrow["chtotalstX"];
$chtotalstXI    =$chartrow["chtotalstXI"];
$chtotalstXII   =$chartrow["chtotalstXII"];

$chtotalobclkg   =$chartrow["chtotalobclkg"];
$chtotalobcukg   =$chartrow["chtotalobcukg"];
$chtotalobcI     =$chartrow["chtotalobcI"];
$chtotalobcII    =$chartrow["chtotalobcII"];
$chtotalobcIII   =$chartrow["chtotalobcIII"];
$chtotalobcIV    =$chartrow["chtotalobcIV"];
$chtotalobcV     =$chartrow["chtotalobcV"];
$chtotalobcVI    =$chartrow["chtotalobcVI"];
$chtotalobcVII   =$chartrow["chtotalobcVII"];
$chtotalobcVIII  =$chartrow["chtotalobcVIII"];
$chtotalobcIX    =$chartrow["chtotalobcIX"];
$chtotalobcX     =$chartrow["chtotalobcX"];
$chtotalobcXI    =$chartrow["chtotalobcXI"];
$chtotalobcXII   =$chartrow["chtotalobcXII"];

$chtotaldnclkg   =$chartrow["chtotaldnclkg"];
$chtotaldncukg   =$chartrow["chtotaldncukg"];
$chtotaldncI     =$chartrow["chtotaldncI"];
$chtotaldncII    =$chartrow["chtotaldncII"];
$chtotaldncIII   =$chartrow["chtotaldncIII"];
$chtotaldncIV    =$chartrow["chtotaldncIV"];
$chtotaldncV     =$chartrow["chtotaldncV"];
$chtotaldncVI    =$chartrow["chtotaldncVI"];
$chtotaldncVII   =$chartrow["chtotaldncVII"];
$chtotaldncVIII  =$chartrow["chtotaldncVIII"];
$chtotaldncIX    =$chartrow["chtotaldncIX"];
$chtotaldncX     =$chartrow["chtotaldncX"];
$chtotaldncXI    =$chartrow["chtotaldncXI"];
$chtotaldncXII   =$chartrow["chtotaldncXII"];

$chtotalothlkg   =$chartrow["chtotalothlkg"];
$chtotalothukg   =$chartrow["chtotalothukg"];
$chtotalothI     =$chartrow["chtotalothI"];
$chtotalothII    =$chartrow["chtotalothII"];
$chtotalothIII   =$chartrow["chtotalothIII"];
$chtotalothIV    =$chartrow["chtotalothIV"];
$chtotalothV     =$chartrow["chtotalothV"];
$chtotalothVI    =$chartrow["chtotalothVI"];
$chtotalothVII   =$chartrow["chtotalothVII"];
$chtotalothVIII  =$chartrow["chtotalothVIII"];
$chtotalothIX    =$chartrow["chtotalothIX"];
$chtotalothX     =$chartrow["chtotalothX"];
$chtotalothXI    =$chartrow["chtotalothXI"];
$chtotalothXII   =$chartrow["chtotalothXII"];
}
?>

<div class="row">
<div class="col-lg-12">
<table id="caste_info" class="table table-bordered table-striped">
<thead>
<tr class="text-light bg-azure">          
                      <th scope="col" rowspan="3"  class="text-dark  ">Standard</th>
                      <th scope="col" rowspan="3" class="text-dark">Total</th>
                      <?php if($bc>0){?>
                      <th scope="col" colspan="6" class="text-dark">BC</th>
                      <?php }  

                      if($mbc>0){?>
                      <th scope="col" colspan="6" class="text-dark">MBC</th>
                      <?php }  

                      if($sc>0){?>
                      <th scope="col"  colspan="6" class="text-dark">SC</th>                   	
                      <?php }  

                      if($st>0){?>
                      <th scope="col"  colspan="6" class="text-dark">St</th>                   
                      <?php }  

                      if($obc>0){?>
                      <th scope="col"  colspan="6" class="text-dark">Obc</th>                
                      <?php }  

                      if($dnc>0){?>
                      <th scope="col"  colspan="6" class="text-dark">Dnc</th>                   
                      <?php }  

                      if($others>0){?>
                      <th scope="col"  colspan="6" class="text-dark">Others</th>
                      <?php }  ?>	
                    </tr>

                    <tr>      
                    <?php if($bc>0){?>     
                   <th scope="col"  colspan="2" class="text-dark">Hindu</th>
                   <th scope="col"  colspan="2" class="text-dark">Christian</th>
                   <th scope="col" colspan="2"  class="text-dark">Muslim</th>
                   <?php } 

                   if($mbc>0){?>
                   <th scope="col"  colspan="2" class="text-dark">Hindu</th>
                   <th scope="col"  colspan="2" class="text-dark">Christian</th>
                   <th scope="col" colspan="2"  class="text-dark">Muslim</th>
                   <?php }

                    if($sc>0){?>
                   <th scope="col"  colspan="2" class="text-dark">Hindu</th>
                   <th scope="col"  colspan="2" class="text-dark">Christian</th>
                   <th scope="col" colspan="2"  class="text-dark">Muslim</th>                                            
                   <?php } 

                   if($st>0){?>
                   <th scope="col"  colspan="2" class="text-dark">Hindu</th>
                   <th scope="col"  colspan="2" class="text-dark">Christian</th>
                   <th scope="col" colspan="2"  class="text-dark">Muslim</th>                                            
                   <?php } 

                   if($obc>0){?>
                   <th scope="col"  colspan="2" class="text-dark">Hindu</th>
                   <th scope="col"  colspan="2" class="text-dark">Christian</th>
                   <th scope="col" colspan="2"  class="text-dark">Muslim</th>                                            
                   <?php } 

                   if($dnc>0){?>
                   <th scope="col"  colspan="2" class="text-dark">Hindu</th>
                   <th scope="col"  colspan="2" class="text-dark">Christian</th>
                   <th scope="col" colspan="2"  class="text-dark">Muslim</th>                                            
                   <?php } 

                   if($others>0){?>
                   <th scope="col"  colspan="2" class="text-dark">Hindu</th>
                   <th scope="col"  colspan="2" class="text-dark">Christian</th>
                   <th scope="col" colspan="2"  class="text-dark">Muslim</th>                                            
                   <?php }  ?>	                           
                  </tr>

                  <tr>
                  <?php if($bc>0){?>
                   <th scope="col"   class="text-dark">BC Hindu Boys</th>
                   <th scope="col"   class="text-dark">BC Hindu Girls</th>
                   <th scope="col"   class="text-dark">BC Christian Boys</th>
                   <th scope="col"   class="text-dark">BC Christian Girls</th>
                   <th scope="col"   class="text-dark">BC Muslim Boys</th>
                   <th scope="col"   class="text-dark">BC Muslim Girls</th>
                   <?php } 

                   if($mbc>0){?>
                   <th scope="col"   class="text-dark">MBC Hindu Boys</th>
                   <th scope="col"   class="text-dark">MBC Hindu Girls</th>
                   <th scope="col"   class="text-dark">MBC Christian Boys</th>
                   <th scope="col"   class="text-dark">MBC Christian Girls</th>
                   <th scope="col"   class="text-dark">MBC Muslim Boys</th>
                   <th scope="col"   class="text-dark">MBC Muslim Girls</th>
                   <?php } 

                   if($sc>0){?>
                   <th scope="col"   class="text-dark">SC Hindu Boys</th>
                   <th scope="col"   class="text-dark">SC Hindu Girls</th>
                   <th scope="col"   class="text-dark">SC Christian Boys</th>
                   <th scope="col"   class="text-dark">SC Christian Girls</th>
                   <th scope="col"   class="text-dark">SC Muslim Boys</th>
                   <th scope="col"   class="text-dark">SC Muslim Girls</th>
                   <?php } 

                   if($st>0){?>
                   <th scope="col"   class="text-dark">St Hindu Boys</th>
                   <th scope="col"   class="text-dark">St Hindu Girls</th>
                   <th scope="col"   class="text-dark">St Christian Boys</th>
                   <th scope="col"   class="text-dark">St Christian Girls</th>
                   <th scope="col"   class="text-dark">St Muslim Boys</th>
                   <th scope="col"   class="text-dark">St Muslim Girls</th>
                   <?php } 

                   if($obc>0){?>
                   <th scope="col"   class="text-dark">Obc Hindu Boys</th>
                   <th scope="col"   class="text-dark">Obc Hindu Girls</th>
                   <th scope="col"   class="text-dark">Obc Christian Boys</th>
                   <th scope="col"   class="text-dark">Obc Christian Girls</th>
                   <th scope="col"   class="text-dark">Obc Muslim Boys</th>
                   <th scope="col"   class="text-dark">Obc Muslim Girls</th>
                   <?php } 

                   if($dnc>0){?>
                   <th scope="col"   class="text-dark">Dnc Hindu Boys</th>
                   <th scope="col"   class="text-dark">Dnc Hindu Girls</th>
                   <th scope="col"   class="text-dark">Dnc Christian Boys</th>
                   <th scope="col"   class="text-dark">Dnc Christian Girls</th>
                   <th scope="col"   class="text-dark">Dnc Muslim Boys</th>
                   <th scope="col"   class="text-dark">Dnc Muslim Girls</th>
                   <?php } 

                   if($others>0){?>
                   <th scope="col"   class="text-dark">Others Hindu Boys</th>
                   <th scope="col"   class="text-dark">Others Hindu Girls</th>
                   <th scope="col"   class="text-dark">Others Christian Boys</th>
                   <th scope="col"   class="text-dark">Others Christian Girls</th>
                   <th scope="col"   class="text-dark">Others Muslim Boys</th>
                   <th scope="col"   class="text-dark">Others Muslim Girls</th>
                   <?php }?>                      
                                                     
                </tr>
</thead>	
<tbody class="text-center">
<tr>
                                                      <th scope="row" class="text-dark">LKG</th>
                                                      <td scope="col"   class="text-dark"><?php if(isset($totallkg)){ echo $totallkg; } ?></td>
                                                      <?php if($bc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcboyslkg)){ echo $hindubcboyslkg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcgirlslkg)){ echo $hindubcgirlslkg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($Christianbcboyslkg)){ echo $Christianbcboyslkg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($Christianbcgirlslkg)){ echo $Christianbcgirlslkg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($Muslimbcboyslkg)){ echo $Muslimbcboyslkg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($Muslimbcgirlslkg)){ echo $Muslimbcgirlslkg; } ?></td>
                                                      <?php }  if($mbc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduMBCboyslkg)){ echo $hinduMBCboyslkg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduMBCgirlslkg)){ echo $hinduMBCgirlslkg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianMBCboyslkg)){ echo $ChristianMBCboyslkg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianMBCgirlslkg)){ echo $ChristianMBCgirlslkg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimMBCboyslkg)){ echo $MuslimMBCboyslkg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimMBCgirlslkg)){ echo $MuslimMBCgirlslkg; } ?></td>
                                                      <?php }  if($sc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSCboyslkg)){ echo $hinduSCboyslkg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSCgirlslkg)){ echo $hinduSCgirlslkg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSCboyslkg)){ echo $ChristianSCboyslkg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSCgirlslkg)){ echo $ChristianSCgirlslkg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSCboyslkg)){ echo $MuslimSCboyslkg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSCgirlslkg)){ echo $MuslimSCgirlslkg; } ?></td>
                                                      <?php }  if($st>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSTboyslkg)){ echo $hinduSTboyslkg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSTgirlslkg)){ echo $hinduSTgirlslkg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSTboyslkg)){ echo $ChristianSTboyslkg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSTgirlslkg)){ echo $ChristianSTgirlslkg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSTboyslkg)){ echo $MuslimSTboyslkg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSTgirlslkg)){ echo $MuslimSTgirlslkg; } ?></td>
                                                      <?php }  if($obc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOBCboyslkg)){ echo $hinduOBCboyslkg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOBCgirlslkg)){ echo $hinduOBCgirlslkg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOBCboyslkg)){ echo $ChristianOBCboyslkg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOBCgirlslkg)){ echo $ChristianOBCgirlslkg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOBCboyslkg)){ echo $MuslimOBCboyslkg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOBCgirlslkg)){ echo $MuslimOBCgirlslkg; } ?></td>
                                                      <?php }  if($dnc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduDNCboyslkg)){ echo $hinduDNCboyslkg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduDNCgirlslkg)){ echo $hinduDNCgirlslkg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianDNCboyslkg)){ echo $ChristianDNCboyslkg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianDNCgirlslkg)){ echo $ChristianDNCgirlslkg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimDNCboyslkg)){ echo $MuslimDNCboyslkg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimDNCgirlslkg)){ echo $MuslimDNCgirlslkg; } ?></td>
                                                      <?php }  if($others>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOthersboyslkg)){ echo $hinduOthersboyslkg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOthersgirlslkg)){ echo $hinduOthersgirlslkg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOthersboyslkg)){ echo $ChristianOthersboyslkg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOthersgirlslkg)){ echo $ChristianOthersgirlslkg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOthersboyslkg)){ echo $MuslimOthersboyslkg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOthersgirlslkg)){ echo $MuslimOthersgirlslkg; } ?></td>
                                                      <?php } ?>
                
                </tr>    
                <tr>
                                                      <th scope="row" class="text-dark">UKG</th>
                                                      <td scope="col"   class="text-dark"><?php if(isset($totalukg)){ echo $totalukg; } ?></td>
                                                      <?php if($bc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcboysukg)){ echo $hindubcboysukg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcgirlsukg)){ echo $hindubcgirlsukg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($Christianbcboysukg)){ echo $Christianbcboysukg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($Christianbcgirlsukg)){ echo $Christianbcgirlsukg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($Muslimbcboysukg)){ echo $Muslimbcboysukg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($Muslimbcgirlsukg)){ echo $Muslimbcgirlsukg; } ?></td>
                                                      <?php }  if($mbc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduMBCboysukg)){ echo $hinduMBCboysukg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduMBCgirlsukg)){ echo $hinduMBCgirlsukg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianMBCboysukg)){ echo $ChristianMBCboysukg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianMBCgirlsukg)){ echo $ChristianMBCgirlsukg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimMBCboysukg)){ echo $MuslimMBCboysukg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimMBCgirlsukg)){ echo $MuslimMBCgirlsukg; } ?></td>
                                                      <?php }  if($sc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSCboysukg)){ echo $hinduSCboysukg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSCgirlsukg)){ echo $hinduSCgirlsukg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSCboysukg)){ echo $ChristianSCboysukg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSCgirlsukg)){ echo $ChristianSCgirlsukg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSCboysukg)){ echo $MuslimSCboysukg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSCgirlsukg)){ echo $MuslimSCgirlsukg; } ?></td>
                                                      <?php }  if($st>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSTboysukg)){ echo $hinduSTboysukg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSTgirlsukg)){ echo $hinduSTgirlsukg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSTboysukg)){ echo $ChristianSTboysukg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSTgirlsukg)){ echo $ChristianSTgirlsukg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSTboysukg)){ echo $MuslimSTboysukg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSTgirlsukg)){ echo $MuslimSTgirlsukg; } ?></td>
                                                      <?php }  if($obc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOBCboysukg)){ echo $hinduOBCboysukg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOBCgirlsukg)){ echo $hinduOBCgirlsukg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOBCboysukg)){ echo $ChristianOBCboysukg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOBCgirlsukg)){ echo $ChristianOBCgirlsukg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOBCboysukg)){ echo $MuslimOBCboysukg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOBCgirlsukg)){ echo $MuslimOBCgirlsukg; } ?></td>
                                                      <?php }  if($dnc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduDNCboysukg)){ echo $hinduDNCboysukg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduDNCgirlsukg)){ echo $hinduDNCgirlsukg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianDNCboysukg)){ echo $ChristianDNCboysukg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianDNCgirlsukg)){ echo $ChristianDNCgirlsukg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimDNCboysukg)){ echo $MuslimDNCboysukg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimDNCgirlsukg)){ echo $MuslimDNCgirlsukg; } ?></td>
                                                      <?php }  if($others>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOthersboysukg)){ echo $hinduOthersboysukg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOthersgirlsukg)){ echo $hinduOthersgirlsukg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOthersboysukg)){ echo $ChristianOthersboysukg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOthersgirlsukg)){ echo $ChristianOthersgirlsukg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOthersboysukg)){ echo $MuslimOthersboysukg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOthersgirlsukg)){ echo $MuslimOthersgirlsukg; } ?></td>
                                                      <?php }  ?>
                </tr>    
                <tr>
                                                      <th scope="row" class="text-dark">I</th>
                                                      <td scope="col"   class="text-dark"><?php if(isset($totalI)){ echo $totalI; } ?></td>
                                                      <?php if($bc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcboysI)){ echo $hindubcboysI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcgirlsI)){ echo $hindubcgirlsI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianbcboysI)){ echo $ChristianbcboysI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianbcgirlsI)){ echo $ChristianbcgirlsI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimbcboysI)){ echo $MuslimbcboysI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimbcgirlsI)){ echo $MuslimbcgirlsI; } ?></td>
                                                      <?php }  if($mbc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduMBCboysI)){ echo $hinduMBCboysI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduMBCgirlsI)){ echo $hinduMBCgirlsI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianMBCboysI)){ echo $ChristianMBCboysI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianMBCgirlsI)){ echo $ChristianMBCgirlsI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimMBCboysI)){ echo $MuslimMBCboysI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimMBCgirlsI)){ echo $MuslimMBCgirlsI; } ?></td>
                                                      <?php }  if($sc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSCboysI)){ echo $hinduSCboysI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSCgirlsI)){ echo $hinduSCgirlsI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSCboysI)){ echo $ChristianSCboysI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSCgirlsI)){ echo $ChristianSCgirlsI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSCboysI)){ echo $MuslimSCboysI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSCgirlsI)){ echo $MuslimSCgirlsI; } ?></td>
                                                      <?php }  if($st>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSTboysI)){ echo $hinduSTboysI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSTgirlsI)){ echo $hinduSTgirlsI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSTboysI)){ echo $ChristianSTboysI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSTgirlsI)){ echo $ChristianSTgirlsI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSTboysI)){ echo $MuslimSTboysI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSTgirlsI)){ echo $MuslimSTgirlsI; } ?></td>
                                                      <?php }  if($obc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOBCboysI)){ echo $hinduOBCboysI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOBCgirlsI)){ echo $hinduOBCgirlsI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOBCboysI)){ echo $ChristianOBCboysI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOBCgirlsI)){ echo $ChristianOBCgirlsI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOBCboysI)){ echo $MuslimOBCboysI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOBCgirlsI)){ echo $MuslimOBCgirlsI; } ?></td>
                                                      <?php }  if($dnc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduDNCboysI)){ echo $hinduDNCboysI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduDNCgirlsI)){ echo $hinduDNCgirlsI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianDNCboysI)){ echo $ChristianDNCboysI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianDNCgirlsI)){ echo $ChristianDNCgirlsI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimDNCboysI)){ echo $MuslimDNCboysI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimDNCgirlsI)){ echo $MuslimDNCgirlsI; } ?></td>
                                                      <?php }  if($others>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOthersboysI)){ echo $hinduOthersboysI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOthersgirlsI)){ echo $hinduOthersgirlsI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOthersboysI)){ echo $ChristianOthersboysI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOthersgirlsI)){ echo $ChristianOthersgirlsI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOthersboysI)){ echo $MuslimOthersboysI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOthersgirlsI)){ echo $MuslimOthersgirlsI; } ?></td>
                                                      <?php } ?>
                
                </tr>   
                <tr>
                                                      <th scope="row" class="text-dark">II</th>
                                                      <td scope="col"   class="text-dark"><?php if(isset($totalII)){ echo $totalII; } ?></td>
                                                      <?php if($bc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcboysII)){ echo $hindubcboysII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcgirlsII)){ echo $hindubcgirlsII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianbcboysII)){ echo $ChristianbcboysII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianbcgirlsII)){ echo $ChristianbcgirlsII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimbcboysII)){ echo $MuslimbcboysII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimbcgirlsII)){ echo $MuslimbcgirlsII; } ?></td>
                                                      <?php }  if($mbc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduMBCboysII)){ echo $hinduMBCboysII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduMBCgirlsII)){ echo $hinduMBCgirlsII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianMBCboysII)){ echo $ChristianMBCboysII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianMBCgirlsII)){ echo $ChristianMBCgirlsII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimMBCboysII)){ echo $MuslimMBCboysII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimMBCgirlsII)){ echo $MuslimMBCgirlsII; } ?></td>
                                                      <?php }  if($sc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSCboysII)){ echo $hinduSCboysII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSCgirlsII)){ echo $hinduSCgirlsII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSCboysII)){ echo $ChristianSCboysII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSCgirlsII)){ echo $ChristianSCgirlsII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSCboysII)){ echo $MuslimSCboysII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSCgirlsII)){ echo $MuslimSCgirlsII; } ?></td>
                                                      <?php }  if($st>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSTboysII)){ echo $hinduSTboysII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSTgirlsII)){ echo $hinduSTgirlsII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSTboysII)){ echo $ChristianSTboysII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSTgirlsII)){ echo $ChristianSTgirlsII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSTboysII)){ echo $MuslimSTboysII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSTgirlsII)){ echo $MuslimSTgirlsII; } ?></td>
                                                      <?php }  if($obc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOBCboysII)){ echo $hinduOBCboysII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOBCgirlsII)){ echo $hinduOBCgirlsII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOBCboysII)){ echo $ChristianOBCboysII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOBCgirlsII)){ echo $ChristianOBCgirlsII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOBCboysII)){ echo $MuslimOBCboysII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOBCgirlsII)){ echo $MuslimOBCgirlsII; } ?></td>
                                                      <?php }  if($dnc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduDNCboysII)){ echo $hinduDNCboysII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduDNCgirlsII)){ echo $hinduDNCgirlsII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianDNCboysII)){ echo $ChristianDNCboysII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianDNCgirlsII)){ echo $ChristianDNCgirlsII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimDNCboysII)){ echo $MuslimDNCboysII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimDNCgirlsII)){ echo $MuslimDNCgirlsII; } ?></td>
                                                      <?php }  if($others>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOthersboysII)){ echo $hinduOthersboysII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOthersgirlsII)){ echo $hinduOthersgirlsII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOthersboysII)){ echo $ChristianOthersboysII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOthersgirlsII)){ echo $ChristianOthersgirlsII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOthersboysII)){ echo $MuslimOthersboysII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOthersgirlsII)){ echo $MuslimOthersgirlsII; } ?></td>
                                                      <?php } ?>
                
                </tr>  
                <tr>
                                                      <th scope="row" class="text-dark">III</th>
                                                      <td scope="col"   class="text-dark"><?php if(isset($totalIII)){ echo $totalIII; } ?></td>
                                                      <?php if($bc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcboysIII)){ echo $hindubcboysIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcgirlsIII)){ echo $hindubcgirlsIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianbcboysIII)){ echo $ChristianbcboysIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianbcgirlsIII)){ echo $ChristianbcgirlsIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimbcboysIII)){ echo $MuslimbcboysIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimbcgirlsIII)){ echo $MuslimbcgirlsIII; } ?></td>
                                                      <?php }  if($mbc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduMBCboysIII)){ echo $hinduMBCboysIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduMBCgirlsIII)){ echo $hinduMBCgirlsIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianMBCboysIII)){ echo $ChristianMBCboysIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianMBCgirlsIII)){ echo $ChristianMBCgirlsIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimMBCboysIII)){ echo $MuslimMBCboysIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimMBCgirlsIII)){ echo $MuslimMBCgirlsIII; } ?></td>
                                                      <?php }  if($sc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSCboysIII)){ echo $hinduSCboysIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSCgirlsIII)){ echo $hinduSCgirlsIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSCboysIII)){ echo $ChristianSCboysIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSCgirlsIII)){ echo $ChristianSCgirlsIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSCboysIII)){ echo $MuslimSCboysIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSCgirlsIII)){ echo $MuslimSCgirlsIII; } ?></td>
                                                      <?php }  if($st>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSTboysIII)){ echo $hinduSTboysIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSTgirlsIII)){ echo $hinduSTgirlsIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSTboysIII)){ echo $ChristianSTboysIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSTgirlsIII)){ echo $ChristianSTgirlsIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSTboysIII)){ echo $MuslimSTboysIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSTgirlsIII)){ echo $MuslimSTgirlsIII; } ?></td>
                                                      <?php }  if($obc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOBCboysIII)){ echo $hinduOBCboysIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOBCgirlsIII)){ echo $hinduOBCgirlsIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOBCboysIII)){ echo $ChristianOBCboysIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOBCgirlsIII)){ echo $ChristianOBCgirlsIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOBCboysIII)){ echo $MuslimOBCboysIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOBCgirlsIII)){ echo $MuslimOBCgirlsIII; } ?></td>
                                                      <?php }  if($dnc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduDNCboysIII)){ echo $hinduDNCboysIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduDNCgirlsIII)){ echo $hinduDNCgirlsIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianDNCboysIII)){ echo $ChristianDNCboysIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianDNCgirlsIII)){ echo $ChristianDNCgirlsIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimDNCboysIII)){ echo $MuslimDNCboysIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimDNCgirlsIII)){ echo $MuslimDNCgirlsIII; } ?></td>
                                                      <?php }  if($others>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOthersboysIII)){ echo $hinduOthersboysIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOthersgirlsIII)){ echo $hinduOthersgirlsIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOthersboysIII)){ echo $ChristianOthersboysIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOthersgirlsIII)){ echo $ChristianOthersgirlsIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOthersboysIII)){ echo $MuslimOthersboysIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOthersgirlsIII)){ echo $MuslimOthersgirlsIII; } ?></td>
                                                      <?php } ?>
                
                </tr>    
                <tr>
                                                      <th scope="row" class="text-dark">IV</th>
                                                      <td scope="col"   class="text-dark"><?php if(isset($totalIV)){ echo $totalIV; } ?></td>
                                                      <?php if($bc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcboysIV)){ echo $hindubcboysIV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcgirlsIV)){ echo $hindubcgirlsIV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianbcboysIV)){ echo $ChristianbcboysIV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianbcgirlsIV)){ echo $ChristianbcgirlsIV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimbcboysIV)){ echo $MuslimbcboysIV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimbcgirlsIV)){ echo $MuslimbcgirlsIV; } ?></td>
                                                      <?php }  if($mbc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduMBCboysIV)){ echo $hinduMBCboysIV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduMBCgirlsIV)){ echo $hinduMBCgirlsIV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianMBCboysIV)){ echo $ChristianMBCboysIV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianMBCgirlsIV)){ echo $ChristianMBCgirlsIV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimMBCboysIV)){ echo $MuslimMBCboysIV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimMBCgirlsIV)){ echo $MuslimMBCgirlsIV; } ?></td>
                                                      <?php }  if($sc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSCboysIV)){ echo $hinduSCboysIV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSCgirlsIV)){ echo $hinduSCgirlsIV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSCboysIV)){ echo $ChristianSCboysIV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSCgirlsIV)){ echo $ChristianSCgirlsIV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSCboysIV)){ echo $MuslimSCboysIV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSCgirlsIV)){ echo $MuslimSCgirlsIV; } ?></td>
                                                      <?php }  if($st>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSTboysIV)){ echo $hinduSTboysIV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSTgirlsIV)){ echo $hinduSTgirlsIV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSTboysIV)){ echo $ChristianSTboysIV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSTgirlsIV)){ echo $ChristianSTgirlsIV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSTboysIV)){ echo $MuslimSTboysIV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSTgirlsIV)){ echo $MuslimSTgirlsIV; } ?></td>
                                                      <?php }  if($obc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOBCboysIV)){ echo $hinduOBCboysIV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOBCgirlsIV)){ echo $hinduOBCgirlsIV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOBCboysIV)){ echo $ChristianOBCboysIV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOBCgirlsIV)){ echo $ChristianOBCgirlsIV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOBCboysIV)){ echo $MuslimOBCboysIV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOBCgirlsIV)){ echo $MuslimOBCgirlsIV; } ?></td>
                                                      <?php }  if($dnc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduDNCboysIV)){ echo $hinduDNCboysIV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduDNCgirlsIV)){ echo $hinduDNCgirlsIV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianDNCboysIV)){ echo $ChristianDNCboysIV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianDNCgirlsIV)){ echo $ChristianDNCgirlsIV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimDNCboysIV)){ echo $MuslimDNCboysIV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimDNCgirlsIV)){ echo $MuslimDNCgirlsIV; } ?></td>
                                                      <?php }  if($others>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOthersboysIV)){ echo $hinduOthersboysIV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOthersgirlsIV)){ echo $hinduOthersgirlsIV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOthersboysIV)){ echo $ChristianOthersboysIV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOthersgirlsIV)){ echo $ChristianOthersgirlsIV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOthersboysIV)){ echo $MuslimOthersboysIV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOthersgirlsIV)){ echo $MuslimOthersgirlsIV; } ?></td>
                                                      <?php } ?>
                
                </tr>  
                <tr>
                                                      <th scope="row" class="text-dark">V</th>
                                                      <td scope="col"   class="text-dark"><?php if(isset($totalV)){ echo $totalV; } ?></td>
                                                      <?php if($bc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcboysV)){ echo $hindubcboysV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcgirlsV)){ echo $hindubcgirlsV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianbcboysV)){ echo $ChristianbcboysV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianbcgirlsV)){ echo $ChristianbcgirlsV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimbcboysV)){ echo $MuslimbcboysV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimbcgirlsV)){ echo $MuslimbcgirlsV; } ?></td>
                                                      <?php }  if($mbc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduMBCboysV)){ echo $hinduMBCboysV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduMBCgirlsV)){ echo $hinduMBCgirlsV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianMBCboysV)){ echo $ChristianMBCboysV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianMBCgirlsV)){ echo $ChristianMBCgirlsV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimMBCboysV)){ echo $MuslimMBCboysV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimMBCgirlsV)){ echo $MuslimMBCgirlsV; } ?></td>
                                                      <?php }  if($sc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSCboysV)){ echo $hinduSCboysV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSCgirlsV)){ echo $hinduSCgirlsV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSCboysV)){ echo $ChristianSCboysV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSCgirlsV)){ echo $ChristianSCgirlsV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSCboysV)){ echo $MuslimSCboysV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSCgirlsV)){ echo $MuslimSCgirlsV; } ?></td>
                                                      <?php }  if($st>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSTboysV)){ echo $hinduSTboysV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSTgirlsV)){ echo $hinduSTgirlsV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSTboysV)){ echo $ChristianSTboysV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSTgirlsV)){ echo $ChristianSTgirlsV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSTboysV)){ echo $MuslimSTboysV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSTgirlsV)){ echo $MuslimSTgirlsV; } ?></td>
                                                      <?php }  if($obc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOBCboysV)){ echo $hinduOBCboysV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOBCgirlsV)){ echo $hinduOBCgirlsV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOBCboysV)){ echo $ChristianOBCboysV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOBCgirlsV)){ echo $ChristianOBCgirlsV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOBCboysV)){ echo $MuslimOBCboysV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOBCgirlsV)){ echo $MuslimOBCgirlsV; } ?></td>
                                                      <?php }  if($dnc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduDNCboysV)){ echo $hinduDNCboysV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduDNCgirlsV)){ echo $hinduDNCgirlsV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianDNCboysV)){ echo $ChristianDNCboysV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianDNCgirlsV)){ echo $ChristianDNCgirlsV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimDNCboysV)){ echo $MuslimDNCboysV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimDNCgirlsV)){ echo $MuslimDNCgirlsV; } ?></td>
                                                      <?php }  if($others>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOthersboysV)){ echo $hinduOthersboysV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOthersgirlsV)){ echo $hinduOthersgirlsV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOthersboysV)){ echo $ChristianOthersboysV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOthersgirlsV)){ echo $ChristianOthersgirlsV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOthersboysV)){ echo $MuslimOthersboysV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOthersgirlsV)){ echo $MuslimOthersgirlsV; } ?></td>
                                                      <?php } ?>
                
                </tr>     
                <tr>
                                                      <th scope="row" class="text-dark">VI</th>
                                                      <td scope="col"   class="text-dark"><?php if(isset($totalVI)){ echo $totalVI; } ?></td>
                                                      <?php if($bc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcboysVI)){ echo $hindubcboysVI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcgirlsVI)){ echo $hindubcgirlsVI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianbcboysVI)){ echo $ChristianbcboysVI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianbcgirlsVI)){ echo $ChristianbcgirlsVI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimbcboysVI)){ echo $MuslimbcboysVI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimbcgirlsVI)){ echo $MuslimbcgirlsVI; } ?></td>
                                                      <?php }  if($mbc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduMBCboysVI)){ echo $hinduMBCboysVI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduMBCgirlsVI)){ echo $hinduMBCgirlsVI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianMBCboysVI)){ echo $ChristianMBCboysVI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianMBCgirlsVI)){ echo $ChristianMBCgirlsVI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimMBCboysVI)){ echo $MuslimMBCboysVI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimMBCgirlsVI)){ echo $MuslimMBCgirlsVI; } ?></td>
                                                      <?php }  if($sc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSCboysVI)){ echo $hinduSCboysVI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSCgirlsVI)){ echo $hinduSCgirlsVI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSCboysVI)){ echo $ChristianSCboysVI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSCgirlsVI)){ echo $ChristianSCgirlsVI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSCboysVI)){ echo $MuslimSCboysVI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSCgirlsVI)){ echo $MuslimSCgirlsVI; } ?></td>
                                                      <?php }  if($st>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSTboysVI)){ echo $hinduSTboysVI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSTgirlsVI)){ echo $hinduSTgirlsVI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSTboysVI)){ echo $ChristianSTboysVI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSTgirlsVI)){ echo $ChristianSTgirlsVI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSTboysVI)){ echo $MuslimSTboysVI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSTgirlsVI)){ echo $MuslimSTgirlsVI; } ?></td>
                                                      <?php }  if($obc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOBCboysVI)){ echo $hinduOBCboysVI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOBCgirlsVI)){ echo $hinduOBCgirlsVI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOBCboysVI)){ echo $ChristianOBCboysVI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOBCgirlsVI)){ echo $ChristianOBCgirlsVI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOBCboysVI)){ echo $MuslimOBCboysVI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOBCgirlsVI)){ echo $MuslimOBCgirlsVI; } ?></td>
                                                      <?php }  if($dnc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduDNCboysVI)){ echo $hinduDNCboysVI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduDNCgirlsVI)){ echo $hinduDNCgirlsVI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianDNCboysVI)){ echo $ChristianDNCboysVI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianDNCgirlsVI)){ echo $ChristianDNCgirlsVI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimDNCboysVI)){ echo $MuslimDNCboysVI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimDNCgirlsVI)){ echo $MuslimDNCgirlsVI; } ?></td>
                                                      <?php }  if($others>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOthersboysVI)){ echo $hinduOthersboysVI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOthersgirlsVI)){ echo $hinduOthersgirlsVI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOthersboysVI)){ echo $ChristianOthersboysVI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOthersgirlsVI)){ echo $ChristianOthersgirlsVI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOthersboysVI)){ echo $MuslimOthersboysVI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOthersgirlsVI)){ echo $MuslimOthersgirlsVI; } ?></td>
                                                      <?php } ?>
                
                </tr>    
                <tr>
                                                      <th scope="row" class="text-dark">VII</th>
                                                      <td scope="col"   class="text-dark"><?php if(isset($totalVII)){ echo $totalVII; } ?></td>
                                                      <?php if($bc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcboysVII)){ echo $hindubcboysVII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcgirlsVII)){ echo $hindubcgirlsVII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianbcboysVII)){ echo $ChristianbcboysVII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianbcgirlsVII)){ echo $ChristianbcgirlsVII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimbcboysVII)){ echo $MuslimbcboysVII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimbcgirlsVII)){ echo $MuslimbcgirlsVII; } ?></td>
                                                      <?php }  if($mbc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduMBCboysVII)){ echo $hinduMBCboysVII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduMBCgirlsVII)){ echo $hinduMBCgirlsVII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianMBCboysVII)){ echo $ChristianMBCboysVII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianMBCgirlsVII)){ echo $ChristianMBCgirlsVII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimMBCboysVII)){ echo $MuslimMBCboysVII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimMBCgirlsVII)){ echo $MuslimMBCgirlsVII; } ?></td>
                                                      <?php }  if($sc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSCboysVII)){ echo $hinduSCboysVII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSCgirlsVII)){ echo $hinduSCgirlsVII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSCboysVII)){ echo $ChristianSCboysVII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSCgirlsVII)){ echo $ChristianSCgirlsVII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSCboysVII)){ echo $MuslimSCboysVII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSCgirlsVII)){ echo $MuslimSCgirlsVII; } ?></td>
                                                      <?php }  if($st>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSTboysVII)){ echo $hinduSTboysVII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSTgirlsVII)){ echo $hinduSTgirlsVII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSTboysVII)){ echo $ChristianSTboysVII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSTgirlsVII)){ echo $ChristianSTgirlsVII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSTboysVII)){ echo $MuslimSTboysVII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSTgirlsVII)){ echo $MuslimSTgirlsVII; } ?></td>
                                                      <?php }  if($obc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOBCboysVII)){ echo $hinduOBCboysVII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOBCgirlsVII)){ echo $hinduOBCgirlsVII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOBCboysVII)){ echo $ChristianOBCboysVII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOBCgirlsVII)){ echo $ChristianOBCgirlsVII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOBCboysVII)){ echo $MuslimOBCboysVII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOBCgirlsVII)){ echo $MuslimOBCgirlsVII; } ?></td>
                                                      <?php }  if($dnc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduDNCboysVII)){ echo $hinduDNCboysVII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduDNCgirlsVII)){ echo $hinduDNCgirlsVII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianDNCboysVII)){ echo $ChristianDNCboysVII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianDNCgirlsVII)){ echo $ChristianDNCgirlsVII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimDNCboysVII)){ echo $MuslimDNCboysVII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimDNCgirlsVII)){ echo $MuslimDNCgirlsVII; } ?></td>
                                                      <?php }  if($others>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOthersboysVII)){ echo $hinduOthersboysVII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOthersgirlsVII)){ echo $hinduOthersgirlsVII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOthersboysVII)){ echo $ChristianOthersboysVII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOthersgirlsVII)){ echo $ChristianOthersgirlsVII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOthersboysVII)){ echo $MuslimOthersboysVII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOthersgirlsVII)){ echo $MuslimOthersgirlsVII; } ?></td>
                                                      <?php } ?>
                
                </tr>   
                <tr>
                                                      <th scope="row" class="text-dark">VIII</th>
                                                      <td scope="col"   class="text-dark"><?php if(isset($totalVIII)){ echo $totalVIII; } ?></td>
                                                      <?php if($bc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcboysVIII)){ echo $hindubcboysVIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcgirlsVIII)){ echo $hindubcgirlsVIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianbcboysVIII)){ echo $ChristianbcboysVIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianbcgirlsVIII)){ echo $ChristianbcgirlsVIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimbcboysVIII)){ echo $MuslimbcboysVIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimbcgirlsVIII)){ echo $MuslimbcgirlsVIII; } ?></td>
                                                      <?php }  if($mbc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduMBCboysVIII)){ echo $hinduMBCboysVIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduMBCgirlsVIII)){ echo $hinduMBCgirlsVIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianMBCboysVIII)){ echo $ChristianMBCboysVIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianMBCgirlsVIII)){ echo $ChristianMBCgirlsVIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimMBCboysVIII)){ echo $MuslimMBCboysVIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimMBCgirlsVIII)){ echo $MuslimMBCgirlsVIII; } ?></td>
                                                      <?php }  if($sc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSCboysVIII)){ echo $hinduSCboysVIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSCgirlsVIII)){ echo $hinduSCgirlsVIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSCboysVIII)){ echo $ChristianSCboysVIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSCgirlsVIII)){ echo $ChristianSCgirlsVIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSCboysVIII)){ echo $MuslimSCboysVIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSCgirlsVIII)){ echo $MuslimSCgirlsVIII; } ?></td>
                                                      <?php }  if($st>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSTboysVIII)){ echo $hinduSTboysVIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSTgirlsVIII)){ echo $hinduSTgirlsVIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSTboysVIII)){ echo $ChristianSTboysVIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSTgirlsVIII)){ echo $ChristianSTgirlsVIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSTboysVIII)){ echo $MuslimSTboysVIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSTgirlsVIII)){ echo $MuslimSTgirlsVIII; } ?></td>
                                                      <?php }  if($obc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOBCboysVIII)){ echo $hinduOBCboysVIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOBCgirlsVIII)){ echo $hinduOBCgirlsVIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOBCboysVIII)){ echo $ChristianOBCboysVIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOBCgirlsVIII)){ echo $ChristianOBCgirlsVIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOBCboysVIII)){ echo $MuslimOBCboysVIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOBCgirlsVIII)){ echo $MuslimOBCgirlsVIII; } ?></td>
                                                      <?php }  if($dnc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduDNCboysVIII)){ echo $hinduDNCboysVIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduDNCgirlsVIII)){ echo $hinduDNCgirlsVIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianDNCboysVIII)){ echo $ChristianDNCboysVIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianDNCgirlsVIII)){ echo $ChristianDNCgirlsVIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimDNCboysVIII)){ echo $MuslimDNCboysVIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimDNCgirlsVIII)){ echo $MuslimDNCgirlsVIII; } ?></td>
                                                      <?php }  if($others>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOthersboysVIII)){ echo $hinduOthersboysVIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOthersgirlsVIII)){ echo $hinduOthersgirlsVIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOthersboysVIII)){ echo $ChristianOthersboysVIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOthersgirlsVIII)){ echo $ChristianOthersgirlsVIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOthersboysVIII)){ echo $MuslimOthersboysVIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOthersgirlsVIII)){ echo $MuslimOthersgirlsVIII; } ?></td>
                                                      <?php } ?>
                
                </tr>    
                <tr>
                                                      <th scope="row" class="text-dark">IX</th>
                                                      <td scope="col"   class="text-dark"><?php if(isset($totalIX)){ echo $totalIX; } ?></td>
                                                      <?php if($bc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcboysIX)){ echo $hindubcboysIX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcgirlsIX)){ echo $hindubcgirlsIX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianbcboysIX)){ echo $ChristianbcboysIX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianbcgirlsIX)){ echo $ChristianbcgirlsIX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimbcboysIX)){ echo $MuslimbcboysIX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimbcgirlsIX)){ echo $MuslimbcgirlsIX; } ?></td>
                                                      <?php }  if($mbc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduMBCboysIX)){ echo $hinduMBCboysIX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduMBCgirlsIX)){ echo $hinduMBCgirlsIX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianMBCboysIX)){ echo $ChristianMBCboysIX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianMBCgirlsIX)){ echo $ChristianMBCgirlsIX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimMBCboysIX)){ echo $MuslimMBCboysIX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimMBCgirlsIX)){ echo $MuslimMBCgirlsIX; } ?></td>
                                                      <?php }  if($sc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSCboysIX)){ echo $hinduSCboysIX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSCgirlsIX)){ echo $hinduSCgirlsIX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSCboysIX)){ echo $ChristianSCboysIX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSCgirlsIX)){ echo $ChristianSCgirlsIX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSCboysIX)){ echo $MuslimSCboysIX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSCgirlsIX)){ echo $MuslimSCgirlsIX; } ?></td>
                                                      <?php }  if($st>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSTboysIX)){ echo $hinduSTboysIX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSTgirlsIX)){ echo $hinduSTgirlsIX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSTboysIX)){ echo $ChristianSTboysIX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSTgirlsIX)){ echo $ChristianSTgirlsIX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSTboysIX)){ echo $MuslimSTboysIX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSTgirlsIX)){ echo $MuslimSTgirlsIX; } ?></td>
                                                      <?php }  if($obc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOBCboysIX)){ echo $hinduOBCboysIX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOBCgirlsIX)){ echo $hinduOBCgirlsIX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOBCboysIX)){ echo $ChristianOBCboysIX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOBCgirlsIX)){ echo $ChristianOBCgirlsIX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOBCboysIX)){ echo $MuslimOBCboysIX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOBCgirlsIX)){ echo $MuslimOBCgirlsIX; } ?></td>
                                                      <?php }  if($dnc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduDNCboysIX)){ echo $hinduDNCboysIX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduDNCgirlsIX)){ echo $hinduDNCgirlsIX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianDNCboysIX)){ echo $ChristianDNCboysIX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianDNCgirlsIX)){ echo $ChristianDNCgirlsIX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimDNCboysIX)){ echo $MuslimDNCboysIX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimDNCgirlsIX)){ echo $MuslimDNCgirlsIX; } ?></td>
                                                      <?php }  if($others>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOthersboysIX)){ echo $hinduOthersboysIX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOthersgirlsIX)){ echo $hinduOthersgirlsIX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOthersboysIX)){ echo $ChristianOthersboysIX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOthersgirlsIX)){ echo $ChristianOthersgirlsIX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOthersboysIX)){ echo $MuslimOthersboysIX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOthersgirlsIX)){ echo $MuslimOthersgirlsIX; } ?></td>
                                                      <?php } ?>
                
                </tr>  
                <tr>
                                                      <th scope="row" class="text-dark">X</th>
                                                      <td scope="col"   class="text-dark"><?php if(isset($totalX)){ echo $totalX; } ?></td>
                                                      <?php if($bc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcboysX)){ echo $hindubcboysX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcgirlsX)){ echo $hindubcgirlsX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianbcboysX)){ echo $ChristianbcboysX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianbcgirlsX)){ echo $ChristianbcgirlsX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimbcboysX)){ echo $MuslimbcboysX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimbcgirlsX)){ echo $MuslimbcgirlsX; } ?></td>
                                                      <?php }  if($mbc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduMBCboysX)){ echo $hinduMBCboysX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduMBCgirlsX)){ echo $hinduMBCgirlsX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianMBCboysX)){ echo $ChristianMBCboysX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianMBCgirlsX)){ echo $ChristianMBCgirlsX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimMBCboysX)){ echo $MuslimMBCboysX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimMBCgirlsX)){ echo $MuslimMBCgirlsX; } ?></td>
                                                      <?php }  if($sc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSCboysX)){ echo $hinduSCboysX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSCgirlsX)){ echo $hinduSCgirlsX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSCboysX)){ echo $ChristianSCboysX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSCgirlsX)){ echo $ChristianSCgirlsX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSCboysX)){ echo $MuslimSCboysX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSCgirlsX)){ echo $MuslimSCgirlsX; } ?></td>
                                                      <?php }  if($st>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSTboysX)){ echo $hinduSTboysX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSTgirlsX)){ echo $hinduSTgirlsX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSTboysX)){ echo $ChristianSTboysX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSTgirlsX)){ echo $ChristianSTgirlsX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSTboysX)){ echo $MuslimSTboysX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSTgirlsX)){ echo $MuslimSTgirlsX; } ?></td>
                                                      <?php }  if($obc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOBCboysX)){ echo $hinduOBCboysX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOBCgirlsX)){ echo $hinduOBCgirlsX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOBCboysX)){ echo $ChristianOBCboysX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOBCgirlsX)){ echo $ChristianOBCgirlsX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOBCboysX)){ echo $MuslimOBCboysX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOBCgirlsX)){ echo $MuslimOBCgirlsX; } ?></td>
                                                      <?php }  if($dnc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduDNCboysX)){ echo $hinduDNCboysX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduDNCgirlsX)){ echo $hinduDNCgirlsX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianDNCboysX)){ echo $ChristianDNCboysX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianDNCgirlsX)){ echo $ChristianDNCgirlsX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimDNCboysX)){ echo $MuslimDNCboysX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimDNCgirlsX)){ echo $MuslimDNCgirlsX; } ?></td>
                                                      <?php }  if($others>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOthersboysX)){ echo $hinduOthersboysX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOthersgirlsX)){ echo $hinduOthersgirlsX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOthersboysX)){ echo $ChristianOthersboysX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOthersgirlsX)){ echo $ChristianOthersgirlsX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOthersboysX)){ echo $MuslimOthersboysX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOthersgirlsX)){ echo $MuslimOthersgirlsX; } ?></td>
                                                      <?php } ?>
                
                </tr>    
                <tr>
                                                      <th scope="row" class="text-dark">XI</th>
                                                      <td scope="col"   class="text-dark"><?php if(isset($totalXI)){ echo $totalXI; } ?></td>
                                                      <?php if($bc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcboysXI)){ echo $hindubcboysXI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcgirlsXI)){ echo $hindubcgirlsXI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianbcboysXI)){ echo $ChristianbcboysXI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianbcgirlsXI)){ echo $ChristianbcgirlsXI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimbcboysXI)){ echo $MuslimbcboysXI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimbcgirlsXI)){ echo $MuslimbcgirlsXI; } ?></td>
                                                      <?php }  if($mbc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduMBCboysXI)){ echo $hinduMBCboysXI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduMBCgirlsXI)){ echo $hinduMBCgirlsXI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianMBCboysXI)){ echo $ChristianMBCboysXI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianMBCgirlsXI)){ echo $ChristianMBCgirlsXI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimMBCboysXI)){ echo $MuslimMBCboysXI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimMBCgirlsXI)){ echo $MuslimMBCgirlsXI; } ?></td>
                                                      <?php }  if($sc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSCboysXI)){ echo $hinduSCboysXI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSCgirlsXI)){ echo $hinduSCgirlsXI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSCboysXI)){ echo $ChristianSCboysXI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSCgirlsXI)){ echo $ChristianSCgirlsXI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSCboysXI)){ echo $MuslimSCboysXI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSCgirlsXI)){ echo $MuslimSCgirlsXI; } ?></td>
                                                      <?php }  if($st>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSTboysXI)){ echo $hinduSTboysXI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSTgirlsXI)){ echo $hinduSTgirlsXI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSTboysXI)){ echo $ChristianSTboysXI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSTgirlsXI)){ echo $ChristianSTgirlsXI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSTboysXI)){ echo $MuslimSTboysXI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSTgirlsXI)){ echo $MuslimSTgirlsXI; } ?></td>
                                                      <?php }  if($obc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOBCboysXI)){ echo $hinduOBCboysXI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOBCgirlsXI)){ echo $hinduOBCgirlsXI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOBCboysXI)){ echo $ChristianOBCboysXI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOBCgirlsXI)){ echo $ChristianOBCgirlsXI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOBCboysXI)){ echo $MuslimOBCboysXI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOBCgirlsXI)){ echo $MuslimOBCgirlsXI; } ?></td>
                                                      <?php }  if($dnc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduDNCboysXI)){ echo $hinduDNCboysXI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduDNCgirlsXI)){ echo $hinduDNCgirlsXI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianDNCboysXI)){ echo $ChristianDNCboysXI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianDNCgirlsXI)){ echo $ChristianDNCgirlsXI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimDNCboysXI)){ echo $MuslimDNCboysXI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimDNCgirlsXI)){ echo $MuslimDNCgirlsXI; } ?></td>
                                                      <?php }  if($others>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOthersboysXI)){ echo $hinduOthersboysXI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOthersgirlsXI)){ echo $hinduOthersgirlsXI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOthersboysXI)){ echo $ChristianOthersboysXI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOthersgirlsXI)){ echo $ChristianOthersgirlsXI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOthersboysXI)){ echo $MuslimOthersboysXI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOthersgirlsXI)){ echo $MuslimOthersgirlsXI; } ?></td>
                                                      <?php } ?>
                
                </tr>                           
                                                    <tr>
                                                      <th scope="row" class="text-dark">XII</th>
                                                      <td scope="col"   class="text-dark"><?php if(isset($totalXII)){ echo $totalXII; } ?></td>
                                                      <?php if($bc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcboysXII)){ echo $hindubcboysXII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcgirlsXII)){ echo $hindubcgirlsXII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianbcboysXII)){ echo $ChristianbcboysXII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianbcgirlsXII)){ echo $ChristianbcgirlsXII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimbcboysXII)){ echo $MuslimbcboysXII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimbcgirlsXII)){ echo $MuslimbcgirlsXII; } ?></td>
                                                      <?php }  if($mbc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduMBCboysXII)){ echo $hinduMBCboysXII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduMBCgirlsXII)){ echo $hinduMBCgirlsXII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianMBCboysXII)){ echo $ChristianMBCboysXII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianMBCgirlsXII)){ echo $ChristianMBCgirlsXII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimMBCboysXII)){ echo $MuslimMBCboysXII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimMBCgirlsXII)){ echo $MuslimMBCgirlsXII; } ?></td>
                                                      <?php }  if($sc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSCboysXII)){ echo $hinduSCboysXII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSCgirlsXII)){ echo $hinduSCgirlsXII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSCboysXII)){ echo $ChristianSCboysXII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSCgirlsXII)){ echo $ChristianSCgirlsXII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSCboysXII)){ echo $MuslimSCboysXII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSCgirlsXII)){ echo $MuslimSCgirlsXII; } ?></td>
                                                      <?php }  if($st>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSTboysXII)){ echo $hinduSTboysXII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduSTgirlsXII)){ echo $hinduSTgirlsXII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSTboysXII)){ echo $ChristianSTboysXII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianSTgirlsXII)){ echo $ChristianSTgirlsXII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSTboysXII)){ echo $MuslimSTboysXII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimSTgirlsXII)){ echo $MuslimSTgirlsXII; } ?></td>
                                                      <?php }  if($obc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOBCboysXII)){ echo $hinduOBCboysXII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOBCgirlsXII)){ echo $hinduOBCgirlsXII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOBCboysXII)){ echo $ChristianOBCboysXII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOBCgirlsXII)){ echo $ChristianOBCgirlsXII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOBCboysXII)){ echo $MuslimOBCboysXII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOBCgirlsXII)){ echo $MuslimOBCgirlsXII; } ?></td>
                                                      <?php }  if($dnc>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduDNCboysXII)){ echo $hinduDNCboysXII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduDNCgirlsXII)){ echo $hinduDNCgirlsXII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianDNCboysXII)){ echo $ChristianDNCboysXII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianDNCgirlsXII)){ echo $ChristianDNCgirlsXII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimDNCboysXII)){ echo $MuslimDNCboysXII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimDNCgirlsXII)){ echo $MuslimDNCgirlsXII; } ?></td>
                                                      <?php }  if($others>0){?>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOthersboysXII)){ echo $hinduOthersboysXII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hinduOthersgirlsXII)){ echo $hinduOthersgirlsXII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOthersboysXII)){ echo $ChristianOthersboysXII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ChristianOthersgirlsXII)){ echo $ChristianOthersgirlsXII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOthersboysXII)){ echo $MuslimOthersboysXII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($MuslimOthersgirlsXII)){ echo $MuslimOthersgirlsXII; } ?></td>
                                                      <?php } ?>
                                                       </tr>


            
</tbody>
</table>
</div>
</div>

<canvas id="bar-chart-horizontalbc" width="100%" height="50%"></canvas>
<canvas id="bar-chart-horizontalmbc" width="100%" height="50%"></canvas>
<canvas id="bar-chart-horizontalsc" width="100%" height="50%"></canvas>
<canvas id="bar-chart-horizontalst" width="100%" height="50%"></canvas>
<canvas id="bar-chart-horizontaldnc" width="100%" height="50%"></canvas>
<canvas id="bar-chart-horizontalothers" width="100%" height="50%"></canvas>

<script src="chartjs.js"></script>
<script>
//BC
 <?php if($bc>0){ ?>

 	var chtotalbclkg   = <?php if(isset($chtotalbclkg)){echo $chtotalbclkg; } ?>;
 	var chtotalbcukg   = <?php if(isset($chtotalbcukg)){echo $chtotalbcukg; } ?>;
 	var chtotalbcI     = <?php if(isset($chtotalbcI)){echo $chtotalbcI; } ?>;
 	var chtotalbcII    = <?php if(isset($chtotalbcII)){echo $chtotalbcII; } ?>;
 	var chtotalbcIII   = <?php if(isset($chtotalbcIII)){echo $chtotalbcIII; } ?>;
 	var chtotalbcIV    = <?php if(isset($chtotalbcIV)){echo $chtotalbcIV; } ?>;
 	var chtotalbcV     = <?php if(isset($chtotalbcV)){echo $chtotalbcV; } ?>;
 	var chtotalbcVI    = <?php if(isset($chtotalbcVI)){echo $chtotalbcVI; } ?>;
 	var chtotalbcVII   = <?php if(isset($chtotalbcVII)){echo $chtotalbcVII; } ?>;
 	var chtotalbcVIII  = <?php if(isset($chtotalbcVIII)){echo $chtotalbcVIII; }?>;
 	var chtotalbcIX    = <?php if(isset($chtotalbcIX)){echo $chtotalbcIX; } ?>;
 	var chtotalbcX     = <?php if(isset($chtotalbcX)){echo $chtotalbcX; } ?>;
 	var chtotalbcXI    = <?php if(isset($chtotalbcXI)){echo $chtotalbcXI; } ?>;
 	var chtotalbcXII   = <?php if(isset($chtotalbcXII)){echo $chtotalbcXII; }?>;

new Chart(document.getElementById("bar-chart-horizontalbc"), {
    type: 'horizontalBar',
    data: {
      labels: ["LKG","UKG","I","II","III","IV","V","VI","VII","VIII","IX","X","XI","XII"],
      datasets: [
        {
          label: "students",
          backgroundColor: ["#ff0000", "#ff8000","#ffff00","#00ff80","#00ff00",
          "#00bfff","#ff0080","#8000ff","#0000ff","#00cca3","#ff0080","#b37700","#99cc00","#408000"],
          data: [chtotalbclkg, chtotalbcukg, chtotalbcI, chtotalbcII, chtotalbcIII, chtotalbcIV, chtotalbcV,chtotalbcVI, chtotalbcVII, chtotalbcVII, chtotalbcIX, chtotalbcX, chtotalbcXI, chtotalbcXII]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Number of Students in BC Category'
      }
    }
});
 <?php } ?>
//MBC
  <?php if($mbc>0){ ?>

  	var chtotalmbclkg   = <?php if(isset($chtotalmbclkg)){echo $chtotalmbclkg; } ?>;
 	var chtotalmbcukg   = <?php if(isset($chtotalmbcukg)){echo $chtotalmbcukg; } ?>;
 	var chtotalmbcI     = <?php if(isset($chtotalmbcI)){echo $chtotalmbcI; } ?>;
 	var chtotalmbcII    = <?php if(isset($chtotalmbcII)){echo $chtotalmbcII; } ?>;
 	var chtotalmbcIII   = <?php if(isset($chtotalmbcIII)){echo $chtotalmbcIII; } ?>;
 	var chtotalmbcIV    = <?php if(isset($chtotalmbcIV)){echo $chtotalmbcIV; } ?>;
 	var chtotalmbcV     = <?php if(isset($chtotalmbcV)){echo $chtotalmbcV; } ?>;
 	var chtotalmbcVI    = <?php if(isset($chtotalmbcVI)){echo $chtotalmbcVI; } ?>;
 	var chtotalmbcVII   = <?php if(isset($chtotalmbcVII)){echo $chtotalmbcVII; } ?>;
 	var chtotalmbcVIII  = <?php if(isset($chtotalmbcVIII)){echo $chtotalmbcVIII; }?>;
 	var chtotalmbcIX    = <?php if(isset($chtotalmbcIX)){echo $chtotalmbcIX; } ?>;
 	var chtotalmbcX     = <?php if(isset($chtotalmbcX)){echo $chtotalmbcX; } ?>;
 	var chtotalmbcXI    = <?php if(isset($chtotalmbcXI)){echo $chtotalmbcXI; } ?>;
 	var chtotalmbcXII   = <?php if(isset($chtotalmbcXII)){echo $chtotalmbcXII; }?>;

new Chart(document.getElementById("bar-chart-horizontalmbc"), {
    type: 'horizontalBar',
    data: {
      labels: ["LKG","UKG","I","II","III","IV","V","VI","VII","VIII","IX","X","XI","XII"],
      datasets: [
        {
          label: "students",
          backgroundColor: ["#ff0000", "#ff8000","#ffff00","#00ff80","#00ff00",
          "#00bfff","#ff0080","#8000ff","#0000ff","#00cca3","#ff0080","#b37700","#99cc00","#408000"],
          data: [chtotalmbclkg, chtotalmbcukg, chtotalmbcI, chtotalmbcII, chtotalmbcIII, chtotalmbcIV, chtotalmbcV, chtotalmbcVI, chtotalmbcVII, chtotalmbcVIII, chtotalmbcIX, chtotalmbcX, chtotalmbcXI, chtotalmbcXII]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Number of Students in MBC Category'
      }
    }
});
 <?php } ?>

//MBC
  <?php if($sc>0){ ?>

  	var chtotalsclkg   = <?php if(isset($chtotalsclkg)){echo $chtotalsclkg; } ?>;
 	var chtotalscukg   = <?php if(isset($chtotalscukg)){echo $chtotalscukg; } ?>;
 	var chtotalscI     = <?php if(isset($chtotalscI)){echo $chtotalscI; } ?>;
 	var chtotalscII    = <?php if(isset($chtotalscII)){echo $chtotalscII; } ?>;
 	var chtotalscIII   = <?php if(isset($chtotalscIII)){echo $chtotalscIII; } ?>;
 	var chtotalscIV    = <?php if(isset($chtotalscIV)){echo $chtotalscIV; } ?>;
 	var chtotalscV     = <?php if(isset($chtotalscV)){echo $chtotalscV; } ?>;
 	var chtotalscVI    = <?php if(isset($chtotalscVI)){echo $chtotalscVI; } ?>;
 	var chtotalscVII   = <?php if(isset($chtotalscVII)){echo $chtotalscVII; } ?>;
 	var chtotalscVIII  = <?php if(isset($chtotalscVIII)){echo $chtotalscVIII; }?>;
 	var chtotalscIX    = <?php if(isset($chtotalscIX)){echo $chtotalscIX; } ?>;
 	var chtotalscX     = <?php if(isset($chtotalscX)){echo $chtotalscX; } ?>;
 	var chtotalscXI    = <?php if(isset($chtotalscXI)){echo $chtotalscXI; } ?>;
 	var chtotalscXII   = <?php if(isset($chtotalscXII)){echo $chtotalscXII; }?>;

new Chart(document.getElementById("bar-chart-horizontalsc"), {
    type: 'horizontalBar',
    data: {
      labels: ["LKG","UKG","I","II","III","IV","V","VI","VII","VIII","IX","X","XI","XII"],
      datasets: [
        {
          label: "students",
          backgroundColor: ["#ff0000", "#ff8000","#ffff00","#00ff80","#00ff00",
          "#00bfff","#ff0080","#8000ff","#0000ff","#00cca3","#ff0080","#b37700","#99cc00","#408000"],
          data: [chtotalsclkg, chtotalscukg, chtotalscI, chtotalscII, chtotalscIII, chtotalscIV, chtotalscV, chtotalscVI, chtotalscVII, chtotalscVIII, chtotalscIX, chtotalscX, chtotalscXI, chtotalscXII]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Number of Students in SC Category'
      }
    }
});
 <?php } ?>

 //ST
  <?php if($st>0){ ?>

  	var chtotalstlkg   = <?php if(isset($chtotalstlkg)){echo $chtotalstlkg; } ?>;
 	var chtotalstukg   = <?php if(isset($chtotalstukg)){echo $chtotalstukg; } ?>;
 	var chtotalstI     = <?php if(isset($chtotalstI)){echo $chtotalstI; } ?>;
 	var chtotalstII    = <?php if(isset($chtotalstII)){echo $chtotalstII; } ?>;
 	var chtotalstIII   = <?php if(isset($chtotalstIII)){echo $chtotalstIII; } ?>;
 	var chtotalstIV    = <?php if(isset($chtotalstIV)){echo $chtotalstIV; } ?>;
 	var chtotalstV     = <?php if(isset($chtotalstV)){echo $chtotalstV; } ?>;
 	var chtotalstVI    = <?php if(isset($chtotalstVI)){echo $chtotalstVI; } ?>;
 	var chtotalstVII   = <?php if(isset($chtotalstVII)){echo $chtotalstVII; } ?>;
 	var chtotalstVIII  = <?php if(isset($chtotalstVIII)){echo $chtotalstVIII; }?>;
 	var chtotalstIX    = <?php if(isset($chtotalstIX)){echo $chtotalstIX; } ?>;
 	var chtotalstX     = <?php if(isset($chtotalstX)){echo $chtotalstX; } ?>;
 	var chtotalstXI    = <?php if(isset($chtotalstXI)){echo $chtotalstXI; } ?>;
 	var chtotalstXII   = <?php if(isset($chtotalstXII)){echo $chtotalstXII; }?>;

new Chart(document.getElementById("bar-chart-horizontalst"), {
    type: 'horizontalBar',
    data: {
      labels: ["LKG","UKG","I","II","III","IV","V","VI","VII","VIII","IX","X","XI","XII"],
      datasets: [
        {
          label: "students",
          backgroundColor: ["#ff0000", "#ff8000","#ffff00","#00ff80","#00ff00",
          "#00bfff","#ff0080","#8000ff","#0000ff","#00cca3","#ff0080","#b37700","#99cc00","#408000"],
          data: [chtotalstlkg, chtotalstukg, chtotalstI, chtotalstII, chtotalstIII, chtotalstIV, chtotalstV, chtotalstVI, chtotalstVII, chtotalstVIII, chtotalstIX, chtotalstX, chtotalstXI, chtotalstXII]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Number of Students in ST Category'
      }
    }
});
 <?php } ?>

 //OBC
 <?php if($obc>0){ ?>

 	var chtotalobclkg   = <?php if(isset($chtotalobclkg)){echo $chtotalobclkg; } ?>;
 	var chtotalobcukg   = <?php if(isset($chtotalobcukg)){echo $chtotalobcukg; } ?>;
 	var chtotalobcI     = <?php if(isset($chtotalobcI)){echo $chtotalobcI; } ?>;
 	var chtotalobcII    = <?php if(isset($chtotalobcII)){echo $chtotalobcII; } ?>;
 	var chtotalobcIII   = <?php if(isset($chtotalobcIII)){echo $chtotalobcIII; } ?>;
 	var chtotalobcIV    = <?php if(isset($chtotalobcIV)){echo $chtotalobcIV; } ?>;
 	var chtotalobcV     = <?php if(isset($chtotalobcV)){echo $chtotalobcV; } ?>;
 	var chtotalobcVI    = <?php if(isset($chtotalobcVI)){echo $chtotalobcVI; } ?>;
 	var chtotalobcVII   = <?php if(isset($chtotalobcVII)){echo $chtotalobcVII; } ?>;
 	var chtotalobcVIII  = <?php if(isset($chtotalobcVIII)){echo $chtotalobcVIII; }?>;
 	var chtotalobcIX    = <?php if(isset($chtotalobcIX)){echo $chtotalobcIX; } ?>;
 	var chtotalobcX     = <?php if(isset($chtotalobcX)){echo $chtotalobcX; } ?>;
 	var chtotalobcXI    = <?php if(isset($chtotalobcXI)){echo $chtotalobcXI; } ?>;
 	var chtotalobcXII   = <?php if(isset($chtotalobcXII)){echo $chtotalobcXII; }?>;

new Chart(document.getElementById("bar-chart-horizontalbc"), {
    type: 'horizontalBar',
    data: {
      labels: ["LKG","UKG","I","II","III","IV","V","VI","VII","VIII","IX","X","XI","XII"],
      datasets: [
        {
          label: "students",
          backgroundColor: ["#ff0000", "#ff8000","#ffff00","#00ff80","#00ff00",
          "#00bfff","#ff0080","#8000ff","#0000ff","#00cca3","#ff0080","#b37700","#99cc00","#408000"],
          data: [chtotalobclkg, chtotalobcukg, chtotalobcI, chtotalobcII, chtotalobcIII, chtotalobcIV, chtotalobcV, chtotalobcVI, chtotalobcVII, chtotalobcVII, chtotalobcIX, chtotalobcX, chtotalobcXI, chtotalobcXII]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Number of Students in OBC Category'
      }
    }
});
 <?php } ?>

 //DNC
  <?php if($dnc>0){ ?>
  	var chtotaldnclkg   = <?php if(isset($chtotaldnclkg)){echo $chtotaldnclkg; } ?>;
 	var chtotaldncukg   = <?php if(isset($chtotaldncukg)){echo $chtotaldncukg; } ?>;
 	var chtotaldncI     = <?php if(isset($chtotaldncI)){echo $chtotaldncI; } ?>;
 	var chtotaldncII    = <?php if(isset($chtotaldncII)){echo $chtotaldncII; } ?>;
 	var chtotaldncIII   = <?php if(isset($chtotaldncIII)){echo $chtotaldncIII; } ?>;
 	var chtotaldncIV    = <?php if(isset($chtotaldncIV)){echo $chtotaldncIV; } ?>;
 	var chtotaldncV     = <?php if(isset($chtotaldncV)){echo $chtotaldncV; } ?>;
 	var chtotaldncVI    = <?php if(isset($chtotaldncVI)){echo $chtotaldncVI; } ?>;
 	var chtotaldncVII   = <?php if(isset($chtotaldncVII)){echo $chtotaldncVII; } ?>;
 	var chtotaldncVIII  = <?php if(isset($chtotaldncVIII)){echo $chtotaldncVIII; }?>;
 	var chtotaldncIX    = <?php if(isset($chtotaldncIX)){echo $chtotaldncIX; } ?>;
 	var chtotaldncX     = <?php if(isset($chtotaldncX)){echo $chtotaldncX; } ?>;
 	var chtotaldncXI    = <?php if(isset($chtotaldncXI)){echo $chtotaldncXI; } ?>;
 	var chtotaldncXII   = <?php if(isset($chtotaldncXII)){echo $chtotaldncXII; }?>;
new Chart(document.getElementById("bar-chart-horizontaldnc"), {
    type: 'horizontalBar',
    data: {
      labels: ["LKG","UKG","I","II","III","IV","V","VI","VII","VIII","IX","X","XI","XII"],
      datasets: [
        {
          label: "students",
          backgroundColor: ["#ff0000", "#ff8000","#ffff00","#00ff80","#00ff00",
          "#00bfff","#ff0080","#8000ff","#0000ff","#00cca3","#ff0080","#b37700","#99cc00","#408000"],
          data: [chtotaldnclkg, chtotaldncukg, chtotaldncI, chtotaldncII, chtotaldncIII, chtotaldncIV, chtotaldncV, chtotaldncVI, chtotaldncVII, chtotaldncVIII, chtotaldncIX, chtotaldncX, chtotaldncXI, chtotaldncXII]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Number of Students in DNC Category'
      }
    }
});
 <?php } ?>

 //Others
  <?php if($others>0){ ?>

  	var chtotalothlkg   = <?php if(isset($chtotalothlkg)){echo $chtotalothlkg; } ?>;
 	var chtotalothukg   = <?php if(isset($chtotalothukg)){echo $chtotalothukg; } ?>;
 	var chtotalothI     = <?php if(isset($chtotalothI)){echo $chtotalothI; } ?>;
 	var chtotalothII    = <?php if(isset($chtotalothII)){echo $chtotalothII; } ?>;
 	var chtotalothIII   = <?php if(isset($chtotalothIII)){echo $chtotalothIII; } ?>;
 	var chtotalothIV    = <?php if(isset($chtotalothIV)){echo $chtotalothIV; } ?>;
 	var chtotalothV     = <?php if(isset($chtotalothV)){echo $chtotalothV; } ?>;
 	var chtotalothVI    = <?php if(isset($chtotalothVI)){echo $chtotalothVI; } ?>;
 	var chtotalothVII   = <?php if(isset($chtotalothVII)){echo $chtotalothVII; } ?>;
 	var chtotalothVIII  = <?php if(isset($chtotalothVIII)){echo $chtotalothVIII; }?>;
 	var chtotalothIX    = <?php if(isset($chtotalothIX)){echo $chtotalothIX; } ?>;
 	var chtotalothX     = <?php if(isset($chtotalothX)){echo $chtotalothX; } ?>;
 	var chtotalothXI    = <?php if(isset($chtotalothXI)){echo $chtotalothXI; } ?>;
 	var chtotalothXII   = <?php if(isset($chtotalothXII)){echo $chtotalothXII; }?>;

new Chart(document.getElementById("bar-chart-horizontalothers"), {
    type: 'horizontalBar',
    data: {
      labels: ["LKG","UKG","I","II","III","IV","V","VI","VII","VIII","IX","X","XI","XII"],
      datasets: [
        {
          label: "students",
          backgroundColor: ["#ff0000", "#ff8000","#ffff00","#00ff80","#00ff00",
          "#00bfff","#ff0080","#8000ff","#0000ff","#00cca3","#ff0080","#b37700","#99cc00","#408000"],
           data: [chtotalothlkg, chtotalothukg, chtotalothI, chtotalothII, chtotalothIII, chtotalothIV, chtotalothV, chtotalothVI, chtotalothVII, chtotalothVIII, chtotalothIX, chtotalothX, chtotalothXI, chtotalothXII]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Number of Students in Other Category'
      }
    }
});
 <?php } ?>
</script>

<script>
$(document).ready(function() {
    $('#caste_info').DataTable( {
        dom: 'Bfrtip',
        buttons: [
		'excel', 'csv', {
                          extend: 'pdf',
                          
						},'copy', 'print', 
	],"lengthMenu": [
		[10, 25, 50, -1],
		[10, 25, 50, "All"]
	]
    });
</script>