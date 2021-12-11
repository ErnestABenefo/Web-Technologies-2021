<? require ("credentials.php");

class DATABASE{
    public $db = null;
    public $results = null;

    public function connect(){
        mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE);

        if(mysqli_connect_errno()){
            return false;
        }else{
            return true;
        }
    }

    
    public function run($query){
        if(!$this->connect()){
            return false;
        }elseif($this->db == null){
            return false;
        }

        $this->results = mysqli_query($this->db, $query);
        if($this->results == false){
            return false;
        }else{
            return true;
        }
    }

    public function fetch(){
        if($this->results == null){
            return false;
        }elseif($this->results == false){
            return false;
        }

        return mysqli_fetch_assoc($this->results);
    }
}