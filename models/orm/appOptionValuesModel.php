<?php
/**
 * Model for app_option_values
 * 
 * Generated by BlackPHP
 */

class appOptionValuesModel
{
	use ORM;

	/** @var int $option_value_id Llave primaria */
	private $option_value_id;

	/** @var int $option_id ID de la opción */
	private $option_id;

	/** @var string $value_key Clave del valor */
	private $value_key;

	/** @var string $value_label Etiqueta del valor */
	private $value_label;


	/** @var string $_table_name Nombre de la tabla */
	private static $_table_name = "app_option_values";

	/** @var string $_table_type Tipo de tabla */
	private static $_table_type = "BASE TABLE";

	/** @var string $_primary_key Llave primaria */
	private static $_primary_key = "option_value_id";

	/** @var bool $_timestamps La tabla usa marcas de tiempo para la inserción y edición de datos */
	private static $_timestamps = false;

	/** @var bool $_soft_delete La tabla soporta borrado suave */
	private static $_soft_delete = false;

	/** @var int|null $_deleted_status Valor a asignar en caso de borrado suave. */
	private static $_deleted_status = 0;

	/**
	 * Constructor de la clase
	 * 
	 * Se inicializan las propiedades de la clase.
	 * @param bool $default Determina si se utilizan, o no, los valores por defecto
	 * definidos en la base de datos.
	 **/
	public function __construct($default = true)
	{
		if($default)
		{
		}
	}

	public function getOptionValueId()
	{
		return $this->option_value_id;
	}

	public function setOptionValueId($value)
	{
		$this->option_value_id = $value === null ? null : (int)$value;
	}

	public function getOptionId()
	{
		return $this->option_id;
	}

	public function setOptionId($value)
	{
		$this->option_id = $value === null ? null : (int)$value;
	}

	public function getValueKey()
	{
		return $this->value_key;
	}

	public function setValueKey($value)
	{
		self::validateStringSize($value, 32);
		$this->value_key = $value === null ? null : (string)$value;
	}

	public function getValueLabel()
	{
		return $this->value_label;
	}

	public function setValueLabel($value)
	{
		self::validateStringSize($value, 255);
		$this->value_label = $value === null ? null : (string)$value;
	}
}
?>
