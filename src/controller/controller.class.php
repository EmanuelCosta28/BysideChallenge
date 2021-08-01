<?php
/**
 * Class Veiculos
 *
 * Trabalha sobre BD Veiculos
 * @author Emanuel Costa
 * @version 1.0
 * 
 */
 

Class Veiculos{

    private $data;

    public function Veiculos($data){

        $this->setData($data);

    }

    private function setData($data){

        $this->data = $data;

    }

    public function getValidVehicles(){

        $veiculosValidos = array();

        foreach($this->data as $key=>$veiculos){

            if($veiculos['Marca'] != '' && $veiculos['Modelo'] != ''){

                $veiculosValidos[] = $this->data[$key];

            }

        }

        return $veiculosValidos;

    }

    public function getVehicleStatus(){

        $veiculosEstado = array();

        foreach($this->data as $veiculo=>$caracteristicas){

            if($caracteristicas['Marca'] != '' && $caracteristicas['Modelo'] != ''){
                $veiculosEstado[$veiculo]           = $this->data[$veiculo];
                $veiculosEstado[$veiculo]['Estado'] = 'Válido';
            } else {
                $veiculosEstado[$veiculo]           = $this->data[$veiculo];
                $veiculosEstado[$veiculo]['Estado'] = 'Inválido';
            }

        }

        return $veiculosEstado;

    }

    public function getNotWhiteVehicles(){
        
        $data = $this->getValidVehicles();

        $veiculosNaoBrancos = array();

        foreach($data as $veiculo=>$caracteristicas){

            if($caracteristicas['Cor'] != 'Branco'){
                
                $veiculosNaoBrancos[] = $data[$veiculo];
               
            }

        }

        return $veiculosNaoBrancos;

    }

    public function getHybridSUV(){

        $data = $this->getValidVehicles();

        $veiculosSUVHibridos = array();
        $preco               = "";
        

        foreach($data as $veiculo=>$caracteristicas){

            if($caracteristicas['Categoria'] == 'SUV' && $caracteristicas['Combustível'] == 'Hibrido'){
                
                $preco = str_replace("€", "", $caracteristicas['Preço']);

                if($preco > "18000"){
                    
                    $veiculosSUVHibridos[] = $data[$veiculo];

                }
                
            }

        }

        return $veiculosSUVHibridos;

    }

    public function getCheapest(){

        $data = $this->getValidVehicles();

        $veiculosMaisBaratos = array ();

        // Número de veículos mais baratos a retornar
        $numeroRetornar      = "5";

        foreach($data as $veiculo=>$caracteristicas){

            $data[$veiculo]['Preço'] = substr($caracteristicas['Preço'], 0, -6);
            $data[$veiculo]['Preço'] = str_replace(",", "", $data[$veiculo]['Preço']);
            $data[$veiculo]['Id']    = $veiculo;

        }
        
        usort($data, function($a, $b) {
            return $a['Preço'] - $b['Preço'];
        });

        for($i = 0; $i<$numeroRetornar; $i++){

            $veiculosMaisBaratos[$i] = $this->data[$data[$i]['Id']];

        }
        
        return $veiculosMaisBaratos;
    }

    public function getVehicleBrand(){

        $data = $this->getValidVehicles();

        // Marca a pesquisar
        $marca = 'Toyota';
        $veiculosMarca = array();

        foreach($data as $veiculo=>$caracteristicas){

            if($caracteristicas['Marca'] == $marca){
                
                $veiculosMarca[] = $data[$veiculo];
               
            }

        }

        return $veiculosMarca;

    }

}

?>