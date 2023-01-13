<? 
include'traits.php';
class database{
	public $error = false;

	protected
	$db,
	$field,
	$table,
	$query,
	$where=0,
	$select='*',
	$order='',
	$groupby='',
	$between=0,
	$limit = 0,
	$conn,
	$final_query,
	$string;

	function __construct($host,$user,$pass,$dbname)
	{
	$this->db= mysqli_connect($host,$user,$pass,$dbname);
	// echo'<pre>';
	// print_r($this->db);
	}

	function __destruct(){

		if($this->db->affected_rows < 0)
		{
			?>
			<style type="text/css">
				.db-error{
					background-color: #b1463b;
					color: white;
					border: 1px solid black;
					border-radius: 12px;
					padding: 10px;
					font-size: 2em;		
					padding-left: 19px;
				}
			</style>
			<?
		   foreach ($this->db->error_list as $key => $value) {
			 $error='<div class="db-error">';
			 $error.="<strong> Error Number : ".$value['errno']."</strong> <p><strong> Error :</strong>".$value['error']."</p>";
			 $error.='</div>';
				
			}
			if($this->error){
				$error .= '<br><div class="db-error">';
				$error .= "<strong><p><strong>Query : </strong>".$this->final_query."</p>";
				$error .= '</div>';

			}
			exit($error);
		}

		mysqli_close($this->db);
	}


	function query($query=""){
		if (!empty($query)) {
			$this->query = $query.'';
			$this->alter_fun();
		}
		$this->final_query = $this->query;
		$this->close_con();

		///echo $this->final_query;
		$this->conn = $this->db->query($this->final_query);

		return $this;
	}

	function last_query(){
		return $this->final_query;
	}

	function insert_id(){
		print_r($this->db);
		return $this->db->insert_id;
	}


	function result($type = 'array'){
		$data =[];
		if($this->num_rows()){
			while($row =$this->conn->fetch_assoc()){
				$data[]=$type =='array' ? (array) $row : (object) $row;
			}
		}
		return $type =='array' ? (array) $data :(object) $data;
	}


	function row($type = 'array'){

		$record = $this->conn->fetch_assoc();
		return $type == 'array'
					? (array) $record
					: (object) $record;
	}

	function getpri($table){
		$column = query("SHOW COLUMNS FROM $table WHERE `key`");
		return $column->fetch_assoc()['Field'];	


	}

	

	function alter_fun(){
		if($this->where){
			$this->query.= 'WHERE '.$this->where;
		}
		if(!empty($this->order)){
			$this->query.=' '.$this->order; 
		}
		if($this->limit){
			$this->query.=' '.$this->limit; 
		}
		if(!empty($this->between)){
			$this->query.=' '.$this->between; 
		}
		if(!empty($this->groupby)){
			$this->query.=' '.$this->groupby;
		}

	}


	function num_rows(){
		$num = $this->conn->num_rows;
		return $num ? $num : 0;
	}

	function init_table($table=''){
		$this->table = $table;
		if(!empty($this->table))
			return true;
	}

	function get($table=''){
		$this->init_table($table);

		// echo $this->select;
		$this->query = "SELECT $this->select From $this->table ";
		$this->alter_fun();
		// echo $this->query;
		// exit;
		return $this->query();
	}

	function close_con()
	{
			$this->query='';
			$this->table='';
			$this->between='';
			$this->select='*';
			$this->where = 0;
			$this->field = 0;
			$this->limit = 0;
			$this->order='';


	}

	function or_where($where='',$value='')
	{
		if(!empty($where)){
			$d='';
			if(is_array($where)){
				foreach ($where as $field => $value) {
					$d.="`$field` = '$value' OR";
				}
				$d=trim($d,'OR');
			}
			else{
				 $d="`$where` = '$value' OR";
				$d=trim($d,'OR');

			}
			if(!$this->where)
				$this->where = $d;
			else
				$this->where.= 'OR' .$d;
		}

		// echo $this->where;
		return $this;
	}

	function where($where='',$value='')
	{
		if(!empty($where)){
			$d='';
			if(is_array($where)){
				foreach ($where as $field => $value) {
					$d.="`$field` = '$value' AND";
				}
				$d=trim($d,'AND');
			}
			else{
				 $d="`$where` = '$value' AND";
				$d=trim($d,'AND');

			}
			if(!$this->where)
				$this->where = $d;
			else
				$this->where.= 'AND' .$d;
		}

		// echo $this->where;
		return $this;
	}

	function set_field($field = '',$value = ''){

		if(!empty($field)){
			$d = '';
			if(is_array($field)){
				foreach($field as $in => $v){
					$d .= " `$in` = '$v' ,";
				}
				$d = trim($d,',');
			}
			else{
				$d = " `$field` = '$value'";
			}

			if(!$this->field)
				$this->field = $d;
			else
				$this->field .= ','.$d;

		}
		// echo $this->field;
		 
		return $this;
	}

	function select($string='*'){
		$d='';
		if(is_string($string)){
			$d=$string;
		}
		elseif (is_array($string)) {
			foreach ($string as $value) {
				$d=" $value ,";
			}
			$d=trim($d,',');
		}
		if(!$this->string=='*')
			$this->select=$d;
		else
		$this->select=" , $d";

		// echo $this->string;
		return $this;
	}

	function update($table=''){
		$this->init_table($table);
		$this->query = "UPDATE $this->table SET $this->field WHERE $this->where";
		// echo $this->query;
		return $this->query();

	}

	function delete($table=''){
		$this->init_table($table);
		$this->query = "DELETE FROM $this->table WHERE $this->where";

		echo $this->query;
		return $this->query();
	}

