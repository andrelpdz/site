<?php
namespace Controllers;

use Models\Dash;

class DashController {
    
    // Rota: andrelpdz.com.br/v2/dash/receive
    public function receive() {
        // Recebe o JSON vindo do cURL
        $json = file_get_contents('php://input');
        $data = json_decode($json, true);

        if ($data) {
            $model = new Dash();
            if ($model->saveAccess($data)) {
                http_response_code(200);
                echo json_encode(["status" => "success"]);
            }
        } else {
            http_response_code(400);
            echo json_encode(["status" => "invalid_data"]);
        }
    }

    // Rota: andrelpdz.com.br/v2/dash/visualizar
    public function visualizar() {
        // Aqui você carregaria a View com os gráficos do dashboard
        echo "Exibindo painel de controle dos clientes...";
    }
}
