<?php

    class APIView {

        public function response($data, $code) {
            header("Content-Type: application/json");
            header("HTTP/1.1 " . $code . " " . $this->requestStatus($code));
            echo json_encode($data);
        }
    
        private function requestStatus($code) {
            $status = array(
              200 => "OK",
              404 => "Not found",
              500 => "Internal Server Error"
            );
            return (isset($status[$code]))? $status[$code] : $status[500];
        }

        public function vardampea($data) {
            var_dump($data);
        }

    }