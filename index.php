<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulário de Seleção de Acessórios - Montadora HONDA Veículos</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <style>
        </style>
    </head>
    <body class="container">
    
       
            <form method = "post" action="index.php">
               
           
        
        <div class="col-sm-8">
            <div class="form-group">
                <h1 class="container"><p>Formluário de Seleção de Acessórios - Montadora HONDA Veículos</p></h1>
                <label for="corCarro">Cor do Veículo:</label>
                <input type="text" class="form-control" id="cor" placeholder="Digite a cor do Veículo" name="cor" >
            </div>
            <div class="form-group">
                <label>Modelo do Veículo</label>
                <select class="form-control" name="modelo" >
                    <option value="" >Selecione um Modelo</option>
                    <option value="Civic" >Civic</option>
                    <option value="Accord" >Accord</option>
                    <option value="CR-V" >CR-V</option>
                    <option value="HR-V" >HR-V</option>
                    <option value="Fit" >Fit</option>
                    <option value="City" >City</option>
                    <option value="WR-V" >WR-V</option>
                    <option value="Jazz" >Jazz</option>
                    <option value="Pilot" >Pilot</option>
                    <option value="Odyssey" >Odyssey</option>
                </select>
                
            </div>
            <div class="form-group">
                <label>Acessórios:</label>
                <div class="chekbox" >
                    <label><input type="checkbox" name="acessorios[]" value="Rodas de Liga Leve">
                        Rodas de Liga Leve
                    </label><br>
                    <label><input type="checkbox" name="acessorios[]" value=" Teto Solar">
                        Teto Solar
                    </label><br>
                    <label><input type="checkbox" name="acessorios[]" value="Bancos em Couro">
                        Bancos em Couro
                    </label><br>
                    <label><input type="checkbox" name="acessorios[]" value="Ar-Condicionado Digital">
                        Ar-Condicionado Digital
                    </label><br>
                    <label><input type="checkbox" name="acessorios[]" value="Central Multimidia">
                        Central Multimídia
                    </label><br>
                    <label><input type="checkbox" name="acessorios[]" value="Sensor de Estacionamento">
                        Sensor de Estacionamento
                    </label><br>
                    <label><input type="checkbox" name="acessorios[]" value="Camera de Re">
                        Câmera de Ré
                    </label><br>
                    <label><input type="checkbox" name="acessorios[]" value="Farois de LED">
                        Farois de LED
                    </label><br>
                    <label><input type="checkbox" name="acessorios[]" value="Bancos com Aquecimentos">
                        Bancos com Aquecimentos
                    </label><br>
                    <label><input type="checkbox" name="acessorios[]" value="Sistema de Navegação GPS">
                        Sistema de Navegação GPS
                    </label><br>
                    <label><input type="checkbox" name="acessorios[]" value="Sensor de Chuva">
                        Sensor de Chuva
                    </label><br>
                    <label><input type="checkbox" name="acessorios[]" value="Controle de Cruzeiro">
                        Controle de Cruzeiro
                    </label><br>
                </div>
                <div class="form-group">
                    <br><label for="Obs">Observações:</label>
                    <textarea class="form-control" id="obs" name="obs"
                              rows="5" placeholder="Digite quaisquer Observações"></textarea>
                       
            </div>
                <div class="form-group">
                    <input type="submit" name="enviar" value="Confirmar seleção de acessórios"
                           class="btn btn-primary" >
                    <td> 
                    <input type="reset" name="Limpar" value="Limpar Campos"
                           class="btn btn-danger" >
                </td>
                </div>
                
                
        </div>
        <?php
           if($_POST){
            if (isset($_POST['enviar'])) {
             @$Cor = $_POST['cor'];
             @$Modelo = $_POST['modelo'];
             @$Acessorios = $_POST['acessorios'];
             @$Observacoes = $_POST['obs'];

             $camposVazios = []; // vet sem max
             if (empty($Cor)) {
                 $camposVazios[] = "Cor do Veiculo";
             }
             if (empty($Modelo)) {
                 $camposVazios[] = "Modelo";
             }
             if (empty($Acessorios)) {
                 $camposVazios[] = "Acessórios";
             }
             if (empty($Observacoes)) {
                 $camposVazios[] = "Observações";
             }

             if (!empty($camposVazios)) { // se estiver algum vazio
                 echo '<div class="alert alert-danger"> Os seguintes campos estão vazios: ' . implode(", ", $camposVazios) .'</div>';
             } else {
                 $acessoriossetal = implode(", ", $Acessorios);
                 echo '<div class="panel panel-success">
                            <div class="panel-heading">Dados Informados</div>
                            <div class="panel-body"> Cor do Veículo: ' . $Cor . '<br><br>
                                Modelo: ' . $Modelo . '<br><br>
                                    Acessórios: ' . $acessoriossetal . '<br><br>
                                        Observações: ' . $Observacoes . '
                                            </div>';
             }
           }
        }
           
        ?>
            </form>
    </body>
</html>
