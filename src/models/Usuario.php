class Usuario {
    private $id;
    private $nombre;
    private $correo;

    public function __construct($id, $nombre, $correo) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }

    // Aquí se pueden agregar métodos para interactuar con la base de datos
}