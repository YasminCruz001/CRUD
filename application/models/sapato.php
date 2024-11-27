 <?php 
include "conexao_bd.php";
/*Class Sapato_model extends CI_Model{
    public $modelo;


    public function __construct(){
    parent :: __construct();
}

    public function inserir(){
        $dados = array ("modelo" => $this->modelo);
        return $this->db->insert('post', $dados);
    }
    */

    Class Sapato
    {
    public $modelo;
    
    public function __construct($modelo)
    {
        $this->modelo = $modelo;
    }
    
    
    public function cadastrarSapato()
    {
    $sql = "INSERT INTO sapato(modelo) ";
    $sql .= "VALUES('$this->modelo')";

    return executarComando($sql);
    }
    }

   
?>



