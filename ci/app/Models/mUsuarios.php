<?php
namespace App\Models;
use CodeIgniter\Model;
class mUsuarios extends Model{

	protected $table = 'usuarios';
	protected $primaryKey = 'id_usuario';

	protected $useAutoIncrement = true;

	protected $returnType = 'array';
	protected $useSoftDeletes = false;

	protected $allowedFields = ['nombre','apellidos','edad', 'correo', 'contrasena'];

	protected $useTimestamps = false;
	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';
	protected $delatedField = 'deleted_at';

	protected $validationRules = [];
	protected $validationMessages = [];
	protected $skipValidation = false;

	public function obtenerUsuario($data){
		$Usuario = $this->db->table('usuarios');
		$Usuario->where($data);
		return $Usuario->get()->getResultArray();
	}


}
?>