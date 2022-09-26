<?php
$conn = mysqli_connect("localhost", "root", "", "db_pol"); //db_pol


function query($query)
{
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
                $rows[] = $row;
        }
        return $rows;
}

function myaddslashes($string)
{
        $a = str_replace("'", "^", $string);
        return $a;
}

function mystripslashes($string)
{
        $a = str_replace("^", "'", $string);
        return $a;
}

function mystripslashesjs($string)
{
        $a = str_replace("^", " ", $string);
        return $a;
}

function replacemi($string)
{
        return str_replace("mi", "mill", $string);
}

function replacemins($string)
{
        return str_replace("mins", "menit", $string);
}
function curl_get_contents($url)
{
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
}
function cari($keyword)
{
        global $conn;
        $query = "SELECT * FROM tbl_pol
                        WHERE nama1 LIKE '%$keyword%' 
                        OR nama2 LIKE '%$keyword%'
                        OR nama3 LIKE '%$keyword%'
                        OR keterangan LIKE '%$keyword%'
        ";
        return query($query);
}
