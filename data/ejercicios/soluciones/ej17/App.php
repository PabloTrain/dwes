<?php 

class App{

    //Método que llamaremos desde el Index para imprimir
    public function index(){
        echo "<br>Estamos en el index";
        $this->fibonacci();//Método fibonacci
        $this->potencias2();//Método potencias2
        $this->factoriales();//Método factoriales
        $this->primos();//Método primos
    }

    //Método fibonacci - Menores de un millón
    public function fibonacci(){
        //Incluimos la vista donde trabajaremos
        include('views/fibonacci.php');

        //Declaramos y asignamos las variables necesarias para calcular la serie
        $suma = 1;
        $num1 = 0;
        $num2 = 1;

        do{
            //Guardamos el resltado en un array
            $arrayfibonacci []= $suma;
            
            //Realizamos las operaciones necesarias
            $suma = $num1 + $num2;
            $num1 = $num2;
            $num2 = $suma;

        }while($suma<1000000);//Solo recoge los menores de un millon

        //Recorremos el array anteriormente y lo imprimos
        foreach($arrayfibonacci as $num){
            echo $num . "<br>";
        }

    }

    //Método potencias2 - valores de las potencias de 2 hasta 2 elevado a 24
    public function potencias2(){
        //Incluimos la vista donde trabajaremos
        include('views/potencias2.php');

        //bucle para rellenar el array hasta 2 elevado a 24
        for ($i = 0; $i <= 24; $i++){
            $arraypotencias2[] = pow(2, $i); //con pow(potencia, num) se calcula la potencia de cualquier número
        }

        //bucle para imprimir las potencias
        foreach($arraypotencias2 as $pot2){
            echo $pot2 . "<br>";
        }
    }

    //Método factoriales - 1 hasta n, n más cerca al millón
    public function factoriales(){
        //Incluimos la vista donde trabajaremos
        include('views/factoriales.php');

        //Variables para calcular los factoriales
        $aux = 1;
        $factorial = 0;

        //Bucle do while para rellenar el array
        do{
            $factorial++;
            $aux = 1;
            for ($i=1; $i<=$factorial ; $i++) { 
                $aux*= $i;
                
            }
            //Array para guadar los factoriales
            $arrayfactoriales[] =$aux;

        }while($aux<=1000000);//EL bucle cuando llega al resultado de un factorial más cercano al millon termina
        
        //Variable para mostrar de que número es el resultado
        $num = 1;
        
        //Bucle para mostrar el resultado del array anterior
        foreach($arrayfactoriales as $fact){
            echo "Factorial del " . $num . " ->" . $fact . "<br>";
            $num++;
        }
    }

    

    //Método primos - Primos entre 1 y 10000
    public function primos(){
         //Incluimos la vista donde trabajaremos
        include('views/primos.php');

        //Primer bucle hasta 1000 - para calcular los primos entre 1 y 10.000
        for ($i = 1; $i <= 10000; $i++){

            //Variable para saber el número de divisores de un número
            //Cada vez que pasa a un nuevo número se reinicia a 0 el cotador
            $contar = 0;
            
            //Segundo bucle para ir dividiendo entre el anterior bucle 
            for ($j = 1; $j <= $i; $j++){
                
                //Si es divisible sumamos al contador
                if ($i%$j == 0){
                   $contar++;     
                }
            }

            //Un número es primo si solo tiene como divisores el mismo y el 1, es decir, 2 divisores
            if($contar<=2){
                //En ese caso se guarda el número
                $arrayprimos[] = $i;
            }
        }

        //Bucle para imprimir el resultado del array
        foreach($arrayprimos as $prim){
            echo $prim . "<br>";
        }
    }
}