	function orderby($field='',$order='ASC'){

		$d= " ORDER BY $field $order";
		if(!empty($this->order))
			$this->order .= $d;
		else
			$this->order = $d;
		return $this;

	}

	function groupby($field=''){
		$d =" GROUP BY $field";
		if(!empty($this->groupby))

			$this->groupby .= $d;
		else
			$this->groupby = $d;
		// echo $this->groupby;
		return $this;
	}

	function limit($limit=0){
		$this->limit = " LIMIT .$limit";
		return $this;

	}

	function distinct($table=''){
		$this->init_table($table);
		$this->query = "SELECT DISTINCT $this->select FROM $this->$table ";
		return $this->query();
	}

	function between($fvalue='',$lvalue=''){
		$this->between = "BETWEEN $fvalue AND $lvalue";
		return $this;
	}

	function insert($table='',$data=[]){
		$this->init_table($table);

		if(is_array($data) AND count($data)){
			$field = $value ='';
			foreach ($data as $index => $val) {
				$field = "`$index` ,";
				$value = "`$val` ,";
			}
			$field=trim($field);
			$value=trim($value);

			$this->query = "INSERT INTO $this->table( $field ) VALUES ( $value )";

		}
		return $this->query();

	}




	
}

// $main= new database	('localhost','root','12345678','admin');

// echo'<pre>';
// print_r($main->db);

 // $main->or_where(['name'=>'deepak']);  // call or where function
 // $main->or_where(['name'=>'deepak']); // call and where
 // $main->set_field("name",'deepak');  // call set field function
// $main->select('deepak,name,pafdsdf'); // select function

 // $main->set_field(['name'=>'Deepak'])->and_where(['id'=>'Deepak'])->update('Depak');
// $main->select('name,id')->where('id','2')->get('Deepak');

// $main->select('name,id')->where('id','2')->groupby('name')->get('Deepak');

// $main->select('name,id')->where('id','2')->orderby('name')->get('Deepak');

// $main->select('name,id')->where('id','2')->between(10,20)->get('Deepak');


// $main->where('id','2')->delete('deepaak');












/*==================================================
+												 +
+												 +
+												 +
+					CARD CLASS					 +
+												 +
+												 +
==================================================*/

define('box','card');
define('box_header','card-header');
define('box_body','card-body');
define('box_footer','card-footer');

class card
{
	protected $class;

	function __construct($type = box.'-primary'){
		$this->class = $type;
	}

	function open_card($title = '',$class =''){
		echo'<div class="'.box.' '.$this->class.'">
				<dic class="'.box_header.'">
					<strong>'.$title.'</strong>
				</div>
			<div class="'.box_body.' '.$class.'">';

	}

	function box_footer($class = ''){

		echo '<div class="'.box_footer.' '.$color.'">';

	}

	function close_div($num=1){
		return str_repeat('</div>',$num);

	}
}



/*==================================================
+												 +
+												 +
+												 +
+					FORM CLASS					 +
+												 +
+												 +
==================================================*/

class form 
{
	protected $lable;

	

		function create_form($action ='',$method ='POST',$class = ''){
			echo "<form action = '$action' method ='$method' class = '$class'";

		}

		function create_form_multipart($action ='',$method ='POST',$class = ''){
			echo "<form action = '$action' enctype = 'multipart/form-data' method ='$method' class = '$class'";

		}

		function gen_name(){
			return strtolower(str_replace([' ','-'],'-',clean($this->lable)));
		}

		function lable($lable){
			$this->lable=trim($lable);
			return '<label for ="'.$this->gen_name().'">'.$lable.'</lable>';
		}

		function select($name,$option=[]){
			$html ='<select value = "'.$name.'" class="form-control">';
			foreach ($option as $opt => $val) {
				$html.='<option value ="'.$opt.'">'.$val.'<option>';
			}
			$html.='</select>';
			return $html;
		}


		function input($type= 'text',$attr='',$value='',$option = []){
			$attributes ='';
			if(is_array($attr))
			{
				$attr['class'] = isset($attr['class']) ? $attr['class'] : 'form-control';

				foreach ($attr as $key => $value)
				{
					$attributes .= "$key = '$value";
				}

			}
			else
			{
				$attributes.=' '.(empty($attr) ? 'class="form-control"' : $attr);

			}
			if($type == 'select')
				$html = '<select ';
			else
				$html .='<input type ="'.$type.'" value="'.$value.'" ';
			$html.=' name = "'.$this->gen_name().'" id="'.$this->gen_name().'" '.$attributes.'>';

			if($type =='select'){
				$html .='<option value="">---Select '.ucwords(str_replace('select','',strtolower($this->lable))).'--<option>';	

			foreach ($options as $key => $option) {
				$selected =(!empty($value) AND $key == $value) ? 'selected' : '';

					$html .= "<option value='$key' $selected>$option</option>";

			}
				$html .= '</select>';

			}
			return $html;
		}

		function hidden_input($type = '',$name = '',$value = ''){
			return '<input type = "'.$type.'" name = "'.$name.'" value = "'.$value.'" >';
		}
		function form_field($label,$type = 'text',$attr = '',$value = '',$options=array()){
			echo '<div class="form-group">
					'.
					$this->lable($label)
					.
					$this->input($type,$attr,$value,$options)

					.'
				</div>';

		}

		function button($type = 'submit',$lable = 'Submit' ,$class='btn-success'){
			echo '<button type = "'.$type.'"  class = "btn '.$class.'">'.$lable.'</button>';
		}

		function close_form(){
			
			return "\n</form>\n";
		
		}





	
}



?> 






















































































































































































































