    <?php

    require_once 'fungsi-pesan-error.php';

    //panggil semua variabel error

    function validasi(array $listinput){
        //variabel berisi inputan form
        $request = $_REQUEST;
        
        $errors = [];
        
        //mengakses variabel $listpesanerror
        global $listpesanerror;

        //perulangan untuk array terluar (berisi nama input)
        foreach ($listinput as $input => $listrules){
            echo "periksa input <strong>{$input}</strong><br>";
                
                //menggunakan foreach untuk memanggil semua fungsi yg bernama 'lolos'
                foreach($listrules as $rules){
                    $namafungsi = 'lolos'.ucfirst($rules);
                    //validasi sesuai input form ny
                    $lolos = $namafungsi($request[$input]);
                    //buatkan bool (lolos/tidak lolos)

                    //jika tidak lolos
                    if(!$lolos){
                        if(!is_array($errors[$input])){
                            $errors += [$input => []];
                        }
                        array_push($errors[$input], $listpesanerror[$rules]($input));
                    }
                    echo "<br>";
                }
            echo "<br>";
        }
        return $errors;
    }
    function lolosRequired($nilai){
        return(bool)$nilai;
    }

    //fungsi validasi email
    function lolosEmail($nilai){
        return filter_var($nilai,FILTER_VALIDATE_EMAIL);
    }

    //fungsi lolos username menggunakan regex
    function lolosusername($nilai){
        preg_match("/^[a-zA-Z0-9_]+/", $nilai, $output);
        if(count($output)){
            return $output[0] === $nilai;
        }
        return false;
    }

    //fungsi lolos usia (harus menggunakan numeric)
    function lolosnumeric($nilai){
        return is_numeric($nilai);
    }

    ?>