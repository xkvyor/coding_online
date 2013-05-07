<?php
    define("CODE_TERMINATOR", "###end-of-code###");
    define("COMMAND_TERMINATOR", "###end-of-command###");
    define("INPUT_TERMINATOR", "###end-of-input###");
    echo var_dump($_POST);
    $code = $_POST['code'];
    $cmd = $_POST['cmd'];
    $input = $_POST['input'];
    
    $API_SERVER = "vmofchenliang.cloudapp.net";
    $PORT = 60001;
    
    $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
    /*$output = [];
    if ($socket == false)
    {
        $output['error'] = 'failed create socket';
    }
    else
    {
        $result = socket_connect($socket, $API_SERVER, $PORT);
        if ($result == false)
        {
            $output['error'] = 'failed to connect API server';
        }
        else
        {
            socket_write($socket, $code, strlen($code));
            socket_write($socket, CODE_TERMINATOR, strlen(CODE_TERMINATOR));
            socket_write($socket, $cmd, strlen($cmd));
            socket_write($socket, COMMAND_TERMINATOR, strlen(COMMAND_TERMINATOR));
            socket_write($socket, $input, strlen($input));
            socket_write($socket, INPUT_TERMINATOR, strlen(INPUT_TERMINATOR));

            $output['response'] = '';
            while($resp = socket_read($socket, 2048))
            {
                $output['response'] += $resp;
            }

            socket_close($socket);
        }

        echo json_encode($output);
    }
    */
?>