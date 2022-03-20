<?php
class PP {
    private $panjang;
    const Lebar = 10;
    function __construct($P)
    {
        $this->panjang = $P;
    }
    function getLuas()
    {
        return self::Lebar * $this->panjang;
    }
    function getKeliling()
    {
        return 2 * self::Lebar +  2 * $this->panjang;
    }
}
echo "LEBAR PERSEGI PANJANG " . PP::Lebar;
$pp1 = new PP( 30 );
$pp2 = new PP( 40 );

echo "<br/>Luas persegi panjang I ".$pp1->getLuas();
echo "<br>Luas persegi panjang II ".$pp2->getLuas();

echo "<br>Keliling persegi panjang I ".$pp1->getKeliling();
echo "<br>Keliling persegi panjang II ".$pp2->getKeliling();


?>