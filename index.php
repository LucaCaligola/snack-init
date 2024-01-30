
class Persona {
    public $nome;
    public $cognome;
    public $age;



    public function __construct($nome, $cognome, $age) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->setAge($age);
    }

    public function getAge() {
        return $this->age;
    }
}