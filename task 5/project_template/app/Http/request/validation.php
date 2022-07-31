<?php
namespace app\Http\request;

use app\Database\models\Model;

class validation
{
    private $value;
    private $valuename;
    private array $errors = [];
    public function getErrors()
    {

        return $this->errors;
    }
    public function setValue($value):self
    {
        $this->value=$value;
        return $this;
    }
    public function setValuename($valuename):self
    {
        $this->valuename=$valuename;
        return $this;
    }

    public function required():self
    {
        if (empty($this->value)) {
            $this->errors[$this->valuename][__FUNCTION__] = "{$this->valuename} is required";
        }
        return $this;
    }
    public function max(int $max):self
    {
        if (strlen($this->value) > $max) {
            $this->errors[$this->valuename][__FUNCTION__] = "{$this->valuename} is greater than {$max} ";
        }
        return $this;
    }
    public function min(int $min):self
    {
        if (strlen($this->value) < $min) {
            $this->errors[$this->valuename][__FUNCTION__] = "{$this->valuename} is less than {$min} ";
        }

        return $this;
    }
    public function confirmed($confermedpass):self
    {
        if ($this->value != $confermedpass) {
            $this->errors[$this->valuename][__FUNCTION__] = "{$this->valuename} not confirmed ";
        }

        return $this;
    }
    public function regex(string $pattern,$message=null):self
    {
        if (! preg_match($pattern,$this->value)) {
            $this->errors[$this->valuename][__FUNCTION__] =$message?? "{$this->valuename} invalid ";
        }
        return $this;
    }
    public function in(array $values):self
    {
        if (!in_array($this->value, $values)) {
            $this->errors[$this->valuename][__FUNCTION__] = "{$this->valuename} must be  " . implode($values);
        }

        return $this;
    }
    public function string():self
    {
        if (! is_string($this->value)){
            $this->errors[$this->valuename][__FUNCTION__] = "{$this->valuename} must be string ";
        }
        return $this;
    }
    public function getError(string $error) :?string
    {
        if (isset($this->errors[$error])) {
            foreach ($this->errors[$error] AS $error) {
                return $error;
            }
        }
        return null;
        
    }
    public function getMassege(string $error):string
    {
        return "<p class='text-danger front-weight-bold'>" . $this->getError($error) . "</p>";
        

    }
    public function unique(string $table,string $coloumn){
        $model=new Model;
        $stmt=$model->connection->prepare("SELECT *FROM {$table} WHERE {$coloumn}=?");
        $stmt->bind_param('s',$this->value);
        $stmt->execute();
        $result=$stmt->get_result();
        if($result->num_rows==1){
            $this->errors[$this->valuename][__FUNCTION__] = "{$this->valuename} is alredy exist ";


        }
        return $this;
    }
    public function exists(string $table,string $coloumn){
        $model=new Model;
        $stmt=$model->connection->prepare("SELECT *FROM {$table} WHERE {$coloumn}=?");
        $stmt->bind_param('s',$this->value);
        $stmt->execute();
        $result=$stmt->get_result();
        if($result->num_rows==0){
            $this->errors[$this->valuename][__FUNCTION__] = "{$this->valuename} does not exist";


        }
        return $this;
    }
}
