<?php
    function insert($nama_tabel, $form_data)
    {
        // mengambil array
        $fields = array_keys($form_data);

        // membuat query
        $sql = "INSERT INTO ".$nama_tabel."
        (`".implode('`,`', $fields)."`)
        VALUES('".implode("','", $form_data)."')";

        // mengembalikan nilai hasil query
        return $sql;
    }

    function update($nama_tabel, $form_data, $where_clause='')
    {
        // mengecek opsional klausa where
        $whereSQL = '';
        if(!empty($where_clause))
        {
            // mengecek apakah terdapat klausa where
            if(substr(strtoupper(trim($where_clause)), 0, 5) != 'WHERE')
            {
                // jika tidak ditemukan keyword where, menambah keyword
                $whereSQL = " WHERE ".$where_clause;
            } else
            {
                $whereSQL = " ".trim($where_clause);
            }
        }
        // memulai statement sql
        $sql = "UPDATE ".$nama_tabel." SET ";

        // perulangan untuk membuat set pada kolom /
        $sets = array();
        foreach($form_data as $column => $value)
        {
            $sets[] = "`".$column."` = '".$value."'";
        }
        $sql .= implode(', ', $sets);

        // menambah statement ke where
        $sql .= $whereSQL;

        // mengembalikan nilai sql
        return $sql;
    }

    function delete($nama_tabel, $where_clause='')
    {
        // mengecek opsional klausa where
        $whereSQL = '';
        if(!empty($where_clause))
        {
            // mengecek apakah terdapat klausa where
            if(substr(strtoupper(trim($where_clause)), 0, 5) != 'WHERE')
            {
                // jika tidak ditemukan keyword where, menambah keyword
                $whereSQL = " WHERE ".$where_clause;
            } else
            {
                $whereSQL = " ".trim($where_clause);
            }
        }
        // memulai statement sql
        $sql = "DELETE FROM ".$nama_tabel.$whereSQL;

        // mengembalikan nilai sql
        return $sql;
    }

    function upload_img($file_tmp, $file_nama, $target){
        $target_dir = $target;
        $target_file = $target_dir . basename($file_nama);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        $check = getimagesize($file_tmp);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            return false;
        } else {
            if (move_uploaded_file($file_tmp, $target_file)) {
                echo "The file ". basename( $file_nama). " has been uploaded.";
                return true;
            } else {
                echo "Sorry, there was an error uploading your file.";
                return false;
            }
        }
    }