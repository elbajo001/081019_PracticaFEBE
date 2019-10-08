<!DOCTYPE html>
<?php
class Pokemon
{
    public $numero = 0;
    public $nombre = null;
    public $img = null;
    public $texto = null;

    function __construct(int $numero, string $nombre, string $img){
        $this->numero = $numero;
        $this->nombre = $nombre;
        $this->img = $img;

    }

    /**
     * Get the value of numero
     */ 
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */ 
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of img
     */ 
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set the value of img
     *
     * @return  self
     */ 
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

       /**
     * Get the value of texto
     */ 
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * Set the value of texto
     *
     * @return  self
     */ 
    public function setTexto($texto)
    {
        $this->texto = $texto;

        return $this;
    }
}

$pokes = array();
$pokes[0] = new Pokemon(0,'Druddigon', 'Druddigon.png');
$pokes[0]->setTexto("Este Pokémon suele ser muy buscado por los cazadores, debido a que por su extrema rareza se vende a muy alto precio");
$pokes[1] = new Pokemon(1,'Kadabra', 'Kadabra.png');
$pokes[1]->setTexto("Kadabra es un Pokémon de tipo psíquico introducido en la primera generación. Es la forma evolucionada de Abra.");
$pokes[2] = new Pokemon(2,'Pikachu', 'Pikachu.png');
$pokes[2]->setTexto("Pikachu almacena una gran cantidad de electricidad en sus mejillas");
$pokes[3] = new Pokemon(3,'Pupitar', 'Pupitar.png');
$pokes[3]->setTexto("Pupitar es muy rápido y destaca en ataque, defensa y vitalidad");
$pokes[4] = new Pokemon(4,'Tauros', 'Tauros.png');
$pokes[4]->setTexto("Tiene tres colas que le ayudan a ganar gran velocidad y mantener el equilibrio");




$c = $pokes[0];
if(isset($_GET["pokes"]))
{
    $n = $_GET["pokes"];
    if($n < count($pokes))
    {
        $c = $pokes[$n];
    }
    else
    {
        echo "Error, número dado no encontrado";
    }
            
}
else
{
    echo "Error, número de pokemon no especificado";

 
}

?>





<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device, initial-scale=1"/>
    <title>Página web con Server Side Scripting</title>
    <link rel="stylesheet" type="text/css" href="theme.css">
    <script src="arruinador.js"></script>

</head>
<body>
    <?php if($c != null):?>
        <div class="centrado carta">
            <div class="centrado caja">
                <h1><?php echo $c->getNombre(); ?></h1>
            </div>     

            <img class="centrado caja" src="<?php echo $c->getImg()?>"/>
            <p class="centrado caja"> 
                <?php echo $c->getTexto()?>
            </p>
            
            <form class = "centrado caja" method="get">
                <select name="pokes" onchange="this.form.submit()">
                    <option value"0"> --Seleccione--</option>
                    <option value="0">Druddigon</option>
                    <option value="1">Kadabra</option>
                    <option value="2">Pikachu</option>                
                    <option value="3">Pupitar</option>
                    <option value="4">Tauros</option>
                </select>
                
            </form>
        
            <p class="centrado caja"> 
                    Sitio web creado dinámicamente con la carta solicitada, usando PHP
            </p>    
            
        </div>   
    <?php endif;?>

</body>
</html>